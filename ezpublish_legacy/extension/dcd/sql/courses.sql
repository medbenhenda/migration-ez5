-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2012 at 12:51 PM
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
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(128) DEFAULT NULL,
  `code` varchar(128) DEFAULT NULL,
  `version` varchar(255) NOT NULL,
  `level` varchar(128) DEFAULT NULL,
  `pdhs` varchar(128) DEFAULT NULL,
  `fees` varchar(128) DEFAULT NULL,
  `booking_url` varchar(500) DEFAULT NULL,
  `has_examination` tinyint(1) DEFAULT '0',
  `has_qualification` tinyint(1) DEFAULT '0',
  `futher_courses_in_development` tinyint(1) DEFAULT '0',
  `third_party_course` tinyint(1) DEFAULT '0',
  `lms_course_id` int(128) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `priority` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `default_company` tinyint(2) unsigned DEFAULT NULL,
  `language` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `type`, `code`, `version`, `level`, `pdhs`, `fees`, `booking_url`, `has_examination`, `has_qualification`, `futher_courses_in_development`, `third_party_course`, `lms_course_id`, `active`, `priority`, `created_at`, `modified_at`, `default_company`, `language`) VALUES
(1, 'classroom', 'C101', '', '1', '21', '$1950 /  â‚¬1500 / Â£1250', '', 0, 0, 0, 0, 4, 1, 10, '2011-08-31 13:42:08', '2012-09-19 05:56:48', 0, 'en'),
(2, 'classroom', 'C201', '', '2a', '14', '$1350 / â‚¬1050 / Â£850', 'http://example.com', 1, 1, 0, 0, 31, 1, 9, '2011-08-31 14:00:51', '2012-07-23 05:28:35', 0, 'en'),
(3, 'classroom', 'C302', '', '3', '21', '$2250 / â‚¬1725 / Â£1425', '', 1, 1, 0, 0, 28, 1, 7, '2011-08-31 14:35:43', '2012-07-23 05:29:10', 0, 'en'),
(4, 'classroom', 'C301', '', '3', '21', '$2250 / â‚¬1725 / Â£1425', 'http://google.com', 1, 0, 0, 0, 33, 1, 8, '2011-08-31 14:53:42', '2012-07-23 05:28:54', 0, 'en'),
(5, 'classroom', 'C304', '', '3', '21', '$2850 / â‚¬2150 / Â£1750', '', 1, 0, 0, 0, 32, 1, 5, '2011-08-31 14:57:22', '2012-07-23 05:29:48', 0, 'en'),
(6, 'classroom', 'C303', '', '3', '21', '$2850 / â‚¬2150 / Â£1750', '', 1, 0, 0, 0, 39, 1, 6, '2011-08-31 14:59:20', '2012-07-23 05:29:30', 0, 'en'),
(8, 'classroom', 'DCEP1', '', '2a', '7', '$800', '', 0, 0, 0, 1, 29, 1, 4, '2011-09-23 10:50:09', '2012-07-23 05:30:03', 0, 'en'),
(9, 'classroom', 'DCEP2', '', '2a', '10', '$1105', '', 1, 0, 0, 1, 30, 1, 3, '2011-09-23 10:50:43', '2012-07-23 05:30:14', 0, 'en'),
(10, 'online', 'E201', 'E201_2.0', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=21', 1, 0, 0, 0, 21, 1, 16, '2011-10-18 15:56:06', '2012-07-26 12:40:24', 1, 'en'),
(11, 'online', 'E202', 'E202_2.0', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=42', 1, 0, 0, 0, 42, 1, 15, '2011-10-18 15:57:52', '2012-09-06 11:07:36', 1, 'en'),
(12, 'online', 'E203', 'E203_2.0', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=44', 0, 0, 0, 0, 44, 1, 14, '2011-10-18 15:58:54', '2012-08-09 10:43:16', 1, 'en'),
(13, 'online', 'E204', 'E204_2.0', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=18', 1, 0, 0, 0, 45, 1, 13, '2011-10-18 15:59:56', '2012-09-06 10:52:59', 1, 'en'),
(14, 'online', 'E205', 'E205_2.0', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=19', 1, 0, 0, 0, 46, 1, 12, '2011-10-18 16:00:57', '2012-09-06 11:18:44', 1, 'en'),
(15, 'online', 'E206', 'E206', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=17', 1, 0, 0, 0, 17, 1, 11, '2011-10-18 16:02:10', '2012-07-25 10:15:11', 1, 'en'),
(16, 'online', 'E207', 'E207', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=16', 1, 0, 0, 0, 16, 1, 10, '2011-10-18 16:03:25', '2012-07-25 09:49:07', 1, 'en'),
(17, 'online', 'E208', 'E208', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=14', 1, 0, 0, 0, 14, 1, 9, '2011-10-18 16:04:24', '2012-07-25 09:49:17', 1, 'en'),
(18, 'online', 'E209', 'E209', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=15', 1, 0, 0, 0, 15, 1, 8, '2011-10-18 16:05:45', '2012-07-25 09:49:26', 1, 'en'),
(19, 'online', 'E210', 'E210', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=2', 1, 1, 0, 0, 2, 1, 7, '2011-10-18 16:06:47', '2012-07-25 09:49:30', 1, 'en'),
(20, 'online', 'E211', 'E211', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=20', 1, 0, 0, 0, 20, 1, 6, '2011-10-18 16:07:35', '2012-07-25 09:49:34', 1, 'en'),
(21, 'online', 'E212', 'E212', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=8', 1, 0, 0, 0, 8, 1, 5, '2011-10-18 16:08:46', '2012-07-25 09:49:36', 1, 'en'),
(22, 'online', 'E213', 'E213', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=10', 1, 0, 0, 0, 10, 1, 4, '2011-10-18 16:09:51', '2012-07-25 09:49:39', 1, 'en'),
(23, 'online', 'E214', 'E214', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=12', 1, 0, 0, 0, 12, 1, 3, '2011-11-29 15:20:12', '2012-07-25 09:49:42', 1, 'en'),
(24, 'online', 'E215', 'E215', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=9', 1, 0, 0, 0, 9, 1, 2, '2011-11-29 15:41:49', '2012-07-25 09:49:45', 1, 'en'),
(25, 'online', 'E216', 'E216', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=11', 0, 0, 0, 0, 11, 1, 1, '2011-11-29 15:44:53', '2012-07-25 09:49:48', 1, 'en'),
(26, 'classroom', 'C101', '', '1', '21', '$1950 /  â‚¬1500 ', '', 0, 0, 0, 0, 4, 1, 1, '2011-08-31 13:42:08', '2012-09-17 18:28:31', 0, 'es'),
(27, 'classroom', 'C201', '', '2a', '14', '$1350 / â‚¬1050', 'http://example.com', 0, 0, 0, 0, 31, 1, 1, '2011-08-31 14:00:51', '2012-09-17 18:44:27', 0, 'es'),
(28, 'classroom', 'C302', '', '3', '21', '$2250 / â‚¬1725', '', 1, 1, 0, 0, 28, 1, 7, '2011-08-31 14:35:43', '2012-09-17 19:11:27', 0, 'es'),
(29, 'classroom', 'C301', '', '3', '21', '$2250 / â‚¬1725', 'http://google.com', 1, 0, 0, 0, 33, 1, 8, '2011-08-31 14:53:42', '2012-09-17 19:11:55', 0, 'es'),
(30, 'classroom', 'C304', '', '3', '21', '$2850 / â‚¬2150', '', 1, 0, 0, 0, 32, 1, 5, '2011-08-31 14:57:22', '2012-09-17 19:32:33', 0, 'es'),
(31, 'classroom', 'C303', '', '3', '21', '$2850 / â‚¬2150', '', 1, 0, 0, 0, 39, 1, 6, '2011-08-31 14:59:20', '2012-09-17 19:19:01', 0, 'es'),
(32, 'classroom', 'DCEP1', '', '2a', '7', '$800', '', 0, 0, 0, 1, 29, 1, 4, '2011-09-23 10:50:09', '2012-09-17 19:35:37', 0, 'es'),
(33, 'classroom', 'DCEP2', '', '2a', '10', '$1105', '', 1, 0, 0, 1, 30, 1, 3, '2011-09-23 10:50:43', '2012-09-17 19:36:54', 0, 'es'),
(34, 'online', 'E201', 'E201_2.0', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=21', 0, 0, 0, 0, 21, 1, 0, '2011-10-18 15:56:06', '2012-09-17 04:36:58', 0, 'es'),
(35, 'online', 'E202', 'E202_2.0', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=42', 1, 0, 0, 0, 42, 1, 15, '2011-10-18 15:57:52', '2012-08-09 10:43:09', 1, 'es'),
(36, 'online', 'E203', 'E203_2.0', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=44', 0, 0, 0, 0, 44, 1, 14, '2011-10-18 15:58:54', '2012-08-09 10:43:16', 1, 'es'),
(37, 'online', 'E204', 'E204', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=18', 1, 0, 0, 0, 18, 1, 13, '2011-10-18 15:59:56', '2012-07-25 09:48:49', 1, 'es'),
(38, 'online', 'E205', 'E205', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=19', 1, 0, 0, 0, 19, 1, 12, '2011-10-18 16:00:57', '2012-07-25 09:48:56', 1, 'es'),
(39, 'online', 'E206', 'E206', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=17', 1, 0, 0, 0, 17, 1, 11, '2011-10-18 16:02:10', '2012-07-25 10:15:11', 1, 'es'),
(40, 'online', 'E207', 'E207', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=16', 1, 0, 0, 0, 16, 1, 10, '2011-10-18 16:03:25', '2012-07-25 09:49:07', 1, 'es'),
(41, 'online', 'E208', 'E208', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=14', 1, 0, 0, 0, 14, 1, 9, '2011-10-18 16:04:24', '2012-07-25 09:49:17', 1, 'es'),
(42, 'online', 'E209', 'E209', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=15', 1, 0, 0, 0, 15, 1, 8, '2011-10-18 16:05:45', '2012-07-25 09:49:26', 1, 'es'),
(43, 'online', 'E210', 'E210', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=2', 1, 1, 0, 0, 2, 1, 7, '2011-10-18 16:06:47', '2012-07-25 09:49:30', 1, 'es'),
(44, 'online', 'E211', 'E211', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=20', 1, 0, 0, 0, 20, 1, 6, '2011-10-18 16:07:35', '2012-07-25 09:49:34', 1, 'es'),
(45, 'online', 'E212', 'E212', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=8', 1, 0, 0, 0, 8, 1, 5, '2011-10-18 16:08:46', '2012-07-25 09:49:36', 1, 'es'),
(46, 'online', 'E213', 'E213', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=10', 1, 0, 0, 0, 10, 1, 4, '2011-10-18 16:09:51', '2012-07-25 09:49:39', 1, 'es'),
(47, 'online', 'E214', 'E214', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=12', 1, 0, 0, 0, 12, 1, 3, '2011-11-29 15:20:12', '2012-07-25 09:49:42', 1, 'es'),
(48, 'online', 'E215', 'E215', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=9', 1, 0, 0, 0, 9, 1, 2, '2011-11-29 15:41:49', '2012-07-25 09:49:45', 1, 'es'),
(49, 'online', 'E216', 'E216', '1', '8', '$400', 'http://my.dc-professional.com/course/view.php?id=11', 0, 0, 0, 0, 11, 1, 1, '2011-11-29 15:44:53', '2012-07-25 09:49:48', 1, 'es');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
