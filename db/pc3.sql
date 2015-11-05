-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2015 at 09:59 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc3`
--
CREATE DATABASE IF NOT EXISTS `pc3` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pc3`;

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE IF NOT EXISTS `laptops` (
  `laptop_id` int(11) NOT NULL,
  `laptop_name` varchar(50) NOT NULL,
  `model_no` int(20) NOT NULL,
  `screen_size` int(20) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `hard_drive` int(20) NOT NULL,
  `ram_size` int(20) NOT NULL,
  `graphics` varchar(50) NOT NULL,
  `audio` varchar(50) NOT NULL,
  `webcam` varchar(50) NOT NULL,
  `integrated_wifi` varchar(50) NOT NULL,
  `power` varchar(50) NOT NULL,
  `warranty` int(20) NOT NULL,
  `date_reg` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`laptop_id`, `laptop_name`, `model_no`, `screen_size`, `processor`, `hard_drive`, `ram_size`, `graphics`, `audio`, `webcam`, `integrated_wifi`, `power`, `warranty`, `date_reg`) VALUES
(1, 'accer', 2001, 13, 'intel core', 250, 2, 'no', 'yes', 'no', 'no', 'up to 2 hours', 2, ''),
(2, 'alien', 2008, 15, 'intel 7 ', 1000, 8, 'amd graphics', '5 watts, 3.5mm', 'yes', 'yes', 'upto 4hours', 2, ''),
(3, 'hp', 2010, 13, 'intel duel core', 500, 4, 'intel hd', '2 watts', '1.7 vga', 'yes', 'upto 2hours', 1, ''),
(4, 'dell', 2010, 17, 'intel 7', 500, 8, 'yes', 'yes', 'yes', 'yes', 'upto 7', 2, ''),
(5, 'dell', 2006, 15, 'Intel Quad-Core Pentium N3540 (2.2 GHz)', 750, 8, 'Intel UMA', '2 W', 'yes', '802.11BGN', 'Up to 4 Hours', 1, ''),
(6, 'hp', 2010, 15, 'Intel Quad-Core Pentium N3540 (2.2 GHz)', 1000, 8, 'Intel AMD', '5 W', 'yes', '802.11BGN', 'Up to 4 Hours', 2, ''),
(7, 'Accer', 1999, 15, 'intel pentium IV', 500, 8, 'yes', 'yes', 'yes', 'yes', 'upto 8 hours', 2, '04/07/2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`laptop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `laptop_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
