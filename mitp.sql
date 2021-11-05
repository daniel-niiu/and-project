-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 11:45 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitp`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers_profile`
--

CREATE TABLE `customers_profile` (
  `customer_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `credit_limit` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `volume (L)` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `price`, `volume (L)`) VALUES
(1000, 'Quartz INEO MC3 5W30', 'Fully Synthetic', '369.00', '5.00'),
(1001, 'Quartz INEO HTC 5W30', 'Fully Synthetic', '365.00', '5.00'),
(1002, 'Quartz 9000 Future GF6 5W30', 'Fully Synthetic', '268.00', '4.00'),
(1003, 'Quartz 9000 Future GF6 0W20', 'Fully Synthetic', '193.00', '4.00'),
(1004, 'Quartz 9000 5W40/5W50/0W40', 'Fully Synthetic', '75.00', '1.00'),
(1005, 'Quartz 9000 5W40/5W50/0W40', 'Fully Synthetic', '261.00', '4.00'),
(1006, 'Quartz 9000 Energy 0W40', 'Fully Synthetic', '281.00', '4.00'),
(1007, 'Quartz 8000 Future GF6 5W30', 'Fully Synthetic', '179.00', '4.00'),
(1008, 'Quartz 8000 Future GF6 0W20', 'Fully Synthetic', '154.00', '3.00'),
(1009, 'Quartz 8000 5W40', 'Fully Synthetic', '172.00', '4.00'),
(1010, 'Quartz Racing 10W60', 'Fully Synthetic', '76.00', '1.00'),
(1011, 'Quartz 7000 Future GF6 5W30', 'Semi Synthetic', '153.00', '4.00'),
(1012, 'Quartz 7000 10W40', 'Semi Synthetic', '46.00', '1.00'),
(1013, 'Quartz 7000 10W40', 'Semi Synthetic', '148.00', '4.00'),
(1014, 'Quartz 7000 15W50', 'Semi Synthetic', '149.00', '4.00'),
(1015, 'Quartz 5000 Future GF5 10W30', 'Mineral', '37.00', '1.00'),
(1016, 'Quartz Future GF5 10W30', 'Mineral', '78.00', '3.00'),
(1017, 'Quartz Futute GF5 10W30', 'Mineral', '102.00', '4.00'),
(1018, 'Quartz 5000 15W40', 'Mineral', '36.00', '1.00'),
(1019, 'Quartz 5000 15W40', 'Mineral', '105.00', '4.00'),
(1020, 'Quartz 5000 15W50', 'Mineral', '36.00', '1.00'),
(1021, 'Quartz 5000 15W50', 'Mineral', '105.00', '4.00'),
(1022, 'Quartz 4000 10W30', 'Mineral', '69.00', '3.00'),
(1023, 'Quartz 3000 20W50', 'Mineral', '82.00', '4.00'),
(1024, 'Quartz Diesel 9000 5W30', 'Diesel Engine', '420.00', '7.00'),
(1025, 'Quartz Diesel 7000 10W30', 'Diesel Engine', '230.00', '7.00'),
(1026, 'Quartz Diesel 9000 5W30', 'Diesel Engine', '420.00', '7.00'),
(1027, 'Quartz Diesel 7000 10W30', 'Diesel Engine', '230.00', '7.00'),
(1028, 'Rubia TIR 7400 10W40', 'Diesel Engine', '137.00', '5.00'),
(1029, 'Rubia TIR 7400 15W40', 'Diesel Engine', '108.00', '5.00'),
(1030, 'Rubia Fleet HD 300 15W40', 'Diesel Engine', '102.00', '5.00'),
(1031, 'Rubia Fleet HD 200 20W40', 'Diesel Engine', '94.00', '5.00'),
(1032, 'Rubia Fleet HD 200 SAE 40', 'Diesel Engine', '94.00', '5.00'),
(1033, 'Coolelf Auto Supra', 'Specialties', '25.00', '1.00'),
(1034, ' Turbo Cool Ready Mix', 'Specialties', '21.00', '1.00'),
(1035, ' HBF 4 DOT 4', 'Specialties', '32.00', '0.50'),
(1036, 'HBF 3 DOT 3', 'Specialties', '27.00', '0.50'),
(1037, 'Gasoline Engine Cleaner', 'Specialties', '34.00', '0.25'),
(1038, 'Diesel Enginer Cleaner', 'Specialties', '34.00', '0.25'),
(1039, 'Gasoline Octane Booster', 'Specialties', '29.00', '0.25');

-- --------------------------------------------------------

--
-- Table structure for table `sales_advisors`
--

CREATE TABLE `sales_advisors` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ranking` varchar(50) NOT NULL,
  `area_covered` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers_profile`
--
ALTER TABLE `customers_profile`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sales_advisors`
--
ALTER TABLE `sales_advisors`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers_profile`
--
ALTER TABLE `customers_profile`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1040;

--
-- AUTO_INCREMENT for table `sales_advisors`
--
ALTER TABLE `sales_advisors`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers_profile` (`customer_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `sales_advisors` (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
