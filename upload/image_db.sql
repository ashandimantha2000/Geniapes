-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 05:45 AM
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
-- Database: `image_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_name`, `created_at`) VALUES
(92, 'IMG-621b97950a5765.82664300.jpg', '2022-02-27 20:54:05'),
(93, 'IMG-621b97950b9189.47952240.jpg', '2022-02-27 20:54:05'),
(94, 'IMG-621b97950c90f0.69744654.jpg', '2022-02-27 20:54:05'),
(95, 'IMG-621b97950d7fb2.18347340.jpg', '2022-02-27 20:54:05'),
(96, 'IMG-621b97950e0df8.45360879.jpg', '2022-02-27 20:54:05'),
(97, 'IMG-621b97950ecc91.14913971.jpg', '2022-02-27 20:54:05'),
(98, 'IMG-621b97950f6773.75665992.jpg', '2022-02-27 20:54:05'),
(99, 'IMG-621b9795100664.02598061.jpg', '2022-02-27 20:54:05'),
(100, 'IMG-621b979510ab78.98662030.jpg', '2022-02-27 20:54:05'),
(101, 'IMG-621b9795114c64.23001747.jpg', '2022-02-27 20:54:05'),
(102, 'IMG-621b979511d019.10178147.jpg', '2022-02-27 20:54:05'),
(103, 'IMG-621b97951267f9.25687060.jpg', '2022-02-27 20:54:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
