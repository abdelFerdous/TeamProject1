-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 01, 2023 at 07:00 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuan_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tuan_database`
--

CREATE TABLE `tuan_database` (
  `id` int NOT NULL,
  `item` varchar(60) NOT NULL,
  `price` int NOT NULL,
  `role` varchar(60) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tuan_database`
--

INSERT INTO `tuan_database` (`id`, `item`, `price`, `role`, `description`) VALUES
(7, 'The Collector', 3000, 'Tank', '300 Health\r\n45 Armor\r\n5% Move Speed\r\nShipwrecker: While moving, build up Move Speed. Your next Attack discharges built up Move Speed to deal damage. If dealt by a Melee champion at top speed, the Attack also Slows the target.\r\n\r\n\'\'There\'s only one way you\'ll get this armor from me...\'\' - forgotten namesake');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tuan_database`
--
ALTER TABLE `tuan_database`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tuan_database`
--
ALTER TABLE `tuan_database`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
