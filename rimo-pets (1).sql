-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 28 déc. 2024 à 21:36
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rimo-pets`
--

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `imageUrl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `imageUrl`) VALUES
(1, 'Get an online appointment', 79.99, 'images/shutterstock.jpg'),
(2, 'Pet sitting', 59.99, 'images/pet_sitting.jpg'),
(3, 'Book your appointement now !', 24.99, 'images/appointement.png'),
(9, 'Harness Vest for Large Dogs', 10.5, 'images/harnessVest.jpg'),
(10, 'Pet Dye Hair', 15.5, 'images/dye.jpg'),
(11, 'Pet Shower', 14, 'images/shower.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, 'rima', '0000'),
(5, 'naycem', '1234'),
(6, 'chtioui', '1458'),
(7, 'ines', '1458'),
(8, 'bourouis', '0000'),
(9, 'dorra', '1258'),
(10, 'khadija', '1478'),
(11, 'neyrouz', '1236'),
(12, 'sarra', '159'),
(13, 'siwar', '1478'),
(14, 'dorra', '1258'),
(15, 'oumaima', '1478'),
(16, 'salwa', '1258'),
(17, 'ali', '0000'),
(18, 'dhouha', '1258'),
(19, 'khaled', '1588'),
(20, 'hamdi', '0000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
