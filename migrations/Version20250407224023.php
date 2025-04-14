<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250407224023 extends AbstractMigration
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
        $this->addSql('ALTER TABLE event_registration ADD CONSTRAINT FK_8FBBAD5471F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A3316DE2013A');
        $this->addSql('DROP TABLE author');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE product');
        $this->addSql('ALTER TABLE reservation CHANGE firstName firstName VARCHAR(255) NOT NULL, CHANGE lastName lastName VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE location location VARCHAR(255) NOT NULL, CHANGE agentType agentType VARCHAR(255) NOT NULL, CHANGE paymentMode paymentMode VARCHAR(255) NOT NULL, CHANGE transport transport VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY ticket_ibfk_1');
        $this->addSql('DROP INDEX reservationId ON ticket');
        $this->addSql('ALTER TABLE ticket ADD reservation_relation_id INT DEFAULT NULL, DROP reservationId, CHANGE paymentMode paymentMode VARCHAR(255) NOT NULL, CHANGE transport transport VARCHAR(255) NOT NULL, CHANGE destination destination VARCHAR(255) NOT NULL, CHANGE bookingDate booking_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3FE3A4C07 FOREIGN KEY (reservation_relation_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA3FE3A4C07 ON ticket (reservation_relation_id)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL, CHANGE available_at available_at DATETIME NOT NULL, CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE author (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, enabled VARCHAR(23) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, author_id INT NOT NULL, authors_id INT DEFAULT NULL, INDEX IDX_CBE5A3316DE2013A (authors_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A3316DE2013A FOREIGN KEY (authors_id) REFERENCES author (id)');
        $this->addSql('ALTER TABLE event_registration DROP FOREIGN KEY FK_8FBBAD5471F7E88B');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE event_registration');
        $this->addSql('DROP TABLE person');
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE available_at available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE reservation CHANGE firstName firstName VARCHAR(50) NOT NULL, CHANGE email email VARCHAR(100) NOT NULL, CHANGE location location VARCHAR(100) NOT NULL, CHANGE agentType agentType VARCHAR(50) NOT NULL, CHANGE paymentMode paymentMode VARCHAR(50) NOT NULL, CHANGE transport transport VARCHAR(50) NOT NULL, CHANGE lastName lastName VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3FE3A4C07');
        $this->addSql('DROP INDEX IDX_97A0ADA3FE3A4C07 ON ticket');
        $this->addSql('ALTER TABLE ticket ADD reservationId INT NOT NULL, DROP reservation_relation_id, CHANGE paymentMode paymentMode VARCHAR(50) NOT NULL, CHANGE transport transport VARCHAR(50) NOT NULL, CHANGE destination destination VARCHAR(100) NOT NULL, CHANGE booking_date bookingDate DATETIME NOT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT ticket_ibfk_1 FOREIGN KEY (reservationId) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX reservationId ON ticket (reservationId)');
    }
}
