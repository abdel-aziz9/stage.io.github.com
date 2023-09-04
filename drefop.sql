-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 04 sep. 2023 à 21:39
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `drefop`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis_concours`
--

DROP TABLE IF EXISTS `avis_concours`;
CREATE TABLE IF NOT EXISTS `avis_concours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` varchar(25500) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date_limite` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis_concours`
--

INSERT INTO `avis_concours` (`id`, `titre`, `description`, `lieu`, `date_limite`) VALUES
(1, 'IAI-GAROUA', 'CONCOURS D\'ENTRE A L\'IAI CAMEROUN POUR LE COMPTE DE L\'ANNE 2020-2021 ', '', '2024-03-10'),
(2, 'iai-cameroun', 'concours d\'entre en 3e annee au centre d\'excellence paul biya', 'garoua,maroua', '2023-09-14'),
(3, 'CFPRR/garoua', 'concours d\'entre dqp', 'garoua', '2023-09-13');

-- --------------------------------------------------------

--
-- Structure de la table `centre_agree`
--

DROP TABLE IF EXISTS `centre_agree`;
CREATE TABLE IF NOT EXISTS `centre_agree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_du_centre` varchar(400) NOT NULL,
  `lieu` varchar(400) NOT NULL,
  `description` varchar(400) NOT NULL,
  `date_validite` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom_du_centre` (`nom_du_centre`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `centre_agree`
--

INSERT INTO `centre_agree` (`id`, `nom_du_centre`, `lieu`, `description`, `date_validite`) VALUES
(1, 'centre d\'excellence', 'garoua', 'centre d\'une formation professionnelle en genie logiciel et reseau informatique', '2025-01-30'),
(2, 'cfpr', 'maroua', 'geni logiciel', '2023-09-15');

-- --------------------------------------------------------

--
-- Structure de la table `offre_emploi`
--

DROP TABLE IF EXISTS `offre_emploi`;
CREATE TABLE IF NOT EXISTS `offre_emploi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(10000) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date_fin` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date_pubication` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offre_emploi`
--

INSERT INTO `offre_emploi` (`id`, `image`, `poste`, `description`, `date_fin`, `lieu`, `date_pubication`) VALUES
(1, 'add.jpg', 'directeur', 'entre 18 et 19 ans', '2023-08-17', 'garoua', '2023-08-16');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomuser` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
