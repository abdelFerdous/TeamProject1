-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 06, 2023 at 01:33 PM
-- Server version: 8.0.30
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

--
-- Dumping data for table `georgii_fav_skins`
--

INSERT INTO `georgii_fav_skins` (`entryID`, `skinID`, `userID`) VALUES
(1, 1, 5),
(3, 1, 5),
(4, 1, 5),
(5, 1, 5),
(6, 1, 5),
(7, 1, 5),
(8, 1, 5),
(9, 1, 5);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `georgii_fav_skins`
--
ALTER TABLE `georgii_fav_skins`
  MODIFY `entryID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `georgii_fav_skins`
--
ALTER TABLE `georgii_fav_skins`
  ADD CONSTRAINT `FK_skinid` FOREIGN KEY (`skinID`) REFERENCES `georgii_skins` (`id`),
  ADD CONSTRAINT `FK_userid` FOREIGN KEY (`userID`) REFERENCES `userinfo` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
