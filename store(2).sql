-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 13, 2019 at 04:33 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Stationary', 1),
(2, 'Kitchen Item', 1),
(3, 'Refreshment Item', 1),
(4, 'Toner', 1),
(5, 'IT Material', 1),
(6, 'Vehicle Item', 1),
(7, 'Logistic Item', 1);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

DROP TABLE IF EXISTS `issue`;
CREATE TABLE IF NOT EXISTS `issue` (
  `issue_id` int(11) NOT NULL AUTO_INCREMENT,
  `issue_to` int(11) NOT NULL,
  `issue_date` datetime NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty_issued` double NOT NULL,
  `requisition_no` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `issue_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`issue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`issue_id`, `issue_to`, `issue_date`, `product_id`, `qty_issued`, `requisition_no`, `issue_by`, `status`) VALUES
(1, 19, '2018-12-19 12:13:42', 14, 2, '1', 0, 1),
(2, 14, '2018-12-19 12:35:14', 139, 1, '2', 0, 1),
(3, 13, '2018-12-19 16:01:44', 103, 1, '3', 0, 1),
(4, 9, '2018-12-20 15:35:45', 192, 10, '4', 0, 1),
(5, 18, '2018-12-20 15:44:19', 189, 4, '5', 0, 1),
(6, 18, '2018-12-20 15:44:19', 41, 1, '5', 0, 1),
(7, 18, '2018-12-20 15:44:19', 125, 2, '5', 0, 1),
(8, 18, '2018-12-20 15:44:19', 185, 2, '5', 0, 1),
(9, 18, '2018-12-20 15:44:19', 229, 1, '5', 0, 1),
(10, 20, '2018-12-20 17:09:35', 82, 1, '6', 0, 1),
(11, 25, '2018-12-23 14:54:03', 125, 1, '7', 0, 1),
(12, 25, '2018-12-23 14:54:03', 189, 2, '7', 0, 1),
(13, 25, '2018-12-23 14:54:03', 185, 1, '7', 0, 1),
(14, 25, '2018-12-23 14:54:03', 192, 1, '7', 0, 1),
(15, 26, '2019-01-01 14:57:40', 243, 24, '8', 0, 1),
(16, 26, '2019-01-01 14:57:40', 192, 1, '8', 0, 1),
(17, 4, '2019-01-01 15:04:29', 125, 3, '9', 0, 1),
(18, 4, '2019-01-01 15:04:29', 189, 4, '9', 0, 1),
(19, 4, '2019-01-01 15:04:29', 185, 2, '9', 0, 1),
(20, 4, '2019-01-01 15:04:29', 192, 10, '9', 0, 1),
(21, 4, '2019-01-01 15:04:29', 194, 12, '9', 0, 1),
(22, 4, '2019-01-01 15:04:29', 229, 2, '9', 0, 1),
(23, 4, '2019-01-01 15:04:29', 92, 3, '9', 0, 1),
(24, 4, '2019-01-01 15:04:29', 41, 1, '9', 0, 1),
(25, 4, '2019-01-01 15:04:29', 232, 1, '9', 0, 1),
(26, 37, '2019-01-01 15:08:52', 101, 3, '10', 0, 1),
(27, 37, '2019-01-01 15:08:52', 96, 1, '10', 0, 1),
(28, 29, '2019-01-01 15:12:48', 125, 1, '11', 0, 1),
(29, 29, '2019-01-01 15:12:48', 189, 2, '11', 0, 1),
(30, 29, '2019-01-01 15:12:48', 185, 1, '11', 0, 1),
(31, 29, '2019-01-01 15:12:48', 192, 1, '11', 0, 1),
(32, 30, '2019-01-01 16:32:57', 94, 1, '12', 0, 1),
(33, 30, '2019-01-01 16:32:57', 249, 1, '12', 0, 1),
(34, 30, '2019-01-02 13:16:47', 179, 1, '16', 0, 1),
(35, 30, '2019-01-02 13:16:47', 180, 1, '16', 0, 1),
(36, 12, '2019-01-02 13:21:07', 134, 5, '15', 0, 1),
(37, 12, '2019-01-02 13:21:07', 146, 60, '15', 0, 1),
(38, 12, '2019-01-02 13:21:07', 192, 6, '15', 0, 1),
(39, 12, '2019-01-02 13:21:07', 194, 6, '15', 0, 1),
(40, 12, '2019-01-02 13:21:07', 139, 12, '15', 0, 1),
(41, 37, '2019-01-02 13:22:53', 101, 3, '14', 0, 1),
(42, 28, '2019-01-02 13:24:54', 162, 1, '13', 0, 1),
(43, 23, '2019-01-03 10:43:59', 24, 1, '17', 0, 1),
(44, 23, '2019-01-03 10:46:29', 243, 24, '17', 0, 1),
(45, 57, '2019-01-03 11:09:07', 24, 1, '18', 0, 1),
(46, 57, '2019-01-03 11:09:07', 192, 1, '18', 0, 1),
(47, 57, '2019-01-03 11:09:07', 243, 24, '18', 0, 1),
(48, 25, '2019-01-06 12:09:32', 139, 1, '23', 0, 1),
(49, 29, '2019-01-06 12:10:58', 139, 1, '22', 0, 1),
(50, 22, '2019-01-06 12:12:17', 139, 1, '21', 0, 1),
(51, 38, '2019-01-06 12:18:23', 189, 8, '20', 0, 1),
(52, 38, '2019-01-06 12:18:23', 185, 3, '20', 0, 1),
(53, 38, '2019-01-06 12:18:23', 125, 3, '20', 0, 1),
(54, 38, '2019-01-06 12:18:23', 41, 1, '20', 0, 1),
(55, 38, '2019-01-06 12:18:23', 92, 5, '20', 0, 1),
(56, 38, '2019-01-06 12:18:23', 229, 1, '20', 0, 1),
(57, 38, '2019-01-06 12:18:23', 192, 10, '20', 0, 1),
(58, 38, '2019-01-06 12:18:23', 232, 1, '20', 0, 1),
(59, 18, '2019-01-06 12:25:48', 189, 4, '19', 0, 1),
(60, 18, '2019-01-06 12:25:48', 41, 1, '19', 0, 1),
(61, 18, '2019-01-06 12:25:48', 185, 2, '19', 0, 1),
(62, 18, '2019-01-06 12:25:48', 125, 3, '19', 0, 1),
(63, 18, '2019-01-06 12:25:48', 229, 1, '19', 0, 1),
(64, 18, '2019-01-06 12:25:48', 92, 4, '19', 0, 1),
(65, 18, '2019-01-06 12:25:48', 192, 10, '19', 0, 1),
(66, 18, '2019-01-06 12:25:48', 232, 1, '19', 0, 1),
(67, 18, '2019-01-06 12:25:48', 194, 24, '19', 0, 1),
(68, 37, '2019-01-06 15:51:51', 107, 1, '25', 0, 1),
(69, 37, '2019-01-06 15:51:51', 160, 1, '25', 0, 1),
(70, 11, '2019-01-06 15:54:16', 43, 1, '24', 0, 1),
(71, 11, '2019-01-06 15:54:16', 76, 7, '24', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `total_qty` double NOT NULL DEFAULT '0',
  `size` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `min_reminder` int(11) NOT NULL,
  `remarks` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `category_id`, `unit_id`, `total_qty`, `size`, `location`, `min_reminder`, `remarks`, `status`) VALUES
(1, 'Air freshner (Special)', 2, 1, 15, '', '1', 10, 'P163/3', 1),
(2, 'Aerosol', 2, 1, 19, '', '1,2', 10, 'P182/3', 1),
(3, 'Anti cutter', 1, 1, 68, '', '2,3', 10, 'P44/3', 1),
(4, 'Art Paper ', 1, 1, 0, '', '2', 10, 'P93/2', 1),
(5, 'Air Filter', 1, 1, 8, '', '2', 10, 'P193/3', 1),
(6, 'Ashtray ', 2, 1, 0, '', '4', 10, 'P32/1', 1),
(7, 'Binder clip (51mm)', 1, 2, 11, '', '3', 10, 'P242/1', 1),
(8, 'Binder clip (41mm)', 1, 2, 12, '', '3', 10, 'P243/1', 1),
(9, 'Binder clip (32mm)', 1, 2, 60, '', '3', 10, 'P89/3', 1),
(10, 'Binder clip (25mm)', 1, 2, 42, '', '3', 10, 'P144/2', 1),
(11, 'Binder clip (19mm)', 1, 2, 35, '', '3', 10, 'P213/3', 1),
(12, 'Binder clip (15mm)', 1, 2, 39, '', '3', 10, 'P147/3', 1),
(13, 'Basket (Been)', 2, 1, 12, '', '2', 10, 'P195/2', 1),
(14, 'Battery AA', 1, 1, 40, '', '3', 10, 'P203/3', 1),
(15, 'Battery AAA', 1, 1, 75, '', '3', 10, 'P80/3', 1),
(16, 'Battery Rechargable AA', 1, 1, 34, '', '3', 10, 'P255/2', 1),
(17, 'Biscuit(Lexus)', 3, 4, 0, '', '5', 10, 'P167', 1),
(18, 'Biscuit(nimky)', 3, 4, 24, '', '1', 10, 'P199/3', 1),
(19, 'Binding Tape 2.5(Book)', 1, 1, 12, '', '2', 10, 'P248', 1),
(20, 'Book\'s', 1, 1, 0, '', '2', 10, 'P75/3', 1),
(21, 'Box file', 1, 1, 2, '', '6', 10, 'P216', 1),
(22, 'Box Plastic', 1, 1, 2, '', '2', 10, 'P84/2', 1),
(23, 'Brown Paper', 1, 1, 195, '', '6', 10, 'P9/3', 1),
(24, 'Bucket', 2, 1, 3, '', '7', 10, 'P141', 1),
(25, 'Business Card Box', 1, 2, 26, '', '3', 10, 'P27/2', 1),
(26, 'CAR Charger With Cable', 6, 1, 0, '', '2', 10, 'P19/4', 1),
(27, 'Calculator', 1, 1, 5, '', '3', 10, 'P10/4', 1),
(28, 'Calculator Ribon(Printing)', 1, 1, 4, '', '3', 10, 'P18/3', 1),
(29, 'Calculator Roll (Printing-Ribon Roll)', 1, 1, 15, '', '3', 10, 'P226/1', 1),
(30, 'Calender Desk 2017', 1, 1, 0, '', '6', 10, 'P36/3', 1),
(31, 'Calender Desk 2018', 1, 1, 30, '', '2', 10, 'P174/3', 1),
(32, 'Cap ACC', 1, 1, 16, '', '6', 10, '', 1),
(33, 'Card Folder A4', 1, 1, 1, '', '2', 10, 'P22', 1),
(34, 'Card Folder small', 1, 1, 18, '', '2', 10, 'P186/2', 1),
(35, 'Carom Board', 1, 1, 0, '', '8', 10, 'P20/3', 1),
(36, 'CD Bijoy', 1, 1, 0, '', '9', 10, 'P258', 1),
(37, 'CD Blank ', 1, 1, 272, '', '1,3,5', 10, 'P38', 1),
(38, 'CD Marker pen', 1, 1, 27, '', '3', 10, 'P196/2', 1),
(39, 'Chess Board', 1, 1, 0, '', '8', 10, 'P21/3', 1),
(40, 'Clip Board', 1, 1, 9, '', '2', 10, 'P269', 1),
(41, 'Coffee', 2, 1, 23, '', '6,10', 10, 'P28/4', 1),
(42, 'Coffee Met', 2, 1, 1, '', '10', 10, 'P157/3', 1),
(43, 'Crest GIZ', 1, 1, 58, '', '11', 10, 'P72', 1),
(44, 'Cowhead Milk', 2, 4, 0, '', '2', 10, 'P217/3', 1),
(45, 'Data file ', 1, 1, 101, '', '6', 10, 'P87/3', 1),
(46, 'Data Rack (Magazin File Stand)', 1, 1, 34, '', '6', 10, 'P218', 1),
(47, 'Diary 2017', 1, 1, 0, '', '6', 10, 'P122/3', 1),
(48, 'Diary 2018', 1, 1, 5, '', '2', 10, 'P173/3', 1),
(49, 'Dish wash deterjent', 2, 1, 0, '', '2', 10, 'P2/2', 1),
(50, 'Duster Board', 1, 1, 6, '', '1,5', 10, 'P78', 1),
(51, 'Duster Cloth', 1, 1, 20, '', '2,13', 10, 'P146/3', 1),
(52, 'Duster Feather', 1, 1, 25, '', '2,6', 10, 'P90/2', 1),
(53, 'DVD Blank', 1, 1, 0, '', '1,5', 10, 'P 17/3', 1),
(54, 'DVD BlankDouble Lyre(Re-writable)', 1, 1, 5, '', '14', 10, 'p11/4', 1),
(55, 'DVD BlankDouble Lyre(writable)', 1, 1, 10, '', '14', 10, 'p12/4', 1),
(56, 'DVD Blank single Lyre', 1, 1, 10, '', '14', 10, 'p13/4', 1),
(57, 'Envelop A3 Brown', 1, 1, 59, '', '2', 10, 'P127/3', 1),
(58, 'Envelop A4 Brown', 1, 1, 189, '', '2', 10, 'P106/3', 1),
(59, 'Envelop A4 GIZ(10x12.)-BIG', 1, 1, 658, '', '2', 10, 'P49/3', 1),
(60, 'Envelop A4 GIZ Window', 1, 1, 140, '', '2', 10, 'P102/3', 1),
(61, 'Envelop A4 White', 1, 1, 439, '', '2', 10, 'P255', 1),
(62, 'Envelop GIZ Midiam Window', 1, 1, 850, '', '2', 10, 'P56/2', 1),
(63, 'Envelop GIZ Midiam', 1, 1, 361, '', '2', 10, 'P256', 1),
(64, 'Envelop GIZ Small(10x4)', 1, 1, 1306, '', '2', 10, 'P184/3', 1),
(65, 'Envelop Small (JRCP)', 1, 1, 825, '', '2', 10, 'P190', 1),
(66, 'Envelop A4 (JRCP)', 1, 1, 686, '', '2', 10, 'P191', 1),
(67, 'Envelop Small Brown (10x4)', 1, 1, 87, '', '2', 10, 'P181/3', 1),
(68, 'Eresar', 1, 1, 23, '', '12', 10, 'P169/3', 1),
(69, 'Executive Pad', 1, 1, 24, '', '2', 10, 'P31/3', 1),
(70, 'File (JRCP)', 1, 1, 448, '', '2', 10, 'P189', 1),
(71, 'File Divider', 1, 4, 54, '', '2', 10, 'P38/3', 1),
(72, 'Flipchart Paper', 1, 1, 0, '', '6', 10, 'P118/3', 1),
(73, 'Floor mate', 2, 1, 0, '', '2', 10, 'P193/3', 1),
(74, 'Folder (JRCP)', 1, 1, 882, '', '2', 10, 'P128/3', 1),
(75, 'Football ', 1, 1, 3, '', '6', 10, '', 1),
(76, 'Friendship Pin', 1, 1, 80, '', '3', 10, 'P215/2', 1),
(77, 'Gamcha', 6, 1, 21, '', '13', 10, 'P168/3', 1),
(78, 'GIZ Cap', 1, 1, 200, '', '6', 10, 'P58/2', 1),
(79, 'GIZ Folder', 1, 1, 956, '', '2,6', 10, 'P66/3', 1),
(80, 'GIZ Key ring', 1, 1, 17, '', '12', 10, 'P180/1', 1),
(81, 'GIZ Note pad 7\'\'', 1, 1, 0, '', '2', 10, 'P50/2', 1),
(82, 'GIZ Note pad 9\'\'', 1, 1, 467, '', '2,6', 10, 'P161/3', 1),
(83, 'GIZ Pen+ IRSOP', 1, 1, 39, '', '2', 10, 'P28/3', 1),
(84, 'GIZ Pendrive (JRCP)', 1, 1, 0, '', '15', 10, 'P280/2', 1),
(85, 'GIZ Pendrive (IRSOP)', 1, 1, 0, '', '2', 10, 'P134/3', 1),
(86, 'GIZ Sticker (For Car)', 6, 1, 150, '', '3', 10, 'P57/2', 1),
(87, 'Glass Cleaner', 1, 1, 5, '', '1', 10, 'P 46', 1),
(88, 'Glue stick', 1, 1, 69, '', '2,3', 10, 'P194/3', 1),
(89, 'Good Night Refill Machine', 1, 1, 4, '', '1', 10, 'P205/2', 1),
(90, 'Good Night Refill', 1, 1, 15, '', '1', 10, 'P 53', 1),
(91, 'Half Plate With GIZ Logo', 2, 1, 10, '', '6', 10, 'P58/3', 1),
(92, 'Hand Wash Liquid', 2, 1, 53, '', '1,2', 10, 'P20/4', 1),
(93, 'Highlighter', 1, 1, 45, '', '3', 10, 'P166/3', 1),
(94, 'ID Card Holder/Casing', 1, 1, 27, '', '3', 10, 'P156/3', 1),
(95, 'ID Card Ribon (Lenyards PR)', 1, 1, 10, '', '3', 10, 'P1/4', 1),
(96, 'Index File 2\'\' Black', 1, 1, 101, '', '2,6', 10, 'P 41/2', 1),
(97, 'Index File 2\'\' Blue', 1, 1, 99, '', '2,6', 10, 'P133/3', 1),
(98, 'Index File 2\'\' Green', 1, 1, 0, '', '2', 10, 'P24/4', 1),
(99, 'Index File 2\'\' Red', 1, 1, 0, '', '2', 10, '', 1),
(100, 'Index File 2\'\' Yellow', 1, 1, 0, '', '2', 10, '', 1),
(101, 'Index File 3\'\' Black', 1, 1, 103, '', '2,6', 10, 'P206/3', 1),
(102, 'Index File 3\'\' Blue', 1, 1, 109, '', '2,6', 10, 'P9/4', 1),
(103, 'Index File 3\'\' Green', 1, 1, 35, '', '2', 10, 'P159/3', 1),
(104, 'Index File 3\'\' Red', 1, 1, 0, '', '2', 10, 'P236', 1),
(105, 'Index File 3\'\' Yellow', 1, 1, 3, '', '2', 10, 'P109/3', 1),
(106, 'Gems Clip Box', 1, 2, 16, '', '3', 10, 'P22/2', 1),
(107, 'Gems Clip(Triangle Clip-625)', 1, 2, 80, '', '2,3', 10, 'P67/3', 1),
(108, 'Gems Clip(Triangle Clip Jumbo)', 1, 2, 18, '', '3', 10, 'P32/3', 1),
(109, 'Zipper Bag ', 1, 1, 109, '', '2', 10, 'P 218/3', 1),
(110, 'Jet poweder', 2, 1, 0, '', '16', 10, 'P111/3', 1),
(111, 'Key Ring Normal', 1, 1, 3, '', '3', 10, 'P228', 1),
(112, 'Leather Folder (JRCP)- Entry and out', 1, 1, 0, '', '6', 10, '219/3', 1),
(113, 'Lock Security', 1, 1, 0, '', '17', 10, 'P261/2', 1),
(114, 'Log Book', 1, 1, 0, '', '2', 10, 'P271', 1),
(115, 'Ludu', 1, 1, 0, '', '8', 10, 'P22/3', 1),
(116, 'Magic tape', 1, 1, 12, '', '3', 10, 'P223', 1),
(117, 'Management File/Report Cover', 1, 1, 381, '', '2', 10, 'P24/3', 1),
(118, 'Marker Artline Parmanent', 1, 1, 88, '', '2', 10, 'P204/3', 1),
(119, 'Marker Parmanent', 1, 1, 120, '', '2', 10, 'P185/3', 1),
(120, 'Marker White board', 1, 1, 125, '', '2', 10, 'P212/3', 1),
(121, 'Masking tape 1\'\'', 1, 1, 25, '', '2', 10, 'P279', 1),
(122, 'Masking tape 1.5\'\'', 1, 1, 8, '', '2', 10, 'P198/3', 1),
(123, 'Masking tape 2\'\'', 1, 1, 45, '', '2', 10, 'P11/3', 1),
(124, 'Measurement Tape', 1, 1, 1, '', '3', 10, 'P228/2', 1),
(125, 'Milk Diploma', 3, 4, 29, '', '6,10', 10, 'P31/4', 1),
(126, 'Mouse Pad', 1, 1, 45, '', '2', 10, 'P133/2', 1),
(127, 'Mug With GIZ Logo', 1, 1, 669, '', '18', 10, 'P18/4', 1),
(128, 'Name Card Holder', 1, 1, 2, '', '1,5', 10, 'P249', 1),
(129, 'Name Tag ', 1, 1, 673, '', '2', 10, 'P97/3', 1),
(130, 'Notepad 8\'\' JRCP', 1, 1, 695, '', '5', 10, 'P201/3', 1),
(131, 'Notepad 9\'\' IRSOP', 1, 1, 0, '', '19', 10, 'P7/3', 1),
(132, 'Notebook Normal', 1, 1, 44, '', '2', 10, 'P250', 1),
(133, 'North End Coffee', 1, 1, 0, '', '2', 10, 'P216/3', 1),
(134, 'Offset Paper A4', 1, 3, 133, '', '2', 10, 'P2/ 4', 1),
(135, 'Offset Paper LG', 1, 3, 19, '', '2', 10, 'P134', 1),
(136, 'Odomos', 1, 1, 0, '', '2', 10, 'P14/4', 1),
(137, 'Pen Correction', 1, 1, 9, '', '3', 10, 'P17', 1),
(138, 'Pen (JRCP)', 1, 1, 511, '', '2', 10, 'P23/4', 1),
(139, 'Pen Linc', 1, 1, 1190, '', '1', 10, 'P33/4', 1),
(140, 'Pen Montex-Hi Gel', 1, 1, 43, '', '3', 10, 'P198/2', 1),
(141, 'Pen pilot', 1, 1, 73, '', '3', 10, 'P100/3', 1),
(142, 'Pen stand', 1, 1, 13, '', '3', 10, 'P146/2', 1),
(143, 'Pencil', 1, 1, 23, '', '3', 10, 'P170/3', 1),
(144, 'Pencil sharpner', 1, 1, 50, '', '3', 10, 'P99/3', 1),
(145, 'Pin remover', 1, 1, 23, '', '3', 10, 'P168/2', 1),
(146, 'Plastic Folder', 1, 1, 170, '', '2', 10, 'P197/3', 1),
(147, 'Pocket Folder', 1, 1, 2095, '', '2', 10, 'P155/2', 1),
(148, 'Poster Paper', 1, 1, 354, '', '2', 10, 'P254/2', 1),
(149, 'Post-it Tag 44mm x12', 1, 1, 36, '', '3', 10, 'P207/3', 1),
(150, 'Post-it Note 2\'\'x3\'\'', 1, 1, 33, '', '3', 10, 'P222', 1),
(151, 'Post-it Note 3\'\'x3\'\'', 1, 1, 26, '', '3', 10, 'P40/3', 1),
(152, 'Post-it Note 5\'\'x3\'\'', 1, 1, 18, '', '3', 10, 'P223/2', 1),
(153, 'Punch macin', 1, 1, 10, '', '3', 10, 'P164/3', 1),
(154, 'Push pin box', 1, 2, 1, '', '3', 10, 'P190/2', 1),
(155, 'Polybags Dustbins (Enty And out)', 2, 1, 0, '', '6', 10, ' P215/3', 1),
(156, 'P.V.C Tape', 1, 1, 5, '', '2', 10, 'P25/4', 1),
(157, 'Quarter  Plate With GIZ Logo', 2, 1, 50, '', '6', 10, 'P 59/3', 1),
(158, 'Rain coat', 1, 1, 0, '', '2', 10, 'P205', 1),
(159, 'Register Book No-4', 1, 1, 12, '', '3,6', 10, 'P148/2', 1),
(160, ' Rubber Band (Gurder)', 1, 4, 17, '', '3', 10, 'P162/3', 1),
(161, 'Stock Register', 1, 1, 1, '', '3', 10, 'P4/4', 1),
(162, 'Scessors ', 1, 1, 58, '', '2,3', 10, 'P19/3', 1),
(163, 'Seminer File', 1, 1, 68, '', '2', 10, 'P201', 1),
(164, 'Sending File Pink', 1, 1, 84, '', '6', 10, 'P202', 1),
(165, 'Sending File Yellow', 1, 1, 232, '', '2', 10, 'P203', 1),
(166, 'Sign pen', 1, 6, 12, '', '3', 10, 'P64/2', 1),
(167, 'Signature Folder', 1, 1, 1, '', '3', 10, 'P6/3', 1),
(168, 'Slip Paper', 1, 1, 10, '', '3', 10, 'P39/3', 1),
(169, 'Spiral Ring-6mm', 1, 1, 0, '', '2', 10, 'P99/2', 1),
(170, 'Spiral Ring-8mm', 1, 1, 0, '', '2', 10, 'P100/2', 1),
(171, 'Spiral Ring-10mm', 1, 1, 0, '', '2', 10, 'P101/2', 1),
(172, 'Spiral Ring-12mm', 1, 1, 0, '', '2', 10, 'P102/2', 1),
(173, 'Spiral Ring-14mm', 1, 1, 0, '', '2', 10, 'P103/2', 1),
(174, 'Spiral Cover', 1, 8, 14, '', '14', 10, 'P247', 1),
(175, 'Stam pad', 1, 1, 6, '', '3', 10, 'P16', 1),
(176, 'Stam Pad Ink', 1, 1, 7, '', '3', 10, 'P197/2', 1),
(177, 'Stapler Machine ', 1, 1, 31, '', '2,3', 10, 'P27/4', 1),
(178, 'Stapler Machine Small', 1, 1, 9, '', '3', 10, 'P81/3', 1),
(179, 'Stapler Pin Box (6/24)', 1, 2, 132, '', '3', 10, 'P7/ 4', 1),
(180, 'Stapler Pin Box Small', 1, 2, 182, '', '3', 10, 'P82/3', 1),
(181, 'Steel Scale 150mm', 1, 1, 7, '', '3', 10, 'P230', 1),
(182, 'Steel Scale 300mm', 1, 1, 17, '', '3', 10, 'P92/2', 1),
(183, 'Stick tack', 1, 1, 7, '', '3', 10, 'P227/1', 1),
(184, 'Sticker Paper A4', 1, 1, 87, '', '3', 10, 'P221/3', 1),
(185, 'Sugar Normal', 3, 4, 43, '', '1', 10, 'P35/4', 1),
(186, 'Table (RFL)', 2, 1, 2, '', '20', 10, 'P53/3', 1),
(187, 'Tape dispenser  Small', 1, 1, 10, '', '3', 10, 'P42/3', 1),
(188, 'Tape dispenser Big', 1, 1, 2, '', '12', 10, 'P231/2', 1),
(189, 'Tea Bag', 3, 2, 97, '', '2', 10, 'P30/ 4', 1),
(190, 'Telephone Index', 1, 1, 2, '', '3', 10, 'P23', 1),
(191, 'Thread balls', 1, 1, 14, '', '2', 10, 'P 47', 1),
(192, 'Tissue Box (Facial)', 2, 2, 201, '', '2,6', 10, 'P29/4', 1),
(193, 'Tissue Kitchen', 2, 1, 0, '', '2', 10, 'P265/2', 1),
(194, 'Tissue Toilet', 2, 1, 588, '', '2,6', 10, 'P26/4', 1),
(195, 'Toner CLP 620 Black', 4, 1, 0, '', '21', 10, 'P115', 1),
(196, 'Toner CLP 620 Cyan', 4, 1, 0, '', '21', 10, 'P118', 1),
(197, 'Toner CLP 620 Magenta', 4, 1, 0, '', '21', 10, 'P117', 1),
(198, 'Toner CLP 620 Yellow', 4, 1, 0, '', '21', 10, 'P116', 1),
(199, 'Toner CLP 680 Black', 4, 1, 0, '', '22', 10, 'P188/3', 1),
(200, 'Toner CLP 680 Cyan', 4, 1, 0, '', '22', 10, 'P154/3', 1),
(201, 'Toner CLP 680 Magenta', 4, 1, 0, '', '22', 10, 'P145/3', 1),
(202, 'Toner CLP 680 Yellow', 4, 1, 0, '', '22', 10, 'P155/3', 1),
(203, 'Toner HP (05A)', 4, 1, 1, '', '21', 10, '', 1),
(204, 'Toner HP 1320(49A)', 4, 1, 1, '', '21', 10, 'P122', 1),
(205, 'Toner HP 1606 (78A)', 4, 1, 0, '', '22', 10, 'P140/3', 1),
(206, 'Toner HP 2015d (53A)', 4, 1, 1, '', '21', 10, 'P119', 1),
(207, 'Toner HP 2600N Black ', 4, 1, 0, '', '23', 10, 'P126', 1),
(208, 'Toner HP 2600N Cyan ', 4, 1, 0, '', '23', 10, 'P124', 1),
(209, 'Toner HP 2600N Magenta', 4, 1, 0, '', '23', 10, 'P123', 1),
(210, 'Toner HP 2600N Yellow ', 4, 1, 0, '', '23', 10, 'P125', 1),
(211, 'Toner Hp-125 (83A)', 4, 1, 0, '', '23', 10, 'P180/3', 1),
(212, 'Toner Hp-(80A)', 4, 1, 1, '', '23', 10, 'P271/2', 1),
(213, 'Toner Richo 3350', 4, 1, 4, '', '21', 10, 'P139', 1),
(214, 'Toner Samsung ML 2850', 4, 1, 5, '', '23', 10, 'P120', 1),
(215, 'Toner Samsung ML 2820(115L)', 4, 1, 0, '', '22', 10, 'P257/2', 1),
(216, 'Toner Samsung MLT 1043', 4, 1, 0, '', '21', 10, 'P127', 1),
(217, 'Toner Samsung 3401(D101S)', 4, 1, 3, '', '22', 10, 'P130', 1),
(218, 'Toner Toshiba 305', 4, 1, 1, '', '21', 10, 'P 110', 1),
(219, 'Toner Toshiba-2507P (Ministry)', 4, 1, 5, '', '21', 10, 'P126/2', 1),
(220, 'Toner Xerox 5019 (Ministry)', 4, 1, 2, '', '21', 10, 'P281', 1),
(221, 'Toner Xerox 3320', 4, 1, 2, '', '21', 10, 'P128', 1),
(222, 'Toner Xerox 5945', 4, 1, 5, '', '21', 10, 'P212/2', 1),
(223, 'Torch Light', 1, 1, 0, '', '24', 10, 'P35/2', 1),
(224, 'Training Bag ', 1, 1, 43, '', '29', 10, 'P160', 1),
(225, 'Transparent tape 2.5', 1, 1, 23, '', '2', 10, 'P108/3', 1),
(226, 'Transparent tape 18mm', 1, 1, 21, '', '3', 10, 'P60/3', 1),
(227, 'Tray 3 Rack', 1, 1, 13, '', '1', 10, 'P158', 1),
(228, 'Tray Single Plastic ', 1, 1, 0, '', '2', 10, 'P74/2', 1),
(229, 'Trix Lemon', 2, 1, 31, '', '16', 10, 'P37/4', 1),
(230, 'T-Shirt ACC', 1, 1, 31, '', '6', 10, 'P204', 1),
(231, 'Umbrella', 1, 1, 0, '', '2', 10, 'P206', 1),
(232, 'Vim', 2, 4, 9, '', '16', 10, 'P171/3', 1),
(233, 'VIPP Card 10\'\' Rectangle', 1, 1, 90, '', '2', 10, 'P174', 1),
(234, 'VIPP Card 8\'\' Rectengle', 1, 1, 8196, '', '2', 10, 'P33/3', 1),
(235, 'VIPP Card Oval', 1, 1, 1255, '', '2', 10, 'P119/3', 1),
(236, 'VIPP Card Round (7.5\")', 1, 1, 1745, '', '2', 10, 'P173', 1),
(237, 'VIPP Card Round (6.5\")', 1, 1, 225, '', '2', 10, 'P257', 1),
(238, 'VIPP Card Round (5.5\")', 1, 1, 220, '', '2', 10, 'P269/2', 1),
(239, 'VIPP Card Round (small)', 1, 1, 650, '', '2', 10, 'P172', 1),
(240, 'VIPP Card 22\" Rectangle ', 1, 1, 1813, '', '2', 10, 'P256/2', 1),
(241, 'Wall Clock', 1, 1, 0, '', '2', 10, 'P230/2', 1),
(242, 'Water 1500ml', 2, 1, 0, '', '25', 10, 'P149', 1),
(243, 'Water 500ml', 2, 1, 709, '', '4,25', 10, 'P32/4', 1),
(244, 'Water Glass', 2, 1, 0, '', '26', 10, 'P200', 1),
(245, 'Water Glass Cover', 2, 1, 0, '', '26', 10, 'P209', 1),
(246, 'Water Jug', 2, 1, 5, '', '26', 10, 'P199', 1),
(247, 'Whistle', 1, 1, 0, '', '3', 10, 'P85/2', 1),
(248, 'Year Planner 2017', 1, 1, 83, '', '6', 10, 'P47/3', 1),
(249, 'Yoyo Clip', 1, 1, 72, '', '3', 10, 'P195/3', 1),
(250, 'Zute bag', 1, 1, 30, '', '27', 10, 'P159', 1),
(251, 'Calender Garman', 1, 1, 0, '', '28', 10, 'P80', 1),
(252, 'Calender Monitor 2017', 1, 1, 0, '', '28', 10, 'P152/2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `unit_rate` double NOT NULL,
  `quantity` double NOT NULL,
  `date_purchased` datetime NOT NULL,
  `invoice_no` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `purchase_requisition_no` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `shop_name` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `product_id`, `category_id`, `unit_id`, `unit_rate`, `quantity`, `date_purchased`, `invoice_no`, `purchase_requisition_no`, `shop_name`, `status`) VALUES
(1, 225, 1, 1, 0, 20, '2019-01-07 00:00:00', '0', '0', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

DROP TABLE IF EXISTS `recipient`;
CREATE TABLE IF NOT EXISTS `recipient` (
  `recipient_id` int(11) NOT NULL AUTO_INCREMENT,
  `recipient_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `personal_id` int(11) NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`recipient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recipient`
--

INSERT INTO `recipient` (`recipient_id`, `recipient_name`, `personal_id`, `expiry_date`, `status`) VALUES
(1, 'A.T.M Morshed  Alam', 1, NULL, 1),
(2, 'Abdullah Al Noman', 2, NULL, 1),
(3, 'Anja  Barth', 3, NULL, 1),
(4, 'Anjana Rani Sarker', 4, NULL, 1),
(5, 'Antunu Kar', 5, NULL, 1),
(6, 'Arick Shama Proma', 6, NULL, 1),
(7, 'Chanchal  Mukherjee', 7, NULL, 1),
(8, 'Dabarson Mankhin', 8, NULL, 1),
(9, 'Eti Bissus', 9, NULL, 1),
(10, 'Farhana Rob  Shati', 10, NULL, 1),
(11, 'Fatema Begum  Labony', 11, NULL, 1),
(12, 'Feroza  Begum', 12, NULL, 1),
(13, 'Florence Linda Nath', 13, NULL, 1),
(14, 'Hasan  Tareq', 14, NULL, 1),
(15, 'Israt Jahan Ony', 15, NULL, 1),
(16, 'Krishna  Chanda', 16, NULL, 1),
(17, 'Labina  Tabassum', 17, NULL, 1),
(18, 'Laila Begum', 18, NULL, 1),
(19, 'Marufa  Haque', 19, NULL, 1),
(20, 'Md Abdul Quaiyum', 20, NULL, 1),
(21, 'Md. Abu Bokkor Siddik', 21, NULL, 1),
(22, 'Md. Al Amin', 22, NULL, 1),
(23, 'Md. Anamul Hoque', 23, NULL, 1),
(24, 'Md. Faruk Ahmed', 24, NULL, 1),
(25, 'Md. Hasmot Ali', 25, NULL, 1),
(26, 'Md. Jubaer Hossain', 26, NULL, 1),
(27, 'Md. Minhajul Quadir', 27, NULL, 1),
(28, 'Md. Rafique', 28, NULL, 1),
(29, 'Md. Shohag Miah', 29, NULL, 1),
(30, 'Md. Sohel  Mia', 30, NULL, 1),
(31, 'Md. Arifur Rahman', 31, NULL, 1),
(32, 'Mohammad  Javaid', 32, NULL, 1),
(33, 'Mohammad Ali Reza', 33, NULL, 1),
(34, 'Mohammad Reajul  Hoque', 34, NULL, 1),
(35, 'Mohammed Shahjahan Qureshi', 35, NULL, 1),
(36, 'Momena  Sultana', 36, NULL, 1),
(37, 'Moslema  Yeamin', 37, NULL, 1),
(38, 'Mst. Khaleda Khatun', 38, NULL, 1),
(39, 'Patrick D. Costa', 39, NULL, 1),
(40, 'Premangshu Shekhar Sarker', 40, NULL, 1),
(41, 'Promita Sengupta', 41, NULL, 1),
(42, 'Rasel Mehedi Parves', 42, NULL, 1),
(43, 'Rita Das Roy', 43, NULL, 1),
(44, 'S.M. Mustafizur  Rahman', 44, NULL, 1),
(45, 'Saleha  Khatun', 45, NULL, 1),
(46, 'Samia  Naz', 46, NULL, 1),
(47, 'Sareedish', 47, NULL, 1),
(48, 'Shah Maksud  Noor', 48, NULL, 1),
(49, 'Sidrah  Hamid', 49, NULL, 1),
(50, 'Sk. Akhlaqur  Rahman', 50, NULL, 1),
(51, 'Sophie Christine Wissner', 51, NULL, 1),
(52, 'Sudeb Kumar  Das', 52, NULL, 1),
(53, 'Sukarna  Abdullah', 53, NULL, 1),
(54, 'Syed Ziaul Hasan', 54, NULL, 1),
(55, 'Tahera  Yasmin', 55, NULL, 1),
(56, 'Thomas Gregor Moellmann', 56, NULL, 1),
(57, 'Topan Kumar Ghosh', 57, NULL, 1),
(58, 'Touhidul Alam Mintu', 58, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE IF NOT EXISTS `store` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_name`, `status`) VALUES
(1, 'W. Cabinet A1', 1),
(2, '1st Floor Store', 1),
(3, 'Glass Store 1', 1),
(4, '2nd Floor', 1),
(5, 'W. Cabinet A2', 1),
(6, '2nd Floor Store', 1),
(7, 'Kitchen Cabine K-5', 1),
(8, 'Parking', 1),
(9, 'Glass Cabinet 1', 1),
(10, 'Kitchen Cabinet Wooden A2', 1),
(11, 'Room 3 Cabinet', 1),
(12, 'Glass Store', 1),
(13, 'Drawer 2', 1),
(14, 'Store Cabinet Wooden-A of 01', 1),
(15, 'Glass Store 2', 1),
(16, 'Kitchen Cabinet K1', 1),
(17, 'Store Key Box', 1),
(18, '1st Floor Room - 4', 1),
(19, '3rd Floor Store', 1),
(20, 'Ground Floor', 1),
(21, 'W. Cabinet K1', 1),
(22, 'W. Cabinet S4', 1),
(23, 'W. Cabinet K2', 1),
(24, 'Official Car', 1),
(25, '1st Floor', 1),
(26, 'W. Cabinet K5', 1),
(27, 'W. Cabinet K8', 1),
(28, 'Balcony Room 4', 1),
(29, 'S 8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `store_requisition`
--

DROP TABLE IF EXISTS `store_requisition`;
CREATE TABLE IF NOT EXISTS `store_requisition` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `recipiennt_id` int(11) NOT NULL,
  `pdt_id` int(11) NOT NULL,
  `pdt_qty` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `submission_date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `req_no` int(11) NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `store_requisition`
--

INSERT INTO `store_requisition` (`req_id`, `recipiennt_id`, `pdt_id`, `pdt_qty`, `remarks`, `submission_date`, `status`, `req_no`) VALUES
(1, 19, 14, '2', 'N/A', '2018-12-19 11:57:26', 1, 1),
(2, 14, 139, '1', '3rd Floor', '2018-12-19 12:19:24', 1, 2),
(8, 9, 192, '10', '2nd floor', '2018-12-20 09:57:58', 1, 4),
(6, 13, 103, '1', '1st floor', '2018-12-19 15:54:54', 1, 3),
(9, 18, 189, '4', '3rd floor', '2018-12-20 12:06:30', 1, 5),
(10, 18, 41, '1', '\'\'', '2018-12-20 12:06:30', 1, 5),
(11, 18, 125, '2', '\'\'', '2018-12-20 12:06:30', 1, 5),
(12, 18, 185, '2', '', '2018-12-20 12:06:30', 1, 5),
(13, 18, 229, '1', '', '2018-12-20 12:06:30', 1, 5),
(14, 20, 82, '1', '1st floor', '2018-12-20 17:07:31', 1, 6),
(15, 25, 125, '1', 'For Security Guard', '2018-12-23 11:33:42', 1, 7),
(16, 25, 189, '2', '\'\'', '2018-12-23 11:33:42', 1, 7),
(17, 25, 185, '1', '\'\'', '2018-12-23 11:33:42', 1, 7),
(18, 25, 192, '1', '\'\'', '2018-12-23 11:33:42', 1, 7),
(19, 26, 243, '24', 'Car No 13-8336', '2019-01-01 12:51:59', 1, 8),
(20, 26, 192, '1', '\'\'', '2019-01-01 12:51:59', 1, 8),
(21, 4, 125, '3', '1st floor', '2019-01-01 13:03:18', 1, 9),
(22, 4, 189, '4', '\'\'', '2019-01-01 13:03:18', 1, 9),
(23, 4, 185, '2', '\'\'', '2019-01-01 13:03:18', 1, 9),
(24, 4, 192, '10', '\'\'', '2019-01-01 13:03:18', 1, 9),
(25, 4, 194, '12', '\'\'', '2019-01-01 13:03:18', 1, 9),
(26, 4, 229, '2', '\'\'', '2019-01-01 13:03:18', 1, 9),
(27, 4, 92, '3', '\'\'', '2019-01-01 13:03:18', 1, 9),
(28, 4, 41, '1', '\'\'', '2019-01-01 13:03:18', 1, 9),
(29, 4, 232, '1', '\'\'', '2019-01-01 13:03:18', 1, 9),
(30, 37, 101, '3', '1st floor', '2019-01-01 13:07:23', 1, 10),
(31, 37, 96, '1', '\'\'', '2019-01-01 13:07:23', 1, 10),
(32, 29, 125, '1', 'For Security Gard', '2019-01-01 13:22:09', 1, 11),
(33, 29, 189, '2', '\'\'', '2019-01-01 13:22:09', 1, 11),
(34, 29, 185, '1', '\'\'', '2019-01-01 13:22:09', 1, 11),
(35, 29, 192, '1', '\'\'', '2019-01-01 13:22:09', 1, 11),
(36, 30, 94, '1', '1st floor', '2019-01-01 16:29:17', 1, 12),
(37, 30, 249, '1', '\'\'', '2019-01-01 16:29:17', 1, 12),
(38, 28, 162, '1', 'Gardaner', '2019-01-02 12:29:01', 1, 13),
(39, 37, 101, '3', '1st floor', '2019-01-02 12:30:50', 1, 14),
(40, 12, 134, '5', 'Ministry', '2019-01-02 12:38:07', 1, 15),
(41, 12, 146, '60', '\'\'', '2019-01-02 12:38:07', 1, 15),
(42, 12, 192, '6', '\'\'', '2019-01-02 12:38:07', 1, 15),
(43, 12, 194, '6', '\'\'', '2019-01-02 12:38:07', 1, 15),
(44, 12, 139, '12', '\'\'', '2019-01-02 12:38:07', 1, 15),
(45, 30, 179, '1', '1st floor', '2019-01-02 13:05:51', 1, 16),
(46, 30, 180, '1', '\'\'', '2019-01-02 13:05:51', 1, 16),
(47, 23, 24, '1', 'alath 223', '2019-01-03 10:11:55', 1, 17),
(48, 23, 243, '24', '\'\'', '2019-01-03 10:11:55', 1, 17),
(49, 57, 24, '1', 'AL-207', '2019-01-03 10:55:37', 1, 18),
(50, 57, 192, '1', '\'\'', '2019-01-03 10:55:37', 1, 18),
(51, 57, 243, '24', '\'\'', '2019-01-03 10:55:37', 1, 18),
(52, 18, 189, '4', '3rd floor', '2019-01-06 10:08:50', 1, 19),
(53, 18, 41, '1', '\'\'', '2019-01-06 10:08:50', 1, 19),
(54, 18, 185, '2', '\'\'', '2019-01-06 10:08:50', 1, 19),
(55, 18, 125, '3', '\'\'', '2019-01-06 10:08:50', 1, 19),
(56, 18, 229, '1', '\'\'', '2019-01-06 10:08:50', 1, 19),
(57, 18, 92, '4', '\'\'', '2019-01-06 10:08:50', 1, 19),
(58, 18, 192, '10', '\'\'', '2019-01-06 10:08:50', 1, 19),
(59, 18, 232, '1', '\'\'', '2019-01-06 10:08:50', 1, 19),
(60, 18, 194, '24', '', '2019-01-06 10:08:50', 1, 19),
(61, 38, 189, '8', '1st floor', '2019-01-06 10:31:09', 1, 20),
(62, 38, 185, '3', '\'\'', '2019-01-06 10:31:09', 1, 20),
(63, 38, 125, '3', '\'\'', '2019-01-06 10:31:09', 1, 20),
(64, 38, 41, '1', '\'\'', '2019-01-06 10:31:09', 1, 20),
(65, 38, 92, '5', '\'\'', '2019-01-06 10:31:09', 1, 20),
(66, 38, 229, '1', '\'\'', '2019-01-06 10:31:09', 1, 20),
(67, 38, 192, '10', '\'\'', '2019-01-06 10:31:09', 1, 20),
(68, 38, 232, '1', '\'\'', '2019-01-06 10:31:09', 1, 20),
(69, 22, 139, '1', '1st floor', '2019-01-06 10:57:22', 1, 21),
(70, 29, 139, '1', '1st floor', '2019-01-06 10:58:52', 1, 22),
(71, 25, 139, '1', '1st floor', '2019-01-06 11:33:33', 1, 23),
(72, 11, 43, '1', '1st floor', '2019-01-06 15:20:06', 1, 24),
(73, 11, 76, '7', '\'\'', '2019-01-06 15:20:06', 1, 24),
(74, 37, 107, '1', '1st floor', '2019-01-06 15:35:02', 1, 25),
(75, 37, 160, '1', '\'\'', '2019-01-06 15:35:02', 1, 25),
(78, 25, 179, '2', 'For Security Gard', '2019-01-08 13:39:54', 1, 26),
(79, 25, 139, '2', '\'\'', '2019-01-08 13:39:54', 1, 26),
(80, 25, 125, '1', '\'\'', '2019-01-08 13:39:54', 1, 26),
(81, 25, 185, '1', '\'\'', '2019-01-08 13:39:54', 1, 26),
(82, 25, 189, '2', '\'\'', '2019-01-08 13:39:54', 1, 26),
(83, 25, 192, '1', '\'\'', '2019-01-08 13:39:54', 1, 26),
(84, 38, 61, '30', '1st floor', '2019-01-08 13:50:32', 1, 27),
(85, 38, 60, '20', '\'\'', '2019-01-08 13:50:32', 1, 27),
(86, 38, 59, '30', '\'\'', '2019-01-08 13:50:32', 1, 27),
(87, 47, 125, '2', '2nd floor', '2019-01-08 14:09:21', 1, 28),
(88, 47, 41, '2', '\'\'', '2019-01-08 14:09:21', 1, 28),
(89, 47, 189, '4', '\'\'', '2019-01-08 14:09:21', 1, 28),
(90, 47, 185, '2', '\'\'', '2019-01-08 14:09:21', 1, 28),
(91, 47, 192, '10', '\'\'', '2019-01-08 14:09:21', 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
CREATE TABLE IF NOT EXISTS `unit` (
  `unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_name`, `status`) VALUES
(1, 'PCs', 1),
(2, 'Box', 1),
(3, 'Ream', 1),
(4, 'Pack', 1),
(5, 'Set', 1),
(6, 'Dozen', 1),
(7, 'KG', 1),
(8, 'Bundle', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `status`) VALUES
(1, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0),
(2, 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vendor_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `vendor_phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vendor_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `vendor_address`, `vendor_phone`, `vendor_email`, `status`) VALUES
(1, 'Nova Stationary and Computer', '10, Taher Tower shopping center. Shop#117, Gulshan 2', '01767455146', '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
