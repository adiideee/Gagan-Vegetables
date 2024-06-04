-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2023 at 01:05 AM
-- Server version: 5.7.40-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaganvegetables1`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain_info`
--

CREATE TABLE `complain_info` (
  `cid` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `detail` varchar(350) NOT NULL,
  `username` varchar(20) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain_info`
--

INSERT INTO `complain_info` (`cid`, `heading`, `detail`, `username`, `reg_date`) VALUES
(10, 'Welcome', 'Testing', 'Lumesh', '2023-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `oid` int(11) NOT NULL,
  `oqty` varchar(10) NOT NULL,
  `pid` varchar(5) NOT NULL,
  `price` varchar(20) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `usrname` varchar(50) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`oid`, `oqty`, `pid`, `price`, `pname`, `usrname`, `reg_date`) VALUES
(23, '5', '', '40', 'Beans', 'Lumesh', '2023-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `pid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `pdesc` text NOT NULL,
  `image_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`pid`, `pname`, `price`, `pdesc`, `image_path`) VALUES
(44, 'Potato', 15, 'Fress Potato', 'iC7HBvohbJqExqvbKcV3pP.jpg'),
(45, 'Tomato', 10, 'Red Fress Tomato', 'tomatoes-1296x728-feature.jpg'),
(46, 'Cabbage', 20, 'Green Cabbage', '41lw9OiRPNL.jpg'),
(47, 'Kaddu', 20, 'Fress Kaddu', 'pumpkin-kaddu.jpg'),
(48, 'Carrots', 40, 'Fress Red Carrots', 'images.jpg'),
(49, 'Beans', 40, 'Fress Green Beans', 'images (1).jpg'),
(50, 'Lady Finger', 50, 'Fress lady finger', 'organic-Lady-Finger-650x650.jpg'),
(51, 'Cauliflower', 20, 'Fress Cauliflower', 'Go-Garden-snowball-cauliflowercontainer-gardening-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `uid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `umobile` varchar(15) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `uaddress` text NOT NULL,
  `utype` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `uname`, `umobile`, `uemail`, `uaddress`, `utype`) VALUES
(42, 'Lumesh', '8770727871', 'admin123@gmail.com', 'Supela Bhakhara', 'admin'),
(54, 'Lumesh', '6261731690', 'lumesh2911@gmail.com', 'Utai', 'user'),
(55, 'Yogesh Kumar Sahu', '6261731690', 'yogesh123@gmail.com', 'Utai', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain_info`
--
ALTER TABLE `complain_info`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain_info`
--
ALTER TABLE `complain_info`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
