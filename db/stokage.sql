-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 08 Mai 2018 à 13:07
-- Version du serveur :  5.6.24
-- Version de PHP :  5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `stokage`
--

-- --------------------------------------------------------

--
-- Structure de la table `comentaire`
--

CREATE TABLE IF NOT EXISTS `comentaire` (
  `id_com` int(30) NOT NULL,
  `id_util` int(30) NOT NULL,
  `id_forum` int(30) NOT NULL,
  `comentaire` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id_doc` int(30) NOT NULL,
  `doc` text NOT NULL,
  `titre_doc` varchar(200) NOT NULL,
  `type_doc` int(11) NOT NULL,
  `sizeDoc` float NOT NULL,
  `id_util` int(30) NOT NULL,
  `id_espace` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `document`
--

INSERT INTO `document` (`id_doc`, `doc`, `titre_doc`, `type_doc`, `sizeDoc`, `id_util`, `id_espace`) VALUES
(29, '151.png', 'ahlem', 1, 89118, 4, 1),
(30, '162.png', 'ahlem', 2, 8737, 4, 1),
(31, '400.png', 'test 2', 1, 8737, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `espace`
--

CREATE TABLE IF NOT EXISTS `espace` (
  `id_espace` int(30) NOT NULL,
  `capacite` int(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `id_util` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `espace`
--

INSERT INTO `espace` (`id_espace`, `capacite`, `nom`, `id_util`) VALUES
(1, 12, 'cloud', 3),
(2, 15, 'doc', 3),
(3, 20, 'test', 3),
(4, 10, 'ahlem', 3);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id_for` int(30) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `discription` varchar(150) NOT NULL,
  `fichier` varchar(200) NOT NULL,
  `date_e` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_for`, `titre`, `discription`, `fichier`, `date_e`) VALUES
(8, 'PHP', '<p>sdfgh</p>', '../fichier/180.docx', '2018-08-15'),
(13, 'HTML', 'hvhdvzdchn', '450.pdf', '2018-07-31'),
(14, 'Android ', 'ugdbcbshdc', '', '2018-05-15'),
(15, 'securite', 'dvcsldcvksdc', '', '2018-05-14');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(30) NOT NULL,
  `sujet` varchar(30) NOT NULL,
  `discription` varchar(30) NOT NULL,
  `id_util` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participationn`
--

CREATE TABLE IF NOT EXISTS `participationn` (
  `id_part` int(30) NOT NULL,
  `date` date NOT NULL,
  `id_for` int(30) NOT NULL,
  `id_util` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_user` int(30) NOT NULL,
  `id_espace` int(30) NOT NULL,
  `date_reservation` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `id_user`, `id_espace`, `date_reservation`) VALUES
(2, 4, 10, '2018-05-04 13:25:08'),
(3, 4, 20, '2018-05-04 13:27:41'),
(6, 4, 1, '2018-05-07 21:53:24'),
(7, 4, 2, '2018-05-08 12:24:58');

-- --------------------------------------------------------

--
-- Structure de la table `type-util`
--

CREATE TABLE IF NOT EXISTS `type-util` (
  `id_type` int(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `id_util` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type-util`
--

INSERT INTO `type-util` (`id_type`, `type`, `id_util`) VALUES
(1, 'admin', 1),
(2, 'membre', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_util` int(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `num_tel` int(8) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `profil` int(1) NOT NULL,
  `etat` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_util`, `nom`, `prenom`, `email`, `password`, `adresse`, `num_tel`, `photo`, `profil`, `etat`) VALUES
(3, 'ahlem', 'hallouma', 'halloumaahlem67@gmail.com', 'ddd', 'jendouba', 555555, '', 1, 1),
(4, 'ahlem', 'gannouni', 'hallouma@gmail.com', '123', 'jendouba', 2147483647, '', 2, 1),
(5, 'horar', 'gannouni', 'harou@gmail.com', '13235hg', 'jendouba', 2147483647, '', 2, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comentaire`
--
ALTER TABLE `comentaire`
  ADD PRIMARY KEY (`id_com`), ADD KEY `id_util` (`id_util`), ADD KEY `id_forum` (`id_forum`);

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_doc`), ADD KEY `id_util` (`id_util`);

--
-- Index pour la table `espace`
--
ALTER TABLE `espace`
  ADD PRIMARY KEY (`id_espace`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_for`);

--
-- Index pour la table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`), ADD KEY `id_util` (`id_util`);

--
-- Index pour la table `participationn`
--
ALTER TABLE `participationn`
  ADD PRIMARY KEY (`id_part`), ADD KEY `id_for` (`id_for`), ADD KEY `id_util` (`id_util`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Index pour la table `type-util`
--
ALTER TABLE `type-util`
  ADD PRIMARY KEY (`id_type`), ADD KEY `id_util` (`id_util`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_util`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comentaire`
--
ALTER TABLE `comentaire`
  MODIFY `id_com` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `id_doc` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `espace`
--
ALTER TABLE `espace`
  MODIFY `id_espace` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_for` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `type-util`
--
ALTER TABLE `type-util`
  MODIFY `id_type` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_util` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
