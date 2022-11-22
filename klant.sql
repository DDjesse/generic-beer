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
-- Table structure for table `klant`
--

CREATE TABLE `klant` (
  `ID` int(11) NOT NULL,
  `voornaam` varchar(20) NOT NULL,
  `achternaam` varchar(20) NOT NULL,
  `straat` varchar(20) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `woonplaats` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `wachtwoord` varchar(64) NOT NULL,
  `token` varchar(64) NOT NULL,
  `rol` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`ID`, `voornaam`, `achternaam`, `straat`, `postcode`, `woonplaats`, `email`, `wachtwoord`, `token`, `rol`) VALUES
(8, 'Jovan', 'Botes', '3 Pastorijelan', '8747NJ', 'Wons', 'botesjovan@gmail.com', '$2y$10$fcsMirsxii0YPQ.I6sl.j.10gYqlarTbBCEr/3/IdXWxbU706uxgK', '', 1),
(9, 'Jovan', 'Botes', 'asdfxgh', 'dsfghj', 'awet', 'dsjaghfvjh@sakhdbaf.', '$2y$10$xfEsnpo92Vo8Q697bxUtmedBol5u5hmfVXasjJjgutERAdkVTpYD6', '', 0),
(10, 'Jovan', 'Botes', '3 Pastorijelan', '6811', 'Wons', 'botesjovan@gmail.com', '$2y$10$JhUj64rYu07kiDRlWqAwW.DAPtCtq9wkjBkva7obiK0LRdkDt917.', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
