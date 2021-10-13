-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 12:02 PM
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
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'HUHI', 'LOLO', 'mpmppala12@gmail.com', 'yuda', 'lololo'),
(2, 'kamanzi', 'ivan', 'manziemmy@gmail.com', 'mimuri', 'bulabula'),
(3, 'kasine', 'sunbae', 'kasinepenina@gmail.com', 'sun', '7b52009b64fd0a2a49e6d8a939753077792b0554'),
(4, 'karire', 'rosine', 'paulizo12@gmail.com', 'shine', 'b803fae675b5bc3450c8050139aac4e6c0e0c717'),
(5, 'monica', 'ishimwe', 'monica@gmail.com', 'kimenyi', '1c58a446a63e719d7b90156a8998ccc461609ed7'),
(6, 'ngabo', 'paul', 'ngabopl@gmail.com', 'ngabop', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(7, 'manzi', 'lemi', 'manziajay@gmail.com', 'lemi', 'f7807571cd25e8e6f63d594d12bacda251281475'),
(8, 'k', 'k', 'manziemmy@gmail.com', 'k', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c'),
(9, '', '', '', 'shine', 'b803fae675b5bc3450c8050139aac4e6c0e0c717'),
(10, 'pascal', 'munana', 'pascal1@gmail.com', 'pascal', 'b92a368eedd7aee87ae543bd1605c839390ed4a1'),
(11, 'munyana', 'sarah', 'msarah@gmail.com', 'sarah', '82fa60a9aba496687f7546d4865a06789fe0f088'),
(12, 'munyana', 'sarah', 'msarah@gmail.com', 'sarah', '82fa60a9aba496687f7546d4865a06789fe0f088'),
(13, 'munyana', 'sarah', 'msarah@gmail.com', 'sarah', '82fa60a9aba496687f7546d4865a06789fe0f088'),
(14, 'mbabazi', 'faith', 'faimbab@gmail.com', 'mbabazi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(15, 'ntambara', 'rda', 'rda@gmail.com', 'ntambara', 'rda'),
(16, 'lala', 'mapuni', 'mlala@gmail.com', 'tuyi', 'Batamuriza123&'),
(17, 'tuyishime', 'everyne', 'eve@gmail.com', 'eve', 'eve123'),
(18, 'DUTERIMBERE', 'gisele', 'gizo@gmail.com', 'gizo', 'gizo123'),
(19, 'HUHI', 'LOLO', 'mpmppala12@gmail.com', 'mbabazi', 'Tuyi!12345');

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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
