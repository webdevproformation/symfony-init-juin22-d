<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220610142550 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE exo (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(200) NOT NULL, prenom VARCHAR(200) NOT NULL, dt_naissance DATETIME NOT NULL, status BOOLEAN NOT NULL)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__test AS SELECT id, titre, date FROM test');
        $this->addSql('DROP TABLE test');
        $this->addSql('CREATE TABLE test (id INTEGER NOT NULL, titre VARCHAR(100) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO test (id, titre, date) SELECT id, titre, date FROM __temp__test');
        $this->addSql('DROP TABLE __temp__test');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE exo');
        $this->addSql('CREATE TEMPORARY TABLE __temp__test AS SELECT id, titre, date FROM test');
        $this->addSql('DROP TABLE test');
        $this->addSql('CREATE TABLE test (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, titre VARCHAR(100) NOT NULL, date DATETIME NOT NULL)');
        $this->addSql('INSERT INTO test (id, titre, date) SELECT id, titre, date FROM __temp__test');
        $this->addSql('DROP TABLE __temp__test');
    }
}
