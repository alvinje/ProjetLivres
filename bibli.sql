-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 24 Septembre 2015 à 09:36
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bibli`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE IF NOT EXISTS `auteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`id`, `nom`, `prenom`, `description`) VALUES
(1, 'De Cervantes', 'Miguel', 'Romancier, poète et dramaturge espagnol.'),
(2, 'Camus', 'Albert', 'Albert Camus, né le 7 novembre 1913 à Mondovi, près d''Annaba, en Algérie, et mort le 4 janvier 1960 à Villeblevin, dans l''Yonne en France, est un écrivain, philosophe, romancier, dramaturge, essayiste'),
(3, 'Goethe', '', 'Johann Wolfgang von Goethe, né le 28 août 1749 à Francfort et mort le 22 mars 1832 à Weimar à 82 ans, est un romancier, dramaturge, poète, théoricien de l''art.'),
(4, 'Kafka', 'Franz', 'Franz Kafka est un écrivain pragois de langue allemande et de religion juive, né le 3 juillet 1883 à Prague et mort le 3 juin 1924 à Kierling.'),
(5, 'Montaigne', '', 'Michel Eyquem de Montaigne, dit Montaigne, seigneur de Montaigne, né le 28 février 1533 et mort le 13 septembre 1592 à Saint-Michel-de-Montaigne, est un philosophe et moraliste de la Renaissance.'),
(6, 'Orwell', 'George', 'George Orwell, nom de plume d''Eric Arthur Blair, né le 25 juin 1903 à Motihari pendant la période du Raj britannique et mort le 21 janvier 1950 à Londres, est un écrivain et journaliste anglais.');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE IF NOT EXISTS `livre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(30) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `description` varchar(70) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `livre`
--

INSERT INTO `livre` (`id`, `auteur`, `titre`, `description`, `image`) VALUES
(1, 'De Cervantes', 'Don Quichotte', 'Un classique Espagnol.', 'Don_Quichotte'),
(2, 'Camus', 'L''Étranger', 'Roman français du XXème.', 'Etranger'),
(3, 'Goethe', 'Faust', '', 'Faust'),
(4, 'Kafka', 'Le Chateau', 'Roman du célèbre écrivain tchèque Kafka', 'Le_Chateau'),
(5, 'Montaigne', 'Essais', 'Mieux vaut tête bien faite que tête bien pleine', 'Essais'),
(6, 'Orwell', '1984', 'Un roman anglais', '1984');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
