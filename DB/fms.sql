-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2012 at 10:11 AM
-- Server version: 5.1.63
-- PHP Version: 5.3.6-13ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_type`
--

CREATE TABLE IF NOT EXISTS `client_type` (
  `type_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(200) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `client_type`
--

INSERT INTO `client_type` (`type_id`, `type_name`) VALUES
(1, 'Supplier'),
(2, 'Buyer'),
(3, 'Sponsor');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `quantity` int(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `quantity`, `description`, `create_date`, `update_date`) VALUES
(1, ' T-shirt ', 80, 'good', '2012-10-12', '0000-00-00'),
(2, 'Punjabi', 480, 'good', '2012-10-11', '0000-00-00'),
(3, 'Jeans', 99300, 'made in japan', '2012-10-11', '0000-00-00'),
(4, 'trouser', 9900, 'Good', '2012-11-06', '0000-00-00'),
(5, 'Blazer', 45, 'Good', '2012-11-20', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `product_line`
--

CREATE TABLE IF NOT EXISTS `product_line` (
  `product_line_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `receive_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  PRIMARY KEY (`product_line_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `product_line`
--

INSERT INTO `product_line` (`product_line_id`, `product_id`, `quantity`, `status`, `receive_date`, `delivery_date`) VALUES
(1, 2, 100, '2', '2012-10-11', '0000-00-00'),
(2, 2, 100, '3', '2012-10-11', '0000-00-00'),
(3, 2, 100, '3', '2012-10-11', '0000-00-00'),
(4, 2, 10, '3', '2012-10-11', '0000-00-00'),
(5, 2, 10, '3', '2012-10-11', '2012-10-10'),
(6, 2, 10, '3', '2012-10-11', '2012-10-10'),
(7, 2, 50, '2', '2012-10-11', '2012-10-10'),
(8, 2, 50, '2', '2012-10-11', '2012-10-11'),
(9, 1, 10, '4', '2012-10-11', '0000-00-00'),
(10, 2, 10, '4', '2012-10-11', '0000-00-00'),
(11, 2, 10, '2', '2012-10-11', '0000-00-00'),
(12, 2, 10, '3', '2012-10-11', '0000-00-00'),
(13, 2, 10, '2', '2012-10-11', '0000-00-00'),
(14, 2, 50, '2', '2012-10-11', '0000-00-00'),
(15, 2, 50, '4', '2012-10-11', '0000-00-00'),
(16, 2, 50, '2', '2012-10-11', '0000-00-00'),
(17, 2, 50, '4', '2012-10-11', '0000-00-00'),
(18, 2, 10, '1', '2012-10-11', '0000-00-00'),
(19, 2, 10, '1', '2012-10-11', '0000-00-00'),
(20, 2, 10, '2', '2012-10-11', '0000-00-00'),
(21, 2, 10, '1', '2012-10-11', '0000-00-00'),
(22, 2, 10, '3', '2012-10-11', '0000-00-00'),
(23, 2, 10, '1', '2012-10-11', '0000-00-00'),
(24, 2, 10, '4', '2012-10-11', '0000-00-00'),
(25, 2, 10, '2', '2012-10-11', '0000-00-00'),
(26, 2, 10, '2', '2012-10-11', '0000-00-00'),
(27, 2, 10, '1', '2012-10-11', '0000-00-00'),
(28, 3, 100, '1', '2012-10-11', '2012-10-12'),
(29, 3, 100, '1', '2012-10-11', '2012-10-12'),
(30, 3, 100, '1', '2012-10-11', '2012-10-12'),
(31, 3, 100, '1', '2012-10-11', '2012-10-12'),
(32, 2, 20, '1', '2012-10-11', '2012-10-12'),
(33, 3, 100, '1', '2012-10-11', '2012-10-12'),
(34, 3, 100, '2', '2012-10-11', '2012-10-12'),
(35, 3, 100, '1', '2012-10-11', '2012-10-12'),
(36, 3, 100, '1', '2012-10-11', '2012-10-12'),
(37, 2, 10, '2', '2012-10-11', '2012-10-12'),
(38, 2, 10, '1', '2012-10-20', '2012-10-12'),
(39, 4, 100, '1', '2012-11-06', '2012-10-12'),
(40, 5, 5, '1', '2012-11-20', '2012-10-12'),
(41, 1, 10, '2', '2012-11-27', '2012-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `product_raw_inventory`
--

CREATE TABLE IF NOT EXISTS `product_raw_inventory` (
  `product_raw_inventory_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(200) NOT NULL,
  `raw_inventory_id` varchar(200) NOT NULL,
  `inventory_quantity` int(50) NOT NULL,
  `delivery_date` date NOT NULL,
  PRIMARY KEY (`product_raw_inventory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `product_raw_inventory`
--

INSERT INTO `product_raw_inventory` (`product_raw_inventory_id`, `product_id`, `raw_inventory_id`, `inventory_quantity`, `delivery_date`) VALUES
(1, '2', '2 ', 10, '0000-00-00'),
(2, '2', '5 ', 100, '0000-00-00'),
(3, '3', '6 ', 100, '2012-10-12'),
(4, '3', '6 ', 100, '2012-10-12'),
(5, '3', '5 ', 100, '2012-10-12'),
(6, '3', '5 ', 10, '2012-10-12'),
(7, '2', '6 ', 10, '2012-10-12'),
(8, '2', '9 ', 100, '2012-10-12'),
(9, '4', '3 ', 1, '2012-10-12'),
(10, '4', '10 ', 1, '2012-10-12'),
(11, '5', '11 ', 10, '2012-10-12'),
(12, '1', '3 ', 1, '2012-10-12'),
(13, '1', '4 ', 1, '2012-10-12'),
(14, '1', '5 ', 1, '2012-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `raw_inventory`
--

CREATE TABLE IF NOT EXISTS `raw_inventory` (
  `raw_inventory_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `raw_material_id` tinyint(4) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(200) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL,
  `batch_no` varchar(200) NOT NULL,
  PRIMARY KEY (`raw_inventory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `raw_inventory`
--

INSERT INTO `raw_inventory` (`raw_inventory_id`, `raw_material_id`, `quantity`, `price`, `create_date`, `update_date`, `batch_no`) VALUES
(1, 0, 0, '0', '2012-10-11', '0000-00-00', '0'),
(3, 7, 8, '100 ', '2012-10-11', '0000-00-00', 'b'),
(4, 10, 4, '500', '2012-10-11', '0000-00-00', 'c'),
(5, 6, 4689, '100', '2012-10-11', '0000-00-00', 'b-31'),
(6, 2, 9790, '520', '2012-10-11', '0000-00-00', 'A-32'),
(7, 4, 50000, '450', '2012-10-11', '0000-00-00', 'A-56'),
(9, 1, 9900, '220', '2012-10-14', '0000-00-00', 'a'),
(10, 12, 4999, '1000', '2012-11-06', '0000-00-00', 'A-21'),
(11, 8, 99990, '10', '2012-11-06', '0000-00-00', 'C-22'),
(12, 13, 100, '150', '2012-11-20', '0000-00-00', 'T-568');

-- --------------------------------------------------------

--
-- Table structure for table `raw_materials`
--

CREATE TABLE IF NOT EXISTS `raw_materials` (
  `raw_material_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  PRIMARY KEY (`raw_material_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `raw_materials`
--

INSERT INTO `raw_materials` (`raw_material_id`, `name`, `code`) VALUES
(1, 'jeans pant', '1'),
(2, 'Shirt', '2'),
(3, 'T-shirt', '3'),
(4, 'ladies_pant', '4'),
(5, 'ladies_tops', '5'),
(6, 'socks', '6'),
(7, 'button', '7'),
(8, 'cotton', '8'),
(9, 'knit', '9'),
(10, 'cap', '10'),
(11, 'lungi', 'L1'),
(12, 'Sewing Machine', 'SM1'),
(13, 'tie', 'T-1'),
(14, 'tatto', 'T-2'),
(15, 'stone', 'J-1');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `salary_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `employee_id` int(50) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `advance_paid` varchar(200) NOT NULL,
  `due_salary` varchar(200) NOT NULL,
  `full_paid` varchar(200) NOT NULL,
  `paid_month` varchar(200) NOT NULL,
  PRIMARY KEY (`salary_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `employee_id`, `salary`, `advance_paid`, `due_salary`, `full_paid`, `paid_month`) VALUES
(3, 3, '70,000', '10,000', '60,000', 'no', 'September'),
(4, 4, '50,000', '0', '0', '', ''),
(6, 6, '30,000', '56', '897', 'yes', 'septomber'),
(7, 7, '60564', '0', '0', 'yes', 'Octorber'),
(8, 8, '10,000', '0', '0', '', ''),
(9, 9, '1,00,000', '20,000', '80,000', 'no', 'Octorber'),
(10, 10, '10,000', '0', '0', 'yes', 'Octorber'),
(11, 5, '50,000', '6789', '0', 'no', 'September'),
(14, 11, '1,00,000', '60,000', '40,000', 'NO', 'September'),
(17, 1, '1,00,000', '60,000', '20,000', 'NO', 'September'),
(18, 2, '1,00,000', '', '', '', ''),
(19, 13, '10,000', '', '', '', ''),
(22, 14, '10,000', '', '', '', ''),
(26, 12, '50,000', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `salary_history`
--

CREATE TABLE IF NOT EXISTS `salary_history` (
  `history_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `employee_id` tinyint(4) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `advance_paid` varchar(200) NOT NULL,
  `due_salary` varchar(200) NOT NULL,
  `full_paid` varchar(200) NOT NULL,
  `paid_month` varchar(200) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=ARCHIVE  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `salary_history`
--

INSERT INTO `salary_history` (`history_id`, `employee_id`, `salary`, `advance_paid`, `due_salary`, `full_paid`, `paid_month`) VALUES
(32, 1, '1,00,000', '60,000', '20,000', 'NO', 'September'),
(33, 1, '1,00,000', '60,000', '20,000', 'NO', 'September'),
(34, 1, '1,00,000', '60,000', '20,000', 'NO', 'September'),
(35, 1, '1,00,000', '60,000', '20,000', 'NO', 'September'),
(36, 1, '1,00,000', '60,000', '20,000', 'NO', 'September'),
(37, 1, '1,00,000', '60,000', '20,000', 'NO', 'September'),
(38, 1, '1,00,000', '60,000', '20,000', 'NO', 'September'),
(39, 1, '1,00,000', '60,000', '20,000', 'NO', 'September r'),
(40, 1, '1,00,000', '60,000', '20,000', 'NO', 'September'),
(41, 1, '1,00,000', '60,000', '20,000', 'NO', 'September'),
(42, 1, '1,00,0001', '60,000', '20,000', 'NO', 'September'),
(43, 1, '1,00,000', '60,000', '20,000', 'NO', 'September'),
(44, 11, '1,00,000', '60,000', '40,000', 'NO', 'September'),
(45, 11, '1,00,000', '60,000', '40,000', 'NO', 'September'),
(46, 1, '1,00,000 1', '60,000', '20,000', 'NO', 'September'),
(47, 1, '1,00,000 ', '60,000', '20,000', 'NO', 'September'),
(48, 1, '1,00,000 1', '60,000', '20,000', 'NO', 'September'),
(49, 1, '1,00,000', '60,000', '20,000', 'NO', 'September');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Product Line'),
(2, 'Quality Control'),
(3, 'Finished Product'),
(4, 'Wastage');

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE IF NOT EXISTS `system_users` (
  `employee_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(254) DEFAULT NULL,
  `joining_date` date NOT NULL,
  `password` varchar(160) DEFAULT NULL,
  `salt` varchar(160) DEFAULT NULL,
  `user_role_id` int(20) DEFAULT NULL,
  `last_login` datetime DEFAULT '0000-00-00 00:00:00',
  `last_login_ip` varchar(64) DEFAULT NULL,
  `reset_request_code` varchar(128) DEFAULT NULL,
  `reset_request_time` datetime DEFAULT NULL,
  `reset_request_ip` varchar(64) DEFAULT NULL,
  `new_email` varchar(254) DEFAULT NULL,
  `new_password` varchar(160) DEFAULT NULL,
  `verification_status` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`employee_id`, `first_name`, `last_name`, `email`, `joining_date`, `password`, `salt`, `user_role_id`, `last_login`, `last_login_ip`, `reset_request_code`, `reset_request_time`, `reset_request_ip`, `new_email`, `new_password`, `verification_status`, `status`) VALUES
(1, 'rahim', 'r', 'admin@admin.com', '2012-10-02', '8e666f12a66c17a952a1d5e273428e478e02d943', '4f6cdddc4979b8.51434094', 1, '2012-12-12 10:03:27', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, 1, 1),
(2, 'karim', 'k', 'a@admin.com', '2012-10-02', '8d56dba457a140375751e9832bd9cec3479d91a8', '506d33009174d0.53867441', 1, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(3, 'samim', 's', 'aa@admin.com', '2012-10-02', '9ef60f8b0b46c3cb7611e6973135de6f13ec6eed', '506d331c60f983.42483169', 2, '2012-12-11 17:09:11', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, 1, 1),
(4, 'saimum', 's', '1aa@admin.com', '2012-10-02', '5d79d38acad04959d5940d6a0b3c2e78ad98b889', '507686f8682004.55370488', 3, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(5, 'bahar', 'b', '1aaa@admin.com', '2012-10-03', '824340e4d932e8bf22edb3cff65160f845bc9487', '507687c0cc09b9.69478246', 3, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(6, 'monzu', 'm', '12aa@admin.com', '2012-10-05', '7087e786667123cdaf4d82c50937140d0fe915b8', '50769366ef9487.78172234', 4, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(7, 'harun', 'h', '121aa@admin.com', '2012-10-07', '488501b26db02a25f04e827cc6aaed38b34fda48', '507693dbb4d697.29298607', 2, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(8, 'Rahat', 'bahar', '122aa@admin.com', '2012-10-02', 'c79d75dd92201b3203460875e99bccf83eeb8ebb', '507d361e3e8de8.91238619', 5, '2012-10-16 16:26:37', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, 1, 1),
(9, 'Tasin', 'T', 'tasin@admin.com', '2012-10-02', 'd657ff5114485af4df93248ff6219ac2e84091f9', '507d38ae9a1610.51330759', 1, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(10, 'sobuj', 's', 'sobuj@gmail.com', '2012-10-10', 'cc651802af90a76928c9b0195f92ccd162dc0202', '50829ffea40005.49218063', 5, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(11, 'zico', 'Z', 'zico@gmail.com', '2012-10-10', 'fad084b0b558b5eabcfe2ba979f25df07400ec80', '50858a77b94f12.64365996', 1, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(12, 'Rashed', 'R', 'rashed@admin.com', '2012-10-10', '88e0b0cbbf7176086b32debe0ca2ff840b7293c0', '50989a350186a9.71164164', 3, '2012-12-11 18:49:08', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, 1, 1),
(13, 'faruk', 'F', 'faruk@gmail.com', '2012-10-10', 'e281ea48bb9bec1603972b06dd62314336227465', '50ab9f851a93b5.35515276', 5, '2012-12-12 09:19:41', '127.0.0.1', NULL, NULL, NULL, NULL, NULL, 1, 1),
(14, 'pulok', 'P', 'pulok@gmail.com', '2012-10-12', '1604a552699f687cc1f1a5be964eda89b019ffd6', '50c84bf0eefd18.84526111', 5, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `type_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type_name`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Cashier'),
(4, 'Superviser'),
(5, 'Worker');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(4) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `joining_date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `type_id`, `first_name`, `last_name`, `user_name`, `email_address`, `password`, `designation`, `joining_date`) VALUES
(1, 1, 'Rahat', 'R', 'Bahar', '1aa@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'Manager', '2012-10-10'),
(2, 3, ' Harun  ', '  H  ', 'Rashid', '1aab@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'Manager', '2012-10-10'),
(3, 2, 'faruk ', 'F ', 'F-rk ', 'faruk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Manager', '2012-10-12'),
(4, 1, 'Hasan', 'H', 'rakeybul', 'hasan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'std', '2012-10-12'),
(6, 1, 'ronok', 'R', 'raihan', 'ronok@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'std', '2012-05-10'),
(7, 1, 'raihan', 'R', 'taher', 'raihan@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'std', '2012-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_map`
--

CREATE TABLE IF NOT EXISTS `user_access_map` (
  `user_role_id` int(10) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `permission` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_role_id`,`controller`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_map`
--

INSERT INTO `user_access_map` (`user_role_id`, `controller`, `permission`) VALUES
(1, 'admin/welcome', '00001'),
(1, 'main_controller', '11111'),
(1, 'product_controller', '11111'),
(1, 'product_line_controller', '11111'),
(1, 'raw_inventory_controller', '11111'),
(1, 'salary_controller', '11111'),
(2, 'main_controller', '00001'),
(4, 'main_controller', '10001'),
(4, 'salary_controller', '10011'),
(5, 'main_controller', '00001'),
(5, 'raw_inventory_controller', '00001'),
(5, 'salary_controller', '00001');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_autologin`
--

INSERT INTO `user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('13eb6f750d42cca668bd982b74a31da3', 1, 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:15.0) Gecko/20100101 Firefox/15.0.1', '127.0.0.1', '2012-10-22 05:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) DEFAULT NULL,
  `default_access` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role_name`, `default_access`) VALUES
(1, 'Admin', '11111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
