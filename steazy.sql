-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 08:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steazy`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_master`
--

CREATE TABLE `registration_master` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `display_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_master`
--

INSERT INTO `registration_master` (`id`, `user_name`, `email`, `password`, `display_password`) VALUES
(1, 'abc', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', '123'),
(2, 'xyz', 'xyz@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', '456'),
(3, 'qwe', 'binibani14@gmail.com', '68053af2923e00204c3ca7c6a3150cf7', '789'),
(4, 'aryan', 'aryan@gamil.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_master`
--
ALTER TABLE `registration_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_master`
--
ALTER TABLE `registration_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
