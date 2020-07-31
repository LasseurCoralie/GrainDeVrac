<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200701110211 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, date_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, department VARCHAR(255) NOT NULL, INDEX IDX_2D5B0234B897366B (date_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE datas_page (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, title VARCHAR(255) DEFAULT NULL, content LONGTEXT DEFAULT NULL, image LONGBLOB DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE date (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, start_hour INT NOT NULL, end_hour INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE difficulty (id INT AUTO_INCREMENT NOT NULL, level VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE indicative_price (id INT AUTO_INCREMENT NOT NULL, indicative_price VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ingredient (id INT AUTO_INCREMENT NOT NULL, recipe_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_6BAF787059D8A214 (recipe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, producer_id INT NOT NULL, name VARCHAR(255) NOT NULL, short_description LONGTEXT NOT NULL, description LONGTEXT NOT NULL, bio TINYINT(1) NOT NULL, price DOUBLE PRECISION NOT NULL, availability TINYINT(1) NOT NULL, image LONGBLOB DEFAULT NULL, higlighted TINYINT(1) NOT NULL, INDEX IDX_D34A04AD89B658FE (producer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_recipe (product_id INT NOT NULL, recipe_id INT NOT NULL, INDEX IDX_B8F4F0934584665A (product_id), INDEX IDX_B8F4F09359D8A214 (recipe_id), PRIMARY KEY(product_id, recipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe (id INT AUTO_INCREMENT NOT NULL, indicative_price_id INT NOT NULL, difficulty_id INT NOT NULL, name VARCHAR(255) NOT NULL, short_description LONGTEXT NOT NULL, description LONGTEXT NOT NULL, saison VARCHAR(255) DEFAULT NULL, INDEX IDX_DA88B137C755272C (indicative_price_id), INDEX IDX_DA88B137FCFA9DAE (difficulty_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE step (id INT AUTO_INCREMENT NOT NULL, recipe_id INT NOT NULL, content LONGTEXT NOT NULL, INDEX IDX_43B9FE3C59D8A214 (recipe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, city_id INT NOT NULL, role_id INT NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, adress LONGTEXT NOT NULL, country VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, mute TINYINT(1) NOT NULL, INDEX IDX_8D93D6498BAC62AF (city_id), INDEX IDX_8D93D649D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_recipe (user_id INT NOT NULL, recipe_id INT NOT NULL, INDEX IDX_BFDAAA0AA76ED395 (user_id), INDEX IDX_BFDAAA0A59D8A214 (recipe_id), PRIMARY KEY(user_id, recipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_product (user_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_8B471AA7A76ED395 (user_id), INDEX IDX_8B471AA74584665A (product_id), PRIMARY KEY(user_id, product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE city ADD CONSTRAINT FK_2D5B0234B897366B FOREIGN KEY (date_id) REFERENCES date (id)');
        $this->addSql('ALTER TABLE ingredient ADD CONSTRAINT FK_6BAF787059D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD89B658FE FOREIGN KEY (producer_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product_recipe ADD CONSTRAINT FK_B8F4F0934584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_recipe ADD CONSTRAINT FK_B8F4F09359D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipe ADD CONSTRAINT FK_DA88B137C755272C FOREIGN KEY (indicative_price_id) REFERENCES indicative_price (id)');
        $this->addSql('ALTER TABLE recipe ADD CONSTRAINT FK_DA88B137FCFA9DAE FOREIGN KEY (difficulty_id) REFERENCES difficulty (id)');
        $this->addSql('ALTER TABLE step ADD CONSTRAINT FK_43B9FE3C59D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE user_recipe ADD CONSTRAINT FK_BFDAAA0AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_recipe ADD CONSTRAINT FK_BFDAAA0A59D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_product ADD CONSTRAINT FK_8B471AA7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_product ADD CONSTRAINT FK_8B471AA74584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498BAC62AF');
        $this->addSql('ALTER TABLE city DROP FOREIGN KEY FK_2D5B0234B897366B');
        $this->addSql('ALTER TABLE recipe DROP FOREIGN KEY FK_DA88B137FCFA9DAE');
        $this->addSql('ALTER TABLE recipe DROP FOREIGN KEY FK_DA88B137C755272C');
        $this->addSql('ALTER TABLE product_recipe DROP FOREIGN KEY FK_B8F4F0934584665A');
        $this->addSql('ALTER TABLE user_product DROP FOREIGN KEY FK_8B471AA74584665A');
        $this->addSql('ALTER TABLE ingredient DROP FOREIGN KEY FK_6BAF787059D8A214');
        $this->addSql('ALTER TABLE product_recipe DROP FOREIGN KEY FK_B8F4F09359D8A214');
        $this->addSql('ALTER TABLE step DROP FOREIGN KEY FK_43B9FE3C59D8A214');
        $this->addSql('ALTER TABLE user_recipe DROP FOREIGN KEY FK_BFDAAA0A59D8A214');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD89B658FE');
        $this->addSql('ALTER TABLE user_recipe DROP FOREIGN KEY FK_BFDAAA0AA76ED395');
        $this->addSql('ALTER TABLE user_product DROP FOREIGN KEY FK_8B471AA7A76ED395');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE datas_page');
        $this->addSql('DROP TABLE date');
        $this->addSql('DROP TABLE difficulty');
        $this->addSql('DROP TABLE indicative_price');
        $this->addSql('DROP TABLE ingredient');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE product_recipe');
        $this->addSql('DROP TABLE recipe');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE step');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_recipe');
        $this->addSql('DROP TABLE user_product');
    }
}
