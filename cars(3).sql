-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 09:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'vvvvvv', 'bbb@ggg.com', 'hhjdoifjueof'),
(2, 'vvvvvv', 'bbb@ggg.com', 'hhjdoifjueof'),
(3, 'ali', 'aaa@ggg.com', '1111111111'),
(4, 'tamer', 'tamer@tamer.tamer', '123456789'),
(5, 'muhh', 'tht@fg', '25174578'),
(6, 'lrsdjftglrjsth;rjt', 'ldfghjrth@dfhgrth', '3654632746384568');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(50) NOT NULL,
  `company` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company`) VALUES
(1, 'BMW'),
(2, 'Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `motors`
--

CREATE TABLE `motors` (
  `id` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `motors`
--

INSERT INTO `motors` (`id`, `company`, `image`) VALUES
(1, 1, '21.jpg'),
(2, 1, '22.jpg'),
(3, 2, '23.jpg'),
(4, 2, '24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(20) COLLATE utf8_bin NOT NULL,
  `subject` varchar(50) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'lkjhjkhb', 'mdsfger@dsfkgjn.com', 'toyota', 'dsfhbfgnbrsthterhr'),
(2, 'lkjhjkhb', 'mdsfger@dsfkgjn.com', 'toyota', 'dsfhbfgnbrsthterhr'),
(3, 'oijoioiioio', 'ttt@www.com', 'ssss', 'dsrgsdtfh'),
(4, 'bhbbbb', 'jhgfjhvkj@ddd.com', 'mjhfvhjvhg', 'jyfvjhgvhjgv '),
(5, 'tamer', 'tamer@tamer.com', 'bmw', '750i'),
(6, 'muhtadi', 'muhtadi@nuhtadi.com', 'toyota', 'corrola 2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company` (`company`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `motors`
--
ALTER TABLE `motors`
  ADD CONSTRAINT `motors_ibfk_1` FOREIGN KEY (`company`) REFERENCES `company` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
