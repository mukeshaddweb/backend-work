-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2021 at 02:07 PM
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
-- Database: `YourShop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'mukesh', 'mukesh123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category_image`
--

CREATE TABLE `category_image` (
  `id` bigint(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `image_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_image`
--

INSERT INTO `category_image` (`id`, `name`, `image_url`) VALUES
(1, 'women', 'images/women.jpg'),
(2, 'children', 'images/children.jpg'),
(3, 'men', 'images/men.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` bigint(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_url` varchar(400) NOT NULL,
  `price` double(8,2) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `type` varchar(20) NOT NULL,
  `hide` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `name`, `image_url`, `price`, `tag`, `description`, `type`, `hide`) VALUES
(1, 'white popo tshirt pack of 2', 'images/cloth_2.jpg', 250.00, 'Finding perfect t-shirt', 'perfect white tshirts for kids of age between 6 to 12', 'topwears', 1);

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE `featured_products` (
  `id` bigint(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`id`, `name`, `image_url`, `tag`, `price`) VALUES
(1, 'Tank Top', 'images/cloth_1.jpg', 'Finding perfect t-shirt', 50.00),
(2, 'Corater', 'images/cloth_2.jpg', 'Finding perfect product', 50.00),
(3, 'Polo Shirt', 'images/cloth_2.jpg', 'Finding perfect t-shirt', 50.00),
(4, 'Blue t-shirt', 'images/cloth_3.jpg', 'Finding perfect t-shirt', 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `id` bigint(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_url` varchar(400) NOT NULL,
  `price` double(8,2) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `type` varchar(20) NOT NULL,
  `hide` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`id`, `name`, `image_url`, `price`, `tag`, `description`, `type`, `hide`) VALUES
(1, 'Men Regular Fit Solid Spread Collar Casual Shirt', 'images/m1.jpeg', 500.00, 'Finding perfect t-shirt', 'blue snickers with new trandy style', 'topwears', 0),
(2, 'Fynota Fashion  Cap Cap', 'images/m2.jpeg', 170.00, 'Finding perfect t-shirt', 'blue jacket with new trandy style', 'accessories', 0),
(3, 'FINIVO FASHION  Men Regular Fit Solid Spread Collar Casual Shirt', 'images/m3.jpeg', 600.00, 'Finding perfect t-shirt', 'white top with new trandy style', 'topwears', 0),
(4, 'Urbano Fashion  Printed Men Round Neck Dark Green T-Shirt', 'images/m4.jpeg', 420.00, 'Finding perfect jacket', 'blue snickers with new trandy style', 'topwears', 0),
(5, 'Urbano Fashion  Slim Men Black Jeans', 'images/m5.jpeg', 684.00, 'Finding perfect t-shirt', 'white top with new trandy style', 'bottomwears', 1),
(6, 'blue high neck jacket', 'images/m6.jpg', 500.00, 'Finding perfect jacket', 'blue jacket with new trandy style', 'topwears', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `id` bigint(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_url` varchar(400) NOT NULL,
  `price` double(8,2) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `type` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `name`, `image_url`, `price`, `tag`, `description`, `type`, `category`) VALUES
(1, 'Tank Top', 'images/cloth_1.jpg', 50.00, 'Finding perfect t-shirt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus soluta dolores iusto!', 'tshirt', 'women'),
(2, 'Polo Shirt', 'images/cloth_2.jpg', 50.00, 'Finding perfect t-shirt', ' Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. ', 'tshirt', 'children'),
(3, 'Blue t-shirt', 'images/cloth_3.jpg', 50.00, 'Finding perfect product', 'perfect blue tshirts for kids of age between 6 to 12', 'tshirt', 'children'),
(4, 'Corater', 'images/shoe_1.jpg', 50.00, 'Finding perfect product', 'blue snickers with new trandy style', 'shoes', 'all'),
(5, 'blue high neck jacket', 'images/jacket.jpg', 50.00, 'Finding perfect jacket', 'blue jacket with new trandy style', 'jacket', 'men');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `Sr.no` int(4) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `position` varchar(40) NOT NULL,
  `about` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id` bigint(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_url` varchar(400) NOT NULL,
  `price` double(8,2) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `type` varchar(20) NOT NULL,
  `hide` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `category_image`
--
ALTER TABLE `category_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_products`
--
ALTER TABLE `featured_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`Sr.no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
