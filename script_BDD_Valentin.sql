-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2020 at 09:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Portfolio_MVC`
--

-- --------------------------------------------------------

--
-- Table structure for table `PFC_AccueilContent`
--

CREATE TABLE `PFC_AccueilContent` (
  `id` int(11) NOT NULL,
  `nom` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PFC_AccueilContent`
--

INSERT INTO `PFC_AccueilContent` (`id`, `nom`) VALUES
(1, 'Valentin');

-- --------------------------------------------------------

--
-- Table structure for table `PFC_Article`
--

CREATE TABLE `PFC_Article` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `lien` varchar(500) NOT NULL,
  `corp` text NOT NULL,
  `date_publication` date NOT NULL,
  `auteur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PFC_Navigation`
--

CREATE TABLE `PFC_Navigation` (
  `id_nav` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PFC_Navigation`
--

INSERT INTO `PFC_Navigation` (`id_nav`, `libelle`, `lien`) VALUES
(1, 'Accueil', 'http://localhost/soloh-Portfolio/index.php/C_Accueil'),
(2, 'Mes Projets', 'http://localhost/soloh-Portfolio/index.php/C_Projet');

-- --------------------------------------------------------

--
-- Table structure for table `PFC_Projet`
--

CREATE TABLE `PFC_Projet` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `derniere_maj` date NOT NULL,
  `description` text NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PFC_Projet`
--

INSERT INTO `PFC_Projet` (`id`, `nom`, `derniere_maj`, `description`, `lien`) VALUES
(1, 'Nouveau Projet 1', '2020-10-13', 'toto l\'asticot', 'http://apple.com'),
(2, 'Projet 2', '2020-10-04', 'Le second projet', 'https://valentin-moreau.fr'),
(5, 'Projet 3', '2020-11-02', 'ceci est un nouveau test', 'lien vers le test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PFC_AccueilContent`
--
ALTER TABLE `PFC_AccueilContent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `PFC_Article`
--
ALTER TABLE `PFC_Article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `PFC_Navigation`
--
ALTER TABLE `PFC_Navigation`
  ADD PRIMARY KEY (`id_nav`);

--
-- Indexes for table `PFC_Projet`
--
ALTER TABLE `PFC_Projet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PFC_AccueilContent`
--
ALTER TABLE `PFC_AccueilContent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `PFC_Article`
--
ALTER TABLE `PFC_Article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PFC_Navigation`
--
ALTER TABLE `PFC_Navigation`
  MODIFY `id_nav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `PFC_Projet`
--
ALTER TABLE `PFC_Projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
