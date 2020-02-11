-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 10 fév. 2020 à 11:38
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--
CREATE DATABASE IF NOT EXISTS `projet` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projet`;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `valeur_t` varchar(255) NOT NULL,
  `unite_t` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--
-- Base de données :  `projetpilote`
--
CREATE DATABASE IF NOT EXISTS `projetpilote` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projetpilote`;

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

DROP TABLE IF EXISTS `billets`;
CREATE TABLE IF NOT EXISTS `billets` (
  `id_b` int(255) NOT NULL AUTO_INCREMENT,
  `titre_b` varchar(255) NOT NULL,
  `texte_b` text NOT NULL,
  `date_b` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_b`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id_b`, `titre_b`, `texte_b`, `date_b`) VALUES
(1, 'teste', 'teste teste teste teste teste teste', '2019-02-06 11:35:25'),
(2, 'teste', 'pour pour pour ôur r', '2019-02-06 11:38:05'),
(3, 'les moocs', 'APPRENTISSAGE EN LIGNE La formation en ligne, encore appelée apprentissage en ligne, e-formation ou e-learning, désigne l’ensemble des solutions et moyens permettant l’apprentissage par des moyens électroniques. La formation en ligne inclut de cette façon des sites web éducatifs, la téléformation, l’enseignement télématique, ou encore l’e-training, notamment.&lt;br /&gt;\r\n', '2019-02-11 12:30:13');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id_c` int(255) NOT NULL AUTO_INCREMENT,
  `id_b_c` int(255) NOT NULL,
  `noms_c` varchar(255) NOT NULL,
  `texte_c` text NOT NULL,
  `date_c` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_c`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_c`, `id_b_c`, `noms_c`, `texte_c`, `date_c`) VALUES
(12, 3, 'ABA AIDARA', 'uè-iki_k', '2019-03-04 11:40:30'),
(11, 1, 'Samba Ba', '&lt;p&gt;hertz&lt;/p&gt;', '2019-02-08 11:54:40'),
(10, 1, 'Samba Ba', 'bonjour tu veux dire quoi par teste', '2019-02-08 11:53:10'),
(9, 2, 'Samba Ba', 'que des bla bla', '2019-02-08 11:51:52');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id_d` int(255) NOT NULL AUTO_INCREMENT,
  `nom_d` varchar(255) NOT NULL,
  `adresse_d` varchar(255) NOT NULL,
  `taille_d` int(255) NOT NULL,
  `date_d` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_d`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`id_d`, `nom_d`, `adresse_d`, `taille_d`, `date_d`) VALUES
(4, 'Platon-apologie.pdf', 'uploads/Document:_4233add34d5be781b59a22da0244eff0.pdf', 375094, '2019-02-07 15:19:14'),
(3, 'Tous les cours de geo.pdf', 'uploads/Document:_67d3a02f3411fe52758f88f76b8ff76c.pdf', 942858, '2019-02-07 14:37:38'),
(6, 'Communiqué procédures de remplacement des outils de travail.pdf', 'uploads/Document:_15127ea0cfaaa7532a2794ab3bbd13f9.pdf', 77801, '2019-02-10 23:28:12'),
(7, 'chapitre 2_ systeme GNU linux.pdf', 'uploads/Document:_ec2655f9d077679a84e11f08c9b40da3.pdf', 1317229, '2019-02-11 12:15:06'),
(8, 'Communiqué-catégorristion-de-tutorat.pdf', 'uploads/Document:_94fff1032bc1060a70e927b776520542.pdf', 201288, '2019-03-04 11:42:14');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id_m` int(255) NOT NULL AUTO_INCREMENT,
  `prenom_m` varchar(255) NOT NULL,
  `nom_m` varchar(255) NOT NULL,
  `email_m` varchar(255) NOT NULL,
  `telephone_m` varchar(255) NOT NULL,
  `mot_de_passe_m` varchar(100) NOT NULL,
  `date_m` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_m`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id_m`, `prenom_m`, `nom_m`, `email_m`, `telephone_m`, `mot_de_passe_m`, `date_m`) VALUES
(1, 'Khadim', 'FAYE', 'skhadimfaye@gmail.com', '778034386', '1946', '2019-02-05 18:49:29'),
(2, 'Samba', 'Ba', 'dse@ezd.dz', '778569856', '123', '2019-02-05 20:19:45'),
(3, 'Malick', 'DIAKHATE', 'dery@yahoo.fr', '762565898', '456', '2019-02-05 20:41:26'),
(4, 'Oumou', 'SYLLA', 'hertez@huio.jio', '702569856', '456', '2019-02-05 21:39:33'),
(5, 'semoune', 'mbaye', 'senoune09@gmail.com', '773629957', 'ss212121', '2019-02-27 12:04:46'),
(7, 'ABA', 'AIDARA', 'aidara03@gmail.com', '708243517', '8928', '2019-03-04 11:36:44'),
(8, 'Khoudja', 'DIAGNE', 'diagne@gmail.com', '772322323', '123', '2019-07-09 11:49:55'),
(9, 'Abdou', 'FAYE', 'faye@gmail.com', '778565656', '1212', '2019-07-27 16:33:14');

-- --------------------------------------------------------

--
-- Structure de la table `route`
--

DROP TABLE IF EXISTS `route`;
CREATE TABLE IF NOT EXISTS `route` (
  `id_c` int(100) NOT NULL AUTO_INCREMENT,
  `nom_c` varchar(100) NOT NULL,
  `chemin` text NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `route`
--

INSERT INTO `route` (`id_c`, `nom_c`, `chemin`) VALUES
(1, 'Nouveau_1418980314.txt', 'doc/Nouveau_1418980314.txt');

-- --------------------------------------------------------

--
-- Structure de la table `tchats`
--

DROP TABLE IF EXISTS `tchats`;
CREATE TABLE IF NOT EXISTS `tchats` (
  `id_tch` int(255) NOT NULL AUTO_INCREMENT,
  `nom_tch` varchar(255) NOT NULL,
  `texte_tch` varchar(255) NOT NULL,
  `date_tch` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tch`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tchats`
--

INSERT INTO `tchats` (`id_tch`, `nom_tch`, `texte_tch`, `date_tch`) VALUES
(1, 'Khadim FAYE', 'bonjour tout le monde', '2019-02-08 11:04:03'),
(2, 'Malick DIAKHATE', 'ou ou ou ou ou ou ou', '2019-02-08 11:11:16'),
(3, 'Samba Ba', 'bonjour khadim', '2019-02-08 11:50:41'),
(4, 'Oumou SYLLA', 'salut a vous', '2019-02-11 12:17:03'),
(5, 'Oumou SYLLA', 'vous allez bien ?', '2019-02-11 12:23:39'),
(6, 'semoune mbaye', 'ss', '2019-02-27 12:06:24'),
(7, 'ABA AIDARA', 'Bonjour à vous tous', '2019-03-04 11:38:50'),
(8, 'Khoudja DIAGNE', 'bonjour tout le monde', '2019-07-09 11:52:16'),
(9, 'Khadim FAYE', 'jhgyyh', '2019-12-12 13:57:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
