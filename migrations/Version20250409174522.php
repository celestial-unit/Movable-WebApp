<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250409174522 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, duration INT NOT NULL, type INT NOT NULL, status VARCHAR(255) NOT NULL, dateevent VARCHAR(255) NOT NULL, startEvent TIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE event_registration (id INT AUTO_INCREMENT NOT NULL, registration_date VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, event_id INT NOT NULL, INDEX IDX_8FBBAD5471F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE person (id VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, age VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, firstName VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, date DATETIME NOT NULL, location VARCHAR(255) NOT NULL, seats INT NOT NULL, agentType VARCHAR(255) NOT NULL, paymentMode VARCHAR(255) NOT NULL, transport VARCHAR(255) NOT NULL, age INT NOT NULL, lastName VARCHAR(255) NOT NULL, status VARCHAR(20) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, paymentMode VARCHAR(255) NOT NULL, transport VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, destination VARCHAR(255) NOT NULL, bookingDate DATETIME NOT NULL, reservation_id INT DEFAULT NULL, INDEX IDX_97A0ADA3B83297E7 (reservation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE event_registration ADD CONSTRAINT FK_8FBBAD5471F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event_registration DROP FOREIGN KEY FK_8FBBAD5471F7E88B');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3B83297E7');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE event_registration');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
