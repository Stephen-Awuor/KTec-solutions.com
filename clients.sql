-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 09:12 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clients`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_message`
--

CREATE TABLE `client_message` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_portal_user_register`
--

CREATE TABLE `client_portal_user_register` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_portal_user_register`
--

INSERT INTO `client_portal_user_register` (`id`, `fname`, `lname`, `company`, `email`, `username`, `password`, `Date_created`) VALUES
(1, 'Steve', 'Kaneya', 'Brooks', 'stevekaneya@gmail.com', 'steve kaneya', '$2y$10$OqsvDjaeW3sMxy.pxPByJewir2Si297CqQRgWJkUNQJjddx5vTTS2', '2020-06-27 21:28:55'),
(2, 'Fred', 'Awuor', 'KBS', 'fredawuor@gmail.com', 'Freddy', '$2y$10$swOWuhLcDyD.RsKY1GEc7eW5Xt1nPPp8yA1FQw9gjXcA.yEx0Gp1q', '2020-06-27 22:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `footer_message`
--

CREATE TABLE `footer_message` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` tinytext NOT NULL,
  `Date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `Service_type` varchar(50) NOT NULL,
  `Payment_mode` varchar(50) NOT NULL,
  `Cheque_no` varchar(50) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `Mpesa_code` varchar(50) NOT NULL,
  `Client_name` varchar(50) NOT NULL,
  `Transaction_date` datetime DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `Service_type`, `Payment_mode`, `Cheque_no`, `Amount`, `Mpesa_code`, `Client_name`, `Transaction_date`, `user_id`) VALUES
(1, 'Networks', 'cash', 'NA', '200000', 'LWELELELELE', 'AWUOR AWUOR', '2020-06-27 20:19:21', 1),
(2, 'Networks', 'cash', 'NA', '200000', 'LWELELELELE', 'AWUOR AWUOR', '2020-06-27 20:19:56', 1),
(3, 'Networks', 'cash', 'NA', '200000', 'LWELELELELE', 'AWUOR AWUOR', '2020-06-27 22:06:29', 1),
(4, 'Cloud Services', 'cash', 'NA', '200000', 'LWELELELELE', 'Fred 1', '2020-06-27 22:08:27', 2),
(5, 'CCTV', 'cash', 'NA', '200000', 'LWELELELELE', 'Fred2', '2020-06-27 22:08:47', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_message`
--
ALTER TABLE `client_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_portal_user_register`
--
ALTER TABLE `client_portal_user_register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `footer_message`
--
ALTER TABLE `footer_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_message`
--
ALTER TABLE `client_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_portal_user_register`
--
ALTER TABLE `client_portal_user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer_message`
--
ALTER TABLE `footer_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
