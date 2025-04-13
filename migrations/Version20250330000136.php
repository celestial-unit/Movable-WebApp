<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250330000136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE destination CHANGE status status VARCHAR(50) NOT NULL, CHANGE routes routes LONGTEXT NOT NULL, CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY id_destination');
        $this->addSql('ALTER TABLE favorite CHANGE id_favorite id_favorite VARCHAR(255) NOT NULL, CHANGE id_destination id_destination INT DEFAULT NULL, CHANGE id_user id_user VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX id_destination ON favorite');
        $this->addSql('CREATE INDEX IDX_68C58ED926D4F35D ON favorite (id_destination)');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT id_destination FOREIGN KEY (id_destination) REFERENCES destination (id_destination)');
        $this->addSql('ALTER TABLE parkingspot DROP FOREIGN KEY fk_destination');
        $this->addSql('ALTER TABLE parkingspot CHANGE id_parking id_parking VARCHAR(255) NOT NULL, CHANGE is_accessible is_accessible VARCHAR(255) NOT NULL, CHANGE is_available is_available VARCHAR(255) NOT NULL, CHANGE parking_fees parking_fees VARCHAR(255) NOT NULL, CHANGE size size VARCHAR(255) NOT NULL, CHANGE notes notes VARCHAR(65535) NOT NULL, CHANGE id_destination id_destination INT DEFAULT NULL');
        $this->addSql('DROP INDEX fk_destination ON parkingspot');
        $this->addSql('CREATE INDEX IDX_67E0B2C126D4F35D ON parkingspot (id_destination)');
        $this->addSql('ALTER TABLE parkingspot ADD CONSTRAINT fk_destination FOREIGN KEY (id_destination) REFERENCES destination (id_destination)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE destination CHANGE status status VARCHAR(255) NOT NULL, CHANGE routes routes TEXT DEFAULT NULL, CHANGE description description TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED926D4F35D');
        $this->addSql('ALTER TABLE favorite CHANGE id_favorite id_favorite INT AUTO_INCREMENT NOT NULL, CHANGE id_user id_user INT NOT NULL, CHANGE id_destination id_destination INT NOT NULL');
        $this->addSql('DROP INDEX idx_68c58ed926d4f35d ON favorite');
        $this->addSql('CREATE INDEX id_destination ON favorite (id_destination)');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED926D4F35D FOREIGN KEY (id_destination) REFERENCES destination (id_destination)');
        $this->addSql('ALTER TABLE parkingspot DROP FOREIGN KEY FK_67E0B2C126D4F35D');
        $this->addSql('ALTER TABLE parkingspot CHANGE id_parking id_parking INT AUTO_INCREMENT NOT NULL, CHANGE is_accessible is_accessible TINYINT(1) NOT NULL, CHANGE is_available is_available TINYINT(1) NOT NULL, CHANGE parking_fees parking_fees FLOAT DEFAULT NULL, CHANGE size size INT DEFAULT NULL, CHANGE notes notes TEXT NOT NULL, CHANGE id_destination id_destination INT NOT NULL');
        $this->addSql('DROP INDEX idx_67e0b2c126d4f35d ON parkingspot');
        $this->addSql('CREATE INDEX fk_destination ON parkingspot (id_destination)');
        $this->addSql('ALTER TABLE parkingspot ADD CONSTRAINT FK_67E0B2C126D4F35D FOREIGN KEY (id_destination) REFERENCES destination (id_destination)');
    }
}
