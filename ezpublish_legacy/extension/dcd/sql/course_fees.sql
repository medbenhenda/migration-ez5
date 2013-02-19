-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2012 at 05:14 PM
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
-- Table structure for table `course_fees`
--

CREATE TABLE IF NOT EXISTS `course_fees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `currency_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `country_id` varchar(3) NOT NULL,
  `fee` decimal(5,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `course_fees`
--

INSERT INTO `course_fees` (`id`, `currency_id`, `course_id`, `country_id`, `fee`) VALUES
(22, 2, 1, '**', 1950),
(23, 3, 1, '**', 1500),
(24, 1, 1, '**', 1250),
(25, 2, 10, '**', 400),
(26, 2, 2, '**', 1350),
(27, 3, 2, '**', 1050),
(28, 1, 2, '**', 850),
(29, 2, 4, '**', 2250),
(30, 3, 4, '**', 1725),
(31, 1, 4, '**', 1425),
(32, 2, 3, '**', 2250),
(33, 3, 3, '**', 1725),
(34, 1, 3, '**', 1425),
(35, 2, 5, '**', 2850),
(36, 3, 5, '**', 2150),
(37, 1, 5, '**', 1750),
(38, 2, 8, '**', 800),
(39, 2, 9, '**', 1105),
(40, 2, 11, '**', 400),
(41, 2, 12, '**', 400),
(42, 2, 13, '**', 400),
(43, 2, 14, '**', 400),
(44, 2, 15, '**', 400),
(45, 2, 16, '**', 400),
(46, 2, 17, '**', 400),
(47, 2, 18, '**', 400),
(48, 2, 19, '**', 400),
(49, 2, 20, '**', 400),
(50, 2, 21, '**', 400),
(51, 2, 22, '**', 400),
(52, 2, 23, '**', 400),
(53, 2, 24, '**', 400),
(54, 2, 25, '**', 400),
(55, 29, 1, '**', 1950),
(56, 30, 2, '**', 1750),
(57, 30, 1, '**', 2500),
(58, 30, 4, '**', 2850),
(59, 30, 3, '**', 2850),
(60, 30, 5, '**', 3650),
(61, 2, 6, '**', 2850),
(62, 3, 6, '**', 2150),
(63, 1, 6, '**', 1750),
(64, 30, 6, '**', 3650),
(65, 29, 2, '**', 1350),
(66, 29, 5, '**', 2850),
(67, 29, 4, '**', 2250),
(68, 29, 6, '**', 2850),
(69, 29, 3, '**', 2250),
(70, 4, 1, '**', 12400),
(71, 4, 2, '**', 8600),
(72, 4, 4, '**', 14300),
(73, 4, 3, '**', 14300),
(74, 4, 6, '**', 18000),
(75, 4, 5, '**', 18000),
(83, 2, 29, '**', 2250),
(84, 3, 29, '**', 1725),
(85, 1, 29, '**', 1425),
(86, 2, 28, '**', 2250),
(87, 3, 28, '**', 1725),
(88, 1, 28, '**', 1425),
(89, 2, 30, '**', 2850),
(90, 3, 30, '**', 2150),
(91, 1, 30, '**', 1750),
(92, 2, 32, '**', 800),
(93, 2, 33, '**', 1105),
(94, 2, 35, '**', 400),
(95, 2, 36, '**', 400),
(96, 2, 37, '**', 400),
(97, 2, 38, '**', 400),
(98, 2, 39, '**', 400),
(99, 2, 40, '**', 400),
(100, 2, 41, '**', 400),
(101, 2, 42, '**', 400),
(102, 2, 43, '**', 400),
(103, 2, 44, '**', 400),
(104, 2, 45, '**', 400),
(105, 2, 46, '**', 400),
(106, 2, 47, '**', 400),
(107, 2, 48, '**', 400),
(108, 2, 49, '**', 400),
(112, 30, 29, '**', 2850),
(113, 30, 28, '**', 2850),
(114, 30, 30, '**', 3650),
(115, 2, 31, '**', 2850),
(116, 3, 31, '**', 2150),
(117, 1, 31, '**', 1750),
(118, 30, 31, '**', 3650),
(120, 29, 30, '**', 2850),
(121, 29, 29, '**', 2250),
(122, 29, 31, '**', 2850),
(123, 29, 28, '**', 2250),
(126, 4, 29, '**', 14300),
(127, 4, 28, '**', 14300),
(128, 4, 31, '**', 18000),
(129, 4, 30, '**', 18000),
(130, 2, 26, '**', 1950);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
