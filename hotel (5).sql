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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_name`, `description`, `price`, `img`, `rate`, `type`) VALUES
(1, 'Hotel A', 'Description A', 100, '1.1.jpg', 1, 'Apartment'),
(2, 'Hotel B', 'Description B', 150, '12.1.jpg', 1, 'Hotels'),
(3, 'Hotel C', 'Description C', 200, '2.1.jpg', 1, 'Hotels'),
(4, 'Hotel D', 'Description D', 120, '3.1.jpg', 2, 'House'),
(5, 'Hotel E', 'Description E', 180, '4.1.jpg', 2, 'Hotels'),
(6, 'Hotel F', 'Description F', 130, '5.1.jpg', 2, 'Apartment'),
(7, 'Hotel G', 'Description G', 160, '6.1.jpg', 2, 'Hotels'),
(8, 'Hotel H', 'Description H', 190, '7.1.jpg', 2, 'Hotels'),
(9, 'Hotel I', 'Description I', 140, '8.1.jpg', 1, 'Apartment'),
(10, 'Hotel J', 'Description J', 170, '3.1.jpg', 5, 'House'),
(11, 'Hotel K', 'Description K', 210, '5.1.jpg', 5, 'Hotels'),
(12, 'Hotel L', 'Description L', 220, '3.1.jpg', 5, 'Hotels'),
(13, 'Hotel M', 'Description M', 130, '6.1.jpg', 5, 'Hotels'),
(14, 'Hotel N', 'Description N', 160, '8.1.jpg', 4, 'Hotels'),
(15, 'Hotel O', 'Description O', 190, '17.1.jpg', 4, 'House'),
(16, 'Hotel P', 'Description P', 240, '19.1.jpg', 3, 'Apartment'),
(17, 'Hotel Q', 'Description Q', 170, '12.1.jpg', 4, 'House'),
(18, 'Hotel R', 'Description R', 200, '17.1.jpg', 3, 'Apartment'),
(19, 'Hotel S', 'Description S', 150, '10.1.jpg', 4, 'Hotels'),
(20, 'Hotel T', 'Description T', 250, '11.1.jpg', 3, 'House');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
