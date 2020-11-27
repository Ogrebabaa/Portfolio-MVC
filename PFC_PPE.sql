#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: pfc_message
#------------------------------------------------------------

CREATE TABLE pfc_message(
        id_Message      Int  Auto_increment  NOT NULL ,
        nom_Message     Varchar (50) NOT NULL ,
        prenom_Message  Varchar (50) NOT NULL ,
        mail_Message    Varchar (70) NOT NULL ,
        objet_Message   Varchar (30) NOT NULL ,
        contenu_Message Varchar (255) NOT NULL
	,CONSTRAINT pfc_message_PK PRIMARY KEY (id_Message)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: pfc_admin
#------------------------------------------------------------

CREATE TABLE pfc_admin(
        id_Admin     Int  Auto_increment  NOT NULL ,
        nom_Admin    Varchar (255) NOT NULL ,
        prenom_Admin Varchar (255) NOT NULL ,
        login_Admin  Varchar (255) NOT NULL ,
        motDePasse   Varchar (255) NOT NULL
	,CONSTRAINT pfc_admin_PK PRIMARY KEY (id_Admin)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: pfc_tableau_de_bord
#------------------------------------------------------------

CREATE TABLE pfc_tableau_de_bord(
        id_Tableau_de_bord Int  Auto_increment  NOT NULL ,
        description        Varchar (50) NOT NULL
	,CONSTRAINT pfc_tableau_de_bord_PK PRIMARY KEY (id_Tableau_de_bord)
)ENGINE=InnoDB;

