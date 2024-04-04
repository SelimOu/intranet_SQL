-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 04 avr. 2024 à 06:59
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jcp_voyage`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `name`) VALUES
(1, 'mer'),
(2, 'montagne'),
(3, 'campagne');

-- --------------------------------------------------------

--
-- Structure de la table `formule`
--

DROP TABLE IF EXISTS `formule`;
CREATE TABLE IF NOT EXISTS `formule` (
  `id_formule` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_formule`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `formule`
--

INSERT INTO `formule` (`id_formule`, `name`) VALUES
(1, 'Classique'),
(2, '2pour1');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `name`) VALUES
(1, 'admin'),
(2, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `id_role` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `id_role`, `username`, `password`) VALUES
(1, 1, 'selim', '123'),
(2, 2, 'salah', '123'),
(3, 1, 'anto', '789');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

DROP TABLE IF EXISTS `voyage`;
CREATE TABLE IF NOT EXISTS `voyage` (
  `id_voyage` int NOT NULL AUTO_INCREMENT,
  `id_categorie` int NOT NULL,
  `id_formule` int NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `herbergement` varchar(255) NOT NULL,
  `date_de_debut` date NOT NULL,
  `date_de_fin` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` double NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id_voyage`)
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`id_voyage`, `id_categorie`, `id_formule`, `lieu`, `herbergement`, `date_de_debut`, `date_de_fin`, `image`, `prix`, `description`) VALUES
(62, 2, 2, 'Haute Garonne', 'Hotel', '2024-06-05', '2024-08-08', 'https://www.jcpvacances.com/wp-content/uploads/2022/11/luchon-vignette.jpg', 80, 'À l’extrême sud de la Haute-Garonne, au cœur des Pyrénées, la résidence vous accueille dans la station thermale de Luchon. Véritable ville à la montagne, elle s’inscrit dans un paysage majestueux où les Pyrénées exercent toute leur magie. Entourée des 13 '),
(53, 1, 2, 'Bretagne', 'Campagne', '2024-03-14', '2024-03-29', 'https://www.jcpvacances.com/wp-content/uploads/2020/10/bidart-vignette.jpg', 75, 'Entre Biarritz et Saint-Jean-de-Luz, Bidart est un charmant village surplombant l’océan, avec comme toile de fond les Pyrénées. Il symbolise le Pays Basque avec ses plages, son golf, ses fêtes et son folklore. La résidence Ilbarritz, composée de 100 appar'),
(63, 3, 2, 'Carcassonne', 'Hôtel****', '2024-06-05', '2024-08-08', 'http://localhost/exo_SQL/intranet_SQL/Assets/images/cayeux-services-payants.jpg', 90, 'Partez à la découverte de Carcassonne réputée pour sa Cité Médiévale et le Canal du Midi. C’est une ville merveilleuse avec un riche patrimoine culturel et religieux (musées, églises, parcs, jardins…). Vous logerez dans un hôtel 4 étoiles situé à 150m de '),
(180, 1, 1, 'etst', 'd,,dd', '2024-03-16', '2024-03-08', 'http://localhost/exo_SQL/intranet_SQL/Assets/images/images.jpg', 555, 'd,d,dd'),
(181, 1, 1, 'voyage 1', 'voyage', '2024-03-12', '2024-03-21', 'http://localhost/exo_SQL/intranet_SQL/Assets/images/cayeux-services-payants.jpg', 50, 'voyage 1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
