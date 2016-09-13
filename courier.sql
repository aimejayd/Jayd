-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2014 at 12:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE IF NOT EXISTS `tbl_clients` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cons_no` varchar(20) NOT NULL,
  `clnt_name` varchar(100) NOT NULL,
  `clnt_phone` varchar(14) NOT NULL,
  `clnt_add` varchar(200) NOT NULL,
  `off_name` varchar(100) NOT NULL,
  `off_phone` varchar(12) NOT NULL,
  `off_add` varchar(200) NOT NULL,
  `type` varchar(40) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `invoice_no` varchar(20) NOT NULL,
  `ind_nbr` varchar(50) NOT NULL,
  `book_mode` varchar(20) NOT NULL,
  `vat` int(2) NOT NULL,
  `mode` varchar(20) NOT NULL,
  `iss_date` varchar(20) NOT NULL,
  `exp_date` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `status` varchar(20) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `book_date` date NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`cid`, `cons_no`, `clnt_name`, `clnt_phone`, `clnt_add`, `off_name`, `off_phone`, `off_add`, `type`, `amount`, `invoice_no`, `ind_nbr`, `book_mode`, `vat`, `mode`, `iss_date`, `exp_date`, `time`, `status`, `comments`, `book_date`) VALUES
(7, 'TRPN8W9J', 'IGIRANEZA JACQUES', '250785533004', '105 INKURU NZIZA CHURCH', 'UMWARI ERNESTINE', '250788552200', '105 INKURU NZIZA CHURCH', 'Travel', '980000', '2525003', '1198880001525096', 'Card', 18, 'Gold', '27/08/2014', '27/08/2015', '13:52:00', 'Approved', 'THANKS FOR CHOOSING US!', '2014-08-27'),
(8, 'STOI8JDR', 'UMWARI Ernestine', '250788556600', 'Sonatube, 581KK\r\nKigali Rwanda', 'Ernesto KAKEMBO', '250788707020', 'Nyarugenge, 42KG\r\nKigali Rwanda', 'Home', '500000', '2525004', '1198880001525096', 'Card', 18, 'Premium', '27/08/2014', '27/08/2015', '10:47:00', 'Approved', 'THANKS FOR CHOOSING US!', '2014-08-27'),
(9, 'ZN0D4QGS', 'Ruzibizwa Anastor', '250788656520', 'Kacyiru,758KG\r\nKigali Rwanda', 'UMWARI ERNESTINE', '250788552200', 'Nyarugenge,45KN\r\nKigali Rwanda', 'Travel', '980.000', '2525004', '1198880001525096', 'Wire', 18, 'Sliver', '28/08/2014', '28/08/2015', '10:27:00', 'Approved', 'THANKS FOR CHOOSING US!', '2014-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ins_officers`
--

CREATE TABLE IF NOT EXISTS `tbl_ins_officers` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `officer_name` varchar(40) NOT NULL,
  `off_pwd` varchar(40) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` varchar(12) NOT NULL,
  `office` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_ins_officers`
--

INSERT INTO `tbl_ins_officers` (`cid`, `officer_name`, `off_pwd`, `address`, `email`, `ph_no`, `office`, `reg_date`) VALUES
(5, 'jacques', 'jacques', '525,KGL,', 'jacques@gmail.com', '0788525200', 'OIMS-RUBAVU', '2014-08-27 18:06:49'),
(4, 'RUGEMA Manzi', 'manzi', '105, Inkuru Nziza Church', 'rugemanzi@gmail.com', '0788715969', 'OIMS - MUSANZE', '2014-08-27 17:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offices`
--

CREATE TABLE IF NOT EXISTS `tbl_offices` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `off_name` varchar(100) NOT NULL,
  `address` varchar(230) NOT NULL,
  `city` varchar(100) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `office_time` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_offices`
--

INSERT INTO `tbl_offices` (`id`, `off_name`, `address`, `city`, `ph_no`, `office_time`, `contact_person`) VALUES
(1, 'OIMS - KIGALI', '235, OIMS/NYR, KIGALI', 'NYARUGENGE', '0788303030', '8.00 am - 6.00 pm', 'UWARI Ernestine'),
(2, 'OIMS - MUSANZE', '465, OIMS/MUSZ, MUSANZE', 'MUSANZE', '0788304040', '8.00 am - 6.00 pm', 'IGIRANEZA Jacques'),
(3, 'OIMS - HUYE', '925, OIMS/HY, HUYE', 'RUHANDE', '0788305050', '8.00 am - 6.00 pm', 'RUGEMA MANZI'),
(4, 'OIMS-RUBAVU', '715,OIMS/GSY,GISENYI', 'RUBAVU', '0788306060', '8:00am - 6:00pm', 'ISHIMWE Leonardo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_track`
--

CREATE TABLE IF NOT EXISTS `tbl_track` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `bk_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_track`
--

INSERT INTO `tbl_track` (`id`, `cid`, `cons_no`, `current_city`, `status`, `comments`, `bk_time`) VALUES
(9, 9, 'ZN0D4QGS', 'OIMS - KIGALI', 'Approved', '', '2014-08-28 10:40:54'),
(8, 8, 'STOI8JDR', 'OIMS - KIGALI', 'Approved', '', '2014-08-27 22:50:06'),
(7, 8, 'STOI8JDR', 'OIMS - KIGALI', 'Onhold', '', '2014-08-27 22:49:26'),
(6, 7, 'TRPN8W9J', 'OIMS-RUBAVU', 'Approved', '', '2014-08-27 22:43:38'),
(10, 9, 'ZN0D4QGS', 'OIMS - HUYE', 'Approved', '', '2014-08-28 11:21:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
