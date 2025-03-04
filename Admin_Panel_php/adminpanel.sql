-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2025 at 08:26 AM
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
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpage`
--

CREATE TABLE `addpage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addpage`
--

INSERT INTO `addpage` (`id`, `name`, `content`, `status`) VALUES
(1, 'Parveen-', '			  			  this is content 			  			  ', 1),
(2, 'Service 2', 'This is content from service	2		  			  ', 1),
(3, 'Telecom', 'This is content', 1),
(4, 'Ravind', 'This is content service			  			  ', 0),
(5, 'Service 3', '			  This is content service3		  			  			  			  ', 1),
(6, 'abc', '			  fkjdfkj			  ', 1),
(7, 'Arvind Arora', 'this is content\r\n	  			  ', 1),
(8, 'Satnam Traders', 'Hosiery department situated at ludhiana	  			  ', 0),
(9, 'book market', 'book market is near by chaura bazar	  			  ', 0),
(10, 'abc-123', 'this  is abc-123   			  ', 0),
(11, 'Kashish', 'this is content by Kashish			  			  ', 1),
(12, 'luxman', '		content	  			  ', 1),
(13, 'Raghu', '		content	  			  ', 1),
(14, 'Kamla', '			kamla content  			  ', 1),
(15, 'munja', '		munja content	  			  ', 1),
(16, 'Kushi', 'kushi content			  			  ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`) VALUES
(1, 'Shoes'),
(2, 'Jackets'),
(3, 'Mobile'),
(4, 'electronics'),
(5, 'Shoes-123'),
(6, 'Toys'),
(7, 'XYZ Hosiey');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'ayush');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdescription` text NOT NULL,
  `pprice` int(11) NOT NULL,
  `pimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `pname`, `pdescription`, `pprice`, `pimage`) VALUES
(1, 1, 'Nike Jorden', 'Best shoe ', 250, '1723518468682.jpg'),
(2, 2, 'Black leather Jacket', 'Best look', 200, '1723518518570.avif'),
(3, 3, 'iphone se 4', 'iphone se apple budget phone', 300, '1723518566069.jpg'),
(4, 6, 'toys desert eagle gun', 'best low budget kids toy gun', 1, '1723518623562.jpg'),
(5, 4, 'Fridge', 'low electricity consume refrigerator', 100, '1723518687079.jpg'),
(6, 5, 'Fake Jorden', 'Fake jordeer ', 100, '1723518729029.avif'),
(7, 1, 'addidas Shoes', 'Latest adidas shoes', 200, '1723518815311.jpg'),
(8, 3, 'Nokia 3310', 'best durable phone eveer', 20, '1723518845659.avif'),
(9, 4, 'Ac ', 'best cooling ac and heater in built', 100, '1723518876994.jpg'),
(10, 1, 'Skecher shoe ', 'skecher shoe new', 0, '1723518968284.avif'),
(11, 6, 'toy truck ', 'toy truck for kids', 0, '1723519006835.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpage`
--
ALTER TABLE `addpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpage`
--
ALTER TABLE `addpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
