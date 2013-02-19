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
-- Table structure for table `dcp_company_info`
--

CREATE TABLE IF NOT EXISTS `dcp_company_info` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `company_reg_no` varchar(16) NOT NULL,
  `company_tax_no` varchar(16) NOT NULL,
  `regional_manager_name` varchar(255) NOT NULL,
  `regional_manager_email` varchar(255) NOT NULL,
  `regional_manager_phone` varchar(30) NOT NULL,
  `company_address_1` varchar(50) NOT NULL,
  `company_address_2` varchar(50) NOT NULL,
  `company_address_3` varchar(50) NOT NULL,
  `company_address_city` varchar(30) NOT NULL,
  `company_address_state` varchar(20) NOT NULL,
  `company_address_zip` varchar(10) NOT NULL,
  `company_address_country` varchar(15) NOT NULL,
  `central_email` varchar(255) NOT NULL,
  `bank_id` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `booking_form` varchar(100) NOT NULL,
  `country_id` varchar(2) DEFAULT NULL,
  `tax_rules` text,
  `company_alias_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `dcp_company_info`
--

INSERT INTO `dcp_company_info` (`id`, `company_name`, `company_reg_no`, `company_tax_no`, `regional_manager_name`, `regional_manager_email`, `regional_manager_phone`, `company_address_1`, `company_address_2`, `company_address_3`, `company_address_city`, `company_address_state`, `company_address_zip`, `company_address_country`, `central_email`, `bank_id`, `booking_form`, `country_id`, `tax_rules`, `company_alias_name`) VALUES
(1, 'DCProfessional Development Ltd', '7677749', '126031262', 'Alastair Gillies', 'alastair.gillies@datacenterdynamics.com', '+44 (0) 207 377 1907', '28 Scrutton Street', '', '', 'London', 'London', 'EC2A4RP', '', '', 26, 'http://dc-professional.com/files/B-UK_Training.pdf', 'gb', '[{"type":"Country","customer_location":"GB","vat_rate":"20"},{"type":"Region","customer_location":"EC","vat_rate":"0"},{"type":"Rest of world","customer_location":"*","vat_rate":"0"}]', ''),
(2, 'Datacentre Dynamics Spain SRL', 'B85733038', 'B85733038', 'Lucia Perez Artacho', 'lucia.perez@datacenterdynamics.com', '', 'Calle Alcala 4', 'Planta', '', 'Madrid', 'CP', '28014', '', '', 28, '', 'es', '[{"type":"Country","customer_location":"ES","vat_rate":"18"},{"type":"Region","customer_location":"EC","vat_rate":"0"},{"type":"Rest of world","customer_location":"*","vat_rate":"0"}]', ''),
(5, 'Data Center Dynamics Holland BV', '52663957', '850542315B01', 'Miel Dister', 'mdister@datacenterdynamics.com', '0031 30 210 6534', 'Newtonlaan 115', 'Postbus 246', 'Utrecht', 'Amsterdam', 'BH', '3584', '', 'Kwok Man <kwok.man@datacenterdynamics.com>', 3, '', 'nl', '[{"type":"Country","customer_location":"NL","vat_rate":"21"},{"type":"Region","customer_location":"EC","vat_rate":"0"},{"type":"Rest of world","customer_location":"*","vat_rate":"0"}]', ''),
(6, 'DataCenter Dynamics Inc', '75-3269560', '', 'Herb Villa', 'herbvilla@dc-professional.com', '+1(415) 735 2812', 'The Monadnock Building, Suite 590', '685 Market St.', '', 'San Francisco', 'CA', '95093', '', '', 21, '', 'us', '[{"type":"Rest of world","customer_location":"*","vat_rate":"0"},{"type":"Country","customer_location":"US","vat_rate":"0"}]', 'DCD Inc '),
(8, 'DCD Holdings Pte Ltd', '201107053W', 'NA', 'Vincent Liew', 'vincent.liew@datacenterdynamics.com', '0065 96492075', '285D Toh Guan Road', '#05-72', '', 'Singapore', 'Singapore', '604285', '', '', 8, '', 'sg', '[{"type":"Country","customer_location":"SG","vat_rate":"0"},{"type":"Rest of world","customer_location":"*","vat_rate":"0"}]', ''),
(10, 'Datacenter Dynamics (Aust) pty Ltd ', 'ACN 148 938 934 ', '74 148 938 934 ', 'Aleks Stoimanovski', 'aleks.stoimanovski@datacenterdynamics.com', '+61 (2) 9186 2530', '103 George Street', '', '', 'Parramatta', '', 'NSW 2000', '', '', 18, '', 'au', '[{"type":"Country","customer_location":"AU","vat_rate":"10"},{"type":"Rest of world","customer_location":"*","vat_rate":"0"}]', ''),
(11, 'Data Center Dynamics Asia ', '1368637', 'NA', 'Linda Li', 'linda.li@datacenterdynamics.com', '00852 81723686', '36/F Tower Two', 'Times Square', '1 Matheson Street', 'Causeway Bay', '', 'NA', '', '', 27, '', 'hk', '[{"type":"Rest of world","customer_location":"*","vat_rate":"0"},{"type":"Country","customer_location":"HK","vat_rate":"0"}]', ''),
(12, 'Datacenter Dynamics Shanghai (Co.) Ltd.', '', '', 'Jimmy Yu', '  jimmy.yu@datacenterdynamics.com', '+65 96492075', 'G/F, HSBC Tower', '1000 Lujiazui Ring Road Pudong', '', 'Shanghai', '', '200120', '', '', 29, '', 'cn', '[{"type":"Country","customer_location":"CN","vat_rate":"0"},{"type":"Rest of world","customer_location":"*","vat_rate":"0"}]', ''),
(13, ' Datacenter Dynamics MEA FZ-LLC  ', '18982', '18982', 'Wasim Hamid', 'wasim.hamid@datacenterdynamics.com', '00971 44348452', 'Office G23, Ground Floor', 'Building 9', '', 'Dubai Media City', 'Dubai', 'PO BOX 502', '', '', 7, '', 'ae', '[{"type":"Rest of world","customer_location":"*","vat_rate":"0"},{"type":"Country","customer_location":"AE","vat_rate":"0"}]', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
