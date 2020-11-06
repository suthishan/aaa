-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 01:38 PM
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
(5, 'Suthishan', 'srini.acpl@gmail.com', '9751527881', 'sdfsdfsdf');

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
(9, 'Suthishan M', 'test', 'sutheshan.shan5@gmail.com', '+919751527881', 'Asia', 'Asia', 'test', '10', '1000', 'pay_FxsL8vYWi1zU3Z', '2020-11-06 17:24:21', 'Payment Success');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `payment_list`
--
ALTER TABLE `payment_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
