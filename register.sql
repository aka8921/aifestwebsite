-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 03:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aifest_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `college` varchar(250) DEFAULT NULL,
  `tshirt` varchar(250) DEFAULT NULL,
  `name2` varchar(250) DEFAULT NULL,
  `email2` varchar(250) DEFAULT NULL,
  `mobile2` int(10) DEFAULT NULL,
  `college2` varchar(250) DEFAULT NULL,
  `tshirt2` varchar(250) DEFAULT NULL,
  `name3` varchar(250) DEFAULT NULL,
  `email3` varchar(250) DEFAULT NULL,
  `mobile3` int(10) DEFAULT NULL,
  `college3` varchar(250) DEFAULT NULL,
  `thsirt3` varchar(250) DEFAULT NULL,
  `name4` varchar(250) DEFAULT NULL,
  `email4` varchar(250) DEFAULT NULL,
  `mobile4` int(10) DEFAULT NULL,
  `college4` varchar(250) DEFAULT NULL,
  `tshirt4` varchar(250) DEFAULT NULL,
  `name5` varchar(250) DEFAULT NULL,
  `email5` varchar(250) DEFAULT NULL,
  `mobile5` int(10) DEFAULT NULL,
  `college5` varchar(250) DEFAULT NULL,
  `tshirt5` varchar(250) DEFAULT NULL,
  `name6` varchar(250) DEFAULT NULL,
  `email6` varchar(250) DEFAULT NULL,
  `mobile6` int(10) DEFAULT NULL,
  `college6` varchar(250) DEFAULT NULL,
  `tshirt6` varchar(250) DEFAULT NULL,
  `project_name` varchar(250) DEFAULT NULL,
  `project_desc` text,
  `date_tab` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
