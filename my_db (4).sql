-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 11:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `actvation_request`
--

CREATE TABLE `actvation_request` (
  `id` int(11) NOT NULL,
  `user_code` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actvation_request`
--

INSERT INTO `actvation_request` (`id`, `user_code`, `created_at`, `updated_at`) VALUES
(1, 'AA11', '2022-02-14 12:09:01', '2022-02-03 07:50:02'),
(2, 'AA22', '2022-02-14 12:09:11', '2022-02-03 07:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignmentID` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `char_1` varchar(11) DEFAULT NULL,
  `char_2` varchar(11) DEFAULT NULL,
  `char_3` varchar(11) DEFAULT NULL,
  `char_4` varchar(11) DEFAULT NULL,
  `char_5` varchar(11) DEFAULT NULL,
  `char_6` varchar(11) DEFAULT NULL,
  `char_7` varchar(11) DEFAULT NULL,
  `char_8` varchar(11) DEFAULT NULL,
  `end_date` date NOT NULL,
  `start_date` date NOT NULL,
  `end_time` time NOT NULL,
  `start_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignmentID`, `teacher_id`, `char_1`, `char_2`, `char_3`, `char_4`, `char_5`, `char_6`, `char_7`, `char_8`, `end_date`, `start_date`, `end_time`, `start_time`) VALUES
(14, 2, 'D', 'C', 'K', '', '', '', '', '', '2022-02-18', '2022-02-15', '10:23:00', '14:28:00'),
(15, 2, 'G', '', '', '', '', 'H', '', '', '2022-02-16', '2022-02-15', '12:27:00', '11:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `pupils`
--

CREATE TABLE `pupils` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `user_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pupils`
--

INSERT INTO `pupils` (`id`, `firstname`, `lastname`, `phonenumber`, `status`, `user_code`) VALUES
(14, 'Anita ', 'Kiconco', '0779888555', 'inactive', 'AA11'),
(15, 'Andrew', 'Chela', '0772780837', 'active', 'AA12'),
(16, 'jeff', 'Gabi', '0771210855', 'active', 'AA13'),
(17, 'masuba', 'abdqadir', '0701522342', 'active', 'AA14'),
(18, 'andrew', 'che', '256706257032', 'active', '1234'),
(19, 'Mukisa', 'Roger', '078768767', 'active', 'AA15');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `assignmentID` int(11) NOT NULL,
  `user_code` varchar(11) NOT NULL,
  `average` int(11) NOT NULL,
  `teacher_comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `assignmentID`, `user_code`, `average`, `teacher_comment`) VALUES
(9, 15, 'AA11', 46, NULL),
(10, 15, 'AA15', 43, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `role` enum('teacher','admin') NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `qualification` varchar(225) DEFAULT NULL,
  `join_date` date NOT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `district` varchar(15) DEFAULT NULL,
  `country` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `role`, `gender`, `dob`, `mobile`, `qualification`, `join_date`, `experience`, `username`, `email`, `password`, `district`, `country`) VALUES
(1, 'balayo musa', 'admin', 'male', '2000-01-03', '0771210855', '2 years', '2019-01-09', '3years', 'musa', 'musa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'sironko', 'Uganda'),
(2, 'mukis fazil', 'teacher', 'male', '2000-03-22', '0782881081', '', '2007-02-22', '', 'sim', 'masubaabdq@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'busia', 'uganda'),
(4, 'munira shami', 'teacher', 'female', '1989-12-28', '0782881081', 'non', '2019-12-20', 'non', 'shami', 'shami@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'kangurumila', 'uganda'),
(5, 'namisi Fred', 'teacher', 'male', '1980-09-05', '0782881081', 'qualified teacher', '2022-02-02', '3years', 'namisi', 'fred@gmail', 'fac06157a65f5dd925ab6b03a17f3e86', 'wakiso', 'uganda'),
(6, '', 'teacher', 'male', '0000-00-00', '', '', '0000-00-00', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(7, 'mukis fazil', 'teacher', 'male', '2022-02-02', '0782881081', 'non', '2022-02-11', '3years', 'kim', 'masubaabdq@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'kangurumila', 'uganda'),
(8, 'mukis fazil', 'teacher', 'male', '2022-02-02', '0782881081', 'non', '2022-02-11', '3years', 'kim', 'masubaabdq@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'kangurumila', 'uganda'),
(9, 'masuba', 'teacher', 'male', '2000-12-25', '0782881081', 'non', '2020-03-22', '3years', 'abcd', 'masubaabdq@gmail.com', '202cb962ac59075b964b07152d234b70', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actvation_request`
--
ALTER TABLE `actvation_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignmentID`);

--
-- Indexes for table `pupils`
--
ALTER TABLE `pupils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actvation_request`
--
ALTER TABLE `actvation_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pupils`
--
ALTER TABLE `pupils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
