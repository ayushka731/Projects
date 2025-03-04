-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 12:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `productid`, `qty`) VALUES
(1, 0, 1, 3),
(2, 0, 1, 3),
(3, 3, 1, 51),
(4, 1, 2, 100),
(5, 1, 1, 51),
(6, 1, 1, 510),
(7, 4, 1, 290),
(8, 1, 1, 510),
(9, 4, 5, 2100),
(10, 4, 3, 510),
(11, 4, 3, 290),
(12, 4, 4, 11),
(13, 4, 4, 11),
(14, 4, 4, 51),
(15, 1, 7, 100),
(16, 4, 3, 1),
(17, 4, 5, 190),
(18, 4, 1, 30),
(19, 4, 1, 30),
(20, 4, 1, 30),
(21, 4, 1, 30),
(22, 4, 2, 3),
(23, 4, 2, 3),
(24, 4, 3, 3),
(25, 4, 15, 3),
(26, 4, 7, 1),
(27, 4, 7, 1),
(28, 4, 7, 1),
(29, 1, 1, 51),
(30, 1, 14, 3),
(31, 2, 1, 12),
(32, 2, 1, 1),
(33, 2, 7, 3),
(34, 3, 14, 3),
(35, 3, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`) VALUES
(1, 'TVs'),
(2, 'Dishwasher'),
(3, 'Ranges'),
(4, 'Computer'),
(5, 'Blu ray & DVD player'),
(6, 'Projectors'),
(7, 'Hometheater System'),
(8, 'Cameras'),
(9, 'Camcorders'),
(10, 'Washer & Dryers'),
(11, 'Refrigerators'),
(12, 'Microwaves');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'Ayush', 'rj6233459@gmail.com', 'this is test message'),
(2, 'Ayush', 'rj6233459@gmail.com', 'message'),
(3, 'Ayush', 'rj6233459@gmail.com', 'message'),
(4, 'nitin', 'nitin@gmail.com', 'this is test message'),
(5, 'arman', 'arman@gmail.com', 'this is from arman\r\n'),
(6, 'ayush', 'ayushgmail.com', 'this is from ayush');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productprice` int(11) NOT NULL,
  `productquantity` int(11) NOT NULL,
  `productimage` varchar(255) NOT NULL,
  `displayorder` varchar(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `special` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categoryid`, `productname`, `productprice`, `productquantity`, `productimage`, `displayorder`, `status`, `special`) VALUES
(1, 1, 'Acer Television', 13000, 286, 'proimages/acer.jpg', '1', 'on', 1),
(2, 8, 'Nikon D700', 3000, 197, 'proimages/cam.jpg', '2', 'on', 0),
(3, 8, 'Kodak Camera', 3500, 47, 'proimages/cam0.jpg', '3', 'on', 1),
(4, 9, 'Sony PMW-EDCAM Full HD Camcoder', 4999, 55, 'proimages/cmco1.jpg', '1', 'on', 1),
(5, 9, 'LG Camcoder', 16000, 25, 'proimages/cam1.jpg', '5', 'on', 0),
(6, 1, 'Acer Monitor', 15000, 30, 'proimages/sam.jpg', '6', 'on', 0),
(7, 2, 'LG dishwasher', 4500, 15, 'proimages/dw.jpg', '5', 'on', 0),
(8, 2, 'samsung dishwasher', 2100, 520, 'proimages/dw1.jpeg', '6', 'on', 0),
(9, 6, 'samsung projector', 1300, 210, 'proimages/sampro.jpg', '2', 'on', 1),
(10, 4, 'Dell optiplex790 desktop computer', 9100, 420, 'proimages/dellcom.jpg', '9', 'on', 0),
(11, 5, 'Naviskauto DVD Player', 1050, 480, 'proimages/dvd1.jpg', '10', 'on', 0),
(12, 7, 'LG Home Theather ', 959, 190, 'proimages/theather1.jpg', '9', 'on', 1),
(13, 10, 'Handyman Washer dryer', 497, 204, 'proimages/wd.jpg', '11', 'on', 1),
(14, 11, 'LG Refrigerator Double Door', 5999, 20, 'proimages/ref1.jpg', '12', 'on', 1),
(15, 12, 'Oster 0.9u microwave oven black', 4800, 153, 'proimages/mw1.jpg', '13', 'on', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'nitin', 'nitin@gmail.com', 'helloindia'),
(2, 'ayush', 'ayushgmail.com', '123'),
(3, 'arman', 'arman@gmail.com', '147'),
(4, 'Mukesh ', 'mukesh@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
