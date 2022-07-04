-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 01:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lougehdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(20) NOT NULL,
  `customer_firstname` varchar(50) NOT NULL,
  `customer_lastname` varchar(50) NOT NULL,
  `customer_middlename` varchar(50) DEFAULT NULL,
  `customer_address` varchar(50) NOT NULL,
  `customer_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_firstname`, `customer_lastname`, `customer_middlename`, `customer_address`, `customer_contact`) VALUES
(1, 'Herzlia Jane', 'Barangan', 'Ramos', 'Prk. Malakas', '09000000034');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_transaction`
--

CREATE TABLE `delivery_transaction` (
  `delivery_transaction_id` int(20) UNSIGNED NOT NULL,
  `transaction_date` datetime NOT NULL DEFAULT current_timestamp(),
  `supplier_name` varchar(50) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `product_description` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost_per_unit` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_transaction`
--

INSERT INTO `delivery_transaction` (`delivery_transaction_id`, `transaction_date`, `supplier_name`, `barcode`, `product_description`, `quantity`, `cost_per_unit`, `total`) VALUES
(3, '2022-07-04 19:30:47', 'Juan Supplies', '123535455636400', 'Century Tuna', 303, 40, 12120);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `barcode` varchar(50) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost_per_unit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`barcode`, `product_description`, `quantity`, `cost_per_unit`) VALUES
('123535455636400', 'Century Tuna', 2, 40);

-- --------------------------------------------------------

--
-- Table structure for table `sales_transaction`
--

CREATE TABLE `sales_transaction` (
  `sales_transaction_id` int(20) NOT NULL,
  `transaction_date` datetime NOT NULL DEFAULT current_timestamp(),
  `customer_name` varchar(100) NOT NULL,
  `barcode` varchar(30) NOT NULL,
  `product_description` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost_per_unit` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_transaction`
--

INSERT INTO `sales_transaction` (`sales_transaction_id`, `transaction_date`, `customer_name`, `barcode`, `product_description`, `quantity`, `cost_per_unit`, `total`) VALUES
(1, '2022-07-04 19:30:20', 'Herzlia Jane Barangan', '123535455636400', 'Century Tuna', 3, 40, 120);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` bigint(20) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_contact` varchar(20) NOT NULL,
  `supplier_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `supplier_contact`, `supplier_address`) VALUES
(1, 'Juan Supplies', '094342434424', 'General Santos City');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery_transaction`
--
ALTER TABLE `delivery_transaction`
  ADD PRIMARY KEY (`delivery_transaction_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`barcode`);

--
-- Indexes for table `sales_transaction`
--
ALTER TABLE `sales_transaction`
  ADD PRIMARY KEY (`sales_transaction_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery_transaction`
--
ALTER TABLE `delivery_transaction`
  MODIFY `delivery_transaction_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_transaction`
--
ALTER TABLE `sales_transaction`
  MODIFY `sales_transaction_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
