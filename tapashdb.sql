-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 02:22 PM
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
-- Database: `tapash`
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
(1, 'Riwaj Sir', 'This Is Just a Test.', 'web developement', '', '2023-01-18 10:10:29'),
(2, 'Riwaj Sir', 'Another expample', 'digital marketing', '', '2023-01-18 10:21:16'),
(3, 'Riwaj Sir', 'Here is the course that you request. Nikesh', 'web developement', '', '2023-01-18 11:01:51'),
(4, 'Riwaj Sir', 'This is a demo', 'teaching', '', '2023-01-18 12:43:18'),
(5, 'Riwaj Sir', 'Eat Dinner', 'digital marketing', '', '2023-01-18 12:45:31'),
(6, 'Riwaj Sir', 'This Is Just a Test.', 'teaching', '', '2023-01-18 12:47:24'),
(7, 'Riwaj Sir', 'heeelo', 'science and biology', '', '2023-01-18 12:50:32'),
(8, 'Riwaj Sir', 'you', 'digital marketing', 'payeer.png', '2023-01-18 12:53:03'),
(9, 'Riwaj Sir', 'fuck', 'science and biology', '220026_video_link-Nikesh_Uprety.pdf', '2023-01-18 12:53:20');

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
(1, 'Tapash Sharma', 'I want the pdf.', 'science and biology', '2023-01-17 19:06:48'),
(2, 'tapash', 'I want the pdf.', 'graphic design', '2023-01-17 19:06:48'),
(13, 'Nikesh', 'Tapash', 'web developement', '2023-01-18 11:00:59');

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
(18, 'Tapash Sharma', 'i.tapashsharma@gmail.com', '123', 'student'),
(19, 'Tapash Sharma', 'tapash123@gmail.com', '789', 'teacher'),
(20, 'Nikesh', 'upretynikesh021@gmail.com', '1234', 'student'),
(21, 'Riwaj Sir', 'riwajsir@gmail.com', 'riwaj', 'teacher');

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
