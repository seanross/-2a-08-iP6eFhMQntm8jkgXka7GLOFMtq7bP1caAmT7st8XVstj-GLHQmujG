-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2013 at 03:37 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `printingpress`
--
CREATE DATABASE `printingpress` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `printingpress`;

-- --------------------------------------------------------

--
-- Table structure for table `cashiering_cart_tb`
--

DROP TABLE IF EXISTS `cashiering_cart_tb`;
CREATE TABLE IF NOT EXISTS `cashiering_cart_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cashiering_payment_id` int(11) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cashiering_cart_tb`
--

INSERT INTO `cashiering_cart_tb` (`id`, `cashiering_payment_id`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(6, NULL, 'asf', NULL, '2013-08-09 17:56:39', '2013-08-09 09:56:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cashiering_payment_tb`
--

DROP TABLE IF EXISTS `cashiering_payment_tb`;
CREATE TABLE IF NOT EXISTS `cashiering_payment_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `balance` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0cf114475c08f7fbb5b5f1f7e867e47d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:22.0) Gecko/20100101 Firefox/22.0', 1376074109, ''),
('403bbadf2c3cfc9d095e6189f153558d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:22.0) Gecko/20100101 Firefox/22.0', 1376103306, '');

-- --------------------------------------------------------

--
-- Table structure for table `forum_post_tb`
--

DROP TABLE IF EXISTS `forum_post_tb`;
CREATE TABLE IF NOT EXISTS `forum_post_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_profiles_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `forum_post_tb`
--

INSERT INTO `forum_post_tb` (`id`, `user_profiles_id`, `forum_id`, `updated_date`, `content`, `created_by`, `updated_by`, `created_date`, `enabled`) VALUES
(1, 5, 4, '2013-07-01 17:43:25', 'This is a Test Data for reply', 'ahaha3', 'ahaha3', '2013-07-01 17:43:25', 1),
(2, 6, 3, '2013-07-01 18:54:06', 'Kindly give a more specific description over here.', 'test123', 'test123', '2013-07-01 18:54:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum_tb`
--

DROP TABLE IF EXISTS `forum_tb`;
CREATE TABLE IF NOT EXISTS `forum_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `forum_tb`
--

INSERT INTO `forum_tb` (`id`, `topic`, `content`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, 'Hello World', '', 'ahaha3', 'ahaha3', '2013-07-01 16:31:39', '2013-07-01 16:31:39', 1),
(2, 'Hello World', '', 'ahaha3', 'ahaha3', '2013-07-01 16:32:12', '2013-07-01 16:32:12', 1),
(3, '  The interpretation of object oriented keywords like parent and self has changed. Previously, calling them using the double colon syntax would emit an E_STRICT warning because they were interpreted as static. ', '', 'ahaha3', 'ahaha3', '2013-07-01 16:32:45', '2013-07-01 16:32:45', 1),
(4, 'Something fishy', 'I dont know why', 'ahaha3', 'ahaha3', '2013-07-01 16:42:48', '2013-07-01 16:42:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(4, '127.0.0.1', 'seanross', '2013-08-09 16:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `mis_brochure_folding_tb`
--

DROP TABLE IF EXISTS `mis_brochure_folding_tb`;
CREATE TABLE IF NOT EXISTS `mis_brochure_folding_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mis_brochure_folding_tb`
--

INSERT INTO `mis_brochure_folding_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, 'Three(3) piece Fold', '3.50', 'admin', 'admin', '2013-08-08 14:02:25', '2013-08-08 06:02:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_brochure_paper_type_tb`
--

DROP TABLE IF EXISTS `mis_brochure_paper_type_tb`;
CREATE TABLE IF NOT EXISTS `mis_brochure_paper_type_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mis_brochure_paper_type_tb`
--

INSERT INTO `mis_brochure_paper_type_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, 'Cartolina', '3.50', 'admin', NULL, '2013-08-08 14:17:37', '2013-08-08 06:17:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_brochure_printed_side_tb`
--

DROP TABLE IF EXISTS `mis_brochure_printed_side_tb`;
CREATE TABLE IF NOT EXISTS `mis_brochure_printed_side_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mis_brochure_printed_side_tb`
--

INSERT INTO `mis_brochure_printed_side_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, 'Zebra Stripes', '10.50', 'admin', 'admin', '2013-08-08 14:15:25', '2013-08-08 06:15:25', 1),
(2, 'Leopard Fur', '50.00', 'admin', 'admin', '2013-08-08 14:16:15', '2013-08-08 06:16:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_brochure_size_tb`
--

DROP TABLE IF EXISTS `mis_brochure_size_tb`;
CREATE TABLE IF NOT EXISTS `mis_brochure_size_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mis_brochure_size_tb`
--

INSERT INTO `mis_brochure_size_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, '10', '0.00', 'admin', 'admin', '2013-08-08 06:39:38', '2013-08-07 22:39:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_calendar_binding_placement_tb`
--

DROP TABLE IF EXISTS `mis_calendar_binding_placement_tb`;
CREATE TABLE IF NOT EXISTS `mis_calendar_binding_placement_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `mis_calendar_binding_placement_tb`
--

INSERT INTO `mis_calendar_binding_placement_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(5, '2 Binding', '34.75', 'admin', 'admin', '2013-08-07 14:28:31', '2013-08-07 06:28:31', 1),
(6, 'Second Binding', '7.50', 'admin', 'admin', '2013-08-07 15:25:20', '2013-08-07 07:25:20', 1),
(8, 'New Binding', '2.90', 'admin', 'admin', '2013-08-08 11:54:50', '2013-08-08 03:54:50', 1),
(9, 'New Metal Binding', '0.50', 'admin', 'admin', '2013-08-08 13:59:58', '2013-08-08 05:59:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_calendar_binding_tb`
--

DROP TABLE IF EXISTS `mis_calendar_binding_tb`;
CREATE TABLE IF NOT EXISTS `mis_calendar_binding_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mis_calendar_binding_tb`
--

INSERT INTO `mis_calendar_binding_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, 'Wood', '1.50', 'admin', 'admin', '2013-08-06 00:00:00', '2013-08-08 06:47:05', 1),
(2, 'Metal Cover', '0.50', 'admin', NULL, '2013-08-08 14:46:41', '2013-08-08 06:46:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_calendar_cover_paper_tb`
--

DROP TABLE IF EXISTS `mis_calendar_cover_paper_tb`;
CREATE TABLE IF NOT EXISTS `mis_calendar_cover_paper_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mis_calendar_cover_paper_tb`
--

INSERT INTO `mis_calendar_cover_paper_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, 'test data', '0.50', 'admin', 'admin', '2013-08-06 00:00:00', '2013-08-09 06:31:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_calendar_cover_tb`
--

DROP TABLE IF EXISTS `mis_calendar_cover_tb`;
CREATE TABLE IF NOT EXISTS `mis_calendar_cover_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mis_calendar_cover_tb`
--

INSERT INTO `mis_calendar_cover_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, 'test data', '100.00', 'admin', NULL, '2013-08-06 00:00:00', '2013-08-06 15:55:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_calendar_hole_drilling_tb`
--

DROP TABLE IF EXISTS `mis_calendar_hole_drilling_tb`;
CREATE TABLE IF NOT EXISTS `mis_calendar_hole_drilling_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mis_calendar_hole_drilling_tb`
--

INSERT INTO `mis_calendar_hole_drilling_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, '7 holes', '5.50', 'admin', 'admin', '2013-08-08 14:03:36', '2013-08-09 06:31:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_calendar_page_size_tb`
--

DROP TABLE IF EXISTS `mis_calendar_page_size_tb`;
CREATE TABLE IF NOT EXISTS `mis_calendar_page_size_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  `virtual_price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mis_calendar_page_size_tb`
--

INSERT INTO `mis_calendar_page_size_tb` (`id`, `name`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`, `virtual_price`) VALUES
(1, 'test data', 'admin', 'admin', '2013-08-06 00:00:00', '2013-08-09 06:31:48', 1, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `mis_calendar_pages_tb`
--

DROP TABLE IF EXISTS `mis_calendar_pages_tb`;
CREATE TABLE IF NOT EXISTS `mis_calendar_pages_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mis_calendar_pages_tb`
--

INSERT INTO `mis_calendar_pages_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(3, '60 leaves', '3.00', 'admin', 'admin', '2013-08-07 12:33:38', '2013-08-07 04:33:38', 1),
(4, 'Extended Pages', '0.50', 'admin', 'admin', '2013-08-08 14:12:46', '2013-08-08 06:14:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_calendar_paper_inside_pages_tb`
--

DROP TABLE IF EXISTS `mis_calendar_paper_inside_pages_tb`;
CREATE TABLE IF NOT EXISTS `mis_calendar_paper_inside_pages_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mis_calendar_paper_inside_pages_tb`
--

INSERT INTO `mis_calendar_paper_inside_pages_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, 'Carton type', '8.50', 'admin', 'admin', '2013-08-06 00:00:00', '2013-08-09 06:32:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_calendar_type_tb`
--

DROP TABLE IF EXISTS `mis_calendar_type_tb`;
CREATE TABLE IF NOT EXISTS `mis_calendar_type_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `virtual_price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mis_calendar_type_tb`
--

INSERT INTO `mis_calendar_type_tb` (`id`, `name`, `virtual_price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, 'test data', '100.00', 'admin', NULL, '2013-08-06 00:00:00', '2013-08-06 15:58:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mis_image_tb`
--

DROP TABLE IF EXISTS `mis_image_tb`;
CREATE TABLE IF NOT EXISTS `mis_image_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `full_path` varchar(255) DEFAULT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `thumb_url` varchar(255) DEFAULT NULL,
  `raw_name` varchar(255) DEFAULT NULL,
  `orig_name` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `file_ext` varchar(50) DEFAULT NULL,
  `file_size` decimal(10,0) DEFAULT NULL,
  `is_image` tinyint(1) DEFAULT NULL,
  `image_width` int(11) DEFAULT NULL,
  `image_height` int(11) DEFAULT NULL,
  `image_type` varchar(255) DEFAULT NULL,
  `image_size_str` text,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mis_image_tb`
--

INSERT INTO `mis_image_tb` (`id`, `file_name`, `file_type`, `file_path`, `full_path`, `file_url`, `thumb_url`, `raw_name`, `orig_name`, `client_name`, `file_ext`, `file_size`, `is_image`, `image_width`, `image_height`, `image_type`, `image_size_str`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, 'Hydrangeas2.jpg', 'image/jpeg', 'C:/wamp/www/PrintingPress/uploads/', 'C:/wamp/www/PrintingPress/uploads/Hydrangeas2.jpg', 'http://localhost/PrintingPress/uploads/Hydrangeas2.jpg', 'http://localhost/PrintingPress/uploads/thumbs/Hydrangeas2.jpg', 'Hydrangeas2', 'Hydrangeas.jpg', 'Hydrangeas.jpg', '.jpg', '581', 1, 1024, 768, 'jpeg', 'width="1024" height="768"', 'admin', NULL, '2013-08-09 16:22:53', '2013-08-09 08:22:53', 1),
(2, 'Hydrangeas.jpg', 'image/jpeg', 'C:/wamp/www/PrintingPress/uploads/', 'C:/wamp/www/PrintingPress/uploads/Hydrangeas.jpg', 'http://localhost/PrintingPress/uploads/Hydrangeas.jpg', 'http://localhost/PrintingPress/uploads/thumbs/Hydrangeas.jpg', 'Hydrangeas', 'Hydrangeas.jpg', 'Hydrangeas.jpg', '.jpg', '581', 1, 1024, 768, 'jpeg', 'width="1024" height="768"', 'admin', NULL, '2013-08-09 16:24:35', '2013-08-09 08:24:35', 1),
(3, 'Hydrangeas1.jpg', 'image/jpeg', 'C:/wamp/www/PrintingPress/uploads/', 'C:/wamp/www/PrintingPress/uploads/Hydrangeas1.jpg', 'http://localhost/PrintingPress/uploads/Hydrangeas1.jpg', 'http://localhost/PrintingPress/uploads/thumbs/Hydrangeas1.jpg', 'Hydrangeas1', 'Hydrangeas.jpg', 'Hydrangeas.jpg', '.jpg', '581', 1, 1024, 768, 'jpeg', 'width="1024" height="768"', 'admin', NULL, '2013-08-09 16:28:08', '2013-08-09 08:28:08', 1),
(4, 'Koala.jpg', 'image/jpeg', 'C:/wamp/www/PrintingPress/uploads/', 'C:/wamp/www/PrintingPress/uploads/Koala.jpg', 'http://localhost/PrintingPress/uploads/Koala.jpg', 'http://localhost/PrintingPress/uploads/thumbs/Koala.jpg', 'Koala', 'Koala.jpg', 'Koala.jpg', '.jpg', '763', 1, 1024, 768, 'jpeg', 'width="1024" height="768"', 'admin', NULL, '2013-08-09 16:32:31', '2013-08-09 08:32:31', 1),
(5, 'Lighthouse.jpg', 'image/jpeg', 'C:/wamp/www/PrintingPress/uploads/', 'C:/wamp/www/PrintingPress/uploads/Lighthouse.jpg', 'http://localhost/PrintingPress/uploads/Lighthouse.jpg', 'http://localhost/PrintingPress/uploads/thumbs/Lighthouse.jpg', 'Lighthouse', 'Lighthouse.jpg', 'Lighthouse.jpg', '.jpg', '548', 1, 1024, 768, 'jpeg', 'width="1024" height="768"', 'sean', NULL, '2013-08-09 18:48:04', '2013-08-09 10:48:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_brochure_tb`
--

DROP TABLE IF EXISTS `product_brochure_tb`;
CREATE TABLE IF NOT EXISTS `product_brochure_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cashiering_cart_id` int(11) DEFAULT NULL,
  `mis_image_id` int(11) DEFAULT NULL,
  `mis_brochure_size_id` int(11) DEFAULT NULL,
  `mis_brochure_paper_type_id` int(11) DEFAULT NULL,
  `mis_brochure_folding_tb` int(11) DEFAULT NULL,
  `mis_brochure_printed_side_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_calendar_tb`
--

DROP TABLE IF EXISTS `product_calendar_tb`;
CREATE TABLE IF NOT EXISTS `product_calendar_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cashiering_cart_id` int(11) DEFAULT NULL,
  `mis_image_id` int(11) DEFAULT NULL,
  `mis_calendar_page_size_id` int(11) DEFAULT NULL,
  `mis_calendar_paper_inside_pages_id` int(11) DEFAULT NULL,
  `mis_calendar_cover_paper_id` int(11) DEFAULT NULL,
  `mis_calendar_pages_id` int(11) DEFAULT NULL,
  `mis_calendar_binding_id` int(11) DEFAULT NULL,
  `mis_calendar_binding_placement_id` int(11) DEFAULT NULL,
  `mis_calendar_hole_drilling_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `product_calendar_tb`
--

INSERT INTO `product_calendar_tb` (`id`, `cashiering_cart_id`, `mis_image_id`, `mis_calendar_page_size_id`, `mis_calendar_paper_inside_pages_id`, `mis_calendar_cover_paper_id`, `mis_calendar_pages_id`, `mis_calendar_binding_id`, `mis_calendar_binding_placement_id`, `mis_calendar_hole_drilling_id`, `quantity`, `price`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(6, NULL, NULL, 1, 1, 1, 3, 1, 5, 1, 10, '15.00', 'admin', NULL, '2013-08-09 15:58:31', '2013-08-09 07:58:31', 1),
(7, NULL, NULL, 1, 1, 1, 3, 1, 5, 1, 10, '2402.00', 'admin', NULL, '2013-08-09 16:02:48', '2013-08-09 08:02:48', 1),
(8, NULL, NULL, 1, 1, 1, 3, 1, 5, 1, 10, '2402.34', 'admin', NULL, '2013-08-09 16:07:23', '2013-08-09 08:07:23', 1),
(9, NULL, NULL, 1, 1, 1, 3, 1, 5, 1, 10, '2402.34', 'admin', NULL, '2013-08-09 16:09:44', '2013-08-09 08:09:44', 1),
(10, NULL, NULL, 1, 1, 1, 4, 1, 9, 1, 10, '1828.13', 'admin', NULL, '2013-08-09 16:11:14', '2013-08-09 08:11:14', 1),
(11, NULL, NULL, 1, 1, 1, 4, 1, 9, 1, 10, '1828.13', 'admin', NULL, '2013-08-09 16:11:41', '2013-08-09 08:11:41', 1),
(12, NULL, NULL, 1, 1, 1, 4, 1, 9, 1, 10, '1828.13', 'admin', NULL, '2013-08-09 16:12:07', '2013-08-09 08:12:07', 1),
(13, NULL, NULL, 1, 1, 1, 4, 1, 9, 1, 10, '1828.13', 'admin', NULL, '2013-08-09 16:13:37', '2013-08-09 08:13:37', 1),
(14, NULL, NULL, 1, 1, 1, 4, 1, 9, 1, 10, '1828.13', 'admin', NULL, '2013-08-09 16:19:54', '2013-08-09 08:19:54', 1),
(15, NULL, 4, 1, 1, 1, 3, 1, 5, 1, 10, '1537.50', 'admin', 'admin', '2013-08-09 16:32:24', '2013-08-09 08:32:31', 1),
(16, NULL, NULL, 1, 1, 1, 3, 1, 5, 1, 10, '1537.50', 'admin', NULL, '2013-08-09 18:32:21', '2013-08-09 10:32:21', 1),
(17, NULL, NULL, 1, 1, 1, 3, 1, 5, 1, 10, '1537.50', 'admin', NULL, '2013-08-09 18:32:53', '2013-08-09 10:32:53', 1),
(18, NULL, NULL, 1, 1, 1, 3, 1, 5, 1, 10, '1537.50', 'admin', NULL, '2013-08-09 18:37:09', '2013-08-09 10:37:09', 1),
(19, 6, NULL, 1, 1, 1, 3, 1, 5, 1, 10, '1537.50', 'admin', NULL, '2013-08-09 18:44:15', '2013-08-09 10:44:15', 1),
(20, 6, 5, 1, 1, 1, 3, 1, 5, 1, 10, '3459.38', 'sean', 'sean', '2013-08-09 18:47:18', '2013-08-09 10:48:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `default` tinyint(2) NOT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `default`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(1, 'admin', 0, NULL, NULL, NULL, NULL, 1),
(2, 'user', 1, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

DROP TABLE IF EXISTS `user_autologin`;
CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `firstname` varchar(255) COLLATE utf8_bin NOT NULL,
  `middlename` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_bin NOT NULL,
  `bdate` date DEFAULT NULL,
  `cashiering_cart_id` int(11) NOT NULL,
  `forum_post_id` int(11) NOT NULL,
  `gender` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `mis_image_id` int(11) DEFAULT NULL,
  `created_by` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `updated_by` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`, `address`, `firstname`, `middlename`, `lastname`, `bdate`, `cashiering_cart_id`, `forum_post_id`, `gender`, `mis_image_id`, `created_by`, `updated_by`, `created_date`, `updated_date`, `enabled`) VALUES
(9, 26, NULL, NULL, 'sfasfsa', 'asf', '', 'sfasfas', NULL, 6, 0, '1', NULL, 'asf', NULL, '2013-08-09 17:56:39', '2013-08-09 09:56:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userprofile_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `role_id` int(11) NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=27 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userprofile_id`, `username`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(24, 0, 'seanadmin', '$2a$08$VVQ111HEgie1yN//kcIixOrF2b2PFRdViTJQb3HJGtWAX4iWW5QjS', 'email_ni_sean@yahoo.com', 1, 1, 0, NULL, NULL, NULL, NULL, 'fb4f943c6b724235c68b218a8e68116c', '127.0.0.1', '0000-00-00 00:00:00', '2013-08-09 17:44:09', '2013-08-09 17:49:13'),
(25, 9, 'sean', '$2a$08$iP6eFhMQntm8jkgXka7GLOFMtq7bP1caAmT7st8XVstj/GLHQmujG', 'xbabyxlookxatme@yahoo.com', 2, 1, 0, NULL, NULL, NULL, NULL, '58254c6a2b7dc74a87f18f2e0640f16a', '127.0.0.1', '2013-08-09 17:57:39', '2013-08-09 17:49:58', '2013-08-09 18:16:20'),
(26, 0, 'abigail', '$2a$08$EjBOisz2mCovj1a.vACaf.tRCaq19U75dPW3JYgpiFCwIsGv5fIOi', 'abi_gail_009@hotmail.com', 2, 1, 0, NULL, NULL, NULL, NULL, '911d57826c9d4713c5bc694abc4678f0', '127.0.0.1', '0000-00-00 00:00:00', '2013-08-09 17:56:39', '2013-08-09 17:57:25');
