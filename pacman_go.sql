-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2021 at 10:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pacman_go`
--

-- --------------------------------------------------------

--
-- Table structure for table `polling_table`
--

CREATE TABLE `polling_table` (
  `ID` int(11) NOT NULL,
  `nickname` text NOT NULL,
  `cheer` int(11) NOT NULL,
  `jeer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `polling_table`
--

INSERT INTO `polling_table` (`ID`, `nickname`, `cheer`, `jeer`) VALUES
(1, 'aaa', 1, 0),
(2, 'aaa', 1, 0),
(3, '', 0, 1),
(4, '', 0, 1),
(5, 'bbb', 1, 0),
(6, 'awe', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `polling_table`
--
ALTER TABLE `polling_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `polling_table`
--
ALTER TABLE `polling_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
