-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 03:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_adress` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email_adress`, `password`, `is_admin`) VALUES
(4, 'adnan', 'bouthir', 'adnanbouthir@gmail.com', '$2y$10$wFqdhbSlUOF9oIZf6JDnq.kw14d26EZ4Z2TXZ3uXl2JLEhtdg22eG', 1),
(7, 'youssef', 'bhl', 'bhl@gmail.com', '$2y$10$yYjowu9hO8IsdymN8OikY.cfVEw3kWbXY/jljGALj3eSBkg1yzryy', 1),
(8, 'Youssef', 'DIOUANI', 'diouani@gmail.com', '$2y$10$MyjZaPeMQEaHQ/n.4NCnB.n2zsaOrqfwL.Ie9c2zzXxxbcLbJPoaW', 1),
(9, 'adam', 'bou', 'adam@gmail.com', '$2y$10$1s9W4yRXdVLyqtl9jEJ3quVPb1DsyccmYguR/32Hh9WTuRp3BCp92', 1),
(10, 'test', 'admin', 'admin@gmail.com', '$2y$10$9pM5W46EkdYYJMsacBjrI.WZWehC0UsSiRJckseagnaR6rcyNLcky', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `job` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `first_name`, `last_name`, `gender`, `job`, `adress`, `phone`, `student_id`) VALUES
(7, 'abdelaziz', 'bouthir', 'male', 'retired', '89 amerchich marrakech', '0661581818', 16),
(9, 'mohamed', 'nassifi', 'male', 'butcher', 'SYBA 35', '747379302', 19);

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`id`, `first_name`, `last_name`, `gender`, `Class`, `subject`, `phone`) VALUES
(1, 'Youssef', 'Ouadid', 'male', 'NAMEK', 'fullstack dev', '0663368386'),
(2, 'bouchra', 'marzak', 'female', 'JAVA', 'java/jee', '0663368386'),
(3, 'Youssef', 'Chouni', 'male', 'storm troopers', 'fullstack dev', '0663368386');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `parents` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `teacher` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `gender`, `class`, `parents`, `adress`, `date_of_birth`, `email`, `teacher`) VALUES
(16, 'adnan', 'bouthir', 'male', 'NAMEK', '', '89 amerchich marrakech', '1998-10-04', 'adnanbouthir@gmail.com', 1),
(17, 'youssef', 'DIOUANI', 'male', 'NAMEK', '', 'casa', '1996-09-12', 'diouani.youssef@gmail.com', 1),
(19, 'hakim', 'nasifi', 'male', 'JAVA', '', 'SYBA', '1996-12-24', 'hakim@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_parent_student` (`student_id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `fk_parent_student` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
