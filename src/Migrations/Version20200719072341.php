<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200719072341 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs ADD chord_chorus1_id INT DEFAULT NULL, ADD chord_chorus1_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19B2A2B1D90 FOREIGN KEY (chord_chorus1_id) REFERENCES chords (id)');
        $this->addSql('CREATE INDEX IDX_BAECB19B2A2B1D90 ON songs (chord_chorus1_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19B2A2B1D90');
        $this->addSql('DROP INDEX IDX_BAECB19B2A2B1D90 ON songs');
        $this->addSql('ALTER TABLE songs DROP chord_chorus1_id, DROP chord_chorus1_name');
    }
}
