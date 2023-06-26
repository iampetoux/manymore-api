<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230625140624 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_widget (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, widget_id INT NOT NULL, title VARCHAR(255) DEFAULT NULL, position SMALLINT NOT NULL, INDEX IDX_E0AB05EDA76ED395 (user_id), INDEX IDX_E0AB05EDFBE885E2 (widget_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE widget (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_widget ADD CONSTRAINT FK_E0AB05EDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_widget ADD CONSTRAINT FK_E0AB05EDFBE885E2 FOREIGN KEY (widget_id) REFERENCES widget (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_widget DROP FOREIGN KEY FK_E0AB05EDA76ED395');
        $this->addSql('ALTER TABLE user_widget DROP FOREIGN KEY FK_E0AB05EDFBE885E2');
        $this->addSql('DROP TABLE user_widget');
        $this->addSql('DROP TABLE widget');
    }
}
