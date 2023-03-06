-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 06, 2023 at 09:09 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `tuan_database`
--

CREATE TABLE `tuan_database` (
  `userid` int NOT NULL,
  `id` int NOT NULL,
  `item` varchar(60) NOT NULL,
  `price` int NOT NULL,
  `role` varchar(60) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tuan_database`
--

INSERT INTO `tuan_database` (`userid`, `id`, `item`, `price`, `role`, `description`) VALUES
(0, 7, 'The Collector', 3000, 'Tank', '300 Health\r\n45 Armor\r\n5% Move Speed\r\nShipwrecker: While moving, build up Move Speed. Your next Attack discharges built up Move Speed to deal damage. If dealt by a Melee champion at top speed, the Attack also Slows the target.\r\n\r\n\'\'There\'s only one way you\'ll get this armor from me...\'\' - forgotten namesake');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `fname`, `lname`, `username`, `email`, `phone`, `password`) VALUES
(1, 'testfname', 'testlname', 'registrationdb', 'example@gmail.com', '0038829382', 'password'),
(2, '', '', 'registrationdb', 'daljsf', '', 'password'),
(3, '', '', 'registrationdb', 'daljsf', '', 'password'),
(4, '', '', 'registrationdb', 'gdfgdf', '', 'password'),
(5, 'Matt', 'Flores', 'matt_database', 'micoteg@gmail.com', '0415716501', 'password');

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
-- Indexes for table `tuan_database`
--
ALTER TABLE `tuan_database`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matt_decks`
--
ALTER TABLE `matt_decks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tuan_database`
--
ALTER TABLE `tuan_database`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
