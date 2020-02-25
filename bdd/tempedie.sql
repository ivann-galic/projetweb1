-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2020 at 01:53 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tempedie`
--

CREATE TABLE `tempedie` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero` int(4) UNSIGNED NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type_1` varchar(10) NOT NULL,
  `type_2` varchar(10) DEFAULT NULL,
  `trait_1` varchar(20) NOT NULL,
  `trait_2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tempedie`
--

INSERT INTO `tempedie` (`id`, `numero`, `nom`, `type_1`, `type_2`, `trait_1`, `trait_2`) VALUES
(1, 7, 'Platypet', 'Eau', 'Toxic', 'Virulent', 'Amphibie'),
(2, 8, 'Platox', 'Eau', 'Toxic', 'Résistant', 'Vaillant'),
(3, 9, 'Platimous', 'Eau', 'Toxic', 'Zen', 'Déterminé'),
(4, 10, 'Swali', 'Nature', NULL, 'Mithridate', 'Partageur'),
(5, 11, 'Loali', 'Nature', 'Vent', 'Botaniste', 'Revanchard'),
(6, 12, 'Tateru', 'Neutre', NULL, 'Vaillant', 'Délicat'),
(7, 16, 'Paharo', 'Vent', NULL, 'Amical', 'Planeur'),
(8, 17, 'Paharac', 'Vent', NULL, 'Caféiné', 'Fraternel'),
(9, 18, 'Granpah', 'Vent', NULL, 'Persécuteur', 'HéroÏque'),
(10, 21, 'Bunbun', 'Terre', 'Cristal', 'Caféiné', 'Vaillant'),
(11, 22, 'Mudrid', 'Terre', 'Cristal', 'Réceptif', 'Résistant'),
(12, 23, 'Hidody', 'Nature', NULL, 'Botaniste', 'Bioélectrique'),
(13, 24, 'Taifu', 'Nature', NULL, 'Vaillant', 'Revanchard'),
(14, 72, 'Crystle', 'Cristal', NULL, 'Amphibie', 'Reposé'),
(15, 73, 'Sherald', 'Cristal', NULL, 'Réflecteur', 'Endurci');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tempedie`
--
ALTER TABLE `tempedie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempedie`
--
ALTER TABLE `tempedie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
