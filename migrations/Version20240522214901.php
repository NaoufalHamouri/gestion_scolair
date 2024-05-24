<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240522214901 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, nom_cour VARCHAR(60) NOT NULL, coeffictient INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note (id INT AUTO_INCREMENT NOT NULL, etudiant_id INT NOT NULL, cours_id INT NOT NULL, niveau_id INT NOT NULL, note NUMERIC(4, 2) NOT NULL, INDEX IDX_CFBDFA14DDEAB1A3 (etudiant_id), INDEX IDX_CFBDFA147ECF78B0 (cours_id), INDEX IDX_CFBDFA14B3E9C81 (niveau_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id)');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA147ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA14DDEAB1A3');
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA147ECF78B0');
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA14B3E9C81');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE note');
    }
}
