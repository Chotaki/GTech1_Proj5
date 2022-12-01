-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 01 Décembre 2022 à 18:48
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grpa9`
--

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `h1` varchar(50) NOT NULL,
  `h2_1` varchar(50) NOT NULL,
  `p1` text NOT NULL,
  `img_1` varchar(80) NOT NULL,
  `h2_2` varchar(50) NOT NULL,
  `p2` text NOT NULL,
  `img_2` varchar(80) NOT NULL,
  `h2_3` varchar(50) NOT NULL,
  `p3` text NOT NULL,
  `img_3` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `home`
--

INSERT INTO `home` (`h1`, `h2_1`, `p1`, `img_1`, `h2_2`, `p2`, `img_2`, `h2_3`, `p3`, `img_3`) VALUES
('Projects', 'Japasnd d\r\n', 'Anaëlle participated at the Japan Expo 2022 with Kaio Gaming. She organized two tournaments, one of them being on Super Smash Bros and the other on Demon Slayer. She also had the chance to go and animate a Demon Slayer king of the hill on the biggest stage of the event.', 'img/stage.JPG', 'Graphic Glzam,f\r\n\r\n', 'Alongside Yohan Glad, the president of Kaio Gaming, Anaëlle has reworked the graphic charter of the association they are part of. It was a long process to create the global visual but what was even longer was to create merchandise with it.', 'img/charter.png', 'IJSO', 'In 2019, Anaëlle had the chance to be selected to participate in an international science olympiad in order to represent France alongside 5 other students. The olympiad took place in Doha, Qatar and gathered altogether 6 students and 3 teachers from over 70 different countries.', 'img/ijso.JPG');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
