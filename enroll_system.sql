-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 01:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enroll_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `ba301_schedule_list`
--

CREATE TABLE `ba301_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ba301_schedule_list`
--

INSERT INTO `ba301_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(1, 'FUNDAMENTALS OF ACCOUNTANCY', '7:00am-10:00am', 'M', '305'),
(2, 'FEASIBILITY STUDY', '10:00am-12:00am', 'M', '305'),
(3, 'PHYSICAL EDUCATION', '9:00am-11:00am', 'T', 'STICOURT');

-- --------------------------------------------------------

--
-- Table structure for table `ba302_schedule_list`
--

CREATE TABLE `ba302_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ba302_schedule_list`
--

INSERT INTO `ba302_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(1, 'FUNDAMENTALS OF ACCOUNTANCY', '1:00pm-4:00pm', 'M', '305'),
(2, 'PHYSICAL EDUCATION', '5:00pm-7:00pm', 'M', 'STICOURT'),
(3, 'FEASIBILITY STUDY', '12:00pm-3:00pm', 'T', '310');

-- --------------------------------------------------------

--
-- Table structure for table `ba402_schedule_list`
--

CREATE TABLE `ba402_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ba402_schedule_list`
--

INSERT INTO `ba402_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(0, 'ACCOUNTANCY ADVANCE', '7:00am-10:00am', 'M', '408'),
(0, 'ADVANCE FEASIBILITY STUDY', '10:00am-1:00pm', 'M', '408'),
(0, 'PHYSICAL EDUCATION', '9:00am-11:00am', 'T', 'STICOURT');

-- --------------------------------------------------------

--
-- Table structure for table `ba404_schedule_list`
--

CREATE TABLE `ba404_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ba404_schedule_list`
--

INSERT INTO `ba404_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(1, 'ACCOUNTANCY ADVANCE', '12:00pm-3:00pm', 'M', '408'),
(2, 'ADVANCE FEASIBILITY STUDY', '4:00pm-7:00pm', 'M', '410'),
(3, 'PHYSICAL EDUCATION', '12:00pm-2:00pm', 'T', 'STICOURT');

-- --------------------------------------------------------

--
-- Table structure for table `bcs301_schedule_list`
--

CREATE TABLE `bcs301_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bcs301_schedule_list`
--

INSERT INTO `bcs301_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(1, 'OBJECTED ORIENTED PROGRAMMING', '7:00am-10:00am', 'M', '308'),
(2, 'EVENT DRIVEN PROGRAMMING', '10:00am-12:00am', 'M', '308'),
(3, 'PHYSICAL EDUCATION', '7:00am-9:00am', 'T', 'STICOURT');

-- --------------------------------------------------------

--
-- Table structure for table `bcs302_schedule_list`
--

CREATE TABLE `bcs302_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bcs302_schedule_list`
--

INSERT INTO `bcs302_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(1, 'OBJECTED ORIENTED PROGRAMMING', '12:00pm-3:00pm', 'M', '308'),
(2, 'EVENT DRIVEN PROGRAMMING', '4:00pm-7:00pm', 'M', '310'),
(3, 'PHYSICAL EDUCATION', '12:00pm-2:00pm', 'T', 'STICOURT');

-- --------------------------------------------------------

--
-- Table structure for table `bcs402_schedule_list`
--

CREATE TABLE `bcs402_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bcs402_schedule_list`
--

INSERT INTO `bcs402_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(1, 'FUNDAMENTALS OF GAME DEV', '7:00am-10:00am', 'M', '405'),
(2, 'BASICS OF UNREAL ENGINE', '10:00am-1:00am', 'M', '405'),
(3, 'CAPSTONE 1', '7:00am-9:00am', 'T', '410');

-- --------------------------------------------------------

--
-- Table structure for table `bcs404_schedule_list`
--

CREATE TABLE `bcs404_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bcs404_schedule_list`
--

INSERT INTO `bcs404_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(1, 'FUNDAMENTALS OF GAME DEV', '12:00pm-3:00pm', 'M', '408'),
(2, 'BASICS OF UNREAL ENGINE', '4:00pm-7:00pm', 'M', '408'),
(3, 'CAPSTONE 1', '12:00pm-2:00pm', 'T', '410');

-- --------------------------------------------------------

--
-- Table structure for table `bt304_schedule_list`
--

CREATE TABLE `bt304_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bt304_schedule_list`
--

INSERT INTO `bt304_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(1, 'DATA STRUCTURES AND ALGORITHM', '1:00pm-3:00pm', 'M', '301'),
(2, 'OBJECT ORIENTED PROGRAMMING', '4:00pm-7:00pm', 'M', '301'),
(3, 'RIZAL LIFE AND WORKS', '1:00pm-4:00pm', 'T', '310');

-- --------------------------------------------------------

--
-- Table structure for table `bt305_schedule_list`
--

CREATE TABLE `bt305_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bt305_schedule_list`
--

INSERT INTO `bt305_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(1, 'DATA STRUCTURE AND ALGORITHM', '7:00am-9:00am', 'M', '310'),
(2, 'RIZAL LIFE AND WORKS', '9:00am-12:00am', 'M', '306'),
(3, 'OBJECT ORIENTED PROGRAMMING', '7:00am-10:00am', 'T', '310');

-- --------------------------------------------------------

--
-- Table structure for table `bt402_schedule_list`
--

CREATE TABLE `bt402_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bt402_schedule_list`
--

INSERT INTO `bt402_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(1, 'INTEROGATIVE PROGRAMMING', '12:00pm-3:00pm', 'M', '408'),
(2, 'TECHNOPRENEURSHIP', '3:00pm-6:00pm', 'M', '408'),
(3, 'PHYSICAL EDUCATION', '2:00pm-4:00pm', 'T', 'STICOURT');

-- --------------------------------------------------------

--
-- Table structure for table `bt405_schedule_list`
--

CREATE TABLE `bt405_schedule_list` (
  `ignore_ID` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bt405_schedule_list`
--

INSERT INTO `bt405_schedule_list` (`ignore_ID`, `subjects`, `time`, `day`, `room`) VALUES
(1, 'INTEROGATIVE PROGRAMMING', '7:00am-10:00am', 'M', '410'),
(2, 'TECHNOPRENEURSHIP', '1O:00am-12:00am', 'M', '410'),
(3, 'PHYSICAL EDUCATION', '9:00am-11:00am', 'T', 'STICOURT');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_pass` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_course` varchar(255) NOT NULL,
  `student_section` varchar(255) NOT NULL,
  `student_type` enum('regular','irregular') NOT NULL,
  `enrollment_status` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_pass`, `student_name`, `student_course`, `student_section`, `student_type`, `enrollment_status`, `payment_status`) VALUES
(2000123456, '2000123456', 'Angeles Tablante', 'BSIT', 'BT304', 'regular', 'ENROLLED', 'PAID'),
(2000123457, '2000123457', 'RJ Canlas', 'BSIT', 'BT304', 'regular', 'ENROLLED', 'PAID'),
(2000123458, '2000123458', 'Hermray Banaag', 'BSIT', 'BT402', 'regular', 'ENROLLED', 'PAID'),
(2000123459, '2000123459', 'Tricia Empresso', 'BSA', 'BA301', 'regular', 'ENROLLED', 'PAID'),
(2000123461, '2000123461', 'Cedrick Santos', 'BSIT', 'BT304', 'regular', 'ENROLLED', 'PAID'),
(2000123462, '2000123462', 'Christian Santos', 'BSCS', 'BCS402', 'regular', 'ENROLLED', 'PAID'),
(2000123463, '2000123463', 'Paul Jaro', 'BSIT', 'BT304', 'regular', 'ENROLLED', 'PAID'),
(2000123464, '2000123464', 'Arvie Rome', 'BSA', 'BA301', 'regular', 'ENROLLED', 'PAID'),
(2000123465, '2000123465', 'Gian Lim', 'BSCS', 'BCS402', 'regular', 'ENROLLED', 'PAID'),
(2000123466, '2000123466', 'Charles Nolasco', 'BSIT', 'BT304', 'regular', 'ENROLLED', 'PAID'),
(2000123467, '2000123467', 'Kizer Ramos', 'BSIT', 'BT304', 'regular', 'ENROLLED', 'PAID'),
(2000123468, '2000123468', 'Ferdinand Navarro', 'BSIT', 'BT405', 'regular', 'ENROLLED', 'PAID'),
(2000123470, '2000123470', 'Jeon Lim', 'BSIT', 'BT305', 'regular', 'ENROLLED', 'PAID');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ba301_schedule_list`
--
ALTER TABLE `ba301_schedule_list`
  ADD PRIMARY KEY (`ignore_ID`);

--
-- Indexes for table `ba302_schedule_list`
--
ALTER TABLE `ba302_schedule_list`
  ADD PRIMARY KEY (`ignore_ID`);

--
-- Indexes for table `ba404_schedule_list`
--
ALTER TABLE `ba404_schedule_list`
  ADD PRIMARY KEY (`ignore_ID`);

--
-- Indexes for table `bcs301_schedule_list`
--
ALTER TABLE `bcs301_schedule_list`
  ADD PRIMARY KEY (`ignore_ID`);

--
-- Indexes for table `bcs302_schedule_list`
--
ALTER TABLE `bcs302_schedule_list`
  ADD PRIMARY KEY (`ignore_ID`);

--
-- Indexes for table `bcs402_schedule_list`
--
ALTER TABLE `bcs402_schedule_list`
  ADD PRIMARY KEY (`ignore_ID`);

--
-- Indexes for table `bcs404_schedule_list`
--
ALTER TABLE `bcs404_schedule_list`
  ADD PRIMARY KEY (`ignore_ID`);

--
-- Indexes for table `bt304_schedule_list`
--
ALTER TABLE `bt304_schedule_list`
  ADD PRIMARY KEY (`ignore_ID`);

--
-- Indexes for table `bt305_schedule_list`
--
ALTER TABLE `bt305_schedule_list`
  ADD PRIMARY KEY (`ignore_ID`);

--
-- Indexes for table `bt402_schedule_list`
--
ALTER TABLE `bt402_schedule_list`
  ADD PRIMARY KEY (`ignore_ID`);

--
-- Indexes for table `bt405_schedule_list`
--
ALTER TABLE `bt405_schedule_list`
  ADD PRIMARY KEY (`ignore_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ba301_schedule_list`
--
ALTER TABLE `ba301_schedule_list`
  MODIFY `ignore_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ba302_schedule_list`
--
ALTER TABLE `ba302_schedule_list`
  MODIFY `ignore_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ba404_schedule_list`
--
ALTER TABLE `ba404_schedule_list`
  MODIFY `ignore_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bcs301_schedule_list`
--
ALTER TABLE `bcs301_schedule_list`
  MODIFY `ignore_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bcs302_schedule_list`
--
ALTER TABLE `bcs302_schedule_list`
  MODIFY `ignore_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bcs402_schedule_list`
--
ALTER TABLE `bcs402_schedule_list`
  MODIFY `ignore_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bcs404_schedule_list`
--
ALTER TABLE `bcs404_schedule_list`
  MODIFY `ignore_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bt304_schedule_list`
--
ALTER TABLE `bt304_schedule_list`
  MODIFY `ignore_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bt305_schedule_list`
--
ALTER TABLE `bt305_schedule_list`
  MODIFY `ignore_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bt402_schedule_list`
--
ALTER TABLE `bt402_schedule_list`
  MODIFY `ignore_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bt405_schedule_list`
--
ALTER TABLE `bt405_schedule_list`
  MODIFY `ignore_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000123471;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
