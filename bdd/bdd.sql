-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 20 Septembre 2016 à 14:29
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mdj`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `activites`
--

INSERT INTO `activites` (`id`, `title`, `link`, `post_date`, `type`, `theme`) VALUES
(1, 'testesetsetsetet', 'setsetsetsetstset', 'tstesetsetset', 'setsetset', 'test'),
(2, 'aaaa', 'aaa', 'aaaa', 'aaaaa', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `exp_date` datetime NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `agenda`
--

INSERT INTO `agenda` (`id`, `title`, `content`, `post_date`, `exp_date`, `theme`) VALUES
(1, 'zer', 'zrezerzerzerzrezer', '2016-08-05 00:19:00', '2016-08-06 07:36:41', 'testa'),
(2, 'zerzerzerdfsdfsdf', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', '2016-08-21 02:16:31', '2016-08-13 15:18:07', 'testa');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `theme` varchar(255) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `post_date`, `theme`, `img_link`, `hide`) VALUES
(7, 'titre1', 'ea', '2016-09-19 16:21:00', 'acceuil', 'img/theme/acceuil/acceuil-7.jpg?t=1474302485?t=1474302571?t=1474302579?t=1474302582?t=1474302588', 0),
(8, 'titre2', 'sopalin', '2016-09-19 16:21:00', 'acceuil', 'img/theme/acceuil/acceuil-8.jpg', 0),
(9, 'titre3', 'chat pas contente', '2016-09-19 16:21:00', 'acceuil', 'img/theme/acceuil/acceuil-9.jpg?t=1474302404?t=1474302415?t=1474374406', 0),
(10, 'titre4', 'aze', '2016-09-19 16:21:00', 'acceuil', '?t=1474301907?t=1474301972', 0),
(11, 'titre5', 'contenu 5', '2016-09-19 16:21:00', 'acceuil', 'img/theme/acceuil/acceuil-11.jpg?t=1474301907?t=1474302213', 0),
(12, 'titre6', 'contenu 6', '2016-09-19 16:21:00', 'acceuil', 'img/theme/acceuil/acceuil-12.jpg?t=1474302213?t=1474302251?t=1474374012?t=1474374019', 0);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(7, 'azeaazeaze@aze.fr'),
(8, 'azeazaeeaze@aze.fr'),
(1, 'azeazeaze@aze.fr'),
(2, 'azeazeeaze@aze.fr'),
(9, 'azeazeezaeraze@aze.fr'),
(6, 'azeazeezeraze@aze.fr'),
(10, 'azzereaazeaze@aze.fr'),
(5, 'azzereazeaze@aze.fr');

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `name`, `img`) VALUES
(12, 'testaa', 'img/partenaire/testaa.jpg'),
(13, '', 'aze'),
(14, '', 'aze'),
(15, 'parte12', 'img/partenaire/parte12.jpg'),
(16, 'zezezeazeazeazeazeazeaze', 'img/partenaire/zezezeazeazeazeazeazeaze.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `token_expire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `token`, `token_expire`) VALUES
(1, 'admin', 'admin', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
