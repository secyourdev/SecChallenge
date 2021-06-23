-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2021 at 04:18 PM
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
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `name`, `firstname`, `pseudo`, `mail`, `password`, `token`, `challenge1`, `challenge2`, `challenge3`) VALUES
(1, 'aaaa', 'aaaaa', 'aaaa', 'eee', 'lala', NULL, '', '', ''),
(2, 'dd', 'd', 'd', 'eee', 'eee', NULL, '', '', ''),
(3, 'vf', 'vvv', 'vv', 'vvv', 'vvv', NULL, '', '', ''),
(4, 'bb', 'bb', 'bb', 'bb', 'bbb', NULL, '', '', ''),
(5, 'vv', 'bb', 'bb', 'bbb', 'bbb', NULL, '', '', ''),
(6, 'BACHA', 'Elies', 'Eliesb', 'elies.bacha@edu.esiee.fr', 'Eliesbacha1', NULL, '', '', '5'),
(7, 'BACHA', 'Elies', 'elies', 'elies.bacha@edu.esiee.fr', 'e5485349d285bdeb84f5af775af0a21ad21a9af6b16f4e1709e9cedb4e1c05d2', NULL, '0', '0', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
