-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 30 mai 2024 à 23:57
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `permutation_en_ligne`
--

-- --------------------------------------------------------

--
-- Structure de la table `catégorie`
--

CREATE TABLE `catégorie` (
  `Id_Cat` int(11) NOT NULL,
  `Nom_Cat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `catégorie`
--

INSERT INTO `catégorie` (`Id_Cat`, `Nom_Cat`) VALUES
(1, 'Universites'),
(2, 'Centres Universitaires'),
(3, 'Ecole Nationales Superieures'),
(4, 'Ecoles Normales Superieures');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `Id_Demande` int(11) NOT NULL,
  `Date_Demande` varchar(100) NOT NULL,
  `Status` enum('Satisfait','En attente') DEFAULT 'En attente',
  `Id_Ens` int(11) NOT NULL,
  `universitaire` varchar(100) NOT NULL,
  `faculte` varchar(100) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `specialite` text NOT NULL,
  `wilaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`Id_Demande`, `Date_Demande`, `Status`, `Id_Ens`, `universitaire`, `faculte`, `departement`, `specialite`, `wilaya`) VALUES
(96, 'May 30, 2024, 11:47', 'Satisfait', 32, '9', '76', '354', 'pédiatrie', 25),
(97, 'May 30, 2024, 11:49', 'Satisfait', 33, '1', '2', '26', 'pédiatrie', 23),
(98, 'May 30, 2024, 11:50', 'Satisfait', 34, '9', '76', '354', 'pédiatrie', 25);

-- --------------------------------------------------------

--
-- Structure de la table `demande_dèpartement`
--

CREATE TABLE `demande_dèpartement` (
  `Id_Demande` int(11) NOT NULL,
  `Id_Dép` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `Id_Dep` int(11) NOT NULL,
  `Nom_Dep` varchar(60) NOT NULL,
  `Id_fac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`Id_Dep`, `Nom_Dep`, `Id_fac`) VALUES
(1, 'droit', 7),
(2, 'Departement des Sciences Polit', 7),
(3, 'Departement d\'electromecanique', 6),
(4, 'Departement d\'electronique', 6),
(5, 'Departement d\'electrotechnique', 6),
(6, 'Departement Genie Civil', 6),
(7, 'Departement de Genie des Mater', 6),
(8, 'Genie des Procedes', 6),
(9, 'genie mecanique', 6),
(10, 'Departement d\'Hydraulique', 6),
(11, 'informatique', 6),
(12, 'Departement des Sciences et Technologies', 6),
(13, 'Departement des Sciences financières', 5),
(14, 'Departement des Sciences de Gestion', 5),
(15, 'sciences economiques', 5),
(16, 'Departement de Biologie', 1),
(17, 'Departement de Biochimie', 1),
(18, 'Departement de Chimie', 1),
(19, 'mathematiques', 1),
(20, 'informatique', 1),
(21, 'Departement de Physique', 1),
(22, 'Departement des Sciences de la Matière', 1),
(23, 'Departement des Sciences de la Mer', 1),
(24, 'Departement des Sciences de la Nature et de la Vie', 1),
(25, 'Departement de Chirurgie Dentaire', 2),
(26, 'medecine', 2),
(27, 'pharmacie', 2),
(28, 'Departement de Bibliotheconomie', 3),
(29, 'Departement de Communication', 3),
(30, 'Departement d\'education Physique et Sportive', 3),
(31, 'Departement d\'Histoire', 3),
(32, 'Departement de Philosophie', 3),
(33, 'Psychologie', 3),
(34, 'Sciences Humaines', 3),
(35, 'Departement des Sciences Sociales', 3),
(36, 'Sociologie', 3),
(37, 'anglais', 4),
(38, 'Departement de Langue et Litteratures Arabe', 4),
(39, 'francais', 4),
(40, 'Departement de Langue Italienne', 4),
(41, 'Departement de Traduction et Interpretariat', 4),
(42, 'Departement d Amenagement du territoire', 8),
(43, 'architecture', 8),
(44, 'Departement de Geologie', 8),
(45, 'Departement des Mines', 8),
(46, 'droit', 9),
(47, 'Sciences  Politiques', 9),
(48, 'Sciences Humaines', 10),
(49, 'Sciences de communication', 10),
(50, 'Psychologie', 10),
(51, 'Sociologie', 10),
(52, 'Lettres et Langues', 11),
(53, 'Litterature et langues etrangère ', 11),
(54, 'Departement de Petrochimie.', 12),
(55, 'Genie des Procedes', 12),
(56, 'Departement de Technologie', 12),
(57, 'Departement de Genie electrique', 12),
(58, 'genie mecanique', 12),
(59, 'Departement Genie civil', 12),
(60, 'sciences economiques', 13),
(61, 'Departement des Sciences de Gestion', 13),
(62, 'sciences commerciales', 13),
(63, 'Departement des sciences financières et comptabili', 13),
(64, 'Departement des Sciences de la Matière', 14),
(65, 'informatique', 14),
(66, 'Departement des Sciences de la Nature et de la Vie', 14),
(67, 'معهد العلوم و التقنيات التطبيقية - ISTA –', 15),
(68, 'Departement Genie Civil', 16),
(69, 'climatique', 16),
(70, 'informatique', 16),
(71, 'Genie Des Transports', 16),
(72, 'Genie Mecanique', 16),
(73, 'Departement Lettre Arabe', 17),
(74, 'francais', 17),
(75, 'Biologie et Ecologie Vegetale ', 18),
(76, 'Biologie Animale on sapien', 18),
(77, 'Biochimie/Biologie Moleculaire et cellulaire', 18),
(78, 'Ecologie et Biologie Vegetale', 18),
(79, 'Biologie', 18),
(80, 'droit prive', 19),
(81, 'Physique', 20),
(82, 'Chimie (Laboratoire des sciences et technologies de l\'enviro', 20),
(83, 'mathematique', 20),
(84, 'Chimie(Le laboratoire des produits naturels d\'origine vegeta', 20),
(85, 'Amenagement Du Territoire', 21),
(86, 'Departement : Sciences Geologiques', 21),
(87, 'Institut De La Nutrition, De L Alimentation Et Des Technolog', 22),
(88, 'Institut Des Sciences Veterinaires', 23),
(89, 'Technologies Des Logiciels Et Des Systèmes d\'information', 24),
(90, 'Departement De L informatique Fondamentale Et Ses Applicatio', 24),
(91, 'Departement de Philosophie', 25),
(92, 'Sociologie', 25),
(93, 'Departement d Archeologies et d Histoire', 25),
(94, 'sciences economiques', 26),
(95, 'sciences commerciales', 26),
(96, 'Departement des Sciences de Gestion', 26),
(97, 'Psychologie', 27),
(98, 'Departement des Sciences de l education', 27),
(99, 'Departement de l Education Physique et Sportive', 28),
(100, 'Departement de bibliotheconomie', 29),
(101, 'architecture', 30),
(102, 'Genie civil', 30),
(103, 'Hydraulique', 30),
(104, 'Chimie Physique', 31),
(105, 'Genie des Materiaux', 31),
(106, 'Genie Chimique', 31),
(107, 'Electronique', 32),
(108, 'Electrotechnique', 32),
(109, 'Automatique', 32),
(110, 'Genie mecanique', 33),
(111, 'Genie maritime', 33),
(112, 'Mines et metallurgie', 33),
(113, 'mathematique', 34),
(114, 'informatique', 34),
(115, 'Genie physique', 35),
(116, 'Physique energetique', 35),
(117, 'Technologie Des Materiaux', 35),
(118, 'Enseignements de bases en physique', 35),
(119, 'Enseignements de Base en Biologie', 36),
(120, 'Biotechnologie', 36),
(121, 'Genetique moleculaire appliquee', 36),
(122, 'Vivant et Environnement', 36),
(123, 'Maintenance Industrielle & Technologie Automobile (MITA)', 37),
(124, 'Genie Industriel et Maintenance', 37),
(125, 'Genie Mecanique et Production', 37),
(126, 'Genie Electrique et Technologie de L information Industriell', 37),
(127, 'Institut d\'education physique et des sports', 38),
(128, 'Departement d Allemand et de Russe', 39),
(129, 'anglais', 39),
(130, 'Departement d Espagnol', 39),
(131, 'francais', 39),
(132, 'droit public', 40),
(133, 'droit prive', 40),
(134, 'Departement de science politique', 40),
(135, 'Espace pour un certificat de capacite pour la profession d\'a', 42),
(136, 'Departement des Finances et de la Comptabilite ', 42),
(137, 'sciences economiques ', 42),
(138, 'Departement des Sciences de Gestion ', 42),
(139, 'sciences commerciales', 42),
(140, 'Departement DES SCIENCES DE LA TERRE ', 43),
(141, 'Departement DE GeOGRAPHIE ET DE L AMeNAGEMENT DU TERRITOIRE', 43),
(142, 'Filière: electromecanique', 44),
(143, 'Filière : Genie Industriel ', 44),
(144, 'Filière : Hygiène et Securite Industrielle ', 44),
(145, 'architecture', 45),
(146, 'informatique', 45),
(147, 'mathematiques', 45),
(148, 'Departement SCIENCES DE LA MATIÈRE', 45),
(149, 'Departement SCIENCES DE LA NATURE ET LA VIE', 45),
(150, 'charia et droit', 46),
(151, 'Departement Fois et Religions', 46),
(152, 'Departement Langue et Civilisation Arabo-Islamique', 46),
(253, 'pharmacie', 47),
(254, 'medecine', 47),
(255, 'medecine dentaire', 47),
(256, 'sciences economiques', 58),
(257, 'Departement des Sciences de Gestion', 58),
(258, 'sciences commerciales', 58),
(259, 'Departement Finance et Comptabilite', 58),
(260, 'Sciences Humaines', 59),
(261, 'Departement des sciences sociales', 59),
(262, 'droit public', 60),
(263, 'droit prive', 60),
(264, 'Departement de science politique', 60),
(265, 'Departement de langue et litterature arabes', 61),
(266, 'anglais', 61),
(267, 'francais', 61),
(268, 'Departement de langue italienne', 61),
(269, 'medecine', 48),
(270, 'pharmacie  ', 48),
(271, 'informatique', 49),
(272, 'Departement  Physique', 49),
(273, 'Departement  Chimie', 49),
(274, 'Departement Tranc commun SM', 50),
(275, 'Departement de Biologie', 50),
(276, 'Departement d Agronomie ', 50),
(277, 'Departement des sciences de la mer et de l aquaculture ', 50),
(278, 'Departement des sciences alimentaires', 50),
(279, 'Departement de biotechnologie', 50),
(280, 'Departement Tronc Commun Sciences et Technologies ', 51),
(281, 'Departement Genie Civil', 51),
(282, 'architecture', 51),
(283, 'Genie des Procedes', 51),
(284, 'Departement genie electrique', 51),
(285, 'genie mecanique', 51),
(286, 'Departement des arts du tronc commun', 52),
(287, 'Departement des Arts', 52),
(288, 'Departement Tronc commun langue et litterature arabe ', 52),
(289, 'Departement d\'etudes litteraires et critiques', 52),
(290, 'anglais', 53),
(291, 'Departement Langue espagnole', 53),
(292, 'francais', 53),
(293, 'droit prive', 54),
(294, 'droit public', 54),
(295, 'Departement de science politique', 55),
(296, 'sciences commerciales', 55),
(297, 'sciences commerciales', 55),
(298, 'Departement des Sciences de Gestion', 55),
(299, 'sciences economiques', 55),
(300, 'Departement des Finances et de la Comptabilite', 55),
(301, 'Sciences Humaines ', 56),
(302, 'Departement des sciences sociales', 56),
(303, 'Departement Tronc commun L.L.D ', 57),
(304, 'Departement d\'education physique et des sports ', 57),
(305, 'Departement de formation sportive  ', 57),
(306, 'Departement d\'activite physique sportive adaptee', 57),
(307, 'Departement d\'Histoire', 62),
(308, 'Departement de Bibliotheconomie et de la documentation', 62),
(309, 'Departement de Philosophie.', 62),
(310, 'Psychologie', 63),
(311, 'sociologie et demographie', 63),
(312, 'Departement d\'Orthophonie', 63),
(313, 'Departement des sciences de l\'education', 63),
(314, 'Departement de langue et litterature arabes', 64),
(315, 'Departement des Sciences Linguistiques', 64),
(316, 'Departement des Arts', 64),
(317, 'anglais', 65),
(318, 'francais', 65),
(319, 'Departement des langues- italienne-espagnole- allemande', 65),
(320, 'Departement  d\'entretien et de restauration', 66),
(321, 'Departement des Antiquites', 66),
(322, 'Institut de traduction', 67),
(323, 'sciences economiques ', 68),
(324, 'sciences commerciales  ', 68),
(325, 'Departement des Sciences de Gestion ', 68),
(326, 'Departement des Finances et de la Comptabilite ', 68),
(327, 'Sciences de la communication ', 69),
(328, 'Departement des sciences des medias ', 69),
(329, 'Departement de l organisation politique et administrative ', 70),
(330, 'Departement des relations internationales ', 70),
(331, 'Departement d\'activite physique sportive educative ', 70),
(332, 'Departement de formation sportive ', 70),
(333, 'Departement d\'administration et de gestion du sport', 70),
(334, 'Departement d\'activite physique sportive adaptee', 70),
(335, 'informatique', 72),
(336, 'Departement de physique ', 72),
(337, 'Departement de chimie ', 72),
(338, 'mathematiques ', 72),
(339, 'Departement tronc commun', 72),
(340, 'medecine', 73),
(341, 'pharmacie ', 73),
(342, 'medecine dentaire', 73),
(343, 'Departement d  electronique', 74),
(344, 'Departement Genie Civil ', 74),
(345, 'genie mecanique', 74),
(346, 'Departement des sciences de l eau et de l environnement ', 74),
(347, 'Genie des Procedes', 74),
(348, 'Departement des energies renouvelables', 74),
(349, 'Departement d automatique et genie electrique', 74),
(350, 'Departement de biotechnologie', 75),
(351, 'Departement agroalimentaire', 75),
(352, 'Departement de biologie cellulaire et physiologique ', 75),
(353, 'Departement de biologie des populations et des organismes', 75),
(354, 'medecine', 76),
(355, 'pharmacie', 76),
(356, 'medecine dentaire', 76),
(357, 'architecture', 77),
(358, 'Departement d Urbanisme', 77),
(359, 'Departement Management de Projets', 77),
(360, 'Departement de Genie Pharmaceutique', 78),
(361, 'Departement de Genie de l Environnement ', 78),
(362, 'Genie des Procedes ', 78),
(363, 'Departement de Genie Chimique', 78),
(364, 'Departement d\'organisation Politique', 79),
(365, 'Departement des relations internationales ', 79),
(366, 'Tronc commun 1\'er annee ', 80),
(367, 'Departement Beaux-arts ', 80),
(368, 'Departement Arts Dramatiques', 80),
(369, 'Departement audiovisuel', 81),
(370, 'Departement de journalisme', 81),
(371, 'Departement de Communication et Relations Publiques', 81),
(372, 'Departement de la gestion municipale et de la construction', 82),
(373, 'Departement des technologies urbaines et de l\'environnement', 82),
(374, 'Departement de tronc commun Sciences et Technologie', 101),
(375, 'Departement d Electronique ', 101),
(376, 'Departement d Electrotechnique ', 101),
(377, 'Genie des Procedes ', 101),
(378, 'genie mecanique', 101),
(379, 'Departement de Tronc commun des Mathematiques et Informatiqu', 102),
(380, 'Departement de Tronc commun des Sciences de la Nature et de ', 102),
(381, 'Departement des Sciences de la Matière', 102),
(382, 'mathematiques', 102),
(383, 'informatique ', 102),
(384, 'Departement de la Biologie', 102),
(385, 'Departement des Sciences Agronomiques', 102),
(386, 'medecine', 103),
(387, 'architecture', 104),
(388, 'Departement Genie Civil', 104),
(389, 'Departement de langue et de lettres arabes ', 105),
(390, 'anglais', 105),
(391, 'francais', 105),
(392, 'Departement d espagnol', 105),
(393, 'Departement of Islamic Sciences ', 106),
(394, 'Departement of Human Sciences ', 106),
(395, 'Departement of history ', 106),
(396, 'Departement of Media and Communication', 106),
(397, 'Departement de Psychologie  et Sciences de l Education et de', 107),
(398, 'Departement de philosophie ', 107),
(399, 'sociologie et demographie', 107),
(400, 'Sciences Politiques ', 108),
(401, 'droit', 108),
(402, 'Departement Tronc Commun ', 109),
(403, 'Departement des Sciences de Gestion ', 109),
(404, 'sciences economiques', 109),
(405, 'sciences commerciales ', 109),
(406, 'Departement des Sciences Financières et Comptabili', 109),
(407, 'Departement De Gestion Sportive', 110),
(408, 'Departement des activites physique  et sportive educative', 110),
(409, 'informatique', 88),
(410, 'mathematique', 88),
(411, 'sience de la matier', 88);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `Id_Ens` int(11) NOT NULL,
  `Nom_Ens` varchar(30) NOT NULL,
  `Prénom_Ens` varchar(30) NOT NULL,
  `Email_Ens` varchar(60) NOT NULL,
  `Adresse_Ens` varchar(60) NOT NULL,
  `Date_Nais_Ens` date NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Grade` enum('Pr','MCA','MCB','MAA','MAB') NOT NULL,
  `Sexe_Ens` varchar(1) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `specialite` varchar(100) NOT NULL,
  `universitaire` varchar(50) NOT NULL,
  `faculte` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`Id_Ens`, `Nom_Ens`, `Prénom_Ens`, `Email_Ens`, `Adresse_Ens`, `Date_Nais_Ens`, `Password`, `Grade`, `Sexe_Ens`, `departement`, `specialite`, `universitaire`, `faculte`) VALUES
(32, 'asma', 'dd', 'asma@gmail.com', '23', '2024-05-16', '123', 'MCA', 'f', '26', '291', '1', '2'),
(33, 'islem', 'ss', 'islem@gmail.com', '25', '2024-05-22', '123', 'MCA', 'm', '354', '291', '9', '76'),
(34, 'monder', 'cc', 'monder@gmail.com', '16', '2024-05-31', '123', 'Pr', 'm', '254', '291', '2', '47');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant_dèpartement`
--

CREATE TABLE `enseignant_dèpartement` (
  `Id_Ens` int(11) NOT NULL,
  `Id_Dép` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `enseignant_spècialitè`
--

CREATE TABLE `enseignant_spècialitè` (
  `Id_Ens` int(11) NOT NULL,
  `id_spè` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `faculté`
--

CREATE TABLE `faculté` (
  `Id_Fac` int(11) NOT NULL,
  `Nom_Fac` varchar(100) NOT NULL,
  `Id_Univ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `faculté`
--

INSERT INTO `faculté` (`Id_Fac`, `Nom_Fac`, `Id_Univ`) VALUES
(1, 'Faculté des Sciences', 1),
(2, 'Faculté de Médecine', 1),
(3, 'Faculté des Sciences Humaines ', 1),
(4, 'Faculté des Lettres et des Langues', 1),
(5, 'Faculté des Sciences Economiques, Commerciales et des Sciences', 1),
(6, 'Faculté de Technologie', 1),
(7, 'Faculté de Droit et des Sciences Politiques', 1),
(8, 'Faculté des Sciences de la Terre', 1),
(9, 'Faculté Droit et Sciences politiques', 8),
(10, 'Faculté Sciences humaines et sociale', 8),
(11, 'Faculté Lettre et langues', 8),
(12, 'Faculté de Technologie', 8),
(13, 'Faculté sciences de gestion ،économiques et sciences commercial', 8),
(14, 'Faculté des sciences', 8),
(15, 'Institut des sciences et techniques appliquées(skikda)', 8),
(16, 'Faculté Sciences De Technologies ', 12),
(17, 'Faculté Des Lettres Et Des Langues', 12),
(18, 'Faculté Des Sciences De La Nature Et De La Vie', 12),
(19, 'Faculté De Droit', 12),
(20, 'Faculté Des Sciences Exactes', 12),
(21, 'Faculté Des Sciences De La Terre', 12),
(22, 'Institut De La Nutrition, De L’Alimentation Et Des Technolog', 12),
(23, 'Institut Des Sciences Vétérinaires', 12),
(24, 'Faculté Des Nouvelles Technologies De l’Information Et De La Communication', 11),
(25, 'Faculté Des Sciences Humaines Et Des Sciences Sociales', 11),
(26, 'Faculté Des Sciences Économiques, Commerciales Et Des Sciences De Gestion', 11),
(27, 'Faculté De Psychologie Et Des Sciences De L’éducation', 11),
(28, 'Institut Des Sciences Et Techniques Des Activités Physiques Et Sportives', 11),
(29, 'Institut De Bibliothéconomie ', 11),
(30, 'Faculté d’Architecture et de Génie Civil', 13),
(31, 'Faculté de Chimie – USTO MB', 13),
(32, 'Faculté de Génie Electrique USTOMB Mohamed-Boudiaf', 13),
(33, 'Faculté de Génie Mécanique USTOMB Mohamed-Boudiaf USTOMB', 13),
(34, 'Faculté Des Mathématiques Et Informatique', 13),
(35, 'Faculté de Physique', 13),
(36, 'Sciences de la nature & de la vie', 13),
(37, 'Institut des Sciences et Techniques Appliquées (ISTA)', 13),
(38, 'Institut d\'éducation physique et des sports', 13),
(39, 'Faculté des langues étrangères', 14),
(40, 'Faculté de droit et de sciences politiques', 14),
(41, 'Faculté des Sciences Sociales.', 14),
(42, 'Faculté des Sciences Économiques, Commerciales et de Gestion', 14),
(43, 'Faculté des Sciences de la Terre et de l\'Univers', 14),
(44, 'Institut de Maintenance et de Sécurité Industrielle', 14),
(45, 'Faculté des sciences', 2),
(46, 'Faculté des Sciences Islamiques', 2),
(47, 'Faculté de Médecine', 2),
(48, 'Faculté de médecine (FMED)', 15),
(49, 'Faculté des Sciences Exactes et Informatique (FSEI).', 15),
(50, 'Faculté des sciences naturelles et de la vie (FSNU).', 15),
(51, 'Faculté des Sciences Technologiques (FST).', 15),
(52, 'Faculté de Lettres et Arts Arabes (FLA).', 15),
(53, 'Faculté des Langues Etrangères (FLE).', 15),
(54, 'Faculté de droit et de sciences politiques (FDSP).', 15),
(55, 'Faculté des Sciences Économiques, Commerciales et de Gestion (FSECSG).', 15),
(56, 'Faculté des sciences sociales (FSS).', 15),
(57, 'Institut d\'Éducation Physique et Sportive (IEPS).', 15),
(58, 'Faculté des Sciences Économiques, Commerciales et de Gestion', 5),
(59, 'Faculté des sciences humaines et sociales ', 5),
(60, 'Faculté de droit et de sciences politiques\r\n', 5),
(61, 'Faculté des Arts et des Langues', 5),
(62, 'Faculté des Sciences Humaines\r\n', 3),
(63, 'Faculté des sciences sociales\r\n', 3),
(64, 'Faculté de langue, littérature arabe et langues orientales', 3),
(65, 'Faculté des langues étrangères\r\n', 3),
(66, 'Institut d\'Archéologie', 3),
(67, 'Institut de traduction', 3),
(68, 'Faculté des Sciences Economiques des Sciences Commerciales et des Sciences de Gestion', 4),
(69, 'Faculté des Sciences des Médias et de la Communication', 4),
(70, 'Faculté de Sciences Politiques et de Relations Internationales', 4),
(71, 'Institut d\'éducation physique et sportive', 4),
(72, 'Faculté  SCIENCES\r\n', 6),
(73, 'Faculté  DE MÉDECINE\r\n', 6),
(74, 'Faculté  DE TECHNOLOGIE', 6),
(75, 'Faculté  SCIENCES DE LA NATURE ET DE LA VIE', 6),
(76, 'Faculté de Médecine\r\n', 9),
(77, 'Faculté d’Architecture et d’Urbanisme', 9),
(78, 'Faculté de Génie des Procédés', 9),
(79, 'Faculté des Sciences Politiques', 9),
(80, 'Faculté des Arts et de la Culture', 9),
(81, 'Faculté des Sciences de l’Information de la Communication et de l’Audio Visuel', 9),
(82, 'Institut de Gestion des Techniques Urbaines', 9),
(83, 'Institut des Sciences et techniques Appliquées', 16),
(84, 'Faculté de Médecine', 16),
(85, 'Faculté des sciences de la nature et de la vie et sciences de la terre et de l’univers', 16),
(86, 'Faculté des Sciences Économiques, Commerciales et de Gestion', 16),
(87, 'Faculté des sciences humaines et sociales', 16),
(88, 'Faculté de Technologie', 16),
(89, 'Faculté des sciences', 16),
(90, 'Faculté des Lettres et des Langues', 16),
(100, 'Faculté de droit et des sciences politiques', 16),
(101, 'Faculté de Technologie', 17),
(102, 'Faculté des Sciences', 17),
(103, 'FACULTÉ DE LA MÉDCINE', 17),
(104, 'Faculté de Génie Civil et d’Architecture', 17),
(105, 'Faculté des Lettres et des Langues\r\n', 17),
(106, 'Faculté des Sciences Humaines, des Sciences Islamiques et des Civilisations\r\n', 17),
(107, 'Faculté des sciences sociales', 17),
(108, 'Faculté de droit et sciences politiques', 17),
(109, 'Faculté des Sciences Economiques, Commerciales et des Sciences de Gestion\r\n', 17),
(110, 'Institut des sciences et des techniques des activités physiques et sportives\r\n', 17);

-- --------------------------------------------------------

--
-- Structure de la table `satisfait`
--

CREATE TABLE `satisfait` (
  `Id_Demande` int(11) NOT NULL,
  `Date_Demande` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `spécialité`
--

CREATE TABLE `spécialité` (
  `Id_Spés` int(11) NOT NULL,
  `Nom_Spés` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `spécialité`
--

INSERT INTO `spécialité` (`Id_Spés`, `Nom_Spés`) VALUES
(1, 'Géographie et aménagement du territoire\'Licence\''),
(2, 'Aménagement du territoire\'Licence\''),
(3, 'Topographie et Géomatique\'Licence\''),
(4, 'Aménagement des villes\'Master\''),
(5, 'Aménagement et développement des territoires ruraux\'Licence\''),
(6, 'Eau et aménagement durable\'Master\''),
(7, 'Aménagement Touristique et patrimoine\'Master\''),
(8, 'Topographie et Cartographie\'Master\''),
(9, 'Géomatique\'Master\''),
(10, 'Architecture\'Licence\''),
(11, 'Géologie des ressources minérales\'Licence\''),
(12, ' Hydrogéologie\'Licence\''),
(13, 'Stratigraphie – Sédimentologie\'Licence\''),
(14, 'Ressources minérales, matériaux et environnement\'Master\''),
(15, 'Hydrogéologie\'Master\''),
(16, 'Géologie de l’environnement\'Master\''),
(17, 'Géologie des bassins sédimentaires\'Master\''),
(18, 'Exploitation des mines\'Licence\''),
(19, 'Valorisation des ressources minérales\'Licence\''),
(20, 'Exploitation des mines\'Master\''),
(21, 'Valorisation des ressources minérales\'Master\''),
(22, 'Droit Public\'Licence\''),
(23, 'Droit Privé'),
(24, 'Droit des Activités Maritimes et Portuaire\'Master\''),
(25, 'Droit des Affaires\'Master\''),
(26, 'Droit de la Famille\'Master\''),
(27, 'Droit Pénal et Sciences Criminelles\'Master\''),
(28, 'Etat et Institutions\'Master\''),
(29, 'Relations Internationales\'Licence\''),
(30, 'Organisations Politiques et Administratives\'Licence\''),
(31, 'العلاقات الدولية\'Master\''),
(32, 'Relations Internationales\'Master\''),
(33, 'Histoire Générale \'Licence\''),
(34, 'Communication\'Licence\''),
(35, 'Information\'Licence\''),
(36, 'Psychologie Clinique\'Licence\''),
(37, 'Psychologie du Travail et de l\'Organisation\'Licence\''),
(38, 'Psychologie de l\'éducation\'Licence\''),
(39, 'Psychologie de l\'éducation\'Licence\''),
(40, 'Sociologie\'Licence\''),
(41, 'Histoire de l\'occident du Musulman au Moyen age\'Master\''),
(42, 'Histoire de la Résistance et du Mouvement National Algérien'),
(43, 'Communication et Relations Publiques\'Master\''),
(44, 'Audio - Visuel\'Master\''),
(45, 'Communication Organisationnelle \'Master\''),
(46, 'Psychologie Clinique\'Master\''),
(47, 'Psychologie Scolaire\'Master\''),
(48, 'Psychologie du Travail et de l\'Organisation et Gestion des Ressources Humaines'),
(49, 'Sociologie de l\'Education\'Master\''),
(50, 'Sociologie de l\'organisation et du Travail\'Master\''),
(51, 'Sociologie de la déviances et du crime\'Master\''),
(52, 'Sociologie de la Communication\'Master\''),
(53, 'Critique et Etudes littéraires \'Licence\''),
(54, 'Linguistique Générale\'Licence\''),
(55, 'Littérature Arabe\'Licence\''),
(56, 'Langue Française\'Licence\''),
(57, 'Langue Anglaise\'Licence\''),
(58, 'Langue Allemande\'Licence\''),
(59, 'Critique Moderne et Contemporaine\'Master\''),
(60, 'Linguistique Arabe\'Master\''),
(61, 'Linguistique du Discours\'Master\''),
(62, 'Littérature Algérienne\'Master\''),
(63, 'Littérature Arabe Ancienne\'Master\''),
(64, 'Littérature Populaire\'Master\''),
(65, 'Littérature Arabe Moderne et Contemporaine\'\'Master'),
(66, 'Didactique des Langue Etrangères\'Master\''),
(67, 'Littérature et Civilisation\'Master\''),
(68, 'Littérature et Civilisation\'Master\''),
(69, 'Linguistique et Langues Appliquées\'Master\''),
(70, 'Génie des procédés\'Licence\''),
(71, 'Hygiène et Sécurité Industrielle\'Licence\''),
(72, 'Automatisation et contrôle en Industries Pétrochimiques\'Licence\''),
(73, 'Raffinage et Pétrochimie\'Licence\''),
(74, 'Energétique\'Licence\''),
(76, 'Construction Mécanique\'Licence\''),
(77, 'Génie des Matériaux\'Licence\''),
(78, 'Electromécanique\'Licence\''),
(79, 'Maintenance Industrielle\'Licence\''),
(80, 'Génie Industriel  \'Licence\''),
(81, 'Génie Civil \'Licence\''),
(82, 'Travaux Publics \'Licence\''),
(83, 'Génie Chimique\'Master\''),
(84, 'Génie des Polymères\'Master\''),
(85, 'Génie de l\'environnement\'Master\''),
(86, 'Ingénierie et gestion de l\'eau\'Master\''),
(87, 'Hygiène et Sécurité Industrielle\'Master\''),
(88, 'Sécurité des procédés industriels et maîtrise des risques\'Master\''),
(89, 'masteràcursusintégréde licence'),
(90, 'Automatique et Informatique Industrielle\'Master\''),
(91, 'Automatique et Systèmes\'Master\''),
(92, 'Electronique des Systèmes Embarqués\'Master\''),
(93, 'Instrumentation\'Master\''),
(94, 'Instrumentation Biomédicale\'Master\''),
(95, 'Systèmes des télécommunications\'Master\''),
(96, 'Construction Mécanique\'Master\''),
(97, 'Energétique\'Master\''),
(98, 'Fabrication Mécanique et Productique\'Master\''),
(99, 'Génie desMatériaux\'Master\''),
(100, 'Electromécanique\'Master\''),
(101, 'Maintenance Industrielle\'Master\''),
(102, 'Mécatronique\'Master\''),
(103, 'Génie Industriel\'Master\''),
(104, 'Equipement de l\'habitat\'Master\''),
(105, 'Structures\'Master\''),
(106, 'Géotechnique\'Master\''),
(107, 'Matériaux en Génie Civil\'Master\''),
(108, 'Voies et Ouvrages d\'arts\'Master\''),
(109, 'Economie Internationale \'Licence\''),
(110, 'Economie Monétaire et Bancaire\'Licence\''),
(111, 'Analyse Economique et Prospective\'Licence\''),
(112, 'Economie Quantitatives \'Licence\''),
(113, 'Management\'Licence\''),
(114, 'Management Financier\'Licence\''),
(115, 'Marketing\'Licence\''),
(116, 'Commerce international et logistique1\'Licence\''),
(117, 'Comptabilité et Audit\'Licence\''),
(118, 'Comptabilité et Fiscalité\'Licence\''),
(119, 'Economie Internationale\'Master\''),
(120, 'Economie Monétaire et Bancaire\'Master\''),
(121, 'Analyse Economique et Prospective\'Master\''),
(122, 'Management\'Master\''),
(123, 'Management Financier\'Master\''),
(124, 'Marketing des Services\'Master\''),
(125, 'Finance et commerce international\'Master\''),
(126, 'Marketing hôtelier et touristique  \'Master\''),
(127, 'Comptabilité et Audit\'Master\''),
(128, 'Comptabilité et Fiscalité Approfondie\'Master\''),
(129, 'Physique fondamentale\'Licence\''),
(130, 'Physique énergétique\'Licence\''),
(131, 'Chimie fondamentale\'Licence\''),
(132, 'Chimie analytique \'Licence\''),
(133, 'Mathématiques\'Licence\''),
(134, 'Systèmes informatiques\'Licence\''),
(135, 'Ingénierie des systèmes d’information et du logiciel\'Licence\''),
(136, 'Sol et Eau\'Licence\''),
(137, 'Production Végétale\'Licence\''),
(138, 'Amélioration de la production animale\'Licence\''),
(139, 'Agro Ecologie\'Licence\''),
(140, 'Ecologie et Environnement\'Licence\''),
(141, 'Biochimie\'Licence\''),
(142, 'Microbiologie\'licence\''),
(143, 'Technologie Agroalimentaire et contrôle de qualité\'Licence\''),
(144, 'Biologie et Ecologie des milieux Aquatiques\'Licence\''),
(145, 'Physique des matériaux\'Master\''),
(146, 'Physique énergétique et énergies renouvelables\'Master\''),
(147, 'Physique des rayonnements\'Master\''),
(148, 'Chimie des matériaux \'Master\''),
(149, 'Chimie organique\'Master\''),
(150, 'Electrochimie et corrosion\'Master\''),
(151, 'Chimie pharmaceutique \'Master\''),
(152, 'Analyse fonctionnelle appliquée\'Master\''),
(153, 'Commande optimale des systèmes dynamiques\'Master\''),
(154, 'Analyse numériques des équations aux dérivées partielles\'Master\''),
(155, 'Systèmes Informatiques \'Master\''),
(156, 'Génie Logiciel avancé et applications \'Master\''),
(157, 'Réseaux et systèmes distribués \'Master\''),
(158, 'Systèmes d’information avancés et applications \'Master\''),
(159, 'Intelligence Artificielle \'Master\''),
(160, 'Biologie et Ecologie des milieux Aquatiques\'Master\''),
(161, 'Aménagement hydro-agricole\'Master\''),
(162, 'Science du sol\'Master\''),
(163, 'Systèmes de production agro-écologi\'Master\''),
(164, 'Protection des écosystèmes\'Master\''),
(165, 'Ecologie des milieux naturels\'Master\''),
(166, 'Biochimie appliquée\'Master\''),
(167, 'Microbiologie appliquée\'Master\''),
(168, 'علم  السموم البيئية الحيوانية\'Master\''),
(169, 'Ecotoxicologue animale\'Master\''),
(170, 'Electronique(Licence) '),
(171, 'Télécommunication(Licence) '),
(173, 'Génie Biomédical(Licence)'),
(174, 'Electronique des systèmes embarqués(Master)'),
(175, 'Réseaux et télécommunication(Master)'),
(176, 'Instrumentation biomédicale(Master)'),
(177, 'Électrotechnique(Licence)'),
(178, 'Énergies Renouvelables(Licence)'),
(179, 'Machines électriques(Master)'),
(180, 'Commandes électriques(Master)\r\n'),
(181, 'Réseaux électriques(Master)'),
(182, 'Master Électrotechnique Industrielle(Master)\r\n'),
(183, 'Master Énergies Renouvelables(Master)'),
(184, 'Licence Automatique(Licence)\r\n\r\n'),
(185, 'Électromécanique(Licence)'),
(186, 'Électromécanique'),
(187, 'Master Automatique et informatique industrielle\r\n'),
(188, 'Énergétique(Licence)'),
(189, 'Construction mécanique(Licence)'),
(190, 'Mécanique Aéronautique et Aviation Légère(Licence)'),
(191, 'Ingénieurie des matériaux(Licence)'),
(192, 'Propulsion navale et hydrodynamique (national)(Licence)\r\n'),
(193, 'Architecture et construction navales(National)(Licence)'),
(194, 'Métallurgie(régionale)(Licence)\r\n'),
(195, 'Valorisation des ressources minérales(Licence)'),
(196, 'Énergétique(Master)'),
(197, 'Construction mécanique(Master)'),
(198, 'Fabrication mécanique et de production(Master)'),
(199, 'Installations énergétiques et turbomachines(Master)'),
(200, 'Ingénierie et technologie des matériaux(Master)'),
(201, 'Construction et réparation navales(Master)\r\n'),
(202, 'Architecture navale(Master)'),
(203, 'Ingénierie des systèmes de propulsion(Master)'),
(204, 'Master en Mines et Métallurgie(Master)\r\n'),
(205, 'Valorisation des ressources minérales(Master)'),
(206, 'Génie métallurgique(Master)'),
(207, 'Technologie des pipelines (Master professionnel)(Master)'),
(208, 'Métallurgie(Licence)'),
(209, 'Génie Minier(Licence)'),
(210, 'Valorisation des Ressources Minérales(Licence)'),
(211, 'Spécialité Génie Métallurgique(Master)\r\n\r\n'),
(212, 'Spécialité Technologie des Pipelines (Formation professionnelle)(Master)\r\n'),
(213, 'Valorisation des Ressources Minérales (Master)'),
(214, 'Mathématiques(Licence)\r\n'),
(215, 'Mathématique Appliquée(Licence)'),
(216, 'Analyse Mathématique et applications(Master)'),
(217, ' Systèmes informatiques (SI) (Licence)\r\n'),
(218, 'Ingénierie des Systèmes d’Information et du Logiciel (ISIL) (Licence)'),
(219, 'Intelligence Artificielle et ses Applications (I A A) (Master)\r\n'),
(220, 'Réseaux et Systèmes Informatiques Distribués (RSID) (Master)'),
(221, 'Systèmes d’Information et Données SID (Master)'),
(222, 'LICENCE MITA'),
(223, 'LICENCE  MUP'),
(224, 'MASTER MRI'),
(225, 'LICENCE  Institut d\'éducation physique et des sports\r\n		\r\n'),
(226, 'MASTER Institut d\'éducation physique et des sports'),
(227, 'Master académique sciences du langage\r\n'),
(228, 'Master  professionnalisant Langues de Spécialité et Communication'),
(229, 'Master académique sciences du langage'),
(230, 'Master académique Littérature et Civilisation\r\n\r\n'),
(231, 'Master académique Linguistique et Langues appliquées \r\n'),
(232, 'Master professionnalisant  English for Specific and Specialized Discourses'),
(233, 'Master académique Littérature et Civilisation\r\n'),
(234, 'Master académique Didactique et Langues appliquées '),
(235, 'Master académique Langue et Culture\r\n'),
(236, 'Master académique Sciences du Langage \r\n'),
(237, 'Master professionnalisant  Formation des formateurs de langue française\r\n'),
(238, 'maintenance en électromécanique(Licence)'),
(239, 'maintenance en instrumentation(Licence)'),
(240, 'Sécurité Industrielle(Licence)'),
(241, 'EGE(Master)'),
(242, 'EMB(Master)'),
(243, 'EI(Master)'),
(244, 'AEP(Master)'),
(245, 'EUE(Master)'),
(246, 'Géologie Fondamentale et Appliquée'),
(247, 'Géologie Appliquée'),
(248, 'Géologie Fondamentale'),
(249, 'Géologie'),
(250, 'Risques naturelles liés aux risques géologiques'),
(251, 'Cartographie'),
(252, 'CARTOGRAPHIE'),
(253, 'Jurisprudence du Statut personnel Comparée(Master)'),
(254, 'Jurisprudence( Fiqh ) Comparée et ses fondements (Master)'),
(255, 'Jurisprudence ( Charia ) et Droit (Master)'),
(256, 'Jurisprudence et ses fondements (Fiqh et Oussoul)(Licence)'),
(257, 'Jurisprudence (Chari\' a) et Droit(Licence)\r\n'),
(258, 'Sciences Islamiques – charia (Licence)'),
(259, 'Comparaison des Religions(Master)'),
(260, ' Foi Islamique(Master)'),
(261, 'Tradition(hadith) et ses Sciences(Master)'),
(262, 'L’Exégèse et Sciences du Coran(Master)'),
(263, 'Saint coran et tradition (el kitab et sounna)(Master)\r\n'),
(264, ' Foi islamique et comparaison des religions(Licence)'),
(265, 'Civilisation Islamique (Master)\r\n'),
(266, 'Inimitabilité ( Iadjaz) du Coran et Etudes Démonstratives(Master) \r\n'),
(267, 'Langue Arabe et Etudes Coraniques(Master)'),
(268, 'Histoire et Civilisation Islamique(Licence)'),
(269, 'LANGUE ARABE ET ETUDES CORANIQUES(Licence)'),
(270, 'Sciences Islamiques - Langue Arabe et Civilisation Islamique(Licence)'),
(271, 'Pharmacien d\'officine.\r\n\r\n'),
(272, 'Pharmacien chargé de la dispensation à domicile des gaz à usage médical.\r\n'),
(273, 'Pharmacien de l\'industrie.\r\n\r\n'),
(274, 'Pharmacien de la distribution en gros.\r\n'),
(275, 'Pharmacien biologiste médical.\r\n'),
(276, 'Pharmacien en établissement de santé'),
(277, 'anesthésiologie'),
(278, 'cardiologie'),
(279, 'dermatologie'),
(280, 'endocrinologie'),
(281, 'gastro-entérologie'),
(282, 'génétique médicale'),
(283, 'gériatrie'),
(284, 'hématologie'),
(285, 'immunologie clinique et allergie'),
(286, 'médecine interne'),
(287, 'médecine d\'urgence'),
(288, 'néphrologie'),
(289, 'neurologie'),
(290, 'oncologie médicale'),
(291, 'pédiatrie'),
(292, 'physiatrie'),
(293, 'pneumologie'),
(294, 'psychiatrie'),
(295, 'rhumatologie');

-- --------------------------------------------------------

--
-- Structure de la table `université`
--

CREATE TABLE `université` (
  `Id_Univ` int(11) NOT NULL,
  `Nom_Univ` varchar(60) NOT NULL,
  `Logo_Univ` varchar(50) NOT NULL,
  `Email_Univ` varchar(60) NOT NULL,
  `Adresse_Univ` varchar(60) NOT NULL,
  `Fax_Univ` varchar(20) NOT NULL,
  `Id_Wilay` int(11) NOT NULL,
  `Id_Cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `université`
--

INSERT INTO `université` (`Id_Univ`, `Nom_Univ`, `Logo_Univ`, `Email_Univ`, `Adresse_Univ`, `Fax_Univ`, `Id_Wilay`, `Id_Cat`) VALUES
(1, 'Université Badji-Mokhtar Annaba', 'annaba.png', 'contact@univ-annaba.dz', 'contact@univ-annaba.dz', '+213 38 45 53 65', 23, 1),
(2, 'Université d’Alger 1 Benyoucef-Benkhedda', 'alg1.png', 'contact@univ_alger.dz', '02 rue Didouche Mourad, Algérie', '021-63-77-65', 16, 1),
(3, 'Université d\'Alger 2 Abou el Kacem Saâd Allah', 'alg2.png', 'contact@univ-alger2.dz', '02 Djamel Eddine el afghani, Bouzareah, Alger, Algérie', '+213 (0)23 18 01 07', 16, 1),
(4, 'Université d’Alger 3 – Ibrahim Sultan Chibout –', 'alg3.png', 'vr.relex@univ-alger3.dz', '02 Rue Ahmed Ouaked, Dely Ibrahim', '021 91 04 54', 16, 1),
(5, ' Université Blida 2 Ali Lounici,\\', 'logo blida.jpeg', 'univ-blida2.dz', ' Université Blida 2 Ali Lounici, route d\'El Afroun, Blida, A', '+ 213 25 25 00 09', 9, 1),
(6, 'Saad Dahlab University - Blida1 (SDUB)', 'blida1.jpeg', '', 'GV3G+W95, Ouled Yaïchg', '', 9, 1),
(7, 'École Supérieure Des Sciences De Gestion', 'ecole annaba.png', 'Secret.Direction@Essg-Annaba.Dz', 'WQ26+W2H, Rue Zighout Youcef, Annaba', '038452430', 23, 3),
(8, 'Université 20 Août 1955 Skikda', '20skik.jpeg', ' rectorat@univ-skikda.dz', 'B.P.26 route d’El-Hadaiek Skikda 21000 Algeria, Skikda', '+213 038.72.31.47', 21, 1),
(9, 'Université Constantine 3 Salah Boubnider ', 'cons3.jpg', ' imen.bendjemila@univ-constantine3.dz', 'Cité universitaire nouvelle ville Ali Mendjeli – Constantine', '031-78-60-90', 25, 1),
(10, 'École normal supérieure de Skikda D\'Enseignement Technologiq', 'ecoul10.jpeg', '', 'École nationale supérieure des forêts – Khenchela', 'École nationale supé', 21, 4),
(11, 'Université Constantine 2 Abdelhamid Mehri', 'cons2.jpeg', 'rectorat@univ-constantine2.dz', 'Nouvelle ville Ali Mendjeli – BP : 67A,  Constantine – Algér', '031775027', 25, 1),
(12, 'Université Frères Mentouri - Constantine 1', 'cons1.jpeg', 'vice-rect-relex@umc.edu.dz', 'BP, 325 Route de Ain El Bey, Constantine, Algérie, 25017', '+213 (0) 31 81 87 26', 25, 1),
(13, 'Université des Sciences et de la Technologie d\'Oran Mohamed-', 'oran.jpeg', 'mebrouk.hamane@univ-usto.dz ', ':  BP 1505, Bir El Djir 31000, Oran, Algérie', '+213 041-62-71-44', 31, 1),
(14, 'Université d\'Oran 2 Mohamed Ben Ahmed', 'oran 2.jpeg', 'info@univ-oran2.dz', 'B.P 1015 El M\'naouer 31000 Oran , Algérie', '+213 (0) 41 64 81 37', 31, 1),
(15, 'Université Abdelhamid Ben Badis, Mostaganem (UMAB)', '15.png', 'fsnv@univ-mosta.dz', 'Route Nationale N°11, Kharrouba, Mostaganem 27000', '18 11 42 045', 27, 1),
(16, 'Université Aboubekr Belkaid de Tlemcen', 'tlemcen.png', 'crsic@univ-tlemcen.dz', '22, Rue Abi Ayed Abdelkrim Fg Pasteur B.P 119, 13000 Tlemcen', '043.41.00.34', 13, 1),
(17, 'Université Ammar Teleji - Laghouat (ATUL)', 'laghouat.png', 'webadmin@lagh-univ.dz', '37G Route de Ghardaia–Laghouat, 03000 Laghouat', '+213 029145442', 3, 1),
(18, 'Ecole Supérieure en Sciences Appliquées de Tlemcen', '', '', 'BP 165 RP Bel Horizon ,13000 Tlemcen, Algerie', '+213 (0) 43 41 55 41', 13, 2);

-- --------------------------------------------------------

--
-- Structure de la table `wilaya`
--

CREATE TABLE `wilaya` (
  `Id_Wilaya` int(2) NOT NULL,
  `Nom_Wilaya` varchar(11) NOT NULL,
  `Région_Wilaya` varchar(30) NOT NULL,
  `Code_postale_Wilaya` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `wilaya`
--

INSERT INTO `wilaya` (`Id_Wilaya`, `Nom_Wilaya`, `Région_Wilaya`, `Code_postale_Wilaya`) VALUES
(3, 'Laghouat', 'Centr', '3000'),
(9, 'Blida', 'Centre', '09000'),
(13, 'Tlemcen', 'Ouest', '13000'),
(16, 'Alger', 'Centre', '16000'),
(21, 'Skikda', 'Est', '21000'),
(23, 'Annaba', 'Est', '23000'),
(25, 'Constantine', 'Est', '25000'),
(27, 'Mostaganem', 'Ouest', '27000'),
(31, 'Oran', 'Ouest', '31000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `catégorie`
--
ALTER TABLE `catégorie`
  ADD PRIMARY KEY (`Id_Cat`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`Id_Demande`);

--
-- Index pour la table `demande_dèpartement`
--
ALTER TABLE `demande_dèpartement`
  ADD PRIMARY KEY (`Id_Demande`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD UNIQUE KEY `Id_Dep` (`Id_Dep`),
  ADD UNIQUE KEY `Id_Dep_3` (`Id_Dep`),
  ADD UNIQUE KEY `Id_Dep_4` (`Id_Dep`),
  ADD KEY `Id_fac` (`Id_fac`),
  ADD KEY `Id_Dep_2` (`Id_Dep`),
  ADD KEY `Id_Dep_5` (`Id_Dep`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`Id_Ens`);

--
-- Index pour la table `enseignant_dèpartement`
--
ALTER TABLE `enseignant_dèpartement`
  ADD PRIMARY KEY (`Id_Ens`);

--
-- Index pour la table `faculté`
--
ALTER TABLE `faculté`
  ADD PRIMARY KEY (`Id_Fac`),
  ADD KEY `Id_Univ` (`Id_Univ`);

--
-- Index pour la table `satisfait`
--
ALTER TABLE `satisfait`
  ADD PRIMARY KEY (`Id_Demande`);

--
-- Index pour la table `spécialité`
--
ALTER TABLE `spécialité`
  ADD PRIMARY KEY (`Id_Spés`);

--
-- Index pour la table `université`
--
ALTER TABLE `université`
  ADD PRIMARY KEY (`Id_Univ`),
  ADD KEY `Id_Wilay` (`Id_Wilay`,`Id_Cat`);

--
-- Index pour la table `wilaya`
--
ALTER TABLE `wilaya`
  ADD PRIMARY KEY (`Id_Wilaya`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `catégorie`
--
ALTER TABLE `catégorie`
  MODIFY `Id_Cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `Id_Demande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `demande_dèpartement`
--
ALTER TABLE `demande_dèpartement`
  MODIFY `Id_Demande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `Id_Dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=412;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `Id_Ens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `faculté`
--
ALTER TABLE `faculté`
  MODIFY `Id_Fac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT pour la table `satisfait`
--
ALTER TABLE `satisfait`
  MODIFY `Id_Demande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `spécialité`
--
ALTER TABLE `spécialité`
  MODIFY `Id_Spés` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT pour la table `université`
--
ALTER TABLE `université`
  MODIFY `Id_Univ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `wilaya`
--
ALTER TABLE `wilaya`
  MODIFY `Id_Wilaya` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
