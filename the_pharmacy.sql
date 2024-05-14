-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 08:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Name` varchar(20) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `Number` int(11) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Orders` varchar(20) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Name`, `Address`, `Number`, `Age`, `Orders`, `Price`) VALUES
('mahmoud', '455str', 1062804190, 0, 'flagyl', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMPID` int(11) NOT NULL,
  `EMPname` varchar(20) DEFAULT NULL,
  `EMPaddress` varchar(20) DEFAULT NULL,
  `EMPnumber` int(11) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Hiring_date` date DEFAULT NULL,
  `Work_location` varchar(20) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `EMPname` varchar(20) NOT NULL,
  `EMPmail` varchar(20) NOT NULL,
  `EMPaddress` varchar(20) NOT NULL,
  `EMPnumber` int(20) NOT NULL,
  `Date_of_birth` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `Name` varchar(20) NOT NULL,
  `Med_number` int(20) NOT NULL,
  `EXP_date` varchar(30) NOT NULL,
  `Price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicine_company`
--

CREATE TABLE `medicine_company` (
  `Name` varchar(40) DEFAULT NULL,
  `Order` varchar(40) DEFAULT NULL,
  `Delivery_location` varchar(40) DEFAULT NULL,
  `Order_time_deadline` datetime DEFAULT NULL,
  `Order_price` int(11) DEFAULT NULL,
  `Payment` int(11) DEFAULT NULL,
  `Remaining` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_company`
--

INSERT INTO `medicine_company` (`Name`, `Order`, `Delivery_location`, `Order_time_deadline`, `Order_price`, `Payment`, `Remaining`) VALUES
('mohv', 'vbx', '56564str', '0000-00-00 00:00:00', 20, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `PharName` varchar(20) DEFAULT NULL,
  `PharNumber` int(11) DEFAULT NULL,
  `PharLocation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMPID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EMPID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
