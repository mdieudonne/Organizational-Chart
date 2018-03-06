-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2018 at 08:36 PM
-- Server version: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chart`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `landline` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `filename`, `mobile`, `landline`, `email`) VALUES
(1, 'S. Jacobée', 's.jacobee.jpeg', 101010101, 202020202, 's.jacobee@email.com'),
(2, 'P. Frison', 'p.frison.jpeg', 101010101, 202020202, 'p.frison@email.com'),
(3, 'J. Genest', 'j.genest.jpeg', 101010101, 202020202, 'j.genest@email.com'),
(4, 'G. Rochotte', 'g.rochotte.jpeg', 101010101, 202020202, 'g.rochotte@email.com'),
(5, 'M. Klatt', 'm.klatt.jpeg', 101010101, 202020202, 'm.klatt@email.com'),
(6, 'C. Luttenbacher', 'c.luttenbacher.jpeg', 101010101, 202020202, 'c.luttenbacher@email.fr'),
(7, 'Isabelle Mangin', 'i.mangin.jpeg', 101010101, 202020202, 'i.mangin@email.fr'),
(8, 'C. Bihry', 'c.bihry.jpeg', 101010101, 202020202, 'c.bihry@email.fr'),
(9, 'C. Boissenin', 'c.boissenin.jpeg', 101010101, 202020202, 'c.boissenin@email.fr'),
(11, 'K. Guidat', 'k.guidat.jpeg', 101010101, 202020202, 'k.guidat@email.fr'),
(12, 'H. Korpak', 'h.korpak.jpeg', 101010101, 202020202, 'h.korpak@email.fr'),
(14, 'S. Marotel', 's.marotel.jpeg', 101010101, 202020202, 's.marotel@email.fr'),
(15, 'S. Soudière', 's.soudiere.jpeg', 101010101, 202020202, 's.soudiere@email.fr'),
(16, 'JC. Piaget', 'jc.piaget.jpeg', 101010101, 202020202, 'jc.piaget@email.fr'),
(17, 'B. Lhomer', 'b.lhomer.jpeg', 101010101, 202020202, 'b.lhomer@email.fr'),
(18, 'L. Rinaldi', 'l.rinaldi.jpeg', 101010101, 202020202, 'l.rinaldi@email.fr'),
(19, 'C. Beurné', 'c.beurne.jpeg', 101010101, 202020202, 'c.beurne@email.fr'),
(20, 'E. Seguin', 'e.seguin.jpeg', 101010101, 202020202, 'e.seguin@email.fr'),
(21, 'P. Lacour', 'p.lacour.jpeg', 101010101, 202020202, 'p.lacour@email.fr'),
(22, 'D. Javelot', 'd.javelot.jpeg', 101010101, 202020202, 'd.javelot@email.fr'),
(23, 'V. Ritzenthaler', 'v.ritzenthaler.jpeg', 101010101, 202020202, 'v.ritzenthaler@email.com'),
(24, 'R. Flon', 'r.flon.jpeg', 101010101, 202020202, 'r.flon@email.fr');

-- --------------------------------------------------------

--
-- Table structure for table `employee_sector_services`
--

CREATE TABLE `employee_sector_services` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `function_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_sector_services`
--

INSERT INTO `employee_sector_services` (`id`, `employee_id`, `service_id`, `sector_id`, `function_id`) VALUES
(1, 1, 1, 5, 3),
(2, 2, 2, 1, 4),
(3, 3, 2, 1, 4),
(4, 4, 4, 2, 1),
(5, 5, 3, 1, 4),
(6, 6, 6, 1, 4),
(7, 7, 7, 1, 4),
(8, 8, 7, 1, 5),
(9, 9, 7, 2, 5),
(11, 11, 7, 1, 5),
(12, 12, 7, 1, 5),
(14, 14, 7, 1, 5),
(15, 15, 7, 1, 5),
(16, 16, 7, 1, 6),
(17, 17, 7, 1, 5),
(18, 4, 4, 2, 7),
(19, 18, 4, 6, 7),
(20, 19, 4, 2, 9),
(21, 20, 4, 1, 10),
(22, 21, 4, 2, 11),
(23, 22, 5, 1, 12),
(24, 23, 5, 1, 12),
(25, 24, 5, 2, 12),
(29, 21, 1, 1, 12),
(32, 22, 10, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE `function` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`id`, `name`) VALUES
(1, 'Référent'),
(2, 'Superviseur'),
(3, 'Directeur Général'),
(4, NULL),
(5, 'Pool secrétariat / Accueil / CRC'),
(6, 'Service courrier / Logistique'),
(7, 'Industrie, Service, Commerce'),
(8, 'Industrie'),
(9, 'Commerce'),
(10, 'Manager Centre Ville'),
(11, 'Tourisme / CHR'),
(12, 'Formalités'),
(13, 'Suppléance'),
(14, 'Fichier consulaire'),
(15, 'Création entreprise'),
(16, 'Transmission entreprise'),
(17, 'Service financement'),
(18, 'Urbanisme');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`id`, `name`) VALUES
(1, 'E'),
(2, 'SD'),
(3, 'SM'),
(4, 'LB'),
(5, 'ALL'),
(6, 'Ouest');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `parent_id`) VALUES
(1, 'Direction Générale', 0),
(2, 'Communication Réseaux sociaux', 2),
(3, 'Direction Appui aux Entreprises', 1),
(4, 'Service de proximité des entreprises', 3),
(5, 'Service interventions spécialisées', 3),
(6, 'Ingénierie Financière / Fonds TPE-PME', 2),
(7, 'Direction Administrative', 1),
(8, 'Direction de la Formation', 2),
(9, 'Direction Infrastructure', 1),
(10, 'Coordinateur', 1),
(11, 'Chieuse', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_sector_services`
--
ALTER TABLE `employee_sector_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `sector_id` (`sector_id`),
  ADD KEY `function_id` (`function_id`);

--
-- Indexes for table `function`
--
ALTER TABLE `function`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authority_id` (`parent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `employee_sector_services`
--
ALTER TABLE `employee_sector_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `function`
--
ALTER TABLE `function`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_sector_services`
--
ALTER TABLE `employee_sector_services`
  ADD CONSTRAINT `employee_sector_services_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`),
  ADD CONSTRAINT `employee_sector_services_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `employee_sector_services_ibfk_3` FOREIGN KEY (`sector_id`) REFERENCES `sector` (`id`),
  ADD CONSTRAINT `employee_sector_services_ibfk_4` FOREIGN KEY (`function_id`) REFERENCES `function` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
