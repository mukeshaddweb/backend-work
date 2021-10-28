-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 02:47 PM
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
-- Database: `ecommerce website`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `useremail` varchar(20) NOT NULL,
  `house-no` int(5) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pin` int(5) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`useremail`, `house-no`, `state`, `country`, `pin`, `time`) VALUES
('12@gmail.com', 65, 'mjhfjf', 'dsfds', 87655, '2021-10-28 13:43:21'),
('6465@gmail.com', 678, 'hjdd', 'hffghj', 34532, '2021-10-28 13:43:21'),
('123fd@gmail.com', 879, 'kjlkjlj', 'jkhkjhkjg', 75443, '2021-10-28 13:45:03'),
('12cxdsd@gmail.com', 99, 'fddsew', 'dfse', 90876, '2021-10-28 13:45:03'),
('adsds@gmail.com', 213, 'sdgsdfh', 'yukjgj', 34664, '2021-10-28 13:47:28'),
('123df345@gmail.com', 890, 'safaq', 'asdg', 90786, '2021-10-28 13:47:28'),
('1243ad@gmail.com', 87, 'adfvsadgfa', 'asdfasd', 23324, '2021-10-28 13:49:03'),
('646sad5@gmail.com', 967, 'sdfa sd', 'asdfasd', 21344, '2021-10-28 13:49:03'),
('123sds@gmail.com', 324, 'adsvsdf', 'gfhjdf', 14222, '2021-10-28 13:49:58'),
('1bd@gmail.com', 324, 'glkfjlf', 'fghjhgj', 90789, '2021-10-28 13:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sr.no` int(3) NOT NULL,
  `product-name` varchar(20) NOT NULL,
  `quantity` int(3) NOT NULL,
  `price` int(5) NOT NULL,
  `delivery-charges` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sr.no`, `product-name`, `quantity`, `price`, `delivery-charges`) VALUES
(1, 'red shirt', 2, 324, 32),
(2, 'black shirt', 2, 454, 12),
(3, 'blue notebook', 34, 213, 32),
(4, 'black shirt cycle', 1, 3435, 56),
(5, 'bag ds', 4, 234, 90),
(6, 'blue chair', 6, 456, 22),
(7, 'glasses blue', 1, 568, 23),
(8, 'green glasses', 3, 324, 56),
(9, 'whiteboard', 2, 654, 6),
(10, 'blackborad', 1, 234, 6);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Sr.no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `doj` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Sr.no`, `name`, `email`, `id`, `doj`) VALUES
(1, 'eaaa', '123ea@gmail.com', '101', '2021-10-28 12:44:49'),
(2, 'ebbb', '123eb@gmail.com', '102', '2021-10-28 12:44:49'),
(3, 'eccc', '123ec@gmail.com', '103', '2021-10-28 12:47:00'),
(4, 'eddd', '123ed@gmail.com', '104', '2021-10-28 12:47:00'),
(5, 'eeee', '123ee@gmail.com', '105', '2021-10-28 12:48:48'),
(6, 'sdf', 'waer@gmail.com', '234', '2021-10-28 13:39:39'),
(7, 'sdf aas', '123seb@gmail.com', '342', '2021-10-28 13:39:39'),
(8, 'asdf sdf', '12s3b@gmail.com', '809', '2021-10-28 13:40:32'),
(9, 'ads hjhj', '12ddd@gmail.com', '398', '2021-10-28 13:40:32'),
(10, 'sdf lop', '1c@gmail.com', '098', '2021-10-28 13:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `Sr.no` int(4) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `ram` int(3) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`Sr.no`, `brand`, `ram`, `color`, `price`) VALUES
(2343, 'mi', 8, 'black', 43255),
(2134, 'lenovo', 4, 'red', 343556),
(7655, 'yomobile', 8, 'pink', 43255),
(3333, 'brand5', 4, 'green', 343556),
(1111, 'milton-laptop', 8, 'black', 50000),
(8888, 'blaky', 4, 'skyblue', 99999),
(2222, 'mi', 2, 'blue', 120000),
(2189, 'brand5', 4, 'black', 20000),
(5432, 'gionee', 8, 'purple', 150000),
(0, 'brand5', 1, 'red', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `mouse`
--

CREATE TABLE `mouse` (
  `Sr.no` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mouse`
--

INSERT INTO `mouse` (`Sr.no`, `name`, `type`, `color`, `price`) VALUES
(12, 'aaa', 'wired', 'black', 234),
(3333, 'eddd', 'wireless', 'green', 456),
(11, 'eee', 'wireless', 'blue', 213),
(32, 'ads hjhj', 'wired', 'skyblue', 234),
(45, 'ddd', 'wireless', 'pink', 568),
(43, 'sdgr', 'wireless', 'skyblue', 234),
(31, 'eee', 'wireless', 'black', 654),
(90, 'ebbb', 'wireless', 'red', 454),
(65, 'eee', 'wireless', 'blue', 213),
(49, 'sdgr', 'wired', 'skyblue', 324);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `username` varchar(20) NOT NULL,
  `useremail` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`username`, `useremail`, `address`, `phone`, `total`) VALUES
('aaa', '123a@gmail.com', '111 aaa street ', 1111111, 234),
('bbb', '123b@gmail.com', '111 bbbb street', 12324, 234234),
('sss', '123s@gmail.com', '111 sss street ', 1111111, 234),
('aaw', '123bd@gmail.com', '111 bbbfffb street', 1232423, 324),
('dfs', '123sd@gmail.com', '111 sss street gfdf', 1111113423, 324),
('sdfv', '123be345@gmail.com', 'sdgegg', 1232443252, 123),
('gsdfh', '123adfd@gmail.com', '111 aaa street sdgg', 11111134221, 78),
('asdsddvx', '121233bd@gmail.com', 'sdgeggsad122 sd', 1232423, 67),
('ajsldf jsld', 'ads@gmail.com', 'asdf asdf 23 dsf', 11111132132, 232),
('mfldsja lsaj', '123basd45@gmail.com', 'sdgegg awer3 ds3 ', 1237892423, 123);

-- --------------------------------------------------------

--
-- Table structure for table `pendrive`
--

CREATE TABLE `pendrive` (
  `Sr.no` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `storage` int(4) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendrive`
--

INSERT INTO `pendrive` (`Sr.no`, `name`, `brand`, `storage`, `price`) VALUES
(2343, 'aaa', 'mi', 32, 213),
(3333, 'eddd', 'brand5', 128, 3435),
(1111, 'ccc', 'milton-pendrive', 16, 213),
(2344, 'sdgr', 'blaky', 8, 432),
(23, 'sdfgs', 'asd', 32, 43255),
(78, 'yowhat', 'fly', 8, 324),
(1232, 'adsf', 'mi', 16, 234),
(2342, 'sdf aa', 'fly', 4, 456),
(6756, 'kjhgfd', 'asdf', 128, 43255),
(9878, 'king', 'fly', 256, 34353);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `type` varchar(20) NOT NULL,
  `product id` int(11) NOT NULL,
  `color` varchar(11) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `stock` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`type`, `product id`, `color`, `brand`, `stock`) VALUES
('mobile', 123, 'black', 'mi', 45),
('laptop', 121, 'black', 'lenovo', 34),
('mobile', 124, 'black', 'yomobile', 23),
('cup', 131, 'black', 'fly', 56),
('notebook', 12, 'black', 'brand1', 78),
('earphone', 7, 'red', 'brand5', 87),
('bottle', 1, 'blue', 'milton', 34),
('shirt', 6, 'black', 'blaky', 24),
('mobile', 765, 'blue', 'asd', 34),
('shirt', 100, 'green', 'fly', 87);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sr.no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `doj` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sr.no`, `name`, `email`, `password`, `doj`) VALUES
(1, 'aaa', '123a@gmail.com', '1234', '2021-10-28 12:32:11'),
(2, 'bbb', '123b@gmail.com', '1234', '2021-10-28 12:33:30'),
(3, 'ccc', '123c@gmail.com', '1234', '2021-10-28 12:34:23'),
(4, 'ddd', '123d@gmail.com', '1234', '2021-10-28 12:34:52'),
(5, 'eee', '123d@gmail.com', '1234', '2021-10-28 12:35:13'),
(6, 'fff', '123f@gmail.com', '1234', '2021-10-28 12:35:37'),
(7, 'ggg', '123g@gmail.com', '1234', '2021-10-28 12:36:00'),
(8, 'hhh', '123h@gmail.com', '1234', '2021-10-28 12:36:19'),
(9, 'iii', '123i@gmail.com', '1234', '2021-10-28 12:36:36'),
(10, 'jjj', '123j@gmail.com', '1234', '2021-10-28 12:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `Sr.no` int(11) NOT NULL,
  `product-id` int(5) NOT NULL,
  `product-name` varchar(20) NOT NULL,
  `price` int(6) NOT NULL,
  `availability` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`Sr.no`, `product-id`, `product-name`, `price`, `availability`) VALUES
(1, 1111, 'red shirt', 213, 'no'),
(2, 2222, 'blackborad', 324, 'yes'),
(3, 3333, 'blue notebook', 234, 'yes'),
(4, 4444, 'black shirt cycle', 454, 'yes'),
(5, 7777, 'bag ds', 568, 'yes'),
(6, 888, 'green glasses', 3435, 'yes'),
(7, 5555, 'red shirt', 213, 'no'),
(8, 8880, 'blue chair', 234, 'yes'),
(9, 6754, 'whiteboard', 568, 'yes'),
(10, 6754, 'blackborad', 454, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Sr.no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sr.no`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`Sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `sr.no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
