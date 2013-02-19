-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2012 at 12:26 PM
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
-- Table structure for table `dcp_bank_info`
--

CREATE TABLE IF NOT EXISTS `dcp_bank_info` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(50) NOT NULL,
  `acc_no` varchar(15) NOT NULL,
  `sort_code` varchar(8) NOT NULL,
  `iban` varchar(34) NOT NULL,
  `swiftbic` varchar(12) NOT NULL,
  `bank_alias_name` varchar(50) NOT NULL,
  `accounts` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `dcp_bank_info`
--

INSERT INTO `dcp_bank_info` (`id`, `bank_name`, `acc_no`, `sort_code`, `iban`, `swiftbic`, `bank_alias_name`, `accounts`) VALUES
(3, 'Rabobank Plc', '1116.42.051', '', 'NL84RABO0111642051', 'RABONL2U', 'DCD Holland', '[{"iban":"NL84RABO0111642051","acc_no":"1116.42.051","currency":"3","sort_code":"","swiftbic":"RABONL2U"}]'),
(7, 'Barclays Bank', '1848317', '', 'AE740190000000001848317', 'BARCAEAD', 'DCD MEA ', '[{"iban":"AE740190000000001848317","acc_no":"1848317","currency":"2","sort_code":"","swiftbic":"BARCAEAD"}]'),
(8, 'The Hong Kong and Shanghai Banking Corporation Ltd', '260-762240-178 ', '7232', '', 'HSBCSGSG', 'DCD Holdings Pte ', '[{"iban":"","acc_no":"047-299573-001  SGD","currency":"30","sort_code":"7232","swiftbic":" HSBCSGSG"},{"iban":"","acc_no":"","currency":"2","sort_code":"","swiftbic":""}]'),
(18, 'HSBC', '433752-160', '342-011', '', 'HKBAAU2S', 'DCD Aus Pty  ', '[{"iban":"","acc_no":"433752-001","currency":"29","sort_code":"342-011","swiftbic":"HKBAAU2S"},{"iban":"","acc_no":"433752-160","currency":"2","sort_code":"342-011","swiftbic":"HKBAAU2S"}]'),
(21, 'JPMorgan Chase Bank N.A', '789909637', '02100002', '', 'CHASUS33', 'DCD Inc ', '[{"iban":"","acc_no":"789909637","currency":"2","sort_code":"021000021","swiftbic":"CHASUS33"}]'),
(26, 'Barclays Uk ', '', '', '', '', 'DCPro', '[{"iban":"GB16 BARC 20298673386740","acc_no":"73386740","currency":"1","sort_code":"20-29-86","swiftbic":"BARCGB22"},{"iban":"GB97 BARC 20298676275688","acc_no":"76275688","currency":"3","sort_code":"20-29-86","swiftbic":"BARCGB22"},{"iban":"GB24 BARC 20298648457499","acc_no":"48457499","currency":"2","sort_code":"20-29-86","swiftbic":"BARCGB22"}]'),
(27, 'The Hong Kong & Shanghai Bank Corporation Ltd', '', '', '', '', 'DCD Asia ', '[{"iban":"","acc_no":"112-195219-838","currency":"2","sort_code":"1 Queens Road, Central, HK","swiftbic":"HSBCHKHHHKH"}]'),
(28, 'Santander', '', '', '', '', 'DCD Spain', '[{"iban":"ES67 0049\\u00a01804\\u00a019\\u00a02310408271","acc_no":"0049\\u00a01804\\u00a019\\u00a02310408271","currency":"3","sort_code":"","swiftbic":"BSCHESMM"},{"iban":"ES18 0049 1804 1428 1040 9090","acc_no":"0049\\u00a01804\\u00a014 2810409090","currency":"2","sort_code":"","swiftbic":"BSCHESMM"}]'),
(29, 'The Hong Kong and Shanghai Banking Corporation Lim', '', '', '', '', 'DCD Shanghai', '[{"iban":"","acc_no":"088-325915-001","currency":"4","sort_code":"","swiftbic":"HSBCCNSH"}]');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
