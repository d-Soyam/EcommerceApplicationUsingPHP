-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2014 at 05:24 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE IF NOT EXISTS `admin_master` (
  `AdminId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`AdminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`AdminId`, `UserName`, `Password`) VALUES
(1, 'ftzc', 'ftzc'),
(4, 'zsb', 'zsb');

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE IF NOT EXISTS `category_master` (
  `CategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(30) NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`CategoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`CategoryId`, `CategoryName`, `Image`) VALUES
(1, 'Shirt', 'shirt.jpg'),
(2, 'T-Shirts', 'images.jpg'),
(3, 'Polo-Shirt', 'polo.jpg'),
(4, 'Panjabi', 'panjabi.jpg'),
(5, 'Jeans', 'Jeans.jpg'),
(6, 'Bleasure', 'asd.jpg'),
(7, 'Salwar_Kameez', '3.jpg'),
(8, 'Sharee', 'sharee1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE IF NOT EXISTS `customer_registration` (
  `CustomerId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Card` varchar(20) NOT NULL,
  `CardNm` varchar(15) NOT NULL,
  `Trans` int(6) NOT NULL,
  PRIMARY KEY (`CustomerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`CustomerId`, `CustomerName`, `Address`, `City`, `Email`, `Mobile`, `Gender`, `BirthDate`, `UserName`, `Password`, `Card`, `CardNm`, `Trans`) VALUES
(2, 'Fatema-Tuz-Zuhora', '1344/A', 'Dhaka', 'ftzc@gmail.com', 1916293975, 'Female', '1992-09-10', 'champa', 'champa', 'Credit Card', 'DBBL12345678909', 123456),
(3, 'Rakibur Rahman Bhuiyan', '1236/B', 'Dhaka', 'rakib@gmail.com', 1681651638, 'Male', '1994-12-03', 'rakib', 'rakib', 'Credit Card', 'DBBL11223344556', 123456),
(4, 'Zakia Shultana Bhuiyan', '1121/A', 'Chittagong', 'zsb@gmail.com', 1234567890, 'Female', '1998-11-19', 'zsb', 'zsb', 'Master Card', 'MASTER123456789', 112233),
(5, 'Mim', '1236/C', 'Dhaka', 'mim@gmail.com', 1912345678, 'Female', '2014-12-03', 'mim', 'mim', 'VISA Card', 'VISA12345678908', 123456),
(6, 'Shakil', 'Jatrabari', 'Dhaka', 'shakil@gmail.com', 1711234567, 'Male', '2014-12-10', 'shakil', 'shakil', 'Credit Card', 'DBBL33345678987', 223344),
(7, 'Sumon', 'Dhanmondhi', 'Dhaka', 'sumon@gmail.com', 1671433597, 'Male', '2014-12-30', 'sumon', 'sumon', 'VISA Card', 'VISA11223344556', 234567);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

CREATE TABLE IF NOT EXISTS `feedback_master` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback_master`
--

INSERT INTO `feedback_master` (`FeedbackId`, `CustomerId`, `Feedback`, `Date`) VALUES
(2, 2, 'Good', '2014-12-08'),
(3, 4, 'Good!', '2014-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `item_master`
--

CREATE TABLE IF NOT EXISTS `item_master` (
  `ItemId` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(11) NOT NULL,
  `ItemName` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `Fabric` varchar(50) NOT NULL,
  `V_A` varchar(50) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Price` float NOT NULL,
  `Discount` float NOT NULL,
  `Total` float NOT NULL,
  PRIMARY KEY (`ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `item_master`
--

INSERT INTO `item_master` (`ItemId`, `CategoryId`, `ItemName`, `Description`, `Color`, `Fabric`, `V_A`, `Quantity`, `Image`, `Price`, `Discount`, `Total`) VALUES
(1, 5, 'Denim Jeans', 'Nice Look Boot Cut', 'Blue', 'Jeans', 'Steech', 10, 'Jeans.jpg', 1200, 100, 1100),
(2, 2, 'Sport T-Shirts', 'Cool Sport T-Shirts', 'White', 'Cotton', 'Black Print', 10, 'images.jpg', 600, 100, 500),
(3, 3, 'Polo-Shirt', 'Casual Polo Shirts', 'Red', 'Cotton', 'Whole Red', 5, 'polo.jpg', 600, 100, 500),
(4, 6, 'Black Bleasure', 'Nice', 'Black', 'Wool', 'Whole Black', 4, 'slider3.jpg', 2000, 200, 1800),
(5, 1, 'Casual shirt', 'Casual', 'Off Black', 'Cotton', 'Steech', 5, 'shirt.jpg', 1200, 100, 1100),
(6, 4, 'Casual Panjabi', 'Casual', 'Black', 'Cotton', 'Hand Embroidery', 0, 'pan_ca5.jpg', 1200, 50, 1150),
(7, 4, 'Long Panjabi', 'Super', 'Gray', 'Cotton', 'Hand Embroidery', 6, 'pan_ca4.jpg', 1800, 0, 1800),
(8, 7, 'Coral Green Semi Dressy', 'Embroidery around the neckline comes in a set', 'Green', 'Cotton', 'Hand Embroidery', 0, 'dress3.jpg', 2000, 0, 2000),
(9, 7, 'Trendy Embroidered Kameez', 'Tribal pattern hand embroidered on the yoke', 'Light Shed Green', 'Silk', 'Churidar', 6, 'dress4.jpg', 2200, 100, 2100),
(10, 7, 'Anarkoli', 'Super', 'Cream', 'Silk', 'Long', 5, '6.jpg', 3000, 0, 3000),
(11, 8, 'Black Sharee', 'New', 'Black', 'Silk', 'Steech', 8, 'sharee1.jpg', 2000, 0, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `offer_master`
--

CREATE TABLE IF NOT EXISTS `offer_master` (
  `OfferId` int(11) NOT NULL AUTO_INCREMENT,
  `Offer` varchar(50) NOT NULL,
  `Detail` varchar(200) NOT NULL,
  PRIMARY KEY (`OfferId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `offer_master`
--

INSERT INTO `offer_master` (`OfferId`, `Offer`, `Detail`) VALUES
(1, 'New Year Offer', '10% discount from all items.'),
(2, 'Coupon Draw', 'Buy more than 2000/- and get a coupon which hopefully lucky for you.');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `CartId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Price` float NOT NULL,
  `Total` float NOT NULL,
  PRIMARY KEY (`CartId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`CartId`, `CustomerId`, `ItemName`, `Quantity`, `Size`, `Price`, `Total`) VALUES
(3, 3, 'Black Bleasure', 1, 'Medium', 1800, 1800),
(4, 3, 'Denim Jeans', 1, 'Extra Large', 1100, 1100);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart_final`
--

CREATE TABLE IF NOT EXISTS `shopping_cart_final` (
  `CartId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Total` float NOT NULL,
  PRIMARY KEY (`CartId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `shopping_cart_final`
--

INSERT INTO `shopping_cart_final` (`CartId`, `CustomerId`, `ItemName`, `Size`, `Quantity`, `Price`, `Total`) VALUES
(1, 2, 'Sport T-Shirts', 'Large', 1, 500, 500),
(2, 2, 'Coral Green Semi Dressy', 'Medium', 2, 2000, 4000),
(30, 5, 'Sport T-Shirts', '1', 0, 500, 500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
