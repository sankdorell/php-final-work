-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2015 at 09:16 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recruitment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `recruitment_tbl`
--

CREATE TABLE IF NOT EXISTS `recruitment_tbl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `tel` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `education` varchar(30) NOT NULL,
  `pos` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `recruitment_tbl`
--

INSERT INTO `recruitment_tbl` (`id`, `fname`, `lname`, `adress`, `tel`, `email`, `education`, `pos`, `position`) VALUES
(1, 'ALlan', 'NKUSI', 'NALUKOLONGO', 2147483647, 'alannkusi@gmail.com', 'PHD', 'CEO', 'CEO'),
(2, 'ALlan', 'NKUSI', 'NALUKOLONGO', 2147483647, 'alannkusi@gmail.com', 'PHD', 'CEO', 'CEO'),
(3, 'KAYIMBA', 'SANK', 'RUBAGA', 12855145, 'kayimbasank@gmail.com', 'PHD', 'CEO', 'CEO');
