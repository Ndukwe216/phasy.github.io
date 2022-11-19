-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 09:23 AM
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
-- Database: `phasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `language` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`user_id`, `email`, `language`, `area`, `date`) VALUES
(1, 'Jdoe12@gmail.com', 'php', 'Backend Engineering', '2022-11-19 08:22:22'),
(2, 'Jdoe12@gmail.com', 'typescript', 'Backend Engineering', '2022-11-19 08:22:34'),
(3, 'Jdoe12@gmail.com', 'vuejs', 'Frontend Engineering', '2022-11-19 08:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Stephen', 'Ndukwe', 'ndukwe216@gmail.com', '$2y$10$hlj6B21dcvfULUTnPHcyi.XP/p.9YlMuWp.YklEtEp8we9DyFHrTi'),
(2, 'John', 'Doe', 'Jdoe12@gmail.com', '$2y$10$.5GyYrJeG4JgNbg2Fq4/puhEsc3qGVjD8OMnN4mSOf4F6Q9JlwuZ2'),
(3, '', '', 'ndukwe216@gmail.com', '$2y$10$rntNgcqvzhKzxCAriyRXmeDO6hXitMoPzvgh5Ob73XP59Ri.6tl2i'),
(4, '', '', 'ndukwe216@gmail.com', '$2y$10$g/ry.9k1umq7Vd3i2jiBTOzieG1Kh/cvgJA6DCQgG5198wv.jqgZ2'),
(5, '', '', 'ndukwe216@gmail.com', '$2y$10$UUU7OYVyYs4RouqaezAvA.8y96HXh9gPw1j5g7eWxbown7RSOSGx2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
