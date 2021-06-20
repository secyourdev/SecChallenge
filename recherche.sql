-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2021 at 08:08 AM
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
-- Database: `recherche`
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
(1, 'images/docker.png', 'Docker', 'Docker est l\'element essentiel afin de pouvoir profiter de nos tutoriels et challenges ', 'cours-docker.html'),
(2, 'images/metasploit.jpg', 'Metasploitable2', 'Voici une introduction à Metasploitable : interêt et installation', ''),
(3, 'images/brute.png', 'Bruteforce', 'Vous trouverez ici une introduction sur la notion de Bruteforce', ''),
(4, 'images/stegano.png', 'Stéganographie', 'Voici une introduction à la Stéganographie', ''),
(5, 'images/ssh.png', 'Comment pénétrer dans un serveur ?', 'Voici un tutoriel afin de pouvoir accéder à un serveur à l\'aide du Bruteforce', ''),
(6, 'images/tuto2.png', 'Comment avoir accès à l\'ordinateur d\'un autre ?', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Vsftpd', ''),
(7, 'images/tuto2.png', 'Comment avoir accès à l\'ordinateur d\'un autre ?', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Unreal', ''),
(8, 'images/tuto2.png', 'Comment avoir accès à l\'ordinateur d\'un autre ?', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Samba', ''),
(9, 'images/tuto2.png', 'Comment avoir accès à l\'ordinateur d\'un autre ?', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille PostgreSQL', ''),
(10, 'images/tutosteg.jpg', 'Comment cacher un message secret dans une image ?', 'Voici un tutoriel afin de s\'initier à la stéganographie', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
