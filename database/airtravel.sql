-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 12:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nid` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `post_code` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`, `nid`, `dob`, `address`, `post_code`) VALUES
(1, 'Shanto', '01840071027', 'salauddin916854@gmail.com', '12', 2147483647, '2022-08-23', 'Narayanganj', '1460');

-- --------------------------------------------------------

--
-- Table structure for table `fare`
--

CREATE TABLE `fare` (
  `plane_id` int(10) DEFAULT NULL,
  `class_name` varchar(20) DEFAULT NULL,
  `ticket_price` int(10) DEFAULT NULL,
  `available_seats` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`plane_id`, `class_name`, `ticket_price`, `available_seats`) VALUES
(791, 'Economic', 500, 200),
(791, 'Business', 600, 200),
(791, 'First', 800, 200),
(792, 'Economic', 550, 200),
(792, 'Business', 650, 200),
(792, 'First', 850, 200),
(793, 'Economic', 500, 200),
(793, 'Business', 700, 200),
(793, 'First', 900, 200),
(794, 'Economic', 500, 200),
(794, 'Business', 600, 200),
(794, 'First', 800, 200),
(867, 'Economic', 250, 0),
(868, 'Business', 850, 300),
(869, 'Economic', 800, 250);

-- --------------------------------------------------------

--
-- Table structure for table `logged_user`
--

CREATE TABLE `logged_user` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nid` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `post_code` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logged_user`
--

INSERT INTO `logged_user` (`id`, `name`, `phone`, `email`, `password`, `nid`, `dob`, `address`, `post_code`) VALUES
(1, 'Samiul', '01740071367', 'samiul68@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 2147483647, '2022-08-23', 'Natore', '1460');

-- --------------------------------------------------------

--
-- Table structure for table `plane`
--

CREATE TABLE `plane` (
  `plane_id` int(10) NOT NULL,
  `plane_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plane`
--

INSERT INTO `plane` (`plane_id`, `plane_name`) VALUES
(791, 'Biman Bangladesh'),
(792, 'US-Bangla'),
(793, 'NovoAir'),
(794, 'Air Bangla'),
(867, 'Turk75'),
(868, 'Bong45'),
(869, 'Bd45');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `route_id` int(11) NOT NULL,
  `plane_id` int(10) DEFAULT NULL,
  `source` varchar(40) DEFAULT NULL,
  `destination` varchar(40) DEFAULT NULL,
  `departure` time DEFAULT NULL,
  `arrival` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`route_id`, `plane_id`, `source`, `destination`, `departure`, `arrival`) VALUES
(1, 791, 'Dhaka', 'Rajshahi', '13:00:00', '14:30:00'),
(2, 791, 'Rajshahi', 'Dhaka', '07:00:00', '08:30:00'),
(3, 792, 'Dhaka', 'Chittagong', '18:00:00', '20:00:00'),
(4, 792, 'Chittagong', 'Dhaka', '09:00:00', '11:00:00'),
(5, 793, 'Khulna', 'Rongpur', '12:30:00', '22:30:00'),
(6, 794, 'Dhaka', 'Rajshahi', '14:00:00', '15:30:00'),
(7, 793, 'Khulna', 'Sylhet', '08:30:00', '15:30:00'),
(8, 867, 'Dhaka', 'Sylhet', '09:30:00', '11:30:00'),
(9, 868, 'Sylhet', 'Dhaka', '13:30:00', '16:00:00'),
(10, 869, 'Narayanganj', 'Dhaka', '21:59:00', '21:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `plane_id` int(11) NOT NULL,
  `plane_name` varchar(250) DEFAULT NULL,
  `source` varchar(250) DEFAULT NULL,
  `destination` varchar(250) DEFAULT NULL,
  `choose_class` varchar(250) DEFAULT NULL,
  `journey_date` date DEFAULT NULL,
  `departure` time DEFAULT NULL,
  `arrival` time DEFAULT NULL,
  `boarding` time DEFAULT NULL,
  `ticket_price` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`plane_id`, `plane_name`, `source`, `destination`, `choose_class`, `journey_date`, `departure`, `arrival`, `boarding`, `ticket_price`) VALUES
(1, 'Air Bangla', 'Dhaka', 'Rajshahi', 'Economic', '2022-09-07', '14:00:00', '15:30:00', '13:40:00', 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nid` int(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(250) NOT NULL,
  `post_code` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `nid`, `dob`, `address`, `post_code`) VALUES
(2, 'Ishraq', '017400713856', 'ishraq@ymail.com', 'd41d8cd98f00b204e9800998ecf8427e', 2147483647, '2022-08-24', 'bhulta,gausia,narayanganj', '1460'),
(32, 'Nazmul', '017400713856', 'nazmul@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 2147483647, '2022-08-10', 'Pabna', '2360'),
(33, 'Shanto', '01840071027', 'salauddin916854@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 2147483647, '2022-08-09', 'Narayanganj', '1460'),
(34, 'Shanto', '01840071027', 'salauddin916854@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 2147483647, '2022-08-09', 'Narayanganj', '1460'),
(35, 'Samiul', '01740071367', 'samiul68@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 2147483647, '2022-08-23', 'Natore', '1460'),
(36, 'Salauddin', '01840071027', 'salauddin916854@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2147483647, '2022-06-25', 'Dhaka', '1460'),
(37, 'St Salauddin hi', '01840071027', 'asrafrayeen131@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 2147483647, '2022-09-06', 'Rajshahi\r\nTalaimari', '1460');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logged_user`
--
ALTER TABLE `logged_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plane`
--
ALTER TABLE `plane`
  ADD PRIMARY KEY (`plane_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`plane_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
