<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200115014116 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bread (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, price SMALLINT NOT NULL, statement SMALLINT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sandwich_bread (sandwich_id INT NOT NULL, bread_id INT NOT NULL, INDEX IDX_10EFBA9E4D566043 (sandwich_id), INDEX IDX_10EFBA9E5D3405CF (bread_id), PRIMARY KEY(sandwich_id, bread_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sandwich_bread ADD CONSTRAINT FK_10EFBA9E4D566043 FOREIGN KEY (sandwich_id) REFERENCES sandwich (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sandwich_bread ADD CONSTRAINT FK_10EFBA9E5D3405CF FOREIGN KEY (bread_id) REFERENCES bread (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sandwich_bread DROP FOREIGN KEY FK_10EFBA9E5D3405CF');
        $this->addSql('DROP TABLE bread');
        $this->addSql('DROP TABLE sandwich_bread');
    }
}
