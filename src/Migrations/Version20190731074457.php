<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190731074457 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, admin_name VARCHAR(255) NOT NULL, admin_password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genre (id INT AUTO_INCREMENT NOT NULL, nom_genre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mutuelle (id INT AUTO_INCREMENT NOT NULL, nom_mutuelle VARCHAR(255) NOT NULL, mdp_mutuelle VARCHAR(255) DEFAULT NULL, img_mutuelle VARCHAR(255) NOT NULL, description_mutuelle LONGTEXT NOT NULL, tel_mutuelle VARCHAR(255) NOT NULL, tel_link_mutuelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, titre_video VARCHAR(255) NOT NULL, date_upload_video DATETIME DEFAULT NULL, duree_video TIME NOT NULL, coach_video VARCHAR(255) DEFAULT NULL, adresse_video VARCHAR(2000) NOT NULL, img_video VARCHAR(255) NOT NULL, genre_video VARCHAR(255) NOT NULL, description_video LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP TABLE mutuelle');
        $this->addSql('DROP TABLE video');
    }
}
