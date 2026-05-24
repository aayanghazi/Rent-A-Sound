-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: May 24, 2026 at 11:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentasound`
--

-- --------------------------------------------------------

--
-- Table structure for table `logsign`
--

CREATE TABLE `logsign` (
  `Name` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logsign`
--

INSERT INTO `logsign` (`Name`, `Email`, `Password`) VALUES
('Aayan', 'aayan@example.com', '$2y$10$pGOsRtJfAtvMchKG96DV8uGDiA6Hv7gdz3IepOITSQeSy09ef.B6S');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `Iname` varchar(50) NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  `Icondition` varchar(30) NOT NULL,
  `Price` int(30) NOT NULL,
  `Address` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`Iname`, `PhoneNo`, `Icondition`, `Price`, `Address`) VALUES
('Piano', 2147483647, 'Mid', 2000, 'New Bombay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logsign`
--
ALTER TABLE `logsign`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
