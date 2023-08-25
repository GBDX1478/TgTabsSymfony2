<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230824131557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA0BDB2F3');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('ALTER TABLE chords ADD name_to_show VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE songs DROP FOREIGN KEY FK_BAECB19BDAF66CC4');
        $this->addSql('DROP INDEX IDX_BAECB19BDAF66CC4 ON songs');
        $this->addSql('ALTER TABLE songs DROP chord_verse9_id, DROP chord_verse9_name, CHANGE nb_chords_chorus nb_chords_chorus INT DEFAULT NULL, CHANGE nb_chords_verse nb_chords_verse INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, song_id INT DEFAULT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_67F068BCA0BDB2F3 (song_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA0BDB2F3 FOREIGN KEY (song_id) REFERENCES songs (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE chords DROP name_to_show');
        $this->addSql('ALTER TABLE songs ADD chord_verse9_id INT DEFAULT NULL, ADD chord_verse9_name VARCHAR(255) DEFAULT NULL, CHANGE nb_chords_chorus nb_chords_chorus INT NOT NULL, CHANGE nb_chords_verse nb_chords_verse INT NOT NULL');
        $this->addSql('ALTER TABLE songs ADD CONSTRAINT FK_BAECB19BDAF66CC4 FOREIGN KEY (chord_verse9_id) REFERENCES chords (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_BAECB19BDAF66CC4 ON songs (chord_verse9_id)');
    }
}
