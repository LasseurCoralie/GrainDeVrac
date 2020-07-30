<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200711205519 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mode DROP FOREIGN KEY FK_97CA47ABB897366B');
        $this->addSql('DROP INDEX IDX_97CA47ABB897366B ON mode');
        $this->addSql('ALTER TABLE mode DROP date_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mode ADD date_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mode ADD CONSTRAINT FK_97CA47ABB897366B FOREIGN KEY (date_id) REFERENCES date (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_97CA47ABB897366B ON mode (date_id)');
    }
}
