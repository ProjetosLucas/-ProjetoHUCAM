-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Out-2018 às 17:26
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arrows`
--

DROP TABLE IF EXISTS `arrows`;
CREATE TABLE IF NOT EXISTS `arrows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) NOT NULL,
  `y1` int(11) NOT NULL,
  `x2` int(11) NOT NULL,
  `y2` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `diseases`
--

DROP TABLE IF EXISTS `diseases`;
CREATE TABLE IF NOT EXISTS `diseases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `presentation` text NOT NULL,
  `discution` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `presentation`, `discution`, `user_id`) VALUES
(12, '3rd metacarpal fracture', 'Hand injury after fighting. Intoxicated.', 'Fracture of the 3rd metacarpal after a fighting injury.', 3),
(10, '11 pairs of ribs and lumbosacral transitional vertebra', 'Abdominal pain and vomiting. No significant medical history.', 'Since 11 rib pairs can be counted on the upright frontal chest film, one can confidently determine that the lumbosacral transitional vertebra is, in fact, a sacralised L5 vertebra.', 3),
(11, '1st trimester nuchal/morphology ultrasound', 'Routine nuchal translucency ultrasound. Gestational age 12 weeks 4 days, as established on earlier scan.', 'This is a normal ultrasound performed at 12 weeks 4 days gestational age, demonstrating fairly detailed fetal anatomy.\r\n\r\nMorphologic assessment in the late first trimester is dependent on patient, machine and operator factors.  It is possible however with current equipment to obtain a great deal of anatomic information at this stage.  Detection of any anomalies at an earlier stage is optimal for patient counselling and management of pregnancy.', 5),
(9, 'Spheno-orbital meningioma', 'Headache and right proptosis.', 'Sphenoid or (spheno-orbital) wing meningiomas are complex tumors involving sphenoid wing, orbit and cavernous sinus, with sphenoid bone remodelling.', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ellipses`
--

DROP TABLE IF EXISTS `ellipses`;
CREATE TABLE IF NOT EXISTS `ellipses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `center_x` int(11) NOT NULL,
  `center_y` int(11) NOT NULL,
  `axis_one` int(11) NOT NULL,
  `axis_two` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `genders`
--

DROP TABLE IF EXISTS `genders`;
CREATE TABLE IF NOT EXISTS `genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `genders`
--

INSERT INTO `genders` (`id`, `name`) VALUES
(1, 'Masculino'),
(2, 'Feminino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image_type_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `images`
--

INSERT INTO `images` (`id`, `name`, `file_name`, `description`, `image_type_id`, `disease_id`, `patient_id`) VALUES
(13, 'Doença 1', 'casa1.jpg', 'Descrição', 1, 6, 1),
(14, 'Sagittal T2', 'exame1.jpeg', 'There is right temporal extra-axial lobulated lesion, appears hypointense T1W and slightly hyperintense T2W and FLAIR sequences, shows homogenous enhancement post contrast with dural tail, causing right sphenoid wing remodeling adjacent right cavernous sinus and extend down to right maxilla laterally.\r\n\r\nIt causes mild right temporal lobe edema, and bulged into orbit, splaying extra-ocular muscles, causing proptosis.', 2, 9, 1),
(15, 'Sagittal T1 C+ fat sat', 'exame1_7.jpeg', 'There is right temporal extra-axial lobulated lesion, appears hypointense T1W and slightly hyperintense T2W and FLAIR sequences, shows homogenous enhancement post contrast with dural tail, causing right sphenoid wing remodeling adjacent right cavernous sinus and extend down to right maxilla laterally.\r\n\r\nIt causes mild right temporal lobe edema, and bulged into orbit, splaying extra-ocular muscles, causing proptosis.', 2, 9, 1),
(16, 'Axial T1 C+ fat sat', 'exame1_2.jpeg', 'There is right temporal extra-axial lobulated lesion, appears hypointense T1W and slightly hyperintense T2W and FLAIR sequences, shows homogenous enhancement post contrast with dural tail, causing right sphenoid wing remodeling adjacent right cavernous sinus and extend down to right maxilla laterally.\r\n\r\nIt causes mild right temporal lobe edema, and bulged into orbit, splaying extra-ocular muscles, causing proptosis.', 2, 9, 1),
(17, 'Axial FLAIR', 'exame1_4.jpeg', 'There is right temporal extra-axial lobulated lesion, appears hypointense T1W and slightly hyperintense T2W and FLAIR sequences, shows homogenous enhancement post contrast with dural tail, causing right sphenoid wing remodeling adjacent right cavernous sinus and extend down to right maxilla laterally.\r\n\r\nIt causes mild right temporal lobe edema, and bulged into orbit, splaying extra-ocular muscles, causing proptosis.', 2, 9, 1),
(18, 'Frontal', 'exame2_4.jpeg', 'No pathology seen on the chest or abdominopelvic films.\r\nIntrauterine device projected onto the sacrum.\r\n\r\nIncidentally noted 11 pairs of ribs and lumbosacral transitional vertebra - sacralisation of L5.', 1, 10, 1),
(19, 'Frontal', 'exame2_3.jpeg', 'No pathology seen on the chest or abdominopelvic films.\r\nIntrauterine device projected onto the sacrum.\r\n\r\nIncidentally noted 11 pairs of ribs and lumbosacral transitional vertebra - sacralisation of L5.', 1, 10, 1),
(20, 'Lateral', 'exame2_2.jpeg', 'No pathology seen on the chest or abdominopelvic films.\r\nIntrauterine device projected onto the sacrum.\r\n\r\nIncidentally noted 11 pairs of ribs and lumbosacral transitional vertebra - sacralisation of L5.', 1, 10, 1),
(21, 'Frontal', 'exame2_1.jpeg', 'No pathology seen on the chest or abdominopelvic films.\r\nIntrauterine device projected onto the sacrum.\r\n\r\nIncidentally noted 11 pairs of ribs and lumbosacral transitional vertebra - sacralisation of L5.', 1, 10, 1),
(22, 'Heart views cine with colour', 'isame3_2.jpeg', 'Normal 12 week fetal ultrasound.', 3, 11, 1),
(23, 'General anatomy and NT', 'isame3_1.jpeg', 'General anatomy and NT', 3, 11, 1),
(24, 'Oblique', 'exame4_2.jpg', 'Intra-articular fracture of the third metacarpal head. Minimal displacement.', 1, 12, 2),
(25, 'Oblique', 'exame4_1.jpg', 'Intra-articular fracture of the third metacarpal head. Minimal displacement.', 1, 12, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `image_types`
--

DROP TABLE IF EXISTS `image_types`;
CREATE TABLE IF NOT EXISTS `image_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `image_types`
--

INSERT INTO `image_types` (`id`, `name`) VALUES
(1, 'X-ray'),
(2, 'MRI'),
(3, 'Ultrasound'),
(4, 'Diagram');

-- --------------------------------------------------------

--
-- Estrutura da tabela `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `gender_id` tinyint(1) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `patients`
--

INSERT INTO `patients` (`id`, `name`, `gender_id`, `age`) VALUES
(1, 'Lucas Soares Pessini', 1, 22),
(2, 'Arthur Soares Pessini', 1, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `textboxes`
--

DROP TABLE IF EXISTS `textboxes`;
CREATE TABLE IF NOT EXISTS `textboxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `text` text NOT NULL,
  `image_id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(2, 'Rodrigo Moll'),
(3, 'Carolina Fiorin'),
(4, 'Anselmo'),
(5, 'Lucas Profiro');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
