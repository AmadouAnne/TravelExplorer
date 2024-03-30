<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Migration pour créer la table "pays"
 */
final class Version20240330044348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Créer la table "pays"';
    }

    public function up(Schema $schema): void
    {
        // Création de la table "pays" avec la colonne "image"
        $this->addSql('CREATE TABLE pays (
            id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
            nom VARCHAR(255) NOT NULL,
            description LONGTEXT NOT NULL,
            explorer_id INT NOT NULL,
            image VARCHAR(255) DEFAULT NULL
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // Supprimer la table "pays" si nécessaire
        $this->addSql('DROP TABLE IF EXISTS pays');
    }
}
