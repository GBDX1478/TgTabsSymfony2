<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200727073105 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs ADD chord_chorus5_id INT DEFAULT NULL, ADD chord_chorus7_id INT DEFAULT NULL, ADD chord_chorus8_id INT DEFAULT NULL, ADD chord_chorus5_name VARCHAR(255) DEFAULT NULL, ADD chord_chorus7_name VARCHAR(255) DEFAULT NULL, ADD chord_chorus8_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19BA5498AC7 FOREIGN KEY (chord_chorus5_id) REFERENCES chords (id)');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19BF40424C FOREIGN KEY (chord_chorus7_id) REFERENCES chords (id)');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19B5723521A FOREIGN KEY (chord_chorus8_id) REFERENCES chords (id)');
        $this->addSql('CREATE INDEX IDX_BAECB19BA5498AC7 ON songs (chord_chorus5_id)');
        $this->addSql('CREATE INDEX IDX_BAECB19BF40424C ON songs (chord_chorus7_id)');
        $this->addSql('CREATE INDEX IDX_BAECB19B5723521A ON songs (chord_chorus8_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19BA5498AC7');
        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19BF40424C');
        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19B5723521A');
        $this->addSql('DROP INDEX IDX_BAECB19BA5498AC7 ON songs');
        $this->addSql('DROP INDEX IDX_BAECB19BF40424C ON songs');
        $this->addSql('DROP INDEX IDX_BAECB19B5723521A ON songs');
        $this->addSql('ALTER TABLE songs DROP chord_chorus5_id, DROP chord_chorus7_id, DROP chord_chorus8_id, DROP chord_chorus5_name, DROP chord_chorus7_name, DROP chord_chorus8_name');
    }
}
