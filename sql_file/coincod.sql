-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2012 at 03:37 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coincod`
--

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE IF NOT EXISTS `product1` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE IF NOT EXISTS `product2` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product3`
--

CREATE TABLE IF NOT EXISTS `product3` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product3`
--

INSERT INTO `product3` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product4`
--

CREATE TABLE IF NOT EXISTS `product4` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product4`
--

INSERT INTO `product4` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product5`
--

CREATE TABLE IF NOT EXISTS `product5` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product5`
--

INSERT INTO `product5` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product6`
--

CREATE TABLE IF NOT EXISTS `product6` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product6`
--

INSERT INTO `product6` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product7`
--

CREATE TABLE IF NOT EXISTS `product7` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product7`
--

INSERT INTO `product7` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product8`
--

CREATE TABLE IF NOT EXISTS `product8` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product8`
--

INSERT INTO `product8` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product9`
--

CREATE TABLE IF NOT EXISTS `product9` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product9`
--

INSERT INTO `product9` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product10`
--

CREATE TABLE IF NOT EXISTS `product10` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product10`
--

INSERT INTO `product10` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 23, 'test3', 'test3@gmail.com', '0.01', '2012-05-10 01:55:36'),
(2, 23, 'test3', 'test3@gmail.com', '0.02', '2012-05-10 01:55:38'),
(3, 23, 'test3', 'test3@gmail.com', '0.03', '2012-05-10 01:55:39'),
(4, 23, 'test3', 'test3@gmail.com', '0.04', '2012-05-10 01:55:40'),
(5, 23, 'test3', 'test3@gmail.com', '0.05', '2012-05-10 01:55:54'),
(6, 23, 'test3', 'test3@gmail.com', '0.06', '2012-05-10 02:05:12'),
(7, 13, 'test1', 'test1@gmail.com', '0.07', '2012-05-24 11:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `product11`
--

CREATE TABLE IF NOT EXISTS `product11` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product11`
--

INSERT INTO `product11` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product12`
--

CREATE TABLE IF NOT EXISTS `product12` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product12`
--

INSERT INTO `product12` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product13`
--

CREATE TABLE IF NOT EXISTS `product13` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product14`
--

CREATE TABLE IF NOT EXISTS `product14` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product14`
--

INSERT INTO `product14` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product15`
--

CREATE TABLE IF NOT EXISTS `product15` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product15`
--

INSERT INTO `product15` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product16`
--

CREATE TABLE IF NOT EXISTS `product16` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product17`
--

CREATE TABLE IF NOT EXISTS `product17` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product17`
--

INSERT INTO `product17` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product18`
--

CREATE TABLE IF NOT EXISTS `product18` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product18`
--

INSERT INTO `product18` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product19`
--

CREATE TABLE IF NOT EXISTS `product19` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product19`
--

INSERT INTO `product19` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product20`
--

CREATE TABLE IF NOT EXISTS `product20` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product20`
--

INSERT INTO `product20` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product21`
--

CREATE TABLE IF NOT EXISTS `product21` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product21`
--

INSERT INTO `product21` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product22`
--

CREATE TABLE IF NOT EXISTS `product22` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product22`
--

INSERT INTO `product22` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product23`
--

CREATE TABLE IF NOT EXISTS `product23` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `product23`
--

INSERT INTO `product23` (`Listing`, `User_id`, `User`, `Email`, `Price`, `time`) VALUES
(1, 14, 'test2', 'test2@gmail.com', '0.01', '2012-05-09 23:02:02'),
(2, 14, 'test2', 'test2@gmail.com', '0.02', '2012-05-09 23:02:07'),
(3, 13, 'test1', 'test1@gmail.com', '0.03', '2012-05-10 01:41:54'),
(4, 13, 'test1', 'test1@gmail.com', '0.04', '2012-05-10 01:41:55'),
(5, 13, 'test1', 'test1@gmail.com', '0.05', '2012-05-10 01:41:56'),
(6, 13, 'test1', 'test1@gmail.com', '0.06', '2012-05-10 01:50:21'),
(7, 23, 'test3', 'test3@gmail.com', '0.07', '2012-05-10 01:55:34'),
(8, 23, 'test3', 'test3@gmail.com', '0.08', '2012-05-10 01:55:37'),
(9, 23, 'test3', 'test3@gmail.com', '0.09', '2012-05-10 01:55:39'),
(10, 23, 'test3', 'test3@gmail.com', '0.10', '2012-05-10 01:55:40'),
(11, 13, 'test1', 'test1@gmail.com', '0.11', '2012-05-10 23:40:19'),
(12, 13, 'test1', 'test1@gmail.com', '0.12', '2012-05-24 00:37:57'),
(13, 14, 'test2', 'test2@gmail.com', '0.13', '2012-05-25 18:32:46'),
(14, 14, 'test2', 'test2@gmail.com', '0.14', '2012-05-25 18:33:01'),
(15, 14, 'test2', 'test2@gmail.com', '0.15', '2012-05-25 19:12:27'),
(16, 14, 'test2', 'test2@gmail.com', '0.16', '2012-05-25 19:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `product24`
--

CREATE TABLE IF NOT EXISTS `product24` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product25`
--

CREATE TABLE IF NOT EXISTS `product25` (
  `Listing` int(100) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  `Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Listing`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE IF NOT EXISTS `product_list` (
  `Product_Id` int(11) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `Market_Price` decimal(30,2) NOT NULL,
  `Auction_Price` decimal(30,2) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Availability` varchar(11) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Total_Bid` bigint(255) NOT NULL,
  `Auction_Start` int(11) NOT NULL,
  `Auction_End` int(30) NOT NULL,
  PRIMARY KEY (`Product_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`Product_Id`, `Brand`, `Model`, `Market_Price`, `Auction_Price`, `Category`, `Availability`, `Description`, `Total_Bid`, `Auction_Start`, `Auction_End`) VALUES
(1, 'Sony', 'Tablet S (32GB)', '1799.00', '899.50', 'Laptop', 'Available', '', 0, 100000000, 2147483647),
(2, 'Sony ', 'VAIO VPC-SE17GG', '4699.00', '2349.50', 'Laptop', 'Available', '', 0, 0, 0),
(3, 'Toshiba', 'Portege R830-1056U', '3299.00', '1649.50', 'Laptop', 'Available', '', 0, 0, 0),
(4, 'Asus', 'ZENBOOK UX31E-RY010V', '4499.00', '2249.50', 'Laptop', 'Availabilit', '', 0, 0, 0),
(5, 'Lenovo', 'IdeaPad U300s Ultrabook', '4699.00', '2349.50', 'Laptop', 'Availabilit', '', 0, 0, 0),
(6, 'Acer', 'Aspire S3-951-2634G25', '3999.00', '1999.50', 'Laptop', 'Availabilit', '', 0, 0, 0),
(7, 'Sony', 'Alpha DSLT-A65 (SAL 18250 Lens', '4399.00', '2199.50', 'Camera', 'Available', '', 0, 0, 0),
(8, 'Olympus', 'XZ-1', '1499.00', '749.50', 'Camera', 'Availabilit', '', 0, 0, 0),
(9, 'Canon', 'HF G10', '6999.00', '3499.50', 'Camera', 'Availabilit', '', 0, 0, 0),
(10, 'Samsung', 'MultiView MV 800', '999.00', '499.50', 'Camera', 'Availabilit', '', 0, 0, 0),
(11, 'Microsoft', 'Window 7 Professional', '449.00', '224.50', 'Software', 'Availablity', '', 0, 0, 0),
(12, 'Apple', 'I-phone 4s', '2199.00', '1099.50', 'Smartphone', 'Availabilit', '', 0, 0, 0),
(13, 'Samsung', 'Galaxy SIII', '2199.00', '1099.50', 'Smartphone', 'Availabilit', '', 0, 0, 0),
(14, 'HTC', 'One X', '1999.00', '999.50', 'Smartphone', 'Availabilit', '', 0, 0, 0),
(15, 'Sony Ericson', 'Xperia Ion', '1999.00', '999.50', 'Smartphone', 'Availabilit', '', 0, 0, 0),
(16, 'Nokia', 'Lumia 900', '2799.00', '1399.50', 'Smartphone', 'Availabilit', '', 0, 0, 0),
(17, 'Apple', 'Ipad', '1499.00', '749.50', 'Laptop', 'Availabilit', '', 0, 0, 0),
(18, 'Apple', 'MacBook Pro  13inch 2.8Ghz', '4599.00', '2299.50', 'Laptop', 'Availabilit', '', 0, 0, 0),
(19, 'Samsung', 'Galaxy Tab 10.1', '1899.00', '949.50', 'Laptop', 'Availabilit', '', 0, 0, 0),
(20, 'Canon', 'MG6270', '799.00', '399.50', 'Printer', 'Availabilit', '', 0, 0, 0),
(21, 'HP', 'LaserJet P1606DN', '1650.00', '825.00', 'Printer', 'Availabilit', '', 0, 0, 0),
(22, 'Toshiba', '500GB', '255.00', '127.50', 'Hardisk', 'Availabilit', '', 0, 0, 0),
(23, 'Kingston', '32GB', '89.00', '44.50', 'Thumbdrive', 'Availabilit', '', 0, 0, 0),
(24, 'test', 'testing1', '1290.00', '0.00', 'Smartphone', 'comingsoon', '<p>qwertyui</p>\r\n<p>wertyui</p>\r\n<p>qwertyu</p>\r\n<p>qwertyu</p>\r\n<p>qwertyu</p>\r\n<p>qwertyui</p>\r\n<p>wertyui</p>\r\n<p>qwertyui</p>', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `Site_Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Site_Status`) VALUES
('Well as usual running like charm.');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Category` int(255) NOT NULL COMMENT '0 = user 1=admin',
  `Username` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `Hash_Password` varchar(50) NOT NULL,
  `First_Name` char(255) NOT NULL,
  `Last_Name` char(255) NOT NULL,
  `Date_Birth` varchar(20) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `City` char(255) NOT NULL,
  `State` char(255) NOT NULL,
  `Zip` int(11) NOT NULL,
  `Country` char(11) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Date_Register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Activation` int(2) NOT NULL,
  `Token` bigint(255) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`User_Id`, `Category`, `Username`, `Email`, `Password`, `Hash_Password`, `First_Name`, `Last_Name`, `Date_Birth`, `Gender`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Country`, `Mobile`, `Date_Register`, `Activation`, `Token`) VALUES
(1, 1, 'admin', 'hychan_89@gmail.com', '123456', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'wilson', '0000-00-00', 'Male', 'admin add1', 'admin add2', 'admin city', 'Sarawak', 11111, 'Malaysia', 111111111, '2012-04-29 16:07:38', 1, -25),
(13, 0, 'test1', 'test1@gmail.com', '19347f639fa', '19347f639fadda671e367f3555795033', 'test11', 'test1', '0000-00-00', '0', 'test', 'test', 'test', 'Sabah', 12345, 'Malaysia', 13123123, '2012-05-25 05:53:18', 1, 6),
(14, 0, 'test2', 'test2@gmail.com', '123456', 'e10adc3949ba59abbe56e057f20f883e', 'test2', 'test2', '0000-00-00', '0', 'test', 'test', 'test', 'Sabah', 12345, 'Malaysia', 12345, '2012-05-25 11:12:32', 1, 96),
(23, 0, 'test3', 'test3@gmail.com', '123456', 'e10adc3949ba59abbe56e057f20f883e', 'test3', 'test3', '1984-01-18', 'Female', 'test', 'test', 'test', 'Selangor', 68100, 'Malaysia', 2147483647, '2012-05-09 18:05:12', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
