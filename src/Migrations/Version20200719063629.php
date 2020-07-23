<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200719063629 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs ADD chord_chorus2 VARCHAR(255) DEFAULT NULL, ADD chord_chorus2_name VARCHAR(255) DEFAULT NULL, ADD chord_chorus3 VARCHAR(255) DEFAULT NULL, ADD chord_chorus3_name VARCHAR(255) DEFAULT NULL, ADD chord_chorus4 VARCHAR(255) DEFAULT NULL, ADD chord_chorus4_name VARCHAR(255) DEFAULT NULL, ADD chord_verse1 VARCHAR(255) DEFAULT NULL, ADD chord_verse1_name VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs DROP chord_chorus2, DROP chord_chorus2_name, DROP chord_chorus3, DROP chord_chorus3_name, DROP chord_chorus4, DROP chord_chorus4_name, DROP chord_verse1, DROP chord_verse1_name');
    }
}
