-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220512.d0c37da63d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 05:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

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
-- Table structure for table `bookedpac`
--

CREATE TABLE `bookedpac` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `mobilenumber` varchar(100) DEFAULT NULL,
  `emailaddress` varchar(100) DEFAULT NULL,
  `totalpeople` varchar(100) DEFAULT NULL,
  `bookingid` varchar(100) DEFAULT NULL,
  `startingdate` varchar(100) DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookedpac`
--

INSERT INTO `bookedpac` (`id`, `fullname`, `address`, `mobilenumber`, `emailaddress`, `totalpeople`, `bookingid`, `startingdate`, `comment`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '[value-9]');

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
  `pac_image` varchar(200) DEFAULT NULL,
  `pac_time_start` varchar(100) DEFAULT NULL,
  `pac_time_end` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_package`
--

INSERT INTO `create_package` (`id`, `pac_name`, `pac_type`, `pac_location`, `pac_price`, `pac_features`, `pac_details`, `pac_image`, `pac_time_start`, `pac_time_end`) VALUES
(11, 'Chitwan National Park', 'Wildlife Exploration', 'Chitwan', '4000', 'Deluxe room, Scorpio car', '2 days and 1 night', 'user/upload/chitwan1.jpg', NULL, NULL),
(12, 'Mardi Trek', 'Trekking', 'Mardi Himal', '7000', 'Jeep ride, Deluxe room, fancy food', '6 days and 5 nights trek to mardi himal.', 'upload/804437-beautiful-nepal-wallpaper-2664x1776-for-iphone-6.jpg', NULL, NULL),
(13, 'Rara Lake', 'Trekking', 'Mugu District', '9500', 'AC bus, Deluxe room, Dinner, Breakfast', '8 days and 7 nights trek to rara lake.', 'upload/800px-Rara_Lake_and_the_snow-capped_Himalayan_peaks.jpg', NULL, NULL),
(15, 'NEw package', 'NEw package', 'NEw location', 'NEw price', 'NEw features', 'new details', 'user/upload/chitwan1.jpg', '14-05-2022', '28-05-2022');

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
  `password` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `phonenumber`, `address`, `password`, `status`) VALUES
(1, 'test', 'test@gmail.com', 'test', 'test', 'test', 1),
(2, 'new@', 'new@gmail.com', 'new', 'new', 'new', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `subject` varchar(1000) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `useremail` varchar(100) DEFAULT NULL,
  `mob_num` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`id`, `fname`, `lname`, `country`, `subject`, `userid`, `useremail`, `mob_num`) VALUES
(1, 'Nikhil', 'Adhikari', 'Nepal', 'N?A', '1', 'test@gmail.com', '9865119469'),
(2, 'nikhil', 'Adhikari', 'Nepal', 'asd', '1', 'test@gmail.com', '9865119469');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookedpac`
--
ALTER TABLE `bookedpac`
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
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
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
-- AUTO_INCREMENT for table `bookedpac`
--
ALTER TABLE `bookedpac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_package`
--
ALTER TABLE `create_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



