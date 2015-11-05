-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 06, 2015 at 07:57 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pc3`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--



INSERT INTO `pc3`.`laptops` (`laptop_id`, `laptop_name`, `model_no`, `screen_size`, `processor`, `hard_drive`, `ram_size`, `graphics`, `audio`, `webcam`, `integrated_wifi`, `power`, `warranty`)
VALUES
(NULL, 'dell', '2006', '15', 'Intel Quad-Core Pentium N3540 (2.2 GHz)', '750', '8', 'Intel UMA', '2 W', 'yes', '802.11BGN', 'Up to 4 Hours', '1'),
(NULL, 'hp', '2010', '15', 'Intel Quad-Core Pentium N3540 (2.2 GHz)', '1000', '8', 'Intel AMD', '5 W', 'yes', '802.11BGN', 'Up to 4 Hours', '2');

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
MODIFY `laptop_id` int(11) NOT NULL AUTO_INCREMENT;