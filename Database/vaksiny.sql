-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 13 Mars 2022 à 09:25
-- Version du serveur :  5.7.30-log
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vaksiny`
--

-- --------------------------------------------------------

--
-- Structure de la table `fokotany`
--

CREATE TABLE `fokotany` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `id_region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `id` int(11) NOT NULL,
  `addresse` varchar(255) NOT NULL,
  `id_fokotany` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `maison_personne`
--

CREATE TABLE `maison_personne` (
  `id` int(11) NOT NULL,
  `id_maison` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `nom_prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(50) NOT NULL,
  `cin_infos` varchar(255) NOT NULL,
  `cin_num` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vita_vaksiny`
--

CREATE TABLE `vita_vaksiny` (
  `id` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fokotany`
--
ALTER TABLE `fokotany`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_region_3` (`id_region`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `id_region_2` (`id_region`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_Fokotany` (`id_fokotany`);

--
-- Index pour la table `maison_personne`
--
ALTER TABLE `maison_personne`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_personne` (`id_personne`),
  ADD UNIQUE KEY `id_maison` (`id_maison`),
  ADD KEY `id_personne_2` (`id_personne`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vita_vaksiny`
--
ALTER TABLE `vita_vaksiny`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_personne` (`id_personne`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fokotany`
--
ALTER TABLE `fokotany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `maison`
--
ALTER TABLE `maison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `maison_personne`
--
ALTER TABLE `maison_personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `vita_vaksiny`
--
ALTER TABLE `vita_vaksiny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `maison`
--
ALTER TABLE `maison`
  ADD CONSTRAINT `maison_ibfk_1` FOREIGN KEY (`id_fokotany`) REFERENCES `fokotany` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `maison_personne`
--
ALTER TABLE `maison_personne`
  ADD CONSTRAINT `maison_personne_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maison_personne_ibfk_2` FOREIGN KEY (`id_maison`) REFERENCES `maison` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vita_vaksiny`
--
ALTER TABLE `vita_vaksiny`
  ADD CONSTRAINT `vita_vaksiny_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
