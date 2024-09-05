-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 05:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `userid` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(80) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`userid`, `name`, `email`, `password`, `user_type`) VALUES
(10, 'kamalban', 'kamalban@gmail.com', 0, 'supplier'),
(11, 'punya', 'punya@gmail.com', 112, 'supplier'),
(12, 'tester1', 'tester1@gmail.com', 256, 'supplier'),
(13, 'tester10', 'tester10@gmail.com', 900, 'traveler'),
(14, 'zxc', 'xzcz@gmail.com', 45, 'supplier'),
(15, 'dfs', 'sdf@gmail.com', 34, 'supplier'),
(16, 'tester 15', '15@gmail.com', 111, 'supplier'),
(17, 'dfd', 'df@gmail.com', 12, 'supplier'),
(18, 'ff', 'ff@gmail.com', 134, 'supplier'),
(19, 'fg', 'fg@gmail.com', 321, 'traveler'),
(20, 'fg', 'fg@gmail.com', 11, 'traveler'),
(21, 'sdasds', 'asdasda@gmail.com', 0, 'supplier'),
(22, 'gdfdf', 'hgdhj@gmail.com', 234, 'traveler'),
(23, 'abc', 'abc@gmail.com', 123, 'supplier'),
(24, 'abcd', 'abcd@gmail.com', 1111, 'supplier'),
(25, 'abcde', 'abcde@gmail.com', 1234, 'traveler'),
(26, 'qwe', 'qwe@gmail.com', 1001, 'traveler'),
(27, 'mnb', 'mnb@gmail.com', 111, 'traveler'),
(28, 'ff', 'fff@gmail.com', 23, 'traveler'),
(29, 'fg', 'fgd@gmail.com', 4444, 'traveler'),
(30, 'lll', 'lll@gmail.com', 345, 'traveler'),
(31, 'g', 'gg@gmail.com', 111, 'traveler'),
(32, 'jjjjj', 'j@gmail.com', 222, 'traveler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
