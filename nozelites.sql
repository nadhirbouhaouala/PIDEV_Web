-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 mars 2020 à 10:37
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nozelites`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idUsr` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`idUsr`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idUsr`, `login`, `mdp`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `chasseur_talent`
--

DROP TABLE IF EXISTS `chasseur_talent`;
CREATE TABLE IF NOT EXISTS `chasseur_talent` (
  `idUsr` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`idUsr`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chasseur_talent`
--

INSERT INTO `chasseur_talent` (`idUsr`, `nom`, `prenom`, `tel`, `mail`, `login`, `mdp`, `age`, `entreprise`, `image`, `date`) VALUES
(2, 'Raif', 'Si', '4145698', 'bnetMaamel@gazelle.com', 'Raif', '123', 40, 'Maria 2', 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/raif.jpg', '2020-02-25');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) NOT NULL,
  `id_publication` int(11) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `FK_comm_membre` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `id_membre`, `id_publication`, `commentaire`) VALUES
(1, 10, 1, 'bon article'),
(2, 10, 1, 'hahaha');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `idc` int(11) NOT NULL,
  `idE` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `description` varchar(255) NOT NULL,
  `siteWeb` varchar(255) NOT NULL,
  `NbParticipant` int(11) NOT NULL,
  `NbPlace` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `etat` int(30) NOT NULL,
  PRIMARY KEY (`idE`),
  UNIQUE KEY `nom` (`nom`),
  KEY `FK_idCreateur` (`idc`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`idc`, `idE`, `nom`, `lieu`, `date`, `heure`, `description`, `siteWeb`, `NbParticipant`, `NbPlace`, `image`, `etat`) VALUES
(10, 1, 'event1', '47.6197/-122.3231', '2020-03-01', '11:12:00', 'pidev', 'www.on.tn', 0, 20, 'C:\\Users\\nadhir\\Desktop\\PIDEV\\nozelites\\src\\GUI\\images\\team1.jpg', 1),
(8, 3, 'java', '47.6597/-122.3357', '2020-02-27', '11:12:00', 'descc', 'www.on.tn', 0, 30, 'C:\\Users\\nadhir\\Desktop\\PIDEV\\nozelites\\src\\GUI\\images\\Sans titre-1.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id_fav` int(11) NOT NULL AUTO_INCREMENT,
  `id_pub` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  PRIMARY KEY (`id_fav`),
  KEY `FK_FAV_MEMBRE` (`id_membre`),
  KEY `FK_FAV_PUBLC` (`id_pub`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `id_membre` int(11) NOT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `fk_formation_id_membre` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `titre`, `id_membre`) VALUES
(5, 'Francais', 8),
(6, 'Java', 12),
(8, 'francais', 12);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `id_groupe` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `autorisation` int(11) NOT NULL,
  PRIMARY KEY (`id_groupe`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id_groupe`, `titre`, `description`, `autorisation`) VALUES
(1, 'Java fx1', 'tutoriel', 0),
(2, 'php', 'tuto', 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_membre`
--

DROP TABLE IF EXISTS `groupe_membre`;
CREATE TABLE IF NOT EXISTS `groupe_membre` (
  `id_gm` int(11) NOT NULL AUTO_INCREMENT,
  `id_groupe` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `id_invite` int(11) NOT NULL,
  `etat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_gm`),
  KEY `FK_idG` (`id_groupe`),
  KEY `FK_idM` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe_membre`
--

INSERT INTO `groupe_membre` (`id_gm`, `id_groupe`, `id_membre`, `id_invite`, `etat`) VALUES
(1, 1, 8, -1, 'bloqué'),
(2, 1, 9, 8, 'invitation'),
(3, 1, 10, 8, 'membre'),
(5, 1, 9, 8, 'invitation'),
(6, 2, 11, -1, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `listediplome`
--

DROP TABLE IF EXISTS `listediplome`;
CREATE TABLE IF NOT EXISTS `listediplome` (
  `id_diplome` int(11) NOT NULL,
  `organisation` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id_diplome`),
  KEY `FK_id_membre` (`id_membre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `listediplome`
--

INSERT INTO `listediplome` (`id_diplome`, `organisation`, `domaine`, `id_membre`, `date`) VALUES
(0, 'esprit', 'ingenieur', 8, '2020-02-25');

-- --------------------------------------------------------

--
-- Structure de la table `listparticipant`
--

DROP TABLE IF EXISTS `listparticipant`;
CREATE TABLE IF NOT EXISTS `listparticipant` (
  `idE` int(11) NOT NULL,
  `idm` int(11) NOT NULL,
  `etatp` int(30) NOT NULL,
  KEY `fk_ide` (`idE`),
  KEY `id_m` (`idm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `listparticipant`
--

INSERT INTO `listparticipant` (`idE`, `idm`, `etatp`) VALUES
(1, 10, 1);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `idUsr` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `Formation` varchar(255) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `Type` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`idUsr`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idUsr`, `nom`, `prenom`, `tel`, `mail`, `login`, `mdp`, `age`, `Formation`, `Experience`, `Type`, `image`, `date`) VALUES
(8, 'borjini', 'syrine', '22589456', 'syrine.borjini@esprit.tn', 'syrine98', '123', 21, '0', '10 ans', 1, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/team3.jpg', '2020-02-25'),
(9, 'bouhaouala', 'nadhir', '22456789', 'nadhir.bouhaouala@esprit.tn', 'nadhirb', '123', 22, '0', '5 ans', 1, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/Photo de Nadhir Bouhaouala.jpg', '2020-02-25'),
(10, 'belhiba', 'firas', '22654987', 'firas.belhiba@esprit.tn', 'firasB', '123', 45, '0', '10 ans', 1, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/team1.jpg', '2020-02-25'),
(11, 'bairem', 'khairi', '25647896', 'mohamedkheireddine.bairam@esprit.tn', 'khairiB', '123', 55, '0', '20 ans', 1, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/team2.jpg', '2020-02-25'),
(12, 'ben hamouda', 'nebil', '50492753', 'nebil.benhamouda@esprit.tn', 'Nebil98', '123', 22, '0', '10 ans', 0, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/team2.jpg', '2020-02-26');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `idMessage` int(11) NOT NULL AUTO_INCREMENT,
  `objet` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `id_emeteur` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`idMessage`),
  KEY `fk_destinataire` (`id_destinataire`),
  KEY `fk_emetteur` (`id_emeteur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`idMessage`, `objet`, `texte`, `id_destinataire`, `id_emeteur`, `date`) VALUES
(1, 'Re', 'Exemple test', 10, 11, '2020-02-26');

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(30) NOT NULL,
  `IdEmetteur` int(11) NOT NULL,
  `IdRecepteur` int(11) NOT NULL,
  `Entreprise` varchar(30) NOT NULL,
  `Domaine` varchar(100) NOT NULL,
  `Poste` varchar(100) NOT NULL,
  `Requis` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Etat` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_idEmetteur` (`IdEmetteur`),
  KEY `Fk_idRecepteur` (`IdRecepteur`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`Id`, `Type`, `IdEmetteur`, `IdRecepteur`, `Entreprise`, `Domaine`, `Poste`, `Requis`, `Description`, `Date`, `Etat`) VALUES
(4, 'emploi', 2, 11, 'Maria', 'Industriel', 'Manager', 'MBA', 'License management', '08-02-2020', 'Acceptée'),
(5, 'emploi', 2, 10, 'Maria', 'RH', 'Responsable RH', 'License RH', 'departament RH', '08-03-2020', 'Acceptée'),
(6, 'emploi', 2, 8, 'Maria', 'Data science', 'Analyste', 'Cloud BI', 'anlayse data set', '08-02-2020', 'Acceptée'),
(7, 'Offre de stage', 2, 8, 'Maria 2', 'Secrétariat', 'Secretaire', 'Francais', 'Poste de secretaire dans un bureau', '2020-02-25', 'En attente');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id_port` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  PRIMARY KEY (`id_port`),
  KEY `Fk_membre` (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id_port`, `id_membre`, `titre`, `description`, `lien`) VALUES
(1, 11, 'projet web', 'test ', 'github');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `id_groupe` int(11) NOT NULL,
  `id_publicateur` int(11) NOT NULL,
  `nb_jaime` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_groupe` (`id_groupe`),
  KEY `FK_idpublicateur` (`id_publicateur`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`titre`, `description`, `id`, `image`, `id_groupe`, `id_publicateur`, `nb_jaime`) VALUES
('Progres Java 8', 'le  versio 8 du java', 1, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/logo.jpg', 1, 10, 3),
('drtdsf g', 'oooo', 4, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/team4.jpg', 1, 10, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `idRecl` int(11) NOT NULL AUTO_INCREMENT,
  `id_emeteur` int(11) NOT NULL,
  `id_cible` int(11) NOT NULL,
  `description` varchar(256) NOT NULL,
  `etat` int(20) NOT NULL,
  `selecteur` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`idRecl`),
  KEY `fk_id_emeteur` (`id_emeteur`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`idRecl`, `id_emeteur`, `id_cible`, `description`, `etat`, `selecteur`, `date`) VALUES
(1, 8, 1, 'Groupe nocif', 2, 'groupe', '2020-02-25 23:56:57'),
(2, 11, 10, 'ce compte est nocif', 0, 'membre', '2020-02-26 10:22:30'),
(4, 11, 1, 'testtt', 0, 'evenement', '2020-02-26 10:26:33');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_comm_membre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`idUsr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `FK_idCreateur` FOREIGN KEY (`idc`) REFERENCES `membre` (`idUsr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `FK_FAV_MEMBRE` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`idUsr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_FAV_PUBLC` FOREIGN KEY (`id_pub`) REFERENCES `publication` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `fk_formation_id_membre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`idUsr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `groupe_membre`
--
ALTER TABLE `groupe_membre`
  ADD CONSTRAINT `FK_idG` FOREIGN KEY (`id_groupe`) REFERENCES `groupe` (`id_groupe`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idM` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`idUsr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `listediplome`
--
ALTER TABLE `listediplome`
  ADD CONSTRAINT `FK_id_membre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`idUsr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_destinataire` FOREIGN KEY (`id_destinataire`) REFERENCES `membre` (`idUsr`),
  ADD CONSTRAINT `fk_emetteur` FOREIGN KEY (`id_emeteur`) REFERENCES `membre` (`idUsr`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `FK_idEmetteur` FOREIGN KEY (`IdEmetteur`) REFERENCES `chasseur_talent` (`idUsr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_idRecepteur` FOREIGN KEY (`IdRecepteur`) REFERENCES `membre` (`idUsr`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
