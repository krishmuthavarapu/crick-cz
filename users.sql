-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2019 at 03:36 PM
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
(1, 'Gachibowli Divakar', 'gd@wewin.com', '', 'Gachibowli', 'India', '', ''),
(9, 'cqwsac', 'wef', '', 'wewev', 'India', '', ''),
(10, 'Gachibowli Divakar', 'qfwdcq', '324213', 'wewev', 'South Africa', '', ''),
(18, 'rajesh_cvml', 'sdafsc@wefa.vsw ', '12321e', 'cA', 'Srilanka', 'Match on Fri 7th June. County Ground, Bristol', ''),
(19, 'Gachibowli Divakar', 'gd@wewin.com', '12321e', 'qwcqw', 'Australia', 'Match on Thu 6th June. Trent Bridge, Nottingham', ''),
(20, 'asfa', 'asd', '3234', '2352', 'Australia', 'Match on Thu 6th June. Trent Bridge, Nottingham', ''),
(21, 'Gachibowli Divakar', 'sdafsc@wefa.vsw ', '2134124', 'wewev', 'pakistan', 'Match on Fri 7th June. County Ground, Bristol', '1970-01-01 01:00:00'),
(22, 'rajesh_cvml', 'gd@wewin.com', '12321e', 'qwcqw', 'Srilanka', 'Match on Fri 7th June. County Ground, Bristol', '2019-06-06 15:35:44');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
