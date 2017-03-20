-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2012 at 03:38 PM
-- Server version: 5.1.61
-- PHP Version: 5.3.3-1ubuntu9.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `factory_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `address` varchar(254) NOT NULL,
  `joinning_date` date NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `contact_no` int(25) NOT NULL,
  `photo` varchar(254) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `name`, `designation`, `address`, `joinning_date`, `date_of_birth`, `contact_no`, `photo`) VALUES
(1, 'abfgdf', 'bb', '', '2012-07-17', '2012-07-17 15:30:42', 1917147677, ''),
(2, 'rahtayyy', 'bb', 'barisal', '2012-07-17', '2012-07-17 15:33:46', 1917147677, ''),
(3, 'rahat', 'polti mara', 'kishorgong', '2012-07-17', '2012-07-17 15:34:45', 181465784, ''),
(4, 'rasel', 'dui number', 'bsl', '2012-07-17', '2012-07-17 15:38:15', 420, ''),
(5, 'rahat', 'ddd', 'barisal', '2012-07-17', '2012-07-17 15:58:01', 1917147677, ''),
(6, 'hgfh', 'ghfg', 'hfgh', '2012-07-23', '2012-07-23 15:17:30', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `create_date` date NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `quantity`, `description`, `create_date`, `update_date`) VALUES
(1, 'T-Shart', 200, 'fdfsdf', '0000-00-00', '2012-07-30 14:59:16'),
(2, 'Pant', 435, 'Made in Bangladesh', '2012-04-16', '2012-04-16 05:51:44'),
(9, 'pharma', 55, 'test', '2012-04-17', NULL),
(10, 'pen', 23, 'hsjdhf', '2012-07-31', '2012-07-31 12:00:31'),
(11, 'panjabi', 20, 'full', '2012-08-01', '2012-08-01 10:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_line`
--

CREATE TABLE IF NOT EXISTS `product_line` (
  `product_line_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(20) CHARACTER SET latin1 NOT NULL,
  `status` tinyint(4) NOT NULL,
  `receive_date` date NOT NULL,
  `dalivary_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_line_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=155 ;

--
-- Dumping data for table `product_line`
--

INSERT INTO `product_line` (`product_line_id`, `product_id`, `quantity`, `status`, `receive_date`, `dalivary_date`) VALUES
(1, 1, '23', 3, '0000-00-00', '2012-07-29 13:37:38'),
(2, 1, '2', 3, '0000-00-00', '2012-07-29 13:39:42'),
(4, 1, '250', 2, '0000-00-00', '2012-08-01 14:48:50'),
(5, 1, '2', 3, '0000-00-00', '2012-07-29 13:39:47'),
(8, 1, '10', 1, '2012-04-10', '2012-07-29 13:40:16'),
(9, 1, '20', 1, '2012-04-10', '2012-07-29 13:40:48'),
(10, 2, '100', 3, '2012-04-10', '2012-04-16 13:49:23'),
(15, 2, '40', 1, '2012-04-11', NULL),
(16, 6, '4', 1, '2012-04-11', '2012-04-17 04:41:02'),
(17, 1, '45', 3, '2012-04-11', '2012-07-29 13:41:12'),
(18, 1, '2', 3, '2012-04-11', '2012-07-31 14:09:43'),
(19, 1, '2', 3, '2012-04-11', '2012-07-31 14:09:47'),
(20, 1, '2', 3, '2012-04-11', '2012-07-31 14:09:50'),
(21, 1, '8', 3, '2012-04-11', '2012-07-31 14:58:24'),
(22, 1, '5', 2, '2012-04-11', '2012-04-19 12:07:20'),
(23, 1, '5', 2, '2012-04-11', '2012-08-01 10:25:55'),
(24, 1, '2', 2, '2012-04-11', '2012-04-19 12:09:07'),
(25, 1, '2540', 1, '2012-04-11', '2012-07-31 14:31:20'),
(26, 1, '10', 2, '2012-04-11', '2012-04-17 05:06:18'),
(27, 7, '20', 3, '2012-04-11', '2012-04-16 13:19:56'),
(28, 1, '50', 2, '2012-04-11', '2012-07-31 15:00:39'),
(29, 1, '200', 2, '2012-04-11', '2012-04-19 12:13:58'),
(30, 1, '10', 2, '2012-04-11', '2012-08-01 10:25:45'),
(31, 1, '20', 1, '2012-04-11', '2012-07-30 10:45:33'),
(32, 6, '10', 1, '2012-04-12', NULL),
(33, 2, '50', 1, '2012-04-12', NULL),
(34, 5, '10', 1, '2012-04-12', NULL),
(35, 3, '10', 1, '2012-04-12', NULL),
(36, 1, '10', 2, '2012-04-12', '2012-08-01 10:25:49'),
(37, 1, '10', 3, '2012-04-12', '2012-04-16 13:17:56'),
(38, 1, '10', 2, '2012-04-12', '2012-08-01 14:31:02'),
(39, 1, '10', 2, '2012-04-12', '2012-04-23 05:28:29'),
(40, 1, '40', 1, '2012-04-12', '2012-07-31 14:55:56'),
(41, 1, '10', 2, '2012-04-15', '2012-05-03 11:22:39'),
(42, 5, '10', 1, '2012-04-15', NULL),
(43, 5, '10', 1, '2012-04-15', NULL),
(44, 6, '10', 1, '2012-04-15', NULL),
(45, 6, '10', 1, '2012-04-15', NULL),
(46, 2, '5', 1, '2012-04-15', NULL),
(47, 3, '10', 1, '2012-04-15', NULL),
(48, 1, '10', 3, '2012-04-15', '2012-04-16 13:21:45'),
(49, 1, '2', 2, '2012-04-15', '2012-07-23 15:20:27'),
(50, 1, '10', 2, '2012-04-15', '2012-04-25 09:42:37'),
(51, 1, '10', 1, '2012-04-15', NULL),
(52, 6, '2', 1, '2012-04-15', NULL),
(53, 6, '5', 1, '2012-04-15', NULL),
(54, 6, '13', 1, '2012-04-15', NULL),
(55, 6, '10', 1, '2012-04-15', NULL),
(56, 6, '10', 1, '2012-04-15', NULL),
(57, 6, '10', 1, '2012-04-15', '2012-04-16 13:50:55'),
(58, 6, '5', 1, '2012-04-15', NULL),
(59, 6, '10', 1, '2012-04-15', NULL),
(60, 6, '5', 1, '2012-04-15', NULL),
(61, 6, '5', 1, '2012-04-15', NULL),
(62, 6, '5', 1, '2012-04-15', NULL),
(63, 1, '5', 2, '2012-04-15', '2012-04-19 12:09:35'),
(64, 6, '5', 1, '2012-04-15', NULL),
(65, 6, '5', 1, '2012-04-15', NULL),
(66, 6, '5', 1, '2012-04-15', NULL),
(67, 7, '10', 3, '2012-04-15', '2012-04-16 13:21:30'),
(68, 1, '1', 3, '2012-04-15', '2012-04-16 13:24:24'),
(69, 6, '1', 3, '2012-04-15', '2012-04-16 13:25:00'),
(70, 6, '1', 1, '2012-04-15', NULL),
(71, 1, '1', 3, '2012-04-15', '2012-04-16 13:24:29'),
(72, 1, '1', 3, '2012-04-15', '2012-04-16 13:24:33'),
(73, 1, '10', 3, '2012-04-16', '2012-04-16 13:18:21'),
(74, 1, '10', 3, '2012-04-16', '2012-04-16 13:53:26'),
(75, 1, '2', 3, '2012-04-16', '2012-04-16 13:32:07'),
(76, 7, '10', 3, '2012-04-16', '2012-04-16 13:22:14'),
(77, 3, '10', 1, '2012-04-16', NULL),
(78, 3, '1', 1, '2012-04-16', NULL),
(79, 1, '1', 3, '2012-04-16', '2012-04-16 13:24:37'),
(80, 1, '1', 3, '2012-04-16', '2012-04-16 13:24:43'),
(81, 1, '10', 3, '2012-04-16', '2012-04-16 13:33:04'),
(82, 2, '10', 1, '2012-04-16', NULL),
(83, 1, '1', 3, '2012-04-16', '2012-04-16 13:24:48'),
(84, 1, '1', 3, '2012-04-16', '2012-04-16 13:25:14'),
(85, 1, '10', 3, '2012-04-16', '2012-04-16 13:47:15'),
(86, 1, '1', 2, '2012-04-16', '2012-04-17 04:28:15'),
(87, 1, '1', 3, '2012-04-16', '2012-04-16 13:18:13'),
(88, 1, '10', 2, '2012-04-16', '2012-04-17 04:40:03'),
(89, 1, '1', 2, '2012-04-16', '2012-04-25 08:35:05'),
(90, 1, '1', 1, '2012-04-16', NULL),
(91, 1, '1', 1, '2012-04-16', NULL),
(92, 1, '10', 1, '2012-04-16', NULL),
(93, 1, '10', 2, '2012-04-16', '2012-07-15 11:26:01'),
(94, 1, '10', 1, '2012-04-16', NULL),
(95, 1, '10', 2, '2012-04-16', '2012-07-15 11:26:09'),
(96, 6, '1', 1, '2012-04-16', NULL),
(97, 1, '4', 1, '2012-04-16', NULL),
(98, 1, '1', 3, '2012-04-16', '2012-04-16 13:18:06'),
(99, 1, '1', 1, '2012-04-16', NULL),
(100, 1, '1', 1, '2012-04-16', NULL),
(101, 1, '1', 1, '2012-04-16', NULL),
(102, 1, '10', 1, '2012-04-16', NULL),
(103, 1, '1', 1, '2012-04-16', NULL),
(104, 6, '10', 1, '2012-04-16', NULL),
(105, 6, '50', 1, '2012-04-16', NULL),
(106, 7, '1', 2, '2012-04-16', '2012-04-16 13:19:43'),
(107, 7, '10', 3, '2012-04-16', '2012-04-16 13:16:38'),
(108, 5, '1', 1, '2012-04-16', NULL),
(109, 5, '1', 1, '2012-04-16', NULL),
(110, 1, '1', 1, '2012-04-16', NULL),
(111, 1, '1', 3, '2012-04-16', '2012-04-16 13:30:59'),
(112, 1, '20', 1, '2012-04-16', NULL),
(113, 1, '20', 1, '2012-04-16', NULL),
(114, 1, '20', 1, '2012-04-16', NULL),
(115, 1, '20', 1, '2012-04-16', NULL),
(116, 1, '20', 1, '2012-04-16', NULL),
(117, 1, '20', 1, '2012-04-16', NULL),
(118, 1, '20', 1, '2012-04-16', NULL),
(119, 1, '1', 3, '2012-04-16', '2012-04-16 13:31:07'),
(120, 1, '1', 1, '2012-04-16', NULL),
(121, 1, '1', 1, '2012-04-16', '2012-08-01 10:10:08'),
(122, 1, '1', 1, '2012-04-16', NULL),
(123, 1, '1', 1, '2012-04-16', NULL),
(124, 1, '1', 1, '2012-04-16', NULL),
(125, 1, '1', 1, '2012-04-16', NULL),
(126, 1, '1', 1, '2012-04-16', NULL),
(127, 1, '1', 1, '2012-04-16', NULL),
(128, 1, '1', 1, '2012-04-16', NULL),
(129, 1, '1', 1, '2012-04-16', NULL),
(130, 1, '1', 1, '2012-04-16', NULL),
(131, 6, '10', 1, '2012-04-16', NULL),
(132, 1, '10', 1, '2012-04-16', NULL),
(133, 6, '2', 1, '2012-04-16', NULL),
(134, 6, '10', 1, '2012-04-16', NULL),
(135, 8, '500', 2, '2012-04-17', '2012-04-17 06:14:23'),
(136, 3, '200', 1, '2012-04-17', NULL),
(137, 1, '10', 1, '2012-04-18', NULL),
(138, 1, '10', 1, '2012-04-19', NULL),
(139, 1, '10', 1, '2012-04-19', NULL),
(140, 1, '2', 1, '2012-04-19', NULL),
(141, 1, '1', 1, '2012-04-19', NULL),
(142, 1, '1', 1, '2012-04-19', NULL),
(143, 1, '25', 1, '2012-04-19', NULL),
(144, 3, '14', 2, '2012-04-19', '2012-04-19 11:51:02'),
(145, 1, '20', 1, '2012-04-19', NULL),
(146, 1, '5', 1, '2012-04-19', NULL),
(147, 1, '20', 1, '2012-04-25', NULL),
(148, 1, '10', 1, '2012-07-29', NULL),
(150, 1, '54', 1, '2012-07-29', NULL),
(151, 1, '9', 1, '2012-07-30', NULL),
(152, 10, '5', 2, '2012-07-31', '2012-08-01 10:38:58'),
(153, 10, '2', 1, '2012-07-31', NULL),
(154, 11, '10', 3, '2012-08-01', '2012-08-01 10:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_raw_inventory`
--

CREATE TABLE IF NOT EXISTS `product_raw_inventory` (
  `product_id` int(11) NOT NULL,
  `raw_inventory_id` varchar(4) NOT NULL,
  `inventory_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_raw_inventory`
--

INSERT INTO `product_raw_inventory` (`product_id`, `raw_inventory_id`, `inventory_quantity`) VALUES
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(6, '13', 1),
(6, '25', 36),
(6, '5', 20),
(7, '11', 1),
(7, '3', 20),
(1, '11', 1),
(1, '1', 30),
(1, '13', 40),
(1, '4', 120),
(2, '3', 20),
(2, '8', 20),
(6, '16', 1),
(6, '4', 3),
(3, '1', 20),
(3, '8', 2),
(6, '8', 1),
(6, '3', 4),
(6, '5', 5),
(3, '8', 5),
(3, '25', 5),
(2, '9', 20),
(2, '8', 5),
(6, '9', 5),
(6, '9', 5),
(1, '11', 1),
(1, '11', 1),
(1, '11', 2),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(7, '16', 6),
(1, '1', 7),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(1, '11', 1),
(6, '4', 10),
(6, '4', 6),
(2, '8', 3),
(2, '4', 4),
(2, '4', 6),
(5, '12', 2),
(5, '22', 3),
(3, '12', 22),
(3, '17', 5),
(1, '17 |', 60),
(1, '12 ', 10),
(1, '12 ', 10),
(1, '12 ', 10),
(1, '12 ', 20),
(1, '17 ', 6),
(1, '12 ', 120),
(5, '12 ', 12),
(5, '19 ', 10),
(5, '12 ', 1),
(5, '12 ', 1),
(6, '12 ', 1),
(6, '12 ', 1),
(6, '12 ', 1),
(2, '12 ', 1),
(2, '19 ', 1),
(3, '17 ', 1),
(3, '24 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '19 ', 4),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(6, '12 ', 10),
(6, '17 ', 10),
(6, '12 ', 10),
(6, '17 ', 5),
(6, '17 ', 5),
(6, '17 ', 5),
(6, '17 ', 5),
(6, '17 ', 5),
(6, '22 ', 100),
(6, '12 ', 2),
(6, '12 ', 1),
(6, '17 ', 1),
(6, '17 ', 1),
(1, '12 ', 1),
(6, '12 ', 1),
(6, '17 ', 5),
(6, '17 ', 3),
(7, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(6, '12 ', 1),
(6, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(7, '12 ', 1),
(7, '20 ', 1),
(3, '12 ', 1),
(3, '17 ', 1),
(3, '12 ', 1),
(3, '19 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(2, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '22 ', 1),
(1, '12 ', 1),
(1, '22 ', 1),
(1, '12 ', 1),
(1, '20 ', 1),
(6, '12 ', 1),
(6, '19 ', 1),
(1, '24 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(6, '19 ', 3),
(6, '28 ', 6),
(6, '20 ', 10),
(6, '24 ', 20),
(7, '20 ', 10),
(7, '24 ', 20),
(7, '12 ', 4),
(7, '12 ', 1),
(7, '21 ', 1),
(5, '20 ', 2),
(5, '12 ', 1),
(5, '20 ', 2),
(5, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 2),
(1, '12 ', 2),
(1, '12 ', 2),
(1, '12 ', 1),
(1, '20 ', 3),
(1, '20 ', 3),
(1, '20 ', 3),
(1, '12 ', 1),
(1, '20 ', 3),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '19 ', 1),
(1, '12 ', 1),
(6, '30 ', 12),
(6, '12 ', 10),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(6, '12 ', 1),
(6, '12 ', 10),
(6, '17 ', 3),
(8, '19 ', 300),
(8, '30 ', 30),
(3, '22 ', 400),
(3, '31 ', 30),
(1, '31 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(3, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(1, '20 ', 1),
(1, '12 ', 1),
(1, '12 ', 1),
(10, '20 ', 12),
(10, '19 ', 16),
(10, '22 ', 61),
(10, '26 ', 16),
(11, '20 ', 12),
(11, '20 ', 13);

-- --------------------------------------------------------

--
-- Table structure for table `raw_inventory`
--

CREATE TABLE IF NOT EXISTS `raw_inventory` (
  `raw_inventory_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `raw_material_id` tinyint(4) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `batch_no` varchar(20) NOT NULL,
  PRIMARY KEY (`raw_inventory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `raw_inventory`
--

INSERT INTO `raw_inventory` (`raw_inventory_id`, `raw_material_id`, `quantity`, `price`, `create_date`, `update_date`, `batch_no`) VALUES
(12, 11, 2107, 1000, '2012-03-25 09:08:16', '2012-07-30 14:06:33', '2'),
(17, 8, 42, 55, '2012-03-27 06:35:33', '2012-04-16 09:12:01', '55'),
(19, 9, 182, 500000, '2012-03-28 10:10:49', '2012-07-31 11:59:20', '33'),
(20, 13, 562, 60000, '2012-03-28 10:11:45', '2012-08-01 10:36:51', '6'),
(22, 1, 2439, 23560, '2012-03-28 11:24:02', '2012-07-31 12:00:31', '5500'),
(23, 4, 200, 250, '2012-04-08 12:44:58', '2012-04-23 10:15:29', '01250'),
(26, 25, 2524, 20000, '2012-04-08 12:52:32', '2012-07-31 12:00:31', '032145'),
(27, 0, 0, 0, '2012-04-10 11:27:46', NULL, '0'),
(28, 4, 52, 25400, '2012-04-10 11:28:17', '2012-04-10 11:32:54', '01254'),
(29, 4, 520, 25400, '2012-04-10 11:29:00', NULL, '01254'),
(31, 26, 30, 200, '2012-04-17 05:47:09', '2012-04-17 05:54:09', '0001');

-- --------------------------------------------------------

--
-- Table structure for table `raw_materials`
--

CREATE TABLE IF NOT EXISTS `raw_materials` (
  `raw_material_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `code` varchar(50) NOT NULL,
  PRIMARY KEY (`raw_material_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `raw_materials`
--

INSERT INTO `raw_materials` (`raw_material_id`, `name`, `code`) VALUES
(1, 'abc', '234567g'),
(2, 'abc', '234567g'),
(3, 'cde', '4578888'),
(4, 'abcgty', '234567g'),
(5, 'abcgty', '234567g'),
(6, 'abcgtyccc', '234567g'),
(7, 'abcgtyccc', '234567g'),
(8, 'vcvcv', '123'),
(9, 'qqqq', '1254'),
(10, 'fgfgdfg', '254'),
(11, 'uuu', '444'),
(12, 'fgdfg', '653'),
(13, 'hg', '554'),
(14, 'fgdg', '52'),
(15, 'ghdhgh', '80'),
(16, 'ghdhgh', '80'),
(17, 'ghdhgh', '80'),
(18, '0', '0'),
(19, '0', '0'),
(20, '0', '0'),
(21, 'fgsdf', '66'),
(22, 'fvsf', '558'),
(23, 'gfgsg', '25'),
(24, 'eee', '555'),
(25, 'Coton', '01254'),
(26, 'Button', '012'),
(27, 'fds', '5ghv'),
(28, 'gsdf', '52'),
(29, 'Pen', '0214'),
(30, 'Pen', '0214');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `emplyee_id` int(11) NOT NULL,
  `attendance` int(11) NOT NULL,
  `basic_salary` float NOT NULL,
  `overtime_salary` float NOT NULL,
  `total_salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--


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
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) DEFAULT NULL,
  `password` varchar(160) DEFAULT NULL,
  `salt` varchar(160) DEFAULT NULL,
  `user_role_id` int(10) DEFAULT NULL,
  `last_login` datetime DEFAULT '0000-00-00 00:00:00',
  `last_login_ip` int(11) DEFAULT NULL,
  `reset_request_code` varchar(128) DEFAULT NULL,
  `reset_request_time` datetime DEFAULT NULL,
  `reset_request_ip` int(11) DEFAULT NULL,
  `new_email` varchar(254) DEFAULT NULL,
  `new_password` varchar(160) DEFAULT NULL,
  `verification_status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`id`, `email`, `password`, `salt`, `user_role_id`, `last_login`, `last_login_ip`, `reset_request_code`, `reset_request_time`, `reset_request_ip`, `new_email`, `new_password`, `verification_status`) VALUES
(1, 'admin@admin.com', '8e666f12a66c17a952a1d5e273428e478e02d943', '4f6cdddc4979b8.51434094', 1, '2012-08-01 14:00:53', 1270, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'supiakatun@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 'ffgg@hjh.sfdfgf', '96e79218965eb72c92a549dd5a330112', NULL, 2, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 'supia@gmail.com', '96e79218965eb72c92a549dd5a330112', NULL, 1, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 'rakeybul@yahoo.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, 1, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 'rubel@gmail.com', '58527ad5e21f4a4292f75d5fc6b173567379793c', '4faa387a45eca4.84251815', 2, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(15, 'rahat88@rahat88.com', 'ea061d5762c9f4aef24af6bc24bdfadb6976acf6', '4faf64a6a9d445.29230208', 1, '2012-05-13 14:01:46', 1270, NULL, NULL, NULL, NULL, NULL, 1),
(8, 'suma@gmail.com', 'eca22ebcf7b7f552ada806437829327a67058cb6', '4faa3dd4dc29f7.96537803', 2, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 'xcx@gfgh.gfg', 'f2ea9506f063151c920f9e5a7459edf26814c6cf', '4faa5a88558686.93181018', 1, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, 'juma@yahoo.com', '4be7aba2003ac0f0a5db875ab592c9a3087ac9a0', '4faa5cb31086a9.66570433', 2, '2012-05-10 09:35:31', 0, NULL, NULL, NULL, NULL, NULL, 1),
(11, 'hasan@gmail.com', '2d21b886769c207d11591d92ca06d7fe693c341c', '4faa63af78caa3.72745631', 2, '2012-05-10 08:29:36', 0, NULL, NULL, NULL, NULL, NULL, 1),
(12, 'runa@yahoo.com', 'eb8989c06215614ab36743f489ef11e599f3d124', '4fab4a897971a4.60677600', 3, '2012-05-10 05:45:56', 0, NULL, NULL, NULL, NULL, NULL, 1),
(13, 'raja@gmail.com', '6e3fde237b44135b41edf507f9dbd9149116e76f', '4fab7c323c4150.07491833', 4, '2012-05-10 08:28:57', 0, NULL, NULL, NULL, NULL, NULL, 1),
(14, 'rahat88@rahat.com', 'e2af589f1934bb82e236d8b38fe064390aaac8d1', '4faf5858411768.17633361', 2, '2012-07-18 17:38:05', 1270, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `type_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type_name`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Casher'),
(4, 'Superviser');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) CHARACTER SET utf8 NOT NULL,
  `designation` varchar(50) NOT NULL,
  `type_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_name`, `email`, `password`, `designation`, `type_id`) VALUES
(21, 'rakeybul2', 'hasan2', 'hasan2', 'rokibul@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', 'Jr .soft', 2),
(23, 'test edit', 'test', 'sdcdc', 'dscsdc@uyhhgj.ghh', 'c4b1471987dcd0f33994918ef502c00f', 'csdcdsc', 2),
(28, 'prince', 'faisal', 'prince', 'prince2@msdn.net.bd', 'fcea920f7412b5da7be0cf42b8c93759', 'jr.soft', 2),
(32, 'kamal', 'hasan', 'adffaf', 'kamal@yahoo.com', '96e79218965eb72c92a549dd5a330112', 'juma', 2),
(35, 'lima', 'begum', 'lima', 'lima@gmail.com', '1a100d2c0dab19c4430e7d73762b3423', 'Published', 3),
(55, 'rakeybul', 'hasan', 'rakeybul', 'rakeybul@yahoo.com', '96e79218965eb72c92a549dd5a330112', 'djfksdfj', 2),
(60, 'Rakib', 'hasan', 'Tamil', 'tamil@gmail.com', '96e79218965eb72c92a549dd5a330112', 'Not Allow', 4),
(61, 'Juma', 'Akter', 'Juma', 'juma@gmail.com', '96e79218965eb72c92a549dd5a330112', 'Published', 2),
(62, 'Kamal', 'hossan', 'kamal', 'kamal@emicrograph.com', '96e79218965eb72c92a549dd5a330112', 'published', 4),
(64, 'jamal', 'kamal', 'kamal', 'hossani@emicrograph.com', '96e79218965eb72c92a549dd5a330112', 'No', 4),
(65, 'jamakl', 'hasan', 'jamakl', 'jamakl@gmail.com', '96e79218965eb72c92a549dd5a330112', 'published', 1),
(66, 'hossan', 'kamal', 'hossan', 'hossan@gmail.com', '96e79218965eb72c92a549dd5a330112', 'dfds', 2),
(67, 'suma', 'akter', 'suma', 'suma@gmail.com', 'e3ceb5881a0a1fdaad01296d7554868d', 'dsj', 2),
(68, 'suma', 'akter', 'suma', 'sumaakter@gmail.com', 'e3ceb5881a0a1fdaad01296d7554868d', 'dfa', 2),
(75, 'juma', 'akter', 'juma', 'jumaakter@gmail.com', '96e79218965eb72c92a549dd5a330112', 'published', 2),
(77, 'yeasir', 'uddin', 'yeasir', 'yeasir@yahoo.com', '96e79218965eb72c92a549dd5a330112', 'kll;', 2),
(78, 'rubel', 'hossain', 'rubel', 'ruhel@emiro.com', '96e79218965eb72c92a549dd5a330112', 'fgfdg', 3),
(79, 'ruba', 'akter', 'ruba', 'ruba@fkdk.ddf', '96e79218965eb72c92a549dd5a330112', 'fsadf', 3),
(80, 'Lima', 'akter', 'akter', 'akter@gmail.com', '1a100d2c0dab19c4430e7d73762b3423', 'hhj', 4),
(81, 'supia', 'katun', 'admin', 'supiakatun@gmail.com', '96e79218965eb72c92a549dd5a330112', 'df', 1),
(82, 'gsdfg', 'gsfg', 'dfsg', 'ffgg@hjh.sfdfgf', '96e79218965eb72c92a549dd5a330112', 'dsfds', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_map`
--

CREATE TABLE IF NOT EXISTS `user_access_map` (
  `user_role_id` int(10) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `permission` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_role_id`,`controller`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_map`
--

INSERT INTO `user_access_map` (`user_role_id`, `controller`, `permission`) VALUES
(1, 'main_controller', '11111'),
(1, 'welcome', '11111'),
(4, 'product_line_controller', '00101'),
(2, 'product_line_controller', '00001'),
(2, 'main_controller', '10000'),
(3, 'login_controller', '00000'),
(1, 'raw_inventory_controller', '11111'),
(1, 'product_controller', '11111'),
(3, 'welcome', '00001'),
(2, 'welcome', '00001'),
(1, 'product_line_controller', '11111'),
(2, 'product_controller', '00001'),
(2, 'raw_inventory_controller', '00001'),
(1, 'employee_controller', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) DEFAULT NULL,
  `default_access` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role_name`, `default_access`) VALUES
(1, 'Admin', '11111');
