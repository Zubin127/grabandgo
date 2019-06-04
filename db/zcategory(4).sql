-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2017 at 08:47 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zcategory`
--

-- --------------------------------------------------------

--
-- Table structure for table `addvertisment`
--

CREATE TABLE IF NOT EXISTS `addvertisment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(444) NOT NULL,
  `category` varchar(444) NOT NULL,
  `sub_category` varchar(444) NOT NULL,
  `Addvertisment_Title` varchar(200) NOT NULL,
  `Price` int(11) NOT NULL,
  `Product_Desciption` varchar(200) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  `State` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `email` varchar(44) NOT NULL,
  `Contact_Number` varchar(200) NOT NULL,
  `Pincode` varchar(200) NOT NULL,
  `User_Name` varchar(444) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `addvertisment`
--

INSERT INTO `addvertisment` (`ID`, `user_id`, `category`, `sub_category`, `Addvertisment_Title`, `Price`, `Product_Desciption`, `Photo`, `State`, `City`, `Gender`, `email`, `Contact_Number`, `Pincode`, `User_Name`) VALUES
(11, '1', 'Bike', 'Motorcycles', 'ddd', 12321, 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'Blue hills.jpg,Water lilies.jpg,Winter.jpg,', 'rajastthan', 'CH', 'Male', '', '919999999', '321001', '');

-- --------------------------------------------------------

--
-- Table structure for table `adminc`
--

CREATE TABLE IF NOT EXISTS `adminc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Category_Name` varchar(100) NOT NULL,
  `photo_name` varchar(333) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `adminc`
--

INSERT INTO `adminc` (`ID`, `Category_Name`, `photo_name`) VALUES
(9, 'Bike', 'Bike.jpg'),
(10, 'Mobile', 'Mobile.jpg'),
(15, 'Television', 'Television.jpg'),
(17, 'Car', 'Car.jpg'),
(18, 'Real Estate', 'Estate.jpg'),
(19, 'Furniture', 'furniture.jpg'),
(21, 'Pets', 'Pets.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(150) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Gender` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Mobile_Number` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `First_Name`, `Last_Name`, `Address`, `Password`, `Gender`, `Email`, `Mobile_Number`) VALUES
(1, 'David', 'Guetta', 'Sector-7', '123', '0', 'a@gmail.com', '2147483647'),
(2, 'David', 'Guetta', 'Sector-7', '123', '0', '0', '2147483647'),
(3, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(333) NOT NULL,
  `sub_category` varchar(333) NOT NULL,
  `pnames` varchar(333) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category`, `sub_category`, `pnames`) VALUES
(1, 'Bike', 'Motorcycles', ''),
(11, 'Mobile', 'Mobile Phones', 'Mobile Phone logo.jpg'),
(15, 'Mobile', 'Tablet logo', 'Tablet logo.jpg'),
(16, 'Bike', 'Motorcycles', 'Motorcycle.jpg'),
(17, 'Bike', 'Scooter', 'Scooter.jpg'),
(18, 'Pets', 'Fishes', 'Fishes.jpg'),
(19, 'Pets', 'Dogs', 'Dogs.jpg'),
(20, 'Car', 'Cars', 'Cars.jpg'),
(21, 'Car', 'Commercial Vehicles', 'Commercial Vehicles.jpg'),
(22, 'Furniture', 'Beds And Wardrobes', 'Beds And Wardrobes.jpg'),
(23, 'Furniture', 'Sofa and Dining', 'Sofa and Dining.jpg'),
(24, 'Television', 'TVs', 'TVs.jpg'),
(25, 'Television', 'Computers & laptops', 'Computers & laptops.jpg'),
(26, 'Real Estate', 'Rent', 'Rent.jpg'),
(27, 'Real Estate', 'Sale', 'Sale.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
