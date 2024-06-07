-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 06:08 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feed`
--

-- --------------------------------------------------------

--
-- Table structure for table `fpomembers`
--

CREATE TABLE `fpomembers` (
  `Sno` int(11) NOT NULL,
  `FPOID` text DEFAULT NULL,
  `FPOName` varchar(100) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `personName` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `totalLand` bigint(20) DEFAULT NULL,
  `promotingAgency` varchar(100) DEFAULT NULL,
  `yearOfTurnover` varchar(20) DEFAULT NULL,
  `Scheme` varchar(100) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `contactNo` varchar(12) DEFAULT NULL,
  `regNo` varchar(50) DEFAULT NULL,
  `noOfFarmers` int(11) DEFAULT NULL,
  `shareCapitalMobilised` double(19,2) DEFAULT NULL,
  `businessActivities` text DEFAULT NULL,
  `totalTurnover` double(19,2) DEFAULT NULL,
  `rabiCrops` text DEFAULT NULL,
  `kharifCrops` text DEFAULT NULL,
  `zaidCrops` text DEFAULT NULL,
  `registeredOn` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `Sno` int(11) NOT NULL,
  `Id` text DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `createdOn` text DEFAULT NULL,
  `modifiedOn` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`Sno`, `Id`, `name`, `email`, `phone`, `password`, `createdOn`, `modifiedOn`) VALUES
(1, 'G1608719119', 'Sarath Gvnd', 'gvnd.sarath1996@gmail.com', '9491412788', '$2y$10$5MLy55BV3svyC6riHqpGaeLuttpKpX..DhbNzMFxVn1e.16xYM13m', '2020-12-23 03:55:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `Sno` int(11) NOT NULL,
  `Id` varchar(100) DEFAULT NULL,
  `IP` varchar(20) DEFAULT NULL,
  `loggedInDateTime` datetime DEFAULT NULL,
  `loggedOutDateTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`Sno`, `Id`, `IP`, `loggedInDateTime`, `loggedOutDateTime`) VALUES
(1, 'G1608719119', '::1', '2020-12-23 05:38:37', NULL),
(2, 'G1608719119', '::1', '2020-12-23 05:40:53', NULL),
(3, 'G1608719119', '::1', '2020-12-23 05:44:29', NULL),
(4, 'G1608719119', '::1', '2020-12-24 11:49:12', NULL),
(5, 'G1608719119', '::1', '2020-12-24 12:19:50', NULL),
(6, 'G1608719119', '::1', '2020-12-24 01:19:48', NULL),
(7, 'G1608719119', '::1', '2020-12-24 01:36:05', NULL),
(8, 'G1608719119', '::1', '2020-12-24 03:10:39', NULL),
(9, 'G1608719119', '::1', '2020-12-24 03:20:09', NULL),
(10, 'G1608719119', '::1', '2020-12-24 03:21:38', NULL),
(11, 'G1608719119', '::1', '2020-12-24 04:26:42', NULL),
(12, 'G1608719119', '::1', '2020-12-24 05:14:02', NULL),
(13, 'G1608719119', '::1', '2020-12-24 05:28:02', NULL),
(14, 'G1608719119', '::1', '2020-12-24 05:36:19', NULL),
(15, 'G1608719119', '::1', '2020-12-24 05:38:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fpomembers`
--
ALTER TABLE `fpomembers`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fpomembers`
--
ALTER TABLE `fpomembers`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
