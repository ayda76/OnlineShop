-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 10:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoptest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(16) NOT NULL,
  `password_admin` varchar(16) NOT NULL,
  `phonenumber_admin` varchar(11) NOT NULL,
  `codm_admin` int(11) DEFAULT NULL,
  `address_admin` varchar(200) DEFAULT NULL,
  `date_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id_admin`, `username_admin`, `password_admin`, `phonenumber_admin`, `codm_admin`, `address_admin`, `date_admin`) VALUES
(1, 'ayda7', '12345', '09142222222', 129000000, 'xxxxxxxxx', '1399/12/1'),
(2, 'fruzan6', '9876', '09143333333', NULL, NULL, '1399/12/1'),
(3, 'saraa1', '7878', '09141111151', NULL, NULL, '1399/12/2'),
(4, 'dariush7', '0909', '09144555555', NULL, NULL, '1399/12/3'),
(12, 'aidaaa', '3434', '09133333335', NULL, NULL, '1399/12/3'),
(13, 'karim', '3333', '09141111155', NULL, NULL, '1399/12/4'),
(14, 'a1', 'aaaa', '09142222277', NULL, NULL, '1400/1/10\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `brand_tbl`
--

CREATE TABLE `brand_tbl` (
  `id_brand` int(11) NOT NULL,
  `name_brand` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_tbl`
--

INSERT INTO `brand_tbl` (`id_brand`, `name_brand`) VALUES
(1, 'sony'),
(2, 'apple'),
(3, 'samsung'),
(4, 'dell'),
(9, 'hp');

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE `cat_tbl` (
  `id_cat` int(11) NOT NULL,
  `name_cat` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`id_cat`, `name_cat`) VALUES
(1, 'لپ تاپ'),
(3, 'تبلت'),
(4, 'باتری لپ تاپ'),
(5, 'شارژر لپ تاپ'),
(6, 'کیبورد'),
(7, 'کابل های رابط'),
(8, 'ماوس'),
(9, 'فلش'),
(11, 'شارژر تبلت');

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbl`
--

CREATE TABLE `comment_tbl` (
  `id_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `matn_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_tbl`
--

INSERT INTO `comment_tbl` (`id_comment`, `id_user`, `id_product`, `matn_comment`) VALUES
(3, 14, 12, 'testtestttttt1'),
(24, 1, 90, 'hhhhhhhhhhhhhhhhhhh'),
(27, 1, 90, 'dddddddddddddddddddddddd'),
(28, 1, 90, 'dddddddddddddddddddddddd'),
(29, 1, 91, 'aaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `fav_tbl`
--

CREATE TABLE `fav_tbl` (
  `id_fav` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fav_tbl`
--

INSERT INTO `fav_tbl` (`id_fav`, `id_user`, `id_product`) VALUES
(27, 1, 12),
(29, 2, 54),
(31, 2, 12),
(32, 5, 13),
(33, 7, 14),
(34, 5, 14),
(35, 1, 14),
(36, 7, 14),
(41, 5, 6),
(51, 5, 90),
(53, 5, 91),
(54, 5, 94),
(55, 1, 101),
(57, 1, 96),
(97, 1, 93),
(126, 1, 98),
(131, 1, 91);

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_order` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`id_order`, `id_product`, `id_user`, `date_order`) VALUES
(1, 91, 1, '1400/1/10'),
(3, 12, 1, '1400/1/10'),
(4, 12, 1, '1400/1/10'),
(5, 91, 1, '1400/1/10'),
(6, 91, 1, '1400/1/10'),
(7, 91, 1, '1400/1/10'),
(8, 94, 5, '1400/1/11'),
(9, 12, 5, '1400/1/11'),
(10, 90, 5, '1400/1/11'),
(11, 90, 5, '1400/1/11'),
(12, 90, 5, '1400/1/11'),
(13, 90, 5, '1400/1/11'),
(14, 12, 5, '1400/1/11'),
(15, 12, 5, '1400/1/11'),
(16, 12, 5, '1400/1/11'),
(17, 91, 1, '1400/1/11'),
(18, 94, 1, '1400/2/5'),
(19, 12, 1, '1400/2/5'),
(20, 94, 1, '1400/2/6');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `id_product` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `img_product` text NOT NULL,
  `price_product` varchar(10) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `matn_product` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `discount_product` varchar(7) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `name_product` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `id_admin` int(11) NOT NULL,
  `viewcount` int(11) NOT NULL DEFAULT 0,
  `stock_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`id_product`, `id_brand`, `id_cat`, `img_product`, `price_product`, `matn_product`, `discount_product`, `name_product`, `id_admin`, `viewcount`, `stock_product`) VALUES
(6, 3, 3, 'imgs/16147845041209593.jpg', '100000', 'iiiii,iiii,llll,lll', '7', 'namee', 1, 13, 8),
(12, 1, 1, 'imgs/1619193526computer-2982270_1280.jpg', '1000000', 'Intel,یک ترابایت حافظه داخلی,15.6 اینچ,4 گیگابایت رم,Full HD| 1920 x1080,فاقد سیستم‌عامل', '5', 'لپ تاپ 15 اینچی  مدل VivoBook', 1, 54, 42),
(13, 3, 1, 'imgs/16147845041209593.jpg', '10000000', 'dd,kk,pp', '10', 'abcd', 1, 10, 0),
(14, 4, 4, 'imgs/161478456909DU4K.jpg', '5000000', 'jkjkjkjjkj', '4', 'jjjjkkkk', 1, 1, 0),
(15, 2, 9, 'imgs/1614784674qa1xoy.jpg', '100000', 'iii,hhh', '3', 'opopop', 1, 0, 0),
(54, 3, 11, 'imgs/16148694781209593.jpg', '33333', 'ff,kk,kkk', '7', 'sssssss', 1, 12, 0),
(90, 1, 1, 'imgs/1616584676laptop-1483974_1280.jpg', '20000000', 'aaaaaaaaa,bbbbb,ccccc', '9', 'laptop 1', 1, 114, 18),
(91, 1, 1, 'imgs/1616587717computer-2982270_1280.jpg', '30000000', 'oooooo,nnnnn,mmmm', '4', 'laptop 2', 1, 104, 6),
(92, 1, 1, 'imgs/1616587813laptop-336369_1280.jpg', '30000000', 'hhhhhh,kkkk,cc', '10', 'laptop 3', 1, 2, 0),
(93, 1, 1, 'imgs/1616587914home-office-1867761_1280.jpg', '60000000', 'eeee,nnnnnnnnnnn', '3', 'laptop 4', 1, 31, 0),
(94, 1, 1, 'imgs/1616588034home-office-1867761_1280.jpg', '300000000', 'ssssssssssss,mmmmm,ddddddddddd', '4', 'laptop 5', 1, 25, 18),
(95, 1, 1, 'imgs/1616588092home-office-1867761_1280.jpg', '70000000', 'jjjjjjjjjjjjjjjjjjjjj,kkkkkkkkkkk,ccccccc', '5', 'laptop 6', 1, 0, 0),
(96, 1, 1, 'imgs/1616653995home-office-1867761_1280.jpg', '200000000', 'aaaaaaaaaaaa,bbbbbbbbbbbbbb,cccccccccccc,dddddddddddddddddd,eeeeeeeeeeeee,ffffffffffffff', '8', 'laptop 7', 1, 5, 99),
(97, 3, 1, 'imgs/1616909734computer-2982270_1280.jpg', '200000000', 'aaaaaaaaa,bbbbbb,cccccc,ddddd,eee', '6', 'laptop 8', 1, 1, 19),
(98, 3, 1, 'imgs/1616914154workplace-2303851_1280.jpg', '3000000', 'wwwww,eeeeeeeeeeeeeee,rrrrrrrrrrrr', '5', 'laptop 9', 1, 3, 20),
(100, 3, 3, 'imgs/1616915859laptop-1483974_1280.jpg', '200000000', 'jjjjjjjjjjj,kkkkkkkkk,vvvvvvvvvvvvvvv,ccccccccccc', '7', 'tablet2', 1, 0, 20),
(101, 1, 3, 'imgs/1616947477computer-2982270_1280.jpg', '100000000', 'vvvvvvvv,ccccccccc,nn,lll', '7', 'tablet1', 1, 2, 9),
(102, 1, 3, 'imgs/1616947948computer-2982270_1280.jpg', '100000000', 'vvvvvvvv,ccccccccc,nn,lll', '7', 'tablet1', 1, 0, 9),
(103, 3, 3, 'imgs/1619419087home-office-1867761_1280.jpg', '6000000000', 'sssssssss,kkkkkkkkkk,nnnnnnnnnnn,bbbbbbbbb', '4', 'tablet333333', 1, 4, 30);

-- --------------------------------------------------------

--
-- Table structure for table `sabad_tbl`
--

CREATE TABLE `sabad_tbl` (
  `id_sabad` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `count_sabad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sabad_tbl`
--

INSERT INTO `sabad_tbl` (`id_sabad`, `id_user`, `id_product`, `count_sabad`) VALUES
(36, 1, 97, 1),
(49, 5, 93, 3),
(53, 1, 101, 1),
(54, 1, 98, 2),
(55, 1, 12, 2),
(56, 1, 91, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_tbl`
--

CREATE TABLE `shop_tbl` (
  `id_shop` int(11) NOT NULL,
  `telegram_shop` varchar(200) NOT NULL,
  `whatsapp_shop` varchar(200) NOT NULL,
  `phone_shop` varchar(100) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `instagram_shop` varchar(200) NOT NULL,
  `logo_shop` text NOT NULL,
  `name_shop` varchar(100) NOT NULL,
  `address_shop` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_tbl`
--

INSERT INTO `shop_tbl` (`id_shop`, `telegram_shop`, `whatsapp_shop`, `phone_shop`, `id_admin`, `instagram_shop`, `logo_shop`, `name_shop`, `address_shop`) VALUES
(1, 'www.telegram.com', '09147777777', '04135555555', 1, 'www.instagram.com', 'imgs/16168717071190041.jpg', 'shopshop', 'xxxxxxxxxxxx');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id_user` int(11) NOT NULL,
  `name_user` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `number_user` varchar(11) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `email_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `codm_user` varchar(10) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `bankcart_user` varchar(16) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `password_user` varchar(16) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `address_user` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `username_user` varchar(16) NOT NULL,
  `date_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id_user`, `name_user`, `number_user`, `email_user`, `codm_user`, `bankcart_user`, `password_user`, `address_user`, `username_user`, `date_user`) VALUES
(1, 'alikarimi', '09147777779', 'aaaa@yahoo.com', '1234567890', '1234567890123456', '12345', 'qqqqqqqqqqqqqqqqqqqqqqqqqqq', 'ali12', '1399/12/12'),
(2, 'nasim', '09144444444', NULL, NULL, NULL, '1234567890', NULL, 'nasiim', '1399/12/5'),
(5, 'elnaz', '09148888888', NULL, NULL, NULL, '11111', NULL, 'elnazz', '1399/12/8'),
(7, 'nazi', '09145555555', NULL, NULL, NULL, '55555', NULL, 'nazii', '1399/12/8'),
(11, 'sara', '9145555555', NULL, NULL, NULL, '121212', NULL, 'saraaa', '1399/12/5'),
(12, 'reza', '914812765', NULL, NULL, NULL, '131313', NULL, 'rezaa', '1399/12/7'),
(14, 'a1', '9133333333', NULL, NULL, NULL, '33333', NULL, 'aa1', '1399/12/5'),
(15, 'a3', '9148888880', NULL, NULL, NULL, 'a3a3', NULL, 'a33', '1399/12/9'),
(16, 'a4', '914812763', NULL, NULL, NULL, 'a4a4', NULL, 'aa4', '1399/12/8'),
(17, 'a5', '9148888887', NULL, NULL, NULL, 'a5a5', NULL, 'aa5', '1399/12/7'),
(18, 'a6', '9133333339', NULL, NULL, NULL, 'a6a6', NULL, 'aa6', '1399/12/6'),
(19, 'a7', '9133333377', NULL, NULL, NULL, 'a7a7', NULL, 'aa7', '1399/12/9'),
(20, 'trtryt', '76655444767', NULL, NULL, NULL, '5555555', NULL, 'gggggg', '1399/12/6'),
(21, 'a10', '9141111119', NULL, NULL, NULL, 'a10a10', NULL, 'aa10', '1399/12/5'),
(25, 'a11', '09144444449', NULL, NULL, NULL, '88888', NULL, 'a1a1', '1400/1/5'),
(26, 'شیرین', '9125678789', NULL, NULL, NULL, 'shsh', NULL, 'shirin', '1400/1/22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `phonenumber_admin` (`phonenumber_admin`);

--
-- Indexes for table `brand_tbl`
--
ALTER TABLE `brand_tbl`
  ADD PRIMARY KEY (`id_brand`),
  ADD UNIQUE KEY `name_brand` (`name_brand`) USING HASH;

--
-- Indexes for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_product_2` (`id_product`),
  ADD KEY `id_product` (`id_product`) USING BTREE,
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `fav_tbl`
--
ALTER TABLE `fav_tbl`
  ADD PRIMARY KEY (`id_fav`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_product_2` (`id_product`),
  ADD KEY `id_user` (`id_user`) USING BTREE,
  ADD KEY `id_product` (`id_product`) USING BTREE,
  ADD KEY `id_product_3` (`id_product`) USING BTREE,
  ADD KEY `id_user_3` (`id_user`) USING BTREE;

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_brand_2` (`id_brand`),
  ADD KEY `id_cat_2` (`id_cat`),
  ADD KEY `id_brand_3` (`id_brand`),
  ADD KEY `id_cat_3` (`id_cat`),
  ADD KEY `id_brand_4` (`id_brand`),
  ADD KEY `id_cat_4` (`id_cat`),
  ADD KEY `id_cat` (`id_cat`) USING BTREE,
  ADD KEY `id_brand` (`id_brand`) USING BTREE,
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `sabad_tbl`
--
ALTER TABLE `sabad_tbl`
  ADD PRIMARY KEY (`id_sabad`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `shop_tbl`
--
ALTER TABLE `shop_tbl`
  ADD PRIMARY KEY (`id_shop`),
  ADD UNIQUE KEY `id_shop` (`id_shop`),
  ADD UNIQUE KEY `telegram_shop` (`telegram_shop`),
  ADD UNIQUE KEY `whatsapp_shop` (`whatsapp_shop`),
  ADD UNIQUE KEY `phone_shop` (`phone_shop`),
  ADD UNIQUE KEY `instagram_shop` (`instagram_shop`),
  ADD UNIQUE KEY `name_shop` (`name_shop`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `number_user` (`number_user`),
  ADD UNIQUE KEY `codm_user` (`codm_user`),
  ADD UNIQUE KEY `email_user` (`email_user`),
  ADD UNIQUE KEY `bankcart_user` (`bankcart_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `brand_tbl`
--
ALTER TABLE `brand_tbl`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `fav_tbl`
--
ALTER TABLE `fav_tbl`
  MODIFY `id_fav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `sabad_tbl`
--
ALTER TABLE `sabad_tbl`
  MODIFY `id_sabad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `shop_tbl`
--
ALTER TABLE `shop_tbl`
  MODIFY `id_shop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  ADD CONSTRAINT `comment_tbl_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_tbl` (`id_user`),
  ADD CONSTRAINT `comment_tbl_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product_tbl` (`id_product`);

--
-- Constraints for table `fav_tbl`
--
ALTER TABLE `fav_tbl`
  ADD CONSTRAINT `fav_tbl_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_tbl` (`id_user`),
  ADD CONSTRAINT `fav_tbl_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product_tbl` (`id_product`);

--
-- Constraints for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD CONSTRAINT `order_tbl_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_tbl` (`id_user`),
  ADD CONSTRAINT `order_tbl_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product_tbl` (`id_product`);

--
-- Constraints for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD CONSTRAINT `product_tbl_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `brand_tbl` (`id_brand`),
  ADD CONSTRAINT `product_tbl_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `cat_tbl` (`id_cat`),
  ADD CONSTRAINT `product_tbl_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin_tbl` (`id_admin`);

--
-- Constraints for table `sabad_tbl`
--
ALTER TABLE `sabad_tbl`
  ADD CONSTRAINT `sabad_tbl_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product_tbl` (`id_product`);

--
-- Constraints for table `shop_tbl`
--
ALTER TABLE `shop_tbl`
  ADD CONSTRAINT `shop_tbl_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin_tbl` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
