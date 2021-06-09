-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 11:09 AM
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
-- Database: `myguardm_myguard`
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

--
-- Dumping data for table `committee_tbl`
--

INSERT INTO `committee_tbl` (`com_id`, `residence_code`, `house_id`, `fname`, `lname`, `contact_no`, `position`) VALUES
(1, '1', 1, 'josh', 'taruc', '132346874354', 'executive'),
(3, '1', 5, 'dddd', 'aaaa', '12345', 'P.I.O');

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

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `resident_id`, `date_time`, `subject`, `comment`, `photo`, `admin_reply`, `status`, `unique_id`) VALUES
(2, 1, '2020-07-25 19:00:41', 'debugasda', 'codeasda', '712472.jpg', 'asda', 'In Progress', 0);

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

--
-- Dumping data for table `facility_booking_tbl`
--

INSERT INTO `facility_booking_tbl` (`facility_book_id`, `resident_id`, `facility_type`, `req_date`, `hr`, `min`, `time_period`, `transac_date_time`, `facility_stat`, `admin_reply`, `unique_id`) VALUES
(1, 1, 'tennis court', '2020-07-24', '3', '10', 'AM', '2020-07-22 05:23:58', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facility_tbl`
--

CREATE TABLE `facility_tbl` (
  `facility_id` int(11) NOT NULL,
  `facility_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility_tbl`
--

INSERT INTO `facility_tbl` (`facility_id`, `facility_type`) VALUES
(3, 'tennis court');

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

--
-- Dumping data for table `house_tbl`
--

INSERT INTO `house_tbl` (`house_id`, `residence_code`, `unit_no`, `block_street_no`) VALUES
(1, '1', '5', '332222'),
(5, '1', '45', '90'),
(6, '1', '123', 'sto cristo'),
(7, '1', '78', 'kkkk');

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

--
-- Dumping data for table `management_table`
--

INSERT INTO `management_table` (`id`, `username`, `password`, `residence_code`, `email`, `fname`, `lname`) VALUES
(1, 'josh', 'f94adcc3ddda04a8f34928d862f404b4', '1', 'imtaruc25@gmail.com', 'josh', 'josh'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'sample', 'admin@admin.com', 'adminfname', 'admin'),
(3, 'keithkana', '8dd9fa632ca161d0ca1929a4d99cbe77', '1', 'myguard@myguard.com', 'keith', 'kana');

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
-- Table structure for table `notification_tbl`
--

CREATE TABLE `notification_tbl` (
  `id` int(11) NOT NULL,
  `Notice_message` varchar(250) NOT NULL,
  `date_time` datetime NOT NULL,
  `unitAdd_id` int(11) NOT NULL,
  `photo` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification_tbl`
--

INSERT INTO `notification_tbl` (`id`, `Notice_message`, `date_time`, `unitAdd_id`, `photo`) VALUES
(3, '123123123', '2020-08-08 12:47:50', 12, 'ipadd.PNG');

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

--
-- Dumping data for table `request_tbl`
--

INSERT INTO `request_tbl` (`request_id`, `resident_id`, `request_date_time`, `request_type`, `comment`, `admin_reply`, `status`, `unique_id`) VALUES
(2, 1, '2020-07-22 19:49:21', 'Access Card', 'urgent\r\n', 'done', 'Resolved', 0);

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

--
-- Dumping data for table `resident_tbl`
--

INSERT INTO `resident_tbl` (`resident_id`, `house_id`, `fname`, `lname`, `contact_num`, `password`, `resident_type`) VALUES
(1, 0, 'admin', 'admin', '1234', '21232f297a57a5a743894a0e4a801fc3', 'Parent'),
(2, 2, 'jo', 'jo', '123', '674f33841e2309ffdd24c85dc3b999de', 'Tenant'),
(6, 1, 'john', 'doe', '3636363636', '202cb962ac59075b964b07152d234b70', 'Owner');

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

--
-- Dumping data for table `res_code_tbl`
--

INSERT INTO `res_code_tbl` (`residence_code`, `residence_connect`, `residence_add1`, `residence_add2`, `residence_add3`, `contact_person`, `contact_no`, `email`, `post_code`, `residence_name`, `district`, `state`) VALUES
(1, 'A1b', 'san jose', 'tarlac city', '', 'john doe', 123455, 'shangrila@email.com', 2300, 'shangrila', 'tarlac', 'u');

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
  `visitor_expected_date` date NOT NULL,
  `visitor_expected_time` time NOT NULL,
  `transaction_timestamp` datetime NOT NULL,
  `visitor_status` varchar(25) NOT NULL,
  `visitor_arrival` datetime NOT NULL,
  `visitor_type` varchar(25) NOT NULL,
  `visitor_exit` datetime NOT NULL,
  `QR_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor_mode_tbl`
--

INSERT INTO `visitor_mode_tbl` (`visitor_id`, `resident_id`, `house_id`, `visitor_mode`, `visitor_plate_num`, `visitor_name`, `visitor_contact_num`, `visitor_expected_date`, `visitor_expected_time`, `transaction_timestamp`, `visitor_status`, `visitor_arrival`, `visitor_type`, `visitor_exit`, `QR_code`) VALUES
(1, 1, 4, 'Walkin', '2536', 'josh', 99999, '2020-08-01', '12:00:00', '2020-07-23 04:07:48', '', '0000-00-00 00:00:00', 'Friend', '0000-00-00 00:00:00', ''),
(3, 0, 1, 'Walkin', '5584', 'asda', 12312313, '2020-07-31', '10:01:00', '2020-07-23 07:48:45', '', '0000-00-00 00:00:00', 'Friend', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `committee_tbl`
--
ALTER TABLE `committee_tbl`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`complain_id`);

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
-- Indexes for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_tbl`
--
ALTER TABLE `request_tbl`
  ADD PRIMARY KEY (`request_id`);

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
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facility_booking_tbl`
--
ALTER TABLE `facility_booking_tbl`
  MODIFY `facility_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facility_tbl`
--
ALTER TABLE `facility_tbl`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `house_tbl`
--
ALTER TABLE `house_tbl`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `management_table`
--
ALTER TABLE `management_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `myguard_admin`
--
ALTER TABLE `myguard_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request_tbl`
--
ALTER TABLE `request_tbl`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resident_tbl`
--
ALTER TABLE `resident_tbl`
  MODIFY `resident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `res_code_tbl`
--
ALTER TABLE `res_code_tbl`
  MODIFY `residence_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor_mode_tbl`
--
ALTER TABLE `visitor_mode_tbl`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
