-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 08:10 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_password`) VALUES
(3, 'admin', 'shadab@123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(250) NOT NULL,
  `p_names` varchar(250) NOT NULL,
  `cus_name` varchar(250) NOT NULL,
  `contact_no` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `zip_code` int(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `quantity` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_names`, `cus_name`, `contact_no`, `email`, `address`, `country`, `details`, `zip_code`, `time`, `quantity`) VALUES
(1, 'Embroidered Marina Dress with Wool Shawl Dupatta', 'Shadab Ahmed', '03123456789', 'shadabbusiness14@gmail.com', 'Karachi', 'pakistan', 'Out of country', 74800, '2020-11-21 19:18:32', 0),
(2, 'Elegant Embroidered Linen Dress with Wool Shawl', 'Ali Marfani', '03123456788', 'aptechali2@gmail.com', 'Karachi', '-- Country --', 'In Country', 0, '2020-11-21 19:19:35', 0),
(3, 'Elegant Embroidered Linen Dress with Wool Shawl', 'Faris Abbasi', '03123456789', 'farisabbasi@gmail.com', 'Karachi', 'uae', 'Out Of Country', 74800, '2020-11-21 19:21:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `product_type` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `c_price` int(250) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `tags` varchar(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `details`, `image`, `product_type`, `price`, `c_price`, `brand`, `tags`, `time`) VALUES
(12, 'Heavy Panel Embroidered Khaddar Dress with Wool', 'Soft Material', '1605824393_A1.jpg', 'dress', 1795, 3000, '', '', '2020-11-19 22:19:53'),
(13, 'Elegant Embroidered Linen Dress with Wool Shawl', 'Soft Quality', '1605825479_A2.jpg', 'dress', 1500, 2500, '', '', '2020-11-19 22:37:59'),
(14, 'Traditional Embroidered Khaddar Dress with Wool', 'Soft Quality', '1605825528_A3.jpg', 'dress', 1500, 2565, '', '', '2020-11-19 22:38:48'),
(15, 'Embroidered Marina Dress with Wool Shawl Dupatta', 'Soft Quality', '1605825562_A4.jpg', 'dress', 2500, 4000, '', '', '2020-11-19 22:39:22'),
(16, 'Indian Embroidered Maroon Chiffon Maxi', 'Indian Embroidered', '1605825698_A5.jpg', 'dress', 4000, 7000, '', '', '2020-11-19 22:41:38'),
(17, 'Embroidered Velvet Dress with Jamawar Trouser', 'Embroidered Velvet', '1605825731_A6.jpg', 'dress', 3000, 4500, '', '', '2020-11-19 22:42:11'),
(18, 'Elegant Embroidered Net Dress with Chiffon Dupatta', 'Elegant Embroidered', '1605825769_A7.jpg', 'dress', 7000, 10000, '', '', '2020-11-19 22:42:49'),
(19, 'Indian Embroidered Navy Blue Chiffon Maxi', 'Indian Embroidered', '1605825868_A8.jpg', 'dress', 3195, 4500, '', '', '2020-11-19 22:44:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
