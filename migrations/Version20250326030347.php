<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250326030347 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A3316DE2013A');
        $this->addSql('DROP TABLE author');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE product');
        $this->addSql('ALTER TABLE event ADD start_event TIME NOT NULL, DROP startEvent, CHANGE dateevent dateevent DATE NOT NULL');
        $this->addSql('ALTER TABLE event_registration DROP FOREIGN KEY event_registration_ibfk_1');
        $this->addSql('ALTER TABLE event_registration DROP FOREIGN KEY event_registration_ibfk_1');
        $this->addSql('ALTER TABLE event_registration CHANGE event_id event_id INT DEFAULT NULL, CHANGE registration_date registration_date VARCHAR(255) NOT NULL, CHANGE status status VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event_registration ADD CONSTRAINT FK_8FBBAD5471F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('DROP INDEX event_id ON event_registration');
        $this->addSql('CREATE INDEX IDX_8FBBAD5471F7E88B ON event_registration (event_id)');
        $this->addSql('ALTER TABLE event_registration ADD CONSTRAINT event_registration_ibfk_1 FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE person CHANGE id id VARCHAR(255) NOT NULL, CHANGE age age VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL, CHANGE available_at available_at DATETIME NOT NULL, CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE author (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, enabled VARCHAR(23) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, author_id INT NOT NULL, authors_id INT DEFAULT NULL, INDEX IDX_CBE5A3316DE2013A (authors_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A3316DE2013A FOREIGN KEY (authors_id) REFERENCES author (id)');
        $this->addSql('ALTER TABLE event ADD startEvent TIME DEFAULT NULL, DROP start_event, CHANGE dateevent dateevent VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event_registration DROP FOREIGN KEY FK_8FBBAD5471F7E88B');
        $this->addSql('ALTER TABLE event_registration DROP FOREIGN KEY FK_8FBBAD5471F7E88B');
        $this->addSql('ALTER TABLE event_registration CHANGE registration_date registration_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE status status ENUM(\'Pending\', \'Confirmed\', \'Canceled\') NOT NULL, CHANGE event_id event_id INT NOT NULL');
        $this->addSql('ALTER TABLE event_registration ADD CONSTRAINT event_registration_ibfk_1 FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_8fbbad5471f7e88b ON event_registration');
        $this->addSql('CREATE INDEX event_id ON event_registration (event_id)');
        $this->addSql('ALTER TABLE event_registration ADD CONSTRAINT FK_8FBBAD5471F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE available_at available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE person CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE age age INT NOT NULL');
    }
}
