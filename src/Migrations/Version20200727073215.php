<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200727073215 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs ADD chord_chorus6_id INT DEFAULT NULL, ADD chord_chorus6_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19BB7FC2529 FOREIGN KEY (chord_chorus6_id) REFERENCES chords (id)');
        $this->addSql('CREATE INDEX IDX_BAECB19BB7FC2529 ON songs (chord_chorus6_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19BB7FC2529');
        $this->addSql('DROP INDEX IDX_BAECB19BB7FC2529 ON songs');
        $this->addSql('ALTER TABLE songs DROP chord_chorus6_id, DROP chord_chorus6_name');
    }
}
