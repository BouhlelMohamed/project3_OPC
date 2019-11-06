-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2019 at 10:14 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Film_P3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `passwordd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `pseudo`, `passwordd`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `nameOfFilm` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `projectionDate` date NOT NULL,
  `images` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `nameOfFilm`, `description`, `projectionDate`, `images`) VALUES
(1, 'Fast & Furious : Hobbs & Shaw\n', 'Depuis que Hobbs et Shaw se sont affrontés, les deux hommes font tout pour se nuire l\'un à l\'autre. Mais lorsque Brixton, un anarchiste génétiquement modifié, met la main sur une arme de destruction massive après avoir battu le meilleur agent du MI6 qui se trouve être la soeur de Shaw. Les deux ennemis de longue date vont devoir alors faire équipe pour faire tomber le seul adversaire capable de les anéantir.', '2019-08-05', 'http://fr.web.img5.acsta.net/pictures/19/02/01/15/13/4415705.jpg'),
(2, 'Le Roi lion', 'Au fond de la savane africaine, tous les animaux célèbrent la naissance de Simba, leur futur roi. Les mois passent. Simba idolâtre son père, le roi Mufasa, qui prend à c?ur de lui faire comprendre les enjeux de sa royale destinée. Mais tout le monde ne semble pas de cet avis. Scar, le frère de Mufasa, l\'ancien héritier du trône, a ses propres plans...', '2019-08-05', 'http://fr.web.img3.acsta.net/pictures/19/02/25/12/06/2908996.jpg'),
(3, 'Comme des bêtes 2\r\n', 'Max, le Jack Russell, doit faire face à des changements majeurs dans sa vie lorsque son propriétaire se marie et a un bébé. Max se met alors à avoir des crises d\'anxiété, mais heureusement pour lui, il peut toujours compter sur tous ses amis qui sont là pour l\'aider, lui et le bébé.', '2019-08-05', 'https://dx35vtwkllhj9.cloudfront.net/universalstudios/the-secret-life-of-pets-2/images/regions/fr/onesheet.jpg'),
(4, 'C\'est quoi cette mamie ?!', 'Une tribu des 7 demi-frères et soeurs doit quitter le grand appart\' avant la rentrée. Chacun part en vacances pour l\'été avec ses parents respectifs. Gulliver, le petit dernier, est envoyé tout seul chez sa grand-mère. Mais l\'excentrique Mamie Aurore n\'est pas une baby-sitter comme les autres !', '2019-08-06', 'http://img.over-blog-kiwi.com/0/95/30/84/20190613/ob_5c48da_cestquoicettemamie-doc120-2404-881x119.jpg'),
(5, 'Dora et la Cité perdue', 'Après des années à explorer la jungle avec ses parents, Dora se prépare à vivre l\'épreuve la plus difficile de sa vie : l\'entrée au lycée ! Son âme d\'exploratrice resurgit quand elle doit voler à la rescousse de ses parents en danger. Accompagnée de son fidèle singe Babouche, de son cousin Diego et de nouveaux amis hauts en couleur, Dora embarque dans une folle aventure qui l\'amènera à percer le mystère de la Cité d\'or perdue.', '2019-08-06', 'http://fr.web.img6.acsta.net/pictures/19/07/09/16/20/2730316.jpg'),
(6, 'Playmobil, le film', 'Lorsque son petit frère Charlie disparaît dans l\'univers magique et animé des Playmobil, Marla se lance dans une quête hors du commun pour le retrouver ! C\'est le début d\'une aventure pleine d\'action et d\'humour où Marla fera des rencontres inoubliables : un sympathique vendeur ambulant qui vit dans son food truck, un agent secret élégant et charismatique, un affectueux petit robot et une bonne fée fantasque seront autant de nouveaux amis qui l\'aideront à échapper aux dangers qui la guettent.', '2019-08-06', 'http://fr.web.img6.acsta.net/pictures/19/06/21/10/36/1616668.jpg'),
(7, 'Annabelle : La Maison du mal\r\n', 'Résolus à empêcher Annabelle de causer davantage de dégâts, les démonologues Ed et Lorraine Warren rangent la poupée possédée dans la pièce verrouillée de leur maison réservée aux artefacts. Mais une nuit d\'horreurs se profile alors qu\'Annabelle réveille les esprits maléfiques de la salle, qui dirigent leur attention vers une nouvelle cible : la fille de 10 ans des Warrens, Judy et ses amis.', '2019-08-07', 'http://fr.web.img5.acsta.net/pictures/19/05/29/12/09/4290749.jpg'),
(8, 'Anna', 'Les Matriochka sont des poupées russes qui s\'emboîtent les unes dans les autres. Chaque poupée en cache une autre. Anna est une jolie femme de 24 ans, mais qui est-elle vraiment et combien de femmes se cachent en elle ?', '2019-08-07', 'http://fr.web.img6.acsta.net/pictures/19/06/14/13/39/0794831.jpg'),
(9, 'Parasite', 'Toute la famille de Ki-taek est au chômage, et s\'intéresse fortement au train de vie de la richissime famille Park. Un jour, leur fils réussit a? se faire recommander pour donner des cours particuliers d\'anglais chez les Park. C\'est le début d\'un engrenage incontrôlable...', '2019-08-07', 'http://fr.web.img5.acsta.net/pictures/19/05/27/17/24/1087814.jpg'),
(10, 'Le Gangster, le Flic et l\'Assassin', 'Un puissant chef de gang dont la férocité est redoutée dans le milieu manque de se faire assassiner par un homme qui prend la fuite sans être identifié. S\'il a survécu à l\'attaque, le gangster sait que sa réputation est irrémédiablement endommagée : il doit retrouver l\'assassin et le faire payer.', '2019-08-08', 'http://fr.web.img3.acsta.net/pictures/19/06/19/15/01/3455438.jpg'),
(11, 'Toy Story 4\r\n', 'Woody a toujours privilégié la joie de ses jeunes propriétaires - Andy puis Bonnie - et de ses compagnons, n\'hésitant pas à prendre tous les risques pour eux, aussi inconsidérés soient-ils. L\'arrivée de Forky un nouveau jouet qui ne veut pas en être un met toute la petite bande en émoi.', '2019-08-08', 'https://www.chroniquedisney.fr/imgAnimation/2010/2019-toy-story-4-01-big.jpg'),
(12, 'Aladdin', 'Quand un charmant garçon des rues du nom d\'Aladdin cherche à conquérir le coeur de la belle, énigmatique et fougueuse princesse Jasmine, il fait appel au tout puissant Génie, le seul qui puisse lui permettre de réaliser trois voeux, dont celui de devenir le prince Ali pour mieux accéder au palais.', '2019-08-08', 'http://bullesdeculture.org/bdc-content/uploads/2019/05/aladdin-de-guy-ritchie-affiche-1503x2048.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext,
  `author` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `author`, `date`) VALUES
(14, 'Fin du Soir 3 : rétrospective sur 41 ans d\'actualité', 'Dimanche 25 août, le Soir 3 prendra fin sur France 3. C\'est l\'occasion de revenir sur 41 ans d\'actualité, d\'information et de grands événements.', 'Mohamed Bouhlel', '2019-08-23 18:13:35');

-- --------------------------------------------------------

--
-- Table structure for table `pre_registrations`
--

CREATE TABLE `pre_registrations` (
  `id` int(11) NOT NULL,
  `nameOfPerson` varchar(255) DEFAULT NULL,
  `email` varchar(320) DEFAULT NULL,
  `id_film` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pre_registrations`
--

INSERT INTO `pre_registrations` (`id`, `nameOfPerson`, `email`, `id_film`, `date`) VALUES
(105, 'Mohamed Bouhlel', 'mohamed.bouhleel@gmail.com', 11, '2019-08-24 15:15:28'),
(128, 'Mohamed Bouhlel', 'mohamed.bouhleel@gmail.com', 4, '2019-10-28 20:31:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_registrations`
--
ALTER TABLE `pre_registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pre_registrations`
--
ALTER TABLE `pre_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
