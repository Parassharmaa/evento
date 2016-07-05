-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2016 at 02:04 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cess_members`
--

-- --------------------------------------------------------

--
-- Table structure for table `boardm`
--

CREATE TABLE `boardm` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  `team` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fb` varchar(1000) NOT NULL,
  `linkedin` varchar(1000) NOT NULL,
  `about` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boardm`
--
ALTER TABLE `boardm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boardm`
--
ALTER TABLE `boardm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
