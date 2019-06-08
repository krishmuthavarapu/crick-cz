-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 02:18 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uslive`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `team` varchar(50) NOT NULL,
  `matchd` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `number`, `location`, `team`, `matchd`, `date`) VALUES
(26, 'rajesh_cvml', 'gd@wewin.com', '12321e', 'wec', 'India', 'Match on Fri 8th June. Sophia Gardens, Cardiff', '2019-06-08 11:38:08'),
(27, 'rahul', 'sdafsc@wefa.vsw ', '12321e', 'wewev', 'Bangladesh', 'Match on Fri 9th June. Sophia Gardens, Cardiff', '2019-06-08 12:33:26'),
(28, 'Gachibowli Divakar', 'gd@wewin.com', '12321e', 'wewev', 'Afganisthan', 'Match on Fri 8th June. Country Ground, Taunton.', '2019-06-08 14:13:19'),
(29, 'sam', 'gd@wewin.com', '12321e', 'wewev', 'New Zealand', 'Match on Fri 8th June. Country Ground, Taunton.', '2019-06-08 14:13:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
