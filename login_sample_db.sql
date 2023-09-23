-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 07:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matching` int(1) NOT NULL,
  `matchrequest` int(100) NOT NULL,
  `matchrequestfrom` varchar(100) NOT NULL,
  `currentmatch` varchar(11) NOT NULL,
  `daterequest` varchar(100) NOT NULL,
  `daterequestfrom` varchar(100) NOT NULL,
  `ongoingdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `email`, `matching`, `matchrequest`, `matchrequestfrom`, `currentmatch`, `daterequest`, `daterequestfrom`, `ongoingdate`) VALUES
(76, 965517324, 'lightiskira', '420777Xz!', 'lightiskira@gmail.com', 2, 0, '', 'amaneiskira', '', '', ''),
(77, 507271, 'amaneiskira', '420777Xz!', 'amaneiskira@gmail.com', 2, 0, '', 'lightiskira', '', '', ''),
(78, 1758092, 'baka12', '420777Xz!', 'baka12@gmail.com', 0, 0, '', '', '', '', ''),
(79, 582496, 'buku12', '42077Xz!', 'buku12@gmail.com', 0, 0, '', '', '', '', ''),
(80, 8798, 'blueeyes', '420777Xz!', 'blueeyes@gmail.com', 0, 0, '', '', '', '', ''),
(81, 111712, 'kakeru', '420777Xz!', 'kakeru@gmail.com', 2, 0, '', 'mirai', '', '', ''),
(82, 4358, 'mirai', '420777Xz!', 'mirai12@gmail.com', 2, 0, '', 'kakeru', '1', 'kakeru', ''),
(83, 360383475, 'amzara', '420777Xz!', 'amzaraxt@gmail.com', 1, 0, '', '', '', '', ''),
(84, 117788, 'lightiskira', '420777Xz!', 'lightiskira@gmail.com', 0, 0, '', '', '', '', ''),
(85, 9358, 'emma', '420777Xz!', 'emma@gmail.com', 0, 0, '', '', '', '', ''),
(86, 1138059597, 'sinatraa', '420777Xz!', 'jaywon@gmail.com', 0, 0, '', '', '', '', ''),
(87, 49290, 'redcup', '420777Xz!', 'redcup@gmail.com', 1, 0, '', '', '', '', ''),
(88, 9588, 'bluecup', '420777Xz!', 'bluecup@gmail.com', 1, 1, 'redcup', '', '', '', ''),
(89, 1219593204, 'hayley', '420777Xz!', 'hayley1@gmail.com', 0, 0, '', '', '', '', ''),
(90, 6622, 'william', '420777Xz!', 'william@gmail.com', 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usersdate`
--

CREATE TABLE `usersdate` (
  `user_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `datemessage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersdate`
--

INSERT INTO `usersdate` (`user_name`, `date`, `time`, `venue`, `datemessage`) VALUES
('amaneiskira', '', '', '', ''),
('amzara', '', '', '', ''),
('baka12', '', '', '', ''),
('bluecup', '', '', '', ''),
('blueeyes', '', '', '', ''),
('buku12', '', '', '', ''),
('emma', '', '', '', ''),
('hayley', '2022-01-05', '11:11', 'kfc ipoh', 'lets eat kfc'),
('kakeru', '', '', '', ''),
('lightiskira', '', '', '', ''),
('mirai', '2022-02-24', '23:54', 'italian place', 'lets eat italian '),
('redcup', '', '', '', ''),
('sinatraa', '', '', '', ''),
('william', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `height` int(100) NOT NULL,
  `matching` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`user_id`, `user_name`, `age`, `sex`, `location`, `language`, `height`, `matching`) VALUES
(4358, 'mirai', 0, '', '', '', 0, 2),
(6622, 'william', 25, 'female', 'Bangladesh', '', 0, 0),
(8798, 'blueeyes', 0, '', '', '', 0, NULL),
(9358, 'emma', 21, 'female', 'Costa Rica', '', 0, 0),
(9588, 'bluecup', 21, 'male', 'Barbados', '', 0, 1),
(14922, 'blueeyes', 0, '', '', '', 0, NULL),
(49290, 'redcup', 25, 'male', 'Anguilla', '', 0, 1),
(111712, 'kakeru', 25, 'male', 'Bangladesh', '', 0, 2),
(117788, 'lightiskira', 0, '', '', '', 0, NULL),
(507271, 'amaneiskira', 21, 'female', 'Barbados', '', 0, 2),
(582496, 'buku12', 0, '', '', '', 0, 0),
(1758092, 'baka12', 25, 'male', 'Malaysia', '', 0, 0),
(360383475, 'amzara', 21, 'male', 'Malaysia', '', 0, 1),
(965517324, 'lightiskira', 26, 'male', 'Afganistan', '', 0, 2),
(1138059597, 'sinatraa', 24, 'male', 'Belarus', '', 0, 0),
(1219593204, 'hayley', 20, 'male', 'Afganistan', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `password` (`password`),
  ADD KEY `matchup` (`matching`),
  ADD KEY `matchrequest` (`matchrequest`),
  ADD KEY `matchrequestfrom` (`matchrequestfrom`),
  ADD KEY `currentmatch` (`currentmatch`),
  ADD KEY `email` (`email`),
  ADD KEY `ongoingdate` (`ongoingdate`);

--
-- Indexes for table `usersdate`
--
ALTER TABLE `usersdate`
  ADD PRIMARY KEY (`user_name`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `date` (`date`),
  ADD KEY `time` (`time`),
  ADD KEY `venue` (`venue`),
  ADD KEY `datemessage` (`datemessage`);

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `age` (`age`),
  ADD KEY `sex` (`sex`),
  ADD KEY `location` (`location`),
  ADD KEY `language` (`language`),
  ADD KEY `height` (`height`),
  ADD KEY `user_name` (`user_name`) USING BTREE,
  ADD KEY `user_name_2` (`user_name`),
  ADD KEY `matching` (`matching`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
