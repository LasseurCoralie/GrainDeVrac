<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200712132848 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mode (id INT AUTO_INCREMENT NOT NULL, mode VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE date ADD mode_id INT NOT NULL');
        $this->addSql('ALTER TABLE date ADD CONSTRAINT FK_AA9E377A77E5854A FOREIGN KEY (mode_id) REFERENCES mode (id)');
        $this->addSql('CREATE INDEX IDX_AA9E377A77E5854A ON date (mode_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE date DROP FOREIGN KEY FK_AA9E377A77E5854A');
        $this->addSql('DROP TABLE mode');
        $this->addSql('DROP INDEX IDX_AA9E377A77E5854A ON date');
        $this->addSql('ALTER TABLE date DROP mode_id');
    }
}
