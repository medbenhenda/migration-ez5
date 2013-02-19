-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2012 at 12:27 PM
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
-- Table structure for table `discounts`
--

CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `valid` int(1) unsigned NOT NULL DEFAULT '1',
  `courseid` int(11) unsigned NOT NULL,
  `code` varchar(5) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `expires` date NOT NULL,
  `percentage` int(3) unsigned NOT NULL,
  `dcd_staff_email` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `timecreated` datetime NOT NULL,
  `timemodified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `valid`, `courseid`, `code`, `group_name`, `type`, `expires`, `percentage`, `dcd_staff_email`, `client_email`, `timecreated`, `timemodified`) VALUES
(5, 1, 0, 'FCS1G', 'DCD Focus Apr/may 2012', 'classroom', '2012-06-30', 15, 'info@dc-professional.com', '', '2012-04-24 12:43:15', '2012-08-07 12:08:29'),
(6, 1, 0, 'TGGM1', 'Green Grid Members Discount', 'classroom', '2012-05-31', 15, 'info@dc-professional.com', '', '2012-04-25 10:15:26', '2012-04-25 10:15:26'),
(7, 1, 0, 'SWSDR', 'S.Worn special discount rate', 'classroom', '2012-06-30', 50, 'info@dc-professional.com', 'stephen.worn@datacenterdynamics.com', '2012-04-25 11:24:45', '2012-04-25 11:24:45'),
(8, 1, 0, '7241M', '7x24 Exchange SWARM 1', 'classroom', '2012-06-30', 15, 'info@dc-professional.com', 'andre.pons@datacenterdynamics.com', '2012-04-26 05:26:21', '2012-04-26 05:26:21'),
(9, 1, 0, 'VLSDC', 'Vincent Liew Special Discount Code 25', 'classroom', '2012-06-30', 25, 'info@dc-professional.com', 'vincent.liew@datacenterdynamics.com', '2012-04-26 07:21:01', '2012-04-26 07:21:01'),
(10, 1, 0, 'DSS25', 'Dan Scarbrough special discount code', 'classroom', '2012-06-30', 25, 'info@dc-professional.com', 'dan.scarbrough@datacenterdynamics.com', '2012-04-26 07:23:03', '2012-04-26 07:23:03'),
(11, 1, 0, 'DSS50', 'Dan Scarbrough special discount code', 'classroom', '2012-04-26', 50, 'info@dc-professional.com', 'dan.scarbrough@datacenterdynamics.com', '2012-04-26 07:25:36', '2012-04-26 07:25:36'),
(12, 1, 0, 'HC15D', 'Hernan''s Individual Discounts', 'classroom', '2012-06-30', 15, 'hernan.carrano@datacenterdynamics.com', '', '2012-05-17 05:22:28', '2012-05-17 05:22:28'),
(13, 1, 0, 'PAR12', 'Paris Event 2012', 'classroom', '2012-08-31', 10, 'nick.morris@datacenterdynamics.com', '', '2012-05-30 09:57:54', '2012-05-30 09:57:54'),
(14, 1, 0, 'Brown', 'In house Training', 'online', '2012-07-01', 10, 'brenda@datacenterdynamics.com', '', '2012-06-12 03:56:10', '2012-06-12 03:56:10'),
(15, 1, 0, 'Brend', 'in house', 'classroom', '2012-06-30', 10, 'brenda@datacenterdynamics.com', '', '2012-06-12 04:00:07', '2012-06-12 04:00:07'),
(16, 1, 0, 'aaaaa', 'test', 'online', '2012-06-15', 5, 'alastair.gillies@datacenterdynamics.com', '', '2012-06-14 05:21:39', '2012-06-14 05:21:39'),
(17, 1, 0, 'AUSPB', 'Australia 10% PB', 'classroom', '2012-12-31', 10, 'patrick.bolster@datacenterdynamics.com', '', '2012-06-27 02:10:41', '2012-06-27 02:10:41'),
(18, 1, 0, 'AUS07', 'Australia PB', 'classroom', '2012-07-31', 10, 'patrick.bolster@datacenterdynamics.com', '', '2012-06-27 02:16:48', '2012-06-27 02:16:48'),
(19, 1, 2, 'EEB01', 'Australia PB', 'classroom', '2012-07-31', 19, 'patrick.bolster@datacenterdynamics.com', '', '2012-06-27 02:19:31', '2012-06-27 02:19:31'),
(20, 1, 1, 'K0907', 'Kiev course', 'classroom', '2012-07-15', 10, 'tereza.vita@datacenterdynamics.com', '', '2012-07-06 02:15:16', '2012-07-06 02:15:16'),
(21, 1, 1, 'TEST1', 'test', 'classroom', '2012-07-11', 10, 'alastair.gillies@datacenterdynamics.com', '', '2012-07-10 04:59:51', '2012-07-10 04:59:51'),
(22, 1, 0, 'SFDCD', 'Brochure San Francisco event 2012 ', 'classroom', '2012-08-30', 10, 'george.rockett@datacenterdynamics.com', '', '2012-07-10 06:16:52', '2012-07-10 06:16:52'),
(23, 1, 2, 'CED09', 'CEDCIF', 'classroom', '2012-09-20', 15, 'elif.yildiz@datacenterdynamics.com', '', '2012-07-11 03:51:28', '2012-07-11 03:51:28'),
(24, 1, 2, 'TES09', 'TESCON  ', 'classroom', '2012-09-20', 15, 'elif.yildiz@datacenterdynamics.com', '', '2012-07-11 03:56:50', '2012-07-11 03:56:50'),
(25, 1, 0, 'STA01', 'Standard Bank SA', 'classroom', '2012-09-18', 10, 'elif.yildiz@datacenterdynamics.com', '', '2012-07-31 03:04:43', '2012-07-31 03:04:43'),
(26, 1, 0, 'AUS09', 'Sydney Swarm Sept 2012', 'classroom', '2012-10-01', 10, 'aleks.stoimanovski@datacenterdynamics.com', '', '2012-08-06 02:18:58', '2012-08-06 02:18:58'),
(27, 1, 0, 'AUM09', 'Melbourne Sept 2012', 'classroom', '2012-10-01', 10, 'aleks.stoimanovski@datacenterdynamics.com', '', '2012-08-06 02:19:26', '2012-08-06 02:19:26'),
(28, 1, 1, 'EQU09', 'Equinix Lillian Li', 'classroom', '2012-09-16', 15, 'aleks.stoimanovski@datacenterdynamics.com', '', '2012-08-29 03:19:53', '2012-08-29 03:19:53'),
(29, 1, 0, 'NADCD', 'NAM', 'classroom', '2012-12-31', 10, 'david.lee@dc-professional.com', '', '2012-09-07 05:59:42', '2012-09-07 05:59:42'),
(30, 1, 3, 'IST10', 'TAV Turkey', 'classroom', '2012-10-08', 5, 'zeynep.selek@datacenterdynamics.com', '', '2012-09-14 09:18:24', '2012-09-14 09:18:24'),
(31, 1, 1, 'TTT01', 'Train the Trainer', 'classroom', '2012-12-31', 50, 'ken.mcnally@datacenterdynamics.com', '', '2012-09-17 02:20:14', '2012-09-17 02:20:14'),
(32, 1, 2, 'TTT02', 'Train the Trainer EEBP', 'classroom', '2012-12-31', 50, 'ken.mcnally@datacenterdynamics.com', '', '2012-09-17 02:20:39', '2012-09-17 02:20:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
