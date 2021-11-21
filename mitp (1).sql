-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 06:27 PM
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
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `sales_total` decimal(10,2) DEFAULT NULL,
  `sales_location` varchar(50) DEFAULT NULL,
  `sales_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`sales_total`, `sales_location`, `sales_date`) VALUES
('15000.00', 'Sibu', '2021-11-14 16:08:03'),
('80000.00', 'Kuching', '2021-11-14 09:08:03'),
('32000.00', 'Miri', '2021-11-14 09:08:03'),
('91000.00', 'Kuching', '2021-11-02 16:10:51'),
('12300.00', 'Kota Kinabalu', '2021-11-02 16:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `festival`
--

CREATE TABLE `festival` (
  `sales_total` decimal(10,2) DEFAULT NULL,
  `sales_date` datetime DEFAULT NULL,
  `festival` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `festival`
--

INSERT INTO `festival` (`sales_total`, `sales_date`, `festival`) VALUES
('12890.00', '2021-02-12 16:37:20', 'Chinese New Year'),
('21900.00', '2021-02-13 16:37:20', 'Chinese New Year'),
('24000.00', '2021-05-13 16:38:16', 'Hari Raya'),
('21702.00', '2021-05-14 16:39:04', 'Hari Raya'),
('25182.00', '2021-06-01 16:39:38', 'Hari Gawai'),
('23124.00', '2021-06-02 16:40:05', 'Hari Gawai'),
('15093.00', '2021-12-24 16:40:29', 'Christmas'),
('21123.00', '2021-12-25 16:40:54', 'Christmas');

-- --------------------------------------------------------

--
-- Table structure for table `monthly`
--

CREATE TABLE `monthly` (
  `sales_total` decimal(10,2) DEFAULT NULL,
  `sales_date` datetime DEFAULT NULL,
  `month` varchar(50) NOT NULL,
  `sales_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monthly`
--

INSERT INTO `monthly` (`sales_total`, `sales_date`, `month`, `sales_location`) VALUES
('3192832.00', '2021-07-30 01:25:41', 'July', 'Kuching'),
('482198.00', '2021-08-27 01:25:41', 'August', 'Kuching'),
('328174.00', '2021-09-30 01:26:34', 'September', 'Kuching'),
('453628.00', '2021-10-29 01:27:00', 'October', 'Kuching');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `volume` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `price`, `volume`) VALUES
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
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_date` datetime NOT NULL,
  `sales_quantity` int(11) DEFAULT NULL,
  `sales_total` decimal(10,2) DEFAULT NULL,
  `sales_location` varchar(50) DEFAULT NULL,
  `staff_username` varchar(50) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_date`, `sales_quantity`, `sales_total`, `sales_location`, `staff_username`, `product_name`) VALUES
('2021-11-01 16:29:56', 80, '11920.00', 'Kuching', 'John Doe', NULL),
('2021-11-02 16:29:56', 121, '9075.00', 'Kuching', 'John Doe', NULL),
('2021-11-03 16:33:58', 99, '10098.00', 'Kuching', 'John Doe', NULL),
('2021-11-21 16:55:03', 1, '0.00', '', '', 'Quartz INEO MC3 5W30'),
('2021-11-21 16:57:15', 1, '0.00', '', '', 'Quartz INEO MC3 5W30'),
('2021-11-21 17:02:35', 5, '745.00', 'Sibu', 'Bella', 'Quartz 7000 15W50'),
('2021-11-21 17:14:51', 2, '298.00', 'Sibu', 'Bella', 'Quartz 7000 15W50'),
('2021-11-21 17:16:30', 2, '298.00', 'Sibu', 'Bella', 'Quartz 7000 15W50'),
('2021-11-21 17:32:17', 3, '30.00', 'Beaufort', 'Bella', 'Quartz INEO MC3 5W30');

-- --------------------------------------------------------

--
-- Table structure for table `salesadvisor`
--

CREATE TABLE `salesadvisor` (
  `staff_username` varchar(50) NOT NULL,
  `staff_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `yearly`
--

CREATE TABLE `yearly` (
  `sales_total` decimal(10,2) DEFAULT NULL,
  `sales_date` datetime DEFAULT NULL,
  `sales_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yearly`
--

INSERT INTO `yearly` (`sales_total`, `sales_date`, `sales_location`) VALUES
('1234567.00', '2018-12-31 16:55:42', 'Kuching'),
('1324568.00', '2019-12-31 16:55:42', 'Kuching'),
('1982395.00', '2020-12-31 16:56:48', 'Kuching');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
