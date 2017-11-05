-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2017 at 12:27 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3169148_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `user_id`, `msg`, `msg_date`) VALUES
(1, 2, 'test', '2017-06-09 15:01:14'),
(2, 1, 'hey all', '2017-06-09 16:02:59'),
(3, 6, 'hey', '2017-06-09 16:04:22'),
(4, 8, 'hey stone', '2017-06-09 16:16:56'),
(5, 9, 'hey everyone', '2017-06-09 16:17:27'),
(6, 1, 'hey', '2017-06-09 16:17:58'),
(7, 1, 'how are you', '2017-06-09 16:18:05'),
(8, 1, 'hye', '2017-06-09 17:21:08'),
(9, 1, 'how are you', '2017-06-09 17:22:04'),
(10, 10, 'hey all', '2017-06-09 17:23:13'),
(11, 1, ':p', '2017-06-09 17:38:48'),
(16, 1, 'hye', '2017-06-09 20:56:38'),
(18, 1, '<?php  \"DELETE * FROM users\"; ?>', '2017-06-09 20:58:50'),
(19, 2, 'hello', '2017-10-13 12:43:08'),
(20, 4, 'Hey', '2017-10-24 07:38:01'),
(21, 4, 'Hey', '2017-10-24 07:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `lname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `userpassword`, `email`, `lname`) VALUES
(1, 'ankushchalotra58', '$2y$10$x9kMPBhqn30.RUWmOU9eeuw1TeqqQ3xhAEgsDz6rFb4WqMDxW8ZFi', 'ankushchalotra@gmail.com', 'chalotra'),
(2, '11614171@lpu.com', '$2y$10$Sxn3DxIvLpHcTrNoXsCfrua5YnGBVPjrdy/mrb4.LOuaM8LWuyCG2', 'ankushchalotra58@gmail.com', 'chalotra'),
(3, '11614171@lpu.com', '$2y$10$G4Hj.rNk5uCJPfVcHeu9O.3xf9EhVYj6cWuP4FnERw4sIdWlKF2ae', 'ankushchalotra5878@gmail.com', '0000'),
(4, 'rajashindhe', '$2y$10$XMw8mmHd2smIpXfdCW6EquYwpece4RuE39OrXabATKIaZL0zo0zc.', 'jay@crive.me', 'shindhe'),
(5, 'sumitkr', '$2y$10$oHXWFu3o3Q8dijoQroT3RuDOc9eSJaZfNo49Dcrt1USJ1szIZ4/km', 'tiwarisumit000@gmail.com', '0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
