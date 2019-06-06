<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190606123551 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(50) NOT NULL, nom VARCHAR(70) NOT NULL, prenom VARCHAR(70) NOT NULL, ad1 VARCHAR(50) NOT NULL, ad2 VARCHAR(50) DEFAULT NULL, ad3 VARCHAR(50) DEFAULT NULL, cpostal VARCHAR(5) NOT NULL, commune VARCHAR(50) NOT NULL, tel VARCHAR(16) DEFAULT NULL, comment LONGTEXT DEFAULT NULL, portable VARCHAR(16) DEFAULT NULL, fax VARCHAR(16) DEFAULT NULL, mail VARCHAR(260) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jourferie (id INT AUTO_INCREMENT NOT NULL, jour INT NOT NULL, mois INT NOT NULL, libjour VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lieu (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning (id INT AUTO_INCREMENT NOT NULL, datetime_debut DATETIME NOT NULL, datetime_fin DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, planning INT DEFAULT NULL, typeven_id INT NOT NULL, client_id INT NOT NULL, salle_id INT NOT NULL, libres VARCHAR(260) NOT NULL, etatres INT NOT NULL, beneficiaire VARCHAR(60) DEFAULT NULL, comment LONGTEXT DEFAULT NULL, typres VARCHAR(1) NOT NULL, datcre DATE NOT NULL, utilcre VARCHAR(20) NOT NULL, datmod DATE DEFAULT NULL, utilmod VARCHAR(20) DEFAULT NULL, vis_plan TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_42C84955D499BFF6 (planning), INDEX IDX_42C84955FBA6403B (typeven_id), INDEX IDX_42C8495519EB6921 (client_id), INDEX IDX_42C84955DC304035 (salle_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salle (id INT AUTO_INCREMENT NOT NULL, lieu_id INT NOT NULL, type_de_salle_id INT NOT NULL, libelle VARCHAR(100) NOT NULL, INDEX IDX_4E977E5C6AB213CC (lieu_id), INDEX IDX_4E977E5CE3A45D08 (type_de_salle_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_de_salle (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE typeven (id INT AUTO_INCREMENT NOT NULL, codtype VARCHAR(8) NOT NULL, libelle VARCHAR(70) NOT NULL, nateven INT NOT NULL, coulfon INT NOT NULL, coullib INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vacances (id INT AUTO_INCREMENT NOT NULL, datdeb DATE NOT NULL, datfin DATE NOT NULL, libvac VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE v_annu_t_agent (idagent INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, email VARCHAR(255) NOT NULL, cptutil VARCHAR(50) NOT NULL, PRIMARY KEY(idagent)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agent_role (id_agent INT NOT NULL, id_role INT NOT NULL, INDEX IDX_FAF23089C80EDDAD (id_agent), INDEX IDX_FAF23089DC499668 (id_role), PRIMARY KEY(id_agent, id_role)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955D499BFF6 FOREIGN KEY (planning) REFERENCES planning (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955FBA6403B FOREIGN KEY (typeven_id) REFERENCES typeven (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495519EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955DC304035 FOREIGN KEY (salle_id) REFERENCES salle (id)');
        $this->addSql('ALTER TABLE salle ADD CONSTRAINT FK_4E977E5C6AB213CC FOREIGN KEY (lieu_id) REFERENCES lieu (id)');
        $this->addSql('ALTER TABLE salle ADD CONSTRAINT FK_4E977E5CE3A45D08 FOREIGN KEY (type_de_salle_id) REFERENCES type_de_salle (id)');
        $this->addSql('ALTER TABLE agent_role ADD CONSTRAINT FK_FAF23089C80EDDAD FOREIGN KEY (id_agent) REFERENCES v_annu_t_agent (idagent)');
        $this->addSql('ALTER TABLE agent_role ADD CONSTRAINT FK_FAF23089DC499668 FOREIGN KEY (id_role) REFERENCES role (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495519EB6921');
        $this->addSql('ALTER TABLE salle DROP FOREIGN KEY FK_4E977E5C6AB213CC');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955D499BFF6');
        $this->addSql('ALTER TABLE agent_role DROP FOREIGN KEY FK_FAF23089DC499668');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955DC304035');
        $this->addSql('ALTER TABLE salle DROP FOREIGN KEY FK_4E977E5CE3A45D08');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955FBA6403B');
        $this->addSql('ALTER TABLE agent_role DROP FOREIGN KEY FK_FAF23089C80EDDAD');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE jourferie');
        $this->addSql('DROP TABLE lieu');
        $this->addSql('DROP TABLE planning');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP TABLE type_de_salle');
        $this->addSql('DROP TABLE typeven');
        $this->addSql('DROP TABLE vacances');
        $this->addSql('DROP TABLE v_annu_t_agent');
        $this->addSql('DROP TABLE agent_role');
    }
}
