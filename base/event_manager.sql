-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2016 at 10:55 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `em_caterer`
--

CREATE TABLE `em_caterer` (
  `id` int(11) NOT NULL,
  `caterer_name` varchar(50) NOT NULL,
  `caterer_number` varchar(15) NOT NULL,
  `caterer_email` varchar(50) NOT NULL,
  `caterer_address` varchar(1000) NOT NULL,
  `event_token` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_caterer`
--

INSERT INTO `em_caterer` (`id`, `caterer_name`, `caterer_number`, `caterer_email`, `caterer_address`, `event_token`) VALUES
(12, '', '', '', '', '3434@heywearegoingtoparty');

-- --------------------------------------------------------

--
-- Table structure for table `em_events`
--

CREATE TABLE `em_events` (
  `id` int(11) NOT NULL,
  `event_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `event_type` varchar(50) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` varchar(50) NOT NULL,
  `event_token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_events`
--

INSERT INTO `em_events` (`id`, `event_created`, `event_type`, `event_name`, `event_date`, `event_token`) VALUES
(12, '2016-07-12 20:53:37', 'Birthday', 'hey we are going to party', '2016-07-18', '3434@heywearegoingtoparty');

-- --------------------------------------------------------

--
-- Table structure for table `em_guests`
--

CREATE TABLE `em_guests` (
  `guest_id` int(11) NOT NULL,
  `guest_title1` varchar(10) NOT NULL,
  `guest_name1` varchar(50) NOT NULL,
  `guest_seats` int(11) NOT NULL,
  `guest_phone` varchar(15) NOT NULL,
  `guest_email` varchar(50) NOT NULL,
  `guest_address` varchar(1000) NOT NULL,
  `guest_notes` text NOT NULL,
  `event_token` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `em_hosts`
--

CREATE TABLE `em_hosts` (
  `id` int(11) NOT NULL,
  `host_name` varchar(50) NOT NULL,
  `host_email` varchar(20) NOT NULL,
  `host_number` varchar(15) NOT NULL,
  `host_address` varchar(140) NOT NULL,
  `event_token` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_hosts`
--

INSERT INTO `em_hosts` (`id`, `host_name`, `host_email`, `host_number`, `host_address`, `event_token`) VALUES
(12, '', '', '', '', '3434@heywearegoingtoparty');

-- --------------------------------------------------------

--
-- Table structure for table `em_notes`
--

CREATE TABLE `em_notes` (
  `id` int(11) NOT NULL,
  `event_notes` text NOT NULL,
  `event_token` varchar(32) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_notes`
--

INSERT INTO `em_notes` (`id`, `event_notes`, `event_token`, `time_stamp`) VALUES
(12, '', '3434@heywearegoingtoparty', '2016-07-12 20:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `em_user`
--

CREATE TABLE `em_user` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `em_vendors`
--

CREATE TABLE `em_vendors` (
  `id` int(11) NOT NULL,
  `vendor_type` varchar(100) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `vendor_number` varchar(15) NOT NULL,
  `vendor_email` varchar(50) NOT NULL,
  `vendor_address` varchar(1000) NOT NULL,
  `event_token` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `em_venue`
--

CREATE TABLE `em_venue` (
  `id` int(11) NOT NULL,
  `venue_name` varchar(50) NOT NULL,
  `venue_email` varchar(50) NOT NULL,
  `venue_number` varchar(15) NOT NULL,
  `venue_address` varchar(140) NOT NULL,
  `event_token` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_venue`
--

INSERT INTO `em_venue` (`id`, `venue_name`, `venue_email`, `venue_number`, `venue_address`, `event_token`) VALUES
(12, '', '', '', '', '3434@heywearegoingtoparty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `em_caterer`
--
ALTER TABLE `em_caterer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `em_events`
--
ALTER TABLE `em_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `em_guests`
--
ALTER TABLE `em_guests`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `em_hosts`
--
ALTER TABLE `em_hosts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `em_notes`
--
ALTER TABLE `em_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `em_user`
--
ALTER TABLE `em_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `em_vendors`
--
ALTER TABLE `em_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `em_venue`
--
ALTER TABLE `em_venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `em_caterer`
--
ALTER TABLE `em_caterer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `em_events`
--
ALTER TABLE `em_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `em_guests`
--
ALTER TABLE `em_guests`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `em_hosts`
--
ALTER TABLE `em_hosts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `em_notes`
--
ALTER TABLE `em_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `em_user`
--
ALTER TABLE `em_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `em_vendors`
--
ALTER TABLE `em_vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `em_venue`
--
ALTER TABLE `em_venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
