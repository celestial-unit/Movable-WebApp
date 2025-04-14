<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250413172453 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE regenerate (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE product
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE agent DROP FOREIGN KEY office_agent_fk
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE agent DROP FOREIGN KEY office_agent_fk
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE agent CHANGE pictureP pictureP VARCHAR(255) NOT NULL, CHANGE office_Id office_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE agent ADD CONSTRAINT FK_268B9C9DFFA0C224 FOREIGN KEY (office_id) REFERENCES office (id)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX office_agent_fk ON agent
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_268B9C9DFFA0C224 ON agent (office_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE agent ADD CONSTRAINT office_agent_fk FOREIGN KEY (office_Id) REFERENCES office (id) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE destination CHANGE status status VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE drivers CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE licence_number licence_number VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE event CHANGE startEvent start_event TIME DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE event_registration CHANGE event_id event_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_75EA56E016BA31DB ON messenger_messages
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_75EA56E0FB7336F0 ON messenger_messages
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_75EA56E0E3BD61CE ON messenger_messages
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE queue_name queue_name VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE office CHANGE location location VARCHAR(255) NOT NULL, CHANGE agents agent_count INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_67E0B2C126D4F35D ON parkingspot
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE parkingspot CHANGE notes notes LONGTEXT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rates DROP FOREIGN KEY idagent_rate_fk
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rates DROP FOREIGN KEY idagent_rate_fk
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rates CHANGE idagent idagent INT DEFAULT NULL, CHANGE comment comment VARCHAR(255) NOT NULL, CHANGE sentiment sentiment VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rates ADD CONSTRAINT FK_44D4AB3CF08EF084 FOREIGN KEY (idagent) REFERENCES agent (id)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idagent_rate_fk ON rates
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_44D4AB3CF08EF084 ON rates (idagent)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rates ADD CONSTRAINT idagent_rate_fk FOREIGN KEY (idagent) REFERENCES agent (id) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD first_name VARCHAR(255) NOT NULL, ADD agent_type VARCHAR(255) NOT NULL, ADD payment_mode VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL, ADD destination VARCHAR(255) DEFAULT NULL, ADD transport_id INT DEFAULT NULL, ADD driver_id INT DEFAULT NULL, ADD agent_id INT DEFAULT NULL, DROP firstName, DROP agentType, DROP paymentMode, DROP transport, DROP lastName, CHANGE location location VARCHAR(255) NOT NULL, CHANGE status status VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT FK_42C849559909C13F FOREIGN KEY (transport_id) REFERENCES transport (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C3423909 FOREIGN KEY (driver_id) REFERENCES drivers (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT FK_42C849553414710B FOREIGN KEY (agent_id) REFERENCES agent (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_42C849559909C13F ON reservation (transport_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_42C84955C3423909 ON reservation (driver_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_42C849553414710B ON reservation (agent_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ticket CHANGE paymentMode payment_mode VARCHAR(255) NOT NULL, CHANGE bookingDate booking_date DATETIME NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE regenerate
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9DFFA0C224
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9DFFA0C224
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE agent CHANGE pictureP pictureP VARCHAR(500) NOT NULL, CHANGE office_id office_Id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE agent ADD CONSTRAINT office_agent_fk FOREIGN KEY (office_Id) REFERENCES office (id) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_268b9c9dffa0c224 ON agent
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX office_agent_fk ON agent (office_Id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE agent ADD CONSTRAINT FK_268B9C9DFFA0C224 FOREIGN KEY (office_id) REFERENCES office (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE destination CHANGE status status VARCHAR(50) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE drivers CHANGE name name VARCHAR(100) DEFAULT NULL, CHANGE licence_number licence_number VARCHAR(100) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE event CHANGE start_event startEvent TIME DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE event_registration CHANGE event_id event_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE id id BIGINT AUTO_INCREMENT NOT NULL, CHANGE queue_name queue_name VARCHAR(190) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE office CHANGE location location VARCHAR(500) NOT NULL, CHANGE agent_count agents INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE parkingspot CHANGE notes notes TEXT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_67E0B2C126D4F35D ON parkingspot (id_destination)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rates DROP FOREIGN KEY FK_44D4AB3CF08EF084
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rates DROP FOREIGN KEY FK_44D4AB3CF08EF084
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rates CHANGE comment comment VARCHAR(600) NOT NULL, CHANGE sentiment sentiment VARCHAR(50) DEFAULT NULL, CHANGE idagent idagent INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rates ADD CONSTRAINT idagent_rate_fk FOREIGN KEY (idagent) REFERENCES agent (id) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_44d4ab3cf08ef084 ON rates
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idagent_rate_fk ON rates (idagent)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rates ADD CONSTRAINT FK_44D4AB3CF08EF084 FOREIGN KEY (idagent) REFERENCES agent (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY FK_42C849559909C13F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C3423909
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY FK_42C849553414710B
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_42C849559909C13F ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_42C84955C3423909 ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_42C849553414710B ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD firstName VARCHAR(255) NOT NULL, ADD paymentMode VARCHAR(255) NOT NULL, ADD transport VARCHAR(255) DEFAULT NULL, ADD lastName VARCHAR(255) NOT NULL, DROP first_name, DROP agent_type, DROP payment_mode, DROP last_name, DROP transport_id, DROP driver_id, DROP agent_id, CHANGE location location VARCHAR(255) DEFAULT NULL, CHANGE status status VARCHAR(20) NOT NULL, CHANGE destination agentType VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ticket CHANGE payment_mode paymentMode VARCHAR(255) NOT NULL, CHANGE booking_date bookingDate DATETIME NOT NULL
        SQL);
    }
}
