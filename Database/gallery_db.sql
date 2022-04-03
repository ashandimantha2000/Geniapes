-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 11:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_name`) VALUES
(67, 'IMG-6236d7bce0d305.14215433.jpg'),
(68, 'IMG-6236d7bce26409.56264246.jpg'),
(69, 'IMG-6236d7bce31937.24530906.jpg'),
(70, 'IMG-6236d7bce3de50.78154641.jpg'),
(71, 'IMG-6236d7bce494e9.13428286.jpg'),
(72, 'IMG-6236d7bce54a97.00593699.jpg'),
(73, 'IMG-6236d7bce5c9e2.94343454.jpg'),
(74, 'IMG-6236d7bce66af9.98513632.jpg'),
(75, 'IMG-6236d7bce705c0.07285670.jpg'),
(76, 'IMG-6236d7bce7b0b9.02500138.jpg'),
(77, 'IMG-6236d7bce84800.43914488.jpg'),
(78, 'IMG-6236d7bce8f259.82696627.jpg'),
(79, 'IMG-6236d7bce987b7.15077949.jpg'),
(80, 'IMG-6236d7bcea1e58.69142357.jpg'),
(81, 'IMG-6236d7bceaa7c2.95988806.jpg'),
(82, 'IMG-6236d7bceb7f62.74350120.jpg'),
(83, 'IMG-6236d7bcec3467.81351803.jpg'),
(84, 'IMG-6236d7bcecadf3.64072034.jpg'),
(85, 'IMG-6236d7bced3768.53494727.jpg'),
(86, 'IMG-6236d7bcedac52.19497049.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(20, 'kaveez', 'kaveez@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'ashan', 'ashan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
