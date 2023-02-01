-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 07:05 PM
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
-- Database: `cwfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `created_at`
--

CREATE TABLE `created_at` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `created_at`
--

INSERT INTO `created_at` (`id`, `name`, `course`, `content`, `file`, `created_at`) VALUES
(1, 'Ram Sharma', 'I have delivered the content to you, Tapash', 'web developement', 'OWASP_Top10', '2023-01-18 19:08:29');
-- --------------------------------------------------------

--
-- Table structure for table `req_course`
--

CREATE TABLE `req_course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `req_course`
--

INSERT INTO `req_course` (`id`, `name`, `content`, `course_name`, `created_at`) VALUES
(1, 'Tapash Sharma', 'Document about Database Management', 'web development', '2023-01-18 19:06:48'),
(2, 'Tapash Sharma', 'Please give me a course for Web Development', 'web development', '2023-01-18 19:06:48'); 

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `Id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`Id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Tapash Sharma', 'tapash@gmail.com', '12345', 'student'),
(2, 'Ram Sharma' , 'ram@gmail.com', '123456', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `created_at`
--
ALTER TABLE `created_at`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_course`
--
ALTER TABLE `req_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `created_at`
--
ALTER TABLE `created_at`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `req_course`
--
ALTER TABLE `req_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
