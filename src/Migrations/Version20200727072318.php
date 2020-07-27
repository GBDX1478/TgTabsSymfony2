<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200727072318 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs ADD chord_verse1_id INT DEFAULT NULL, ADD chord_verse2_id INT DEFAULT NULL, ADD chord_verse3_id INT DEFAULT NULL, ADD chord_verse4_id INT DEFAULT NULL, ADD chord_verse1_name VARCHAR(255) DEFAULT NULL, ADD chord_verse2_name VARCHAR(255) DEFAULT NULL, ADD chord_verse3_name VARCHAR(255) DEFAULT NULL, ADD chord_verse4_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19B1F42442B FOREIGN KEY (chord_verse1_id) REFERENCES chords (id)');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19BDF7EBC5 FOREIGN KEY (chord_verse2_id) REFERENCES chords (id)');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19BB54B8CA0 FOREIGN KEY (chord_verse3_id) REFERENCES chords (id)');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19B289CB419 FOREIGN KEY (chord_verse4_id) REFERENCES chords (id)');
        $this->addSql('CREATE INDEX IDX_BAECB19B1F42442B ON songs (chord_verse1_id)');
        $this->addSql('CREATE INDEX IDX_BAECB19BDF7EBC5 ON songs (chord_verse2_id)');
        $this->addSql('CREATE INDEX IDX_BAECB19BB54B8CA0 ON songs (chord_verse3_id)');
        $this->addSql('CREATE INDEX IDX_BAECB19B289CB419 ON songs (chord_verse4_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19B1F42442B');
        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19BDF7EBC5');
        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19BB54B8CA0');
        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19B289CB419');
        $this->addSql('DROP INDEX IDX_BAECB19B1F42442B ON songs');
        $this->addSql('DROP INDEX IDX_BAECB19BDF7EBC5 ON songs');
        $this->addSql('DROP INDEX IDX_BAECB19BB54B8CA0 ON songs');
        $this->addSql('DROP INDEX IDX_BAECB19B289CB419 ON songs');
        $this->addSql('ALTER TABLE songs DROP chord_verse1_id, DROP chord_verse2_id, DROP chord_verse3_id, DROP chord_verse4_id, DROP chord_verse1_name, DROP chord_verse2_name, DROP chord_verse3_name, DROP chord_verse4_name');
    }
}
