-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 25 jan. 2021 à 14:49
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `timetimer11`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id`, `libelle`) VALUES
(1, 'Coloriage'),
(2, 'Lego'),
(3, 'Jeux-Vidéos'),
(4, 'Sport'),
(5, 'Musique'),
(6, 'Ecriture'),
(7, 'Danse');

-- --------------------------------------------------------

--
-- Structure de la table `enfant`
--

DROP TABLE IF EXISTS `enfant`;
CREATE TABLE IF NOT EXISTS `enfant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaiss` date NOT NULL,
  `pathologie` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_34B70CA2727ACA70` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `enfant`
--

INSERT INTO `enfant` (`id`, `nom`, `prenom`, `datenaiss`, `pathologie`, `parent_id`) VALUES
(4, 'Pailloux', 'Thomas', '2013-10-16', 'trouble de latéralisation', 19),
(5, 'Pailloux', 'Bastien', '2012-11-13', 'ininfirmité motrice cérébrale', 19),
(6, 'Mainnemard', 'Lucie', '2013-11-19', 'surdité', 21);

-- --------------------------------------------------------

--
-- Structure de la table `enfant_activite`
--

DROP TABLE IF EXISTS `enfant_activite`;
CREATE TABLE IF NOT EXISTS `enfant_activite` (
  `enfant_id` int(11) NOT NULL,
  `activite_id` int(11) NOT NULL,
  PRIMARY KEY (`enfant_id`,`activite_id`),
  KEY `IDX_71719BC5450D2529` (`enfant_id`),
  KEY `IDX_71719BC59B0F88B1` (`activite_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20201013141312', '2020-10-13 14:16:46');

-- --------------------------------------------------------

--
-- Structure de la table `pratiquer`
--

DROP TABLE IF EXISTS `pratiquer`;
CREATE TABLE IF NOT EXISTS `pratiquer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activite_id` int(11) DEFAULT NULL,
  `enfant_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `duree` time NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F6B7BE9C9B0F88B1` (`activite_id`),
  KEY `IDX_F6B7BE9C450D2529` (`enfant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pratiquer`
--

INSERT INTO `pratiquer` (`id`, `activite_id`, `enfant_id`, `date`, `duree`, `description`) VALUES
(3, 1, 4, '2020-01-01', '00:45:00', 'Thomas à réussi à bien se concentrer, grosse progression.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`) VALUES
(18, 'medical@gmail.com', '[\"ROLE_MEDICAL\"]', '$argon2id$v=19$m=65536,t=4,p=1$dEFXWDdNQUcxcU0wZUtFeA$BFm+gRpDAyE0bs3AluC50DjtblMbw2vSyrrQjtHG6ss', 'Pietri', 'Bastien'),
(19, 'parent@gmail.com', '[\"ROLE_PARENTS\"]', '$argon2id$v=19$m=65536,t=4,p=1$azRLbDZtRzBacHplU0NINw$/Jr66gWw7VBms3GEobRCx/cvKQdfv06YHujkEdlODIk', 'Pailloux', 'Carole'),
(20, 'educateur@gmail.com', '[\"ROLE_EDUCATEUR\"]', '$argon2id$v=19$m=65536,t=4,p=1$bzVnTDUxSkt5Lm5rc3k5bQ$Jdr6S+M/BZc9HkSrOSfGgids2v3+GtpZM8oDzUYdyUY', 'Dubois', 'Jean'),
(21, 'florian@gmail.com', '[\"ROLE_PARENTS\"]', '$argon2id$v=19$m=65536,t=4,p=1$OGlMQjRHVWhzejhnWUhxVA$VnQ5xVFQiEowowJk1pkIch181dUwyRWHNoKzIlx1Oyw', 'Mainnemard', 'Florian');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD CONSTRAINT `FK_34B70CA2727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `enfant_activite`
--
ALTER TABLE `enfant_activite`
  ADD CONSTRAINT `FK_71719BC5450D2529` FOREIGN KEY (`enfant_id`) REFERENCES `enfant` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_71719BC59B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `pratiquer`
--
ALTER TABLE `pratiquer`
  ADD CONSTRAINT `FK_F6B7BE9C450D2529` FOREIGN KEY (`enfant_id`) REFERENCES `enfant` (`id`),
  ADD CONSTRAINT `FK_F6B7BE9C9B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
