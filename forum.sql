-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 25 Janvier 2017 à 21:26
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_c` int(11) NOT NULL,
  `id_u` int(11) DEFAULT NULL,
  `id_n` int(11) DEFAULT NULL,
  `titreC` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_c`, `id_u`, `id_n`, `titreC`) VALUES
(1, 1, NULL, 'Géneral'),
(2, 1, NULL, 'Hardware'),
(3, 1, NULL, 'reseau'),
(4, 1, NULL, 'Dev web'),
(5, 1, NULL, 'algo');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_m` int(11) NOT NULL,
  `contenu` text,
  `dateenvoie` datetime DEFAULT NULL,
  `id_u` int(11) NOT NULL,
  `id_t` int(11) NOT NULL,
  `id_c` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id_m`, `contenu`, `dateenvoie`, `id_u`, `id_t`, `id_c`) VALUES
(14, 'aa', NULL, 4, 1, 2),
(17, '<p>test</p>', '2017-01-25 21:25:03', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `message2`
--

CREATE TABLE `message2` (
  `id_m2` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text,
  `id_exp` int(11) DEFAULT NULL,
  `id_dest` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

CREATE TABLE `topic` (
  `id_t` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `contenut` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `topic`
--

INSERT INTO `topic` (`id_t`, `id_c`, `id_u`, `titre`, `resume`, `contenut`) VALUES
(1, 1, 1, 'Règle d\'utilisation', 'RESPECTE LES REGLES', 'Nous sommes là pour vous aider. \r\nS\'il s\'agit de votre première visite sur TomTom Discussions et que vous avez des questions, n\'hésitez surtout pas à les poser ! Les modérateurs TomTom et les autres utilisateurs seront ravis de vous aider. Vous reconnaîtrez facilement les modérateurs et employés TomTom : leurs noms sont accompagnés de leur rôle et du logo TomTom.\r\n\r\n\r\nRestez productif. \r\nTomTom Discussions a été conçu spécifiquement pour être un espace d\'entraide pour les utilisateurs, nous vous prions donc de publier des commentaires constructifs et en lien avec le sujet discuté dans le fil. Ne prenez pas en otage les sujets des autres pour faire valoir votre point de vue. Si vous avez besoin d\'une aide directe de TomTom, nous vous conseillons de nous contacter par téléphone ou par e-mail, aux numéros et adresses mentionnés dans les pages d\'assistance (http://tomtom.com/support).\r\n\r\n\r\nÉvitez le hors sujet. \r\nPour le bien de tous, nous vous recommandons d\'éviter le hors sujet. Assurez-vous de ne pas évoquer de sujets personnels, de ne pas critiquer une personne, entreprise ou produit, ou encore de ne pas publier de messages n\'ayant aucun lien avec les produits ou services TomTom. Ne divulguez pas d\'informations que vous ne souhaitez pas rendre publiques. Toutes les informations que vous publiez seront en effet accessibles et exploitables par les autres utilisateurs. Vous êtes responsable des informations que vous publiez et des conséquences de leur divulgation.\r\n\r\n\r\nRestez courtois. \r\nTTous les utilisateurs de TomTom Discussions souhaitent pouvoir évoluer un cadre convivial. Veillez donc à ne pas dénigrer les propos d\'autres utilisateurs. Soyez polis et respectueux dans vos interactions avec les autres membres et le staff. A cet effet, évitez de publier tout message à contenu illégal, diffamatoire, calomnieux, sensible, obscène, pornographique, outrageant, blessant, provocateur, menaçant, offensant, attentatoire à la vie privée ou aux droits de publicité, agressif, répréhensible ou injurieux de quelque manière que ce soit envers des tierces parties. Vos avis sont toujours les bienvenus, mais le harcèlement, le troll et les attaques personnelles portées sur TomTom Discussions ou par le biais de messages privés ne seront tolérés.\r\n\r\n\r\nSpam Interdit. \r\nTomTom Discussions est un service proposé aux clients TomTom qui n\'a pas pour objet de faire la promotion d\'autres services, produits, sites Web ou organisations. Évitez donc de publier des messages assimilables à de la publicité, à des chaînes de lettres, à du spam, pétition ou à toute autre forme de sollicitation non autorisée.\r\n\r\nRespectez la loi. \r\nNous ne pourrons tolérer tout contenu (i) qui irait à l\'encontre d\'un brevet, d\'une marque commerciale, d\'un secret industriel, de droits d\'auteur ou de droits de propriété de quelque partie que ce soit, (ii) qui contiendrait des virus, du code informatique ou des fichiers destinés à perturber, endommager ou limiter le fonctionnement d\'un composant logiciel ou matériel, ou (iii) qui serait considéré comme illégal dans le cadre de législations régionales, fédérales, nationales ou internationales.\r\n\r\n\r\n\r\nFaites preuve de prudence. \r\nLa plupart des utilisateurs de TomTom Discussions ne demandent qu\'à vous aider, mais n\'oubliez pas que leurs conseils sont personnels et que c\'est à vous que revient la décision de les appliquer ou non. Si un conseil vous semble contre-productif ou dangereux, ignorez-le. En outre, si un utilisateur vous demande vos informations personnelles, comme votre numéro de compte, votre adresse, votre mot de passe ou votre numéro de carte bancaire, ne répondez pas.\r\n\r\n'),
(3, 2, 1, 'Cours et exo', 'Cours et exo de Hardware', 'Le matériel informatique est l\'ensemble des pièces détachées des appareils informatiques. Il y a des pièces situées à l\'intérieur du boîtier de l\'ordinateur aussi bien qu\'à l\'extérieur (les périphériques).\r\nLes pièces intérieures sont, la plupart du temps, montées sur des circuits imprimés. Différentes pièces sont construites par différentes marques et connectées entre elles. Le respect des normes par les différentes marques permet le fonctionnement de l\'ensemble.\r\nLes pièces servent soit à recevoir des informations, à les envoyer, les échanger, les stocker ou les traiter. Toutes les opérations sont effectuées conformément aux instructions contenues dans les logiciels et aux manipulations des périphériques de l\'interface homme-machine.'),
(4, 3, 1, 'Cours et exo', 'Cours et exo de reseau', 'Vous aimeriez apprendre le fonctionnement des réseaux informatiques ? Cette page qui contient des liens vers de nombreux cours de réseaux est faite pour vous ! \r\n\r\nNous avons essayé de réunir sur ce site un panel de cours susceptibles de vous aider à maîtriser les sujets qui vous intéressent (sécurité des réseaux, protocoles...). \r\n\r\nDans ces cours accessibles gratuitement à télécharger en pdf ou à consulter en ligne, vous trouverez toutes les réponses à vos questions. Certaines formations s\'adressent plus particulièrement aux débutants mais quel que soit votre niveau vous devriez apprendre quelque chose. \r\n\r\nVous pouvez aussi trouver des cours en lien avec les réseaux dans les catégories Linux et Sécurité informatique. '),
(5, 4, 1, 'Dev web', 'cours et exo', 'Le développeur web effectue la réalisation technique et le développement informatique d\'un site web. A l\'aide du cahier des charges réalisé par le chef de projet, le développeur web programme les fonctionnalités qui correspondent aux besoins du client pour son site web. Le développeur web peut exercer dans une ESN (Entreprise de Services du Numérique), dans une agence Web, en tant que travailleur indépendant ou directement chez le client. Certains développeurs web sont également bénévoles dans le cadre de projets liés à l\'informatique libre'),
(6, 5, 1, 'Algo', 'cour et exo', 'L\'algorithmique est l\'étude et la production de règles et techniques qui sont impliquées dans la définition et la conception d\'algorithmes, c\'est-à-dire de processus systématiques de résolution d\'un problème permettant de décrire précisément des étapes pour résoudre un problème algorithmique. En d\'autres termes, un algorithme est une suite finie et non-ambiguë d’instructions permettant de donner la réponse à un problème.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `avtar` varchar(255) DEFAULT NULL,
  `lvl` int(11) DEFAULT NULL,
  `dateinscription` datetime DEFAULT NULL,
  `datealstco` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `login`, `mdp`, `email`, `avtar`, `lvl`, `dateinscription`, `datealstco`) VALUES
(1, 'toto1', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'toto@gmail.com', NULL, 1, NULL, NULL),
(2, 'tttt', '1234', 'tttt@gmail.com', NULL, 1, NULL, NULL),
(3, '123', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'zzrfq@rdbz', NULL, 1, NULL, NULL),
(4, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', NULL, 3, NULL, NULL),
(5, 'moderateur', 'mode', 'mo@', NULL, 2, NULL, NULL),
(6, 'dada', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'toto@gmail.com', NULL, 1, '2017-01-25 09:22:34', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_c`),
  ADD KEY `id_u` (`id_u`),
  ADD KEY `id_n` (`id_n`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_m`),
  ADD KEY `id_u` (`id_u`),
  ADD KEY `id_t` (`id_t`),
  ADD KEY `id_t_2` (`id_t`),
  ADD KEY `id_c` (`id_c`);

--
-- Index pour la table `message2`
--
ALTER TABLE `message2`
  ADD PRIMARY KEY (`id_m2`),
  ADD KEY `id_exp` (`id_exp`),
  ADD KEY `id_dest` (`id_dest`);

--
-- Index pour la table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id_t`),
  ADD KEY `id_c` (`id_c`),
  ADD KEY `id_u` (`id_u`),
  ADD KEY `id_t` (`id_t`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `message2`
--
ALTER TABLE `message2`
  MODIFY `id_m2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `topic`
--
ALTER TABLE `topic`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
