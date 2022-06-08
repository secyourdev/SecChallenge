-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2022 at 05:40 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `challenge`
--

CREATE TABLE `challenge` (
  `IdChallenge` int(11) NOT NULL,
  `Emplacement` text NOT NULL,
  `Reponse` text NOT NULL,
  `NomChallenge` text NOT NULL,
  `Competence1` text,
  `Competence2` text,
  `Competence3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `challenge`
--

INSERT INTO `challenge` (`IdChallenge`, `Emplacement`, `Reponse`, `NomChallenge`, `Competence1`, `Competence2`, `Competence3`) VALUES
(1, 'Challenge/Challenge1.html', 'Vous avez gagné', 'Trouver le fichier secret', 'Bruteforce', 'Exploitation de failles', NULL),
(2, 'Challenge/Challenge2.html', 'CyberSecuriTeach', 'Trouver le message caché sous l\'image', 'Stéganographie', 'Bruteforce', NULL),
(3, 'Challenge/Challenge3.html', 'salut tout le monde', 'Pourras-tu décrypter le message ?', 'Chiffrement : Code César', 'Decryptage', 'Langage Python'),
(4, 'Challenge/Challenge-mitm.html', 'ILoveChocolate', 'Man in the middle', 'arp poisoning', '', NULL),
(5, 'Challenge/Challenge-osint.html', '6718709afea3accd6415832982f15e13', 'OSINT', 'OSINT', 'Brute force', NULL);
INSERT INTO `challenge` (`IdChallenge`, `Emplacement`, `Reponse`, `NomChallenge`, `Competence1`, `Competence2`, `Competence3`) VALUES (NULL, 'Challenge/Challenge-ssh.html', '50617461746F725353484E6574636174', 'SSH', 'patator', 'ssh', 'netcat');
-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `Id` int(11) NOT NULL,
  `LienImage` text NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `EmplacementCours` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`Id`, `LienImage`, `Titre`, `Description`, `EmplacementCours`) VALUES
(1, 'images/docker1.png', 'Docker', 'Docker est l\'element essentiel afin de pouvoir profiter de nos tutoriels et challenges ', 'Cours/cours-docker.html'),
(2, 'images/metasploit.jpg', 'Metasploitable2', 'Voici une introduction à Metasploitable : interêt et installation', 'Cours/cours-meta.html'),
(3, 'images/brute.png', 'Bruteforce', 'Vous trouverez ici une introduction sur la notion de Bruteforce', 'Cours/cours-brute.html'),
(4, 'images/stegano.png', 'Stéganographie', 'Voici une introduction à la Stéganographie', 'Cours/cours-steg.html'),
(5, 'images/pirate.jpg', 'Le piratage informatique', 'Piratage informatique: Méthodes utilisées et solutions', 'Cours/cours-piratage.html'),
(6, 'images/crypto1.png', 'La cryptologie', 'Cours pour introduire la notion de cryptologie', 'Cours/cours-crypto.html'),
(7, 'images/sql1.jpg', 'Injection SQL', 'Qu\'est-ce qu\'une injection SQL?, Comment cela fonctionne ?, Comment s\'en protéger ?...', 'Cours/cours-sql.html'),
(8, 'images/adware1.png', 'Adware', 'Des publicités personalisées apparaissent sur votre ecran. Lisez ce cours pour en savoir plus.', 'Cours/cours-adware.html'),
(9, 'images/sudo.jpg', 'Faille sudo baron samedit', 'Qu\'est ce que la faille sudo Baron samedit ? Que permet elle d\'exploiter ?', 'Cours/cours-sudo.html'),
(10, 'images/log4shell.jpg', 'Log4shell', 'Qu\'est ce que la faille log4shell ? Que permet elle d\'exploiter ?', 'Cours/cours-log4shell.html'),
(11, 'images/osint.jpg', 'OSINT', 'L\'OSINT est de plus en plus répendu de nos jours, mais qu\'est ce que l\'OSINT ?', 'Cours/cours-osint.html');
INSERT INTO `cours` (`Id`, `LienImage`, `Titre`, `Description`, `EmplacementCours`) VALUES (NULL, 'images/honeypot.png', 'Honeypot', 'honeypot ? Comment se protéger ?', 'Cours/cours-honeypot.html');
INSERT INTO `cours` (`Id`, `LienImage`, `Titre`, `Description`, `EmplacementCours`) VALUES (NULL, 'images/reverse.jpg', 'Reverse Engineering', 'Reverse engineering : l\'art de déconstruire ', 'Cours/cours-reverse.html');
INSERT INTO `cours` (`Id`, `LienImage`, `Titre`, `Description`, `EmplacementCours`) VALUES (NULL, 'images/mitm.png', 'Man in the middle', 'Ici nous allons voir une des attaques les plus connues', 'Cours/cours-mitm.html');

-- --------------------------------------------------------

--
-- Table structure for table `rela_challenge_utilisateur`
--

CREATE TABLE `rela_challenge_utilisateur` (
  `IdChallenge` int(11) NOT NULL,
  `IdUtilisateur` int(11) NOT NULL,
  `Score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rela_challenge_utilisateur`
--

INSERT INTO `rela_challenge_utilisateur` (`IdChallenge`, `IdUtilisateur`, `Score`) VALUES
(1, 9, 5),
(2, 9, 5),
(3, 9, 5),
(1, 41, 0),
(2, 41, 0),
(3, 41, 0),
(1, 42, 0),
(2, 42, 0),
(3, 42, 0),
(1, 43, 0),
(2, 43, 0),
(3, 43, 0),
(4, 43, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tutoriel`
--

CREATE TABLE `tutoriel` (
  `IdTutoriel` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `Emplacement` text NOT NULL,
  `Image` text NOT NULL,
  `Description` text NOT NULL,
  `Reponse` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tutoriel`
--

INSERT INTO `tutoriel` (`IdTutoriel`, `Titre`, `Emplacement`, `Image`, `Description`, `Reponse`) VALUES
(1, 'Comment pénétrer dans un serveur ?', 'Tutoriel/tuto-ssh.html', 'images/ssh.png', 'Voici un tutoriel afin de pouvoir accéder à un serveur à l\'aide du Bruteforce', NULL),
(2, 'Comment avoir accès à l\'ordinateur d\'un autre ?', 'Tutoriel/tuto-vs.html', 'images/tuto2.png', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Vsftpd', NULL),
(3, 'Comment avoir accès à l\'ordinateur d\'un autre ? (Faut trouver un autre titre et une autre image)', 'Tutoriel/tuto-unreal.html', 'images/tuto2.png', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Unreal', NULL),
(4, 'Comment avoir accès à l\'ordinateur d\'un autre ? (Faut trouver un autre titre et une autre image)', 'Tutoriel/tuto-samba.html', 'images/tuto2.png', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Samba', NULL),
(5, 'Comment avoir accès à l\'ordinateur d\'un autre ? (trouver un autre titre et image)', 'Tutoriel/tuto-post.html', 'images/tuto2.png', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille PostgreSQL', NULL),
(6, 'Comment cacher un message secret dans une image ?', 'Tutoriel/tuto-steg.html', 'images/tutosteg.jpg', 'Voici un tutoriel afin de s\'initier à la stéganographie sur une image', NULL),
(7, 'Comment avoir accès à l\'ordinateur d\'un autre ? (trouver un autre nom/image)', 'Tutoriel/tuto-apache.html', 'images/tuto2.png', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Apache Tomcat', NULL);
INSERT INTO `tutoriel` (`IdTutoriel`, `Titre`, `Emplacement`, `Image`, `Description`, `Reponse`) VALUES (NULL, 'Reverse engineering android : les bases', 'Tutoriel/tuto-reverse.html', 'images/tuto2.png', 'Ce tuto va vous apprendre à utiliser les outils jadx et apktool ', '636e2d6a4e34cf74146572ec64442cee');
INSERT INTO `tutoriel` (`IdTutoriel`, `Titre`, `Emplacement`, `Image`, `Description`, `Reponse`) VALUES (NULL, 'Comment bruteforce des fichiers zippés', 'Tutoriel/tuto-fcrackzip.html', 'images/tuto2.png', 'Présentation de l\'outil fcrackzip et utilisation de bruteforce', '67bfc546ff9a58b63d9f08e2123c3e94');
INSERT INTO `tutoriel` (`IdTutoriel`, `Titre`, `Emplacement`, `Image`, `Description`, `Reponse`) VALUES (NULL, 'CUPP', 'Tutoriel/tuto-cupp.html', 'images/tuto2.png', 'Un outil osint simple pour commencer l\'osint', 'c6f46767fa75cc27accee0bb85ffa23abe6fdd94d16387218fed3b311b38f38e'); 
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
  `token` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `name`, `firstname`, `pseudo`, `mail`, `password`, `token`) VALUES
(1, 'aaaa', 'aaaaa', 'aaaa', 'eee', 'lala', NULL),
(2, 'dd', 'd', 'd', 'eee', 'eee', NULL),
(3, 'vf', 'vvv', 'vv', 'vvv', 'vvv', NULL),
(4, 'bb', 'bb', 'bb', 'bb', 'bbb', NULL),
(5, 'vv', 'bb', 'bb', 'bbb', 'bbb', NULL),
(6, 'BACHA', 'Elies', 'Eliesb', 'elies.bacha@edu.esiee.fr', 'Eliesbacha1', NULL),
(7, 'BACHA', 'Elies', 'elies', 'elies.bacha@edu.esiee.fr', 'e5485349d285bdeb84f5af775af0a21ad21a9af6b16f4e1709e9cedb4e1c05d2', NULL),
(9, 'a', 'a', 'a', 'a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challenge`
--
ALTER TABLE `challenge`
  ADD PRIMARY KEY (`IdChallenge`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tutoriel`
--
ALTER TABLE `tutoriel`
  ADD PRIMARY KEY (`IdTutoriel`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challenge`
--
ALTER TABLE `challenge`
  MODIFY `IdChallenge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tutoriel`
--
ALTER TABLE `tutoriel`
  MODIFY `IdTutoriel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
