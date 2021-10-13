-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 10:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `person`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `code` int(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `code`, `status`) VALUES
(36, 'dudu', 'mbabazi', 'mutambagz@gmail.com', 'daniella', '3226d80bcb17fd75dc9f32de6032c7c08d3c46e7', 391492, 'Verified'),
(37, 'mama', 'faith', 'mutambagz@gmail.com', 'shine', '3226d80bcb17fd75dc9f32de6032c7c08d3c46e7', 946613, 'Verified'),
(38, 'yuhi ok', 'tuyi', 'mutambagz@gmail.com', 'vanessa', '3226d80bcb17fd75dc9f32de6032c7c08d3c46e7', 926775, 'Verified'),
(39, 'mutoni', 'peace', 'mutambagz@gmail.com', 'pascal', '3226d80bcb17fd75dc9f32de6032c7c08d3c46e7', 996880, 'Verified'),
(40, 'rubobi', 'daniella', 'mutambagz@gmail.com', 'yuda', '3226d80bcb17fd75dc9f32de6032c7c08d3c46e7', 936765, 'Verified'),
(41, 'gte', 'faith', 'mutambagz@gmail.com', 'aline', '3226d80bcb17fd75dc9f32de6032c7c08d3c46e7', 748106, 'Verified'),
(42, 'thiery', 'daniella', 'mutambagz@gmail.com', 'k', '2369918727ef4cc6ba5e00e25f7c26df6aee875c', 706527, 'Verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
