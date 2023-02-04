-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 04:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useraccounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE `tblcart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(96, 'Deji Galbi', '250', '1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `CID` int(11) NOT NULL,
  `CFname` varchar(50) NOT NULL,
  `CLname` varchar(50) NOT NULL,
  `CAddress` varchar(50) NOT NULL,
  `CContactnum` varchar(50) NOT NULL,
  `RID` int(11) NOT NULL,
  `cLevel` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`CID`, `CFname`, `CLname`, `CAddress`, `CContactnum`, `RID`, `cLevel`) VALUES
(16, 'admin', 'admin', 'admin', '123', 1, 2),
(17, 'user', 'user', 'user', '123', 2, 1),
(18, 'abc', 'abc', 'abc', '123', 3, 1),
(19, 'user1', 'user1', 'user1', '123', 4, 1),
(20, 'ez', 'ez', 'ez', '123', 5, 1),
(22, 'jr', 'jr', 'jr', '123', 8, 1),
(23, 'Super', 'new', 'supernew', '1234', 9, 1),
(24, 'marty', 'marty', 'PH', '1234', 10, 1),
(34, 'v', 'v', 'v', '123', 22, 1),
(35, 'm', 'm', 'm', '1234', 23, 1),
(36, 'new', 'new', 'new', '123', 21, 1),
(37, 'b', 'b', 'b', 'b', 24, 1),
(38, 'super', 'super', 'super', '123', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `order_ID` int(11) NOT NULL,
  `order_Name` varchar(50) NOT NULL,
  `order_Quantity` decimal(9,2) NOT NULL,
  `order_Total` decimal(9,2) NOT NULL,
  `res_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `pay_ID` int(11) NOT NULL,
  `pay_mode` varchar(50) NOT NULL,
  `pay_Total` decimal(9,2) NOT NULL,
  `order_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `price`, `image`) VALUES
(1, 'Deji Galbi', '250', '1.jpg'),
(2, 'Samgyupsal', '230', '2.jpg'),
(3, 'Dak Galbi', '230', '3.jpg'),
(4, 'Yangnyeom Woosam', '250', '4.jpg'),
(5, 'Gochujang Woosam', '250', '5.jpg'),
(6, 'Woosam', '250', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration`
--

CREATE TABLE `tblregistration` (
  `RID` int(11) NOT NULL,
  `RUser` varchar(50) NOT NULL,
  `REmail` varchar(50) NOT NULL,
  `RPass` varchar(50) NOT NULL,
  `RReg` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblregistration`
--

INSERT INTO `tblregistration` (`RID`, `RUser`, `REmail`, `RPass`, `RReg`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '2023-01-11 13:32:00'),
(2, 'user', 'user@gmail.com', 'user', '2023-01-11 13:35:51'),
(3, 'abc', 'abc@gmail.com', 'abc', '2023-01-23 13:08:36'),
(4, 'user1', 'user1@gmail.com', 'user1', '2023-01-23 13:29:14'),
(5, 'ez', 'ez@gmail.com', 'ez', '2023-01-23 13:53:51'),
(8, 'jr', 'jr@gmail.com', 'jr', '2023-01-30 05:22:16'),
(9, 'new', 'new@gmail.com', 'new', '2023-02-03 06:26:14'),
(10, 'marty', 'marty@gmail.com', '1234', '2023-02-03 16:01:39'),
(21, 'z', 'z@gmail.com', 'z', '2023-02-04 07:06:52'),
(22, 'v', 'vv@gmail.com', 'v', '2023-02-04 07:09:15'),
(23, 'b', 'b@gmail.com', 'b', '2023-02-04 07:12:38'),
(24, 'a', 'a@gmail.com', 'a', '2023-02-04 15:00:10'),
(25, 'super', 'super@gmail.com', 'super', '2023-02-04 15:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblreservation`
--

CREATE TABLE `tblreservation` (
  `res_ID` int(11) NOT NULL,
  `res_Numperson` int(50) NOT NULL,
  `res_Date` date NOT NULL,
  `res_Time` time(6) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `CID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblreservation`
--

INSERT INTO `tblreservation` (`res_ID`, `res_Numperson`, `res_Date`, `res_Time`, `status`, `CID`) VALUES
(13, 4, '2023-02-22', '22:11:00.000000', 'Pending', 22),
(14, 6, '2023-03-02', '22:39:00.000000', 'Pending', 18),
(15, 4, '2023-02-15', '22:43:00.000000', 'Pending', 18),
(18, 3, '2023-02-14', '00:00:00.000000', 'Pending', 23),
(19, 2, '2023-02-06', '00:00:00.000000', 'Pending', 24),
(20, 2, '2023-02-06', '00:00:00.000000', 'Pending', 34),
(21, 5, '2023-02-14', '00:00:00.000000', 'Active', 36),
(26, 5, '2023-02-03', '00:00:00.000000', 'Pending', 17),
(27, 3, '2023-02-16', '00:00:00.000000', 'Pending', 17),
(28, 5, '2023-02-15', '00:00:00.000000', 'Pending', 36),
(29, 2, '2023-02-08', '00:00:00.000000', 'Pending', 37),
(30, 3, '2023-02-21', '00:00:00.000000', 'Pending', 37),
(31, 2, '2023-02-04', '00:00:00.000000', 'Pending', 36),
(32, 3, '2023-02-01', '00:00:00.000000', 'Pending', 38);

-- --------------------------------------------------------

--
-- Table structure for table `tblsales`
--

CREATE TABLE `tblsales` (
  `sales_ID` int(11) NOT NULL,
  `sales_price` decimal(9,2) NOT NULL,
  `sales_paid` int(50) NOT NULL,
  `sales_profit` int(50) NOT NULL,
  `pay_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `tblcustomer_ibfk_1` (`RID`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `res_ID` (`res_ID`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`pay_ID`),
  ADD KEY `order_ID` (`order_ID`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblregistration`
--
ALTER TABLE `tblregistration`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `tblreservation`
--
ALTER TABLE `tblreservation`
  ADD PRIMARY KEY (`res_ID`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `tblsales`
--
ALTER TABLE `tblsales`
  ADD PRIMARY KEY (`sales_ID`),
  ADD KEY `pay_ID` (`pay_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcart`
--
ALTER TABLE `tblcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `order_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `pay_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblregistration`
--
ALTER TABLE `tblregistration`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblreservation`
--
ALTER TABLE `tblreservation`
  MODIFY `res_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tblsales`
--
ALTER TABLE `tblsales`
  MODIFY `sales_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD CONSTRAINT `tblcustomer_ibfk_1` FOREIGN KEY (`RID`) REFERENCES `tblregistration` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD CONSTRAINT `tblorder_ibfk_1` FOREIGN KEY (`res_ID`) REFERENCES `tblreservation` (`res_ID`);

--
-- Constraints for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD CONSTRAINT `tblpayment_ibfk_1` FOREIGN KEY (`order_ID`) REFERENCES `tblorder` (`order_ID`);

--
-- Constraints for table `tblreservation`
--
ALTER TABLE `tblreservation`
  ADD CONSTRAINT `tblreservation_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `tblcustomer` (`CID`);

--
-- Constraints for table `tblsales`
--
ALTER TABLE `tblsales`
  ADD CONSTRAINT `tblsales_ibfk_1` FOREIGN KEY (`pay_ID`) REFERENCES `tblpayment` (`pay_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
