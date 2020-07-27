<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200727072807 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs ADD chord_verse5_id INT DEFAULT NULL, ADD chord_verse6_id INT DEFAULT NULL, ADD chord_verse7_id INT DEFAULT NULL, ADD chord_verse8_id INT DEFAULT NULL, ADD chord_verse5_name VARCHAR(255) DEFAULT NULL, ADD chordverse6_name VARCHAR(255) DEFAULT NULL, ADD chord_verse7_name VARCHAR(255) DEFAULT NULL, ADD chord_verse8_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19B9020D37C FOREIGN KEY (chord_verse5_id) REFERENCES chords (id)');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19B82957C92 FOREIGN KEY (chord_verse6_id) REFERENCES chords (id)');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19B3A291BF7 FOREIGN KEY (chord_verse7_id) REFERENCES chords (id)');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19B624A0BA1 FOREIGN KEY (chord_verse8_id) REFERENCES chords (id)');
        $this->addSql('CREATE INDEX IDX_BAECB19B9020D37C ON songs (chord_verse5_id)');
        $this->addSql('CREATE INDEX IDX_BAECB19B82957C92 ON songs (chord_verse6_id)');
        $this->addSql('CREATE INDEX IDX_BAECB19B3A291BF7 ON songs (chord_verse7_id)');
        $this->addSql('CREATE INDEX IDX_BAECB19B624A0BA1 ON songs (chord_verse8_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19B9020D37C');
        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19B82957C92');
        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19B3A291BF7');
        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19B624A0BA1');
        $this->addSql('DROP INDEX IDX_BAECB19B9020D37C ON songs');
        $this->addSql('DROP INDEX IDX_BAECB19B82957C92 ON songs');
        $this->addSql('DROP INDEX IDX_BAECB19B3A291BF7 ON songs');
        $this->addSql('DROP INDEX IDX_BAECB19B624A0BA1 ON songs');
        $this->addSql('ALTER TABLE songs DROP chord_verse5_id, DROP chord_verse6_id, DROP chord_verse7_id, DROP chord_verse8_id, DROP chord_verse5_name, DROP chordverse6_name, DROP chord_verse7_name, DROP chord_verse8_name');
    }
}
