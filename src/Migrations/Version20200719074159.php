<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200719074159 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs ADD chord_chorus2_id INT DEFAULT NULL, ADD chord_chorus3_id INT DEFAULT NULL, ADD chord_chorus4_id INT DEFAULT NULL, ADD chord_chorus2_name VARCHAR(255) DEFAULT NULL, ADD chord_chorus3_name VARCHAR(255) DEFAULT NULL, ADD chord_chorus4_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19B389EB27E FOREIGN KEY (chord_chorus2_id) REFERENCES chords (id)');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19B8022D51B FOREIGN KEY (chord_chorus3_id) REFERENCES chords (id)');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19B1DF5EDA2 FOREIGN KEY (chord_chorus4_id) REFERENCES chords (id)');
        $this->addSql('CREATE INDEX IDX_BAECB19B389EB27E ON songs (chord_chorus2_id)');
        $this->addSql('CREATE INDEX IDX_BAECB19B8022D51B ON songs (chord_chorus3_id)');
        $this->addSql('CREATE INDEX IDX_BAECB19B1DF5EDA2 ON songs (chord_chorus4_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19B389EB27E');
        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19B8022D51B');
        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19B1DF5EDA2');
        $this->addSql('DROP INDEX IDX_BAECB19B389EB27E ON songs');
        $this->addSql('DROP INDEX IDX_BAECB19B8022D51B ON songs');
        $this->addSql('DROP INDEX IDX_BAECB19B1DF5EDA2 ON songs');
        $this->addSql('ALTER TABLE songs DROP chord_chorus2_id, DROP chord_chorus3_id, DROP chord_chorus4_id, DROP chord_chorus2_name, DROP chord_chorus3_name, DROP chord_chorus4_name');
    }
}
