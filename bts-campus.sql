-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 09:14 AM
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
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

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
  `faculty` varchar(20) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(100) NOT NULL,
  `uniquecode` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `full_marks` varchar(10) NOT NULL,
  `pass_marks` varchar(10) NOT NULL,
  `marks` varchar(15) NOT NULL,
  `faculty` varchar(15) NOT NULL,
  `year` varchar(15) NOT NULL,
  `term` varchar(15) NOT NULL,
  `posted_by` int(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `batch` varchar(20) NOT NULL,
  `payment` varchar(20) NOT NULL DEFAULT 'no',
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
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_and_event`
--
ALTER TABLE `news_and_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
