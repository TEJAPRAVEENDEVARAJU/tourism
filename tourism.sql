-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 02:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

CREATE DATABASE tourism;
use tourism;

CREATE TABLE bookings (
  `places` varchar(30) NOT NULL,
  `guests` int(10) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(35) NOT NULL,
  `booking_id` int(11) NOT NULL
);



INSERT INTO `bookings` (`places`, `guests`, `date`, `email`, `booking_id`) VALUES
('Tirupati', 4, '2023-02-20', 'nani@gmail.com', 1),
('Srikalahasti', 4, '2023-02-20', 'nani@gmail.com', 5);

-- --------------------------------------------------------



CREATE TABLE `signup` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `repassword` varchar(20) NOT NULL,
  `phnumber` bigint(10) NOT NULL
);



INSERT INTO `signup` (`fname`, `lname`, `email`, `password`, `repassword`, `phnumber`) VALUES
('Mohan', 'Challa', 'mohan@gmail.com', 'Mhn@123', 'Mhn@123', 9391256785),
('Narendra', 'Sivangula', 'nani@gmail.com', 'Snk@123', 'Snk@123', 9505109691),
('Puli', 'Siva', 'puli@gmail.com', 'Psr@123', 'Psr@123', 9515783984);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phnumber` (`phnumber`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`) USING BTREE,
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
