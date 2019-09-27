-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 24 sep. 2019 à 13:50
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `valeroBDD`
--
CREATE DATABASE IF NOT EXISTS `Réservation` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Réservation`;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--
n
CREATE TABLE `Réservation` (
  `id` int(45) NOT NULL,
  `nom` text,
  `prenom` text,
  `mail` text,
  `telephone` varchar(10) DEFAULT NULL,
  `nb` int(11) DEFAULT NULL,
  `msg` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `prenom`, `mail`, `telephone`, `nb`, `msg`) VALUES
(1, 'yoann', 'Yoann', 'yoannvlr0706@gmail.com', '4564564654', 5, 'hgfhg'),
(7, 'yoann', 'valero', 'fzejklfjze@gzerjgzer', '0619617459', 5, 'fzef'),
(8, 'yao', 'zef', 'yoannvlr0706@gmail.com', '0656456545', 5, 'fsdf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservation`
--
ALTER TABLE `Réservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `Réservation`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;