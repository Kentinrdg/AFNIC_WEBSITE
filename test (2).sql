-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 19 mars 2018 à 16:16
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `challenge`
--

CREATE TABLE `challenge` (
  `id` int(11) NOT NULL,
  `challenge` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `challenge`
--

INSERT INTO `challenge` (`id`, `challenge`, `password`, `point`) VALUES
(0, 'cha1', 'JeSuisUnP@sswordEnBase64', 5),
(0, 'cha1', 'JeSuisUnP@sswordEnBase64', 5);

-- --------------------------------------------------------

--
-- Structure de la table `challenge1`
--

CREATE TABLE `challenge1` (
  `id` int(11) DEFAULT NULL,
  `users` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `challenge1`
--

INSERT INTO `challenge1` (`id`, `users`, `password`, `point`) VALUES
(NULL, 'jeremie', 'root', 10);

-- --------------------------------------------------------

--
-- Structure de la table `challenge3`
--

CREATE TABLE `challenge3` (
  `CT_NUMBER` varchar(255) NOT NULL,
  `VM_NAME` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `challenge3`
--

INSERT INTO `challenge3` (`CT_NUMBER`, `VM_NAME`, `password`, `point`) VALUES
('', '', '@zeR25TYPuyA', 30),
('', '', '@zeR25TYPuyA', 30);

-- --------------------------------------------------------

--
-- Structure de la table `log`
--

CREATE TABLE `log` (
  `Id` int(11) NOT NULL,
  `User` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Mdp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Statut` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `point_total` int(11) NOT NULL,
  `equipe` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `log`
--

INSERT INTO `log` (`Id`, `User`, `Mdp`, `Prenom`, `Statut`, `point_total`, `equipe`) VALUES
(21, 'pp', 'c483f6ce851c9ecd9fb835ff7551737c', 'pp', 'admin', 10, 'NONE'),
(22, 'kentin@efsef.fr', '4a5ea11b030ec1cfbc8b9947fdf2c872', 'keke', 'user', 0, 'NONE'),
(23, 'teamred', '2d14df704b8cc8456d15c26337911e7f', 'teamred', 'user', 0, 'RED'),
(25, 'teamblue', 'acdd0b1bd000a8f95e258d82509645f7', 'teamblue', 'user', 0, 'BLUE'),
(19, 'pp', 'c483f6ce851c9ecd9fb835ff7551737c', 'pp', 'admin', 10, 'NONE'),
(20, 'blue', '48d6215903dff56238e52e8891380c8f', 'blue', 'user', 0, 'NONE');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `log`
--
ALTER TABLE `log`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
