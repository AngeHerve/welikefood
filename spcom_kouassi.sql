-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 10 sep. 2023 à 11:23
-- Version du serveur : 10.5.19-MariaDB-cll-lve
-- Version de PHP : 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spcom_kouassi`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenoms` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `motdepasse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adminn`
--

INSERT INTO `adminn` (`id`, `nom`, `prenoms`, `email`, `motdepasse`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '81ce825ec1ace3ee7cf7e92df2cc9905');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) UNSIGNED NOT NULL,
  `avis` int(11) NOT NULL,
  `date` datetime(6) NOT NULL,
  `publication_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `avis`, `date`, `publication_id`) VALUES
(1, 1, '2023-03-26 15:49:48.000000', 9),
(2, 0, '2023-03-26 15:49:51.000000', 9),
(3, 0, '2023-03-26 15:49:53.000000', 9),
(4, 1, '2023-03-26 15:49:55.000000', 9),
(5, 1, '2023-03-26 15:49:56.000000', 9),
(6, 0, '2023-03-26 15:49:59.000000', 9),
(7, 0, '2023-03-26 15:50:00.000000', 9),
(8, 1, '2023-04-11 13:34:15.000000', 9),
(9, 0, '2023-04-11 13:34:18.000000', 9),
(10, 0, '2023-04-11 13:34:19.000000', 9),
(11, 0, '2023-04-11 13:34:20.000000', 9),
(12, 1, '2023-04-11 13:34:22.000000', 9),
(13, 1, '2023-04-11 13:34:22.000000', 9),
(14, 1, '2023-04-11 13:34:22.000000', 9),
(15, 1, '2023-04-11 13:34:22.000000', 9),
(16, 1, '2023-04-11 13:34:23.000000', 9),
(17, 1, '2023-04-11 13:34:23.000000', 9),
(18, 0, '2023-04-11 13:34:24.000000', 9),
(19, 0, '2023-04-11 13:34:24.000000', 9),
(20, 0, '2023-04-11 13:34:25.000000', 9),
(21, 0, '2023-04-11 13:34:25.000000', 9),
(22, 0, '2023-04-11 13:34:25.000000', 9),
(23, 0, '2023-04-11 13:34:26.000000', 9),
(24, 0, '2023-04-11 13:34:26.000000', 9);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) UNSIGNED NOT NULL,
  `texte` varchar(255) NOT NULL,
  `date_pub` datetime NOT NULL,
  `publication_id` int(11) UNSIGNED DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `texte`, `date_pub`, `publication_id`, `id_user`) VALUES
(1, 'c\'est un plan tres interesant que j\'ai bien mmange avec bechsff  d\'amour ', '2023-03-26 15:10:56', 9, 2),
(2, 'c\'est un plat que j\'ai bien mange avec beaucoup d\'amour ', '2023-03-26 15:49:05', 9, 1),
(3, 'coool', '2023-04-11 13:33:18', 9, 5);

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) UNSIGNED NOT NULL,
  `titre` varchar(100) NOT NULL,
  `fonction` varchar(200) NOT NULL,
  `imagepub` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `datepub` datetime(6) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `titre`, `fonction`, `imagepub`, `texte`, `datepub`, `id_user`) VALUES
(4, 'alloco', 'Restaurant', 'imagess/1679826871.jpg', 'j\'ai adore manger dans ce resto  wasakara', '2023-03-26 11:34:31.000000', 1),
(5, 'klaklo', 'Recette', 'imagess/1679826917.jpg', 'comment prépar le klaklo', '2023-03-26 11:35:16.000000', 1),
(7, 'foutou', 'Restaurant', 'imagess/1679827070.jpg', 'Un bon plat de foutou accompgné de la sauce graine', '2023-03-26 11:37:49.000000', 1),
(8, 'chic plat', 'Conseil', 'imagess/1679827588.jpg', 'riz bien pafumé miamm', '2023-03-26 11:46:27.000000', 2),
(9, 'attieké alloco', 'Experience', 'imagess/1679827780.jpg', 'alloco bien grillé en compagnie du bon attieke. ', '2023-03-26 11:49:39.000000', 2),
(12, 'alloco', 'Recette', 'imagess/1681227012.jpg', 'j\'adore', '2023-04-11 16:30:12.000000', 6);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenoms` varchar(150) NOT NULL,
  `date_naiss` varchar(150) NOT NULL,
  `telephone` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `motpasse` varchar(150) NOT NULL,
  `avatar` text NOT NULL,
  `date_enreg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `id_user`, `nom`, `prenoms`, `date_naiss`, `telephone`, `email`, `motpasse`, `avatar`, `date_enreg`) VALUES
(1, 1389, 'kouassi', 'victorine', '2002-02-23', '0575668865', 'victo@gmail.co', '09ada96bc6f74403cc17ba2cdeb0bedd', 'IMG-6420051bb984e1.58547885.jpeg', '2023-03-27 01:25:14'),
(2, 1870, 'assi ', 'diane', '1999-05-22', '4876324155', 'diana@gmail.com', '3a23bb515e06d0e944ff916e79a7775c', 'IMG-642021ff516077.94040693.jpg', '2023-03-26 10:44:15'),
(5, 7946, 'assi', 'jee', '1998-05-22', '2246588658897', 'assi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'IMG-6435533947cdc7.28536176.jpg', '2023-04-11 12:31:53'),
(6, 1603, 'kouassi', 'joseph', '2000-12-23', '0765432367', 'kouasssi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'IMG-64357c5c6e3546.64896229.jpg', '2023-04-11 15:27:24');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publi` (`publication_id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaires_ibfk_2` (`id_user`),
  ADD KEY `publica` (`publication_id`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publications_ibfk_1` (`id_user`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `publi` FOREIGN KEY (`publication_id`) REFERENCES `publications` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `publica` FOREIGN KEY (`publication_id`) REFERENCES `publications` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
