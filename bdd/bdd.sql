-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 31 Août 2016 à 12:25
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
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `post_date`, `theme`) VALUES
(1, 'azesqsdqzaeazea', 'zeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeaze', '0000-00-00 00:00:00', 'test'),
(2, 'testestsetsesdfazeazea', 'zeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeazezeazeazeaze', '0000-00-00 00:00:00', 'test');

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
-- Index pour les tables exportées
--

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
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
