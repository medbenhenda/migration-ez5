-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2012 at 05:13 PM
-- Server version: 5.5.24-0ubuntu0.12.04.1
-- PHP Version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dcdpro_beta`
--

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE IF NOT EXISTS `currencies` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(3) DEFAULT NULL,
  `symbol` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `code`, `symbol`) VALUES
(1, 'GBP', '&pound;	'),
(2, 'USD', '$'),
(3, 'EUR', '&euro;	'),
(4, 'CNY', '&yen;'),
(16, 'CAD', '$'),
(29, 'AUD', '$'),
(30, 'SGD', '$');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
