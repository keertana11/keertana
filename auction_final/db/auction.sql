-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 07:29 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`) VALUES
('auction@gmail.com', 'Auction@123');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `email` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `min_price` double(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`email`, `title`, `min_price`) VALUES
('kavya@gmail.com', 'Lenovo legion', 123456),
('kavya@gmail.com', 'vivox50', 55),
('kavya@gmail.com', 'Yamaha ray ZR', 55),
('mounika@gmail.com', 'Lenovo legion', 67895),
('mounika@gmail.com', 'vivox50', 11),
('mounikaa@gmail.com', 'Yamaha ray ZR', 1234555);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent`) VALUES
(1, 'Electronics', 0),
(2, 'Automobiles', 0),
(3, 'Furniture', 0),
(5, 'Mobiles', 1),
(6, 'Laptops', 1),
(7, 'Fridges', 1),
(8, 'T.V\'s', 1),
(9, 'Computers', 1),
(10, 'Cars', 2),
(11, 'Bykes', 2),
(12, 'Cycles', 2),
(13, 'Trucks', 2),
(14, 'Sofas', 3),
(15, 'Cupboards', 3),
(16, 'Tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cust_registration`
--

CREATE TABLE `cust_registration` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_registration`
--

INSERT INTO `cust_registration` (`first_name`, `last_name`, `gender`, `address`, `phone`, `email`, `password`) VALUES
('mounika', 'm', 'female', '546 jiskld', '567890', 'mounika@gmail.com', 'mona'),
('archana', 'nethavath', 'female', 'warangal', '56789', 'archana@gmail.com', 'archana'),
('kavya', 'gvbj', 'female', 'xfcgvhbkj,', '6789', 'kavya@gmail.com', 'kavya');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `min_price` varchar(255) NOT NULL,
  `categorey` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`email`, `title`, `min_price`, `categorey`, `image`, `date`, `description`, `featured`, `p_id`) VALUES
('govte.keertana11@gmail.com', 'vivox50', '30000', 'electronics', './images/vivox50.jpg', '2021-08-20', ' Display 6.56-inch (1080x2376) Processor Qualcomm Snapdragon 730 Front Camera 32MP Rear Camera 48MP + 13MP + 8MP + 5MP RAM 8GB Storage 128GB Battery Capacity 4200mAh', 1, 1),
('govte.keertana11@gmail.com', 'Yamaha ray ZR', '90000', 'automobile', './images/yamaha.jpg', '2021-08-20', 'The all new RayZR is a perfect mix of a stealthy looks, aggressive feel/cuts and thrilling performance as a by-product of the design concept of â€œArmoured Energyâ€. Weighing in at 99kgs combined with a 125cc Fi Blue core engine the all new RayZR is a qu', 1, 2),
('roopa@gmail.com', 'Lenovo legion', '50000', 'electronics', './images/lenovo.jpg', '2021-08-20', 'Lenovo Legion Y7000 9th gen Intel Core i5 15.6 inch FHD Gaming Laptop (8GB/1TB HDD+256 GB SSD/Windows 10/NVIDIA GTX 1050 3GB Graphics/Black/2.3Kg), 81V4000LIN with Gaming Mouse ', 1, 3),
('roopa@gmail.com', 'Durian berry sofa', '20000', 'furniture', './images/durian berry.jpg', '2021-08-20', 'A very good sofa comfortable to sit sleep and enjoy by watching a movie with ur family. decorate your house with this sofa.', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `seller_login`
--

CREATE TABLE `seller_login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller_registration`
--

CREATE TABLE `seller_registration` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_registration`
--

INSERT INTO `seller_registration` (`first_name`, `last_name`, `gender`, `address`, `phone`, `email`, `password`) VALUES
('Keertana', 'govte', 'female', '4-53-37/4,jagathgirigutta, hyderabad', '7993426793', 'govte.keertana11@gmail.com', 'Keertana@11'),
('roopa', 'banoth', 'female', 'hjkk', '4567', 'roopa@gmail.com', 'roopa'),
('kavya', 'ggg', 'female', '34 fghj jjl;.', '45678', 'kavya@gmail.com', 'kavya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`email`,`title`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `date` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
