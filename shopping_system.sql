-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 23, 2021 at 06:56 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorydetail`
--

DROP TABLE IF EXISTS `categorydetail`;
CREATE TABLE IF NOT EXISTS `categorydetail` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(20) COLLATE utf8mb4_0900_as_ci NOT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_as_ci;

--
-- Dumping data for table `categorydetail`
--

INSERT INTO `categorydetail` (`CategoryID`, `CategoryName`) VALUES
(1, 'Footwear'),
(2, 'Womenwear'),
(3, 'Electronics'),
(4, 'Menswear');

-- --------------------------------------------------------

--
-- Table structure for table `itemdetail`
--

DROP TABLE IF EXISTS `itemdetail`;
CREATE TABLE IF NOT EXISTS `itemdetail` (
  `ItemID` int(11) NOT NULL AUTO_INCREMENT,
  `ItemName` varchar(20) COLLATE utf8mb4_0900_as_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Image` varchar(100) COLLATE utf8mb4_0900_as_ci NOT NULL,
  PRIMARY KEY (`ItemID`),
  KEY `CategoryID` (`CategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_as_ci;

--
-- Dumping data for table `itemdetail`
--

INSERT INTO `itemdetail` (`ItemID`, `ItemName`, `Price`, `Quantity`, `CategoryID`, `Image`) VALUES
(9, 'Shoe', 500, 5, 1, 'upload/1640201978_9a7f6e34d7fda8eea933.jpg'),
(10, 'T-Shirt Mens', 700, 10, 4, 'upload/1640205306_20cc8c40d136e5406daf.jpg'),
(12, 'Smart watch1', 700, 10, 3, 'upload/1640206496_918076b2f29099018ec8.png');

-- --------------------------------------------------------

--
-- Table structure for table `logindetail`
--

DROP TABLE IF EXISTS `logindetail`;
CREATE TABLE IF NOT EXISTS `logindetail` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) COLLATE utf8mb4_0900_as_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8mb4_0900_as_ci NOT NULL,
  `UserType` varchar(20) COLLATE utf8mb4_0900_as_ci NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_as_ci;

--
-- Dumping data for table `logindetail`
--

INSERT INTO `logindetail` (`UserID`, `UserName`, `Password`, `UserType`) VALUES
(1, 'Admin', 'Admin123', 'Admin'),
(2, 'Sweta', 'Sweta123', 'User');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itemdetail`
--
ALTER TABLE `itemdetail`
  ADD CONSTRAINT `itemdetail_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `categorydetail` (`CategoryID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
