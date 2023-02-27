-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 27, 2023 at 12:17 PM
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
  `item` varchar(60) NOT NULL,
  `role` varchar(60) NOT NULL,
  `price` int NOT NULL,
  `description` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tuan_database`
--

INSERT INTO `tuan_database` (`item`, `role`, `price`, `description`) VALUES
('ADC', 'Guom vua vo danh', 3300, 'sadadswadwwasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tuan_database`
--
ALTER TABLE `tuan_database`
  ADD PRIMARY KEY (`item`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
