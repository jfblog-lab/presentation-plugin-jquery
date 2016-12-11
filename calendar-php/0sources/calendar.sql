-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Sam 07 Juin 2014 à 10:09
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `calendar`
--

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE IF NOT EXISTS `rdv` (
  `rdv_id` int(11) NOT NULL AUTO_INCREMENT,
  `rdv_iddate` int(8) NOT NULL,
  `rdv_motif` text NOT NULL,
  PRIMARY KEY (`rdv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `rdv`
--

INSERT INTO `rdv` (`rdv_id`, `rdv_iddate`, `rdv_motif`) VALUES
(1, 1, 'Bibliothèque Calendario : <a href="http://tympanus.net/codrops/2012/11/27/calendario-a-flexible-calendar-plugin/" target="_blank">Calendario: A Flexible Calendar Plugin | Codrops</a>'),
(2, 2, '<span>Mon 30ème anniversaire</span>'),
(3, 2, '<span>Faire la Java le soir</span>'),
(4, 3, 'Galerie d''icône gratuite : <a href="http://icongal.com/" target="_blank">Icon Gallery / 404,316 Free Icons to Search and Download</a>'),
(5, 4, '<span>Christmas Day</span>'),
(6, 5, '<span>New Year''s Eve</span>');

-- --------------------------------------------------------

--
-- Structure de la table `rdv_date`
--

CREATE TABLE IF NOT EXISTS `rdv_date` (
  `rdv_iddate` int(8) NOT NULL AUTO_INCREMENT,
  `rdv_date` varchar(255) NOT NULL,
  PRIMARY KEY (`rdv_iddate`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `rdv_date`
--

INSERT INTO `rdv_date` (`rdv_iddate`, `rdv_date`) VALUES
(1, '06-05-2014'),
(2, '06-20-2014'),
(3, '06-21-2014'),
(4, '12-25-2014'),
(5, '12-31-2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
