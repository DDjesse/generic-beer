-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 03:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentic beer`
--

-- --------------------------------------------------------

--
-- Table structure for table `bzak`
--

CREATE TABLE `bzak` (
  `ID` int(8) NOT NULL,
  `voornaam` varchar(20) NOT NULL,
  `achternaam` varchar(20) NOT NULL,
  `straatnaam` varchar(20) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `woonplaats` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hoeveelheid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bzak`
--

INSERT INTO `bzak` (`ID`, `voornaam`, `achternaam`, `straatnaam`, `postcode`, `woonplaats`, `email`, `hoeveelheid`) VALUES
(1, 'De', 'Walrus', '26 Sneek', '8524SS', 'Sneek', 'dewalrussneek@gmail.com', 1000),
(2, 'De', 'Walrus', '26 Sneek', '8524SS', 'Sneek', 'dewalrussneek@gmail.com', 100),
(3, 'De', 'Walrus', '26 Sneek', '8524SS', 'Sneek', 'dewalrussneek@gmail.com', 100),
(4, 'De', 'Walrus', '26 Sneek', '8524SS', 'Sneek', 'dewalrussneek@gmail.com', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bzak`
--
ALTER TABLE `bzak`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bzak`
--
ALTER TABLE `bzak`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
