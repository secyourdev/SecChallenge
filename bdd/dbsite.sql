-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2022 at 08:06 AM
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
  `Competence3` text,
  `Categorie` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `challenge`
--

INSERT INTO `challenge` (`IdChallenge`, `Emplacement`, `Reponse`, `NomChallenge`, `Competence1`, `Competence2`, `Competence3`, `Categorie`) VALUES
(1, 'Challenge/Challenge1.html', 'Vous avez gagné', 'Trouver le fichier secret', 'Bruteforce', 'Exploitation de failles', NULL, NULL),
(2, 'Challenge/Challenge2.html', 'CyberSecuriTeach', 'Trouver le message caché sous l\'image', 'Stéganographie', 'Bruteforce', NULL, NULL),
(3, 'Challenge/Challenge3.html', 'salut tout le monde', 'Pourras-tu décrypter le message ?', 'Chiffrement : Code César', 'Decryptage', 'Langage Python', NULL),
(4, 'Challenge/Challenge-mitm.html', 'ILoveChocolate', 'Man in the middle', 'arp poisoning', '', NULL, NULL),
(5, 'Challenge/Challenge-osint.html', '6718709afea3accd6415832982f15e13', 'OSINT', 'OSINT', 'Brute force', NULL, NULL),
(6, 'Challenge/Challenge-john.html', 'ilovejeremy', 'John the ripper', 'Bruteforce', NULL, NULL, NULL),
(7, 'Challenge/Challenge-nessus.html', 'SSH', 'Nessus', NULL, NULL, NULL, NULL),
(8, 'Challenge/Challenge-ssh.html', '50617461746F725353484E6574636174', 'SSH', 'patator', 'ssh', 'netcat', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `Id` int(11) NOT NULL,
  `LienImage` text NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `EmplacementCours` text NOT NULL,
  `Categorie` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`Id`, `LienImage`, `Titre`, `Description`, `EmplacementCours`, `Categorie`) VALUES
(1, 'images/docker1.png', 'Docker', 'Docker est l\'element essentiel afin de pouvoir profiter de nos tutoriels et challenges ', 'Cours/cours-docker.html', NULL),
(2, 'images/metasploit.jpg', 'Metasploitable2', 'Voici une introduction à Metasploitable : interêt et installation', 'Cours/cours-meta.html', NULL),
(3, 'images/brute.png', 'Bruteforce', 'Vous trouverez ici une introduction sur la notion de Bruteforce', 'Cours/cours-brute.html', NULL),
(4, 'images/stegano.png', 'Stéganographie', 'Voici une introduction à la Stéganographie', 'Cours/cours-steg.html', NULL),
(5, 'images/pirate.jpg', 'Le piratage informatique', 'Piratage informatique: Méthodes utilisées et solutions', 'Cours/cours-piratage.html', NULL),
(6, 'images/crypto1.png', 'La cryptologie', 'Cours pour introduire la notion de cryptologie', 'Cours/cours-crypto.html', NULL),
(7, 'images/sql1.jpg', 'Injection SQL', 'Qu\'est-ce qu\'une injection SQL?, Comment cela fonctionne ?, Comment s\'en protéger ?...', 'Cours/cours-sql.html', NULL),
(8, 'images/adware1.png', 'Adware', 'Des publicités personalisées apparaissent sur votre ecran. Lisez ce cours pour en savoir plus.', 'Cours/cours-adware.html', NULL),
(9, 'images/sudo.jpg', 'Log4shell', 'Qu\'est ce que la faille sudo Baron samedit ? Que permet elle d\'exploiter ?', 'Cours/cours-sudo.html', NULL),
(10, 'images/log4shell.jpg', 'Log4shell', 'Qu\'est ce que la faille log4shell ? Que permet elle d\'exploiter ?', 'Cours/cours-log4shell.html', NULL),
(11, 'images/osint.jpg', 'OSINT', 'L\'OSINT est de plus en plus répendu de nos jours, mais qu\'est ce que l\'OSINT ?', 'Cours/cours-osint.html', NULL),
(12, 'images/baron.jpg', 'Vulnérabilité Baron Samedit', 'Depuis plus de 10 ans, il était possible de devenir administrateur sur n\'importe quelle machine utilisant sudo. Mais comment est-ce possible ?', 'Cours/cours-baron.html', NULL),
(13, 'images/roca.jpg', 'Vulnérabilité ROCA', 'Comment le plus puissant algorithme de chiffrement des données a-t-il pu devenir une passoire en quelques instants ?', 'Cours/cours-roca.html', NULL),
(14, 'images/cours-reverse-shell.png', 'pdf reverse shell', 'Comment prendre le contrôle d\'une machine Windows avec un fichier pdf ?', 'Cours/cours-reverse-shell.html', NULL),
(15, 'images/cours-nessus.png', '', '', 'Cours/cours-nessus.html', NULL),
(16, 'images/rsa.jpg', 'Chiffrement RSA', 'Comment fonctionne le plus puissant et le plus utilisé des algorithmes de chiffrement des données ?', 'Cours/cours-rsa.html', NULL),
(17, 'images/honeypot.png', 'Honeypot', 'honeypot ? Comment se protéger ?', 'Cours/cours-honeypot.html', NULL),
(18, 'images/reverse.jpg', 'Reverse Engineering', 'Reverse engineering : l\'art de déconstruire ', 'Cours/cours-reverse.html', NULL),
(19, 'images/mitm.png', 'Man in the middle', 'Ici nous allons voir une des attaques les plus connues', 'Cours/cours-mitm.html', NULL),
(20, 'images/arpspoof.png', 'Arpspoofing', 'Type d\'attaque dans lequel un attaquant envoie de faux messages arp sur un réseau local ', 'Cours/cours-arpspoof.html', NULL);

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
(1, 10, 0),
(2, 10, 0),
(3, 10, 0),
(4, 10, 0),
(5, 10, 0);

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
  `Reponse` text,
  `Categorie` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tutoriel`
--

INSERT INTO `tutoriel` (`IdTutoriel`, `Titre`, `Emplacement`, `Image`, `Description`, `Reponse`, `Categorie`) VALUES
(1, 'Comment pénétrer dans un serveur ?', 'Tutoriel/tuto-ssh.html', 'images/ssh.png', 'Voici un tutoriel afin de pouvoir accéder à un serveur à l\'aide du Bruteforce', NULL, NULL),
(2, 'Comment avoir accès à l\'ordinateur d\'un autre ?', 'Tutoriel/tuto-vs.html', 'images/tuto2.png', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Vsftpd', NULL, NULL),
(3, 'Comment avoir accès à l\'ordinateur d\'un autre ? (Faut trouver un autre titre et une autre image)', 'Tutoriel/tuto-unreal.html', 'images/tuto2.png', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Unreal', NULL, NULL),
(4, 'Comment avoir accès à l\'ordinateur d\'un autre ? (Faut trouver un autre titre et une autre image)', 'Tutoriel/tuto-samba.html', 'images/tuto2.png', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Samba', NULL, NULL),
(5, 'Comment avoir accès à l\'ordinateur d\'un autre ? (trouver un autre titre et image)', 'Tutoriel/tuto-post.html', 'images/tuto2.png', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille PostgreSQL', NULL, NULL),
(6, 'Comment cacher un message secret dans une image ?', 'Tutoriel/tuto-steg.html', 'images/tutosteg.jpg', 'Voici un tutoriel afin de s\'initier à la stéganographie sur une image', NULL, NULL),
(7, 'Comment avoir accès à l\'ordinateur d\'un autre ? (trouver un autre nom/image)', 'Tutoriel/tuto-apache.html', 'images/tuto2.png', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Apache Tomcat', NULL, NULL),
(8, 'john the ripper', 'Tutoriel/tuto-john.html', 'images/tuto-john.png', 'Voici un tutoriel pour cracker le hash d\'un mot de passe permettant d\'accéder à une session root', NULL, NULL),
(9, 'pdf reverse shell', 'Tutoriel/tuto-reverse-shell.html', 'images/cours-reverse-shell.png', 'Comment prendre le contrôle d\'une machine Windows avec un fichier pdf ?', NULL, NULL),
(10, '', 'Tutoriel/OWASP-ZAP.html', '', '', NULL, NULL),
(11, 'Windows Management Instrumentation Command-line (WMIC)', 'Tutoriel/wmic.html', 'images/tuto-wmic.png', 'accéder aux paramètres internes d\'une machine Windows en utilisant le logiciel WMIC', NULL, NULL),
(12, 'PwDump', 'Tutoriel/tuto-pwdump.html', 'images/pwdump.png', 'Récupération des hash des mots de passe utilisateurs sous Windows', NULL, NULL),
(13, 'Reverse engineering android : les bases', 'Tutoriel/tuto-reverse.html', 'images/tuto2.png', 'Ce tuto va vous apprendre à utiliser les outils jadx et apktool ', '636e2d6a4e34cf74146572ec64442cee', NULL),
(14, 'Comment bruteforce des fichiers zippés', 'Tutoriel/tuto-fcrackzip.html', 'images/tuto2.png', 'Présentation de l\'outil fcrackzip et utilisation de bruteforce', '67bfc546ff9a58b63d9f08e2123c3e94', NULL),
(15, 'CUPP', 'Tutoriel/tuto-cupp.html', 'images/tuto2.png', 'Un outil osint simple pour commencer l\'osint', 'c6f46767fa75cc27accee0bb85ffa23abe6fdd94d16387218fed3b311b38f38e', NULL), 
(16, 'Arpspoof', 'Tutoriel/tuto-arpspoof.html', 'images/arpspoof.png', 'Ce tuto vous présente l\'outil de ligne de commande arpspoof.', NULL, NULL);

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
(9, 'a', 'a', 'a', 'a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', NULL),
(10, 'g', 'g', 'g', 'g@g.g', 'cd0aa9856147b6c5b4ff2b7dfee5da20aa38253099ef1b4a64aced233c9afe29', NULL);

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
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tutoriel`
--
ALTER TABLE `tutoriel`
  MODIFY `IdTutoriel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
