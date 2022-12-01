-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 01 Décembre 2022 à 18:50
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

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `h1` varchar(200) NOT NULL,
  `span1` varchar(500) NOT NULL,
  `p1` text NOT NULL,
  `span2` varchar(500) NOT NULL,
  `p2` text NOT NULL,
  `span3` varchar(500) NOT NULL,
  `p3` text NOT NULL,
  `span4` varchar(500) NOT NULL,
  `p4` text NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `img4` varchar(200) NOT NULL,
  `a_title` varchar(200) NOT NULL,
  `a_link` varchar(200) NOT NULL,
  `h2_1` varchar(300) NOT NULL,
  `h2_2` varchar(300) NOT NULL,
  `h2_3` varchar(300) NOT NULL,
  `h2_4` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projects`
--

INSERT INTO `projects` (`id`, `h1`, `span1`, `p1`, `span2`, `p2`, `span3`, `p3`, `span4`, `p4`, `img1`, `img2`, `img3`, `img4`, `a_title`, `a_link`, `h2_1`, `h2_2`, `h2_3`, `h2_4`) VALUES
(2, 'Japan Expo', 'Going to Paris', 'As an association evolving in the gaming and eSport industry in France and Luxembourg, the Japan Expo is a must to gain visibility. With the covid, the Japan Expo didn’t happen for two years so in 2022 we knew it was going to be a crazy event. We planned everything in two months and in july we were able to attend the event.', 'Organizing tournaments', 'Anaëlle had the chance to be at the head of a team for two tournaments during the event. She had to organize the inscriptions as well as the competition itself. In the morning she was listing all the contestants while in the afternoon she was taking care of the players and the games happening with Alexis’ help while contesting as well.', 'Animating on stage', 'Anaëlle was lucky enough to comment on a few tournaments on the biggest stage of the event. The games were Demon Slayer and Naruto and she was alongside Yohan that co-animated, it was a fun and rewarding experience.', 'Animating a stand', 'This is the main occupation of the association so it wasn’t the first time that Anaëlle animated a stand. The only difference was the amount of people she saw and talked to. It was a bit more stressful because all the people passing by were potential thieves.', 'img/install.JPG', 'img/stand.JPG', 'img/team.JPG', 'img/toornament.JPG', 'Japan Expo', 'https://www.japan-expo-paris.com/fr/', 'Installation', 'Our Stand', 'The Team', 'Toornament');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `admin`) VALUES
(1, 'enzo', 'enzo', 'enzo@gab.fr', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
