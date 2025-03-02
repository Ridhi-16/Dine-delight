-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2025 at 11:49 AM
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
-- Table structure for table `menu_category`
--

CREATE TABLE `menu_category` (
  `id` int(10) NOT NULL,
  `dish_name` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Available',
  `created_at` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_category`
--

INSERT INTO `menu_category` (`id`, `dish_name`, `price`, `status`, `created_at`, `image`) VALUES
(1, 'Manchurian', 100, 'Available', '2025-02-25 14:17:00', '333197687manchurian.webp');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `message` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `contact`, `message`, `rating`, `status`, `created_at`, `address`) VALUES
(2, 'Ridhi ', 'ridhi@gmail.com', 9876654321, 'very good', 5, '', '2025-02-21 12:00:06', 'jalandhar'),
(3, 'siya', 'rykk@gmail.comw', 8976436792, 'good', 4, '', '2025-02-21 12:01:57', 'address'),
(4, 'purvi', 'ryk4k@gmail.com', 111, 'fdddd', 2, '', '2025-02-21 12:02:59', 'err'),
(5, 'purvi', 'ryk4k@gmail.com', 111, 'fdddd', 2, '', '2025-02-21 12:03:45', 'err'),
(6, 'diya', 'ryk4k@gmail.com', 444, 'good', 3, '', '2025-02-21 12:04:23', 'address');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_category`
--
ALTER TABLE `menu_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_category`
--
ALTER TABLE `menu_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
