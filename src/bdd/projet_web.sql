-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2020 at 02:12 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `capacites`
--

CREATE TABLE `capacites` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `puissance` int(11) NOT NULL,
  `endurance` int(11) NOT NULL,
  `priorite` int(11) NOT NULL,
  `synergie` varchar(10) NOT NULL,
  `attente` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `capacites`
--

INSERT INTO `capacites` (`id`, `nom`, `type`, `categorie`, `puissance`, `endurance`, `priorite`, `synergie`, `attente`, `description`) VALUES
(1, 'Hurlement strident', 'Neutre', 'Attaque spéciale', 42, 12, 2, '', 1, 'Souvent utilisée par les professeurs de l\'Accademia, cette attaque Neutre fait crisser les dents de toute la classe... euh, l\'équipe.\r\n'),
(2, 'Grêle tranchante', 'Eau', 'Attaque spéciale', 130, 20, 2, '', 2, 'Un peu comme de la neige, enfin, si la neige était tranchante comme des lames de rasoir, aux lieu de doux flocons.\r\n'),
(3, 'Mauvaise humeur', 'Mental', 'Attaque de statut', 0, 12, 1, '', 2, 'Ce regard du genre \"ne plaisante pas avec moi\" rend le Temtem impossible à cibler pour le prochain tour.\r\n'),
(4, 'Urushiol', 'Toxic', 'Attaque physique', 41, 8, 2, 'Toxic', 0, 'La substance connue sous le nom d\'Urushiol est un agent toxique virulent.\r\n'),
(5, 'Inondation', 'Eau', 'Attaque de statut', 0, 22, 2, 'Terre', 1, '\"Regardez l’adversaire s’embourber. Diminue la vitesse de toute l’équipe ennemie de 1.\"\r\n'),
(6, 'Antitoxines', 'Toxic', 'Attaque de statut', 0, 26, 2, '', 2, 'À compléter...\r\n'),
(7, 'Claque-nageoire', 'Neutre', 'Attaque physique', 32, 4, 3, '', 0, 'Aussi appelé \"claque de sirène\". Fait plus de mal à votre fierté qu’autre chose.\r\n'),
(8, 'Aqua-lame', 'Eau', 'Attaque spéciale', 52, 10, 1, '', 0, 'Tranche l’eau de la mer, comme l’orage de Sillaro qui fracasse les falaises.\r\n'),
(9, 'Griffes venimeuses', 'Toxic', 'Attaque physique', 40, 9, 2, '', 0, 'Quand le regard de vos griffes n’empêche pas le combat, le poison le termine.'),
(10, 'Poignée de sable', 'Terre', 'Attaque physique', 35, 7, 2, '', 0, 'Une modeste poignée de sable dans le visage.\r\n'),
(11, 'Encouragement', 'Neutre', 'Attaque de statut', 0, 7, 3, '', 0, 'Évacue les esprits de la cible et réduit sa Priorité de 1.\r\n'),
(12, 'Aqua-mitraille', 'Eau', 'Attaque spéciale', 67, 17, 2, '', 0, 'À compléter...\r\n'),
(13, 'Tsunami', 'Eau', 'Attaque spéciale', 70, 25, 2, 'Vent', 1, 'Invoque un raz de marée incroyable qui endommage toute l\'équipe.\r\n'),
(14, 'Colère contenue', 'Neutre', 'Attaque physique', 130, 12, 1, '', 3, 'Toute colère accumulée... ressort dans une explosion de rage.\r\n'),
(15, 'Boule puante', 'Toxic', 'Attaque physique', 100, 20, 2, '', 0, 'Cette puanteur inflige des dommages toxiques... Il suffit de ne pas l’utiliser dans l’ascenseur...'),
(16, 'Jeu de jambes', 'Mêlée', 'Attaque de statut', 0, 15, 3, '', 1, 'Augmente la Vitesse de 2 niveaux.\r\n'),
(17, 'Taillade ciblée', 'Neutre', 'Attaque physique', 150, 33, 2, '', 1, 'Ce coup vise le point faible de l’ennemi pour des dégâts massifs.'),
(18, 'Amocher', 'Neutre', 'Attaque spéciale', 50, 22, 2, '', 2, 'À compléter...\r\n'),
(19, 'Croc venimeux', 'Toxic', 'Attaque physique', 62, 12, 2, '', 1, 'À compléter...\r\n'),
(20, 'Venin paralysant', 'Toxic', 'Attaque de statut', 0, 20, 2, 'Toxic', 2, 'À compléter...\r\n'),
(21, 'Tourbillon aquatique', 'Eau', 'Attaque spéciale', 130, 29, 3, '', 1, 'À compléter...\r\n'),
(22, 'Turbo-chorégraphie', 'Vent', 'Attaque de statut', 0, 27, 3, 'Vent', 1, 'La danse ancestrale de Deniz est un puissant rituel qui confère le Vitesse +1 à l’ensemble de l’équipe.\r\n'),
(23, 'Hypoxie', 'Vent', 'Attaque spéciale', 120, 30, 2, '', 0, 'Regardez vos ennemis s’étouffer quand vous vous retournez et... prenez leur souffle.'),
(24, 'Debout là-dedans !', 'Neutre', 'Attaque physique', 1, 0, 3, '', 0, 'Debout et sens-moi ce café ! Inflige un minimum de dégâts mais réveille instantanément la cible.\r\n'),
(25, 'Sporulation', 'Nature', 'Attaque spéciale', 37, 6, 2, '', 0, 'À compléter...\r\n'),
(26, 'Retenue', 'Neutre', 'Attaque de statut', 0, 4, 3, '', 0, 'Certains Temtem sont naturellement introvertis et restent entre eux. Défense +1.\r\n'),
(27, 'Attendrissement', 'Neutre', 'Attaque de statut', 0, 3, 2, '', 0, 'Vraiment ? Vous allez attaquer quelque chose d\'aussi mignon *lui* ? Vous méritez une Attaque -1.'),
(28, 'Spore toxiques', 'Toxic', 'Attaque de statut', 0, 9, 1, '', 0, 'Des spores toxiques qui inoculent du poison pendant 3 tours.\r\n'),
(29, 'Souplesse', 'Vent', 'Attaque de statut', 0, 4, 1, '', 0, 'Grâce à un entraînement rigoureux, un Temtem peut devenir extrêmement rapide (Vitesse +1).\r\n'),
(30, 'Photosynthèse', 'Nature', 'Attaque de statut', 0, 7, 2, '', 0, 'Les Temtem Nature utilise de façon unique la lumière du soleil pour se nourrir. (Régénère 50% de Stamina).\r\n'),
(31, 'Bouclier d\'écorce', 'Nature', 'Attaque de statut', 0, 30, 1, '', 2, 'Les Temtem d\'Ominesie utilisent des écorces de Banyan comme bouclier. Augmente la DEF de 2.\r\n'),
(32, 'Sporiose', 'Nature', 'Attaque spéciale', 58, 18, 2, '', 1, 'À compléter...\r\n'),
(33, 'Aero-lame', 'Vent', 'Attaque spéciale', 40, 9, 2, '', 0, 'Des coups de vent, comme la tramontane gelée soufflant sur Loch.\r\n'),
(34, 'Blizzard', 'Vent', 'Attaque spéciale', 120, 15, 1, '', 1, 'Froid et violent, comme le mistral dans les falaises de Thalassian.\r\n'),
(35, 'Esprit ancien', 'Mêlée', 'Attaque spéciale', 170, 23, 2, '', 2, 'Il est dit que cette attaque canalise l\'esprit d\'une variété de Temtem draconique disparue depuis fort longtemps. Inflige des dégâts énormes.\r\n'),
(36, 'Direct ciblé', 'Mêlée', 'Attaque physique', 40, 15, 2, '', 0, 'Frappez plus intelligemment, pas plus fort. Faible, mais diminue la DEF de 1.'),
(37, 'Cage', 'Neutre', 'Attaque de statut', 0, 16, 3, '', 1, 'Tous les Temtem en combat sont piégés pendant 2 tours.'),
(38, 'Appropriation', 'Neutre', 'Attaque de statut', 0, 7, 2, '', 0, 'La cible est privée d\'objet pendant 3 tours.'),
(40, 'Griffer', 'Neutre', 'Attaque physique', 20, 4, 2, '', 0, 'Presque n\'importe quelle griffe ou ongle peut abîmer une surface. Et c\'est parfois suffisant.\r\n'),
(41, 'Grignote', 'Neutre', 'Attaque physique', 37, 7, 2, '', 0, 'Beaucoup de Temtem ont l\'habitude de mâchouiller des plantes ou des meubles. Mais cette fois, c\'est moins délicatement.\r\n'),
(42, 'Grosse patate', 'Neutre', 'Attaque physique', 58, 11, 2, '', 0, 'Efficace et peu subtile, comme un exercice de déminage d\'un Tucmani.\r\n'),
(43, 'Rage', 'Mêlée', 'Attaque de statut', 0, 10, 2, '', 1, 'La brume rouge rend un Temtem brutal (ATK +2) mais aussi négligent (DEF -2).'),
(44, 'Griffe féroce', 'Neutre', 'Attaque physique', 71, 13, 2, '', 0, 'Brusque comme un Temtem indomptable et imparable comme une bourrasque de Kisiwan.\r\n'),
(45, 'Berceuse', 'Mental', 'Attaque de statut', 0, 27, 1, '', 2, 'À compléter...\r\n'),
(46, 'Boule de granit', 'Terre', 'Attaque physique', 130, 29, 1, 'Feu', 0, 'Le fléau de l’exploration des archéologues, c’est une technique puissante de la Terre.'),
(47, 'Sacrifice', 'Neutre', 'Attaque de statut', 0, 0, 3, '', 1, 'À compléter...\r\n'),
(60, 'Baffounette', 'Neutre', 'Attaque physique', 90, 20, 2, '', 0, 'Blesser l\'ego est parfois plus douloureux qu\'un vilain bobo. Sachez-le. La cible perd 1 de Défense.'),
(61, 'Frappe hypercinétique', 'Vent', 'Attaque spéciale', 59, 28, 3, '', 1, 'À compléter...\r\n'),
(62, 'Picoti', 'Neutre', 'Attaque physique', 24, 5, 3, '', 0, 'Tous les Temtems avec un bec aiment picorer leurs dompteurs avec amusement. Ceci est la version moins conviviale.\r\n'),
(63, 'Regard noir', 'Mental', 'Attaque de statut', 0, 4, 2, '', 0, 'Le regard intimidant de ce Temtem rend ses rivaux plus vulnérables (Défense -1).\r\n'),
(64, 'Rafale de plumes', 'Vent', 'Attaque physique', 100, 17, 2, '', 0, '\"Même la plume la plus douce devient puissante lorsqu\'elle est utilisée à bon escient.\" - Proverbe Miyako.\r\n'),
(65, 'Tornade', 'Vent', 'Attaque spéciale', 145, 30, 3, '', 1, 'Une puissante technique Vent, illégale d\'utiliser près des stations de dirigeables de l\'Archipelago.\r\n'),
(66, 'Bourrasque', 'Vent', 'Attaque spéciale', 90, 12, 2, '', 0, 'Un terrifiant coup de vent, capable de faire dévier un petit dirigeable.\r\n'),
(67, 'Vortex de poussière', 'Terre', 'Attaque spéciale', 131, 24, 2, '', 1, 'Cette technique buffets l’ennemi avec la fureur de la plus féroce tempête de sable de Kisiwan.'),
(68, 'Morsure cristalline', 'Cristal', 'Attaque physique', 130, 22, 2, '', 1, 'À compléter...\r\n'),
(69, 'Poudre cristal', 'Cristal', 'Attaque spéciale', 60, 11, 3, 'Vent', 0, 'Une version miniature de la \"pluie d\'étoiles\" qui aurait engendré l\'Archipelago.\r\n'),
(70, 'Bain de boue', 'Terre', 'Attaque spéciale', 70, 14, 2, '', 0, 'À compléter...\r\n'),
(71, 'Coup de boule', 'Neutre', 'Attaque physique', 100, 17, 1, '', 0, 'Utilise sa tête, non mais vraiment.\r\n'),
(72, 'Onde sismique', 'Terre', 'Attaque physique', 90, 28, 1, '', 2, 'Sentez la Terre trembler sous vos pieds, s’élevant avec une force semblable à celle d’Anak - lente, mais dévastatrice pour toute l’équipe.'),
(77, 'Nénuphar cruel', 'Nature', 'Attaque physique', 120, 31, 3, 'Eau', 0, 'Aussi jolie (mais beaucoup plus meurtrière) que les nénuphars Denizen.\r\n'),
(78, 'Relaxation', 'Neutre', 'Attaque de statut', 0, 12, 1, '', 1, 'Tout le monde obtient le statut Sommeil pendant 2 tours.\r\n'),
(79, 'Feuille coupante', 'Nature', 'Attaque physique', 50, 7, 2, '', 0, 'L\'Évolution a doté les Temtem Nature de défenses avancées contre les herbivores.\r\n'),
(80, 'Gaïa', 'Nature', 'Attaque de statut', 0, 15, 0, '', 3, 'À compléter...\r\n'),
(81, 'Vrille-fouet', 'Nature', 'Attaque physique', 146, 28, 1, '', 1, 'À compléter...\r\n'),
(82, 'Mur de pierre', 'Terre', 'Attaque de statut', 0, 18, 1, '', 1, 'La meilleure façon de bloquer un Temtem, en attribuant Défense +2, Défense Spéciale +1.\r\n'),
(83, 'Verre-lame', 'Cristal', 'Attaque physique', 32, 5, 2, '', 0, 'Comme la mort par mille coupures... mais celle-ci n’en est qu’une.'),
(84, 'Carapace-miroir', 'Cristal', 'Attaque de statut', 0, 15, 1, '', 1, '\"Miroir, miroir, dit-moi qui veut +2 en Défense Spéciale ?\"'),
(85, 'Eperons de cristal', 'Cristal', 'Attaque spéciale', 120, 27, 3, '', 0, 'Cet effet tectonique analogique nana-anak provoque l’extrusion des éclats de cristal du sol et cause des dommages.'),
(86, 'Déchaînement', 'Neutre', 'Attaque physique', 65, 26, 1, 'Mêlée', 1, 'Le Temtem est peut-être mignon... mais quand il se déchaîne, il inflige des dégâts à toute l’équipe.'),
(87, 'Cristallisation', 'Cristal', 'Attaque de statut', 0, 18, 2, '', 1, 'Inspiré par les ruines de la Tarentaise Améthyste, cette croûte de cristal rajoute Défense +2 mais Vitesse -1\r\n'),
(88, 'Forteresse de diamant', 'Cristal', 'Attaque de statut', 0, 16, 3, '', 2, 'Plus résistant que le plus dur des Temtem de Cristal. Augmente votre Défense et Défense Spéciale de 2 niveaux.\r\n'),
(89, 'Misogi', 'Eau', 'Attaque de statut', 0, 22, 2, 'Eau', 0, 'Les moines de Miyako ont développé cette technique pour éliminer les statuts altérés de toute l\'équipe.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `capacites_temtem`
--

CREATE TABLE `capacites_temtem` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_temtem` varchar(20) NOT NULL,
  `nom_capacite` varchar(40) NOT NULL,
  `methode` varchar(20) DEFAULT NULL,
  `niveau` int(3) DEFAULT NULL,
  `numero_temtem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `capacites_temtem`
--

INSERT INTO `capacites_temtem` (`id`, `nom_temtem`, `nom_capacite`, `methode`, `niveau`, `numero_temtem`) VALUES
(1, 'Platypet', 'Hurlement strident', 'Oeuf', NULL, 7),
(2, 'Platypet', 'Grêle tranchante', 'Oeuf', NULL, 7),
(3, 'Platypet', 'Mauvaise humeur', 'Oeuf', NULL, 7),
(4, 'Platypet', 'Urushiol', 'Oeuf', NULL, 7),
(5, 'Platypet', 'Inondation', 'Oeuf', NULL, 7),
(6, 'Platypet', 'Antitoxines', 'Oeuf', NULL, 7),
(7, 'Platypet', 'Claque-nageoire', 'Niveau', 1, 7),
(8, 'Platypet', 'Aqua-lame', 'Niveau', 3, 7),
(9, 'Platypet', 'Griffes venimeuses', 'Niveau', 4, 7),
(10, 'Platypet', 'Poignée de sable', 'Niveau', 7, 7),
(11, 'Platypet', 'Encouragement', 'Niveau', 9, 7),
(12, 'Platypet', 'Aqua-mitraille', 'Niveau', 14, 7),
(13, 'Platypet', 'Tsunami', 'Niveau', 18, 7),
(14, 'Platox', 'Colère contenue', 'Cours', NULL, 8),
(15, 'Platox', 'Hurlement strident', 'Oeuf', NULL, 8),
(16, 'Platox', 'Grêle tranchante', 'Oeuf', NULL, 8),
(17, 'Platox', 'Misogi', 'Cours', NULL, 8),
(18, 'Platox', 'Mauvaise humeur', 'Oeuf', NULL, 8),
(19, 'Platox', 'Urushiol', 'Oeuf', NULL, 8),
(20, 'Platox', 'Boule puante', 'Cours', NULL, 8),
(21, 'Platox', 'Inondation', 'Oeuf', NULL, 8),
(22, 'Platox', 'Antitoxines', 'Oeuf', NULL, 8),
(23, 'Platox', 'Jeu de jambes', 'Cours', NULL, 8),
(24, 'Platox', 'Taillade ciblée', 'Cours', NULL, 8),
(25, 'Platox', 'Amocher', 'Cours', NULL, 8),
(26, 'Platox', 'Claque-nageoire', 'Pré-Evo', NULL, 8),
(27, 'Platox', 'Aqua-lame', 'Pré-Evo', NULL, 8),
(28, 'Platox', 'Tsunami', 'Pré-Evo', NULL, 8),
(29, 'Platox', 'Poignée de sable', 'Pré-Evo', NULL, 8),
(30, 'Platox', 'Griffes venimeuses', 'Pré-Evo', NULL, 8),
(31, 'Platox', 'Encouragement', 'Pré-Evo', NULL, 8),
(32, 'Platox', 'Aqua-mitraille', 'Pré-Evo', NULL, 8),
(33, 'Platox', 'Croc venimeux', 'Niveau', 24, 8),
(34, 'Platox', 'Venin paralysant', 'Niveau', 36, 8),
(35, 'Platimous', 'Colère contenue', 'Cours', NULL, 9),
(36, 'Platimous', 'Hurlement strident', 'Oeuf', NULL, 9),
(37, 'Platimous', 'Grêle tranchante', 'Oeuf', NULL, 9),
(38, 'Platimous', 'Misogi', 'Cours', NULL, 9),
(39, 'Platimous', 'Mauvaise humeur', 'Oeuf', NULL, 9),
(40, 'Platimous', 'Urushiol', 'Oeuf', NULL, 9),
(41, 'Platimous', 'Boule puante', 'Cours', NULL, 9),
(42, 'Platimous', 'Inondation', 'Oeuf', NULL, 9),
(43, 'Platimous', 'Antitoxines', 'Oeuf', NULL, 9),
(44, 'Platimous', 'Jeu de jambes', 'Cours', NULL, 9),
(45, 'Platimous', 'Taillade ciblée', 'Cours', NULL, 9),
(46, 'Platimous', 'Amocher', 'Cours', NULL, 9),
(47, 'Platimous', 'Claque-nageoire', 'Pré-evo', NULL, 9),
(48, 'Platimous', 'Aqua-lame', 'Pré-Evo', NULL, 9),
(49, 'Platimous', 'Tsunami', 'Pré-Evo', NULL, 9),
(50, 'Platimous', 'Poignée de sable', 'Pré-Evo', NULL, 9),
(51, 'Platimous', 'Griffes venimeuses', 'Pré-Evo', NULL, 9),
(52, 'Platimous', 'Encouragement', 'Pré-Evo', NULL, 9),
(53, 'Platimous', 'Aqua-mitraille', 'Pré-Evo', NULL, 9),
(54, 'Platimous', 'Venin paralysant', 'Pré-Evo', NULL, 9),
(55, 'Platimous', 'Croc venimeux', 'Pré-Evo', NULL, 9),
(56, 'Platimous', 'Tourbillon aquatique', 'Niveau', 48, 9),
(57, 'Swali', 'Misogi', 'Cours', NULL, 10),
(58, 'Swali', 'Turbo-chorégraphie', 'Cours', NULL, 10),
(59, 'Swali', 'Hypoxie', 'Oeuf', NULL, 10),
(60, 'Swali', 'Debout là-dedans !', 'Cours', NULL, 10),
(61, 'Swali', 'Sporulation', 'Oeuf', NULL, 10),
(62, 'Swali', 'Retenue', 'Niveau', 1, 10),
(63, 'Swali', 'Attendrissement', 'Niveau', 2, 10),
(64, 'Swali', 'Urushiol', 'Niveau', 5, 10),
(65, 'Swali', 'Spores toxiques', 'Niveau', 14, 10),
(66, 'Swali', 'Souplesse', 'Niveau', 19, 10),
(67, 'Swali', 'Photosynthèse', 'Niveau', 25, 10),
(68, 'Swali', 'Bouclier d\'écorce', 'Niveau', 35, 10),
(69, 'Swali', 'Sporiose', 'Niveau', 44, 10),
(70, 'Loali', 'Misogi', 'Cours', NULL, 11),
(71, 'Loali', 'Turbo-chorégraphie', 'Cours', NULL, 11),
(72, 'Loali', 'Hypoxie', 'Oeuf', NULL, 11),
(73, 'Loali', 'Debout là-dedans !', 'Cours', NULL, 11),
(74, 'Loali', 'Sporulation', 'Oeuf', NULL, 11),
(75, 'Loali', 'Retenue', 'Pré-Evo', NULL, 11),
(76, 'Loali', 'Attendrissement', 'Pré-Evo', NULL, 11),
(77, 'Loali', 'Photosynthèse', 'Pré-Evo', NULL, 11),
(78, 'Loali', 'Souplesse', 'Pré-Evo', NULL, 11),
(79, 'Loali', 'Spores toxiques', 'Pré-Evo', NULL, 11),
(80, 'Loali', 'Urushiol', 'Pré-Evo', NULL, 11),
(81, 'Loali', 'Sporiose', 'Pré-Evo', NULL, 11),
(82, 'Loali', 'Bouclier d\'écorce', 'Pré-Evo', NULL, 11),
(83, 'Loali', 'Aéro-lame', 'Niveau', 11, 11),
(84, 'Loali', 'Blizzard', 'Niveau', 25, 11),
(85, 'Tateru', 'Colère contenue', 'Oeuf', NULL, 12),
(86, 'Tateru', 'Turbo-chorégraphie', 'Cours', NULL, 12),
(87, 'Tateru', 'Esprit ancien', 'Oeuf', NULL, 12),
(88, 'Tateru', 'Boule puante', 'Cours', NULL, 12),
(89, 'Tateru', 'Debout là-dedans !', 'Cours', NULL, 12),
(90, 'Tateru', 'Direct ciblé', 'Oeuf', NULL, 12),
(91, 'Tateru', 'Cage', 'Cours', NULL, 12),
(92, 'Tateru', 'Appropriation', 'Cours', NULL, 12),
(93, 'Tateru', 'Taillade ciblée', 'Cours', NULL, 12),
(94, 'Tateru', 'Amocher', 'Cours', NULL, 12),
(95, 'Tateru', 'Attendrissement', 'Niveau', 1, 12),
(96, 'Tateru', 'Griffer', 'Niveau', 3, 12),
(97, 'Tateru', 'Grignote', 'Niveau', 6, 12),
(98, 'Tateru', 'Grosse patate', 'Niveau', 10, 12),
(99, 'Tateru', 'Poignée de sable', 'Niveau', 13, 12),
(100, 'Tateru', 'Rage', 'Niveau', 17, 12),
(101, 'Tateru', 'Griffe féroce', 'Niveau', 25, 12),
(102, 'Tateru', 'Berceuse', 'Niveau', 33, 12),
(103, 'Tateru', 'Boule de granit', 'Niveau', 44, 12),
(104, 'Tateru', 'Sacrifice', 'Niveau', 50, 12),
(105, 'Paharo', 'Baffounette', 'Oeuf', NULL, 16),
(106, 'Paharo', 'Misogi', 'Cours', NULL, 16),
(107, 'Paharo', 'Turbo-chorégraphie', 'Cours', NULL, 16),
(108, 'Paharo', 'Debout là-dedans !', 'Cours', NULL, 16),
(109, 'Paharo', 'Frappe hypercinétique', 'Oeuf', NULL, 16),
(110, 'Paharo', 'Picoti', 'Niveau', 1, 16),
(111, 'Paharo', 'Regard noir', 'Niveau', 2, 16),
(112, 'Paharo', 'Hypnose', 'Niveau', 5, 16),
(113, 'Paharo', 'Aéro-lame', 'Niveau', 7, 16),
(114, 'Paharo', 'Bourrasque', 'Niveau', 10, 16),
(115, 'Paharo', 'Encouragement', 'Niveau', 14, 16),
(116, 'Paharo', 'Rafale de plumes', 'Niveau', 19, 16),
(117, 'Paharo', 'Hypoxie', 'Niveau', 26, 16),
(118, 'Paharo', 'Tornade', 'Niveau', 38, 16),
(119, 'Paharac', 'Baffounette', 'Oeuf', NULL, 17),
(120, 'Paharac', 'Misogi', 'Cours', NULL, 17),
(121, 'Paharac', 'Turbo-chorégraphie', 'Cours', NULL, 17),
(122, 'Paharac', 'Debout là-dedans !', 'Cours', NULL, 17),
(123, 'Paharac', 'Frappe hypercinétique', 'Oeuf', NULL, 17),
(124, 'Paharac', 'Picoti', 'Pré-Evo', NULL, 17),
(125, 'Paharac', 'Hypnose', 'Pré-Evo', NULL, 17),
(126, 'Paharac', 'Regard noir', 'Pré-Evo', NULL, 17),
(127, 'Paharac', 'Aéro-lame', 'Pré-Evo', NULL, 17),
(128, 'Paharac', 'Bourrasque', 'Pré-Evo', NULL, 17),
(129, 'Paharac', 'Rafale de plumes', 'Pré-Evo', NULL, 17),
(130, 'Paharac', 'Hypoxie', 'Pré-Evo', NULL, 17),
(131, 'Paharac', 'Encouragement', 'Pré-Evo', NULL, 17),
(132, 'Paharac', 'Tornade', 'Pré-Evo', NULL, 17),
(133, 'Granpah', 'Baffounette', 'Oeuf', NULL, 18),
(134, 'Granpah', 'Misogi', 'Cours', NULL, 18),
(135, 'Granpah', 'Turbo-chorégraphie', 'Cours', NULL, 18),
(136, 'Granpah', 'Debout là-dedans !', 'Cours', NULL, 18),
(137, 'Granpah', 'Appropriation', 'Cours', NULL, 18),
(138, 'Granpah', 'Frappe hypercinétique', 'Oeuf', NULL, 18),
(139, 'Granpah', 'Picoti', 'Pré-Evo', NULL, 18),
(140, 'Granpah', 'Hypnose', 'Pré-Evo', NULL, 18),
(141, 'Granpah', 'Regard noir', 'Pré-Evo', NULL, 18),
(142, 'Granpah', 'Aéro-lame', 'Pré-Evo', NULL, 18),
(143, 'Granpah', 'Bourrasque', 'Pré-Evo', NULL, 18),
(144, 'Granpah', 'Rafale de plumes', 'Pré-Evo', NULL, 18),
(145, 'Granpah', 'Hypoxie', 'Pré-Evo', NULL, 18),
(146, 'Granpah', 'Encouragement', 'Pré-Evo', NULL, 18),
(147, 'Granpah', 'Tornade', 'Pré-Evo', NULL, 18),
(148, 'Bunbun', 'Vortex de poussière', 'Oeuf', NULL, 21),
(149, 'Bunbun', 'Morsure cristalline', 'Oeuf', NULL, 21),
(150, 'Bunbun', 'Griffer', 'Niveau', 1, 21),
(151, 'Bunbun', 'Grignote', 'Niveau', 3, 21),
(152, 'Bunbun', 'Attendrissement', 'Niveau', 5, 21),
(153, 'Bunbun', 'Poudre de cristal', 'Niveau', 7, 21),
(154, 'Bunbun', 'Poignée de sable', 'Niveau ', 10, 21),
(155, 'Bunbun', 'Bain de boue', 'Niveau', 15, 21),
(156, 'Bunbun', 'Coup de boule', 'Niveau', 22, 21),
(157, 'Bunbun', 'Boule de granit', 'Niveau', 35, 21),
(158, 'Mudrid', 'Turbo-chorégraphie', 'Cours', NULL, 22),
(159, 'Mudrid', 'Vortex de poussière', 'Oeuf', NULL, 22),
(160, 'Mudrid', 'Morsure cristalline', 'Oeuf', NULL, 22),
(161, 'Mudrid', 'Jeu de jambes', 'Cours', NULL, 22),
(162, 'Mudrid', 'Amocher', 'Cours', NULL, 22),
(163, 'Mudrid', 'Coup de boule', 'Pré-Evo', NULL, 22),
(164, 'Mudrid', 'Grignote', 'Pré-Evo', NULL, 22),
(165, 'Mudrid', 'Griffer', 'Pré-Evo', NULL, 22),
(166, 'Mudrid', 'Attendrissement', 'Pré-Evo', NULL, 22),
(167, 'Mudrid', 'Poudre de cristal', 'Pré-Evo', NULL, 22),
(168, 'Mudrid', 'Poignée de sable', 'Pré-Evo', NULL, 22),
(169, 'Mudrid', 'Boule de granit', 'Pré-Evo', NULL, 22),
(170, 'Mudrid', 'Bain de boue', 'Pré-Evo', NULL, 22),
(171, 'Mudrid', 'Onde sismique', 'Niveau', 47, 22),
(172, 'Hidody', 'Misogi', 'Cours', NULL, 23),
(173, 'Hidody', 'Hypoxie', 'Oeuf', NULL, 23),
(174, 'Hidody', 'Debout là-dedans !', 'Cours', NULL, 23),
(175, 'Hidody', 'Berceuse', 'Oeuf', NULL, 23),
(176, 'Hidody', 'Nénuphar cruel', 'Oeuf', NULL, 23),
(177, 'Hidody', 'Antitoxines', 'Cours', NULL, 23),
(178, 'Hidody', 'Cage', 'Cours', NULL, 23),
(179, 'Hidody', 'Relaxation', 'Cours', NULL, 23),
(180, 'Hidody', 'Sacrifice', 'Oeuf', NULL, 23),
(181, 'Hidody', 'Sporulation', 'Oeuf', NULL, 23),
(182, 'Hidody', 'Griffer ', 'Niveau', 1, 23),
(183, 'Hidody', 'Poignée de sable', 'Niveau', 4, 23),
(184, 'Hidody', 'Feuille coupante', 'Niveau', 7, 23),
(185, 'Hidody', 'Encouragement', 'Niveau', 12, 23),
(186, 'Hidody', 'Sporiose', 'Niveau', 19, 23),
(187, 'Hidody', 'GaÏa', 'Niveau', 24, 23),
(188, 'Hidody', 'Bouclier d\'écorce', 'Niveau', 28, 23),
(189, 'Taifu', 'Misogi', 'Cours', NULL, 24),
(190, 'Taifu', 'Hypoxie', 'Oeuf', NULL, 24),
(191, 'Taifu', 'Debout là-dedans !', 'Cours', NULL, 24),
(192, 'Taifu', 'Berceuse', 'Oeuf', NULL, 24),
(193, 'Taifu', 'Nénuphar cruel', 'Oeuf', NULL, 24),
(194, 'Taifu', 'Antitoxines', 'Cours', NULL, 24),
(195, 'Taifu', 'cage', 'Cours', NULL, 24),
(196, 'Taifu', 'Taillade ciblée', 'Cours', NULL, 24),
(197, 'Taifu', 'Relaxation', 'Cours', NULL, 24),
(198, 'Taifu', 'Sacrifice', 'Oeuf', NULL, 24),
(199, 'Taifu', 'Sporulation', 'Oeuf', NULL, 24),
(200, 'Taifu', 'Griffer', 'Pré-Evo', NULL, 24),
(201, 'Taifu', 'Feuille coupante', 'Pré-Evo', NULL, 24),
(202, 'Taifu', 'Poignée de sable', 'Pré-Evo', NULL, 24),
(203, 'Taifu', 'Encouragement', 'Pré-Evo', NULL, 24),
(204, 'Taifu', 'Sporiose', 'Pré-Evo', NULL, 24),
(205, 'Taifu', 'Bouclier d\'écorce', 'Pré-Evo', NULL, 24),
(206, 'Taifu', 'GaÏa', 'Pré-Evo', NULL, 24),
(207, 'Taifu', 'Vortex de poussière', 'Niveau', 37, 24),
(208, 'Taifu', 'Vrille-fouet', 'Niveau', 48, 24),
(209, 'Crystle', 'Mur de pierre', 'Cours', NULL, 72),
(210, 'Crystle', 'Verre-lame', 'Niveau', 1, 72),
(211, 'Crystle', 'Carapace-miroir', 'Niveau', 3, 72),
(212, 'Crystle', 'Grignote', 'Niveau', 5, 72),
(213, 'Crystle', 'Poudre de cristal', 'Niveau', 9, 72),
(214, 'Crystle', 'Coup de boule', 'Niveau', 16, 72),
(215, 'Crystle', 'Cristallisation', 'Niveau', 17, 72),
(216, 'Crystle', 'Eperons de cristal', 'Niveau', 27, 72),
(217, 'Crystle', 'Déchaînement', 'Niveau', 35, 72),
(251, 'Sherald', 'Mur de pierre', 'Cours', NULL, 73),
(252, 'Sherald', 'Cage', 'Cours', NULL, 73),
(253, 'Sherald', 'Forteresse de diamant', 'Niveau', 45, 73),
(254, 'Sherald', 'Coup de boule', 'Pré-Evo', NULL, 73),
(255, 'Sherald', 'Grignote', 'Pré-Evo', NULL, 73),
(256, 'Sherald', 'Poudre de cristal ', 'Pré-Evo', NULL, 73),
(257, 'Sherald', 'Carapace-miroir', 'Pré-Evo', NULL, 73),
(258, 'Sherald', 'Verre-lame', 'Pré-Evo', NULL, 73),
(259, 'Sherald', 'Cristallisation', 'Pré-Evo', NULL, 73),
(260, 'Sherald', 'Eperons de cristal', 'Pré-Evo', NULL, 73),
(261, 'Sherald', 'Déchaînement', 'Pré-Evo', NULL, 73);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(20) NOT NULL,
  `point_de_vie` int(11) NOT NULL,
  `endurance` int(11) NOT NULL,
  `vitesse` int(11) NOT NULL,
  `attaque` int(11) NOT NULL,
  `defense` int(11) NOT NULL,
  `attaque_special` int(11) NOT NULL,
  `defense_special` int(11) NOT NULL,
  `numero_temtem` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `nom`, `point_de_vie`, `endurance`, `vitesse`, `attaque`, `defense`, `attaque_special`, `defense_special`, `numero_temtem`) VALUES
(3, 'Platypet', 55, 39, 65, 45, 31, 67, 56, 7),
(4, 'Platox', 62, 44, 74, 50, 35, 76, 63, 8),
(5, 'Platimous', 71, 49, 82, 56, 39, 90, 70, 9),
(6, 'Swali', 44, 65, 35, 50, 40, 55, 60, 10),
(7, 'Loali', 55, 80, 80, 60, 50, 70, 90, 11),
(8, 'Tateru', 60, 90, 60, 68, 66, 54, 66, 12),
(9, 'Paharo', 48, 18, 60, 40, 40, 50, 50, 16),
(10, 'Paharac', 60, 30, 70, 50, 55, 60, 60, 17),
(11, 'Granpah', 69, 36, 66, 78, 55, 61, 72, 18),
(12, 'Bunbun', 72, 40, 69, 50, 36, 64, 43, 21),
(13, 'Mudrid', 85, 44, 95, 60, 42, 75, 50, 22),
(14, 'Hidody', 49, 70, 39, 42, 39, 62, 55, 23),
(15, 'Taifu', 60, 87, 45, 50, 45, 78, 78, 24),
(16, 'Crystle', 60, 41, 33, 61, 69, 46, 42, 72),
(17, 'Sherald', 68, 45, 43, 69, 78, 51, 48, 73);

-- --------------------------------------------------------

--
-- Table structure for table `tempedie`
--

CREATE TABLE `tempedie` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero` int(4) UNSIGNED NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type_1` varchar(10) NOT NULL,
  `type_2` varchar(10) DEFAULT NULL,
  `trait_1` varchar(20) NOT NULL,
  `trait_2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tempedie`
--

INSERT INTO `tempedie` (`id`, `numero`, `nom`, `type_1`, `type_2`, `trait_1`, `trait_2`) VALUES
(1, 7, 'Platypet', 'Eau', 'Toxic', 'Virulent', 'Amphibie'),
(2, 8, 'Platox', 'Eau', 'Toxic', 'Résistant', 'Vaillant'),
(3, 9, 'Platimous', 'Eau', 'Toxic', 'Zen', 'Déterminé'),
(4, 10, 'Swali', 'Nature', NULL, 'Mithridate', 'Partageur'),
(5, 11, 'Loali', 'Nature', 'Vent', 'Botaniste', 'Revanchard'),
(6, 12, 'Tateru', 'Neutre', NULL, 'Vaillant', 'Délicat'),
(7, 16, 'Paharo', 'Vent', NULL, 'Amical', 'Planeur'),
(8, 17, 'Paharac', 'Vent', NULL, 'Caféiné', 'Fraternel'),
(9, 18, 'Granpah', 'Vent', NULL, 'Persécuteur', 'HéroÏque'),
(10, 21, 'Bunbun', 'Terre', 'Cristal', 'Caféiné', 'Vaillant'),
(11, 22, 'Mudrid', 'Terre', 'Cristal', 'Réceptif', 'Résistant'),
(12, 23, 'Hidody', 'Nature', NULL, 'Botaniste', 'Bioélectrique'),
(13, 24, 'Taifu', 'Nature', NULL, 'Vaillant', 'Revanchard'),
(14, 72, 'Crystle', 'Cristal', NULL, 'Amphibie', 'Reposé'),
(15, 73, 'Sherald', 'Cristal', NULL, 'Réflecteur', 'Endurci');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capacites`
--
ALTER TABLE `capacites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capacites_temtem`
--
ALTER TABLE `capacites_temtem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempedie`
--
ALTER TABLE `tempedie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capacites_temtem`
--
ALTER TABLE `capacites_temtem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tempedie`
--
ALTER TABLE `tempedie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
