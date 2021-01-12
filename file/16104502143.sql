-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 05:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bts-campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `per_zone` varchar(100) NOT NULL,
  `per_province` varchar(100) NOT NULL,
  `per_district` varchar(100) NOT NULL,
  `per_municipality` varchar(100) NOT NULL,
  `per_wardno` varchar(100) NOT NULL,
  `temp_zone` varchar(100) NOT NULL,
  `temp_province` varchar(100) NOT NULL,
  `temp_district` varchar(100) NOT NULL,
  `temp_municipality` varchar(100) NOT NULL,
  `temp_wardno` varchar(10) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `father_contact` varchar(100) NOT NULL,
  `father_occupation` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `mother_contact` varchar(100) NOT NULL,
  `mother_occupation` varchar(200) NOT NULL,
  `guardian_name` varchar(200) NOT NULL,
  `guardian_contact` varchar(200) NOT NULL,
  `guardian_occupation` varchar(200) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `school_passed_year` varchar(20) NOT NULL,
  `school_gpa` varchar(20) NOT NULL,
  `school_English` varchar(20) NOT NULL,
  `school_science` varchar(20) NOT NULL,
  `school_math` varchar(20) NOT NULL,
  `plus2_collage_name` varchar(200) NOT NULL,
  `plus2_passed_year` varchar(20) NOT NULL,
  `plus2_gpa` varchar(20) NOT NULL,
  `plus2_English` varchar(20) NOT NULL,
  `plus2_science` varchar(20) NOT NULL,
  `plus2_math` varchar(20) NOT NULL,
  `elective` varchar(40) NOT NULL,
  `slc_gradesheet` varchar(255) NOT NULL,
  `slc_certificate` varchar(255) NOT NULL,
  `plus2_transcript` varchar(255) NOT NULL,
  `plus2_character` varchar(255) NOT NULL,
  `migration` varchar(255) NOT NULL,
  `provision` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `id` int(11) NOT NULL,
  `event` text NOT NULL,
  `date` date NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calender`
--

INSERT INTO `calender` (`id`, `event`, `date`, `created_at`, `updated_at`) VALUES
(8, 'Holiday', '2021-01-21', '2021-01-10', NULL),
(9, 'Holiday', '2021-01-12', '2021-01-10', '2021-01-10'),
(10, 'Holiday', '2021-01-26', '2021-01-10', NULL),
(11, 'jitu', '2021-01-13', '2021-01-10', NULL),
(12, 'jitu', '2021-01-20', '2021-01-10', NULL),
(13, 'asdfa', '2021-01-19', '2021-01-10', NULL),
(14, 'asdfa', '2021-01-20', '2021-01-10', NULL),
(15, 'sadf', '2021-01-14', '2021-01-10', NULL),
(16, 'asdf', '2021-01-27', '2021-01-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_and_event`
--

CREATE TABLE `news_and_event` (
  `id` int(11) NOT NULL,
  `post` mediumtext NOT NULL,
  `description` varchar(1025) NOT NULL,
  `date` date NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_and_event`
--

INSERT INTO `news_and_event` (`id`, `post`, `description`, `date`, `created_at`, `updated_at`) VALUES
(22, 'asdfa', '  asdf', '2021-01-27', '0000-00-00', NULL),
(23, 'asdf', '  asdf', '2021-01-20', '0000-00-00', NULL),
(24, 'jit', 'rana', '2021-01-28', '2021-01-10', '2021-01-10'),
(25, 'maga', '  maga', '2021-01-14', '2021-01-10', '2021-01-10'),
(26, 'asdfa', '  ds', '2021-01-28', '2021-01-10', NULL),
(27, 'asdfa', '  asdfa', '2021-01-03', '2021-01-10', '2021-01-10'),
(28, 'asd', '  asd', '0000-00-00', '2021-01-10', NULL),
(29, 'asd', '  asd', '2021-01-28', '2021-01-10', NULL),
(30, 'asdasd', '  asd', '2021-01-22', '2021-01-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` mediumtext NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `created_at`, `updated_at`) VALUES
(13, '         rana', '2021-01-10', '2021-01-10'),
(14, '    dsf', '2021-01-10', NULL),
(15, '    asdf', '2021-01-10', NULL),
(16, '    asdf', '2021-01-10', NULL),
(17, '    asdf', '2021-01-10', NULL),
(18, '    afsd', '2021-01-10', NULL),
(19, '    asdf', '2021-01-10', NULL),
(20, '    asdf', '2021-01-10', NULL),
(21, '    asdf', '2021-01-10', NULL),
(22, '    sadf', '2021-01-10', NULL),
(23, '    asdf', '2021-01-10', NULL),
(24, '    asdf', '2021-01-10', NULL),
(25, '    asdf', '2021-01-10', NULL),
(26, '    asdf', '2021-01-10', NULL),
(27, '    asdf', '2021-01-10', NULL),
(28, '    asdf', '2021-01-10', NULL),
(29, '    asdf', '2021-01-10', NULL),
(30, '    sadf', '2021-01-10', NULL),
(31, '    asdf', '2021-01-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `photo` varchar(4000) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(12, 'Capture (1).jpg', '2021-01-10', NULL),
(14, 'images.jpg', '2021-01-10', NULL),
(15, 'download.jpg', '2021-01-10', NULL),
(17, 'Sunflower-field-Fargo-North-Dakota.jpg', '2021-01-10', NULL),
(18, 'low-angle-shot-red-flower-filed-with-cloudy-sky-background_181624-17520.jpg', '2021-01-10', NULL),
(19, 'images.jpg', '2021-01-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(100) NOT NULL,
  `posted_by` int(100) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `pdf` varchar(250) DEFAULT NULL,
  `year` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `caption` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `posted_by`, `image`, `pdf`, `year`, `subject`, `faculty`, `created_at`, `updated_at`, `caption`) VALUES
(16, 6, '137289297_1207151123021493_3865626504653871214_n.jpg', 'QA for BTS.pdf', 'first', 'sdfs', 'bbs', '2021-01-10', NULL, 'asdf'),
(17, 6, '137289297_1207151123021493_3865626504653871214_n.jpg', 'QA for BTS.pdf', 'first', 'sdfs', 'bbs', '2021-01-10', NULL, 'dsfg'),
(18, 6, '137289297_1207151123021493_3865626504653871214_n (1).jpg', 'QA for BTS.pdf', 'first', 'POM', 'bbs', '2021-01-11', NULL, '  Pom notes');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(100) NOT NULL,
  `uniquecode` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `marks` varchar(15) NOT NULL,
  `faculty` varchar(15) NOT NULL,
  `year` varchar(15) NOT NULL,
  `term` varchar(15) NOT NULL,
  `posted_by` int(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `uniquecode`, `subject`, `marks`, `faculty`, `year`, `term`, `posted_by`, `created_at`, `updated_at`) VALUES
(1, 'CLS-185', 'POM', '25', 'BBS', 'first', '1', 6, '2021-01-11', NULL),
(2, 'CLS-1d5', 'POM', '25', 'BBS', 'first', '1', 6, '2021-01-11', NULL),
(3, 'CLS-14874', 'POM', '105', 'BBS', 'first', '1', 6, '2021-01-11', NULL),
(4, 'CLS-14815', 'POM', '100', 'BBS', 'first', '1', 6, '2021-01-11', NULL),
(5, 'CLS-1485', 'POM', '90', 'BBS', 'first', '1', 6, '2021-01-11', NULL),
(6, 'CLS-1485', 'POM', '80', 'BBS', 'first', '1', 6, '2021-01-11', NULL),
(7, 'CLS-1465', 'POM', 'BBS', 'first', '1', '', 6, '2021-01-11', NULL),
(8, 'CLS-1425', 'POM', '60', 'BBS', 'first', '1', 6, '2021-01-11', NULL),
(9, 'CLS-1445', 'POM', '50', 'BBS', 'first', '1', 6, '2021-01-11', NULL),
(10, 'CLS-1488', 'POM', '25', 'BBS', 'first', '1', 6, '2021-01-11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `uniquecode` varchar(50) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `dob` date NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `id` int(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(1025) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_message`
--

INSERT INTO `user_message` (`id`, `name`, `phone`, `email`, `message`, `created_at`) VALUES
(1, 'rabin', 2147483647, 'rabinbasansth@gmail.com', 'dsasdadada', NULL),
(2, 'rr', 2147483647, 'r@gmail.com', 'asdad', NULL),
(3, 'rr', 2147483647, 'rabin@gmail.com', 'asdasd', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_and_event`
--
ALTER TABLE `news_and_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news_and_event`
--
ALTER TABLE `news_and_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
