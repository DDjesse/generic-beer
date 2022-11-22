-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 09:17 AM
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
-- Table structure for table `particulier`
--

CREATE TABLE `particulier` (
  `ID` tinyint(4) NOT NULL,
  `voornaam` varchar(20) NOT NULL,
  `achternaam` varchar(20) NOT NULL,
  `hoeveelheid` int(8) NOT NULL,
  `email` varchar(20) NOT NULL,
  `straatnaam` varchar(20) NOT NULL,
  `woonplaats` varchar(20) NOT NULL,
  `postcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `particulier`
--

INSERT INTO `particulier` (`ID`, `voornaam`, `achternaam`, `hoeveelheid`, `email`, `straatnaam`, `woonplaats`, `postcode`) VALUES
(5, 'Frank', 'Van Vuuren', 16, 'Frankvv@hotmail.com', '4 Walstraat', 'Arnhem', '9651JJ'),
(7, 'Jovan', 'Botes', 24, 'botesjovan@gmail.com', 'Pastorijelan', 'Wons', '8747NJ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `particulier`
--
ALTER TABLE `particulier`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `particulier`
--
ALTER TABLE `particulier`
  MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
