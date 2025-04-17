<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250326003649 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE event ADD start_event VARCHAR(255) NOT NULL, DROP startEvent');
        $this->addSql('ALTER TABLE event_registration DROP FOREIGN KEY event_registration_ibfk_1');
        $this->addSql('ALTER TABLE event_registration DROP FOREIGN KEY event_registration_ibfk_1');
        $this->addSql('ALTER TABLE event_registration CHANGE event_id event_id INT DEFAULT NULL, CHANGE registration_date registration_date VARCHAR(255) NOT NULL, CHANGE status status VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event_registration ADD CONSTRAINT FK_8FBBAD5471F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('DROP INDEX event_id ON event_registration');
        $this->addSql('CREATE INDEX IDX_8FBBAD5471F7E88B ON event_registration (event_id)');
        $this->addSql('ALTER TABLE event_registration ADD CONSTRAINT event_registration_ibfk_1 FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE person CHANGE id id VARCHAR(255) NOT NULL, CHANGE age age VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE event ADD startEvent TIME DEFAULT NULL, DROP start_event');
        $this->addSql('ALTER TABLE event_registration DROP FOREIGN KEY FK_8FBBAD5471F7E88B');
        $this->addSql('ALTER TABLE event_registration DROP FOREIGN KEY FK_8FBBAD5471F7E88B');
        $this->addSql('ALTER TABLE event_registration CHANGE registration_date registration_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE status status ENUM(\'Pending\', \'Confirmed\', \'Canceled\') NOT NULL, CHANGE event_id event_id INT NOT NULL');
        $this->addSql('ALTER TABLE event_registration ADD CONSTRAINT event_registration_ibfk_1 FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_8fbbad5471f7e88b ON event_registration');
        $this->addSql('CREATE INDEX event_id ON event_registration (event_id)');
        $this->addSql('ALTER TABLE event_registration ADD CONSTRAINT FK_8FBBAD5471F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE person CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE age age INT NOT NULL');
    }
}
