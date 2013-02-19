-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2012 at 05:39 PM
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
-- Table structure for table `event_fees`
--

CREATE TABLE IF NOT EXISTS `event_fees` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(11) unsigned DEFAULT '0',
  `course_fees_id` tinyint(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=276 ;

--
-- Dumping data for table `event_fees`
--

INSERT INTO `event_fees` (`id`, `event_id`, `course_fees_id`) VALUES
(7, 67, 55),
(8, 137, 26),
(9, 79, 28),
(10, 174, 22),
(11, 44, 29),
(12, 65, 23),
(13, 98, 33),
(14, 118, 23),
(15, 173, 26),
(16, 95, 26),
(17, 64, 23),
(18, 15, 22),
(19, 112, 22),
(20, 16, 22),
(21, 71, 23),
(22, 104, 38),
(23, 109, 24),
(24, 40, 32),
(25, 78, 27),
(26, 105, 38),
(27, 171, 22),
(28, 106, 35),
(29, 172, 26),
(30, 92, 29),
(31, 48, 29),
(32, 181, 38),
(33, 198, 57),
(34, 182, 38),
(35, 183, 22),
(36, 206, 56),
(37, 108, 23),
(38, 150, 22),
(39, 177, 23),
(40, 17, 22),
(41, 208, 60),
(42, 194, 26),
(43, 107, 27),
(44, 210, 59),
(45, 18, 22),
(46, 113, 22),
(47, 184, 22),
(48, 19, 22),
(49, 80, 28),
(50, 91, 23),
(51, 195, 26),
(52, 185, 22),
(53, 115, 27),
(54, 196, 26),
(55, 211, 23),
(56, 154, 22),
(57, 179, 22),
(58, 186, 22),
(59, 110, 31),
(60, 114, 22),
(61, 197, 26),
(62, 121, 34),
(63, 149, 22),
(64, 42, 32),
(65, 180, 22),
(66, 187, 22),
(67, 199, 26),
(68, 164, 22),
(69, 188, 22),
(70, 189, 22),
(71, 201, 26),
(72, 165, 23),
(73, 202, 26),
(74, 168, 27),
(75, 166, 23),
(76, 191, 22),
(77, 178, 36),
(78, 204, 26),
(79, 190, 22),
(80, 203, 26),
(81, 192, 22),
(82, 167, 23),
(83, 205, 26),
(84, 193, 22),
(85, 207, 26),
(86, 96, 26),
(87, 87, 22),
(88, 213, 38),
(89, 216, 26),
(90, 93, 27),
(91, 89, 22),
(92, 218, 22),
(93, 224, 29),
(94, 222, 35),
(95, 220, 26),
(96, 219, 22),
(97, 223, 32),
(98, 227, 61),
(99, 221, 26),
(100, 225, 22),
(101, 217, 26),
(102, 226, 22),
(103, 228, 61),
(104, 232, 24),
(105, 24, 55),
(106, 237, 26),
(107, 25, 55),
(108, 36, 65),
(109, 236, 22),
(110, 242, 32),
(111, 240, 35),
(112, 238, 26),
(113, 243, 29),
(114, 239, 26),
(115, 241, 66),
(116, 246, 28),
(117, 245, 24),
(118, 244, 24),
(119, 248, 34),
(120, 249, 37),
(121, 252, 57),
(122, 254, 56),
(123, 256, 66),
(124, 250, 31),
(125, 251, 63),
(126, 247, 28),
(127, 253, 55),
(128, 255, 65),
(129, 126, 23),
(130, 257, 67),
(131, 258, 26),
(132, 50, 23),
(133, 261, 26),
(134, 260, 22),
(135, 263, 70),
(136, 269, 73),
(137, 265, 71),
(138, 268, 74),
(139, 262, 22),
(140, 266, 35),
(141, 267, 61),
(142, 264, 26),
(143, 152, 22),
(144, 259, 22),
(145, 273, 22),
(146, 271, 58),
(147, 272, 64),
(148, 270, 30),
(149, 276, 27),
(150, 275, 62),
(151, 274, 22),
(152, 278, 23),
(153, 277, 29),
(154, 279, 22),
(155, 280, 38),
(156, 282, 39),
(157, 283, 29),
(158, 284, 29),
(159, 285, 61),
(160, 286, 26),
(161, 287, 22),
(162, 288, 32),
(163, 289, 35),
(164, 290, 26),
(165, 291, 22),
(166, 292, 26),
(167, 293, 32),
(168, 296, 22),
(169, 307, 35),
(170, 309, 32),
(171, 312, 26),
(172, 311, 26),
(173, 297, 22),
(174, 315, 61),
(175, 317, 29),
(176, 294, 24),
(177, 302, 31),
(178, 304, 63),
(179, 300, 28),
(180, 295, 24),
(181, 305, 34),
(182, 306, 37),
(183, 301, 28),
(184, 298, 22),
(185, 308, 35),
(186, 318, 29),
(187, 313, 26),
(188, 299, 22),
(189, 310, 32),
(190, 316, 61),
(191, 314, 26),
(192, 323, 22),
(193, 325, 22),
(194, 321, 22),
(195, 324, 22),
(196, 320, 22),
(197, 322, 22),
(198, 319, 22),
(199, 330, 55),
(200, 332, 65),
(201, 331, 55),
(202, 326, 23),
(203, 329, 33),
(204, 328, 27),
(205, 327, 23),
(206, 334, 69),
(207, 335, 68),
(208, 333, 65),
(209, 336, 57),
(210, 337, 60),
(211, 338, 59),
(212, 339, 56),
(213, 340, 39),
(214, 341, 22),
(215, 342, 22),
(216, 343, 22),
(217, 344, 22),
(218, 345, 23),
(219, 350, 22),
(220, 354, 35),
(221, 353, 26),
(222, 355, 29),
(223, 351, 22),
(224, 356, 32),
(225, 357, 61),
(226, 352, 26),
(227, 347, 22),
(228, 348, 22),
(229, 346, 22),
(230, 358, 26),
(231, 359, 26),
(232, 364, 26),
(233, 362, 26),
(234, 365, 27),
(235, 366, 26),
(236, 367, 26),
(237, 368, 26),
(238, 369, 26),
(239, 361, 26),
(240, 360, 27),
(241, 363, 26),
(242, 370, 23),
(243, 371, 29),
(244, 372, 61),
(245, 376, 26),
(246, 381, 26),
(247, 377, 22),
(248, 379, 35),
(249, 380, 32),
(250, 374, 29),
(251, 375, 61),
(252, 382, 22),
(253, 383, 22),
(254, 373, 22),
(255, 386, 30),
(256, 389, 32),
(257, 390, 33),
(258, 387, 29),
(259, 391, 32),
(260, 385, 29),
(261, 384, 22),
(262, 388, 32),
(263, 394, 26),
(264, 393, 26),
(265, 392, 32),
(266, 396, 22),
(267, 395, 26),
(268, 397, 59),
(269, 399, 57),
(270, 398, 60),
(271, 400, 56),
(272, 403, 66),
(273, 402, 67),
(274, 401, 55),
(275, 404, 65);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;