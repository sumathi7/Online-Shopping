-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 11:47 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Eggs', 300),
(2, 'Bell peppers', 450),
(3, 'Onion', 200),
(4, 'Tomato', 700),
(5, 'Coffee', 350),
(6, 'Pomegranate', 150),
(7, 'Cake', 1000),
(8, 'Bread', 180),
(9, 'Rice bag', 500),
(10, 'Carrot', 100),
(11, 'Butter', 300),
(12, 'Cool drinks', 50),
(13, 'Ladies finger', 300),
(14, 'Bell peppers', 450),
(15, 'Onion', 200),
(16, 'Tomato', 700),
(17, 'Grapes', 350),
(18, 'Cauliflower', 150),
(19, 'Pomegranate', 1000),
(20, 'Strawberries', 180),
(21, 'Mushroom', 500),
(22, 'Carrot', 100),
(23, 'Apples', 300),
(24, 'Lemons', 50),
(25, 'Puliyogare', 300),
(26, 'Sambar powder', 450),
(27, 'Rice bag', 200),
(28, 'Ghee', 700),
(29, 'Honey', 350),
(30, 'Toor dal', 150),
(31, 'Cooking Oil', 1000),
(32, 'Instant Dosa mix', 180),
(33, 'Chana dal', 500),
(34, 'Fries', 100),
(35, 'Cheese biscuit', 300),
(36, 'Cool drinks', 50),
(37, 'Bread Sticks', 300),
(38, 'Bread', 450),
(39, 'Donuts', 200),
(40, 'Cupcake', 700),
(41, 'Cookie', 350),
(42, 'Chips', 150),
(43, 'Cake', 1000),
(44, 'Brown bread', 180),
(45, 'Macarons', 500),
(46, 'Sweets', 100),
(47, 'Croissants', 300),
(48, 'Chocolate brownies', 50);

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` text NOT NULL,
  `Gender` text NOT NULL,
  `Dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
   `Admin` varchar(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`,`name`,`lname`, `Gender`, `Dob`, `email`, `password`, `contact`, `city`, `address`,`Date`,`Admin`) VALUES
('1','varshini','B','FEMALE', '1998-10-10','varsha@gmail.com','1b53fbad2ce2a0482c28478baa0c2b87','7892630783','mysore','ews 93,1st stage,mysore','2019-07-17 20:13:15','1'),
('2','kushi','V','FEMALE', '1999-12-12','kushi@gmail.com','e91d2b63cf976a0016ee701996793e05','9686945458','mysore','45/9, M block,8th cross,dattagalli,mysore','2019-07-18 10:41:13', '0');

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE `feed_back` (
  `name` varchar(25) NOT NULL,
  `phno` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_back`
--

INSERT INTO `feed_back` (`name`, `phno`,`email`, `feedback`) VALUES
('Vinay', '53201430', 'vin@gmail.com', 'Good website'),
('Varshini','7892630783','varsha@gmail.com',' Hello,thank you for the service'),
('Kushi', '7353327421', 'kushi@gmail.com', 'Am kushi,nice website ');

-- --------------------------------------------------------
--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 3, 3, 'Added to cart'),
(8, 3, 4, 'Added to cart'),
(9, 3, 5, 'Added to cart'),
(10, 3, 11, 'Added to cart'),
(11, 1, 9, 'Added to cart'),
(12, 1, 2, 'Added to cart'),
(13, 1, 8, 'Added to cart'),
(14, 4, 2, 'Confirmed'),
(18, 5, 11, 'Added to cart'),
(20, 5, 5, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
  
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
