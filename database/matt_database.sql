-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 24, 2023 at 08:34 AM
-- Server version: 8.0.32
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matt_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `matt_decks`
--

CREATE TABLE `matt_decks` (
  `id` int NOT NULL,
  `deckName` varchar(30) NOT NULL,
  `deckCode` varchar(120) NOT NULL,
  `region1` varchar(15) NOT NULL,
  `region2` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `matt_decks`
--

INSERT INTO `matt_decks` (`id`, `deckName`, `deckCode`, `region1`, `region2`, `email`) VALUES
(16, 'Testing', '56hyrhyy5tnytntdy5tndt5yhtnt', 'Demacia', 'Runeterra', 'micoteg@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matt_decks`
--
ALTER TABLE `matt_decks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deckName` (`deckName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matt_decks`
--
ALTER TABLE `matt_decks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
