-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 03:57 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g_s_e`
--

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_id` int(3) UNSIGNED NOT NULL,
  `exam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam`) VALUES
(1, 'Class I'),
(2, 'Class II'),
(3, 'Class III');

-- --------------------------------------------------------

--
-- Table structure for table `exam_city`
--

CREATE TABLE `exam_city` (
  `city_no` int(3) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_city`
--

INSERT INTO `exam_city` (`city_no`, `city`) VALUES
(1, 'Colombo'),
(5, 'Kandy'),
(7, 'Galle'),
(8, 'Matara'),
(10, 'Jaffna'),
(11, 'Mannar'),
(12, 'Mullaitivu'),
(14, 'Trincomalee'),
(15, 'Batticaloa'),
(18, 'Kurunegala'),
(19, 'Anuradhapura'),
(21, 'Badulla'),
(24, 'Ratnapura'),
(25, 'Kilinochchi');

-- --------------------------------------------------------

--
-- Table structure for table `exam_subject`
--

CREATE TABLE `exam_subject` (
  `subject_id` int(3) UNSIGNED NOT NULL,
  `subjects` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_subject`
--

INSERT INTO `exam_subject` (`subject_id`, `subjects`) VALUES
(1, 'Office Systems'),
(2, 'Accounting Systems'),
(3, 'Computer Test'),
(4, 'General Administration and Financial Systems'),
(5, 'Library Organization'),
(6, 'Institution Staff and Procedural rules'),
(7, 'Public Financial Management'),
(8, 'Developments'),
(9, 'Office Systems and Procedures'),
(10, 'Methods Used in Government Offices'),
(11, 'Question Paper I'),
(12, 'Question Paper II');

-- --------------------------------------------------------

--
-- Table structure for table `exam_tm_table`
--

CREATE TABLE `exam_tm_table` (
  `exam_tm_id` int(2) UNSIGNED NOT NULL,
  `app_start_date` datetime NOT NULL DEFAULT '2017-01-01 00:00:00',
  `app_end_date` datetime NOT NULL DEFAULT '2017-01-31 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `first_time`
--

CREATE TABLE `first_time` (
  `eb_id` int(6) UNSIGNED NOT NULL,
  `officer_type` int(2) NOT NULL,
  `exam_city` int(2) NOT NULL,
  `medium` tinyint(1) NOT NULL,
  `service` tinyint(1) NOT NULL,
  `eb` int(3) NOT NULL,
  `nic` varchar(13) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postal_city` varchar(20) NOT NULL,
  `subject_id` int(3) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_time`
--

INSERT INTO `first_time` (`eb_id`, `officer_type`, `exam_city`, `medium`, `service`, `eb`, `nic`, `name`, `address`, `postal_city`, `subject_id`, `gender`, `time`) VALUES
(1, 1, 1, 2, 1, 1, '123V', 'THARINDU', 'NIT', 'NIT', 1, 0, '2017-01-04 04:11:44'),
(2, 1, 1, 2, 1, 1, 'TEST', 'TEST', 'TEST', 'TEST', 1, 0, '2017-01-09 09:45:43'),
(3, 2, 1, 3, 2, 1, 'TEST 1', 'TEST 1', 'TEST 1', 'TEST 1', 2, 0, '2017-01-13 06:59:27'),
(4, 5, 24, 2, 4, 1, '123', 'TEST3', 'TEST3', 'TEST3', 2, 1, '2017-01-13 17:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `second_over`
--

CREATE TABLE `second_over` (
  `eb_id` int(6) UNSIGNED NOT NULL,
  `officer_type` tinyint(1) NOT NULL,
  `exam_city` int(2) NOT NULL,
  `medium` tinyint(1) NOT NULL,
  `service` tinyint(1) NOT NULL,
  `eb` int(2) NOT NULL,
  `nic` varchar(13) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postal_city` varchar(3) NOT NULL,
  `subject_id` int(3) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `svc_id` int(2) UNSIGNED NOT NULL,
  `service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`svc_id`, `service`) VALUES
(1, 'Public Management Assistant Service'),
(2, 'Development Officer Service'),
(3, 'Government Translator Service'),
(4, 'Sri lanka Librarian Service');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exam_city`
--
ALTER TABLE `exam_city`
  ADD PRIMARY KEY (`city_no`);

--
-- Indexes for table `exam_subject`
--
ALTER TABLE `exam_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `exam_tm_table`
--
ALTER TABLE `exam_tm_table`
  ADD PRIMARY KEY (`exam_tm_id`);

--
-- Indexes for table `first_time`
--
ALTER TABLE `first_time`
  ADD PRIMARY KEY (`eb_id`),
  ADD KEY `service` (`service`),
  ADD KEY `service_2` (`service`),
  ADD KEY `exam_city` (`exam_city`),
  ADD KEY `medium` (`medium`),
  ADD KEY `eb` (`eb`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `officer_type` (`officer_type`);

--
-- Indexes for table `second_over`
--
ALTER TABLE `second_over`
  ADD PRIMARY KEY (`eb_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`svc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `exam_subject`
--
ALTER TABLE `exam_subject`
  MODIFY `subject_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `exam_tm_table`
--
ALTER TABLE `exam_tm_table`
  MODIFY `exam_tm_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `first_time`
--
ALTER TABLE `first_time`
  MODIFY `eb_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `second_over`
--
ALTER TABLE `second_over`
  MODIFY `eb_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `svc_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
