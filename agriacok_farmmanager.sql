-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2022 at 07:11 PM
-- Server version: 5.7.36
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriacok_farmmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `ID` int(11) NOT NULL,
  `cropName` varchar(20) NOT NULL,
  `measurementUnit` varchar(11) NOT NULL,
  `Land` varchar(20) NOT NULL,
  `userName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`ID`, `cropName`, `measurementUnit`, `Land`, `userName`) VALUES
(1, 'Tomatoes', 'Kilos', '', ''),
(2, 'Milk', 'Liters', '', ''),
(3, 'Maize', 'Kilos', 'Land A', ''),
(4, 'Rice Husks', 'Bales', 'Land D', ''),
(5, 'Tomatoes', 'Kilos', 'Land A', 'Erick@Juditon Farm');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ID` int(11) NOT NULL,
  `dateOfEmployment` date NOT NULL,
  `employeeID` varchar(22) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` varchar(22) NOT NULL,
  `Contact` int(11) NOT NULL,
  `userName` text NOT NULL,
  `Gender` varchar(8) DEFAULT NULL,
  `Role` text,
  `Salary` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `dateOfEmployment`, `employeeID`, `firstName`, `lastName`, `Contact`, `userName`, `Gender`, `Role`, `Salary`) VALUES
(1, '2021-09-15', 'SJDSJ384DCJ', '', 'Erick Wanjohi', 759065744, '', '', '', ''),
(2, '2021-09-15', 'FGFF', '', 'Consolata Njenga', 785561484, '', '', '', ''),
(3, '2022-03-01', 'SKFDKS', '', 'Erick Wanjohi', 759065744, 'null@null', '', '', ''),
(4, '2022-03-07', '01', '', 'Jane Doe', 70000000, 'null@null', '', '', ''),
(5, '2022-03-11', 'DJ3FFJ4', 'Erick', 'Wanjohi', 759065744, 'null@null', NULL, NULL, NULL),
(6, '2022-03-11', 'SDJ37D', 'Erick', 'Wanjohi', 759065744, 'Erick@Juditon Farm', NULL, NULL, NULL),
(7, '2022-03-11', 'SDJW353', 'Erick', 'Wanjohi', 759065744, 'Erick@Juditon Farm', 'Male', 'Farmer', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Particulars` varchar(20) NOT NULL,
  `farmActivity` varchar(20) NOT NULL,
  `Amount` int(11) NOT NULL,
  `transactionID` varchar(20) DEFAULT NULL,
  `userName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`ID`, `Date`, `Particulars`, `farmActivity`, `Amount`, `transactionID`, `userName`) VALUES
(1, '2021-08-19', 'Erick', 'Nursery', 400, 'N/A', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `ID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Particulars` varchar(33) NOT NULL,
  `Commodity` varchar(33) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `TransactionID` varchar(20) NOT NULL,
  `Contact` int(10) NOT NULL,
  `userName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`ID`, `Date`, `Particulars`, `Commodity`, `Quantity`, `Price`, `TransactionID`, `Contact`, `userName`) VALUES
(1, '2021-08-05 00:00:00', 'Erick Wanjohi', 'Meat', 3, 400, 'N/A', 759065744, ''),
(2, '2021-08-05 00:00:00', 'Jimmy', 'By-product', 4, 480, 'PMGF456DG3', 718845069, ''),
(3, '2021-08-05 00:00:00', 'Morris', 'Eggs', 30, 450, 'N/A', 704569805, ''),
(4, '2021-08-06 00:00:00', 'Erick', 'Milk', 10, 150, 'N/A', 715, ''),
(5, '2021-08-06 00:00:00', 'Morris', 'Crop', 25, 250, 'N/A', 74869945, ''),
(6, '2021-09-08 20:04:42', 'Graciela', 'Eggs', 30, 300, 'DKCFJS485JDJE', 115688544, ''),
(7, '2021-09-11 13:36:25', 'Consolata', 'Meat', 3, 1350, 'SKFCJW35JD', 756255421, ''),
(8, '2022-01-28 16:34:25', '', '', 0, 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `shelter`
--

CREATE TABLE `shelter` (
  `ID` int(11) NOT NULL,
  `Location` varchar(33) NOT NULL,
  `Size` varchar(33) NOT NULL,
  `Condition` varchar(33) NOT NULL,
  `Purpose` varchar(33) NOT NULL,
  `userName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Registration Date` datetime NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL,
  `Farm Name` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Registration Date`, `First Name`, `Last Name`, `Email`, `Phone`, `Farm Name`, `Password`) VALUES
(2, '2022-01-28 16:38:37', 'Erick', 'Wanjohi', 'wanjohierick07@gmail.com', '0759065744', 'Juditon Farm', '35a88ebf53874d085aba2e3e8604fd52'),
(3, '2022-01-31 10:37:02', 'David ', 'Manyeki ', 'daviemanyeki@gmail.com', '0703410902', 'Manyeki', '6eea9b7ef19179a06954edd0f6c05ceb'),
(4, '2022-02-17 18:47:01', 'Davie', 'Manyeki', 'daviemanyeki@gmail.com ', '0703410902', 'Davie Manyeki', '6eea9b7ef19179a06954edd0f6c05ceb'),
(5, '2022-02-17 18:47:13', 'Davie', 'Manyeki', 'daviemanyeki@gmail.com ', '0703410902', 'Davie Manyeki', '6eea9b7ef19179a06954edd0f6c05ceb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shelter`
--
ALTER TABLE `shelter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shelter`
--
ALTER TABLE `shelter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
