-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 25 Juin 2020 à 15:01
-- Version du serveur :  5.7.30-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `GrainDeVrac`
--

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `city`
--

INSERT INTO `city` (`id`, `name`, `departement`, `created_at`, `updated_at`) VALUES
(1, 'Paris', '75', '2020-06-25 07:56:16', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `datasPage`
--

CREATE TABLE `datasPage` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `image` blob,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE `date` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `startHour` float NOT NULL,
  `endHour` float NOT NULL,
  `cityId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `date`
--

INSERT INTO `date` (`id`, `date`, `startHour`, `endHour`, `cityId`, `created_at`, `updated_at`) VALUES
(1, '2020-06-20 22:00:00', 7.5, 22, 1, '0000-00-00 00:00:00', NULL),
(2, '2020-06-18 22:00:00', 5, 11, 1, '0000-00-00 00:00:00', NULL),
(3, '2020-06-22 22:00:00', 7, 11, 1, '0000-00-00 00:00:00', NULL),
(4, '2020-06-26 22:00:00', 4, 6, 1, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `difficulty`
--

CREATE TABLE `difficulty` (
  `id` int(11) NOT NULL,
  `difficultyLevel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `difficulty`
--

INSERT INTO `difficulty` (`id`, `difficultyLevel`) VALUES
(1, 'easy'),
(2, 'medium'),
(3, 'hardcore');

-- --------------------------------------------------------

--
-- Structure de la table `highlighted`
--

CREATE TABLE `highlighted` (
  `id` int(11) NOT NULL,
  `productId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `highlighted`
--

INSERT INTO `highlighted` (`id`, `productId`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `indicativePrice`
--

CREATE TABLE `indicativePrice` (
  `id` int(10) UNSIGNED NOT NULL,
  `indicativePrice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `indicativePrice`
--

INSERT INTO `indicativePrice` (`id`, `indicativePrice`) VALUES
(1, 'low'),
(2, 'medium'),
(3, 'expensive');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `forwarderId` int(10) UNSIGNED NOT NULL,
  `statusId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messageStatus`
--

CREATE TABLE `messageStatus` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `producerId` int(11) NOT NULL,
  `marketable` tinyint(4) NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `shortDescription` text NOT NULL,
  `description` text NOT NULL,
  `bio` tinyint(4) NOT NULL DEFAULT '0',
  `price` float(10,2) UNSIGNED NOT NULL,
  `availability` tinyint(4) NOT NULL DEFAULT '1',
  `image` blob,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `producerId`, `marketable`, `title`, `shortDescription`, `description`, `bio`, `price`, `availability`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Letnille', 'Des lentilles', 'Ce sont de super bonne lentilles', 0, 0.50, 1, NULL, '2020-06-25 08:08:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `shortDescription` text NOT NULL,
  `description` text NOT NULL,
  `indicativePriceId` int(10) UNSIGNED NOT NULL,
  `difficultyId` int(10) UNSIGNED NOT NULL,
  `saison` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recipeXproduct`
--

CREATE TABLE `recipeXproduct` (
  `id` int(10) UNSIGNED NOT NULL,
  `producerId` int(10) UNSIGNED NOT NULL,
  `recipeId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recipeXuser`
--

CREATE TABLE `recipeXuser` (
  `id` int(11) NOT NULL,
  `contactId` int(11) NOT NULL,
  `recipeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'producer'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Structure de la table `step`
--

CREATE TABLE `step` (
  `id` int(11) NOT NULL,
  `recipeId` int(10) UNSIGNED NOT NULL,
  `stepContent` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `roleId` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `cityId` int(11) UNSIGNED NOT NULL,
  `country` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mute` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `roleId`, `name`, `firstName`, `adress`, `cityId`, `country`, `phone`, `mail`, `mute`, `created_at`, `update_at`) VALUES
(1, 1, 'Barbier', 'Jean-Paul', '4 rue des peupliers', 1, 'France', '01020304045', 'JP@barbier.com', 0, '2020-06-25 07:57:20', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `userXproduct`
--

CREATE TABLE `userXproduct` (
  `id` int(11) NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `productId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `datasPage`
--
ALTER TABLE `datasPage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `difficulty`
--
ALTER TABLE `difficulty`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `highlighted`
--
ALTER TABLE `highlighted`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `indicativePrice`
--
ALTER TABLE `indicativePrice`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messageStatus`
--
ALTER TABLE `messageStatus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recipeXproduct`
--
ALTER TABLE `recipeXproduct`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recipeXuser`
--
ALTER TABLE `recipeXuser`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `step`
--
ALTER TABLE `step`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `userXproduct`
--
ALTER TABLE `userXproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `datasPage`
--
ALTER TABLE `datasPage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `date`
--
ALTER TABLE `date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `difficulty`
--
ALTER TABLE `difficulty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `highlighted`
--
ALTER TABLE `highlighted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `messageStatus`
--
ALTER TABLE `messageStatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `step`
--
ALTER TABLE `step`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
