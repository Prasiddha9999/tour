-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 02:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) DEFAULT NULL,
  `admin_pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `create_package`
--

CREATE TABLE `create_package` (
  `id` int(11) NOT NULL,
  `pac_name` varchar(200) DEFAULT NULL,
  `pac_type` varchar(200) DEFAULT NULL,
  `pac_location` varchar(200) DEFAULT NULL,
  `pac_price` varchar(200) DEFAULT NULL,
  `pac_features` varchar(200) DEFAULT NULL,
  `pac_details` varchar(200) DEFAULT NULL,
  `pac_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_package`
--

INSERT INTO `create_package` (`id`, `pac_name`, `pac_type`, `pac_location`, `pac_price`, `pac_features`, `pac_details`, `pac_image`) VALUES
(11, 'Chitwan National Park', 'Wildlife Exploration', 'Chitwan', '3000', 'Deluxe room, Scorpio car', '2 days and 1 night', 'upload/chitwan1.jpg'),
(12, 'Mardi Trek', 'Trekking', 'Mardi Himal', '7000', 'Jeep ride, Deluxe room, fancy food', '6 days and 5 nights trek to mardi himal.', 'upload/804437-beautiful-nepal-wallpaper-2664x1776-for-iphone-6.jpg'),
(13, 'Rara Lake', 'Trekking', 'Mugu District', '9500', 'AC bus, Deluxe room, Dinner, Breakfast', '8 days and 7 nights trek to rara lake.', 'upload/800px-Rara_Lake_and_the_snow-capped_Himalayan_peaks.jpg'),
(14, 'Test', 'Test', 'Test', 'NPR', 'Test', 'Test', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `phonenumber`, `address`, `password`) VALUES
(1, 'test', 'test@gmail.com', 'test', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_package`
--
ALTER TABLE `create_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_package`
--
ALTER TABLE `create_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
