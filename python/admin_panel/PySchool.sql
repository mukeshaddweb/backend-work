-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2021 at 02:26 PM
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
-- Database: `PySchool`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` varchar(200) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `student_email` varchar(200) NOT NULL,
  `student_branch` varchar(200) NOT NULL,
  `student_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_email`, `student_branch`, `student_password`) VALUES
('1', 'mukesh', 'mukesh123@gmail.com', 'cs', '123'),
('2', 'mansi dabbi', 'dabbi123@gmail.com', 'chemical', '1234'),
('3', 'aditya', 'aditya123@gmail.com', 'civil', '123'),
('4', 'vinit', 'vinit123@gmail.com', 'civil', '123'),
('5', 'nikhil', 'nikhil123@gmail.com', 'cs', '123'),
('6', 'lokesh', 'lokesh123@gmail.com', 'cs', '123'),
('7', 'himanshu', 'himanshu123@gmail.com', 'cs', '123'),
('8', 'anjani', 'anjani123@gmail.com', 'chemical', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
