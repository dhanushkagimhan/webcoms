-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 11:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcomsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `camerareadycopypaper`
--

CREATE TABLE `camerareadycopypaper` (
  `crc_id` int(11) NOT NULL,
  `name` varchar(900) NOT NULL,
  `emailauthor` varchar(150) NOT NULL,
  `emailpubchair` varchar(150) NOT NULL,
  `size` int(150) NOT NULL,
  `downloads` int(100) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `contact_details` varchar(255) NOT NULL,
  `other_links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camerareadycopypaper`
--

INSERT INTO `camerareadycopypaper` (`crc_id`, `name`, `emailauthor`, `emailpubchair`, `size`, `downloads`, `full_name`, `university`, `contact_details`, `other_links`) VALUES
(2, 'Tutorial 2.pdf', '', '', 174453, 0, 'B.G.H.Vidarshana', 'UOK', '0710000000', 'www.facebook.com/california');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camerareadycopypaper`
--
ALTER TABLE `camerareadycopypaper`
  ADD PRIMARY KEY (`crc_id`),
  ADD UNIQUE KEY `emailauthor` (`emailauthor`),
  ADD UNIQUE KEY `emailpubchair` (`emailpubchair`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camerareadycopypaper`
--
ALTER TABLE `camerareadycopypaper`
  MODIFY `crc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
