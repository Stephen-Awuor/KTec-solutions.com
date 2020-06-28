-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 04:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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

--
-- Dumping data for table `client_message`
--

INSERT INTO `client_message` (`id`, `Name`, `Email`, `Phone`, `Company`, `Subject`, `Message`, `Date_created`) VALUES
(1, 'STEPHEN OCHIENG  AWUOR', 'sawuor@brookhouse.ac.ke', '0729952303', 'BROOKHOUSE', 'Quote', 'Get me the quote for networking', '2020-04-27 21:14:42'),
(2, 'STEPHEN OCHIENG  AWUOR', 'sawuor@brookhouse.ac.ke', '0770985233', 'KCB', 'appreciation', 'hwdjww', '2020-05-03 17:21:46'),
(3, 'STEPHEN OCHIENG ', 'stevekaneya@gmail.com', '072995230303', 'BROOKHOUSE', 'test', 'adVDV ', '2020-05-03 17:22:12'),
(4, 'STEPHEN OCHIENG  AWUOR', 'sawuor@brookhouse.ac.ke', '0726116884', 'BROOKHOUSE', 'test', 'xcasc', '2020-05-03 17:26:20'),
(5, 'STEPHEN OCHIENG  AWUOR', 'sawuor@brookhouse.ac.ke', '0729952303', 'BROOKHOUSE', 'test', 'sdcqewekcfq', '2020-05-03 17:26:43'),
(6, 'STEPHEN OCHIENG  AWUOR', 'sawuor@brookhouse.ac.ke', '0729952303', 'BROOKHOUSE', 'test', 'whdqedfikbcfwe', '2020-05-03 17:27:03');

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
(1, 'STEPHEN', 'AWUOR', 'BROOKHOUSE', 'sawuor@brookhouse.ac.ke', 'steve kaneya', '$2y$10$jfy1gmd3iQzZIY7sdCtXLOG9QC7k6VbuPG.a.t43sCy1ULFyv3vVe', '2020-04-26 16:40:28'),
(2, 'Fred', 'AWUOR', 'KCB', 'fredawuor@brookhouse.ac.ke', 'Freddy', '$2y$10$cHMWNPikHAXJ1NoCslPaDeK22e5ro6x3zT3dtHe7sO22CLWVgj1Ru', '2020-04-28 21:49:10');

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
  `Transaction_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `Service_type`, `Payment_mode`, `Cheque_no`, `Amount`, `Mpesa_code`, `Client_name`, `Transaction_date`) VALUES
(1, 'Select Service', 'cash', 'NA', '2000000', 'NA', 'STEPHEN OCHIENG  AWUOR', '2020-05-03 19:32:28'),
(2, 'Select Service', 'cash', 'NA', '2000000', 'NA', 'Fred AWUOR', '2020-05-03 19:33:09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
