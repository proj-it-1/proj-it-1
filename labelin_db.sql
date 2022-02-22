-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 02:41 AM
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
  `status` varchar(40) NOT NULL,
  `onstat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `email`, `role`, `createdat`, `updatedat`, `status`, `onstat`) VALUES
(1, '123', 'spotifyapp0706@gmail.com', 'admin', '2022-02-21 00:00:00', '2022-02-21 00:00:00', 'APPROVED', 'OFFLINE');

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
  `updateat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `fname`, `lname`, `address`, `city`, `state`, `zip`, `phonenumber`, `createdat`, `updateat`) VALUES
(1, 'Spotify', 'App', 'Sitio Tabing Ilog', 'Antipolo', 1, '1870', 09693282786, '2022-02-21 14:20:40', '2022-02-21 14:21:31');

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
