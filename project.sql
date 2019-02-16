-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Fev-2019 às 19:21
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

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

CREATE TABLE `arrows` (
  `id` int(11) NOT NULL,
  `x1` int(11) NOT NULL,
  `y1` int(11) NOT NULL,
  `x2` int(11) NOT NULL,
  `y2` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `presentation` text NOT NULL,
  `discution` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `aproved` tinyint(1) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `presentation`, `discution`, `user_id`, `aproved`, `modified`, `created`) VALUES
(12, '3rd metacarpal fracture', 'Hand injury after fighting. Intoxicated', 'Fracture of the 3rd metacarpal after a fighting injury.', 3, 1, '2019-02-15 21:00:12', '2019-02-15 00:00:00'),
(10, '11 pairs of ribs and lumbosacral transitional vertebra', 'Abdominal pain and vomiting. No significant medical history.', 'Since 11 rib pairs can be counted on the upright frontal chest film, one can confidently determine that the lumbosacral transitional vertebra is, in fact, a sacralised L5 vertebra.', 3, 0, '2019-02-15 00:00:00', '2019-02-15 00:00:00'),
(11, '1st trimester nuchal/morphology ultrasound', 'Routine nuchal translucency ultrasound. Gestational age 12 weeks 4 days, as established on earlier scan.', 'This is a normal ultrasound performed at 12 weeks 4 days gestational age, demonstrating fairly detailed fetal anatomy.\r\n\r\nMorphologic assessment in the late first trimester is dependent on patient, machine and operator factors.  It is possible however with current equipment to obtain a great deal of anatomic information at this stage.  Detection of any anomalies at an earlier stage is optimal for patient counselling and management of pregnancy.', 5, 1, '2019-02-15 21:05:01', '2019-02-15 00:00:00'),
(9, 'Spheno-orbital meningioma', 'Headache and right proptosis.', 'Sphenoid or (spheno-orbital) wing meningiomas are complex tumors involving sphenoid wing, orbit and cavernous sinus, with sphenoid bone remodelling.', 2, 0, '2019-02-15 00:00:00', '2019-02-15 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ellipses`
--

CREATE TABLE `ellipses` (
  `id` int(11) NOT NULL,
  `center_x` int(11) NOT NULL,
  `center_y` int(11) NOT NULL,
  `axis_one` int(11) NOT NULL,
  `axis_two` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image_type_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `image_types` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `gender_id` tinyint(1) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `patients`
--

INSERT INTO `patients` (`id`, `name`, `gender_id`, `age`) VALUES
(1, 'Lucas Soares Pessini', 1, 22),
(2, 'Arthur Soares Pessini', 1, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `role`, `created`, `modified`) VALUES
(1, 'admin', '2019-02-15 16:28:46', '2019-02-15 16:28:46'),
(2, 'moderador', '2019-02-15 16:29:05', '2019-02-15 16:29:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `textboxes`
--

CREATE TABLE `textboxes` (
  `id` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `text` text NOT NULL,
  `image_id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `roles_id`, `created`, `modified`) VALUES
(2, 'Rodrigo Moll', 'Rodrigo', 'rodrigomoll@gmail.com', '$2y$10$gX3RbJdCLhLTssZVOLjfju40MUrL7nvJq4ICF/pkq0zBdG17Dg2ga', 2, '2019-02-15 00:00:00', '2019-02-16 18:11:31'),
(3, 'Carolina Fiorin', 'Carolina', 'cfanhoque@gmail.com', '$2y$10$CmGaizd6D6xlhHR/9ugO..YMiOJdt2YGR3jzNYco9M3DvqVfL8M1W', 2, '2019-02-20 00:00:00', '2019-02-16 18:11:52'),
(4, 'Anselmo', 'Anselmo', 'anselmoneto@gmail.com', '$2y$10$0yHCikBK2ioHa3rTzgE6eOMMeXH3hY0X4GTnKGX4oOTkr/vRhuriW', 2, '2019-02-12 00:00:00', '2019-02-16 18:12:17'),
(5, 'Lucas Profiro', 'Lucas', 'lucasprofiro@gmail.com', '$2y$10$hu11Rre2Ctf6TmVj9ZMaeud6Ezlm2SldohFbqJ6mOrL6riw4WYrQy', 2, '2019-02-20 00:00:00', '2019-02-16 18:12:48'),
(6, 'admin', 'admin', 'admin@teste.com', '$2y$10$EXH0LuSXZH3DtU9yLzOC9OM690WaxRWD68mdS2vOVN4NOGFduICaK', 1, '2019-02-15 16:39:26', '2019-02-15 16:57:29'),
(7, 'moderador', 'moderador', 'moderador@exemple.com', '$2y$10$u84ALy.V7YMVIvQv1qLgo.LIwb/k5tJXfo4QE8F65gfmWrq0Qbl5C', 2, '2019-02-16 16:06:56', '2019-02-16 16:06:56'),
(8, 'Teste', 'teste', 'teste@exemple.com', '$2y$10$WJ5SzGfYGAORe6XnFMK2G./6gtsthIQakQRXBjRCVniM/dkxL1DKy', 2, '2019-02-16 17:57:40', '2019-02-16 17:57:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrows`
--
ALTER TABLE `arrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ellipses`
--
ALTER TABLE `ellipses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_types`
--
ALTER TABLE `image_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textboxes`
--
ALTER TABLE `textboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arrows`
--
ALTER TABLE `arrows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ellipses`
--
ALTER TABLE `ellipses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `image_types`
--
ALTER TABLE `image_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `textboxes`
--
ALTER TABLE `textboxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
