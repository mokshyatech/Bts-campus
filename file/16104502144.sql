-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 04:57 AM
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
-- Database: `bts`
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

  `school_name` varchar(200) not null,
  `school_passed_year` varchar(20)not  null,
  `school_gpa` varchar(20) not  null, 
  `school_English` varchar(20) not null, 
  `school_science` varchar(20) not  null, 
  `school_math` varchar(20)not  null, 

   `plus2_collage_name` varchar(200) not  null,
  `plus2_passed_year` varchar(20)not null,
  `plus2_gpa` varchar(20)not null, 
  `plus2_English` varchar(20)not null, 
  `plus2_science` varchar(20)not  null, 
  `plus2_math` varchar(20)not  null, 
  `elective` varchar(40) not null, 
  
 
  `slc_gradesheet` varchar(255) NOT NULL,
  `slc_certificate` varchar(255) NOT NULL,
  `plus2_transcript` varchar(255) NOT NULL, 
  `plus2_character` varchar(255) NOT NULL, 
  `migration` varchar(255) NOT NULL, 
  `provision` varchar(255) NOT NULL, 
  `citizenship` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_school`
--


--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_school`
--
ALTER TABLE `admissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
