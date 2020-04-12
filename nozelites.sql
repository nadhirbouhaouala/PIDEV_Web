-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 12 avr. 2020 à 20:42
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nozelites`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idUsr` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idUsr`, `login`, `mdp`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `chasseur_talent`
--

CREATE TABLE `chasseur_talent` (
  `idUsr` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chasseur_talent`
--

INSERT INTO `chasseur_talent` (`idUsr`, `nom`, `prenom`, `tel`, `mail`, `login`, `mdp`, `age`, `entreprise`, `image`, `date`) VALUES
(2, 'Raif', 'Si', '4145698', 'bnetMaamel@gazelle.com', 'Raif', '123', 40, 'Maria 2', 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/raif.jpg', '2020-02-25');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `id_membre` int(11) DEFAULT NULL,
  `id_publication` int(11) NOT NULL,
  `commentaire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `id_membre`, `id_publication`, `commentaire`) VALUES
(1, 10, 1, 'bon article'),
(2, 10, 1, 'hahaha');

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(11) NOT NULL,
  `id_r` int(11) DEFAULT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `idc` int(11) DEFAULT NULL,
  `idE` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `description` varchar(255) NOT NULL,
  `siteWeb` varchar(255) NOT NULL,
  `NbParticipant` int(11) NOT NULL,
  `NbPlace` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `etat` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `favoris` (
  `id_fav` int(11) NOT NULL,
  `id_pub` int(11) DEFAULT NULL,
  `id_membre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `id_membre` int(11) DEFAULT NULL,
  `id_fos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `titre`, `id_membre`, `id_fos`) VALUES
(6, 'Java', 12, NULL),
(8, 'francais', 12, NULL),
(9, 'JAVA', 8, 8);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `nom`, `prenom`, `telephone`, `age`, `image`) VALUES
(8, 'nebil97', 'nebil97', 'nebil.bh@ooutlook.com', 'nebil.bh@ooutlook.com', 1, NULL, '$2y$13$rhYc6sYdhh3GaATVhdyLFeK.by5Qxi68S/4bVFN4r2dhd1YiptTC2', '2020-04-12 15:31:27', NULL, NULL, 'a:1:{i:0;s:11:\"ROLE_MEMBRE\";}', 'ben hamouda', 'nebil', 22165849, 25, ''),
(9, 'test2', 'test2', 'neb@grermail.com', 'neb@grermail.com', 1, NULL, '$2y$13$n07BBknUt/vnOyHsoWZxYeQpii9E.2pSi4rYsHBKj5Jm/QM8D2cpi', '2020-04-11 13:17:09', NULL, NULL, 'a:1:{i:0;s:11:\"ROLE_MEMBRE\";}', 'test', 'test', 22, 2, ''),
(15, 'ert', 'ert', 'az@aze.com', 'az@aze.com', 1, NULL, '$2y$13$bpaCDxUbpluqEPjvGQQZqeda1WIR.Fzrku8nmxLnQuRa3/Pb6p1XS', '2020-04-11 13:56:28', NULL, NULL, 'a:1:{i:0;s:11:\"ROLE_MEMBRE\";}', 'az', 'aze', 321, 21, '');

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id_groupe` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `autorisation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `groupe_membre` (
  `id_gm` int(11) NOT NULL,
  `id_groupe` int(11) DEFAULT NULL,
  `id_membre` int(11) DEFAULT NULL,
  `id_invite` int(11) NOT NULL,
  `etat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `listediplome` (
  `id_diplome` int(11) NOT NULL,
  `organisation` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `id_membre` int(11) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `id_fos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `listediplome`
--

INSERT INTO `listediplome` (`id_diplome`, `organisation`, `domaine`, `id_membre`, `date`, `id_fos`) VALUES
(2, 'Harvard', 'Inginieur telecom', 8, '2020-09-15', 8);

-- --------------------------------------------------------

--
-- Structure de la table `listparticipant`
--

CREATE TABLE `listparticipant` (
  `ide` int(11) DEFAULT NULL,
  `idm` int(11) DEFAULT NULL,
  `idP` int(11) NOT NULL,
  `etatp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `idUsr` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `Formation` varchar(255) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `Type` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idUsr`, `nom`, `prenom`, `tel`, `mail`, `login`, `mdp`, `age`, `Formation`, `Experience`, `Type`, `image`, `date`) VALUES
(8, 'borjini', 'syrine', '22589456', 'syrine.borjini@esprit.tn', 'syrine98', '123', 21, '0', '10 ans', 1, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/team3.jpg', '2020-02-25'),
(9, 'bouhaouala', 'nadhir', '22456789', 'nadhir.bouhaouala@esprit.tn', 'nadhirb', '123', 22, '0', '5 ans', 1, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/Photo de Nadhir Bouhaouala.jpg', '2020-02-25'),
(10, 'belhiba', 'firas', '22654987', 'firas.belhiba@esprit.tn', 'firasB', '123', 45, '0', '10 ans', 1, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/team1.jpg', '2020-02-25'),
(11, 'bairem', 'khairi', '25647896', 'mohamedkheireddine.bairam@esprit.tn', 'khairiB', '123', 55, '0', '20 ans', 1, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/team2.jpg', '2020-02-25'),
(12, 'ben hamouda', 'nebil', '50492753', 'nebil.benhamouda@esprit.tn', 'Nebil98', '123', 22, '0', '10 ans', 0, 'C:/Users/nadhir/Desktop/PIDEV/nozelites/src/GUI/images/team2.jpg', '2020-02-26'),
(13, 'fawzi', 'fawzi', '123', '23', '123', '123', 23, '0', '123', 1, 'test', 'test'),
(14, 'az', 'fawzi', '123', '23', '123', '123', 23, '0', '123', 1, 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `idMessage` int(11) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `id_destinataire` int(11) DEFAULT NULL,
  `id_emeteur` int(11) DEFAULT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`idMessage`, `objet`, `texte`, `id_destinataire`, `id_emeteur`, `date`) VALUES
(1, 'Re', 'Exemple test', 10, 11, '2020-02-26');

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `Id` int(11) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `IdEmetteur` int(11) DEFAULT NULL,
  `IdRecepteur` int(11) DEFAULT NULL,
  `Entreprise` varchar(30) NOT NULL,
  `Domaine` varchar(100) NOT NULL,
  `Poste` varchar(100) NOT NULL,
  `Requis` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Etat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `portfolio` (
  `id_port` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id_port`, `id_membre`, `titre`, `description`, `lien`) VALUES
(1, 11, 'projet web', 'test ', 'github');

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_groupe` int(11) NOT NULL,
  `id_publicateur` int(11) NOT NULL,
  `nb_jaime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `reclamation` (
  `idRecl` int(11) NOT NULL,
  `id_emeteur` int(11) DEFAULT NULL,
  `id_cible` int(11) NOT NULL,
  `description` varchar(256) NOT NULL,
  `etat` int(20) NOT NULL,
  `selecteur` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`idRecl`, `id_emeteur`, `id_cible`, `description`, `etat`, `selecteur`, `date`) VALUES
(1, 8, 1, 'Groupe nocif', 2, 'groupe', '2020-02-25 23:56:57'),
(2, 11, 10, 'ce compte est nocif', 0, 'membre', '2020-02-26 10:22:30'),
(4, 11, 1, 'testtt', 0, 'evenement', '2020-02-26 10:26:33');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idUsr`);

--
-- Index pour la table `chasseur_talent`
--
ALTER TABLE `chasseur_talent`
  ADD PRIMARY KEY (`idUsr`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `FK_comm_membre` (`id_membre`);

--
-- Index pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1323A575AB9C55E2` (`id_r`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`idE`),
  ADD UNIQUE KEY `nom` (`nom`),
  ADD KEY `FK_idCreateur` (`idc`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id_fav`),
  ADD KEY `FK_FAV_MEMBRE` (`id_membre`),
  ADD KEY `FK_FAV_PUBLC` (`id_pub`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`),
  ADD KEY `fk_formation_id_membre` (`id_membre`),
  ADD KEY `IDX_404021BF6D6D134` (`id_fos`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id_groupe`);

--
-- Index pour la table `groupe_membre`
--
ALTER TABLE `groupe_membre`
  ADD PRIMARY KEY (`id_gm`),
  ADD KEY `FK_idG` (`id_groupe`),
  ADD KEY `FK_idM` (`id_membre`);

--
-- Index pour la table `listediplome`
--
ALTER TABLE `listediplome`
  ADD PRIMARY KEY (`id_diplome`),
  ADD KEY `FK_id_membre` (`id_membre`),
  ADD KEY `IDX_230EDFF66D6D134` (`id_fos`);

--
-- Index pour la table `listparticipant`
--
ALTER TABLE `listparticipant`
  ADD PRIMARY KEY (`idP`),
  ADD KEY `fk_ide` (`ide`),
  ADD KEY `id_m` (`idm`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`idUsr`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idMessage`),
  ADD KEY `fk_destinataire` (`id_destinataire`),
  ADD KEY `fk_emetteur` (`id_emeteur`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_idEmetteur` (`IdEmetteur`),
  ADD KEY `Fk_idRecepteur` (`IdRecepteur`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_port`),
  ADD KEY `Fk_membre` (`id_membre`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_groupe` (`id_groupe`),
  ADD KEY `FK_idpublicateur` (`id_publicateur`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`idRecl`),
  ADD KEY `fk_id_emeteur` (`id_emeteur`),
  ADD KEY `reclamation_ibfk_1` (`id_cible`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idUsr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `chasseur_talent`
--
ALTER TABLE `chasseur_talent`
  MODIFY `idUsr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `idE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id_fav` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id_groupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `groupe_membre`
--
ALTER TABLE `groupe_membre`
  MODIFY `id_gm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `listediplome`
--
ALTER TABLE `listediplome`
  MODIFY `id_diplome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `listparticipant`
--
ALTER TABLE `listparticipant`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `idUsr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `idMessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_port` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `idRecl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_67F068BCD0834EC4` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`idUsr`);

--
-- Contraintes pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `FK_1323A575AB9C55E2` FOREIGN KEY (`id_r`) REFERENCES `reclamation` (`idRecl`);

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `FK_B26681E6D6DB7FC` FOREIGN KEY (`idc`) REFERENCES `membre` (`idUsr`);

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `FK_8933C432C4E0D4DF` FOREIGN KEY (`id_pub`) REFERENCES `publication` (`id`),
  ADD CONSTRAINT `FK_8933C432D0834EC4` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`idUsr`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `FK_404021BFD0834EC4` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`idUsr`),
  ADD CONSTRAINT `fk_fosUser` FOREIGN KEY (`id_fos`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `groupe_membre`
--
ALTER TABLE `groupe_membre`
  ADD CONSTRAINT `FK_9D8A0713228E39CC` FOREIGN KEY (`id_groupe`) REFERENCES `groupe` (`id_groupe`),
  ADD CONSTRAINT `FK_9D8A0713D0834EC4` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`idUsr`);

--
-- Contraintes pour la table `listediplome`
--
ALTER TABLE `listediplome`
  ADD CONSTRAINT `FK_230EDFF66D6D134` FOREIGN KEY (`id_fos`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_230EDFF6D0834EC4` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`idUsr`);

--
-- Contraintes pour la table `listparticipant`
--
ALTER TABLE `listparticipant`
  ADD CONSTRAINT `FK_6EF9EFB5840E12C9` FOREIGN KEY (`ide`) REFERENCES `evenement` (`idE`),
  ADD CONSTRAINT `FK_6EF9EFB58AD59AFB` FOREIGN KEY (`idm`) REFERENCES `membre` (`idUsr`);

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
  ADD CONSTRAINT `FK_AF86866F19DF0E5D` FOREIGN KEY (`IdEmetteur`) REFERENCES `chasseur_talent` (`idUsr`),
  ADD CONSTRAINT `FK_AF86866F87967E5E` FOREIGN KEY (`IdRecepteur`) REFERENCES `membre` (`idUsr`);

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `FK_CE60640439C55256` FOREIGN KEY (`id_emeteur`) REFERENCES `membre` (`idUsr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
