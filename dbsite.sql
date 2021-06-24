-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2021 at 03:10 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `Id` int(11) NOT NULL,
  `lien` text NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `cour` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`Id`, `lien`, `titre`, `contenu`, `cour`) VALUES
(1, 'images/docker.png', 'Docker', 'Docker est l\'element essentiel afin de pouvoir profiter de nos tutoriels et challenges ', 'cours-docker.php'),
(2, 'images/metasploit.jpg', 'Metasploitable2', 'Voici une introduction à Metasploitable : interêt et installation', 'cours-meta.php'),
(3, 'images/brute.png', 'Bruteforce', 'Vous trouverez ici une introduction sur la notion de Bruteforce', 'cours-brute.php'),
(4, 'images/stegano.png', 'Stéganographie', 'Voici une introduction à la Stéganographie', 'cours-steg.php'),
(11, 'images/pirate.jpg', 'Le piratage informatique', 'Piratage informatique: Méthodes utilisées et solutions', 'cours-piratage.php'),
(13, 'images/crypto1.png', 'La cryptologie', 'Cours pour introduire la notion de cryptologie', 'cours-crypto.php'),
(14, 'images/sql1.jpg', 'Injection SQL', 'Qu\'est-ce qu\'une injection SQL?, Comment cela fonctionne ?, Comment s\'en protéger ?...', 'cours-sql.php'),
(17, 'images/adware1.png', 'Adware', 'Des publicités personalisées apparaissent sur votre ecran. Lisez ce cours pour en savoir plus.', 'cours-adware.php');

-- --------------------------------------------------------

--
-- Table structure for table `reponse`
--

CREATE TABLE `reponse` (
  `answer1` text NOT NULL,
  `answer2` text NOT NULL,
  `answer3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reponse`
--

INSERT INTO `reponse` (`answer1`, `answer2`, `answer3`) VALUES
('Vous avez gagné', 'CyberSecuriTeach', 'salut tout le monde');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `token` varchar(64) DEFAULT NULL,
  `challenge1` text NOT NULL,
  `challenge2` text NOT NULL,
  `challenge3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
