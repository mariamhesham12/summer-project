-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 07:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `formop`
--

CREATE TABLE `formop` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `formop`
--

INSERT INTO `formop` (`id`, `name`, `email`, `number`, `date`) VALUES
(3, 'mmmm', 'mariam@gmail.com', '6789', '2022-08-19 01:45:00'),
(18, 'rania', 'rania@gmail.com', '426789', '2022-08-19 01:16:00'),
(21, 'mariam hesham', 'mariamhesham585@gmail.com', '67890', '2022-08-18 10:41:00'),
(22, 'esraa', 'esraa@gmail.com', '764468900', '2022-08-03 00:36:00'),
(24, 'menna', 'menna@gmail.com', '4648393', '2022-08-24 21:28:00'),
(28, 'hanaa', 'hana@gmail.com', '1234567', '2022-08-19 02:17:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formop`
--
ALTER TABLE `formop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formop`
--
ALTER TABLE `formop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
