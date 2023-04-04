-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 31 mars 2023 à 19:53
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `brief5`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adminn`
--

INSERT INTO `adminn` (`id`, `nom`, `prenoms`, `email`, `motdepasse`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '83ea007bfdd589f29b820552b3f94260');

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
(1, 1, '2023-03-20 20:08:06.000000', 1),
(2, 1, '2023-03-20 20:08:07.000000', 1),
(3, 1, '2023-03-20 20:08:07.000000', 1),
(4, 0, '2023-03-20 20:08:08.000000', 1),
(5, 0, '2023-03-20 20:08:08.000000', 1),
(6, 0, '2023-03-20 20:08:08.000000', 1),
(7, 0, '2023-03-20 20:08:09.000000', 1),
(8, 1, '2023-03-21 11:08:10.000000', 1),
(9, 0, '2023-03-21 11:08:13.000000', 1),
(10, 0, '2023-03-21 11:08:15.000000', 1),
(11, 0, '2023-03-21 11:08:16.000000', 1),
(12, 0, '2023-03-21 11:08:17.000000', 1),
(13, 1, '2023-03-21 11:08:18.000000', 1),
(14, 1, '2023-03-21 11:08:19.000000', 1),
(15, 1, '2023-03-21 11:08:20.000000', 1),
(16, 1, '2023-03-21 11:08:30.000000', 1),
(17, 0, '2023-03-21 11:08:32.000000', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) UNSIGNED NOT NULL,
  `texte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_pub` datetime NOT NULL,
  `publication_id` int(10) UNSIGNED DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `texte`, `date_pub`, `publication_id`, `id_user`) VALUES
(15, 'j\'adore', '2023-03-27 23:08:00', 4, 1),
(16, 'MOI EGALEMENT', '2023-03-27 23:08:36', 4, 3),
(17, 'te quiro mucho', '2023-03-27 23:09:56', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) UNSIGNED NOT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fonction` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `imagepub` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datepub` datetime(6) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `titre`, `fonction`, `imagepub`, `texte`, `datepub`, `id_user`) VALUES
(3, 'je t\'aime', 'Conseil', 'imagess/1679957402.webp', 'i love you', '2023-03-27 22:50:02.000000', 3),
(4, 'foutou', 'Recette', 'imagess/1679958466.jpg', 'jadore', '2023-03-27 23:07:45.000000', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `id_user`, `nom`, `prenoms`, `date_naiss`, `telephone`, `email`, `motpasse`, `avatar`, `date_enreg`) VALUES
(1, 3465, 'kouassi', 'victorine', '1998-05-11', '0675668865', 'victo@gmail.com', 'b2a5abfeef9e36964281a31e17b57c97', 'IMG-6418bcf7dacb61.39231506.jpg', '2023-03-27 23:06:05'),
(2, 4336, 'Assi', 'Diane', '2002-04-28', '0575668865', 'diana@gmail.com', 'b2a5abfeef9e36964281a31e17b57c97', 'IMG-641deb09bbe447.98044024.jpeg', '2023-03-27 22:42:57'),
(3, 1451, 'Diallo', 'Djeneba', '1997-07-22', '2246588658897', 'diallo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'IMG-64221ba7386905.87764517.jpg', '2023-03-27 22:41:43');

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
  ADD KEY `publication_id` (`publication_id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publication_id` (`publication_id`),
  ADD KEY `com_ibfk_1` (`id_user`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_ibfk_1` (`id_user`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `com_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
