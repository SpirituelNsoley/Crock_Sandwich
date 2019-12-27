<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191214234743 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bread CHANGE createdat created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE ingredient CHANGE createdat created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE juice CHANGE createdat created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE menu CHANGE createdat created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE profil CHANGE createdat created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE sandwich CHANGE createdat created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE createdat created_at DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bread CHANGE created_at createdAt DATETIME NOT NULL');
        $this->addSql('ALTER TABLE ingredient CHANGE created_at createdAt DATETIME NOT NULL');
        $this->addSql('ALTER TABLE juice CHANGE created_at createdAt DATETIME NOT NULL');
        $this->addSql('ALTER TABLE menu CHANGE created_at createdAt DATETIME NOT NULL');
        $this->addSql('ALTER TABLE profil CHANGE created_at createdAt DATETIME NOT NULL');
        $this->addSql('ALTER TABLE sandwich CHANGE created_at createdAt DATETIME NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE created_at createdAt DATETIME NOT NULL');
    }
}
