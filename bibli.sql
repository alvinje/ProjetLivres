-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 17 Septembre 2015 à 08:28
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
CREATE DATABASE `bibli` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bibli`;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE IF NOT EXISTS `livre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(30) NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `description` varchar(70) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `livre`
--

INSERT INTO `livre` (`id`, `titre`, `auteur`, `description`, `image`) VALUES
(2, 'Don Quichotte', 'Miguel de Cervantes', 'Un classique Espagnol.', 'Don_Quichotte'),
(3, 'L''Étranger', 'Albert Camus', 'Roman français du XXème.', 'Etranger'),
(4, 'Faust', 'Goethe', '', 'Faust'),
(5, 'Le Chateau', 'Franz Kafka', 'Roman du célèbre écrivain tchèque Kafka', 'Le_Chateau'),
(6, 'Essais', 'Montaigne', 'Mieux vaut tête bien faite que tête bien pleine', 'Essais'),
(7, '1984', 'George Orwell', 'Un roman anglais', '1984');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
