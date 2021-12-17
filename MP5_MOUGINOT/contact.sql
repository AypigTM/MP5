-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 déc. 2021 à 13:53
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mp4`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` text DEFAULT NULL,
  `prenom` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `telephone` text DEFAULT NULL,
  `qualite` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `telephone`, `qualite`) VALUES
(1, 'Benida', 'Amhed', 'amhed@gmail.com', '06.45.78.09.34', 'Très gentil'),
(2, 'Choissy', 'Lucine', 'luluci@gmail.com', '07.89.89.46.23', 'Kawai'),
(3, 'Mathieu', 'Poulot', 'batmanpoulot@gmail.com', '06.34.51.72.03', 'Poney fan'),
(4, 'Francet', 'Geneviève', 'francet.genevieve05@gmail.com', '06.23.34.45.56', 'Odeur corporelle excitante'),
(5, 'Mimille', 'Myriam', 'mimimymy@gmail.com', '06.06.07.89.02', 'Trop mimi'),
(6, 'Jorge', 'Benjamin', 'benjijo@hotmail.com', '07.19.29.59.67', 'Bon vivant'),
(7, 'Charlot', 'Charlotte', 'chacha@orange-france.fr', '06.19.29.54.49', 'Chaplin fan'),
(8, 'Benabdilou', 'Emissane', 'emi.bena@gmail.com', '06.39.97.38.85', 'Gentille'),
(9, 'Manchot', 'Roger', 'rorochot@gmail.com', '07.83.67.29.95', 'Doué en orthografe'),
(10, 'Tablot', 'Ricou', 'ricou52160@gmail.com', '07.34.12.13.72', 'Le plus gentil du monde'),
(11, 'Fuzzilo', 'Alexis', 'Alexis.fuzzilo@hotmail.com', '06.56.78.03.17', ''),
(12, 'Mathieu', 'Kristine', 'krikri@outlook.com', '07.45.62.94.79', 'Super soeur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
