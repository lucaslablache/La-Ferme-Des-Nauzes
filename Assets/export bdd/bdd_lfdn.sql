-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 22 mars 2021 à 15:37
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_lfdn`
--

-- --------------------------------------------------------

--
-- Structure de la table `market`
--

DROP TABLE IF EXISTS `market`;
CREATE TABLE IF NOT EXISTS `market` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `heure_debut` varchar(255) NOT NULL,
  `heure_fin` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `market`
--

INSERT INTO `market` (`ID`, `date`, `heure_debut`, `heure_fin`, `adresse`, `information`) VALUES
(1, '2020-11-10', '17:05', '17:05', 'ici', ''),
(2, '2020-11-27', '20:42', '22:44', 'la-bas', ''),
(4, '2020-12-17', '04:56', '19:56', 'par la', ''),
(5, '2020-12-25', '20:18', '22:20', 'place de noel', ''),
(6, '2020-12-22', '06:49', '09:52', 'lavernose', 'producteur 4'),
(7, '2021-01-12', '06:00', '08:03', 'dtc', 'salut il y auras michel et toto qui vendent des navets'),
(8, '2021-01-27', '08:36', '22:40', 'ici', 'producteur 4'),
(9, '2021-02-01', '02:14', '06:18', 'chez pierre', 'ludo'),
(10, '2021-02-10', '13:00', '14:00', 'chez moi', 'il y auras mon pote qui vend des navets et des patates'),
(11, '2021-02-07', '15:30', '18:33', 'chez romain', 'salut il y auras michel et toto qui vendent des navets'),
(12, '2021-02-13', '07:05', '12:38', 'lavernose', 'il y auras mon pote qui vend des navets et des patates'),
(13, '2021-02-23', '16:00', '17:00', 'Ici', 'La bas'),
(14, '2021-03-20', '20:02', '23:33', 'ici', 'salut il y auras michel et toto qui vendent des navets'),
(15, '2021-03-24', '06:46', '09:46', 'chez moi', 'il y auras mon pote qui vend des navets');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `POST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `POST_TITRE` varchar(50) NOT NULL,
  `POST_TEXTE` text NOT NULL,
  `POST_TYPE` int(11) NOT NULL,
  `POST_AUTEUR` int(11) NOT NULL,
  `POST_DATE` varchar(255) NOT NULL,
  `POST_PHOTO` varchar(255) NOT NULL,
  PRIMARY KEY (`POST_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`POST_ID`, `POST_TITRE`, `POST_TEXTE`, `POST_TYPE`, `POST_AUTEUR`, `POST_DATE`, `POST_PHOTO`) VALUES
(2, 'j\'ai bu mon coca', 'c\'est délicieux j\'ai adoré ca le coca c\'est excellent', 0, 0, '2020-12-07 03:26:28', 'un jour p-e'),
(6, 'coucou', '&lt;p&gt;salut mon pote&lt;/p&gt;', 1, 0, '2020-12-13 23:19:50', 'un jour p-e'),
(7, 'coucou', '&lt;p&gt;salut mon pote&lt;/p&gt;', 1, 0, '2020-12-13 23:30:15', 'un jour p-e'),
(8, 'qsdfqs', '&lt;p&gt;sqdfqs&lt;/p&gt;', 0, 0, '2020-12-14 15:45:32', 'sdqf');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `variete` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `mod_prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `saison` int(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ID`, `nom`, `variete`, `photo`, `prix`, `mod_prix`, `quantite`, `saison`) VALUES
(1, 'patate', 'jaune', 'lien vers photo', 3, 0, 1, 0),
(2, 'patate', 'rose', 'lien vers photo', 2, 0, 126, 1),
(3, 'oeuf', 'gros', 'lien vers photo', 4.89, 2, 622, 1),
(4, 'courgette', '', 'lien vers photo', 1.65, 1, 21, 1),
(5, 'haricot', 'vert', 'lien random', 4.51, 0, 542, 1),
(6, 'poivron', 'rouge', 'photo de poivron', 6.54, 1, 10, 1),
(7, 'porcelet', 'de lait', 'porc', 15.21, 1, 5, 1),
(8, 'tomates', 'ronde', 'sfqkdfgqs', 5.21, 0, 40, 2);

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

DROP TABLE IF EXISTS `recettes`;
CREATE TABLE IF NOT EXISTS `recettes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `saison` int(255) NOT NULL,
  `ingredient` text NOT NULL,
  `instruction` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`ID`, `titre`, `description`, `photo`, `saison`, `ingredient`, `instruction`) VALUES
(1, 'titre', 'desc', 'photo', 0, 'ingr1§ingr2§ingr2', 'instru1§instru2'),
(2, 'tartifloute', 'c\'est délicieux', 'gratinée', 0, 'fromage§patates§fromage', 'couper§dans le plat§au four'),
(3, 'BBQ', 'bonne saucisse', 'ca fume', 2, 'saucisses§cotes de PORC', 'allumer§poser§manger'),
(4, 'pate au beurre', 'des pates', 'un plat', 1, 'pates§beurre', 'bouillir§plonger§egoutter'),
(5, 'moules frites', 'les moules en été c\'est génial', 'sdgfsdfgs', 2, 'moules§frites', 'cuire les moules §cuire les frites §déguster§se régaler');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `email`, `nom`, `prenom`, `mot_de_passe`, `role`) VALUES
(2, 'lucas.lablache@gmail.com', 'Lablache', 'Lucas', '$2y$10$2IQzXsu4KvZvkZ.CMr3Gg.GhPOFl1LBtNbm37oY40x9I4wdNyg.J2', 0),
(3, 'admin@ferme.com', 'romain', 'K', '$2y$10$1lhHaYJMDxrjw5ngao.LrunDmxJpcPVePXosCt7.OSQewi9SYh1iy', 1),
(4, 'jacky@test.com', 'jacky', 'test', '$2y$10$r1p4qDOZbtQuPa1aoQ8lyuP0jTa1XAuwrWsibrOBbxv7lQpb4nyAW', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
