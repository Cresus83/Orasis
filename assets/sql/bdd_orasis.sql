#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

CREATE TABLE utilisateurs(
        id_user          Int NOT NULL AUTO_INCREMENT,
        role_user        Varchar (30) NOT NULL ,
        statut_user      Varchar (60) NOT NULL ,
        identifiant_user Varchar (30) NOT NULL ,
        mdp_user         Varchar (256) NOT NULL ,
        nom_user         Varchar (60) NOT NULL ,
        prenom_user      Varchar (60) NOT NULL ,
        email_user       Varchar (70) NOT NULL ,
        date_inscription Date NOT NULL
	,CONSTRAINT utilisateurs_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;

INSERT INTO `utilisateurs` (`id_user`, `role_user`, `statut_user`, `identifiant_user`, `mdp_user`, `nom_user`, `prenom_user`, `email_user`, `date_inscription`) VALUES
(1, 'Administrateur', 'Valide', 'rayan', '0dd1387f43976d0b2b26be620b9ec87f7233ce63ccaa621ab70e1cdd887a6dfa', 'HACHANI', 'Rayan ', 'rayandu8350@hotmail.fr', '2022-12-29'),
(2, 'Participant', 'En cours', 'participant1', '56e00d8eef432e448963fb33d31cbc989835384ec290868e0a0f7573b254b1af', 'Participant', 'Participant', 'parti@gmail.com', '2022-12-29'),
(3, 'Auteur', 'Valide', 'auteur', 'cc3be3e081aa306504d47425a5cfe1bda184049a2c18dc2f864b54d6fbbfa7c3', 'Auteur', 'Auteur', 'auteur@gmail.com', '2022-12-29'),
(4, 'Participant', 'Valide', 'part2', '474d3c9a0b52b768b7c54affb2c386a921a6b33007109c70be7b536eba176bb4', 'Participant2', 'Participant2', 'part2@gmail.com', '2022-12-29');
COMMIT;

#------------------------------------------------------------
# Table: Articles
#------------------------------------------------------------

CREATE TABLE Articles(
        id_article      Int NOT NULL AUTO_INCREMENT,
        titre_article   Varchar (60) NOT NULL ,
        resumer_article Varchar (280) NOT NULL ,
        fichier_article Varchar (256) NOT NULL ,
        date_soumission Date NOT NULL
	,CONSTRAINT Articles_PK PRIMARY KEY (id_article)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: soumettre
#------------------------------------------------------------

CREATE TABLE soumettre(
        id_article              Int NOT NULL,
        id_user                 Int NOT NULL ,
        soumettre_date_ecriture Date NOT NULL ,
        soumettre_statut  Varchar (60) NOT NULL ,
        soumission_id           Int NOT NULL AUTO_INCREMENT Unique
	,CONSTRAINT soumettre_PK PRIMARY KEY (id_article,id_user,soumission_id)

	,CONSTRAINT soumettre_Articles_FK FOREIGN KEY (id_article) REFERENCES Articles(id_article)
	,CONSTRAINT soumettre_utilisateurs0_FK FOREIGN KEY (id_user) REFERENCES utilisateurs(id_user)
)ENGINE=InnoDB;

