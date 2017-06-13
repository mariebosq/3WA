-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 13 Juin 2017 à 17:10
-- Version du serveur: 5.5.54-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(155) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `fidelite` tinyint(1) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `num_commande` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `statut` enum('panier','valider','preparation','livrer') NOT NULL,
  PRIMARY KEY (`id_commande`),
  UNIQUE KEY `num_commande` (`num_commande`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `id_employe` int(11) NOT NULL AUTO_INCREMENT,
  `poste` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_employe`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE IF NOT EXISTS `ingredient` (
  `id_ingredient` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `date_peremption` date NOT NULL,
  PRIMARY KEY (`id_ingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE IF NOT EXISTS `livreur` (
  `id_livreur` int(11) NOT NULL AUTO_INCREMENT,
  `telephone` varchar(15) DEFAULT NULL,
  `disponibilite` tinyint(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_livreur`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `entree` varchar(255) NOT NULL,
  `plat` varchar(255) NOT NULL,
  `dessert` varchar(255) NOT NULL,
  `nom_menu` varchar(255) NOT NULL,
  `prix_menu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE IF NOT EXISTS `plat` (
  `id_plat` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prix` varchar(20) NOT NULL,
  `categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_plat`),
  KEY `categorie` (`categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservation` int(11) NOT NULL AUTO_INCREMENT,
  `date_resa` date NOT NULL,
  `heure_resa` time NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_table` int(11) NOT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `id_client` (`id_client`),
  KEY `id_table` (`id_table`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `table`
--

CREATE TABLE IF NOT EXISTS `table` (
  `id_table` int(11) NOT NULL AUTO_INCREMENT,
  `num_table` int(11) NOT NULL,
  `localisation` varchar(155) NOT NULL,
  `jauge` int(11) NOT NULL,
  `id_reservation` int(11) NOT NULL,
  PRIMARY KEY (`id_table`),
  KEY `id_reservation` (`id_reservation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `table_ingredient_plat`
--

CREATE TABLE IF NOT EXISTS `table_ingredient_plat` (
  `id_ingredient` int(11) NOT NULL,
  `id_plat` int(11) NOT NULL,
  `quantité` int(11) NOT NULL,
  KEY `id_ingredient` (`id_ingredient`,`id_plat`),
  KEY `id_plat` (`id_plat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `table_menu_plat_commande`
--

CREATE TABLE IF NOT EXISTS `table_menu_plat_commande` (
  `id_commande` int(11) DEFAULT NULL,
  `id_item` int(11) NOT NULL,
  `type` enum('menu','plat','commande') NOT NULL,
  KEY `id_commande` (`id_commande`,`id_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `type` enum('livreur','client','employe') NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `table_menu_plat_commande` (`id_commande`),
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `ingredient_ibfk_1` FOREIGN KEY (`id_ingredient`) REFERENCES `table_ingredient_plat` (`id_ingredient`);

--
-- Contraintes pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD CONSTRAINT `livreur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `plat`
--
ALTER TABLE `plat`
  ADD CONSTRAINT `plat_ibfk_2` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `plat_ibfk_1` FOREIGN KEY (`id_plat`) REFERENCES `table_ingredient_plat` (`id_plat`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_table`) REFERENCES `table` (`id_table`),
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `table`
--
ALTER TABLE `table`
  ADD CONSTRAINT `table_ibfk_1` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id_reservation`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
