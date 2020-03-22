-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 01:09 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Menu_id` int(11) NOT NULL,
  `Menu_name` varchar(50) NOT NULL,
  `Menu_ingredients` varchar(500) NOT NULL,
  `Menu_cook` varchar(1000) NOT NULL,
  `Menu_img` varchar(500) NOT NULL,
  `Pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Menu_id`, `Menu_name`, `Menu_ingredients`, `Menu_cook`, `Menu_img`, `Pro_id`) VALUES
(13697418, 'สลัดผักกวางตุ้งกับอกไก่ต้ม', '-อกไก่ลอกหนังต้ม (ฉีกเป็นเส้น) 300 กรัม<br>\r\n-ผักกวางตุ้งฮ่องเต้ต้นเล็ก 100 กรัม<br>\r\n- วุ้นเส้น (แช่น้ำพอนุ่มลวกสุก) 50 กรัม<br>\r\n- พริกหวานสีแดง (คว้านไส้ออก หั่นเป็นเส้นใหญ่) 1 เม็ด<br>\r\n-ผักสลัดรวมตามชอบ เช่น ผักเรดคอรัล ผักกาดแรดิชชิโอ หรือผักกรีนคอส<br>\r\n-น้ำมันมะกอก (Extra Virgin) 3 ช้อนโต๊ะ<br>\r\n-งาขาวคั่ว 1 ช้อนโต๊ะ<br>\r\n-น้ำมันงา 1/4 ถ้วยตวง<br>\r\n-น้ำปลา 1/4 ถ้วยตวง<br>\r\n- น้ำมะนาวสด 3 ช้อนโต๊ะ<br>\r\n-กระเทียมกลีบใหญ่ (สับละเอียด) 1 ช้อนชา<br>\r\n- ขิงสด (สับละเอียด) 1 ช้อนโต๊ะ<br>\r\n- พริ', '1. ผสมส่วนผสมน้ำสลัดให้เข้ากัน เตรียมไว้<br>\r\n2. ล้างผักกวางตุ้งฮ่องเต้และผักสลัดให้สะอาด พักให้สะเด็ดน้ำ หั่นผักกวางตุ้งใบใหญ่ครึ่งใบ <br>\r\nและจัดเรียงใส่จาน ตามด้วยผักสลัดและวุ้นเส้น<br>\r\n3. เรียงพริกหวาน และอกไก่ต้มฉีกเป็นเส้นลงด้านบน ราดด้วยน้ำสลัด 4-5 ช้อนโต๊ะ จัดเสิร์ฟ ', 'img_menu/13697418.jpg', 252778367),
(132923723, 'ไข่ตุ๋นนมสดผักโขม', '-ไข่ไก่ฟองใหญ่ 5 ฟอง<br>\r\n-นมข้นจืด 1 ถ้วย<br>\r\n-น้ำซุปไก่ 1/2 ถ้วย<br>\r\n-เกลือป่น 1/2 ช้อนชา<br>\r\n-พริกไทยป่น 1/2 ช้อนชา<br>\r\n-ผักโขมลวกสับ 1/2 ถ้วย<br>\r\n-ก้ามปูหิมะเทียม 7 ชิ้น\r\n ', '1. ผสมไข่ไก่ นมข้นจืด และน้ำซุปไก่ เข้าด้วยกัน ปรุงรสด้วยเกลือและพริกไทย คนให้เข้ากัน <br>\r\nกรองด้วยกระชอนให้ไข่เป็นเนื้อเดียวกัน<br>\r\n2. แบ่งส่วนผสมไข่ประมาณ 1/3 ส่วน นำไปผสมกับผักโขม เทใส่ถ้วยสำหรับนึ่ง นึ่งพอสุก <br>\r\nนำส่วนผสมไข่ที่เหลือมาใส่ก้ามปู เทใส่ชามเดิม นึ่งต่อจนสุก   ', 'img_menu/132923723.jpg', 137602815),
(500463530, 'ผัดผักกวางตุ้ง', '-ผักกวางตุ้ง<br>\r\n-เห็ด<br>\r\n-น้ำมันพืช 2ช้อนชา<br>\r\n-พริกสด<br>\r\n-กระเทียม<br>\r\n-น้ำมันหอย1ช้อนโต๊ะครึ่ง', '1.นำกระทะตั้งเตาแล้วใส่น้ำมันเล็กน้อย นำพริกและกระเทียมสับละเอียดใส่ลงไปผัดพอมีกลิ่นหอม<br>\r\n2.นำผักกวางตุ้งลงไปผัดต่อ ตามด้วยเห็ด<br>\r\n3.ปรุงรสชาติด้วยน้ำมันหอย ซีอิ๊วขาว<br>\r\n4.ปิดไฟใส่จานพร้อมเสริฟ  ', 'img_menu/500463530.jpg', 252778367),
(515234195, 'ผักกวางตุ้งต้มกระดูกหมู ', '-หมูซีก300 กรัม<br>\r\n-ผักกวางตุ้ง1 แพ็ค<br>\r\n-เกลือ2 ช้อนชา<br>\r\n-ซีอิ๊วขาว3 ช้อนชา<br>\r\n-น้ำเปล่า ', '1.เตรียมส่วนผสมให้พร้อม<br>\r\n2.ต้มน้ำ ใส่เกลือลงไป<br>\r\n3.ตามด้วยซีกหมูเคล็ดลับ: เพื่อให้เนื้อหมูนิ่ม น้ำซุปหอมๆ ควรต้มทิ้งไว้สักครึ่ง ชม.<br>\r\n4.ใส่ซีอิ๊วขาวลงไป<br>\r\n5.รอจนหมูซีกเริ่มเปื่อยได้ที่ ใส่ผักกวางตุ้งลงไป<br>\r\n6.ต้มจนผักเริ่มอ่อน ปิดเตา พร้อมทานได้เลย  ', 'img_menu/515234195.jpg', 252778367),
(981939436, 'ผักโขมอบชีส', '-เนยสด<br>\r\n-หอมใหญ่ (หั่นเต๋า) 1/2 หัว<br>\r\n-แป้งสาลีอเนกประสงค์ 1 ช้อนโต๊ะ<br>\r\n-แฮม หรือเบคอน (หั่นเต๋า)<br>\r\n-นมจืด<br>\r\n-ผักโขม (หั่นหยาบ)<br>\r\n-เกลือป่น 1/2 ช้อนชา<br>\r\n-พริกไทยป่น<br>\r\n-น้ำตาลทราย เล็กน้อย<br>\r\n-ออริกาโน่ (ใส่หรือไม่ใส่ก็ได้)<br>\r\n-มอสซาเรลล่าชีส<br>\r\n-เชดดาร์ชีส<br>\r\n-พาร์มีซานชีส', '1. ตั้งกระทะ ใส่เนยสดและหอมใหญ่ลงไปผัดพอสุก จากนั้นใส่แป้งสาลีอเนกประสงค์ลงไป<br>\r\n2. ใส่แฮมและนมจืดไปลงไปส่วนหนึ่งก่อน (เพื่อให้แป้งไม่ไหม้ติดกระทะ) ผัดสักครู่ให้แป้งเป็นก้อน<br> จากนั้นใส่ผักโขมลงไป เติมนมจืดลงไปอีก ปรุงรสด้วยเกลือป่น พริกไทยป่น และน้ำตาล<br>ทราย เทใส่จาน พักไว้ แล้วค่อยใส่ลงในถาดฟอยล์<br>\r\n3.วางมอสซาเรลล่าชีสบนผักโขม แซมด้วยเชดดาร์ชีสเล็กน้อยเพื่อให้มีรสเค็มอร่อยขึ้น หรือจะโรย<br>พาร์มีซานชีสให้กลิ่นหอมน่ากินขึ้นด้วยก็ได้ (ถ้าใส่เยอะไปจะฉุนไม่อร่อยนะจ๊ะ)<br>\r\n4. นำเข้าเตาอบ โดยใช้ไฟบน-ล่าง เวลาประมาณ 10-12 นาที อบไปประมาณ 6-7 นาที ต้องเปิดฝามา<br>หมุนทิศทางให้มันได้ความร้อนทั่ว ๆ กัน เอาออกมาโรยออริกาโน่ พร้อมเสิร์ฟ<br> ', 'img_menu/981939436.jpg', 137602815),
(998131944, 'ลาซานญ่าผักโขมอบชีส', '-น้ำมันมะกอก (สำหรับผัดผักโขม) 2 ช้อนโต๊ะ<br>\r\n-กระเทียม (สับละเอียด) 1 กลีบใหญ่<br>\r\n-หอมใหญ่ (ซอยละเอียด) 2 หัว<br>\r\n-เกลือ<br>\r\n-พริกไทย<br>\r\n-ใบไทม์สับละเอียด พอประมาณ (ไทม์เป็นเครื่องเทศของครัวฝรั่ง)<br>\r\n-เนยสด 2 ช้อนโต๊ะ (เพิ่มความหอมอบอวล ชวนหม่ำ)<br>\r\n-ผักโขมสด 500 กรัม (ล้างสะอาดซับน้ำให้แห้งเพราะเราไม่ต้องการน้ำแฉะ ๆ ลงไปในตัวลาซานญ่า)<br>\r\n-ริคอตต้าชีส 250 กรัม<br>\r\n-พาร์มีซานชีส ตามชอบ<br>\r\n-มอสซาเรลล่าชีส ตามชอบ<br>\r\n-แผ่นพาสต้าลาซานญ่าอบแข็ง', '1. เปิดเตาอบที่อุณหภูมิ 180 องศาเซลเซียส (ใช้เวลา 30-45 นาที) โดยแบ่งเวลาอบเป็น 2 ส่วน<br>\r\n โดยช่วง 15 นาทีหลัง อบแบบไม่มีฟอยล์ เพื่อจะทำให้หน้าของลาซานญ่าน่ากิน  <br>\r\n2. ใช้เนยสดทาฟอยล์ให้ทั่ว ตามด้วยซอสครีม วางแผ่นลาซานญ่าลงไปในฟอยล์ ตามด้วยผักโขมที่<br>เตรียมไว้ โรยมอสซาเรลล่าชีส ริคอตต้าชีส และพาร์มีซานชีส ราดซอสครีมลงไป <br>\r\nปิดด้วยแผ่นพาสต้าลาซานญ่า หักให้แผ่นแตก ๆ ตอนเสิร์ฟจะได้ตัดง่าย ๆ<br>\r\n3. ทำชั้นต่อ ๆ ไปเหมือนเดิม ชั้นสุดท้าย วางแผ่นพาสต้าลงไป ราดซอสครีมให้ทั่ว ตามด้วยมอสซา<br>เรลล่าชีส และ พาร์มีซานชีส เรียบร้อยแล้วก็ใช้ฟอยล์ปิดไว้<br>\r\n4. พอถึง 15 นาทีสุดท้ายเอาแผ่นฟอยล์ออกเพื่อให้หน้าลาซานญ่าสวยน่ากิน อบเสร็จเรียบร้อย<br> \r\nยกออกจากเตา พักไว้ประมาณ 5-7 นาที เพื่อให้ลาซานญ่าเซตตัว ง่ายต่อการตัดเสิร์ฟ ', 'img_menu/998131944.jpg', 137602815);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Or_id` int(11) NOT NULL,
  `Or_date` datetime NOT NULL,
  `Or_name` varchar(45) NOT NULL,
  `Or_address` varchar(100) NOT NULL,
  `Or_email` varchar(100) NOT NULL,
  `UserID` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `Deliver_method` varchar(100) NOT NULL DEFAULT 'one time order',
  `Status_ems` varchar(45) NOT NULL,
  `U_tel` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `Datail_id` int(11) NOT NULL,
  `Or_id` int(11) NOT NULL,
  `Pro_id` int(11) NOT NULL,
  `Qty` int(3) NOT NULL,
  `UserID` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Pack_id` int(11) NOT NULL,
  `Or_id` int(11) NOT NULL,
  `Pack_size` varchar(45) NOT NULL,
  `Pack_price` int(11) NOT NULL,
  `Pack_weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Pack_id`, `Or_id`, `Pack_size`, `Pack_price`, `Pack_weight`) VALUES
(1001, 1000000, 'M', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `package_pro`
--

CREATE TABLE `package_pro` (
  `i` int(11) NOT NULL,
  `Pack_id` int(11) NOT NULL,
  `Pro_id` int(11) NOT NULL,
  `Qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package_pro`
--

INSERT INTO `package_pro` (`i`, `Pack_id`, `Pro_id`, `Qty`) VALUES
(1, 1001, 182642141, 1),
(2, 1001, 1006, 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_id` int(11) NOT NULL,
  `Or_id` int(10) NOT NULL,
  `Pay_total` int(10) NOT NULL,
  `User_name` varchar(45) NOT NULL,
  `Pay_email` varchar(20) NOT NULL,
  `Pay_phon` int(10) NOT NULL,
  `Pay_bank` varchar(45) NOT NULL,
  `Pay_date` datetime NOT NULL,
  `Pay_img` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_id`, `Or_id`, `Pay_total`, `User_name`, `Pay_email`, `Pay_phon`, `Pay_bank`, `Pay_date`, `Pay_img`) VALUES
(1, 58764, 44444, 'nantawat', 'gggg@hotmail.com', 992087183, 'กรุงไทย', '0000-00-00 00:00:00', 'img_payment/58764.jpg'),
(2, 456789, 111, 'nantawat', 'gggg@hotmail.com', -7292, 'ทหารไทย', '2222-02-10 12:20:00', 'img_payment/456789.jpg'),
(3, 444444, 44444, 'nantawat', 'gggg@hotmail.com', -7292, 'กสิกร', '0000-00-00 00:00:00', 'img_payment/444444.jpg'),
(4, 58764, 44444, 'nantawat', 'gggg@hotmail.com', 992087183, 'กรุงไทย', '0000-00-00 00:00:00', 'img_payment/58764.jpg'),
(5, 12345, 2147483647, 'popppppppppppp', 'gggg@hotmail.com', -7292, 'กรุงศรี', '0000-00-00 00:00:00', 'img_payment/12345.jpg'),
(6, 1254156, 300, 'yukuykuyk', 'gggg@hotmail.com', 45686, 'กรุงไทย', '2020-01-10 12:45:00', 'img_payment/1254156.jpg'),
(7, 271878877, 50, 'กกกกกกกกกกกก', 'nrynrty@rrgd', 783453, 'กสิกร', '2020-01-07 01:01:00', 'img_payment/271878877.jpg'),
(8, 754595962, 1111, '1111', 'ds@ddfd', 89562, 'กรุงไทย', '2020-01-13 02:56:00', 'img_payment/754595962.jpg'),
(9, 417749013, 50, 'nan', 'nrynrty@rrgd', 12344, 'กรุงไทย', '1111-01-01 11:11:00', 'img_payment/417749013.jpg'),
(10, 904847378, 240, 'ืnan', 'nrynrty@rrgd', 123456781, 'กสิกร 123-456-78 สาขาขอนเเก่น', '1111-11-11 01:01:00', 'img_payment/904847378.jpg'),
(11, 23298034, 111, 'aaa', 'nrynrty@rrgd', 1111111, 'กรุงไทย 123-456-78 สาขาขอนเเก่น', '0001-11-13 01:11:00', 'img_payment/23298034.jpg'),
(12, 103103238, 564, 'drtuydtryu', 'nrynrty@rrgd', 356456, 'กรุงไทย 123-456-78 สาขาขอนเเก่น', '2020-02-12 06:06:00', 'img_payment/103103238.jpg'),
(13, 103103238, 564, 'drtuydtryu', 'nrynrty@rrgd', 356456, 'กรุงไทย 123-456-78 สาขาขอนเเก่น', '2020-02-12 06:06:00', 'img_payment/103103238.jpg'),
(14, 23298034, 564, 'drtuydtryu', 'nrynrty@rrgd', 356456, 'กรุงไทย 123-456-78 สาขาขอนเเก่น', '2020-02-12 06:06:00', 'img_payment/23298034.jpg'),
(15, 23298034, 564, 'drtuydtryu', 'nrynrty@rrgd', 356456, 'กรุงไทย 123-456-78 สาขาขอนเเก่น', '2020-02-12 06:06:00', 'img_payment/23298034.jpg'),
(16, 187181187, 20, 'nanadoungmalil', 'nantawat@kkumail.com', 88888, 'กรุงศรี 123-456-78 สาขาขอนเเก่น', '2020-02-11 10:33:57', 'img_payment/187181187.jpg'),
(17, 997330708, 20, 'nanadoungmalil', 'nantawat@kkumail.com', 88888, 'กรุงไทย 123-456-78 สาขาขอนเเก่น', '2020-02-13 07:35:04', 'img_payment/997330708.jpg'),
(18, 758529258, 20, 'nanadoungmalil', 'nantawat@kkumail.com', 88888, 'กรุงไทย 123-456-78 สาขาขอนเเก่น', '2020-02-13 07:43:23', 'img_payment/758529258.jpg'),
(19, 967180203, 20, 'nanadoungmalil', 'nantawat@gmail.com', 88888, 'other', '2020-03-03 14:38:25', 'img_payment/967180203.jpg'),
(20, 934158560, 20, 'nanadoungmalil', 'nantawat@gmail.com', 123456789, 'other', '2020-03-03 15:06:50', 'img_payment/934158560.jpg'),
(21, 934158560, 20, 'nanadoungmalil', 'nantawat@gmail.com', 123456789, 'female', '2020-03-03 15:15:41', 'img_payment/934158560.jpg'),
(22, 111229949, 20, 'nanadoungmalil', 'nantawat@gmail.com', 88888, 'female', '2020-03-03 15:16:54', 'img_payment/111229949.jpg'),
(23, 184074442, 20, 'nanadoungmalil', 'nantawat@gmail.com', 88888, 'other', '2020-03-03 15:21:11', 'img_payment/184074442.jpg'),
(24, 132547913, 80, 'nanadoungmalil', 'nantawat@gmail.com', 88888, 'other', '2020-03-03 15:22:12', 'img_payment/132547913.jpg'),
(25, 161192694, 40, 'nanadoungmalil', 'nantawat7183@gmail.c', 88888, 'male', '2020-03-03 16:11:17', 'img_payment/161192694.jpg'),
(26, 956326642, 40, 'nanadoungmalil', 'nantawat7183@gmail.c', 88888, 'male', '2020-03-03 17:07:17', 'img_payment/956326642.jpg'),
(27, 997832094, 100, 'nanadoungmalil', 'nantawat7183@gmail.c', 827794288, 'กรุงไทย 123-456-78 สาขาขอนเเก่น', '2020-03-17 17:21:33', 'img_payment/997832094.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Pro_id` int(11) UNSIGNED NOT NULL,
  `Pro_name` varchar(45) NOT NULL,
  `Pro_price` int(11) NOT NULL,
  `Pro_amount` int(11) NOT NULL,
  `Pro_detail` varchar(500) NOT NULL,
  `Pro_property` varchar(500) NOT NULL,
  `Pro_img` varchar(45) NOT NULL,
  `Pro_type` int(11) NOT NULL,
  `Pro_weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Pro_id`, `Pro_name`, `Pro_price`, `Pro_amount`, `Pro_detail`, `Pro_property`, `Pro_img`, `Pro_type`, `Pro_weight`) VALUES
(137602815, 'ผักโขม', 20, -15, '                                                                                                                         ปวยเล้ง (Spinach) หรือที่ใครหลายๆ คนอาจจะเข้าใจว่าเป็นผักโขม (Amaranth) เป็นอีกหนึ่งผักดีมีประโยชน์ที่ชาวไทย<br> \r\nรวมถึงชาวต่างชาตินิยมรับประทานกันมาอย่างยาวนาน (ผักตัวจริงที่ให้พลังงานแก่ป็อปอาย คือผักปวยเล้งนี่แหละ หาใช่ผักโขมไม่) <br>\r\nเพราะปวยเล้งมีวิตามิน และเกลือแร่ที่จำเป็นต่อร่างกายเยอะ หาทานได้ง่าย ราคาไม่แพง และรสชาติดี จึงทำให้ปวยเล้งถูกดัดแปลงไปทำเป็น<br>\r\nเมนูอาห', '                                                                                                                        1.ปวยเล้งมีทั้งธาตุเหล็กบำรุงเลือด แคลเซียมบำรุงกระดูก<br>\r\n2. โพแทสเซียมที่ช่วยควบคุมการเต้นของหัวใจ และความดันเลือด<br>\r\n3. มีวิตามินซีป้องกันหวัด วิตามินบี 2 ช่วยในการเจริญเติบโต บำรุงเล็บ ผิวหนัง ผม<br>\r\n3 มีกรดโฟลิกที่จำเป็นต่อการสร้างสารที่ให้ความสุขอย่างซีโรโทนิน ที่มีส่วนสำคัญในการควบคุมอารมณ์ไม่ให้หงุดหงิดงุ่นง่าน <br>\r\n4.ช่วยลดอาการนอนไม่หลับได้ ช่วยบำรุงสายตา กระดูก ', 'images/137602815.jpg', 0, 100),
(257266980, 'กวางตุ้ง+กระเทียม', 200, 15, '                        ๐กวางตุ้ง<br>\r\n๐กระเทียม                      ', '                                              ', 'images/257266980.jpg', 1, 500),
(355529345, 'ผักกะหล่ำปลี', 20, -84, '                        ผักกะหล่ำปลี นั้นมีสารพิษที่เรียกว่า กอยโตรเจน (Goitrogen) ซึ่งเป็นตัวขัดขวางการดูดซึมของไอโอดีน<br> \r\nผลที่ตามมาก็คืออาจทำให้เป็นคอหอยพอกได้ แต่สารพิษที่ว่านี้จะถูกทำลายด้วยวิธีการนำไปต้ม<br>\r\n ดังนั้นจึงควรรับประทานกะหล่ำปลีที่ผ่านการปรุงสุกแล้วจะดีกว่า แม้ว่าวิตามินจะหายไปบ้างก็ตาม<br>\r\n แต่ก็มีคำแนะนำว่าการเกิดปัญหาจากสารพิษชนิดนี้ไม่ใช่จะเกิดขึ้นได้ง่าย ๆ <br>\r\nเพราะถ้าจะรับประทานกะหล่ำปลีจนถึงขนาดได้รับสารกอยโตรเจน <br>\r\nต้องเป็นการรับประทานอย่างต่อเนื่องเป็นประจำแล', '                        1.กะหล่ำปลีมีกรดทาร์ทาริก (Tartaric acid) ที่ช่วยยับยั้งและขัดขวางไม่ให้น้ำตาลและแป้งกลายเป็นไขมัน <br>\r\nจึงมีส่วนในการช่วยลดน้ำหนักและคอเลสเตอรอลได้<br>\r\n2.ช่วยบำรุงกระดูกและฟัน เพราะกะหล่ำปลีดิบอุดมไปด้วยแคลเซียมและฟอสฟอรัส<br>\r\n ซึ่งเป็นผลดีต่อการเสริมสร้างและบำรุงกระดูก<br>\r\n3.ช่วยเสริมสร้างภูมิคุ้มกันโรคให้แข็งแรง ป้องกันหวัด เพราะกะหล่ำปลีดิบมีวิตามินสูง<br>\r\n4.ช่วยบำรุงผิวพรรณทำให้ผิวพรรณเปล่งปลั่งมีน้ำมีนวล และยังช่วยคงความอ่อนเยาว์ได้อีกด้วย<br>\r\n5.กะหล่ำปลีมีสาร', 'images/355529345.jpg', 0, 100),
(361594455, 'เเตงกวา', 20, -61, '                        ต้นแตงกวา มีถิ่นกำเนิดในประเทศอินเดีย ในบ้านเราก็นิยมปลูกแตงกวาเป็นอาชีพ เนื่องจากเป็นผักที่ปลูกง่าย ให้ผลผลิตเร็ว<br> \r\nการเก็บรักษาง่ายกว่าผักชนิดอื่น ๆ โดยแตงกวานั้นจัดเป็นพืชล้มลุก มีรากแก้วและรากแขนงจำนวนมาก <br>\r\nสามารถแผ่กว้างและหยั่งลึกได้มากถึง 1 เมตร ลำต้นเป็นเถาเลื้อยยาว 2-3 เมตร มีข้อยาว 10 ถึง 20 เซนติเมตร<br>\r\nและหนวดบริเวณข้อช่วยเกาะยึดลำต้น                      ', '                        1.แตงกวามีสรรพคุณช่วยแก้กระหาย ลดความร้อนในร่างกาย ทำให้ร่างกายสดชื่น และช่วยเพิ่มความชุ่มชื้น<br>\r\n2.ช่วยกำจัดของเสียที่ตกค้างในร่างกาย<br>\r\n3.แตงกวามีสารฟีนอลที่ทำหน้าที่ต่อต้านอนุมูลอิสระต่าง ๆ<br>\r\n4.ผลและเมล็ดอ่อนมีฤทธิ์ช่วยต่อต้านมะเร็ง<br>\r\n5.ช่วยลดความดันโลหิต (เถาแตงกวา)<br>\r\n6.ช่วยรักษาสมดุลต่าง ๆ ในร่างกาย รักษาระดับน้ำตาลในเลือด ระดับภูมิคุ้มกันให้อยู่ในสุขภาพดี<br>\r\n7.ช่วยควบคุมระดับความดันเลือดและความสมดุลของสารอาหารในร่างกาย (โพแทสเซียม, แมงกานีส)<br>\r\n8.ช่', 'images/361594455.jpg', 0, 100),
(458772981, 'กระเทียม', 50, -12, '                        ประโยชน์หลัก ๆ ของกระเทียมคงหนีไม่พ้นการนำมาใช้เพื่อช่วยปรุงรสชาติของอาหาร ไม่ว่าจะใช้ผัด แกง ทอด ยำ ต้มยำ หรือน้ำพริกต่าง ๆ <br>\r\nอีกสารพัด กระเทียมเป็นเครื่องสมุนไพรที่อุดมไปด้วยวิตามินและแร่ธาตุหลายชนิด และยังเป็นพืชที่ธาตุซีลีเนียมสูงกว่าพืชชนิดอื่น ๆ<br>\r\n อีกทั้งยังมีสารอะดีโนซีน (Adenosine) ซึ่งเป็นกรดนิวคลีอิกที่เป็นตัวสร้าง DNA และ RNA ของเซลล์ในร่างกาย<br>\r\nนอกจากนี้ยังมีการนำกระเทียมไปแปรรูปเป็นผลิตภัณฑ์ต่าง ๆ อย่างหลากหลาย เช่น กระเทียมเสริมอาหาร กระเทียมสกัดผ', '                        1.ช่วยบำรุงผิวหนังให้มีสุขภาพดีและแข็งแรง<br>\r\n2.ช่วยเสริมสร้างการเจริญเติบโตของเนื้อเยื่อในร่างกาย<br>\r\n3.ช่วยป้องกันการเกิดโรคมะเร็ง<br>\r\n4.ช่วยเสริมสร้างภูมิต้านทานให้แก่ร่างกาย<br>\r\n5.ช่วยลดระดับคอเลสเตอรอลและน้ำตาลในเลือด<br>\r\n6.ช่วยปรับสมดุลในร่างกาย<br>\r\n7.ช่วยแก้อาการวิงเวียนศีรษะ อาการมึนงง ปวดศีรษะ หูอื้อ<br>\r\n8.ช่วยในเรื่องระบบสืบพันธุ์และระบบทางเดินปัสสาวะ เพราะมีสารที่ช่วยควบคุมฮอร์โมนทั้งหญิงและชาย ช่วยทำให้มดลูกบีบตัว <br>\r\nเพิ่มพละกำลังให้มีเรี่ยวแรง<br>\r\n', 'images/458772981.jpg', 0, 100),
(520803507, 'เเครอท+กวางตุ้ง+ปวยเล้ง', 200, 9, '                        ๐เเครอท<br>\r\n๐กวางตุ้ง<br>\r\n๐ปวยเล้ง                      ', '                                              ', 'images/520803507.jpg', 1, 500),
(629773765, 'เเครอท', 20, -2, '                        แครอทอุดมไปด้วยวิตามินและแร่ธาตุที่มีประโยชน์ เช่น เบตาแคโรทีน วิตามินเอ วิตามินบี 1 วิตามินบี 2 <br>\r\nวิตามินซี วิตามินอี ธาตุแคลเซียม ธาตุโพแทสเซียม ธาตุฟอสฟอรัส ธาตุเหล็ก และยังมีสารสำคัญคือสาร \"ฟอลคารินอล\" <br>\r\n(falcarinol) ซึ่งช่วยต่อต้านเซลล์มะเร็ง เป็นต้น สำหรับประโยชน์ของแครอทนั้นที่เด่น ๆ <br>\r\nก็เห็นจะเป็นการนำมาใช้ประกอบอาหารได้อย่างหลากหลายเมนู<br>\r\n ไม่ว่าจะเป็นของหวานของคาว ทั้งผัด ทอด แกง ต้ม ซุป สลัด ยำ <br>\r\nก็มีแครอทเป็นส่วนประกอบทั้งนั้น และยังมีเครื่อ', '                        1.ช่วยบำรุงสุขภาพผิวให้สดใสเปล่งปลั่ง<br>\r\n2.ช่วยป้องกันเซลล์ผิวไม่ให้ถูกทำลายได้ง่ายจากมลภาวะแสงแดดต่าง ๆ<br>\r\n3.ช่วยเสริมสร้างการเจริญเติบโตของร่างกาย<br>\r\n4.ช่วยบำรุงกระดูก ฟัน เหงือก เล็บ ให้แข็งแรงยิ่งขึ้น<br>\r\n5.มีสารต่อต้านอนุมูลอิสระ ซึ่งมีส่วนช่วยในการชะลอวัยและการเกิดริ้วรอยแห่งวัย<br>\r\n6.ช่วยสร้างสร้างภูมิต้านทานโรคของร่างกายให้แข็งแรงยิ่งขึ้น<br>\r\n7.ช่วยยับยั้งต่อต้านการเกิดโรคมะเร็ง<br>\r\n8.ช่วยลดระดับคอเลสเตอรอลในร่างกาย<br>\r\n9.ช่วยรักษาโรคความดันโลหิตสูง<br>', 'images/629773765.jpg', 0, 100),
(754117859, 'บร็อคโคลี่', 40, -1, '                        ต้นบร็อคโคลี่ มีลักษณะเป็นทรงพุ่มใหญ่เก้งก้าง ลำต้นใหญ่และอวบ ลักษณะของดอกมีขนาดใหญ่ เส้นผ่าศูนย์กลางประมาณ 16 เซนติเมตร<br>\r\nจะอยู่รวมกันเป็นกลุ่มช่อหนาแน่นมีสีเขียวเข้ม ส่วนลักษณะของใบจะกว้างมีสีเขียวเข้มออกเทา ริมขอบใบหยัก<br> \r\nตามปกติแล้วเราจะนิยมบริโภคในส่วนที่เป็นดอกและในส่วนของลำต้นจะนิยมรองลงมา แต่คุณค่าทางอาหารกลับมีอยู่มากในส่วนของลำต้น<br>\r\n ดังนั้นการรับประทานทั้งสองส่วน ร่างกายก็จะได้รับประโยชน์อย่างสูงสุด<br>                      ', '                        1. ช่วยต่อต้านอนุมูลอิสระ ช่วยเพิ่มภูมิคุ้มกันให้กับร่างกาย<br>\r\n2. ช่วยบำรุงผิวพรรณ เพิ่มความยืดหยุ่นให้ผิวหนัง ช่วยชะลอผิวพรรณไม่ให้เหี่ยวย่น ทำให้ดูอ่อนเยาว์ตลอดเวลา (ซีลีเนียม)<br>\r\n3. ช่วยบำรุงและรักษาสายตา ป้องกันการเกิดต้อกระจก<br>\r\n4. ช่วยบำรุงกระดูกและฟันให้แข็งแรง ป้องกันโรคกระดูกพรุน เรื่องจากบร็อคโคลี่เป็นผักที่มีแคลเซียมสูง<br>\r\n5. ช่วยป้องกันการเกิดโรคมะเร็งต่างๆ เช่น มะเร็งเต้านม มะเร็งปอด มะเร็งผิวหนัง มะเร็งกระเพาะอาหาร และมะเร็งต่อมลูกหมาก <br>\r\n6. ช่วยป', 'images/754117859.jpg', 0, 100),
(873292086, 'กะหล่ำปลี+กระเทียม+กวางตุ้ง', 200, 10, '                        ๐กะหล่ำปลี<br>\r\n๐กระเทียม<br>\r\n๐กวางตุ้ง<br>                      ', '                                              ', 'images/873292086.jpg', 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `Sta_id` int(11) NOT NULL,
  `Customer` varchar(45) NOT NULL,
  `Admin` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `addess` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `U_tel` varchar(13) NOT NULL,
  `password` varchar(16) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `f_name`, `l_name`, `addess`, `email`, `U_tel`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin123@gmail.com', '0972075037', '123456', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Menu_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Or_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`Datail_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Pack_id`);

--
-- Indexes for table `package_pro`
--
ALTER TABLE `package_pro`
  ADD PRIMARY KEY (`i`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Pro_id`),
  ADD UNIQUE KEY `Pro_id` (`Pro_id`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`Sta_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=998131945;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Or_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Datail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `package_pro`
--
ALTER TABLE `package_pro`
  MODIFY `i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `Sta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
