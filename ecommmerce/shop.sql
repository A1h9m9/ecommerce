-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 07:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `ordering` int(11) NOT NULL,
  `visibilty` tinyint(4) NOT NULL DEFAULT 0,
  `allow_comment` tinyint(4) NOT NULL DEFAULT 0,
  `allow_ads` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `ordering`, `visibilty`, `allow_comment`, `allow_ads`) VALUES
(7, 'electronics', 'electronics', 2, 0, 0, 0),
(8, 'cell phones', 'cell phones', 3, 0, 0, 0),
(9, 'hand made', 'hand made items', 4, 0, 0, 0),
(10, 'clothing', 'clothing', 5, 0, 0, 0),
(11, 'computers', 'computers items', 1, 0, 0, 0),
(12, 'software', 'software items', 6, 0, 0, 0),
(13, 'toys and game', 'toys and game for ', 7, 0, 0, 0),
(14, 'smart home', 'smart home', 7, 0, 0, 0),
(15, 'nike product', 'nike product', 8, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `c_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comment_date` date NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`c_id`, `comment`, `status`, `comment_date`, `item_id`, `user_id`) VALUES
(16, 'very nice', 1, '2021-10-13', 22, 34),
(17, 'welcome', 1, '2021-10-19', 22, 34);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `add_date` date NOT NULL,
  `country_made` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `rating` smallint(6) NOT NULL,
  `approve` tinyint(4) NOT NULL DEFAULT 0,
  `cat_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `add_date`, `country_made`, `image`, `status`, `rating`, `approve`, `cat_id`, `member_id`) VALUES
(11, 'keyboard', 'very good keyboard ', '$10', '2021-10-09', 'china', '', '1', 4, 0, 11, 34),
(12, 't-shirt', 'very good t-shirt', '$50', '2021-10-09', 'Europe', '', '1', 5, 0, 10, 35),
(13, 'speakers', 'good speakers', '$30', '2021-10-09', 'china', '', '2', 4, 0, 7, 31),
(14, 'windows10', 'windows 10 promo code', '$100', '2021-10-09', 'Europe', '', '1', 5, 0, 12, 35),
(15, 'windows 11', 'windows 11 promo', '$100', '2021-10-09', 'Europe', '', '1', 5, 0, 12, 41),
(16, 'shirt', ' high Quality shirt ', '$50', '2021-10-09', 'china', '', '1', 4, 0, 10, 31),
(17, 'lunix', 'lunix software', '$100', '2021-10-09', 'Europe', '', '1', 5, 0, 12, 37),
(18, 'windows vista', 'windows vista original', '$100', '2021-10-10', 'Europe', '', '1', 5, 0, 12, 31),
(19, 'windows xp', 'windows xp original', '$200', '2021-10-10', 'USA', '', '1', 5, 0, 12, 35),
(20, 'windows', 'windows', '$200', '2021-10-10', 'Europe', '', '1', 5, 0, 11, 37),
(21, 'windows', 'windows', '$200', '2021-10-10', 'Europe', '', '2', 4, 0, 12, 34),
(22, 'play station 4', 'play station 4', '$200', '2021-10-10', 'Europe', '', '1', 4, 0, 13, 37),
(23, 'play station 4 game ', 'play station 4 game ', '$50', '2021-10-10', 'USA', '', '1', 5, 0, 13, 34),
(24, 'electronics', 'pc and mobile phones', '$100', '2021-10-13', 'Europe', '', '1', 5, 0, 12, 37),
(25, 'electronics', 'pc and mobile phones', '$100', '2021-10-13', 'Europe', '', '1', 5, 0, 13, 35),
(26, 'electronics', 'pc and mobile phones', '$100', '2021-10-13', 'Europe', '', '1', 5, 0, 12, 57),
(27, 'electronics', 'pc and mobile phones', '$100', '2021-10-13', 'Europe', '', '1', 5, 0, 9, 34),
(28, 'electronics', 'pc and mobile phones', '$100', '2021-10-14', 'Europe', '', '1', 4, 0, 12, 1),
(29, 'electronics', 'pc and mobile phones', '$100', '2021-10-14', 'Europe', '', '1', 4, 0, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf16 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Fullname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT 0,
  `trustStatus` int(11) NOT NULL DEFAULT 0,
  `regStatus` int(11) NOT NULL DEFAULT 0,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `Email`, `Fullname`, `GroupID`, `trustStatus`, `regStatus`, `Date`) VALUES
(1, 'ahmed', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ahmed@gmail.com', 'ahmedsamy', 1, 0, 0, '2021-10-05'),
(31, 'mohamed', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'samy@gmail.com', 'ramadan ahmed', 0, 0, 0, '2021-09-25'),
(34, 'raneem', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'raneem1@gamil.com', 'raneem sayed', 1, 1, 1, '2021-09-28'),
(35, 'maysa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ahmed@gmail.com', 'samy ahmed', 0, 0, 1, '2021-09-27'),
(37, 'yassen', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'yassen@gmail.cpm', 'yassen ahmed', 0, 0, 0, '2021-09-28'),
(41, 'samy', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'samy@gmail.com', ' samyahmed', 0, 0, 1, '2021-10-07'),
(57, 'turki', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'turki@gmail.com', 'turki ahmred', 0, 0, 1, '2021-10-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `item_comment` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_1` (`member_id`),
  ADD KEY `cat_1` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `item_comment` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `cat_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_1` FOREIGN KEY (`member_id`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
