-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 01:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amman`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`) VALUES
(1, 'Suthishan', 'sutheshan.shan5@gmail.com', '9751527881', 'sdfsdfsdf'),
(2, 'Suthishan', 'sutheshan.shan5@gmail.com', '9751527881', 'sdfsdfsdf'),
(3, 'Suthishan', 'sutheshan.shan5@gmail.com', '9751527881', 'sdfsdfsdf'),
(4, 'Suthishan', 'sutheshan.shan5@gmail.com', '9751527881', 'sdfsdfsdf'),
(5, 'Suthishan', 'srini.acpl@gmail.com', '9751527881', 'sdfsdfsdf'),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment_list`
--

CREATE TABLE `payment_list` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `merchant_amount` varchar(50) NOT NULL,
  `merchant_total` varchar(50) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_list`
--

INSERT INTO `payment_list` (`id`, `name`, `last_name`, `email`, `mobile`, `state`, `city`, `message`, `merchant_amount`, `merchant_total`, `payment_id`, `payment_date`, `status`) VALUES
(1, 'Suthishan M', 'dkjg', 'sutheshan.shan5@gmail.com', '+919751527881', 'Europe', 'Europe', '', '10', '1000', '1', '2020-11-06 14:00:48', ''),
(2, 'Suthishan M', 'test', 'sutheshan.shan5@gmail.com', '+919751527881', 'Europe', 'Asia', 'test', '10', '1000', '1', '2020-11-06 14:28:01', ''),
(3, 'Suthishan M', 'test', 'sutheshan.shan5@gmail.com', '+919751527881', 'Europe', 'Europe', 'testesrt', '10', '1000', '1', '2020-11-06 14:28:41', ''),
(4, 'Suthishan M', 'test', 'sutheshan.shan5@gmail.com', '+919751527881', 'Europe', 'Asia', 'test', '10', '1000', '1', '2020-11-06 14:41:45', ''),
(5, 'Suthishan M', 'test', 'sutheshan.shan5@gmail.com', '+919751527881', 'Europe', 'Europe', 'test', '10', '1000', '1', '2020-11-06 15:20:50', ''),
(6, 'srini', 'Veera', 'srini.acpl@gmail.com', '7299692111', 'Europe', 'Europe', 'test', '1', '100', '1', '2020-11-06 15:20:54', ''),
(7, 'srini', 'vasan', 'srini.acpl@gmail.com', '7299692111', 'Europe', 'Asia', 'test', '1', '100', '1', '2020-11-06 15:24:45', 'Payment failure'),
(8, 'Suthishan M', 'test', 'sutheshan.shan5@gmail.com', '+919751527881', 'Europe', 'Asia', 'test', '10', '1000', 'pay_FxsL8vYWi1zsfd', '2020-11-06 15:53:41', ''),
(9, 'Suthishan M', 'test', 'sutheshan.shan5@gmail.com', '+919751527881', 'Asia', 'Asia', 'test', '10', '1000', 'pay_FxsL8vYWi1zU3Z', '2020-11-06 17:24:21', 'Payment Success'),
(10, 'srini', 'vasan', 'srini.acpl@gmail.com', '7299692111', 'Europe', 'Asia', 'arwe', '1', '100', '1', '2020-11-07 11:13:57', ''),
(11, 'srini', 'vasan', 'srini.acpl@gmail.com', '7299692111', 'Europe', 'Asia', 'tete', '10', '1000', '1', '2020-11-07 11:38:36', ''),
(12, 'srini', 'vasan', 'srini@gmail.com', '7299692111', 'Asia', 'Europe', 'sadas', '10', '1000', 'pay_FyAvWl7w181nA8', '2020-11-07 11:42:24', 'Payment Success'),
(13, 'srini', 'vasab', 'srini.acpl@gmail.com', '7299692111', 'Asia', 'Europe', 'sdfsd', '10', '1000', '', '2020-11-07 12:18:21', 'Payment Success'),
(14, 'srini', 'vasan', 'srini@gmail.com', '7299692111', 'Europe', 'Europe', 'asdasd', '10', '1000', '', '2020-11-07 12:25:21', 'Payment Success'),
(15, 'vijaya', 'vasa', 'srini@gmail.com', '7299692111', 'Tamil Nadu', ' Coimbatore ', 'test', '10', '1000', 'pay_FyCRAXMj1ApZJ3', '2020-11-07 13:11:15', 'Payment Success'),
(16, 'dasasdasd', 'dasdasd', 'asdasd', 'dasdasdasd', '', '', '', '10', '1000', '1', '2020-11-07 15:03:49', ''),
(17, 'asdasdas', 'dasdaasdasds', 'srini@gmail.com', '7299692111', 'Andaman & Nicobar', ' Beadonabad ', '', '10', '1000', '1', '2020-11-07 15:04:21', ''),
(18, 'asdasdasasd', 'asdasdsa', 'dasdasdasdas', 'dasdasds', 'Andaman & Nicobar', '', '', '10', '1000', '1', '2020-11-07 16:09:25', ''),
(19, 'asdasdasddas', 'dasdasdasdasadasdas', 'dasdasdasd@gmail.comas', 'd', '', '', '', '10', '1000', '1', '2020-11-07 16:49:39', ''),
(20, 'sdasdasdasd', 'sdasdasd', 'srini.acpl@gmail.com', '7299692111', '', '', '', '10', '1000', '', '2020-11-07 17:05:46', 'Payment Success'),
(21, 'Suthishan M', '123', 'sutheshan.shan5@gmail.com', '+919751527881', 'Tamil Nadu', ' Vellore ', 'testesrt', '10', '1000', 'pay_Fz5gg7AZbKT4BI', '2020-11-09 19:14:01', 'Payment Success'),
(22, 'Suthishan M', '123', 'sutheshan.shan5@gmail.com', '+919751527881', 'Tamil Nadu', '', 'testesrt', '10', '1000', 'pay_Fz5l0TNKGB6Zkn', '2020-11-09 19:18:17', 'Payment Success'),
(23, 'srini', 'vasan', 'srini.acpl@gmail.com', '7299692111', 'Tamil Nadu', ' Chennai ', 'test', '10', '1000', 'pay_G1q4mymz3zCEMT', '2020-11-16 17:54:48', 'Payment Success'),
(24, 'srini', 'vasan', 'srini.acpl@gmail.com', '7299692111', 'Tamil Nadu', ' Chennai ', 'te', '1', '100', '', '2020-11-16 18:04:46', 'Payment Success');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_list`
--
ALTER TABLE `payment_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `payment_list`
--
ALTER TABLE `payment_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
