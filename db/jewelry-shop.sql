-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 10:56 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

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
(1, '1', '1', 'admin', 'add', '0234567890', 'e-mail@admin.com', 'admin ', '2017-08-30 01:57:41'),
(10, 'sab', '1234', 'sab', 'sab', '0902020202', 'sabf@hotmail.com', 'superadmin', '2018-08-30 13:05:35');

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
(19, 'สมพร', '9/7', '0837818704', 'sabbb', 'ts5814', 'bomme5547@gmail.com', 'user', '2ddgmgkuals0tjavq78hrnpps3', 'yes', '2018-10-14 07:19:05'),
(20, 'วุฒิพง', '9/8 บางแค', '0839459557', 'wutipok', 'ts1234', 'jokerfunha@gmail.com', 'user', 'raarh2f2j2llmopeld83s4o390', 'yes', '2018-10-18 09:48:10');

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
  `phone` varchar(10) NOT NULL,
  `order_status` int(1) NOT NULL,
  `pay_slip` varchar(200) DEFAULT NULL,
  `b_name` varchar(100) DEFAULT NULL,
  `b_number` varchar(200) DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `pay_amount` float(10,2) DEFAULT NULL,
  `postcode` varchar(30) DEFAULT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `mem_id`, `name`, `address`, `email`, `phone`, `order_status`, `pay_slip`, `b_name`, `b_number`, `pay_date`, `pay_amount`, `postcode`, `order_date`) VALUES
(0000000021, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', '3333333333', 4, '136044220020181013_131022.jpg', 'ไทยพาณิชย์', '445-354-3232-212', '2018-10-13', 5.00, '', '2018-10-13 12:34:28'),
(0000000022, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', '3333333333', 4, '92991128720181013_140236.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-10-13', 1.00, '', '2018-10-13 14:02:10'),
(0000000023, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', '3333333333', 4, '62943559120181013_140551.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-10-13', 1.00, '', '2018-10-13 14:05:37'),
(0000000024, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', '3333333333', 4, '174420056120181013_141054.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-10-13', 1.00, '', '2018-10-13 14:10:32'),
(0000000025, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', '3333333333', 4, '179623617120181013_142449.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-10-13', 1.00, '', '2018-10-13 14:24:33'),
(0000000026, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', '3333333333', 4, '23895720181013_142600.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-10-13', 1.00, '', '2018-10-13 14:25:51'),
(0000000027, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', '3333333333', 4, '170011015020181013_143004.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-10-13', 1.00, '', '2018-10-13 14:29:50'),
(0000000028, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', '3333333333', 4, '70400305720181013_143056.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-10-13', 1664.92, '', '2018-10-13 14:30:45'),
(0000000029, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', '3333333333', 4, '169380801820181013_144426.jpg', 'ไทยพาณิชย์', '445-354-3232-212', '2018-10-13', 1664.92, '', '2018-10-13 14:33:16'),
(0000000030, 17, 'ddd gggg', 'ddd 633 dfdf   ', '23.noop@gmail.com', '3333333333', 4, '', '', '', '0000-00-00', 0.00, '', '2018-10-13 14:58:07'),
(0000000031, 19, 'สมพร', '9/7', 'bomme5547@gmail.com', '0837818704', 4, '', '', '', '0000-00-00', 0.00, '', '2018-10-14 14:22:56'),
(0000000032, 19, 'สมพร', '9/7', 'bomme5547@gmail.com', '0837818704', 4, '177735407320181014_142618.jpg', 'กสิกรไทย', '543-1534-54634-212', '2018-10-14', 1664.92, '55165', '2018-10-14 14:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `d_id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `order_id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `p_id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `p_name` varchar(200) DEFAULT NULL,
  `p_c_qty` int(11) NOT NULL,
  `total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`d_id`, `order_id`, `p_id`, `p_name`, `p_c_qty`, `total`) VALUES
(00000000020, 00000000021, 00000000054, 'แหวน Biker Z1 clear', 2, 3329.84),
(00000000021, 00000000021, 00000000058, 'แหวน Biker Z1 clear', 1, 1664.92),
(00000000022, 00000000022, 00000000053, 'แหวน Biker Z1 clear', 1, 1664.92),
(00000000023, 00000000023, 00000000059, 'แหวน Biker Z1 clear', 1, 1664.92),
(00000000024, 00000000024, 00000000051, 'แหวน Biker Z1 clear', 1, 1664.92),
(00000000025, 00000000025, 00000000059, 'แหวน Biker Z1 clear', 1, 1664.92),
(00000000026, 00000000026, 00000000052, 'แหวน Biker Z1 clear', 1, 1664.92),
(00000000027, 00000000027, 00000000057, 'แหวน Biker Z1 clear', 1, 1664.92),
(00000000028, 00000000028, 00000000058, 'แหวน Biker Z1 clear', 1, 1664.92),
(00000000029, 00000000029, 00000000059, 'แหวน Biker Z1 clear', 1, 1664.92),
(00000000030, 00000000030, 00000000048, 'แหวน Biker Z1 clear', 1, 1664.92),
(00000000031, 00000000031, 00000000049, 'แหวน Biker Z1 clear', 1, 1664.92),
(00000000032, 00000000032, 00000000052, 'แหวน Biker Z1 clear', 1, 1664.92);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) UNSIGNED ZEROFILL NOT NULL,
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
(00000000062, 13, 'แหวนทองทรงบาง', '<p>แหวนทอง24Kทรงบาง</p>\r\n\r\n<p>ประดับ เพชร CZ 3A ขนาด37</p>\r\n', 2900.00, 'ชิ้น', 'img1184314084320181016_232747.jpg', '', 1, 10, 45, '37', '3200', '2018-10-16 16:27:47'),
(00000000063, 13, 'แหวนทองเรียบ', '<p>แหวบททอง แบบเรียบ</p>\r\n\r\n<p>ประดับ เพชร CZ 3A ทอง 24 K&nbsp;</p>\r\n\r\n<p>สีโรสโกล</p>\r\n', 2700.00, 'ชิ้น', 'img172248184620181016_233323.jpg', '', 0, 10, 45, '35', '3100', '2018-10-16 16:33:23'),
(00000000064, 13, 'แหวนแมลงปอ', '<p>แหวนแมลงปอ&nbsp;</p>\r\n\r\n<p>ประดับเพชร CZ 3A&nbsp; ทอง 24K&nbsp;</p>\r\n', 3100.00, 'ชิ้น', 'img1212004315820181017_000134.jpg', '', 0, 5, 45, '35', '3900', '2018-10-16 16:38:14'),
(00000000065, 13, 'แหวนรูปหัวใจ', '<p>แหวนรูปหัวใจ&nbsp;</p>\r\n\r\n<p>ประดับ เพชร CZ 3A ทอง 24 K</p>\r\n', 2500.00, 'ชิ้น', 'img1184584615320181017_000101.jpg', '', 0, 15, 45, '35', '3000', '2018-10-16 17:01:01'),
(00000000066, 13, 'แหวนรูปหัวใจคู้', '<p>แหวนรูปหัวใจคู้&nbsp;&nbsp;</p>\r\n\r\n<p>ประดับ เพชรCZ 3A&nbsp; ทอง24K</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3000.00, 'ชิ้น', 'img1136840694020181017_171238.jpg', '', 0, 10, 45, '35', '3300', '2018-10-17 10:12:38'),
(00000000067, 15, 'ต่างหูทองรูปดอกไม้', '<p>ต่างหูทองรูปดอกไม้</p>\r\n\r\n<p>ประดับ พลอย เทียม 3สี แดง เขียว น้ำเงิน</p>\r\n', 1500.00, 'คู่', 'img1121343003020181017_172057.jpg', '', 0, 10, 45, 'free', '2000', '2018-10-17 10:20:57'),
(00000000068, 15, 'ต่างหูทองประดับทับทิม', '<p>ต่างหูทองประดับทับทิม</p>\r\n\r\n<p>ทับทิม VS ขนาด 10 mm. ประดับ เพชรcz 3a 12เม็ต</p>\r\n', 3500.00, 'คู่', 'img182614674020181017_173157.jpg', '', 4, 9, 45, 'free', '3500', '2018-10-17 10:31:57'),
(00000000069, 15, 'ต่างหูรูปหยดน้ำ', '<p>ต่างหูรูปหยดน้ำ</p>\r\n\r\n<p>ประดับ&nbsp;คริสตัล&nbsp;ล้อมเพชร CZ 3A</p>\r\n', 3500.00, 'ชิ้น', 'img119675210920181017_175205.jpg', '', 0, 5, 150, 'free', '3600', '2018-10-17 10:52:05'),
(00000000070, 13, 'แหวนคู้ล้อมเพชร', '<p>แหวนคู้ล้อมเพชร&nbsp;</p>\r\n\r\n<p>ประดับ CZ 3A&nbsp; ทอง 19K&nbsp;</p>\r\n', 3500.00, 'คู่', 'img1128836429820181018_225723.jpg', '', 0, 3, 45, '35/37', '3500', '2018-10-18 15:57:23'),
(00000000071, 18, 'สร้อย+จี้ไข่มุก', '<p>สร้อยเงิน + จี้ไข่มุกสีชมพู +ไข่มุกสีดำ</p>\r\n\r\n<p>ประดับ CZ 3A&nbsp;</p>\r\n', 2990.00, 'ชิ้น', 'img1103925084920181018_231706.jpg', '', 0, 5, 45, 'free', '3200', '2018-10-18 16:17:06'),
(00000000072, 18, 'สร้อย+จี้รูปโบ', '<p>สร้อย+ จี้รูปโบ</p>\r\n\r\n<p>ประดับ เพชร CZ 3A</p>\r\n', 1500.00, 'ชิ้น', 'img176126410420181018_232513.jpg', '', 1, 20, 45, 'free', '1900', '2018-10-18 16:25:13'),
(00000000060, 13, 'แหวน Biker Z1 clear', '<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nหมวกหนังดำ หนาอย่างดี ปลอดภัย หุ้มอย่างดี<br />\r\nสินค้าพรีเมียม โครตตตต เท่ !!!! หมวกหนังมีใบเดียวเท่านั้น!!!</p>\r\n\r\n<p><strong>หมวกกันน็อคหนัง Biker Z1 clear</strong><br />\r\nใครโชคดีจองเร็ว จัดไปครับ ดีไซน์โครตหล่อ<br />\r\n<strong>แถม หน้ากาก Biker Z1 และ แว่นกันลม</strong></p>\r\n\r\n<p><strong>ราคาพิเศษ 15,900บาท&nbsp; จากปกติ 21,000บ ของใหม่เอี่ยม มือหนึ่ง !!&nbsp;</strong><br />\r\nสินค้าพรีเมียม ของดี มีจำนวนจำกัด<br />\r\nโปรโมชั่นราคาพิเศษ ส่งฟรี&nbsp;ติดต่อมาได้เลยครับใบสุดท้าย</p>\r\n', 1521.00, 'วง', 'img1204634697820180910_200745.jpg', 'img2204634697820180910_200745.jpg', 21, 8, 35, 'm', '', '2018-09-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `t_id` int(11) NOT NULL,
  `t_type` varchar(11) NOT NULL,
  `t_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`t_id`, `t_type`, `t_name`) VALUES
(13, 'RD', 'แหวนเพชร'),
(15, 'ER', 'ต่างหู'),
(18, 'NE', 'สร้อยเพรช');

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
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `d_id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
