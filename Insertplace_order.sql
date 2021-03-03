-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 11:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `place_order`
--

CREATE TABLE `place_order` (
  `order_id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Product` varchar(50) NOT NULL,
  `Order_Date` datetime NOT NULL,
  `Payment_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place_order`
--

INSERT INTO `place_order` (`order_id`, `FirstName`, `LastName`, `Product`, `Order_Date`, `Payment_Type`) VALUES
(1, 'supinder', 'kaur', 'Networking', '2021-02-28 19:24:51', 'credit'),
(2, 'supinder', 'kaur', 'Android', '2021-02-28 19:26:10', 'credit'),
(3, 'priya', 'sharma', 'PHP', '2021-02-28 19:35:05', 'credit'),
(4, 'mandeep', 'kaur', 'Networking', '2021-02-28 19:55:20', 'debit'),
(5, 'kamaldeep', 'kaur', 'PHP', '2021-02-28 19:57:46', 'debit'),
(6, 'preet', 'kaur', 'Android', '2021-03-03 12:49:31', 'debit'),
(7, 'maninder', 'singh', 'Networking', '2021-03-03 12:50:15', 'credit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `place_order`
--
ALTER TABLE `place_order`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `place_order`
--
ALTER TABLE `place_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
