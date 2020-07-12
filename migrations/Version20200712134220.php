<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200712134220 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE date ADD city_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE date ADD CONSTRAINT FK_AA9E377A8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('CREATE INDEX IDX_AA9E377A8BAC62AF ON date (city_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE date DROP FOREIGN KEY FK_AA9E377A8BAC62AF');
        $this->addSql('DROP INDEX IDX_AA9E377A8BAC62AF ON date');
        $this->addSql('ALTER TABLE date DROP city_id');
    }
}
