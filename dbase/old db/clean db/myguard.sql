-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 04:58 PM
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
-- Database: `myguard`
--

-- --------------------------------------------------------

--
-- Table structure for table `blacklist_tb`
--

CREATE TABLE `blacklist_tb` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `vehicle_plate` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `committee_tbl`
--

CREATE TABLE `committee_tbl` (
  `com_id` int(11) NOT NULL,
  `residence_code` varchar(6) NOT NULL,
  `house_id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `admin_reply` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `unique_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facility_booking_tbl`
--

CREATE TABLE `facility_booking_tbl` (
  `facility_book_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `facility_type` varchar(255) NOT NULL,
  `req_date` date NOT NULL,
  `hr` varchar(2) NOT NULL,
  `min` varchar(2) NOT NULL,
  `time_period` varchar(2) NOT NULL,
  `transac_date_time` datetime NOT NULL,
  `facility_stat` varchar(255) NOT NULL,
  `admin_reply` varchar(255) NOT NULL,
  `unique_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facility_tbl`
--

CREATE TABLE `facility_tbl` (
  `facility_id` int(11) NOT NULL,
  `facility_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `house_tbl`
--

CREATE TABLE `house_tbl` (
  `house_id` int(11) NOT NULL,
  `residence_code` varchar(6) NOT NULL,
  `unit_no` varchar(15) NOT NULL,
  `block_street_no` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `management_table`
--

CREATE TABLE `management_table` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `residence_code` varchar(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `myguard_admin`
--

CREATE TABLE `myguard_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_tbl`
--

CREATE TABLE `request_tbl` (
  `request_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `request_date_time` datetime NOT NULL,
  `request_type` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `admin_reply` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `unique_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resident_tbl`
--

CREATE TABLE `resident_tbl` (
  `resident_id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `contact_num` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `resident_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `res_code_tbl`
--

CREATE TABLE `res_code_tbl` (
  `residence_code` int(11) NOT NULL,
  `residence_connect` varchar(255) NOT NULL,
  `residence_add1` varchar(255) NOT NULL,
  `residence_add2` varchar(255) NOT NULL,
  `residence_add3` varchar(255) NOT NULL,
  `contact_person` varchar(25) NOT NULL,
  `contact_no` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `post_code` int(5) NOT NULL,
  `residence_name` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visitor_mode_tbl`
--

CREATE TABLE `visitor_mode_tbl` (
  `visitor_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `visitor_mode` varchar(25) NOT NULL,
  `visitor_plate_num` varchar(10) NOT NULL,
  `visitor_name` varchar(255) NOT NULL,
  `visitor_contact_num` int(11) NOT NULL,
  `visitor_ETA` datetime NOT NULL,
  `transaction_timestamp` datetime NOT NULL,
  `visitor_status` varchar(25) NOT NULL,
  `visitor_arrival` datetime NOT NULL,
  `visitor_type` varchar(25) NOT NULL,
  `visitor_exit` datetime NOT NULL,
  `QR_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `committee_tbl`
--
ALTER TABLE `committee_tbl`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `facility_booking_tbl`
--
ALTER TABLE `facility_booking_tbl`
  ADD PRIMARY KEY (`facility_book_id`),
  ADD UNIQUE KEY `facility_book_id` (`facility_book_id`,`unique_id`);

--
-- Indexes for table `facility_tbl`
--
ALTER TABLE `facility_tbl`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `house_tbl`
--
ALTER TABLE `house_tbl`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `management_table`
--
ALTER TABLE `management_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myguard_admin`
--
ALTER TABLE `myguard_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `resident_tbl`
--
ALTER TABLE `resident_tbl`
  ADD PRIMARY KEY (`resident_id`);

--
-- Indexes for table `res_code_tbl`
--
ALTER TABLE `res_code_tbl`
  ADD PRIMARY KEY (`residence_code`);

--
-- Indexes for table `visitor_mode_tbl`
--
ALTER TABLE `visitor_mode_tbl`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `committee_tbl`
--
ALTER TABLE `committee_tbl`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facility_booking_tbl`
--
ALTER TABLE `facility_booking_tbl`
  MODIFY `facility_book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facility_tbl`
--
ALTER TABLE `facility_tbl`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `house_tbl`
--
ALTER TABLE `house_tbl`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `management_table`
--
ALTER TABLE `management_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myguard_admin`
--
ALTER TABLE `myguard_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_tbl`
--
ALTER TABLE `resident_tbl`
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `res_code_tbl`
--
ALTER TABLE `res_code_tbl`
  MODIFY `residence_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_mode_tbl`
--
ALTER TABLE `visitor_mode_tbl`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
