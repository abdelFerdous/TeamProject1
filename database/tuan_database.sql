-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 28, 2023 at 04:54 PM
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
-- Database: `lolmeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `lolmeta`
--

CREATE TABLE `lolmeta` (
  `item` varchar(60) NOT NULL,
  `price` int NOT NULL,
  `role` varchar(60) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lolmeta`
--

INSERT INTO `lolmeta` (`item`, `price`, `role`, `description`) VALUES
('Frozen Heart', 2700, 'Fighter', '90 Armor\r\n400 Mana\r\n20 Ability Haste\r\n\r\nWinter\'s Caress: Reduces the Attack Speed of nearby enemies.\r\nRock Solid: Reduce incoming damage from Attacks.'),
('Icathia\'s Curse', 3200, 'Specialist', '90 Ability Power\r\n450 Health\r\n20 Ability Haste\r\n8% Omnivamp\r\n\r\nVoid Corruption: For each second damaging enemy champions, deal bonus damage. At maximum strength, the bonus damage is dealt as true damage instead.\r\n\r\nMythic Passive: Grants all other Legendary items Omnivamp and Ability Power.'),
('Mikael\'s Blessing', 2300, 'Specialist', '16% Heal and Shield Power\r\n50 Magic Resist\r\n15 Ability Haste\r\n100% Base Mana Regen\r\n\r\n\r\nActive - Purify: Restore Health and Remove all crowd control debuffs (except Knockups and Suppression) from an ally champion.'),
('Mortal Reminder', 3000, 'Marksman', '35 Attack Damage\r\n30% Armor Penetration\r\n20% Critical Strike Chance\r\n\r\nSepsis: Dealing physical damage applies 40% Grievous Wounds to enemy champions for 3 seconds.\r\n\r\nGrievous Wounds reduces the effectiveness of Healing and Regeneration effects.'),
('Thornmail', 2700, 'Marksman', '350 Health\r\n70 Armor\r\n\r\nThorns: When struck by an Attack, deal damage to the attacker and apply 40% Grievous Wounds if they are a champion.\r\n\r\nGrievous Wounds reduces the effectiveness of Healing and Regeneration effects.'),
('Upgraded Aeropack', 3200, 'Specialist', '120 Ability Power\r\n10 Magic Penetration\r\n350 Health\r\n20 Ability Haste\r\n\r\n\r\nActive - Supersonic: Dash in target direction, unleashing an arc of magic missiles that deal damage. Then, gain Move Speed towards enemy champions.\r\n\r\nMythic Passive: Grants all other Legendary items Magic Penetration.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lolmeta`
--
ALTER TABLE `lolmeta`
  ADD PRIMARY KEY (`item`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
