-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2023 at 07:47 PM
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
-- Database: `ayo_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `receiver` text NOT NULL,
  `sender` text NOT NULL,
  `subject` text NOT NULL,
  `content` text NOT NULL,
  `random` varchar(11) NOT NULL,
  `time` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `receiver`, `sender`, `subject`, `content`, `random`, `time`, `timestamp`) VALUES
(1, 'Precious', 'Marvelous Ayomide', 'Nice', 'Newwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', '', '22/12/2023', '2023-12-22 01:41:49'),
(2, 'Precious', 'Marvelous Ayomide', 'Nice', 'New', '', '22/12/2023', '2023-12-22 02:09:08'),
(3, 'Grace', 'Marvelous Ayomide', 'Happy new year.', 'Happy new year.', '', '24/12/2023', '2023-12-24 16:17:21'),
(4, 'Precious', 'Your Son', 'Education', 'Eduport education theme, built specifically for the education centers which is dedicated to teaching and involve learners.', 'c0ee45', '30/12/2023', '2023-12-30 01:19:01'),
(5, 'Precious', 'Your Son', 'Education', 'Eduport education theme, built specifically for the education centers which is dedicated to teaching and involve learners.', 'e5abb8', '30/12/2023', '2023-12-30 01:22:14'),
(6, 'Precious', 'Marvelous Ayomide', 'Eduport education theme', 'Eduport education theme, built specifically for the education centers which is dedicated to teaching and involve learners.', '5e3a6b', '30/12/2023', '2023-12-30 01:33:47'),
(7, 'Precious', 'Your Son', 'Dey play\r\n', 'Eduport education theme, built specifically for the education centers which is dedicated to teaching and involve learners.', '66ba16', '31/12/2023', '2023-12-31 18:44:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
