<?php

namespace App\Command;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\Table;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\DBAL\Types\Type;

#[AsCommand(
    name: 'app:generate:entities',
    description: 'Generates Doctrine entities from database schema',
)]
class GenerateEntitiesCommand extends Command
{
    private Connection $connection;
    private ?AbstractSchemaManager $schemaManager = null;

    public function __construct(Connection $connection)
    {
        parent::__construct();
        $this->connection = $connection;
        
        if (!Type::hasType('enum')) {
            Type::addType('enum', 'Doctrine\DBAL\Types\StringType');
        }
        $this->connection->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }

    protected function configure(): void
    {
        $this->setDescription('Generates PHP entities from existing database tables');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Generating Entities from Database Schema');

        try {
            $schemaManager = $this->getSchemaManager();
            $tables = $schemaManager->listTables();

            foreach ($tables as $table) {
                $this->generateEntityClass($table, $io);
            }

            $io->success('All entities generated successfully!');
            return Command::SUCCESS;

        } catch (\Exception $e) {
            $io->error('Error: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }

    private function getSchemaManager(): AbstractSchemaManager
    {
        if (!$this->schemaManager) {
            $this->schemaManager = $this->connection->createSchemaManager();
        }
        return $this->schemaManager;
    }

    private function generateEntityClass(Table $table, SymfonyStyle $io): void
    {
        $className = $this->getClassName($table->getName());
        $entityCode = "<?php\n\nnamespace App\Entity;\n\nuse Doctrine\ORM\Mapping as ORM;\n";
        
        $entityCode .= "use Doctrine\Common\Collections\ArrayCollection;\n";
        $entityCode .= "use Doctrine\Common\Collections\Collection;\n\n";
        
        $entityCode .= "#[ORM\Entity]\n";
        $entityCode .= "class {$className}\n{\n";

        // Handle foreign keys first
        foreach ($table->getColumns() as $column) {
            if ($this->isForeignKey($table, $column)) {
                $entityCode .= $this->generateRelationshipProperty($table, $column);
            }
        }

        // Add regular columns
        foreach ($table->getColumns() as $column) {
            if (!$this->isForeignKey($table, $column)) {
                $entityCode .= $this->generateColumnProperty($column, $table);
            }
        }

        // Add methods
        foreach ($table->getColumns() as $column) {
            $entityCode .= $this->generateAccessors($column);
        }

        $entityCode .= "}\n";
        file_put_contents(__DIR__ . '/../../src/Entity/' . $className . '.php', $entityCode);
        $io->success("Generated entity: {$className}.php");
    }

    private function isForeignKey(Table $table, Column $column): bool
    {
        foreach ($table->getForeignKeys() as $foreignKey) {
            if (in_array($column->getName(), $foreignKey->getLocalColumns())) {
                return true;
            }
        }
        return false;
    }

    private function generateRelationshipProperty(Table $table, Column $column): string
    {
        foreach ($table->getForeignKeys() as $foreignKey) {
            if (in_array($column->getName(), $foreignKey->getLocalColumns())) {
                $targetEntity = $this->getClassName($foreignKey->getForeignTableName());
                $targetColumn = $foreignKey->getForeignColumns()[0];
                
                return <<<PROP

    #[ORM\ManyToOne(targetEntity: {$targetEntity}::class)]
    #[ORM\JoinColumn(name: '{$column->getName()}', referencedColumnName: '{$targetColumn}')]
    private ?{$targetEntity} \${$column->getName()} = null;

PROP;
            }
        }
        return '';
    }

    private function generateColumnProperty(Column $column, Table $table): string
    {
        $propertyCode = '';
        $columnName = $column->getName();
        $type = $this->mapDoctrineType($column);
        $attributes = ["type: '{$type}'"];

        // Add length for string types
        if ($type === 'string' && $column->getLength()) {
            $attributes[] = "length: {$column->getLength()}";
        }

        // Handle primary keys
        $primaryKeys = $table->getPrimaryKey() ? $table->getPrimaryKey()->getColumns() : [];
        if (in_array($columnName, $primaryKeys)) {
            $propertyCode .= "    #[ORM\Id]\n";
            if ($column->getAutoincrement()) {
                $propertyCode .= "    #[ORM\GeneratedValue]\n";
            }
        }

        $propertyCode .= "    #[ORM\Column(" . implode(', ', $attributes) . ")]\n";
        $propertyCode .= "    private " . $this->mapPhpType($type) . " \${$columnName};\n\n";

        return $propertyCode;
    }

    private function generateAccessors(Column $column): string
    {
        $name = $column->getName();
        $methodName = ucfirst($name);
        $type = $this->mapPhpType($this->mapDoctrineType($column));

        return <<<METHODS

    public function get{$methodName}(): {$type}
    {
        return \$this->{$name};
    }

    public function set{$methodName}({$type} \${$name}): self
    {
        \$this->{$name} = \${$name};
        return \$this;
    }

METHODS;
    }

    private function mapDoctrineType(Column $column): string
    {
        $type = $column->getName();
        return match ($type) {
            'integer' => 'integer',
            'varchar' => 'string',
            'text' => 'text',
            'datetime' => 'datetime',
            'date' => 'date',
            'time' => 'time',
            'enum' => 'string',
            default => 'string',
        };
    }

    private function mapPhpType(string $doctrineType): string
    {
        return match ($doctrineType) {
            'integer' => 'int',
            'datetime', 'date', 'time' => '\DateTimeInterface',
            default => 'string',
        };
    }

    private function getClassName(string $tableName): string
    {
        return str_replace('_', '', ucwords($tableName, '_'));
    }
}