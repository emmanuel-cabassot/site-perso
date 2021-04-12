-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 12 avr. 2021 à 18:54
-- Version du serveur :  5.5.68-MariaDB
-- Version de PHP :  7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `porfolio`
--
CREATE DATABASE IF NOT EXISTS `porfolio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `porfolio`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'HTML/CSS'),
(2, 'PHP'),
(3, 'JAVASCRIPT');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `techno` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `star` varchar(10) NOT NULL,
  `lien_site` varchar(255) NOT NULL,
  `lien_git` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nom`, `techno`, `description`, `image`, `date`, `star`, `lien_site`, `lien_git`) VALUES
(1, 'Boutique', 'PHP/POO/MVC/BOOTSTRAP', 'Un site \'boutique de boutiques\'. Dans ce concept  des particuliers et des entreprises peuvent créer une boutique. Les particuliers inscrits peuvent acheter des produits en ligne, payer par carte (stripe)', 'boutique.jpg', '2021-03-19', 'true', 'https://emmanuel-cabassot.students-laplateforme.io/boutique', 'https://github.com/emmanuel-cabassot/boutique'),
(2, 'Portfolio', 'PHP/JAVASCRIPT/POO', 'Portfolio. Je sais celui la vous le connaissez. Pour les curieux vous avez le lien github.', 'portfolio.jpg', '2021-04-11', 'false', 'https://emmanuel-cabassot.students-laplateforme.io/portfolio', 'https://github.com/emmanuel-cabassot/site-perso'),
(3, 'Sites favoris', 'HTML/CSS', 'Dans ce projet il nous était demandé de présenter nos 3 sites favoris. Que du HTLM/CSS. Les 3 sites: Lafourchette, Homeexchange, ToGoodToGo.', 'app.png', '2020-09-23', '', 'https://emmanuel-cabassot.students-laplateforme.io/app-favorites/app-favorites.html', 'https://github.com/emmanuel-cabassot/app-favorites'),
(4, 'Blog de voyages', 'HTLM/CSS', 'Blog de voyage.\r\nDernier projet exclusivement en HTML/CSS avant de passer au PHP.\r\nIl était demandé de créer un blog de voyages et de présenter plusieurs pays.\r\n\r\n', 'voyages.png', '2020-11-19', 'true', 'https://emmanuel-cabassot.students-laplateforme.io/voyages/voyages.html', 'https://github.com/emmanuel-cabassot/voyages'),
(5, 'Phonotèque', 'HTML/CSS', 'Présentation de deux styles de musique. Salsa et Soul Music.', 'phonoteque.png', '2020-11-01', 'true', 'https://emmanuel-cabassot.students-laplateforme.io/phonoteque/phonoteque.html', 'https://github.com/emmanuel-cabassot/phonoteque');

-- --------------------------------------------------------

--
-- Structure de la table `projet_categorie`
--

DROP TABLE IF EXISTS `projet_categorie`;
CREATE TABLE `projet_categorie` (
  `id` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet_categorie`
--

INSERT INTO `projet_categorie` (`id`, `id_projet`, `id_categorie`) VALUES
(1, 1, 2),
(5, 3, 1),
(3, 2, 3),
(4, 2, 2),
(6, 4, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet_categorie`
--
ALTER TABLE `projet_categorie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `projet_categorie`
--
ALTER TABLE `projet_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
