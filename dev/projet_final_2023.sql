-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 19 juil. 2023 à 01:45
-- Version du serveur : 8.0.31
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_final_2023`
--

-- --------------------------------------------------------

--
-- Structure de la table `chalets`
--

CREATE TABLE `chalets` (
  `id` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `personnes_max` int NOT NULL,
  `prix_haute_saison` int NOT NULL,
  `prix_basse_saison` int NOT NULL,
  `actif` tinyint(1) NOT NULL,
  `promo` tinyint(1) NOT NULL,
  `date_inscription` date NOT NULL,
  `fk_region` int NOT NULL,
  `id_picsum` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chalets`
--

INSERT INTO `chalets` (`id`, `nom`, `description`, `personnes_max`, `prix_haute_saison`, `prix_basse_saison`, `actif`, `promo`, `date_inscription`, `fk_region`, `id_picsum`) VALUES
(1, 'Chalet Havre de paix - Centre-du-Québec', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Centre-du-Québec, dans la liste complète des chalets et dans la liste des chalets promo. ', 12, 165, 150, 1, 1, '2023-06-01', 1, 380),
(2, 'Chalet INACTIF - Centre du Québec', 'Magnifique Chalet. Puisqu\'il est inactif, il ne devrait pas s\'afficher sur le site, dans aucune page. ', 4, 110, 100, 0, 1, '2023-06-02', 1, 10),
(3, 'Chalet Havre de paix - Mauricie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Mauricie, dans la liste complète des chalets et dans la liste des chalets promo. ', 14, 132, 120, 1, 1, '2023-06-03', 2, 13),
(4, 'Chalet Havre de paix - Montérégie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Montérégie, dans la liste complète des chalets et dans la liste des chalets promo. ', 10, 209, 190, 1, 1, '2023-06-04', 3, 14),
(5, 'Chalet Havre de paix - Saguenay-Lac-Saint-Jean', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Saguenay-Lac-St-Jean, dans la liste complète des chalets et dans la liste des chalets promo. ', 12, 214, 195, 1, 1, '2023-06-05', 4, 17),
(6, 'Chalet PAS PROMO - Centre du Québec', 'Magnifique chalet pas en promotion.... Il peut s\'afficher dans la liste des chalets de la région Centre-du-Québec et dans la liste complète des chalets. Il ne doit pas appraître sur l\'accueil, ni dans la liste des chalets en promo. ', 6, 165, 150, 1, 0, '2023-06-06', 1, 28),
(7, 'Chalet INACTIF et PAS PROMO - Centre-du-Québec', 'Magnifique Chalet. Puisqu\'il est inactif, il ne devrait pas s\'afficher sur le site, dans aucune page. ', 6, 236, 215, 0, 0, '2023-06-07', 1, 380),
(8, 'Chalet Sérénité - Centre-du-Québec', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Centre-du-Québec, dans la liste complète des chalets et dans la liste des chalets promo.', 8, 248, 225, 1, 1, '2023-07-02', 1, 380),
(9, 'Chalet Sérénité - Mauricie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Mauricie, dans la liste complète des chalets et dans la liste des chalets promo.', 4, 242, 220, 1, 1, '2023-06-09', 2, 380),
(10, 'Chalet Sérénité - Montérégie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Montérégie, dans la liste complète des chalets et dans la liste des chalets promo.', 4, 187, 170, 1, 1, '2023-06-10', 3, 380),
(11, 'Chalet Sérénité - Saguenay-Lac-St-Jean', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Saguenay-Lac-St-Jean, dans la liste complète des chalets et dans la liste des chalets promo.', 8, 110, 100, 1, 1, '2023-06-11', 4, 380),
(12, 'Chalet Le paradis perdu - Centre-du-Québec', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Centre-du-Québec, dans la liste complète des chalets et dans la liste des chalets promo.', 10, 214, 195, 1, 1, '2023-06-12', 1, 380),
(13, 'Chalet Le paradis perdu - Mauricie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Mauricie, dans la liste complète des chalets et dans la liste des chalets promo.', 4, 126, 115, 1, 1, '2023-06-13', 2, 380),
(14, 'Chalet Le paradis perdu - Montérégie', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Montérégie, dans la liste complète des chalets et dans la liste des chalets promo.', 4, 214, 195, 1, 1, '2023-06-14', 3, 380),
(15, 'Chalet Le paradis perdu - Saguenay-Lac-St-Jean', 'Magnifique chalet.... Il peut s\'afficher sur la page d\'accueil (chalets en promo), dans la liste des chalets de la région Saguenay-Lac-St-Jean, dans la liste complète des chalets et dans la liste des chalets promo.', 12, 264, 240, 1, 1, '2023-06-15', 4, 380);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` int NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`) VALUES
(1, 'Portugal'),
(2, 'Thaïlande'),
(3, 'Italie'),
(4, 'Australie'),
(5, 'Maroc');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `nom`) VALUES
(1, 'Centre-du-Québec'),
(2, 'Mauricie'),
(3, 'Montérégie'),
(4, 'Saguenay–Lac-Saint-Jean ');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `code_utilisateur` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `courriel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `code_utilisateur`, `mot_de_passe`, `courriel`) VALUES
(1, 'utilisateur1', '$2y$10$5Igy2O4oQSwTK6KCyXqIgO0JDYjSaB6xabJXktdAWBRpTih9mKD7u', 'utilisateur1@user.ca');

-- --------------------------------------------------------

--
-- Structure de la table `voyages`
--

CREATE TABLE `voyages` (
  `id` int NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `date_depart` date NOT NULL,
  `nombre_de_jours` int NOT NULL,
  `fk_pays` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `voyages`
--

INSERT INTO `voyages` (`id`, `nom`, `description`, `prix`, `date_depart`, `nombre_de_jours`, `fk_pays`) VALUES
(1, 'Enchantements marocains', 'Un périple à travers les mille et une merveilles du Maroc. Découvrez les souks colorés, les palais somptueux, les oasis paisibles et les dunes dorées du Sahara. Une immersion culturelle inoubliable entre traditions ancestrales et hospitalité chaleureuse.', 2840.99, '2023-09-20', 12, 5),
(2, 'Aventure Lusitanienne', 'Découvrez la beauté envoûtante du Portugal, des ruelles pavées de Lisbonne aux vignobles de la vallée du Douro. Imprégnez-vous de la culture, goûtez aux délices culinaires, et laissez-vous séduire par les plages dorées de l\'Algarve.', 1920.99, '2023-08-27', 14, 1),
(3, 'Enchantements de Siam', 'Plongez dans l\'exotisme de la Thaïlande, des temples étincelants de Bangkok aux plages de sable blanc de Phuket. Explorez les marchés flottants, goûtez aux saveurs épicées de la cuisine thaïe et découvrez l\'hospitalité chaleureuse du peuple thaïlandais.', 2670.99, '2024-02-07', 12, 2),
(4, 'Dolce Vita italienne', 'Découvrez l\'élégance de l\'Italie, des canaux romantiques de Venise aux ruines antiques de Rome. Plongez dans l\'art de Florence et détendez-vous sur les plages de la côte amalfitaine. ', 2380.99, '2023-11-21', 14, 3),
(6, 'Joyaux du Portugal', 'Parcourez les trésors cachés du Portugal, des charmantes ruelles de Porto aux châteaux médiévaux de Sintra. Plongez dans l\'histoire de Lisbonne, vibrez au rythme du fado et goûtez aux vins renommés de l\'Alentejo.', 2110.99, '2023-10-13', 13, 1),
(11, 'Rêves d\'Asie', 'Explorez les temples dorés de Chiang Mai, plongez dans l\'effervescence de Bangkok, découvrez les eaux cristallines de Koh Phi Phi et ressourcez-vous dans les tranquilles retraites de l\'île de Koh Samui.', 3250.99, '2024-04-23', 18, 2),
(12, 'Terres sauvages australiennes', 'Explorez la diversité de l\'Australie, des plages immaculées de la Grande Barrière de Corail aux paysages arides de l\'Outback. Rencontrez la faune unique, surfez sur les vagues de la Gold Coast et imprégnez-vous de ce vaste pays-continent.', 3560.99, '2023-12-02', 19, 4),
(13, 'Trésors du Maroc', 'Explorez les mystères de l\'ancienne médina de Fès et laissez-vous envoûter par les paysages envoûtants de l\'Atlas. Une escapade exotique mêlant patrimoine historique, saveurs culinaires et paysages à couper le souffle.', 3290.99, '2024-03-25', 12, 5),
(14, 'Évasion Azulejos', 'Explorez les rues colorées de Lisbonne, visitez les palais ornés de Porto et déambulez le long des côtes de l\'Algarve. Une immersion artistique et pittoresque au pays des azulejos.', 2230.99, '2024-06-09', 17, 1),
(15, 'Aventure Down Under', 'Explorez l\'Australie, des plages paradisiaques de la côte est aux majestueux paysages de l\'Outback. Rencontrez les kangourous, plongez dans la Grande Barrière de Corail et découvrez la vibrante culture aborigène.', 3880.99, '2024-03-23', 22, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chalets`
--
ALTER TABLE `chalets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chalets_regions` (`fk_region`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyages`
--
ALTER TABLE `voyages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voyages_pays` (`fk_pays`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chalets`
--
ALTER TABLE `chalets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `voyages`
--
ALTER TABLE `voyages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chalets`
--
ALTER TABLE `chalets`
  ADD CONSTRAINT `chalets_regions` FOREIGN KEY (`fk_region`) REFERENCES `regions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `voyages`
--
ALTER TABLE `voyages`
  ADD CONSTRAINT `voyages_pays` FOREIGN KEY (`fk_pays`) REFERENCES `pays` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
