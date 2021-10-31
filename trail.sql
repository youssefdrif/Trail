-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 09:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trail`
--

-- --------------------------------------------------------

--
-- Table structure for table `coureur`
--

CREATE TABLE `coureur` (
  `id_coureur` int(11) NOT NULL,
  `email_coureur` varchar(255) NOT NULL,
  `prenom_coureur` varchar(50) DEFAULT NULL,
  `nom_coureur` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coureur`
--

INSERT INTO `coureur` (`id_coureur`, `email_coureur`, `prenom_coureur`, `nom_coureur`, `password`) VALUES
(1, '', ' Alain', 'Térieur', ''),
(2, '', 'Ali', 'Gator', ''),
(3, '', 'Camille', 'Onette', ''),
(4, '', 'Habib', 'Oché', ''),
(5, '', 'Alex', 'Térieur', ''),
(6, '', 'Laure', 'Dure', ''),
(7, '', 'Marie', 'Rouana', ''),
(10, '', 'Nordine', 'Ateur', ''),
(11, '', 'Ali', 'Mentation', ''),
(12, '', 'Eva', 'Sion', ''),
(13, 'test@gmail.com', 'test', 'test3', 'test'),
(14, 'test@gmail.com', 'test', 'test3', 'grgr(gr'),
(15, 'test3@gmail.com', 'FEFEFZE', 'test4', 'FZEEZFEZ'),
(16, 'testcoureur@gmail.com', 'coureur', 'testcoureur', 'coureur');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `Nom_course` varchar(50) DEFAULT NULL,
  `Date_course` date DEFAULT NULL,
  `Lieu_course` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `Nom_course`, `Date_course`, `Lieu_course`) VALUES
(1, 'trail', '2021-05-02', 'Nîmes'),
(2, 'Marathon', '2021-06-07', 'Paris');

-- --------------------------------------------------------

--
-- Table structure for table `effectue`
--

CREATE TABLE `effectue` (
  `id_coureur` int(11) NOT NULL,
  `Dossard` int(11) DEFAULT NULL,
  `id_course` int(11) NOT NULL,
  `id_resultat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `effectue`
--

INSERT INTO `effectue` (`id_coureur`, `Dossard`, `id_course`, `id_resultat`) VALUES
(1, 1, 1, '1'),
(12, 2, 2, '10'),
(2, 3, 1, '2'),
(3, 4, 1, '3'),
(4, 2, 1, '4'),
(5, 5, 1, '5'),
(6, 1, 2, '6'),
(7, 3, 2, '7'),
(10, 4, 2, '8'),
(11, 5, 2, '9');

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `id_coureur` int(11) NOT NULL,
  `Reference_inscription` int(11) DEFAULT NULL,
  `Date_inscription` date DEFAULT NULL,
  `Date_paiement` date DEFAULT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inscription`
--

INSERT INTO `inscription` (`id_coureur`, `Reference_inscription`, `Date_inscription`, `Date_paiement`, `id_course`) VALUES
(1, NULL, '2021-04-24', '2021-04-24', 1),
(2, NULL, '2021-02-04', '2021-02-04', 1),
(3, NULL, '2021-01-21', '2021-01-21', 1),
(4, NULL, '2021-01-19', '2021-01-19', 1),
(5, NULL, '2021-02-22', '2021-02-22', 1),
(6, NULL, '2021-02-16', '2021-02-12', 2),
(7, NULL, '2021-01-03', '2021-01-03', 2),
(10, NULL, '2021-02-08', '2021-02-08', 2),
(11, NULL, '2021-01-08', '2021-01-08', 2),
(12, NULL, '2021-02-14', '2021-02-14', 2),
(1, NULL, '2021-04-24', '2021-04-24', 2),
(2, NULL, '2021-02-04', '2021-02-04', 2),
(3, NULL, '2021-01-21', '2021-01-21', 2),
(4, NULL, '2021-01-19', '2021-01-19', 2),
(5, NULL, '2021-02-22', '2021-02-22', 2);

-- --------------------------------------------------------

--
-- Table structure for table `point_passage`
--

CREATE TABLE `point_passage` (
  `Id` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `point_passage`
--

INSERT INTO `point_passage` (`Id`, `Nom`, `id_course`) VALUES
('1', 'Rue', 1),
('10', 'Rue', 2),
('11', 'Rue', 2),
('12', 'Avenue', 2),
('13', 'Avenue', 2),
('14', 'Rue', 2),
('15', 'Rue', 2),
('2', 'Pont', 1),
('3', 'Rue', 1),
('4', 'Avenue', 1),
('5', 'Avenue', 1),
('6', 'Rue', 2),
('7', 'Pont', 2),
('8', 'Rue', 2),
('9', 'Rue', 2);

-- --------------------------------------------------------

--
-- Table structure for table `resultat`
--

CREATE TABLE `resultat` (
  `id_resultat` varchar(50) NOT NULL,
  `Temps` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resultat`
--

INSERT INTO `resultat` (`id_resultat`, `Temps`) VALUES
('1', '2021-05-02 10:43:48'),
('10', '2021-06-07 13:04:01'),
('11', '2021-06-07 13:04:44'),
('12', '2021-06-07 13:05:05'),
('13', '2021-06-07 13:06:10'),
('14', '2021-06-07 13:08:18'),
('15', '2021-06-07 13:10:55'),
('2', '2021-05-02 10:43:46'),
('3', '2021-05-02 10:45:51'),
('4', '2021-05-02 10:46:33'),
('5', '2021-05-02 10:48:42'),
('6', '2021-06-07 12:46:19'),
('7', '2021-06-07 12:53:15'),
('8', '2021-06-07 13:02:11'),
('9', '2021-06-07 13:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `temps_intermediaires`
--

CREATE TABLE `temps_intermediaires` (
  `id_tempsintermediaires` int(11) NOT NULL,
  `id_coureur` int(11) NOT NULL,
  `Temps` datetime NOT NULL,
  `Videos` varchar(50) DEFAULT NULL,
  `id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temps_intermediaires`
--

INSERT INTO `temps_intermediaires` (`id_tempsintermediaires`, `id_coureur`, `Temps`, `Videos`, `id`) VALUES
(2, 1, '2021-05-02 10:33:12', 'NULL', '1'),
(3, 1, '2021-05-02 10:21:12', 'NULL', '1'),
(4, 2, '2021-05-02 10:33:16', 'NULL', '2'),
(5, 3, '2021-05-02 10:25:55', NULL, '3'),
(6, 3, '2021-05-02 10:35:18', 'NULL', '3'),
(7, 4, '2021-05-02 10:26:07', 'NULL', '4'),
(8, 4, '2021-05-02 10:38:11', 'NULL', '4'),
(9, 5, '2021-05-02 10:29:21', 'NULL', '5'),
(10, 5, '2021-05-02 10:40:11', 'NULL', '5'),
(11, 6, '2021-06-07 11:04:11', 'NULL', '6'),
(12, 6, '2021-06-07 11:31:05', 'NULL', '6'),
(13, 7, '2021-06-07 11:05:15', 'NULL', '7'),
(14, 7, '2021-06-07 11:33:18', 'NULL', '7'),
(15, 8, '2021-06-07 11:07:05', 'NULL', '8'),
(16, 8, '2021-06-07 11:35:44', 'NULL', '8'),
(17, 9, '2021-06-07 11:06:41', 'NULL', '9'),
(18, 9, '2021-06-07 11:35:59', 'NULL', '9'),
(19, 10, '2021-06-07 11:10:19', 'NULL', '10'),
(20, 10, '2021-06-07 11:39:33', 'NULL', '10');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom_utilisateur` text DEFAULT NULL,
  `prenom_utilisateur` text DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `nom_utilisateur`, `prenom_utilisateur`, `password`) VALUES
(70, 'jm@hotmail.fr', 'egfrgreg', 'rgergrge', 'rgregre'),
(72, 'jeanmichel@hotmail.fr', 'bourbier', 'jeanmichel', 'jeanmichel'),
(73, 'jeanmichel2@hotmail.fr', 'bourbierr', 'jeanmichelle', 'jeanmichelle'),
(74, 'test4@hotmail.fr', 'efefzfe', 'efefzef', 'efzfzeezf'),
(75, 'testutilisateur@gmail.com', 'test', 'utilisateur', 'utilisateur');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `nomfichier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `nomfichier`) VALUES
(1, '1_08h_02m_43s.mp4'),
(2, '2_08h_42m_13s.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `visualiser`
--

CREATE TABLE `visualiser` (
  `id` int(11) NOT NULL,
  `id_coureur` int(11) NOT NULL,
  `idvideos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visualiser`
--

INSERT INTO `visualiser` (`id`, `id_coureur`, `idvideos`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coureur`
--
ALTER TABLE `coureur`
  ADD PRIMARY KEY (`id_coureur`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `effectue`
--
ALTER TABLE `effectue`
  ADD UNIQUE KEY `id_resultat` (`id_resultat`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `effectue_ibfk_1` (`id_coureur`);

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD KEY `id_course` (`id_course`),
  ADD KEY `inscription_ibfk_1` (`id_coureur`);

--
-- Indexes for table `point_passage`
--
ALTER TABLE `point_passage`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `resultat`
--
ALTER TABLE `resultat`
  ADD PRIMARY KEY (`id_resultat`);

--
-- Indexes for table `temps_intermediaires`
--
ALTER TABLE `temps_intermediaires`
  ADD PRIMARY KEY (`id_tempsintermediaires`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`nom_utilisateur`) USING HASH;

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visualiser`
--
ALTER TABLE `visualiser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coureur`
--
ALTER TABLE `coureur`
  MODIFY `id_coureur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temps_intermediaires`
--
ALTER TABLE `temps_intermediaires`
  MODIFY `id_tempsintermediaires` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visualiser`
--
ALTER TABLE `visualiser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `effectue`
--
ALTER TABLE `effectue`
  ADD CONSTRAINT `effectue_ibfk_1` FOREIGN KEY (`id_coureur`) REFERENCES `coureur` (`id_coureur`),
  ADD CONSTRAINT `effectue_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`),
  ADD CONSTRAINT `effectue_ibfk_3` FOREIGN KEY (`id_resultat`) REFERENCES `resultat` (`id_resultat`);

--
-- Constraints for table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`id_coureur`) REFERENCES `coureur` (`id_coureur`),
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`);

--
-- Constraints for table `point_passage`
--
ALTER TABLE `point_passage`
  ADD CONSTRAINT `point_passage_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
