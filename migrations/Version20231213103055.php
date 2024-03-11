<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231213103055 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_produit ADD nom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE commande ADD utilisateur_id INT NOT NULL, ADD date_commande DATETIME NOT NULL, ADD statut VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67DFB88E14F ON commande (utilisateur_id)');
        $this->addSql('ALTER TABLE detail_commande ADD commande_id INT DEFAULT NULL, ADD produit_id INT DEFAULT NULL, ADD pointure VARCHAR(255) NOT NULL, ADD quantite INT NOT NULL, ADD sous_total NUMERIC(10, 2) NOT NULL');
        $this->addSql('ALTER TABLE detail_commande ADD CONSTRAINT FK_98344FA682EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE detail_commande ADD CONSTRAINT FK_98344FA6F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('CREATE INDEX IDX_98344FA682EA2E54 ON detail_commande (commande_id)');
        $this->addSql('CREATE INDEX IDX_98344FA6F347EFB ON detail_commande (produit_id)');
        $this->addSql('ALTER TABLE panier ADD utilisateur_id INT DEFAULT NULL, ADD produit_id INT DEFAULT NULL, ADD pointure VARCHAR(255) NOT NULL, ADD quantite INT NOT NULL, ADD sous_total NUMERIC(10, 2) NOT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF2FB88E14F ON panier (utilisateur_id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF2F347EFB ON panier (produit_id)');
        $this->addSql('ALTER TABLE produit ADD categorie_id INT NOT NULL, ADD nom VARCHAR(255) NOT NULL, ADD reference VARCHAR(255) NOT NULL, ADD prix_vente_unitaire DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_produit (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC27BCF5E72D ON produit (categorie_id)');
        $this->addSql('ALTER TABLE utilisateur ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD adresse_email VARCHAR(255) NOT NULL, ADD mot_de_passe VARCHAR(255) NOT NULL, ADD role VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1D1C63B388D20D42 ON utilisateur (adresse_email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_produit DROP nom');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DFB88E14F');
        $this->addSql('DROP INDEX IDX_6EEAA67DFB88E14F ON commande');
        $this->addSql('ALTER TABLE commande DROP utilisateur_id, DROP date_commande, DROP statut');
        $this->addSql('ALTER TABLE detail_commande DROP FOREIGN KEY FK_98344FA682EA2E54');
        $this->addSql('ALTER TABLE detail_commande DROP FOREIGN KEY FK_98344FA6F347EFB');
        $this->addSql('DROP INDEX IDX_98344FA682EA2E54 ON detail_commande');
        $this->addSql('DROP INDEX IDX_98344FA6F347EFB ON detail_commande');
        $this->addSql('ALTER TABLE detail_commande DROP commande_id, DROP produit_id, DROP pointure, DROP quantite, DROP sous_total');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2FB88E14F');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2F347EFB');
        $this->addSql('DROP INDEX IDX_24CC0DF2FB88E14F ON panier');
        $this->addSql('DROP INDEX IDX_24CC0DF2F347EFB ON panier');
        $this->addSql('ALTER TABLE panier DROP utilisateur_id, DROP produit_id, DROP pointure, DROP quantite, DROP sous_total');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27BCF5E72D');
        $this->addSql('DROP INDEX IDX_29A5EC27BCF5E72D ON produit');
        $this->addSql('ALTER TABLE produit DROP categorie_id, DROP nom, DROP reference, DROP prix_vente_unitaire');
        $this->addSql('DROP INDEX UNIQ_1D1C63B388D20D42 ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP nom, DROP prenom, DROP adresse_email, DROP mot_de_passe, DROP role');
    }
}
