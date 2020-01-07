-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 08:18 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twinkris`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `c_surename` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `c_gender` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `c_address` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `c_phone` varchar(10) DEFAULT NULL,
  `c_email` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_surename`, `c_gender`, `c_address`, `c_phone`, `c_email`) VALUES
(12, 'เฟาซียะฮฺ', 'เจะโก๊ะ', 'ผู้หญิง', '24/1', '0937956859', '5920610105@psu.ac.th'),
(14, 'ฮาฟีซา', 'เลาะมาอะ', 'ผู้หญิง', '566', '0937956859', '5920610026@psu.ac.th'),
(15, 'ฮาฟีซา', 'เจะโก๊ะ', 'ผู้ชาย', '566', '0937956859', '5920610026@psu.ac.th');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `deli_id` int(10) NOT NULL,
  `pay_id` int(10) DEFAULT NULL,
  `deli_date` date DEFAULT NULL,
  `e_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Error reading data for table twinkris.delivery: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `twinkris`.`delivery`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(10) NOT NULL,
  `e_name` varchar(50) DEFAULT NULL,
  `e_surename` varchar(50) DEFAULT NULL,
  `e_gender` varchar(10) DEFAULT NULL,
  `e_address` varchar(100) DEFAULT NULL,
  `e_phone` varchar(10) DEFAULT NULL,
  `e_email` varchar(50) DEFAULT NULL,
  `e_rank` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `e_surename`, `e_gender`, `e_address`, `e_phone`, `e_email`, `e_rank`) VALUES
(1, ' ยาวาเฮ ', ' บือเล็ก ', 'ผู้หญิง', ' 841 ', ' 093795685', '5920610005@psu.ac.th', 'ฝ่ายผลิต'),
(2, 'นิลยา', 'โส๊ะอ้น', 'ผู้หญิง', '842', '0937956859', '5920610002@psu.ac.th', 'ฝ่ายผลิต'),
(3, 'เปอะยู', 'ดาโอ๊ะ', 'ผู้ชาย', '84/25', '0937956859', '5920610002@psu.ac.th', 'ฝ่ายขนส่ง'),
(4, 'แวมะ', 'โรตี', 'ผู้ชาย', '26/4', '0937956859', '5920610002@psu.ac.th', 'ฝ่ายผลิต');

-- --------------------------------------------------------

--
-- Table structure for table `fix`
--

CREATE TABLE `fix` (
  `fix_id` int(10) NOT NULL,
  `mechine_id` int(10) DEFAULT NULL,
  `e_id` int(10) DEFAULT NULL,
  `fix_date` date DEFAULT NULL,
  `fix_detail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fix`
--

INSERT INTO `fix` (`fix_id`, `mechine_id`, `e_id`, `fix_date`, `fix_detail`) VALUES
(1, 0, 1, '0000-00-00', ''),
(2, 0, 1, '0000-00-00', ''),
(3, 0, 2, '2019-11-04', ''),
(4, 0, 1, '2019-11-07', 'ก็เครื่องมันแฮง'),
(5, 1, 1, '2019-11-01', 'เสีย');

-- --------------------------------------------------------

--
-- Table structure for table `graph`
--

CREATE TABLE `graph` (
  `g_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `datesave` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `manufacture_id` int(10) NOT NULL,
  `e_id` int(10) DEFAULT NULL,
  `product_id` int(10) DEFAULT NULL,
  `manufacture_amout` int(4) DEFAULT NULL,
  `manufacture_date` date DEFAULT NULL,
  `manufacture_date2` date DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'กำลังผลิต'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`manufacture_id`, `e_id`, `product_id`, `manufacture_amout`, `manufacture_date`, `manufacture_date2`, `status`) VALUES
(26, 2, 1, 2, '2019-11-10', '2019-11-10', 'ผลิตเสร็จสิ้น'),
(27, 2, 2, 2, '2019-11-10', '2019-11-10', 'ผลิตเสร็จสิ้น'),
(29, 1, 1, 6, '2019-11-10', '2019-11-10', 'ผลิตเสร็จสิ้น'),
(30, 1, 3, 10, '2019-10-09', '2019-11-13', 'ผลิตเสร็จสิ้น'),
(31, 2, 3, 20, '2019-10-10', '2019-10-30', 'กำลังผลิต'),
(32, 1, 1, 20, '2019-11-14', '2020-11-14', 'ผลิตเสร็จสิ้น');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `material_id` int(10) NOT NULL,
  `material_name` varchar(50) DEFAULT NULL,
  `material_amout` int(4) DEFAULT NULL,
  `type_rm` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`material_id`, `material_name`, `material_amout`, `type_rm`) VALUES
(2, 'น้ำตาล', 110, 'กิโลกรัม'),
(3, 'น้ำ', 130, 'มิลลิตร'),
(4, 'แป้งข้าวเจ้า', 500, 'กิโลกรัม'),
(5, 'สีแดงปองโช', 110, 'กิโลกรัม'),
(6, 'สีส้มแดง', 100, 'กิโลกรัม'),
(7, 'หัวน้ำส้ม', 505, 'กิโลกรัม'),
(8, 'สารกันบูด', 100, 'กิโลกรัม');

-- --------------------------------------------------------

--
-- Table structure for table `mechine`
--

CREATE TABLE `mechine` (
  `mechine_id` int(10) NOT NULL,
  `mechine_name` varchar(50) DEFAULT NULL,
  `mechine_type` varchar(50) DEFAULT NULL,
  `mechine_amout` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Error reading data for table twinkris.mechine: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `twinkris`.`mechine`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `mnf_dt`
--

CREATE TABLE `mnf_dt` (
  `mnf_dt_id` int(10) NOT NULL,
  `manufacture_id` int(10) NOT NULL,
  `material_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mnf_dt`
--

INSERT INTO `mnf_dt` (`mnf_dt_id`, `manufacture_id`, `material_id`, `amount`) VALUES
(32, 26, 2, 59),
(33, 26, 3, 112),
(34, 27, 2, 21),
(35, 27, 3, 50),
(38, 29, 2, 20),
(39, 30, 2, 10),
(40, 30, 3, 10),
(41, 31, 2, 10),
(42, 32, 4, 50),
(43, 32, 7, 50),
(44, 32, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `odrer_matr`
--

CREATE TABLE `odrer_matr` (
  `odrer_matr_id` int(10) NOT NULL,
  `e_id` int(10) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `date_matr` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'กำลังซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `odrer_matr`
--

INSERT INTO `odrer_matr` (`odrer_matr_id`, `e_id`, `supplier_id`, `date_matr`, `status`) VALUES
(7, 1, 1, '2019-11-03', 'ได้รับของแล้ว'),
(8, 2, 2, '2019-11-03', 'ได้รับของแล้ว'),
(9, 2, 1, '2019-11-04', 'ได้รับของแล้ว'),
(10, 1, 2, '2019-11-05', 'ได้รับของแล้ว'),
(11, 0, 0, '2019-11-08', 'กำลังซื้อ'),
(12, 1, 0, '2019-11-06', 'กำลังซื้อ'),
(13, 2, 1, '2019-11-09', 'กำลังซื้อ'),
(14, 2, 1, '2019-11-09', 'กำลังซื้อ'),
(15, 1, 1, '2019-10-10', 'กำลังซื้อ'),
(16, 2, 1, '2019-10-24', 'ได้รับของแล้ว'),
(17, 2, 2, '0000-00-00', ''),
(18, 2, 1, '2019-11-14', 'ได้รับของแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `odrer_matr_datail`
--

CREATE TABLE `odrer_matr_datail` (
  `order_matr_datail_id` int(10) NOT NULL,
  `odrer_matr_id` int(10) NOT NULL,
  `material_id` int(10) NOT NULL,
  `amuont` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `odrer_matr_datail`
--

INSERT INTO `odrer_matr_datail` (`order_matr_datail_id`, `odrer_matr_id`, `material_id`, `amuont`, `price`) VALUES
(1, 0, 1, 2, 2),
(2, 0, 1, 2, 2),
(3, 0, 2, 2, 3),
(4, 0, 1, 22, 33),
(5, 6, 1, 1, 1),
(6, 7, 1, 1, 1),
(7, 7, 2, 1, 1),
(8, 8, 2, 10, 25),
(9, 9, 2, 100, 100),
(10, 10, 2, 122, 100),
(11, 11, 1, 100, 20),
(12, 13, 2, 11, 12),
(13, 14, 3, 10, 25),
(14, 15, 3, 20, 10),
(15, 16, 2, 50, 25),
(16, 16, 3, 100, 10),
(17, 17, 4, 10, 400),
(18, 17, 5, 10, 200),
(19, 18, 5, 10, 500),
(20, 18, 7, 5, 100);

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `pay_id` int(10) NOT NULL,
  `sale_id` int(10) DEFAULT NULL,
  `date_pay` date DEFAULT NULL,
  `p_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`pay_id`, `sale_id`, `date_pay`, `p_img`) VALUES
(1, 2, '2019-11-05', '07.jpg'),
(2, 3, '2019-11-13', '1501176612_4689890131354.jpg'),
(3, 5, '2019-11-14', '07.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prdsales`
--

CREATE TABLE `prdsales` (
  `s_id` int(11) NOT NULL,
  `totals` float(10,2) NOT NULL,
  `datesave` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prdsales`
--

INSERT INTO `prdsales` (`s_id`, `totals`, `datesave`) VALUES
(1, 22.00, '2018-06-13'),
(3, 33.00, '2016-06-13'),
(4, 111.00, '2017-06-30'),
(5, 90.00, '2017-07-15'),
(6, 30000.00, '2018-01-05'),
(7, 200000.00, '2017-06-16'),
(8, 25500.00, '2017-06-07'),
(9, 4800.00, '2017-06-29'),
(10, 9999.00, '2017-06-16'),
(11, 5200.00, '2017-06-27'),
(12, 100000.00, '2016-07-03'),
(13, 50000.00, '2018-01-10'),
(14, 8500.00, '2018-01-09'),
(15, 70000.00, '2015-01-01'),
(16, 98000.00, '2015-01-01'),
(17, 50000.00, '2019-01-31'),
(18, 20000.00, '2019-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_img` varchar(50) DEFAULT NULL,
  `product_amout` int(4) DEFAULT NULL,
  `product_price` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_img`, `product_amout`, `product_price`) VALUES
(1, 'น้ำส้มสายชูเทียม           ', '07.jpg', 81, 25),
(2, 'น้ำส้มสายชูเทียม    ', '07.jpg', 47, 50),
(3, 'สีแดงผสมอาหาร ', '07.jpg', 46, 25),
(4, 'สีแดงผสมอาหาร    ', '07.jpg', 50, 50),
(5, 'สีส้มผสมอาหาร ', '07.jpg', 60, 25),
(6, 'สีส้มผสมอาหาร  ', '07.jpg', 50, 50),
(7, 'น้ำเกลือปรุงรส ', '07.jpg', 40, 25),
(8, 'น้ำเกลือปรุงรส  ', '07.jpg', 75, 50);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwd` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `passwd`) VALUES
('xxx', 'sarridah-12@hotmail.com', '202cb962ac5'),
('admin', '5920610105@psu.ac.th', '81dc9bdb52d');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id_salary` int(5) NOT NULL,
  `e_id` int(10) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `count_salary` int(2) DEFAULT NULL,
  `amount_salary` int(4) DEFAULT NULL,
  `sum_salary` int(5) DEFAULT NULL,
  `date_salary` date DEFAULT NULL,
  `state_salary` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id_salary`, `e_id`, `start_date`, `count_salary`, `amount_salary`, `sum_salary`, `date_salary`, `state_salary`) VALUES
(3, 1, '0000-00-00', 0, 0, 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `sale_date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'ยังไม่ชำระ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id`, `c_id`, `sale_date`, `status`) VALUES
(1, 12, '2019-11-12', 'ชำระแล้ว'),
(2, 12, '2019-11-11', 'ยังไม่ชำระ'),
(3, 14, '2019-10-30', 'ชำระแล้ว'),
(4, 14, '2019-11-14', 'ยังไม่ชำระ'),
(5, 15, '0000-00-00', 'ยังไม่ชำระ');

-- --------------------------------------------------------

--
-- Table structure for table `sale_detail`
--

CREATE TABLE `sale_detail` (
  `sale_detail_id` int(10) NOT NULL,
  `sale_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `amount` int(6) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale_detail`
--

INSERT INTO `sale_detail` (`sale_detail_id`, `sale_id`, `product_id`, `amount`, `price`) VALUES
(1, 1, 1, 4, 5),
(2, 2, 3, 2, 100),
(3, 3, 1, 5, 25),
(4, 3, 2, 5, 50),
(5, 4, 1, 10, 25),
(6, 4, 2, 10, 50),
(7, 5, 2, 10, 50),
(8, 5, 3, 10, 25);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(10) NOT NULL,
  `supplier_name` varchar(30) DEFAULT NULL,
  `supplier_address` varchar(100) DEFAULT NULL,
  `supplier_phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_phone`) VALUES
(1, 'กะยะห์   ', ' 265', '0937956859'),
(2, 'กะเนะห์', '2586', '0937956859');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income`
--

CREATE TABLE `tbl_income` (
  `detail` text NOT NULL,
  `amount` float(10,2) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เงินได้';

--
-- Dumping data for table `tbl_income`
--

INSERT INTO `tbl_income` (`detail`, `amount`, `datesave`) VALUES
('ขายน้ำส้มสายชู', 500.00, '2019-11-11 02:58:38'),
('ขายน้ำส้มสายชู', 500.00, '2019-11-14 04:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `work_id` int(10) NOT NULL,
  `start_date` date DEFAULT NULL,
  `e_id` int(10) DEFAULT NULL,
  `work_state` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`work_id`, `start_date`, `e_id`, `work_state`) VALUES
(15, '2019-10-16', 1, 'เข้างาน'),
(16, '2019-10-22', 2, 'เข้างาน'),
(17, '2019-10-24', 2, 'เข้างาน'),
(18, '2019-10-31', 1, 'เข้างาน'),
(19, '2019-10-31', 1, 'เข้างาน'),
(20, '2019-10-24', 2, 'เข้างาน'),
(21, '2019-10-26', 1, 'เข้างาน'),
(22, '2019-11-06', 2, 'ไม่เข้างาน'),
(23, '2019-11-06', 1, 'ไม่เข้างาน'),
(24, '2019-11-07', 1, 'ไม่เข้างาน'),
(25, '2019-11-13', 3, 'เข้างาน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`deli_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `fix`
--
ALTER TABLE `fix`
  ADD PRIMARY KEY (`fix_id`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `mechine`
--
ALTER TABLE `mechine`
  ADD PRIMARY KEY (`mechine_id`);

--
-- Indexes for table `mnf_dt`
--
ALTER TABLE `mnf_dt`
  ADD PRIMARY KEY (`mnf_dt_id`);

--
-- Indexes for table `odrer_matr`
--
ALTER TABLE `odrer_matr`
  ADD PRIMARY KEY (`odrer_matr_id`);

--
-- Indexes for table `odrer_matr_datail`
--
ALTER TABLE `odrer_matr_datail`
  ADD PRIMARY KEY (`order_matr_datail_id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `prdsales`
--
ALTER TABLE `prdsales`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id_salary`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `sale_detail`
--
ALTER TABLE `sale_detail`
  ADD PRIMARY KEY (`sale_detail_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `deli_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fix`
--
ALTER TABLE `fix`
  MODIFY `fix_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `manufacture_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `material_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mechine`
--
ALTER TABLE `mechine`
  MODIFY `mechine_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mnf_dt`
--
ALTER TABLE `mnf_dt`
  MODIFY `mnf_dt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `odrer_matr`
--
ALTER TABLE `odrer_matr`
  MODIFY `odrer_matr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `odrer_matr_datail`
--
ALTER TABLE `odrer_matr_datail`
  MODIFY `order_matr_datail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prdsales`
--
ALTER TABLE `prdsales`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id_salary` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale_detail`
--
ALTER TABLE `sale_detail`
  MODIFY `sale_detail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `work_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
