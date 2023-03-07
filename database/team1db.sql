-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 07, 2023 at 10:55 AM
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
-- Database: `team1db`
--

-- --------------------------------------------------------

--
-- Table structure for table `georgii_fav_skins`
--

CREATE TABLE `georgii_fav_skins` (
  `entryID` int NOT NULL,
  `skinID` int DEFAULT NULL,
  `userID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `georgii_skins`
--

CREATE TABLE `georgii_skins` (
  `id` int NOT NULL,
  `champ` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cost` int NOT NULL,
  `showcase` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(27, 'EditTesting', '56hyrhyy5tnytntdy5tndt5yhtnt', 'Shadow Isles', 'Demacia', 'micoteg@gmail.com'),
(28, 'Testing', 'egevnuagj;kvmqbtegjwnlkbgftr', 'Bilgewater', 'Demacia', 'micoteg@gmail.com'),
(29, 'EditTesting2', 'egevnuagj;kvmqbtegjwnlkbgftr', 'Bilgewater', 'Shurima', 'micoteg@gmail.com');

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
(9, 'Ball', 12, 'Support', 'y65ter');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `georgii_fav_skins`
--
ALTER TABLE `georgii_fav_skins`
  ADD PRIMARY KEY (`entryID`),
  ADD KEY `FK_skinid` (`skinID`),
  ADD KEY `FK_userid` (`userID`);

--
-- Indexes for table `georgii_skins`
--
ALTER TABLE `georgii_skins`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `georgii_fav_skins`
--
ALTER TABLE `georgii_fav_skins`
  MODIFY `entryID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `georgii_skins`
--
ALTER TABLE `georgii_skins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matt_decks`
--
ALTER TABLE `matt_decks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tuan_database`
--
ALTER TABLE `tuan_database`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `georgii_fav_skins`
--
ALTER TABLE `georgii_fav_skins`
  ADD CONSTRAINT `FK_skinid` FOREIGN KEY (`skinID`) REFERENCES `georgii_skins` (`id`),
  ADD CONSTRAINT `FK_userid` FOREIGN KEY (`userID`) REFERENCES `userinfo` (`userid`);

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `id` FOREIGN KEY (`userid`) REFERENCES `tuan_database` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `matt_decks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
