-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 17 juin 2022 à 09:44
-- Version du serveur : 5.7.24
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `challenge`
--

CREATE TABLE `challenge` (
  `IdChallenge` int(11) NOT NULL,
  `Emplacement` text NOT NULL,
  `Reponse` text NOT NULL,
  `NomChallenge` text NOT NULL,
  `Competence1` text,
  `Competence2` text,
  `Competence3` text,
  `Categorie` text,
  `ScoreMax` int(11) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `challenge`
--

INSERT INTO `challenge` (`IdChallenge`, `Emplacement`, `Reponse`, `NomChallenge`, `Competence1`, `Competence2`, `Competence3`, `Categorie`, `ScoreMax`) VALUES
(1, 'Challenge/Challenge1/Challenge1.html', 'Vous avez gagné', 'Trouver le fichier secret', 'Brute force', 'Exploitation de failles', NULL, 'Attaque de mot de passe', 5),
(2, 'Challenge/Challenge2/Challenge2.html', 'CyberSecuriTeach', 'Trouver le message caché sous l\'image', 'Stéganographie', 'Bruteforce', NULL, 'Stéganographie', 5),
(3, 'Challenge/Challenge3/Challenge3.html', 'salut tout le monde', 'Pourras-tu décrypter le message ?', 'Chiffrement : Code César', 'Decryptage', 'Langage Python', NULL, 5),
(5, 'Challenge/Challenge-mitm/Challenge-mitm.html', 'ILoveChocolate', 'Man in the middle', 'arp poisoning', NULL, NULL, 'Collecte d\'information', 5),
(6, 'Challenge/Challenge-osint/Challenge-osint.html', '6718709afea3accd6415832982f15e13', 'OSINT', 'OSINT', 'Brute force', NULL, 'Collecte d\'information', 5),
(7, 'Challenge/Challenge-john/Challenge-john.html', 'ilovejeremy', 'John the ripper', 'Brute force', NULL, NULL, 'Attaque de mot de passe', 5),
(8, 'Challenge/Challenge-nessus/Challenge-nessus.html', 'SSH', 'Nessus', NULL, NULL, NULL, 'Scanner de vulnérabilité', 5),
(9, 'Challenge/Challenge-ssh/challenge-ssh.html', '50617461746F725353484E6574636174', 'SSH', 'patator', 'ssh', 'netcat', 'Prise de contrôle', 5),
(10, 'Challenge/challenge-rainbowcrack/challenge-rainbowcrack.html', 'ici alpha il nous faut un bonbon et vite', 'Rainbowcrack', NULL, NULL, NULL, 'Attaque de mot de passe', 5),
(11, 'Challenge/challenge-aperisolve/challenge-aperisolve.html', 'LeChallengeEstReussi', 'Challenge Apéri\'Solve', 'Apéri\'Solve', NULL, NULL, 'Stéganographie', 5),
(12, 'Challenge/challenge-stegano/challenge-stegano.html', 'l0vE-5teg4n0', 'Stéganographie', 'Stéganographie', 'Cyberchef', NULL, 'Stéganographie', 5),
(13, 'Challenge/challenge-wmic/challenge-wmic.html', '5da507ae6b4cfb86904b5651ce99839138eae6f5', 'Wmic', 'Commandes Wmic', NULL, NULL, 'Collecte d\'information', 5);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
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
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`Id`, `LienImage`, `Titre`, `Description`, `EmplacementCours`, `Categorie`) VALUES
(1, 'Cours/cours-docker/docker1.png', 'Docker', 'Docker est l\'element essentiel afin de pouvoir profiter de nos tutoriels et challenges ', 'Cours/cours-docker/cours-docker.html', 'Outil'),
(2, 'Cours/cours-meta/metasploit.jpg', 'Metasploitable2', 'Voici une introduction à Metasploitable : interêt et installation', 'Cours/cours-meta/cours-meta.html', 'Outil'),
(3, 'Cours/cours-brute//brute.png', 'Bruteforce', 'Vous trouverez ici une introduction sur la notion de Bruteforce', 'Cours/cours-brute/cours-brute.html', 'Notion'),
(4, 'Cours/cours-steg/stegano.png', 'Stéganographie', 'Voici une introduction à la Stéganographie', 'Cours/cours-steg/cours-steg.html', 'Notion'),
(5, 'Cours/cours-piratage/pirate.jpg', 'Le piratage informatique', 'Piratage informatique: Méthodes utilisées et solutions', 'Cours/cours-piratage/cours-piratage.html', 'Notion'),
(6, 'Cours/cours-crypto/crypto1.png', 'La cryptologie', 'Cours pour introduire la notion de cryptologie', 'Cours/cours-crypto/cours-crypto.html', 'Notion'),
(7, 'Cours/cours-sql/sql1.jpg', 'Injection SQL', 'Qu\'est-ce qu\'une injection SQL?, Comment cela fonctionne ?, Comment s\'en protéger ?...', 'Cours/cours-sql/cours-sql.html', 'Notion'),
(8, 'Cours/cours-adware/adware1.png', 'Adware', 'Des publicités personalisées apparaissent sur votre ecran. Lisez ce cours pour en savoir plus.', 'Cours/cours-adware/cours-adware.html', 'Notion'),
(9, 'Cours/cours-sudo/sudo.jpg', 'Vulnérabilité Sudo', 'Qu\'est ce que la faille sudo Baron samedit ? Que permet elle d\'exploiter ?', 'Cours/cours-sudo/cours-sudo.html', 'Faille'),
(11, 'Cours/cours-osint/osint.jpg', 'OSINT', 'L\'OSINT est de plus en plus répendu de nos jours, mais qu\'est ce que l\'OSINT ?', 'Cours/cours-osint/cours-osint.html', 'Notion'),
(12, 'Cours/cours-baron/baron.jpg', 'Vulnérabilité Baron Samedit', 'Depuis plus de 10 ans, il était possible de devenir administrateur sur n\'importe quelle machine utilisant sudo. Mais comment est-ce possible ?', 'Cours/cours-baron/cours-baron.html', 'Faille'),
(13, 'Cours/cours-roca/roca.jpg', 'Vulnérabilité ROCA', 'Comment le plus puissant algorithme de chiffrement des données a-t-il pu devenir une passoire en quelques instants ?', 'Cours/cours-roca/cours-roca.html', 'Faille'),
(14, 'Cours/cours-reverse-shell/cours-reverse-shell.png', 'pdf reverse shell', 'Comment prendre le contrôle d\'une machine Windows avec un fichier pdf ?', 'Cours/cours-reverse-shell/cours-reverse-shell.html', 'Notion'),
(16, 'Cours/cours-rsa/rsa.jpg', 'Chiffrement RSA', 'Comment fonctionne le plus puissant et le plus utilisé des algorithmes de chiffrement des données ?', 'Cours/cours-rsa/cours-rsa.html', 'Notion'),
(17, 'Cours/cours-arpspoof/arpspoof.png', 'Arpspoofing', 'Type d\'attaque basé sur l\'envoie de faux messages ARP', 'Cours/cours-arpspoof/cours-arpspoof.html', 'Notion'),
(18, 'Cours/cours-honeypot/honeypot.png', 'Honeypot', 'honeypot ? Comment se protéger ?', 'Cours/cours-honeypot/cours-honeypot.html', 'Défense'),
(19, 'Cours/cours-mitm/mitm.png', 'Man in the middle', 'Ici nous allons voir une des attaques les plus connues', 'Cours/cours-mitm/cours-mitm.html', 'Notion'),
(20, 'Cours/cours-reverse/Reverse.jpeg', 'Reverse Engineering', 'Reverse engineering : l\'art de déconstruire', 'Cours/cours-reverse/cours-reverse.html', 'Notion'),
(21, 'Cours/cours-log4shell/log4shell.jpg', 'Log4shell', '\'Qu\'est ce que la faille log4shell ? Que permet-elle d\'exploiter ?', 'Cours/cours-log4shell/cours-log4shell.html', 'Faille'),
(22, 'Cours/cours-msfvenom/virus.png', 'msfvenom : tromper l\'antivirus ?', 'Ce cours vous permettra de connaître les différentes méthodes ainsi que leur limites pour créer un virus indétectable d\'un antivirus', 'Cours/cours-msfvenom/cours-msfvenom.html', 'Outil'),
(23, 'Cours/cours-hachage/Image_hach.jpg', 'Les Fonctions de Hachage', 'Comment faire pour s\'assurer qu\'un message n\'ait pas été modifié ?', 'Cours/cours-hachage/cours-hachage.html', 'Notion'),
(24, 'Cours/cours-kingphisher/image-premiere-page.jpg', 'King-Phisher', 'Vous trouverez ici une introduction sur une boîte à outils pour les campagnes de phishing', 'Cours/cours-kingphisher/cours-kingphisher.html', 'Outil'),
(25, 'Cours/cours-xxe/images/image.png', 'Faille XXE', 'Qu\'est-ce que la faille XXE ? Que permet-elle de réaliser ?', 'Cours/cours-xxe/cours-failleXXE.html', 'Faille');

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `Id` int(11) NOT NULL,
  `LienPresentation` text NOT NULL,
  `LienImage` text NOT NULL,
  `Titre` text NOT NULL,
  `Description` text NOT NULL,
  `Categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`Id`, `LienPresentation`, `LienImage`, `Titre`, `Description`, `Categorie`) VALUES
(1, 'Presentation/pres-mitm/pres-mitm.html', 'Presentation/pres-mitm/mitm.png', 'Présentation : L\'attaque de l\'homme du milieu (MITM)', 'Cette présentation vous expliquera ce qu\'est l\'attaque par l\'homme du milieu, le déroulement d\'une attaque ainsi que comment s\'en protéger.', ''),
(2, 'Presentation/pres-phishing/pres-phishing.html', 'Presentation/pres-phishing/phishing.png', 'Présentation : Le phishing (hammeçonnage)', 'Cette présentation vous expliquera ce qu\'est le phishing, comment s\'en protéger et que faire si on en est victime.', ''),
(3, 'Presentation/pres-ransomware/pres-ransomware.html', 'Presentation/pres-ransomware/ransomware.png', 'Présentation : Le ransomware (rançonlogiciel)', 'Cette présentation vous expliquera ce qu\'est un ransomware, comment se protéger de ces logiciels et que faire si on en est victime.', ''),
(4, 'Presentation/pres-xss/pres-xss.html', 'Presentation/pres-xss/xss.png', 'Présentation : Une attaque XSS', 'Cette présentation vous expliquera ce qu\'est une attaque XSS, l\'impact d\'une telle attaque et comment s\'en protéger.', '');

-- --------------------------------------------------------

--
-- Structure de la table `rela_challenge_utilisateur`
--

CREATE TABLE `rela_challenge_utilisateur` (
  `IdChallenge` int(11) NOT NULL,
  `IdUtilisateur` int(11) NOT NULL,
  `Score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rela_challenge_utilisateur`
--

INSERT INTO `rela_challenge_utilisateur` (`IdChallenge`, `IdUtilisateur`, `Score`) VALUES
(1, 1, 0),
(1, 2, 0),
(1, 3, 0),
(1, 4, 0),
(1, 5, 0),
(1, 6, 0),
(1, 7, 0),
(1, 9, 5),
(1, 10, 0),
(1, 11, 0),
(1, 12, 0),
(1, 13, 0),
(2, 1, 0),
(2, 2, 0),
(2, 3, 0),
(2, 4, 0),
(2, 5, 0),
(2, 6, 0),
(2, 7, 0),
(2, 9, 5),
(2, 10, 0),
(2, 11, 0),
(2, 12, 0),
(2, 13, 0),
(3, 1, 0),
(3, 2, 0),
(3, 3, 0),
(3, 4, 0),
(3, 5, 0),
(3, 6, 0),
(3, 7, 0),
(3, 9, 0),
(3, 10, 0),
(3, 11, 0),
(3, 12, 0),
(3, 13, 0),
(5, 1, 0),
(5, 2, 0),
(5, 3, 0),
(5, 4, 0),
(5, 5, 0),
(5, 6, 0),
(5, 7, 0),
(5, 9, 0),
(5, 10, 0),
(5, 11, 0),
(5, 12, 0),
(5, 13, 0),
(6, 1, 0),
(6, 2, 0),
(6, 3, 0),
(6, 4, 0),
(6, 5, 0),
(6, 6, 0),
(6, 7, 0),
(6, 9, 0),
(6, 10, 0),
(6, 11, 0),
(6, 12, 0),
(6, 13, 0),
(7, 1, 0),
(7, 2, 0),
(7, 3, 0),
(7, 4, 0),
(7, 5, 0),
(7, 6, 0),
(7, 7, 0),
(7, 9, 0),
(7, 10, 0),
(7, 11, 0),
(7, 12, 0),
(7, 13, 0),
(8, 1, 0),
(8, 2, 0),
(8, 3, 0),
(8, 4, 0),
(8, 5, 0),
(8, 6, 0),
(8, 7, 0),
(8, 9, 0),
(8, 10, 0),
(8, 11, 0),
(8, 12, 0),
(8, 13, 0),
(9, 1, 0),
(9, 2, 0),
(9, 3, 0),
(9, 4, 0),
(9, 5, 0),
(9, 6, 0),
(9, 7, 0),
(9, 9, 0),
(9, 10, 0),
(9, 11, 0),
(9, 12, 0),
(9, 13, 0),
(10, 1, 0),
(10, 2, 0),
(10, 3, 0),
(10, 4, 0),
(10, 5, 0),
(10, 6, 0),
(10, 7, 0),
(10, 9, 0),
(10, 10, 0),
(10, 11, 0),
(10, 12, 0),
(10, 13, 0),
(11, 1, 0),
(11, 2, 0),
(11, 3, 0),
(11, 4, 0),
(11, 5, 0),
(11, 6, 0),
(11, 7, 0),
(11, 9, 0),
(11, 10, 0),
(11, 11, 0),
(11, 12, 0),
(11, 13, 0),
(12, 1, 0),
(12, 2, 0),
(12, 3, 0),
(12, 4, 0),
(12, 5, 0),
(12, 6, 0),
(12, 7, 0),
(12, 9, 0),
(12, 10, 0),
(12, 11, 0),
(12, 12, 0),
(12, 13, 0),
(13, 1, 0),
(13, 2, 0),
(13, 3, 0),
(13, 4, 0),
(13, 5, 0),
(13, 6, 0),
(13, 7, 0),
(13, 9, 0),
(13, 10, 0),
(13, 11, 0),
(13, 12, 0),
(13, 13, 0);

-- --------------------------------------------------------

--
-- Structure de la table `tutoriel`
--

CREATE TABLE `tutoriel` (
  `IdTutoriel` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `Description` text NOT NULL,
  `Reponse` text,
  `Emplacement` text NOT NULL,
  `Image` text NOT NULL,
  `Categorie` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tutoriel`
--

INSERT INTO `tutoriel` (`IdTutoriel`, `Titre`, `Description`, `Reponse`, `Emplacement`, `Image`, `Categorie`) VALUES
(1, 'Comment pénétrer dans un serveur ?', 'Voici un tutoriel afin de pouvoir accéder à un serveur à l\'aide du Bruteforce', NULL, 'Tutoriel/tuto-ssh/tuto-ssh.html', 'Tutoriel/tuto-ssh/ssh.png', 'Prise de contrôle'),
(2, 'Comment avoir accès à l\'ordinateur d\'un autre ?', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Vsftpd', NULL, 'Tutoriel/tuto-vs/tuto-vs.html', 'Tutoriel/tuto-vs/Vsftpd.png', 'Prise de contrôle'),
(3, 'Comment avoir accès à l\'ordinateur d\'un autre ? (Faut trouver un autre titre et une autre image)', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Unreal', NULL, 'Tutoriel/tuto-unreal/tuto-unreal.html', 'Tutoriel/tuto-unreal/Unreal.png', 'Prise de contrôle'),
(4, 'Comment avoir accès à l\'ordinateur d\'un autre ? (Faut trouver un autre titre et une autre image)', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Samba', NULL, 'Tutoriel/tuto-samba/tuto-samba.html', 'Tutoriel/tuto-samba/Samba.png', 'Prise de contrôle'),
(5, 'Comment avoir accès à l\'ordinateur d\'un autre ? (trouver un autre titre et image)', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille PostgreSQL', NULL, 'Tutoriel/tuto-post/tuto-post.html', 'Tutoriel/tuto-post/Postegre.png', 'Prise de contrôle'),
(6, 'Comment cacher un message secret dans une image ?', 'Voici un tutoriel afin de s\'initier à la stéganographie sur une image', NULL, 'Tutoriel/tuto-steg/tuto-steg.html', 'Tutoriel/tuto-steg/tutosteg.jpg', 'Stéganographie'),
(7, 'Comment avoir accès à l\'ordinateur d\'un autre ? (trouver un autre nom/image)', 'Voici un tutoriel afin d\'avoir accès au PC d\'un autre en exploitant la faille Apache Tomcat', NULL, 'Tutoriel/tuto-apache/tuto-apache.html', 'Tutoriel/tuto-apache/Tomcat.png', 'Prise de contrôle'),
(8, 'john the ripper', 'Voici un tutoriel pour cracker le hash d\'un mot de passe permettant d\'accéder à une session root', NULL, 'Tutoriel/tuto-john/tuto-john.html', 'Tutoriel/tuto-john/tuto-john.png', 'Attaque de mot de passe'),
(9, 'pdf reverse shell', 'Comment prendre le contrôle d\'une machine Windows avec un fichier pdf ?', NULL, 'Tutoriel/tuto-reverse-shell/tuto-reverse-shell.html', 'Tutoriel/tuto-reverse-shell/cours-reverse-shell.png', 'Prise de contrôle'),
(10, 'owasp zap', 'OWASP ZAP est un scanner de vulnérabilités très répandu, nous allons donc voir comment s\'en servir', NULL, 'Tutoriel/OWASP-ZAP/OWASP-ZAP.html', 'Tutoriel/OWASP-ZAP/image.png', 'Scanner de vulnérabilité'),
(11, 'Windows Management Instrumentation Command-line (WMIC)', 'accéder aux paramètres internes d\'une machine Windows en utilisant le logiciel WMIC', NULL, 'Tutoriel/wmic/wmic.html', 'Tutoriel/wmic/tuto-wmic.png', 'Collecte d\'information'),
(12, 'PwDump', 'Récupération des hash des mots de passe utilisateurs sous Windows', NULL, 'Tutoriel/tuto-pwdump/tuto-pwdump.html', 'Tutoriel/tuto-pwdump/pwdump.png', 'Attaque de mot de passe'),
(13, 'Nessus', 'Nessus est un logiciel de sécurité informatique et nous allons apprendre à l\'utiliser', NULL, 'Tutoriel/tuto-nessus/tuto-nessus.html', 'Tutoriel/tuto-nessus/tuto-nessus.png', 'Scanner de vulnérabilité'),
(14, 'Arpspoof', 'Ce tuto vous présente l\'outil de ligne de commande arpspoof.', NULL, 'Tutoriel/tuto-arpspoof/tuto-arpspoof.html', 'Tutoriel/tuto-arpspoof/arpspoof.png', 'Collecte d\'information'),
(15, 'CUPP', 'Un outil osint simple pour commencer l\'osint', 'c6f46767fa75cc27accee0bb85ffa23abe6fdd94d16387218fed3b311b38f38e', 'Tutoriel/tuto-cupp/tuto-cupp.html', 'Tutoriel/tuto-cupp/cupp.jpg', 'Collecte d\'information'),
(16, 'MITMProxy', 'Mitmproxy : un wireshark simple en ligne de commande pour les requêtes HTTP.', 'PasswordAlice1234', 'Tutoriel/tuto-mitmproxy/tuto-mitmproxy.html', 'Tutoriel/tuto-mitmproxy/', 'Collecte d\'information'),
(17, 'Reverse engineering android : les bases', 'Ce tuto va vous apprendre à utiliser les outils jadx et apktool', '636e2d6a4e34cf74146572ec64442cee', 'Tutoriel/tuto-reverse/tuto-reverse.html', 'Tutoriel/tuto-reverse/Reverse.jpeg', 'Android'),
(18, '', '', NULL, 'Tutoriel/tuto-rainbowcrack/tuto-rainbowcrack.html', 'Tutoriel/tuto-rainbowcrack/rainbowcrack.png', 'Attaque de mot de passe'),
(19, 'Comment détecter des messages cachés dans une image ?', 'Voici un tutoriel afin de connaître une plateforme web qui regroupe plusieurs outils utiles à la stéganographie sur une image', 'VoWoBi<3', 'Tutoriel/tuto-aperisolve/tuto-aperisolve.html', 'Tutoriel/tuto-aperisolve/image-premiere-page.jpg', 'Stéganographie'),
(20, 'Explications de CyberChef', 'Voici un tutoriel afin de comprendre les différentes catégories de cyberchef et d\'en utiliser une partie', NULL, 'Tutoriel/tuto-cyberchef/tuto-cyberchef.html', 'Tutoriel/tuto-cyberchef/cyberchef.png', 'Attaque de mot de passe'),
(21, 'Docker : les commandes utiles', 'Voici un tutoriel pour vous apprendre à manipuler les commandes sur Docker', NULL, 'Tutoriel/tuto-docker/tuto-docker.html', 'Tutoriel/tuto-docker/image-premiere-page.png', 'Prérequis'),
(22, 'Installation d\'une Kali', 'Ce tutoriel vous permettra d\'installer une machine virtuelle Kali sur le logiciel Virtual Box.', NULL, 'Tutoriel/tuto-install-kali/tuto-install-kali.html', 'Tutoriel/tuto-install-kali/kali.png', 'Prérequis'),
(23, 'La stéganographie avec Outguess', 'Voici un tutoriel afin de connaître un outil utile à la stéganographie sur une image : Outguess', 'Tuto-Outguess', 'Tutoriel/tuto-outguess/tuto-outguess.html', 'Tutoriel/tuto-outguess/', 'Stéganographie'),
(24, 'La stéganographie avec StegHide', 'Voici un tutoriel afin de connaître un outil utile à la stéganographie sur une image : StegHide', 'Tuto-Steghide', 'Tutoriel/tuto-steghide/tuto-steghide.html', 'Tutoriel/tuto-steghide/image-premiere-page.jpg', 'Stéganographie'),
(25, 'La stéganographie avec Zsteg', 'Voici un tutoriel afin de connaître un outil utile à la stéganographie sur une image : Zsteg', 'Tuto-Zsteg', 'Tutoriel/tuto-zsteg/tuto-zsteg.html', 'Tutoriel/tuto-zsteg/', 'Stéganographie');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `name`, `firstname`, `pseudo`, `mail`, `password`, `admin`) VALUES
(1, 'aaaa', 'aaaaa', 'aaaa', 'eee', 'lala', 0),
(2, 'dd', 'd', 'd', 'eee', 'eee', 0),
(3, 'vf', 'vvv', 'vv', 'vvv', 'vvv', 0),
(4, 'bb', 'bb', 'bb', 'bb', 'bbb', 0),
(5, 'vv', 'bb', 'bb', 'bbb', 'bbb', 0),
(6, 'BACHA', 'Elies', 'Eliesb', 'elies.bacha@edu.esiee.fr', 'Eliesbacha1', 0),
(7, 'BACHA', 'Elies', 'elies', 'elies.bacha@edu.esiee.fr', 'e5485349d285bdeb84f5af775af0a21ad21a9af6b16f4e1709e9cedb4e1c05d2', 0),
(9, 'a', 'a', 'a', 'a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', 1),
(10, 'g', 'g', 'g', 'g@g.g', 'cd0aa9856147b6c5b4ff2b7dfee5da20aa38253099ef1b4a64aced233c9afe29', 0),
(11, 'g', 'g', 'g', 'g@g.g', 'cd0aa9856147b6c5b4ff2b7dfee5da20aa38253099ef1b4a64aced233c9afe29', 0),
(12, 'yo', 'je', 'suis', 'la@f.f', 'cd0aa9856147b6c5b4ff2b7dfee5da20aa38253099ef1b4a64aced233c9afe29', 0),
(13, 'b', 'b', 'b', 'b@b.b', '3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `challenge`
--
ALTER TABLE `challenge`
  ADD PRIMARY KEY (`IdChallenge`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tutoriel`
--
ALTER TABLE `tutoriel`
  ADD PRIMARY KEY (`IdTutoriel`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `challenge`
--
ALTER TABLE `challenge`
  MODIFY `IdChallenge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tutoriel`
--
ALTER TABLE `tutoriel`
  MODIFY `IdTutoriel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
