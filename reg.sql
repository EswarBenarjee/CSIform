-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 04:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphageek`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `name` varchar(100) NOT NULL,
  `jntuno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `year` int(2) NOT NULL,
  `sec` varchar(2) NOT NULL,
  `phno` int(20) NOT NULL,
  `tranid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `jntuno`, `email`, `dept`, `year`, `sec`, `phno`, `tranid`) VALUES
('Eswar', '19341A0546', 'zc@das.sca', 'CSE', 2, 'A', 2147483647, '0'),
('Eswar', '19341A0546', 'zc@das.sca', 'CSE', 2, 'A', 2147483647, '0'),
('Eswar', '19341A0546', 'zc@das.sca', 'CSE', 2, 'A', 2147483647, '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
