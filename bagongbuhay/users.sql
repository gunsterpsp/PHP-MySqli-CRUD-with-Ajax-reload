-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 06:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `city`) VALUES
(1, 'asd', 'asd', 'asd', 'asd'),
(2, 'ew', 'ew', 'ew', 'ew'),
(3, 'wa', 'wa', 'wa', 'wa'),
(4, 'asd', 'asd', 'asd', 'asd'),
(5, 'talaga', 'paaa', 'dasd', 'dasd'),
(6, 'sayo', 'nara', 'da', 'das'),
(7, 'sayo', 'nara', 'da', 'das'),
(8, 'asd', 'asd', 'asd', 'asd'),
(9, 'kami', 'kae', 'dasd', 'das'),
(10, 'asd', 'asd', 'asd', 'asd'),
(11, 'dasd', 'asdas', 'dasdasd', 'asd'),
(12, 'dasdasd', 'asdasasdasdasd', 'dasdasd', 'asd'),
(13, 'dasdasd', 'asdasasdasdasd', 'dasdasd', 'asd'),
(14, 'dasdasd', 'asdasasdasdasd', 'dasdasd', 'asd'),
(15, 'dasdasd', 'asdasasdasdasd', 'dasdasd', 'asd'),
(16, 'dasdasd', 'asdasasdasdasd', 'dasdasd', 'asd'),
(17, 'dasdasd', 'asdasasdasdasd', 'dasdasd', 'asd'),
(18, 'dasdasd', 'asdasasdasdasd', 'sd', 'asda'),
(19, 'dasdasd', 'asdasasdasdasd', 'sd', 'asda'),
(20, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(21, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(22, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(23, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(24, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(25, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(26, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(27, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(28, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(29, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(30, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(31, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(32, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(33, 'dasdasd', 'asdasasdasdasd', 'sddasdasdasdasdasd', 'dsadasd'),
(34, 'dasdasd', 'asdasdasd', 'asdasd', 'asdasd'),
(35, 'dasdasd', 'asdasdasd', 'asdasd', 'asdasd'),
(36, 'dasdasd', 'asdasdasd', 'asdasd', 'asdasd'),
(47, 'dasda', 'sdasd', 'asdas', 'dasd'),
(55, 'asd', 'asdasd', 'asdasd', 'asda'),
(60, 'asd', 'asd', 'asdasd', ''),
(61, 'asd', 'asd', 'asdasd', 'asd'),
(62, 'das', 'das', 'dasd', 'asd'),
(63, '411442', 'asd14412124', '42142142', '1241124421'),
(64, '111111111', '11111111', '111111111111', '1111111111'),
(65, 'dasdasd', 'asda', 'dasdasd', ''),
(66, 'jikan', 'dasd', 'dasd', 'dasd'),
(67, 'yehehehe', 'dasdasd', 'dasdasd', 'dasdasd');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
