-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2025 at 03:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` longtext NOT NULL,
  `message` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'sent',
  `created_at` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `rating` int(5) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `contact`, `address`, `message`, `status`, `created_at`, `rating`, `email`) VALUES
(1, 'ridhi', 345566, 'jal', 'yuuijjjjjjjjjjjjjjjjjjjjj', 'sent', 'current_timestamp()', 5, 'ghhjj@gmail.com'),
(2, 'purvi', 99999999, 'jal', '', 'sent', '2025-02-14 19:07:43', 4, 'ryk4k@gmail.com'),
(9, 'Ridhi ', 999999999, 'jalandhar', 'excellent service', 'sent', '2025-02-14 19:29:35', 5, 'ridhi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
