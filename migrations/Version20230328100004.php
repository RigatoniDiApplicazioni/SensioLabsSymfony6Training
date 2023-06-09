<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230328100004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create BookGenre Entity';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE book_genre (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');

    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE book_genre');

    }
}
