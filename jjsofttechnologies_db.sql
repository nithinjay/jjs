-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 08:06 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jjsofttechnologies_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jj_leads`
--

CREATE TABLE `jj_leads` (
  `lead_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `squarefoot` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jj_leads`
--

INSERT INTO `jj_leads` (`lead_id`, `firstname`, `lastname`, `email`, `phone`, `address`, `squarefoot`, `added_date`) VALUES
(1, 'dsadsa', 'gfdgdf', 'fsdfsd@sdfds.com', '4534534', 'sdfsdf\r\nfdsfdsf\r\nfdsfsdf', '554534', '2019-01-13 07:12:04'),
(2, 'cxzcxzcasd', 'gjhggf', 'kfdsl@sdfsd.com', '54543234', 'sdsdfdsf\r\nghfhe\r\nfdsfds', '4645', '2019-01-13 07:31:20'),
(3, 'treter', 'sdfs', 'dfds@das.com', '432424', 'sdfsdf\r\nfdsfdsfsd', '34343', '2019-01-13 08:03:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jj_leads`
--
ALTER TABLE `jj_leads`
  ADD PRIMARY KEY (`lead_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jj_leads`
--
ALTER TABLE `jj_leads`
  MODIFY `lead_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
