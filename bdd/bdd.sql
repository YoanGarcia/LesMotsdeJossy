-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 22 Septembre 2016 à 01:38
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
(55, 'video 1', 'https://www.youtube.com/embed/y2KHqSXtEDc', '22 September 2016', 'video', 'retraite');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `theme` varchar(255) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `content`, `post_date`, `theme`, `img_link`, `hide`) VALUES
(13, 'contenu acceuil 1', '2016-09-22 00:30:53', 'acceuil', 'img/theme/acceuil/acceuil-13.jpg?t=1474497032', 0),
(14, 'contenu acceuil 2', '2016-09-22 00:31:00', 'acceuil', 'img/theme/acceuil/acceuil-14.jpg', 0),
(15, 'contenu acceuil 3', '2016-09-22 00:31:16', 'acceuil', 'img/theme/acceuil/acceuil-15.jpg', 0),
(16, 'contenu acceuil 4', '2016-09-22 00:32:23', 'acceuil', 'img/theme/acceuil/acceuil-16.jpg', 0),
(17, 'contenu acceuil 5', '2016-09-22 00:32:43', 'acceuil', 'img/theme/acceuil/acceuil-17.jpg', 0),
(18, 'contenu acceuil 6', '2016-09-22 00:32:49', 'acceuil', 'img/theme/acceuil/acceuil-18.jpg', 0),
(19, 'contenu retraite 1', '2016-09-22 00:38:02', 'retraite', 'img/theme/acceuil/acceuil-15.jpg', 0),
(20, 'contenu retraite 2', '2016-09-22 00:38:23', 'retraite', 'img/theme/acceuil/acceuil-16.jpg', 0),
(21, 'contenu retraite 3', '2016-09-22 00:38:29', 'retraite', 'img/theme/acceuil/acceuil-17.jpg', 0),
(22, 'contenu retraite 4', '2016-09-22 00:38:36', 'retraite', 'img/theme/acceuil/acceuil-18.jpg', 0),
(23, 'contenu spe 1', '2016-09-22 00:38:02', 'spe', 'img/theme/acceuil/acceuil-15.jpg', 0),
(24, 'contenu spe 2', '2016-09-22 00:38:23', 'spe', 'img/theme/acceuil/acceuil-16.jpg', 0),
(25, 'contenu spe 3', '2016-09-22 00:38:29', 'spe', 'img/theme/acceuil/acceuil-17.jpg', 0),
(26, 'contenu spe 4', '2016-09-22 00:38:36', 'spe', 'img/theme/acceuil/acceuil-18.jpg', 0),
(27, 'contenu as 1', '0000-00-00 00:00:00', 'as', 'img/theme/acceuil/acceuil-17.jpg', 0),
(28, 'contenu as 2', '0000-00-00 00:00:00', 'as', 'img/theme/acceuil/acceuil-17.jpg', 0),
(29, 'contenu as 3', '0000-00-00 00:00:00', 'as', 'img/theme/acceuil/acceuil-17.jpg', 0),
(30, 'contenu as 4', '0000-00-00 00:00:00', 'as', 'img/theme/acceuil/acceuil-17.jpg', 0),
(31, 'contenu cocci 1', '0000-00-00 00:00:00', 'cocci', 'img/theme/acceuil/acceuil-17.jpg', 0),
(32, 'contenu cocci 2', '0000-00-00 00:00:00', 'cocci', 'img/theme/acceuil/acceuil-17.jpg', 0),
(33, 'contenu cocci 3', '0000-00-00 00:00:00', 'cocci', 'img/theme/acceuil/acceuil-17.jpg', 0),
(34, 'contenu cocci 4', '0000-00-00 00:00:00', 'cocci', 'img/theme/acceuil/acceuil-17.jpg', 0),
(35, 'contenu etpuis 1', '0000-00-00 00:00:00', 'etpuis', 'img/theme/acceuil/acceuil-17.jpg', 0),
(36, 'contenu etpuis 2', '0000-00-00 00:00:00', 'etpuis', 'img/theme/acceuil/acceuil-17.jpg', 0),
(37, 'contenu etpuis 3', '0000-00-00 00:00:00', 'etpuis', 'img/theme/acceuil/acceuil-17.jpg', 0),
(38, 'contenu etpuis 4', '0000-00-00 00:00:00', 'etpuis', 'img/theme/acceuil/acceuil-17.jpg', 0),
(39, 'contenu fikidi 1', '0000-00-00 00:00:00', 'fikidi', 'img/theme/acceuil/acceuil-17.jpg', 0),
(40, 'contenu fikidi 2', '0000-00-00 00:00:00', 'fikidi', 'img/theme/acceuil/acceuil-17.jpg', 0),
(41, 'contenu fikidi 3', '0000-00-00 00:00:00', 'fikidi', 'img/theme/acceuil/acceuil-17.jpg', 0),
(42, 'contenu fikidi 4', '0000-00-00 00:00:00', 'fikidi', 'img/theme/acceuil/acceuil-17.jpg', 0),
(43, 'contenu francais 1', '0000-00-00 00:00:00', 'francais', 'img/theme/acceuil/acceuil-17.jpg', 0),
(44, 'contenu francais 2', '0000-00-00 00:00:00', 'francais', 'img/theme/acceuil/acceuil-17.jpg', 0),
(45, 'contenu francais 3', '0000-00-00 00:00:00', 'francais', 'img/theme/acceuil/acceuil-17.jpg', 0),
(46, 'contenu francais 4', '0000-00-00 00:00:00', 'francais', 'img/theme/acceuil/acceuil-17.jpg', 0),
(47, 'contenu manif 1', '0000-00-00 00:00:00', 'manif', 'img/theme/acceuil/acceuil-17.jpg', 0),
(48, 'contenu manif 2', '0000-00-00 00:00:00', 'manif', 'img/theme/acceuil/acceuil-17.jpg', 0),
(49, 'contenu manif 3', '0000-00-00 00:00:00', 'manif', 'img/theme/acceuil/acceuil-17.jpg', 0),
(50, 'contenu manif 4', '0000-00-00 00:00:00', 'manif', 'img/theme/acceuil/acceuil-17.jpg', 0),
(51, 'contenu pp 1', '0000-00-00 00:00:00', 'pp', 'img/theme/acceuil/acceuil-17.jpg', 0),
(52, 'contenu pp 2', '0000-00-00 00:00:00', 'pp', 'img/theme/acceuil/acceuil-17.jpg', 0),
(53, 'contenu pp 3', '0000-00-00 00:00:00', 'pp', 'img/theme/acceuil/acceuil-17.jpg', 0),
(54, 'contenu pp 4', '0000-00-00 00:00:00', 'pp', 'img/theme/acceuil/acceuil-17.jpg', 0),
(55, 'contenu reaap 1', '0000-00-00 00:00:00', 'reaap', 'img/theme/acceuil/acceuil-17.jpg', 0),
(56, 'contenu reaap 2', '0000-00-00 00:00:00', 'reaap', 'img/theme/acceuil/acceuil-17.jpg', 0),
(57, 'contenu reaap 3', '0000-00-00 00:00:00', 'reaap', 'img/theme/acceuil/acceuil-17.jpg', 0),
(58, 'contenu reaap 4', '0000-00-00 00:00:00', 'reaap', 'img/theme/acceuil/acceuil-17.jpg', 0),
(59, 'contenu tap 1', '0000-00-00 00:00:00', 'tap', 'img/theme/acceuil/acceuil-17.jpg', 0),
(60, 'contenu tap 2', '0000-00-00 00:00:00', 'tap', 'img/theme/acceuil/acceuil-17.jpg', 0),
(61, 'contenu tap 3', '0000-00-00 00:00:00', 'tap', 'img/theme/acceuil/acceuil-17.jpg', 0),
(62, 'contenu tap 4', '0000-00-00 00:00:00', 'tap', 'img/theme/acceuil/acceuil-17.jpg', 0),
(63, 'contenu theatre 1', '0000-00-00 00:00:00', 'theatre', 'img/theme/acceuil/acceuil-17.jpg', 0),
(64, 'contenu theatre 2', '0000-00-00 00:00:00', 'theatre', 'img/theme/acceuil/acceuil-17.jpg', 0),
(65, 'contenu theatre 3', '0000-00-00 00:00:00', 'theatre', 'img/theme/acceuil/acceuil-17.jpg', 0),
(66, 'contenu theatre 4', '0000-00-00 00:00:00', 'theatre', 'img/theme/acceuil/acceuil-17.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `amis`
--

CREATE TABLE `amis` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'admin@admin.fr', 'admin', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
