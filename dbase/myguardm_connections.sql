-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 04:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myguardm_connections`
--

-- --------------------------------------------------------

--
-- Table structure for table `rc_connection`
--

CREATE TABLE `rc_connection` (
  `connection_id` int(11) NOT NULL,
  `db_name` varchar(100) NOT NULL,
  `unique_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rc_connection`
--

INSERT INTO `rc_connection` (`connection_id`, `db_name`, `unique_code`) VALUES
(1, 'myguardm_myguard', 'A1b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rc_connection`
--
ALTER TABLE `rc_connection`
  ADD PRIMARY KEY (`connection_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rc_connection`
--
ALTER TABLE `rc_connection`
  MODIFY `connection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
