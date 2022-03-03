-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2022 at 07:56 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter4`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(100) DEFAULT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `designation` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `image`, `first_name`, `last_name`, `phone`, `email`, `designation`, `created_at`) VALUES
(22, '1638690402_2bb7539820a40334a3e5.jpg', 'malek', 'Islam', '0199999999', 'malek1@gmail.com', 'student', '2021-12-05 07:46:42'),
(16, '1638164009_90e35acfd66d2f087432.jpg', 'Anoy2', 'roy', '01655555555', 'anoy@gmail.com', 'student', '2021-11-29 04:23:09'),
(18, '1638169207_82023e633b26523fcd43.jpg', 'sagor', 'Paul', '01571311010', 'sagor1@gmail.com', 'student', '2021-11-29 06:59:32'),
(20, '1638440783_38c39fb0052ea79c5d4c.png', 'grammin', 'roy', '0157100000', 'abc211@gmail.com', 'student', '2021-12-02 06:21:03'),
(23, '1638696114_884677fb5499f342f1d4.jpg', 'malek', 'Islam', '0199999123', 'malek120@gmail.com', 'student', '2021-12-05 09:21:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
