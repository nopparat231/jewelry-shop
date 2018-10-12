-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 02:05 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewelry-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_tel` varchar(10) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_user`, `admin_pass`, `admin_name`, `admin_address`, `admin_tel`, `admin_email`, `status`, `date_save`) VALUES
(1, '1', '1', 'admin', 'test add', '0234567890', 'e-mail@admin.com', 'admin', '2017-08-30 01:57:41'),
(2, 'staff', '2', 'staff', 'test staff', '0123456789', 'e-mail@staff.com', 'admin', '2018-01-25 04:13:06'),
(10, 'jjjj', 'jjjj', 'jjjj', 'jjjj', '0902020202', 'dsasaf@hotmail.com', 'admin', '2018-08-30 13:05:35'),
(11, 'fgfgfgfg', 'gfgfgfg', 'fgfgfg', 'fgfgfg', '0902020202', 'dsasaf@hotmail.com', 'staff', '2018-08-31 16:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `b_id` int(11) NOT NULL,
  `b_number` varchar(50) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_type` varchar(50) NOT NULL,
  `b_owner` varchar(50) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  `b_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`b_id`, `b_number`, `b_name`, `b_type`, `b_owner`, `bn_name`, `b_logo`) VALUES
(2, '365-3032132-3212', 'กรุงไทย', 'ออมทรัพ', 'สมชาย ใจดี', 'พระสมุทรเจดีย์', 'imgb87159464020180819_000254.jpg'),
(3, '543-1534-54634-212', 'กสิกรไทย', 'ออมทรัพย์', 'มงคล ศรีสุข', 'พระสมุทรเจดีย์', 'imgb197504342620180818_223441.png'),
(4, '445-354-3232-212', 'ไทยพาณิชย์', 'ออมทรัพย์', 'สมบูรณ์ มั่งมี', 'พระสมุทรเจดีย์', 'imgb133828463220180818_223607.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carousel`
--

CREATE TABLE `tbl_carousel` (
  `carousel_id` int(50) NOT NULL,
  `carousel_img_1` varchar(200) NOT NULL,
  `carousel_img_2` varchar(200) NOT NULL,
  `carousel_img_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_carousel`
--

INSERT INTO `tbl_carousel` (`carousel_id`, `carousel_img_1`, `carousel_img_2`, `carousel_img_3`) VALUES
(4, 'img1113616315020181005_204216.png', 'img2157582531720181005_204428.png', 'img3157582531720181005_204428.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `mem_id` int(11) NOT NULL,
  `mem_name` varchar(50) NOT NULL,
  `mem_address` varchar(255) NOT NULL,
  `mem_tel` varchar(10) NOT NULL,
  `mem_username` varchar(20) NOT NULL,
  `mem_password` varchar(20) NOT NULL,
  `mem_email` varchar(20) NOT NULL,
  `status` varchar(5) NOT NULL,
  `sid` varchar(32) NOT NULL,
  `active` varchar(3) NOT NULL,
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`mem_id`, `mem_name`, `mem_address`, `mem_tel`, `mem_username`, `mem_password`, `mem_email`, `status`, `sid`, `active`, `dateinsert`) VALUES
(14, 'asdasdasd', 'asdsadasd', '0902020202', 'sdfsdfsad', 'asdasdasd', '23.noop@gmail.com', 'user', 'u3ia1e8d7ddbmcpqt7b0uq2tr0', 'no', '2018-08-25 18:46:17'),
(15, 'ssss', 'ssss', '0902020202', 'sssss', 'sssss', '23.noop@gmail.com', 'user', 'u3ia1e8d7ddbmcpqt7b0uq2tr0', 'yes', '2018-08-25 19:04:23'),
(16, 'kkkkkk', 'ffff 123', '0902020202', 'ffff', 'ffff', '23.noop@gmail.com', 'user', 'u3ia1e8d7ddbmcpqt7b0uq2tr0', 'yes', '2018-08-26 03:28:10'),
(17, 'ddd gggg', 'ddd 633 dfdf   ', '3333333333', 'ddd', 'ddd', '23.noop@gmail.com', 'user', '3vravt2ad0rg6g0j4tmfbsll86', 'yes', '2018-08-26 10:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new`
--

CREATE TABLE `tbl_new` (
  `new_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `mem_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `order_status` int(1) NOT NULL,
  `pay_slip` varchar(200) DEFAULT NULL,
  `b_name` varchar(100) DEFAULT NULL,
  `b_number` varchar(200) DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `pay_amount` int(50) DEFAULT NULL,
  `postcode` varchar(30) DEFAULT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `mem_id`, `name`, `address`, `email`, `phone`, `order_status`, `pay_slip`, `b_name`, `b_number`, `pay_date`, `pay_amount`, `postcode`, `order_date`) VALUES
(0000000001, 17, 'ddd', 'ddd', '23.noop@gmail.com', 2147483647, 3, '76364182020180928_141119.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-09-28', 4, 'TH21231545213', '2018-09-27 15:32:44'),
(0000000007, 17, 'ddd', 'ddd', '23.noop@gmail.com', 2147483647, 1, '', '', '', '0000-00-00', 0, '', '2018-09-28 13:09:44'),
(0000000010, 17, 'ddd', 'ddd 633 dfdf', '23.noop@gmail.com', 2147483647, 2, '202473542220180928_155646.jpg', 'ไทยพาณิชย์', '445-354-3232-212', '2018-09-28', 1, '', '2018-09-28 15:56:18'),
(0000000011, 17, 'ddd', 'ddd 633 dfdf', '23.noop@gmail.com', 2147483647, 4, '100596596520180929_211913.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-09-29', 1, '', '2018-09-29 21:17:19'),
(0000000012, 17, 'ddd', 'ddd 633 dfdf', '23.noop@gmail.com', 2147483647, 4, '', '', '', '0000-00-00', 0, '', '2018-09-30 10:42:49'),
(0000000013, 17, 'ddd', 'ddd 633 dfdf', '23.noop@gmail.com', 2147483647, 4, '', '', '', '0000-00-00', 0, '', '2018-10-12 16:37:22'),
(0000000014, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', 2147483647, 4, '', '', '', '0000-00-00', 0, '', '2018-10-12 17:00:16'),
(0000000015, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', 2147483647, 4, '', '', '', '0000-00-00', 0, '', '2018-10-12 17:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `d_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) DEFAULT NULL,
  `p_c_qty` int(11) NOT NULL,
  `total` float(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`d_id`, `order_id`, `p_id`, `p_name`, `p_c_qty`, `total`, `order_date`) VALUES
(1, 1, 48, 'แหวน Biker Z1 clear', 3, 4882.00, '2018-10-12 10:16:37'),
(7, 7, 51, 'แหวน Biker Z1 clear', 1, 1665.00, '2018-10-12 10:16:37'),
(8, 10, 49, 'แหวน Biker Z1 clear', 1, 1665.00, '2018-10-12 10:16:37'),
(9, 11, 55, 'แหวน Biker Z1 clear', 1, 1665.00, '2018-10-12 10:16:37'),
(10, 12, 56, 'PROMISE RING EMERALD BAND', 1, 34368.00, '2018-10-12 10:16:37'),
(11, 12, 49, 'แหวน Biker Z1 clear', 6, 9990.00, '2018-10-12 10:16:37'),
(12, 12, 51, 'แหวน Biker Z1 clear', 4, 6660.00, '2018-10-12 10:16:37'),
(13, 12, 52, 'แหวน Biker Z1 clear', 2, 3330.00, '2018-10-12 10:16:37'),
(14, 13, 51, 'แหวน Biker Z1 clear', 1, 1696.00, '2018-10-12 10:16:37'),
(15, 13, 53, 'แหวน Biker Z1 clear', 3, 5088.00, '2018-10-12 10:16:37'),
(16, 14, 50, 'แหวน Biker Z1 clear', 1, 1696.00, '2018-10-12 10:16:37'),
(17, 15, 52, 'แหวน Biker Z1 clear', 1, 1696.04, '2018-10-12 10:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detial` text NOT NULL,
  `p_price` float(10,2) NOT NULL,
  `p_unit` varchar(20) NOT NULL,
  `p_img1` varchar(200) NOT NULL,
  `p_img2` varchar(100) DEFAULT NULL,
  `p_view` int(11) NOT NULL,
  `p_qty` int(11) DEFAULT NULL,
  `p_ems` int(50) NOT NULL,
  `p_size` varchar(50) NOT NULL,
  `promo` varchar(50) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `t_id`, `p_name`, `p_detial`, `p_price`, `p_unit`, `p_img1`, `p_img2`, `p_view`, `p_qty`, `p_ems`, `p_size`, `promo`, `date_save`) VALUES
(54, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 12, 12, 35, 'm', '', '2018-09-11 17:00:00'),
(53, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 9, 9, 35, 'm', '', '2018-09-11 17:00:00'),
(52, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 20, 7, 35, 'm', '', '2018-09-11 17:00:00'),
(51, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 29, 6, 35, 'm', '', '2018-09-11 17:00:00'),
(49, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 14, 1, 35, 'm', '', '2018-09-11 17:00:00'),
(50, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 10, 11, 35, 'm', '', '2018-09-11 17:00:00'),
(48, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 19, 9, 35, 'm', '', '2018-09-11 17:00:00'),
(57, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 19, 9, 35, 'm', '', '2018-09-11 17:00:00'),
(58, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 19, 9, 35, 'm', '', '2018-09-11 17:00:00'),
(59, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 24, 9, 35, 'm', '', '2018-09-11 17:00:00'),
(60, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 19, 9, 35, 'm', '', '2018-09-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`t_id`, `t_name`) VALUES
(8, 'กระเป๋าหนังสะพายข้าง'),
(9, 'กระเป๋าหนังคาดอก-คาดเอว'),
(10, 'กระเป๋าสตางค์-Wallet'),
(11, 'กระเป๋าเดินทาง'),
(12, 'เสื้อแจ็คเก็ตหนัง'),
(13, 'เข็มขัดหนังแท้'),
(14, 'รองเท้าหนังแท้'),
(15, 'ต่างหูเพชร'),
(16, 'แหวนเพชร');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  MODIFY `carousel_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
