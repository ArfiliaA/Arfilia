-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 04:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `file_name`, `uploaded_on`, `status`) VALUES
(30, 'lol', 'lol@gmail.com', '1234', '', '0000-00-00 00:00:00', '1'),
(31, '', '', '', '328682997_552192600194164_2609848633519387128_n.jpg', '2023-02-04 22:28:58', '1'),
(32, '', '', '', '328682997_552192600194164_2609848633519387128_n.jpg', '2023-02-04 22:30:00', '1'),
(33, '', '', '', '328682997_552192600194164_2609848633519387128_n.jpg', '2023-02-04 22:30:01', '1'),
(34, '', '', '', '328682997_552192600194164_2609848633519387128_n.jpg', '2023-02-04 22:30:01', '1'),
(35, '', '', '', '328682997_552192600194164_2609848633519387128_n.jpg', '2023-02-04 22:30:01', '1'),
(36, '', '', '', '328682997_552192600194164_2609848633519387128_n.jpg', '2023-02-04 22:30:01', '1'),
(37, '', '', '', '328682997_552192600194164_2609848633519387128_n.jpg', '2023-02-04 22:30:01', '1'),
(38, '', '', '', '328682997_552192600194164_2609848633519387128_n.jpg', '2023-02-04 22:30:01', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
