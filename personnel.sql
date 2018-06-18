-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 18 mai 2018 à 10:39
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `personnel`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `idE` int(11) NOT NULL,
  `nomE` varchar(20) NOT NULL,
  `prenomE` varchar(30) NOT NULL,
  `pseudoE` varchar(15) NOT NULL,
  `mdp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`idE`, `nomE`, `prenomE`, `pseudoE`, `mdp`) VALUES
(1, 'Kodjo', 'Ama', 'Ama03', 'Ama2003'),
(2, 'Tenor', 'Gilles', 'Tenor235', 'Tenor2014'),
(3, 'BA', 'ELHADJ', 'Smartboss', 'Smartboss94'),
(4, 'ABIDONOU', 'Jean-luc', 'JeanLuc03', 'Skalaf16');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_img` int(11) NOT NULL,
  `date_insertion` text NOT NULL,
  `photos` text NOT NULL,
  `idE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_img`, `date_insertion`, `photos`, `idE`) VALUES
(1, '', '', 1),
(2, '', 'photo', 1),
(3, '', 'photo', 1),
(4, '', 'photo', 1),
(5, '', '166636588', 2),
(84, '', '1526569201_1.jpg', 2),
(85, '', '1526569225_1.jpg', 2),
(86, '', '1526569252_1.jpg', 2),
(87, '', '1526569252_2.jpg', 2),
(88, '', '1526569252_3.jpg', 2),
(89, '', '1526569252_4.jpg', 2),
(90, '', '1526569252_5.jpg', 2),
(91, '', '1526569252_6.jpg', 2),
(92, '', '1526569252_7.jpg', 2),
(93, '', '1526569252_8.jpg', 2),
(94, '', '1526569252_9.jpg', 2),
(95, '', '1526569252_10.jpg', 2),
(96, '', '1526569631_1', 2),
(97, '1526571845', '1526571845_1.jpg', 2),
(98, '1526629901', '1526629901_1.jpg', 2),
(99, '1526629940', '1526629940_1.mp4', 2),
(100, '1526630024', '1526630024_1.jpg', 2),
(101, '1526630116', '1526630116_1.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE `localisation` (
  `id_loc` int(11) NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `idE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pointage`
--

CREATE TABLE `pointage` (
  `idP` int(11) NOT NULL,
  `date` text NOT NULL,
  `statut` text,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `idE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pointage`
--

INSERT INTO `pointage` (`idP`, `date`, `statut`, `latitude`, `longitude`, `idE`) VALUES
(1, '2018-05-18 12:50:45', '12:51:11', '0', '', 1),
(2, '2018-05-18 12:52:08', '12:52:13', '0', '', 2),
(3, '2018-05-18 02:14:46', '00:00:00', '0', '', 2),
(4, '2018-05-18 02:36:55', '00:00:00', '0', '', 2),
(5, '2018-05-18 02:42:45', '02:42:56', '0', '', 1),
(6, '2018-05-18 02:44:56', '02:53:59', '0', '', 1),
(7, '2018-05-18 02:45:31', '02:53:59', '0', '', 1),
(8, '0004-05-18 02:52:24', '02:53:59', '0', '', 1),
(9, '0004-05-18 02:52:56', '02:53:59', '0', '', 1),
(10, '0004-05-18 02:55:03', '03:00:27', '0', '', 1),
(11, '0004-05-18 02:57:07', '03:00:27', '0', '', 1),
(12, '0004-05-18 02:58:41', '03:00:27', '0', '', 1),
(13, '0004-05-18 02:59:42', '03:00:27', '0', '', 1),
(14, '0004-05-18 03:00:21', '03:00:27', '0', '', 1),
(15, '0004-05-18 03:09:05', '03:10:37', '0', '', 1),
(16, '0004-05-18 03:22:23', '00:00:00', '0', '', 1),
(17, '0004-05-18 03:22:57', '00:00:00', '0', '', 1),
(18, '0004-05-18 03:23:21', '00:00:00', '0', '', 1),
(19, '0004-05-18 03:28:28', '00:00:00', '0', '', 1),
(20, '0004-05-18 03:53:41', '00:00:00', '0', '', 1),
(21, '0004-05-18 04:01:23', '00:00:00', '0', '', 1),
(22, '0004-05-18 04:14:56', '00:00:00', '0', '', 1),
(23, '0004-05-18 04:20:55', '00:00:00', '0', '', 1),
(24, '4/05/18 04:22:19', '8/05/18 09:47:59', '0', '', 1),
(25, '8/05/18 09:47:40', '8/05/18 09:47:59', '0', '', 1),
(26, '9/05/18 10:23:10', '9/05/18 02:23:31', '0', '', 1),
(27, '9/05/18 10:24:27', '9/05/18 02:23:31', '0', '', 1),
(28, '9/05/18 02:23:11', '9/05/18 02:23:31', '', '', 1),
(29, '9/05/18 03:07:57', '9/05/18 03:07:59', '', '', 1),
(30, '9/05/18 03:18:58', '9/05/18 03:41:42', '', '', 1),
(31, '', '1525970206', '', '', 1),
(32, '1525968395', '1525970206', '', '', 1),
(33, '14/05/18 10:28:08', '1526286532', '', '', 1),
(34, '1526402401', '1526402423', '', '', 1),
(35, '1526402553', '1526402556', '', '', 1),
(36, '1526403504', '1526403513', '', '', 1),
(37, '1526463354', '1526463360', '', '', 1),
(38, '1526463671', '1526546552', '', '', 1),
(39, '1526464283', '1526546552', '', '', 1),
(40, '1526545949', '1526546552', '', '', 1),
(41, '1526546480', '1526546552', '', '', 1),
(42, '1526549822', '1526549894', '', '', 1),
(43, '1526550119', '1526558209', '', '', 1),
(44, '1526550265', '1526558209', '', '', 1),
(45, '1526550587', '1526558209', '', '', 1),
(46, '1526558170', '1526558209', '', '', 1),
(47, '1526558196', '1526558209', '', '', 1),
(48, '', '1526566295', '', '', 1),
(49, '1526559643', '1526566295', '', '', 1),
(50, '1526560709', '1526566295', '', '', 1),
(51, '1526560943', '1526566295', '', '', 1),
(52, '1526561968', '1526566295', '', '', 1),
(53, '1526562184', '1526566295', '', '', 1),
(54, '1526562310', '1526566295', '', '', 1),
(55, '1526562762', '1526566295', '', '', 1),
(56, '1526562765', '1526566295', '', '', 1),
(57, '1526562885', '1526566295', '', '', 1),
(58, '1526563304', '1526566295', '', '', 1),
(59, '1655559970', 'pointage', '44.9999', '4.33333', 1),
(60, '1526564865', '1526564865', '', '', 1),
(61, '1526564889', '1526564889', '', '', 1),
(62, '1526564893', '1526564893', '', '', 1),
(63, '1526564964', '1526564964', '', '', 1),
(64, '1526564998', '1526566295', '', '', 1),
(65, '1526565092', '1526566295', '', '', 1),
(66, '1526565316', '1526565316', '', '', 1),
(67, '1526566176', '1526566295', '', '', 1),
(68, '1526566492', 'depointage', '', '', 1),
(69, '1526566593', 'pointage', '', '', 1),
(70, '1526566623', 'pointage', '', '', 1),
(71, '1526566678', 'depointage', '', '', 1),
(72, '1526567091', 'pointage', '45.766293000000005', '4.8972786', 1),
(73, '1526567154', 'depointage', '45.7662769', '4.8973103', 1),
(74, '1526567200', 'pointage', '45.766265', '4.8972992', 1),
(75, '1526567217', 'depointage', '45.766265', '4.8972992', 1),
(76, '1526567282', 'pointage', '', '', 1),
(77, '1526572349', 'pointage', '45.7622296', '4.8577658999999995', 1),
(78, '1526572372', 'depointage', '45.7622296', '4.8577658999999995', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`idE`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `idE` (`idE`);

--
-- Index pour la table `localisation`
--
ALTER TABLE `localisation`
  ADD PRIMARY KEY (`id_loc`);

--
-- Index pour la table `pointage`
--
ALTER TABLE `pointage`
  ADD PRIMARY KEY (`idP`),
  ADD KEY `idE` (`idE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `idE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `localisation`
--
ALTER TABLE `localisation`
  MODIFY `id_loc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pointage`
--
ALTER TABLE `pointage`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`idE`) REFERENCES `employe` (`idE`);

--
-- Contraintes pour la table `pointage`
--
ALTER TABLE `pointage`
  ADD CONSTRAINT `pointage_ibfk_1` FOREIGN KEY (`idE`) REFERENCES `employe` (`idE`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
