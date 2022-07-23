-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2022 at 04:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bca24`
--

-- --------------------------------------------------------

--
-- Table structure for table `Userinfo`
--

CREATE TABLE `Userinfo` (
  `NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `uPASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Userinfo`
--

INSERT INTO `Userinfo` (`NAME`, `EMAIL`, `GENDER`, `uPASSWORD`) VALUES
('Jigyasha Baruah', 'jigu@gmail.com', 'female', 'cd41f85a21b7e144b919c0b9583f9205'),
('Nisha Rabha', 'nisha@gmail.com', 'female', 'a9f56b7ece2113c9c4a1214a19ede99c'),
('Shubhalina Radu Kakaty', 'shubha@gmail.com', 'female', 'd4621ea21e54b0bf35fcfc59dd863758'),
('Trisha Sinha', 'tisha@gmail.com', 'female', '5af7a513a7c48f6cc97253254b29509b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Userinfo`
--
ALTER TABLE `Userinfo`
  ADD PRIMARY KEY (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
