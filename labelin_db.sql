-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 03:16 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(3, 'Delaware'),
(4, 'Florida'),
(5, 'Georgia'),
(6, 'Hawaii'),
(7, 'Idaho'),
(8, 'Illinois'),
(9, 'Indiana'),
(10, 'Iowa'),
(11, 'Kansas'),
(12, 'Kentucky'),
(13, 'Louisiana'),
(14, 'Maine'),
(15, 'Maryland'),
(16, 'Massachusetts'),
(17, 'Michigan'),
(18, 'Minnesota'),
(19, 'Mississippi'),
(20, 'Missouri'),
(21, 'Montana'),
(22, 'Nebraska'),
(23, 'Nevada'),
(24, 'New Hampshire'),
(25, 'New Jersey'),
(26, 'New Mexico'),
(27, 'New York'),
(28, 'North Carolina'),
(29, 'North Dakota'),
(30, 'Ohio'),
(31, 'Oklahoma'),
(32, 'Oregon'),
(33, 'Pennsylvania'),
(34, 'Rhode Island'),
(35, 'South Carolina'),
(36, 'South Dakota'),
(37, 'Tennessee'),
(38, 'Texas'),
(39, 'Utah'),
(40, 'Vermont'),
(41, 'Virginia'),
(42, 'Washington'),
(43, 'West Virginia'),
(44, 'Wisconsin'),
(45, 'Wyoming'),
(46, 'Arizona'),
(47, 'Arkansas');

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
  `status` varchar(40) NOT NULL DEFAULT 'PENDING',
  `onstat` varchar(20) NOT NULL DEFAULT 'OFFLINE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `email`, `role`, `createdat`, `updatedat`, `status`, `onstat`) VALUES
(1, '123', 'bonangelo12@gmail.com', '', '2022-02-23 09:45:00', '2022-02-23 09:45:00', 'APPROVED', 'OFFLINE'),
(2, '123', 'bonangelo123@gmail.com', '', '2022-02-23 09:50:26', '2022-02-23 09:50:26', 'PENDING', 'OFFLINE'),
(3, '123', 'bonangelo1234@gmail.com', '', '2022-02-23 09:51:32', '2022-02-23 09:51:32', 'PENDING', 'OFFLINE'),
(4, '123', 'bonangelo2@gmail.com', '', '2022-02-23 09:53:59', '2022-02-23 09:53:59', 'PENDING', 'OFFLINE'),
(5, '123', 'bonangelo1@gmail.com', '', '2022-02-23 09:56:35', '2022-02-23 09:56:35', 'APPROVED', 'ONLINE');

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
(1, 'Bon Angelo', 'Rebadavia', 'Sitio Manggahan', 'Antipolo City', 3, '1870', 09000000000, '2022-02-23 09:45:00', '2022-02-23 09:45:00'),
(2, 'Ryl', 'Riomalos', 'Sitio Manggahan', 'Antipolo City', 7, '1870', 09000000001, '2022-02-23 09:50:26', '2022-02-23 09:50:26'),
(3, 'Bon Angelo', 'Rebadavia', 'Sitio Manggahan', 'Antipolo City', 5, '1870', 09000000011, '2022-02-23 09:51:32', '2022-02-23 09:51:32'),
(4, 'Bon Angelo', 'Rebadavia', 'Sitio Manggahan', 'Antipolo City', 8, '1870', 09000000111, '2022-02-23 09:53:59', '2022-02-23 09:53:59'),
(5, 'Bon Angelo', 'Rebadavia', 'Sitio Manggahan', 'Antipolo City', 4, '1870', 09000001111, '2022-02-23 09:56:35', '2022-02-23 09:56:35');

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
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
