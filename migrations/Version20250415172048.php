<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250415172048 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE destination CHANGE routes routes LONGTEXT DEFAULT NULL, CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamations DROP FOREIGN KEY reclamations_ibfk_1');
        $this->addSql('DROP INDEX idx_reclamations_date ON reclamations');
        $this->addSql('DROP INDEX idx_reclamations_category ON reclamations');
        $this->addSql('DROP INDEX idx_reclamations_status ON reclamations');
        $this->addSql('ALTER TABLE reclamations DROP FOREIGN KEY reclamations_ibfk_1');
        $this->addSql('ALTER TABLE reclamations CHANGE description description LONGTEXT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE creation_date creation_date DATETIME NOT NULL, CHANGE category category VARCHAR(50) DEFAULT \'General\' NOT NULL');
        $this->addSql('ALTER TABLE reclamations ADD CONSTRAINT FK_1CAD6B76A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('DROP INDEX user_id ON reclamations');
        $this->addSql('CREATE INDEX IDX_1CAD6B76A76ED395 ON reclamations (user_id)');
        $this->addSql('ALTER TABLE reclamations ADD CONSTRAINT reclamations_ibfk_1 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE reservation DROP firstName, DROP email, DROP agentType, DROP paymentMode, DROP TransportType, DROP lastName, DROP DriverName, DROP driver_id, CHANGE location location VARCHAR(255) NOT NULL, CHANGE status status VARCHAR(20) NOT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE age user_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955816C6140 FOREIGN KEY (destination_id) REFERENCES destination (id_destination)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849553414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849559909C13F FOREIGN KEY (transport_id) REFERENCES transport (id)');
        $this->addSql('CREATE INDEX IDX_42C84955A76ED395 ON reservation (user_id)');
        $this->addSql('CREATE INDEX IDX_42C84955816C6140 ON reservation (destination_id)');
        $this->addSql('CREATE INDEX IDX_42C849553414710B ON reservation (agent_id)');
        $this->addSql('CREATE INDEX IDX_42C849559909C13F ON reservation (transport_id)');
        $this->addSql('ALTER TABLE ticket ADD ticket_number VARCHAR(255) NOT NULL, ADD status VARCHAR(255) NOT NULL, DROP paymentMode, DROP transport, DROP destination, CHANGE bookingDate issue_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('ALTER TABLE transport ADD status VARCHAR(255) NOT NULL, ADD created_at DATETIME DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL, DROP disponibility, DROP destination');
        $this->addSql('ALTER TABLE users CHANGE role role ENUM(\'USER\', \'ADMIN\', \'DRIVER\')');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE destination CHANGE routes routes TEXT DEFAULT NULL, CHANGE description description TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamations DROP FOREIGN KEY FK_1CAD6B76A76ED395');
        $this->addSql('ALTER TABLE reclamations DROP FOREIGN KEY FK_1CAD6B76A76ED395');
        $this->addSql('ALTER TABLE reclamations CHANGE description description TEXT NOT NULL, CHANGE category category VARCHAR(50) DEFAULT \'General\', CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE creation_date creation_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamations ADD CONSTRAINT reclamations_ibfk_1 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX idx_reclamations_date ON reclamations (creation_date)');
        $this->addSql('CREATE INDEX idx_reclamations_category ON reclamations (category)');
        $this->addSql('CREATE INDEX idx_reclamations_status ON reclamations (status)');
        $this->addSql('DROP INDEX idx_1cad6b76a76ed395 ON reclamations');
        $this->addSql('CREATE INDEX user_id ON reclamations (user_id)');
        $this->addSql('ALTER TABLE reclamations ADD CONSTRAINT FK_1CAD6B76A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955816C6140');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849553414710B');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849559909C13F');
        $this->addSql('DROP INDEX IDX_42C84955A76ED395 ON reservation');
        $this->addSql('DROP INDEX IDX_42C84955816C6140 ON reservation');
        $this->addSql('DROP INDEX IDX_42C849553414710B ON reservation');
        $this->addSql('DROP INDEX IDX_42C849559909C13F ON reservation');
        $this->addSql('ALTER TABLE reservation ADD firstName VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD agentType VARCHAR(255) DEFAULT NULL, ADD paymentMode VARCHAR(255) NOT NULL, ADD TransportType VARCHAR(255) DEFAULT NULL, ADD lastName VARCHAR(255) NOT NULL, ADD DriverName VARCHAR(55) DEFAULT NULL, ADD driver_id INT DEFAULT NULL, CHANGE location location VARCHAR(255) DEFAULT NULL, CHANGE status status VARCHAR(20) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE user_id age INT NOT NULL');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3B83297E7');
        $this->addSql('ALTER TABLE ticket ADD paymentMode VARCHAR(255) NOT NULL, ADD transport VARCHAR(255) NOT NULL, ADD destination VARCHAR(255) NOT NULL, DROP ticket_number, DROP status, CHANGE issue_date bookingDate DATETIME NOT NULL');
        $this->addSql('ALTER TABLE transport ADD destination VARCHAR(255) NOT NULL, DROP created_at, DROP updated_at, CHANGE status disponibility VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE users CHANGE role role ENUM(\'USER\', \'ADMIN\', \'DRIVER\') DEFAULT NULL');
    }
}
