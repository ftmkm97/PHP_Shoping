-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 08:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--
-- Error reading structure for table project.add: #1932 - Table 'project.add' doesn't exist in engine
-- Error reading data for table project.add: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `project`.`add`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `add1`
--

CREATE TABLE `add1` (
  `productID` int(11) NOT NULL,
  `shoppingID` varchar(52) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add1`
--

INSERT INTO `add1` (`productID`, `shoppingID`, `username`) VALUES
(11, '__fateme ', 'fateme ');

-- --------------------------------------------------------

--
-- Table structure for table `adddiscount`
--

CREATE TABLE `adddiscount` (
  `username` varchar(50) NOT NULL,
  `discountID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='ezafe kardan takhfif';

--
-- Dumping data for table `adddiscount`
--

INSERT INTO `adddiscount` (`username`, `discountID`) VALUES
('fateme', 5555);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `city` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='jadval modir';

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `firstname`, `lastname`, `city`) VALUES
('amir', '1', 'amir', 'karimi', 'hh'),
('fateme', '123456', 'fateme', 'karimi', 'shahrood'),
('ftmkm', '2', 'فاطمه', 'کریمی', 'شاهرود');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `customerAddr` varchar(50) CHARACTER SET utf8 NOT NULL,
  `city` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tel` bigint(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='jadval moshtary';

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `password`, `firstname`, `lastname`, `email`, `customerAddr`, `city`, `tel`) VALUES
('amkm', '1', 'امیر', 'کریمی', 'amir@gmail.com', 'moallem', 'شاهرود', 9210351981),
('fateme', '123456', 'fateme', 'sadeghi', 'sadeghi@gmail.com', 'moallem', 'shahrood', 9),
('mobina', '1', 'mobina', 'kosari', 'kosari9797@gmail.com', 'shah...', 'shah...', 9100364368),
('sahar', '1', 'سحر', 'rahimi', 'rahimi@gmail.com', 'ک', 'rkjg', 0),
('zohre', '1', 'zohre', 'rahimi', 'zohre@gmail.com', 'kkk', 'tehran', 912000000);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `discountID` int(11) NOT NULL,
  `discountPercent` int(11) NOT NULL,
  `expirationData` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='jadval takhfif';

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`discountID`, `discountPercent`, `expirationData`) VALUES
(5555, 30, '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `factor1`
--

CREATE TABLE `factor1` (
  `factorID` int(11) NOT NULL,
  `shoppingID` varchar(52) NOT NULL,
  `discountID` int(11) DEFAULT NULL,
  `postageprice` int(11) NOT NULL DEFAULT '10000',
  `finalprice` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factor1`
--

INSERT INTO `factor1` (`factorID`, `shoppingID`, `discountID`, `postageprice`, `finalprice`, `date`) VALUES
(19, '__fateme ', 0, 10000, 160000, '2019-01-18'),
(20, '__fateme ', 0, 10000, 110000, '2019-01-18'),
(21, '__fateme ', 0, 10000, 68000, '2019-01-18'),
(22, '__fateme ', 1000, 10000, 19800, '2019-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE `make` (
  `productID` int(11) NOT NULL,
  `shoppingID` varchar(52) NOT NULL,
  `factorID` int(11) NOT NULL,
  `productName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `number` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`productID`, `shoppingID`, `factorID`, `productName`, `number`, `date`, `price`, `totalprice`) VALUES
(4, '__fateme ', 19, 'دوغ', 1, '2019-01-18', 50000, 50000),
(11, '__fateme ', 19, 'ماست', 1, '2019-01-18', 50000, 50000),
(550, '__fateme ', 19, 'ماست', 1, '2019-01-18', 50000, 50000),
(550, '__fateme ', 20, 'ماست', 2, '2019-01-18', 50000, 100000),
(11, '__fateme ', 21, 'ماست کم چرب', 2, '2019-01-18', 14000, 28000),
(111, '__fateme ', 21, 'ماست موسیر', 3, '2019-01-18', 10000, 30000),
(11, '__fateme ', 22, 'ماست کم چرب', 1, '2019-01-18', 14000, 14000);

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `username` varchar(50) NOT NULL,
  `productID` int(11) NOT NULL,
  `stat` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`username`, `productID`, `stat`, `date`) VALUES
('fateme', 1555, 0, '2019-01-17'),
('fateme', 8888, 0, '2019-01-18'),
('fateme', 9999, 0, '2019-01-18'),
('fateme', 4, 2, '2019-01-18'),
('fateme', 11, 2, '2019-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `number` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `factoryname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `productionDate` date NOT NULL,
  `expirationDate` date NOT NULL,
  `weight` int(11) NOT NULL,
  `discountPercent` int(11) DEFAULT '0',
  `firstPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='jadval masol';

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `name`, `number`, `price`, `factoryname`, `productionDate`, `expirationDate`, `weight`, `discountPercent`, `firstPrice`) VALUES
(2, 'دوغ جدید', 15, 10000, 'سون', '2018-12-01', '2018-12-29', 100, 50, 20000),
(4, 'دوغ', 15, 5000, 'بینالود', '2018-12-01', '2019-12-29', 500, 0, 5000),
(11, 'ماست کم چرب', 12, 14000, 'صبا', '2018-12-01', '2019-12-29', 220, 30, 20000),
(111, 'ماست موسیر', 12, 10000, 'سون', '2018-12-01', '2019-12-29', 100, 0, 10000),
(550, 'ماست', 12, 50000, 'سون', '2018-12-01', '2018-12-29', 100, 0, 50000),
(702, 'ماست جدید', 15, 10000, 'صبا', '2018-12-01', '2019-12-29', 100, 0, 10000),
(1111, 'خامه', 15, 50000, 'صبا', '2018-12-01', '2019-12-29', 100, 0, 50000),
(1555, 'ماست کم چرب', 15, 50000, 'سون', '2018-12-01', '2019-12-29', 100, 0, 50000),
(8888, 'کشک', 15, 16000, 'صبا', '2018-12-01', '2019-12-29', 100, 20, 20000),
(9999, 'کشک', 15, 20000, 'سون', '2018-12-01', '2019-12-29', 500, 0, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `searchID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `productID` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`searchID`, `username`, `productID`, `date`) VALUES
(3, 'fateme', 11, '2019-01-17'),
(4, 'fateme', 550, '2019-01-17'),
(5, 'fateme', 111, '2019-01-17'),
(6, 'fateme', 11, '2019-01-17'),
(7, 'fateme', 550, '2019-01-17'),
(8, 'mobina', 11, '2019-01-17'),
(9, 'mobina', 550, '2019-01-17'),
(10, 'fateme', 550, '2019-01-18'),
(11, 'fateme', 550, '2019-01-18'),
(12, 'fateme', 550, '2019-01-18'),
(13, 'fateme', 550, '2019-01-18'),
(14, 'fateme', 550, '2019-01-18'),
(15, 'fateme', 550, '2019-01-18'),
(16, 'fateme', 550, '2019-01-18'),
(17, 'fateme', 550, '2019-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `shoppinglist`
--

CREATE TABLE `shoppinglist` (
  `shoppingID` varchar(52) NOT NULL,
  `productID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `productName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `number` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoppinglist1`
--

CREATE TABLE `shoppinglist1` (
  `shoppingID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `productName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `number` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='sabad kharid';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add1`
--
ALTER TABLE `add1`
  ADD KEY `username` (`username`);

--
-- Indexes for table `adddiscount`
--
ALTER TABLE `adddiscount`
  ADD KEY `username` (`username`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`discountID`);

--
-- Indexes for table `factor1`
--
ALTER TABLE `factor1`
  ADD PRIMARY KEY (`factorID`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD KEY `factorID` (`factorID`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD KEY `username` (`username`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`searchID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `shoppinglist`
--
ALTER TABLE `shoppinglist`
  ADD PRIMARY KEY (`shoppingID`,`productID`);

--
-- Indexes for table `shoppinglist1`
--
ALTER TABLE `shoppinglist1`
  ADD PRIMARY KEY (`shoppingID`,`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `factor1`
--
ALTER TABLE `factor1`
  MODIFY `factorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `searchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shoppinglist1`
--
ALTER TABLE `shoppinglist1`
  MODIFY `shoppingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add1`
--
ALTER TABLE `add1`
  ADD CONSTRAINT `add1_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `adddiscount`
--
ALTER TABLE `adddiscount`
  ADD CONSTRAINT `adddiscount_ibfk_1` FOREIGN KEY (`discountID`) REFERENCES `discount` (`discountID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `adddiscount_ibfk_2` FOREIGN KEY (`username`) REFERENCES `admin` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `make`
--
ALTER TABLE `make`
  ADD CONSTRAINT `make_ibfk_1` FOREIGN KEY (`factorID`) REFERENCES `factor1` (`factorID`);

--
-- Constraints for table `management`
--
ALTER TABLE `management`
  ADD CONSTRAINT `management_ibfk_1` FOREIGN KEY (`username`) REFERENCES `admin` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `management_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `search_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `search_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
