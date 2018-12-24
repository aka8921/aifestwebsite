-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 03:02 PM
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
-- Table structure for table `re`
--

CREATE TABLE `re` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `college` varchar(250) DEFAULT NULL,
  `project_name` varchar(250) DEFAULT NULL,
  `project_desc` text,
  `date_tab` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `re`
--

INSERT INTO `re` (`id`, `name`, `email`, `mobile`, `college`, `project_name`, `project_desc`, `date_tab`) VALUES
(1, 'Neeraj K V', 'neerajkv2000@gmail.com', 2147483647, 'COET', '2018-12-04', 'TEST', '0000-00-00'),
(2, 'new', 'testss', 1234567898, 'mndmnbn', '2018-12-04', 'sdnfsdbfckd', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `re`
--
ALTER TABLE `re`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `re`
--
ALTER TABLE `re`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
