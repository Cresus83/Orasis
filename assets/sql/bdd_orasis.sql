#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

CREATE TABLE utilisateurs(
        id_user          Int NOT NULL ,
        role_user        Varchar (30) NOT NULL ,
        statut_user      Varchar (60) NOT NULL ,
        identifiant_user Varchar (30) NOT NULL ,
        mdp_user         Varchar (256) NOT NULL ,
        nom_user         Varchar (60) NOT NULL ,
        prenom_user      Varchar (60) NOT NULL ,
        date_inscription Date NOT NULL
	,CONSTRAINT utilisateurs_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Articles
#------------------------------------------------------------

CREATE TABLE Articles(
        id_article      Int NOT NULL ,
        titre_article   Varchar (60) NOT NULL ,
        resumer_article Varchar (60) NOT NULL ,
        fichier_article Varchar (256) NOT NULL ,
        date_soumission Date NOT NULL
	,CONSTRAINT Articles_PK PRIMARY KEY (id_article)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: soumettre
#------------------------------------------------------------

CREATE TABLE soumettre(
        id_article              Int NOT NULL ,
        id_user                 Int NOT NULL ,
        soumettre_date_ecriture Date NOT NULL ,
        soumission_id           Int NOT NULL
	,CONSTRAINT soumettre_PK PRIMARY KEY (id_article,id_user)

	,CONSTRAINT soumettre_Articles_FK FOREIGN KEY (id_article) REFERENCES Articles(id_article)
	,CONSTRAINT soumettre_utilisateurs0_FK FOREIGN KEY (id_user) REFERENCES utilisateurs(id_user)
)ENGINE=InnoDB;

