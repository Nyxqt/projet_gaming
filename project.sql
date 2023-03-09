-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 mars 2023 à 14:34
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Nyx', 'geiss.gamer@gmail.com', '$2y$10$yjmyp.CprWPHrCI8ridw9uG7yAc8euID.FlNL8VNA4RBrkoQG9nJi'),
(5, 'Matthieu', 'Mat@gmail.com', '$2y$10$H0bMkI.rX6OxKky11rX0OOZIxtrTLXtL1bv45bH5wH56XXFNtouR.');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `enabled`) VALUES
(1, 'Action', 1),
(2, 'Stratégie', 1),
(3, 'Aventure', 1),
(4, 'Sport', 0),
(5, 'Testdelte', 0),
(7, 'YOYO', 0),
(10, 'testahah', 0);

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idt_product` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `id_genre` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id_genre` (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `game`
--

INSERT INTO `game` (`id`, `idt_product`, `name`, `description`, `price`, `available`, `id_genre`) VALUES
(1, 123456, 'League of Legends', 'League of Legends est un jeu de stratégie en équipe dans lequel deux équipes de cinq champions s\'affrontent pour détruire la base adverse. Faites votre choix parmi plus de 140 champions disponibles, partez au combat, éliminez vos adversaires avec adresse et abattez les tourelles ennemies pour décrocher la victoire.', '0', 1, 1),
(2, 1677582618, 'StarCraft II', 'Avec trois races, quatre modes et une infinité de façons de jouer, StarCraft II représente l’expérience ultime de stratégie en temps réel. Deviendrez-vous le plus grand commandant de toute la galaxie ?', '69', 1, 1),
(3, 1678177988, 'Hogwarts Legacy', 'Hogwarts Legacy pour PC est un jeu de rôle d\'action et d\'aventure solo basé sur l\'univers de Harry Potter, dans lequel le joueur incarne un nouveau venu dans le château enchanté tant apprécié des fans des livres et de la franchise cinématographique. A propos du jeu Ce jeu se déroule à la fin des années 1800, il n\'y a donc aucun chevauchement avec les personnages des films et des livres, bien que certains des fantômes que vous connaissez et aimez', '60', 1, 3),
(4, 1678179080, 'Destiny 2', 'Destiny 2 est un jeu de tir à la première personne multijoueur uniquement en ligne qui défie toute catégorisation. Il s\'agit de la suite de Destiny et de ses différents packs d\'extension, détaillés ci-dessous, et se déroule dans un monde mythique de science-fiction, et se vante d\'un vaste monde bac à sable partagé qui englobe de nombreux éléments des jeux de rôle. A propos du jeu Dans le jeu, vous êtes un Gardien, l\'un des protecteurs de la dernière ville', '0', 1, 4),
(5, 1678180236, 'Assassin\'s Creed: Valhalla', 'Assassin\'s Creed Valhalla est le 12ème épisode de la série Assassin\'s Creed, et ce dernier se déroule au 9ème siècle (à partir de 873) et vous emmène partout en Europe pour faire voyager votre clan d\'une Norvège gravement surpeuplée et déchirée par la guerre vers l\'Angleterre, une terre verdoyante où règnent la paix, la prospérité et des champs fertiles où vous pourrez faire pousser vos récoltes.', '20', 1, 3),
(6, 1678183840, 'The Last of Us Part I', 'Retrouvez l\'histoire poignante et les personnages inoubliables de The Last of Us™, lauréat de plus de 200 récompenses du Jeu de l\'année. Dans un monde dévasté où rôdent infectés et survivants endurcis, Joel, un protagoniste désabusé, est engagé pour faire sortir Ellie, 14 ans, d\'une zone de quarantaine militaire. Mais ce qui devait être une simple mission de routine se transforme vite en un dangereux périple à travers le pays.', '60', 1, 5),
(7, 1678184225, 'FIFA 2023', 'FIFA 23 pour PC est le dernier né d\'une immense lignée de jeux basés sur le football. Depuis ses modestes débuts en 1993 avec la sortie de FIFA International Soccer, cette franchise de jeux a été produite dans plus de 18 langues et 51 pays, et s\'est vendue à plus de 325 millions d\'exemplaires - un record impressionnant pour toute série de jeux vidéo.', '70', 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name`, `enabled`, `id_category`) VALUES
(1, 'RTS', 1, 2),
(2, 'Tour par tour', 1, 2),
(3, 'Fantaisie', 1, 3),
(4, 'Sci-fi', 1, 3),
(5, 'Survie', 1, 1),
(6, 'Sport', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `comment` text,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id`, `name`, `path`) VALUES
(2, 'starcraft-2-wol.jpg', '../assets/images/starcraft-2-wol.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `picture_game`
--

DROP TABLE IF EXISTS `picture_game`;
CREATE TABLE IF NOT EXISTS `picture_game` (
  `id_game` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  PRIMARY KEY (`id_game`,`id_image`),
  KEY `id_image` (`id_image`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `forname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `invoice_adress` varchar(250) NOT NULL,
  `delivery_adress` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nickname` (`nickname`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id`);

--
-- Contraintes pour la table `genre`
--
ALTER TABLE `genre`
  ADD CONSTRAINT `genre_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `picture_game`
--
ALTER TABLE `picture_game`
  ADD CONSTRAINT `picture_game_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `picture_game_ibfk_2` FOREIGN KEY (`id_image`) REFERENCES `picture` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
