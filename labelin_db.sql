-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 05:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labelin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `date` datetime NOT NULL,
  `user` varchar(60) NOT NULL,
  `action` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`date`, `user`, `action`) VALUES
('2022-02-24 11:25:48', 'spotifyapp0706@gmail.com', ' Admin Login'),
('2022-02-24 11:32:53', 'spotifyapp0706@gmail.com', ' Admin Login'),
('2022-02-24 11:38:37', 'spotifyapp0706@gmail.com', ' Admin Login'),
('2022-02-24 11:56:20', 'spotifyapp0706@gmail.com', ' Admin Login');

-- --------------------------------------------------------

--
-- Table structure for table `states_tbl`
--

CREATE TABLE `states_tbl` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states_tbl`
--

INSERT INTO `states_tbl` (`state_id`, `state_name`) VALUES
(1, 'Alabama'),
(2, 'Alaska'),
(3, 'Arizona'),
(4, 'Arkansas'),
(5, 'California'),
(6, 'Colorado'),
(7, 'Connecticut'),
(8, 'Delaware'),
(9, 'Florida'),
(10, 'Georgia'),
(11, 'Hawaii'),
(12, 'Idaho'),
(13, 'Illinois'),
(14, 'Indiana'),
(15, 'Iowa'),
(16, 'Kansas'),
(17, 'Kentucky'),
(18, 'Louisiana'),
(19, 'Maine'),
(20, 'Maryland'),
(21, 'Massachusetts'),
(22, 'Michigan'),
(23, 'Minnesota'),
(24, 'Mississippi'),
(25, 'Mssouri'),
(26, 'Montana'),
(27, 'Nebraska'),
(28, 'Nevada'),
(29, 'New Hampshire'),
(30, 'New Jersey'),
(31, 'New Mexico'),
(32, 'New York'),
(33, 'North Carolina'),
(34, 'North Dakota'),
(35, 'Ohio'),
(36, 'Oklahoma'),
(37, 'Oregon'),
(38, 'Pennsylvania'),
(39, 'Rhode Island'),
(40, 'South Carolina'),
(41, 'South Dakota'),
(42, 'Tennessee'),
(43, 'Texas'),
(44, 'Utah'),
(45, 'Vermont'),
(46, 'Virginia'),
(47, 'Washington'),
(48, 'West Virginia'),
(49, 'Wisconsin'),
(50, 'Wyoming');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `role` varchar(10) NOT NULL,
  `createdat` datetime NOT NULL,
  `updatedat` datetime NOT NULL,
  `status` varchar(40) NOT NULL,
  `onstat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `email`, `role`, `createdat`, `updatedat`, `status`, `onstat`) VALUES
(1, '123', 'spotifyapp0706@gmail.com', 'ADMIN', '2022-02-21 00:00:00', '2022-02-21 00:00:00', 'APPROVED', 'ONLINE'),
(2, '123', 'bonangelo1@gmail.com', '', '2022-02-22 10:58:54', '2022-02-22 10:58:54', 'APPROVED', 'OFFLINE'),
(3, 'as', 'as@gmail.com', '', '2022-02-23 10:10:09', '2022-02-23 10:10:09', '', ''),
(8, '12', 'lenard@gmail.com', 'USER', '2022-02-23 11:44:17', '2022-02-23 11:44:17', 'PENDING', 'OFFLINE');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` int(11) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `phonenumber` bigint(11) UNSIGNED ZEROFILL NOT NULL,
  `createdat` datetime NOT NULL,
  `updatedat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `fname`, `lname`, `address`, `city`, `state`, `zip`, `phonenumber`, `createdat`, `updatedat`) VALUES
(1, 'Spotify', 'App', 'Sitio Tabing Ilog', 'Antipolo', 1, '1870', 09693282786, '2022-02-21 14:20:40', '2022-02-21 14:21:31'),
(2, 'Bon Angelo', 'Rebadavia', 'Sitio Kasapi Bagong Nayon', 'Antipolo City', 3, '1870', 09391433677, '2022-02-22 10:58:54', '2022-02-22 10:58:54'),
(8, 'Lenard', 'Detorio', 'Sweet', 'Home', 1, '42069', 11111111111, '2022-02-23 11:44:17', '2022-02-23 11:44:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `states_tbl`
--
ALTER TABLE `states_tbl`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `state` (`state`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `states_tbl`
--
ALTER TABLE `states_tbl`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `user_profile_ibfk_2` FOREIGN KEY (`state`) REFERENCES `states_tbl` (`state_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
