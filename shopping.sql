-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 12:37 PM
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
(111, 'asdfg', '11111', '11111 ', '1022', 0),
(1001, 'ซุปบรอกโคลีสูตรดีท็อกซ์', '• บรอกโคลี (หั่นชิ้นเล็ก ๆ) 1 หัว<br>\r\n• นมมะพร้าว 400 มิลลิลิตร (หรือนมสดตามชอบ)<br>\r\n• เกลือป่น<br>\r\n• พริกไทยป่น<br>\r\n• ผงจันทน์เทศ<br>\r\n• ถั่วแมคคาเดเมีย (ทุบหยาบ ๆ)<br>\r\n• พาร์สลีย์สับ<br>\r\n• อะโวคาโดหั่นชิ้น<br>\r\n', '• 1. ใส่นมมะพร้าวลงในหม้อหรือกระทะ ตามด้วยบรอกโคลี พอเดือดแล้วให้เคี่ยวต่ออีกประมาณ 5 นาทีหรือจนบรอกโคลีนิ่ม ปิดเตา พักทิ้งไว้ให้เย็น<br>\r\n• 2. เทซุปบรอกโคลีที่เย็นแล้วใส่ลงในเครื่องปั่น ปั่นจนเนื้อเนียนละเอียด เสร็จแล้วเทใส่กระทะ ปรุงรสด้วยเกลือ พริกไทย และผงจันทน์เทศ พอเดือดเทใส่ภาชนะ แต่งด้วยถั่วแมคคาเดเมีย พาร์สลีย์สับ และอะโวคาโด', 'images/f1_03.jpg', 1007),
(1002, 'XXXXXXXX', '• ฟักสปาเกตตี 1 ลูก (ผ่าครึ่ง)\r\n• สเปรย์น้ำมันมะกอก\r\n• บรอกโคลีสับ 2 ถ้วย\r\n• กระเทียมสับ 3 กลีบ\r\n• พริกป่น 1 ช้อนชา\r\n• เกลือป่น\r\n• พริกไทย\r\n• ผงปรุงรสอิตาเลียน 1 ช้อนชา\r\n• มอสซาเรลล่าชีส (สูตรไขมันต่ำ) ขูดฝอย 1/2 ถ้วย\r\n• พาร์มีซานชีสขูด 1/3 ถ้วย\r\n', '• 1. ใส่น้ำเปล่า 1/4 ถ้วย นำเข้าไมโครเวฟพร้อมกับฟักสปาเกตตีที่ผ่าครึ่งไว้ นำไปวางข้าง ๆ ถ้วย ใช้เวลา 9-11 นาทีหรือจนฟักสุกนิ่ม นำออกมาพักไว้จนเย็น ประมาณ 10 นาที ส่วนฟักสปาเกตตีอีกครึ่งหนึ่งก็ทำเช่นเดียวกัน\r\n• 2. ฉีดสเปรย์น้ำมันลงในกระทะใช้ไฟปานกลาง ใส่พริกป่นลงไปคั่ว ประมาณ 30 วินาที ตามด้วยบรอกโคลีกับกระเทียม คนผสมจนเข้ากัน เติมน้ำเปล่า 2 ช้อนโต๊ะ เร่งเป็นไฟแรง ประมาณ 3-5 นาทีหรือจนบรอกโคลีนิ่ม ตักส่วนผสมใส่ภาชนะ เทน้ำทิ้งไป\r\n• 3. ใช้ส้อมขูดเนื้อฟักสปาเกตตีทั้งสองซีกใส่ลงในชามบรอกโคลี โรยพาร์มีซานชีส เกลือ พริกไทย และผงปรุงรสอิตาเลียน คนผสมจนเข้ากัน เทใส่ลงไปในเปลือกฟักสปาเกตตีทั้งสองซีก โรยมอสซาเรลล่าชีส ใส่ชามนำไปอบ ซีกละประมาณ 2-3 นาทีหรือจนชีสเปลี่ยนเป็นสีน้ำตาล\r\n', 'images/f2_03.jpg', 1004),
(1003, 'aaaaผัดบรอกโคลีกับเห็ดแชมปิญอง', '• บรอกโคลี (หั่นเป็นชิ้นพอดีคำ) 200 กรัม<br>\r\n• เกลือป่น (สำหรับลวกผัก)<br>\r\n• น้ำมันมะกอกสำหรับผัด 3 ช้อนโต๊ะ<br>\r\n• เห็ดแชมปิญอง (หั่นบาง) 100 กรัม<br>\r\n• พริกหวานสีเหลืองกับสีแดง 100 กรัม<br>\r\n• น้ำปลา 1 ช้อนโต๊ะ<br>\r\n• น้ำมันหอย 1 ช้อนโต๊ะ<br>\r\n• น้ำตาลทราย 1 ช้อนชา<br>', '• 1. ใส่บรอกโคลีในน้ำเดือด เติมเกลือลงไปเล็กน้อย ลวกประมาณ 1 นาที ตักผักทั้งหมดแช่ในน้ำเย็นจัด เตรียมไว้<br>\r\n• 2. ใส่น้ำมันมะกอกลงในกระทะ นำขึ้นตั้งไฟจนร้อน ใส่บรอกโคลี ตามด้วยแชมปิญอง และพริกหวาน ปรุงรสด้วยน้ำปลา น้ำมันหอย และน้ำตาลทราย ผัดจนเข้ากันดี ตักใส่จาน พร้อมเสิร์ฟ', 'images/f3_03.jpg', 1004),
(1004, 'บรอกโคลีซอสปูใส่กุ้ง', '• บรอกโคลี (ไม่เอาก้าน) 200 กรัม<br>\r\n• เกลือป่น (สำหรับลวกผัก) 1/2 ช้อนชา<br>\r\n• เนื้อปู 120 กรัม<br>\r\n• กุ้งสด (ปอกเปลือก ผ่าหลังดึงเส้นดำออก) 7 ตัว<br>\r\n• น้ำซุปไก่ 1/2 ถ้วยตวง<br>\r\n• น้ำตาลทราย 1/2 ช้อนชา<br>\r\n• ซอสหอยนางรม 1/2 ช้อนโต๊ะ<br>\r\n• ซีอิ๊วขาว 1 ช้อนโต๊ะ<br>\r\n• น้ำมันงา 1/2 ช้อนโต๊ะ<br>\r\n• เหล้าจีน 1/2 ช้อนโต๊ะ<br>\r\n• พริกไทยป่น 1/2 ช้อนชา<br>\r\n• แครอทสับ 1 ช้อนโต๊ะ<br>\r\n• แป้งมันสำปะหลังผสมน้ำเปล่าเล็กน้อย 2+1/2 ช้อนโต๊ะ<br>', '• 1. ต้มน้ำเปล่าให้เดือด ใส่บรอกโคลี และเกลือป่น ลงต้ม 2 นาที ตักขึ้นแช่น้ำเย็นและพักไว้ให้เย็น จัดใส่จาน<br>\r\n• 2. ต้มน้ำซุปไก่ให้เดือด เติมเนื้อปู กุ้งสด และแครอท พอเริ่มเดือดปรุงรสด้วยน้ำตาลทราย ซอสหอยนางรม ซีอิ๊วขาว น้ำมันงา เหล้าจีน และพริกไทยป่น คนให้เข้ากัน<br>\r\n• 3. เติมแป้งมันสำปะหลังลงในน้ำซุป คนให้เข้ากันจนข้นเหนียว ราดบนบรอกโคลี จัดเสิร์ฟ<br>', 'images/f4_03.jpg', 1003),
(1005, 'ไข่ตุ๋นกะหล่ำปลี', '• กะหล่ำปลี 1 หัว<br>\r\n• ไข่ไก่ หรือไข่เป็ด (เบอร์ 0) จำนวน 2 ฟอง<br>\r\n• น้ำซุป 5 ช้อนโต๊ะ<br>\r\n• น้ำปลา 1 ช้อนชา<br>\r\n• ซีอิ๊วขาว 1 ช้อนชา<br>\r\n• แครอท หั่นเป็นชิ้นเล็ก ๆ (ใส่หรือไม่ใส่ก็ได้)<br>\r\n• ต้นหอมซอย<br>\r\n• พริกไทย (ใส่หรือไม่ใส่ก็ได้)<br>\r\n', '• 1. แหวกกะหล่ำปลีให้เป็นช่องตรงกลางสำหรับใส่ไข่ลงไป กะดูว่าปริมาณไข่ที่จะใส่พอดีหรือไม่<br>\r\n• 2. ตอกไข่ใส่ชามแล้วตีให้ขึ้นฟู ใส่น้ำซุป น้ำปลา ซีอิ๊วขาว และพริกไทยลงไป ตีให้เข้ากัน ใส่แครอท นำไปหยอดใส่ลงในกะหล่ำปลีที่เจาะไว้<br>\r\n• 3. นำไปนึ่งจนกว่าไข่จะสุก โดยให้ใช้ส้อมกดลงไปดู ถ้าไม่มีน้ำไข่ดิบไหลออกมา เอาเป็นว่าใช้ได้ ปิดไฟ ยกลง โรยหน้าด้วยต้นหอมซอย พร้อมเสิร์ฟ', 'images/f1_01.jpg', 1001),
(1006, ' กะหล่ำปลีทอดน้ำปลา', '• กะหล่ำปลี 1 หัว<br>\r\n• กระเทียม 2 หัว<br>\r\n• น้ำปลา 2 ช้อนโต๊ะ<br>\r\n• น้ำมันพืชเล็กน้อย (สำหรับผัด)<br>', '• 1. หั่นกะหล่ำปลีเป็นชิ้นเล็ก ๆ แล้วดึงแยกออกจากกัน นำไปล้างให้สะอาด เตรียมไว้<br>\r\n• 2. ใส่น้ำมันพืชลงในกระทะ นำขึ้นตั้งไฟแรง พอน้ำมันร้อนใส่กระเทียมลงไปเจียวจนหอม<br>\r\n• 3. ใส่กะหล่ำปลีลงไปในกระทะ (ยังไม่ต้องผัด) ให้ทิ้งไว้ 10 วินาทีก่อน จากนั้นค่อย ๆ ผัดให้กะหล่ำปลีโดนความร้อนทั่ว ๆ แต่ยังไม่ต้องสุกมาก<br>\r\n• 4. ราดน้ำปลาลงไปรอบ ๆ ขอบกระทะ (ยังไม่ต้องผัด) รอจนมีกลิ่นน้ำปลาหอม ๆ ลอยขึ้นมาก่อน แล้วค่อยผัดให้ทุกอย่างเข้ากัน พอผัดจนกะหล่ำปลีสุกแล้ว ตักใส่จาน พร้อมเสิร์ฟ<br>', 'images/f2_01.jpg', 1001),
(1007, 'กะหล่ำปลีทอดซีอิ๊ว', '• กะหล่ำปลีฉีกเป็นชิ้น (เล็กใหญ่ตามชอบ)<br>\r\n• เห็ดหอมแช่น้ำจนนิ่ม หั่นเป็นเส้น ๆ<br>\r\n• ซีอิ๊วขาว<br>\r\n• น้ำมันพืช<br>', '• 1. ตั้งกระทะด้วยไฟแรง ใส่น้ำมันพืชลงไป เจียวเห็ดหอมให้หอม<br>\r\n• 2. ใส่กะหล่ำปลีลงไป (ไม่ต้องรีบคลุกทิ้งไว้สักครู่) จากนั้นค่อย ๆ ผัดกะหล่ำปลีให้สุกเกือบทั่ว นำมารวมตรงกลางกระทะ<br>\r\n• 3. เหยาะซีอิ๊วขาวบริเวณด้านข้างกระทะ รอสักครู่จะได้กลิ่นไหม้เบา ๆ ของซีอิ๊ว (ไม่ต้องรีบคลุกรอสักครู่ค่อยผัด) โดยนำกะหล่ำปลีไปถู ๆ กับขอบกระทะที่เราเหยาะซีอิ๊วไปเมื่อสักครู่ พอสุกทั่วปิดไฟ ตักใส่จาน พร้อมเสิร์ฟ', 'images/f3_01.jpg', 1001),
(1008, 'กะหล่ำปลีห่อหมู', '• กะหล่ำปลี 1 หัว<br>\r\n• กระเทียม<br>\r\n• พริกไทยเม็ด<br>\r\n• เนื้อสะโพกไก่ หรือเนื้อหมู<br>\r\n• ซีอิ๊วขาว<br>\r\n• น้ำมันหอย<br>\r\n• น้ำตาลทราย (เล็กน้อย)<br>\r\n• น้ำเปล่า (สำหรับลวก)<br>\r\n• น้ำเย็น (สำหรับแช่ผักกาดขาว)', '• 1. โขลกกระเทียมกับพริกไทยให้ละเอียด พักไว้<br>\r\n• 2. สับไก่ (หรือหมู) ให้ละเอียด หมักด้วยกระเทียมกับพริกไทย ปรุงรสด้วยซีอิ๊วขาว น้ำมันหอย และน้ำตาลทรายเล็กน้อย พักทิ้งไว้อย่างน้อย 30 นาที หรือข้ามคืน<br>\r\n• 3. ลวกกะหล่ำปลีในน้ำเดือดแล้วแช่ในน้ำเย็นจัด ทิ้งไว้ให้สะเด็ดน้ำ ตัดก้านทิ้งเอาแต่ส่วนใบ<br>\r\n• 4. นำไก่สับ หรือหมูสับมาวางลงบนใบกะหล่ำปลีแล้วห่อให้สวยงาม<br>\r\n• 5. นำไปวางในชุดนึ่งแล้วนึ่งในน้ำเดือดประมาณ 5 นาที หรือจนสุก เสิร์ฟพร้อมน้ำจิ้มซีฟู้ดหรือน้ำจิ้มสุกี้\r\n', 'images/f4_01.jpg', 1001),
(1009, 'ส้มตำกรอบแครอท', '• แครอท<br>\r\n• แป้งทอดกรอบ (หรือแป้งสาลี)<br>\r\n• น้ำมันพืชสำหรับทอด<br>\r\n• พริกขี้หนูเม็ดเล็ก 10 เม็ด<br>\r\n• กระเทียม 5 กลีบ<br>\r\n• กุ้งแห้ง<br>\r\n• ถั่วฝักยาว<br>\r\n• มะเขือเทศ<br>\r\n• น้ำปลา 3 ช้อนโต๊ะ<br>\r\n• น้ำมะนาว 3 ช้อนโต๊ะ<br>\r\n• น้ำตาลปี๊บ 2 ช้อนโต๊ะ<br>\r\n• น้ำมะขามเปียก 1 ช้อนโต๊ะ<br>\r\n• กุ้งสดลวกสุก<br>\r\n• ถั่งลิสงคั่ว', '• 1. ปอกเปลือกแครอท จากนั้นขูดเป็นเส้น นำไปผึ่งลมไว้สักครู่<br>\r\n• 2. ใส่พริกขี้หนูกับกระเทียมบุบหยาบ ๆ จากนั้นใส่กุ้งแห้งและถั่วฝักยาวบุบพอแตก ตามด้วยมะเขือเทศ ปรุงรสด้วยน้ำปลา น้ำมะนาว น้ำตาลปี๊บ และน้ำมะขามเปียก คลุกเคล้าให้เข้ากัน ชิมรสให้ถูกใจ ใส่กุ้งลวกสุก ตักใส่ถ้วย โรยด้วยถั่วลิสงคั่ว เตรียมไว้<br>\r\n• 3. ใส่แครอทลงในอ่างผสม ใส่แป้งทอดกรอบ คลุกเคล้าให้เข้ากันจนทั่ว\r\n• 4. ตั้งกระทะใส่น้ำมันพืชใช้ไฟไม่ต้องแรง รอจนน้ำมันร้อน ใส่แครอทคลุกแป้งลงทอดให้เหลืองกรอบ ตักขึ้นพักให้สะเด็ดน้ำมัน ตักใส่จาน จัดเสิร์ฟ', 'images/f1_02.jpg', 1002),
(1010, 'แครอทอบน้ำผึ้ง', '• แครอทปอกเปลือกหั่นชิ้นหนา 1+1/2 นิ้ว 1.5 กิโลกรัม<br>\r\n• น้ำมันมะกอก 3 ช้อนโต๊ะ<br>\r\n• เกลือป่น<br>\r\n• พริกไทยดำป่น<br>\r\n• น้ำผึ้ง 3 ช้อนโต๊ะ<br>\r\n• แอปเปิลไซเดอร์ 1+1/2 ช้อนโต๊ะ<br>\r\n• พาร์สลีย์สับ 2+1/2 ช้อนโต๊ะ<br>\r\n• ใบไทม์ 1 ช้อนโต๊ะ', '• 1. เปิดเตาอบที่อุณหภูมิ 400 องศาฟาเรนไฮต์ เตรียมไว้<br>\r\n• 2. วางแครอทบนกระดาษรองอบ พรมน้ำมันพืชลงไป โรยเกลือและพริกไทยดำ นำไปอบประมาณ 20 นาที นำออกมาพักไว้<br>\r\n• 3. คนผสมน้ำผึ้งกับแอปเปิลไซเดอร์ เอาไปพรมบนแครอท นำไปอบต่อประมาณ 10-20 นาที นำออกมาโรยพาร์สลีย์กับใบไทม์ จัดเสิร์ฟ<br>', 'images/f2_02.jpg', 1002),
(1011, 'ซุปครีมแครอท', '• น้ำมันมะพร้าว 1+1/2 ช้อนชา<br>\r\n• หอมใหญ่หั่นเต๋า 1 หัว<br>\r\n• ขิงสดขูดเส้น<br>\r\n• กระเทียม 2-4 กลีบ<br>\r\n• แครอทปอกเปลือกหั่นเต๋า 750 กรัม<br>\r\n• น้ำซุปผัก 3 ถ้วย<br>\r\n• ผักชีสับ<br>\r\n• นมมะพร้าว 1 กล่อง<br>\r\n• น้ำมะนาว 1-3 ช้อนชา<br>\r\n• พริกคาเยนหั่น 1 เม็ด', '• 1. ใส่น้ำมันมะพร้าวลงในหม้อใช้ความร้อนปานกลาง ใส่หอมใหญ่ กระเทียม และขิงลงไปผัดประมาณ 5 นาที<br>\r\n• 2. ใส่แครอทลงไปผัดประมาณ 3 นาที เติมน้ำซุปกับผักชีลงไป รอจนเดือดลดเป็นไฟต่ำ เคี่ยวไปเรื่อย ๆ ประมาณ 15-40 นาทีหรือจนแครอทสุกนุ่ม<br>\r\n• 3. เทซุปแครอทลงไปปั่นจนเนียนละเอียด เทกลับลงไปในหม้อ เติมนมมะพร้าวลงไป ถ้าซุปข้นเกินไปเติมน้ำลงไปนิดหน่อย ใส่น้ำมะนาวกับเกลือลงไป<br>\r\n• 4. ตักใส่ถ้วย แต่งด้วยพริกคาเยนกับผักชี', 'images/f3_02.jpg', 1002),
(1012, 'ก๋วยเตี๋ยวเส้นแครอท', '• แครอทขูดเป็นเส้น 3 หัว<br>\r\n• น้ำมันมะกอก 1 ช้อนชา<br>\r\n• ผักบ๊อกฉ่อย หรือผักโขม<br>\r\n• ผักชีสับ<br>\r\n• มะนาวผ่าซีก<br>\r\n• งาคั่ว<br>\r\n• เต้าหู้หั่นสี่เหลี่ยม 1 ชิ้น<br>\r\n• ซีอิ๊วขาว 1 ช้อนชา', '• 1. ทำซอสขิง โดยคนผสมส่วนผสมทั้งหมดจนเข้ากัน<br>\r\n• 2. ทำเต้าหู้ทอด โดยตั้งกระทะใช้ไฟกลางค่อนข้าวสูง พอร้อนใส่น้ำมันลงไป ใส่เต้าหู้ลงทอดจนสุกเหลือง ตักใส่ชามผสม เติมซีอิ๊วขาวลงไป<br>\r\n• 3. ทำก๋วยเตี๋ยวเส้นแครอท โดย ใส่น้ำมันลงในกระทะใช้ไฟกลางค่อนข้างสูง ใส่เส้นแครอทและบ๊อกฉ่อยลงไปผัดประมาณ 2 นาที หรือจนแครอทเริ่มนิ่ม ใส่ซอสขิงลงไปผัดผสมประมาณ 1 นาที ปิดเตา ใส่เต้าหู้ทอดลงไปผัดพอเข้ากัน<br>\r\n• 4. จัดใส่ภาชนะ โรยผักชีสับกับงาคั่ว เสิร์ฟพร้อมมะนาว', 'images/f4_02.jpg', 1002),
(1456, 'asdf', 'dsadfsf', 'dsadfasdf ', '', 1234),
(472803458, 'สสสส', 'เเเเเเเ', 'พะพะพัพะัะีััร ', 'img_menu/472803458.jpg', 1009);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Or_id` int(11) NOT NULL,
  `Or_date` datetime NOT NULL,
  `Or_name` varchar(45) NOT NULL,
  `Or_address` varchar(100) NOT NULL,
  `Or_email` varchar(20) NOT NULL,
  `UserID` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `Deliver_method` varchar(100) NOT NULL DEFAULT 'one time order'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Or_id`, `Or_date`, `Or_name`, `Or_address`, `Or_email`, `UserID`, `status`, `Deliver_method`) VALUES
(27, '2019-11-13 22:17:53', 'botooo', '72', 'noummd@hotmail.com', 18, 3, 'one time order'),
(28, '2019-11-13 22:19:07', 'botooo', '72', 'noummd@hotmail.com', 18, 0, 'one time order'),
(29, '2019-11-13 22:30:40', 'botooo', '72', 'noummd@hotmail.com', 18, 0, 'one time order'),
(30, '2019-11-14 02:05:50', '', '', '', 18, 0, 'one time order'),
(31, '2020-01-12 19:34:29', '', '', '', 12, 0, 'one time order'),
(32, '2020-01-12 20:23:53', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(33, '2020-01-12 20:37:01', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(34, '2020-01-12 20:58:36', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(35, '2020-01-12 21:12:07', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(36, '2020-01-12 21:13:08', 'นันทวัมน์ ดวงมาลัย', '72 หมู่5 ตใทรายมูล ', 'nantawat@gmail.com', 12, 0, 'one time order'),
(37, '2020-01-13 16:20:30', 'pppp', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(38, '2020-01-13 17:05:41', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(39, '2020-01-13 17:31:56', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(40, '2020-01-15 09:32:56', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(41, '2020-01-15 09:33:08', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(42, '2020-01-15 09:45:31', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(43, '2020-01-15 09:46:16', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(44, '2020-01-15 09:48:15', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(45, '2020-01-15 09:48:52', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(46, '2020-01-15 10:54:13', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(47, '2020-01-15 10:55:19', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(48, '2020-01-15 10:58:21', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(49, '2020-01-15 11:41:19', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(50, '2020-01-15 12:23:21', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(51, '2020-01-15 12:28:33', 'trdtyertttert', 'fgdfgdfg', 'nantawat@gmail.com', 12, 0, 'one time order'),
(52, '2020-01-15 18:24:20', 'trdtyertttert', '', 'nantawat@gmail.com', 12, 0, 'one time order'),
(53, '2020-01-20 17:30:18', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'one time order'),
(54, '2020-01-20 17:30:50', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'one time order'),
(55, '2020-01-20 21:19:16', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'one time order'),
(56, '2020-01-23 14:43:42', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'one time order'),
(57, '2020-01-23 16:38:23', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'one time order'),
(58, '2020-01-23 16:44:26', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'one time order'),
(59, '2020-01-23 17:12:00', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'one time order'),
(60, '2020-01-23 17:16:04', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'ส่งทุกสัปดาห์'),
(61, '2020-01-23 22:18:54', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'ส่งครั้งเดียว'),
(62, '2020-01-24 00:24:33', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'ส่งครั้งเดียว'),
(63, '2020-01-26 10:58:43', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'ส่งครั้งเดียว'),
(64, '2020-01-26 12:50:35', 'adminadmin', 'addess', 'nantawat7183@kkumail', 1, 0, 'ส่งทุกสัปดาห์'),
(65, '2020-01-26 14:48:11', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'ส่งครั้งเดียว'),
(66, '2020-01-26 14:50:50', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'ส่งทุกสัปดาห์'),
(67, '2020-01-26 14:51:21', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'ส่งครั้งเดียว'),
(68, '2020-01-26 14:53:47', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'ส่งครั้งเดียว'),
(69, '2020-01-26 19:18:06', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'ส่งครั้งเดียว'),
(709084460, '2020-01-26 19:24:42', 'nanadoungmalil', 'aaaaaa', 'nantawat@kkumail.com', 2, 0, 'ส่งครั้งเดียว');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `Datail_id` int(11) NOT NULL,
  `Or_id` int(11) NOT NULL,
  `Pro_id` int(11) NOT NULL,
  `Qty` int(3) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`Datail_id`, `Or_id`, `Pro_id`, `Qty`, `UserID`) VALUES
(160, 28, 1001, 1, 0),
(161, 28, 1002, 2, 0),
(162, 29, 1001, 1, 0),
(163, 29, 1002, 2, 0),
(164, 30, 1003, 1, 0),
(165, 31, 1001, 2, 0),
(166, 32, 1001, 2, 0),
(167, 33, 1001, 2, 0),
(168, 34, 1001, 2, 0),
(169, 35, 1003, 1, 0),
(170, 36, 1003, 1, 0),
(171, 37, 1001, 1, 0),
(172, 38, 1001, 1, 0),
(173, 39, 1001, 1, 0),
(174, 40, 1001, 1, 0),
(175, 41, 1001, 1, 0),
(176, 42, 1001, 1, 0),
(177, 42, 1003, 1, 0),
(178, 43, 1001, 1, 0),
(179, 43, 1003, 1, 0),
(180, 43, 1004, 1, 0),
(181, 44, 1001, 1, 0),
(182, 44, 1003, 1, 0),
(183, 44, 1004, 1, 0),
(184, 45, 1001, 1, 0),
(185, 45, 1003, 1, 0),
(186, 45, 1004, 1, 0),
(187, 46, 1001, 1, 0),
(188, 46, 1003, 1, 0),
(189, 46, 1004, 1, 0),
(190, 47, 1001, 1, 0),
(191, 47, 1003, 1, 0),
(192, 47, 1004, 1, 0),
(193, 48, 1001, 1, 0),
(194, 48, 1003, 1, 0),
(195, 48, 1004, 1, 0),
(196, 52, 1001, 1, 0),
(197, 53, 1004, 1, 0),
(198, 54, 1004, 1, 0),
(199, 54, 1005, 1, 0),
(200, 55, 1004, 1, 0),
(201, 56, 1005, 1, 0),
(202, 56, 1006, 1, 0),
(203, 57, 1004, 3, 0),
(204, 58, 1006, 1, 0),
(205, 58, 1009, 1, 0),
(206, 59, 1005, 1, 0),
(207, 59, 1006, 1, 0),
(208, 60, 1004, 1, 0),
(209, 60, 1005, 1, 0),
(210, 61, 1005, 1, 0),
(211, 62, 1004, 1, 0),
(212, 63, 1006, 1, 0),
(213, 63, 1007, 1, 0),
(214, 63, 1009, 1, 0),
(215, 64, 921199081, 1, 0),
(216, 65, 1006, 1, 0),
(217, 66, 1006, 2, 0),
(218, 67, 921199081, 1, 0),
(219, 68, 1005, 1, 0),
(220, 69, 1006, 1, 0),
(221, 709084460, 182642141, 1, 0);

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
(6, 1254156, 300, 'yukuykuyk', 'gggg@hotmail.com', 45686, 'กรุงไทย', '2020-01-10 12:45:00', 'img_payment/1254156.jpg');

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
  `Pro_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Pro_id`, `Pro_name`, `Pro_price`, `Pro_amount`, `Pro_detail`, `Pro_property`, `Pro_img`, `Pro_type`) VALUES
(1005, 'ผักขม', 50, 19, 'ผักโขม มีชื่อวิทยาศาสตร์ว่า Amaranthus viridis จัดอยู่ในวงศ์ Amaranthaceae ผักโขมจะขึ้นอยู่ทั่วไปตามแหล่งธรรมชาติเช่น ป่าละเมาะ ริมทาง ชายป่าที่รกร้าง เป็นต้น และยังขึ้นเป็นวัชพืชในบริเวณสวนผัก สวนผลไม้ ไร่นาของชาวบ้าน ผักโขมเป็นพืชที่ขึ้นง่ายชาวบ้านจึงมักเก็บมาบริโภคในช่วงหน้าฝน', 'ช่วยบำรุงกำลังทำให้มีสุขภาพแข็งแรง\r\nผักโขมมีสารต่อต้านอนุมูลอิสระหลายชนิด จึงมีส่วนช่วยในการชะลอวัยและความเสื่อมของเซลล์ต่าง ๆ ในร่างกาย\r\nช่วยส่งเสริมการสร้างคอลลาเจน เพิ่มความยืดหยุ่นให้กับผิวหนัง จึงช่วยชะลอการเกิดริ้วรอยได้\r\nช่วยบำรุงและรักษาสุขภาพสายตา ป้องกันความเสื่อมของดวงตา\r\nมีส่วนช่วยบำรุงกระดูกและฟันให้แข็งแรง ลดความเสี่ยงของการเกิดโรคกระดูกพรุน', 'images/p3.png', 0),
(1006, 'ผักกวางตุ้ง', 60, 7, 'กวางตุ้ง เป็นผักที่นิยมนำมาประกอบอาหาร ไม่ว่าจะผัดหรือต้มเป็นแกงจืด ให้รสชาติหวานกรอบ<br>\r\nโดยเฉพาะเมนูบะหมี่หมูแดงหรือเกี๊ยวก็จะมีผักชนิดนี้แซมอยู่เสมอ โดยสามารถรับประทานได้ทั้งลำต้น ใบ และดอก ขึ้นอยู่กับความต้องการของผู้บริโภค<br> \r\nแต่จะนิยมนำมาปรุงให้สุกก่อนนำมารับประทาน (ตามธรรมชาติแล้วผักกวางตุ้งจะมีเส้นใยเหนียว ๆ เคี้ยวยากสักหน่อย)', 'กวางตุ้ง เป็นผักที่นิยมนำมาประกอบอาหาร ไม่ว่าจะผัดหรือต้มเป็นแกงจืด ให้รสชาติหวานกรอบ<br>\r\nโดยเฉพาะเมนูบะหมี่หมูแดงหรือเกี๊ยวก็จะมีผักชนิดนี้แซมอยู่เสมอ โดยสามารถรับประทานได้ทั้งลำต้น ใบ และดอก ขึ้นอยู่กับความต้องการของผู้บริโภค<br> \r\nแต่จะนิยมนำมาปรุงให้สุกก่อนนำมารับประทาน (ตามธรรมชาติแล้วผักกวางตุ้งจะมีเส้นใยเหนียว ๆ เคี้ยวยากสักหน่อย)', 'images/p4.png', 0),
(1007, 'ถั่วลันเตา', 40, 10, 'นเตา หรือ ถั่วลันเตา เป็นผักที่คนทั่วโลกรู้จักเป็นอย่างดี เพราะมีการเพาะปลูกเพื่อใช้เป็นอาหารมานานหลายพันปีแล้ว โดยเชื่อว่าถั่วลันเตาเดิมทีแล้วเป็นถั่วป่า มีถิ่นกำเนิดแถวเอเชียตอนกลาง หรือบางทีอาจเป็นอินเดีย และนักวิชาการให้การยอมรับว่าสายพันธุ์ที่เก่าแก่ที่สุดอยู่ในแถบชายแดนไทยพม่านี่เอง เพราะมีหลักฐานย้อนกลับไปถึงกว่าหนึ่งหมื่นปี', 'ยอดของถั่วลันเตามีเบตาแคโรทีนสูง ซึ่งช่วยในการบำรุงสายตาและผิวพรรณ (ยอดถั่วลันเตา)\r\nใช้บำบัดโรคเบาหวาน ผู้ป่วยที่เป็นโรคเบาหวานควรรับประทานเป็นประจำ ด้วยการใช้ฝักอ่อนสดนำมาล้างน้ำให้สะอาดและนำไปต้มจนสุก แล้วนำมารับประทานเป็นประจำ[5]\r\nช่วยลดระดับคอเลสเตอรอลในเลือด[8]\r\nเมล็ดช่วยบำรุงไขมัน (เมล็ด)[8]\r\nถั่วลันเตาอุดมไปด้วยวิตามินบี วิตามินบี 12 และสารเลซิทิน (Lecithin) ซึ่งจำเป็นต่อการทำงานของระบบประสาทมาก จึงช่วยป้องกันอาการขี้หลงขี้ลืมได้', 'images/p5.png', 0),
(1009, 'กระเทียม', 80, 10, 'ประโยชน์หลัก ๆ ของกระเทียมคงหนีไม่พ้นการนำมาใช้เพื่อช่วยปรุงรสชาติของอาหาร ไม่ว่าจะใช้ผัด แกง ทอด ยำ ต้มยำ หรือน้ำพริกต่าง ๆ อีกสารพัด\r\nกระเทียมเป็นเครื่องสมุนไพรที่อุดมไปด้วยวิตามินและแร่ธาตุหลายชนิด และยังเป็นพืชที่ธาตุซีลีเนียมสูงกว่าพืชชนิดอื่น ๆ อีกทั้งยังมีสารอะดีโนซีน (Adenosine) ซึ่งเป็นกรดนิวคลีอิกที่เป็นตัวสร้าง DNA และ RNA ของเซลล์ในร่างกาย\r\nนอกจากนี้ยังมีการนำกระเทียมไปแปรรูปเป็นผลิตภัณฑ์ต่าง ๆ อย่างหลากหลาย เช่น กระเทียมเสริมอาหาร กระเทียมสกัดผง สารสกัดน้ำมันกระเทียม ', 'ช่วยบำรุงผิวหนังให้มีสุขภาพดีและแข็งแรง\r\nช่วยเสริมสร้างการเจริญเติบโตของเนื้อเยื่อในร่างกาย\r\nช่วยป้องกันการเกิดโรคมะเร็ง\r\nช่วยเสริมสร้างภูมิต้านทานให้แก่ร่างกาย\r\nช่วยลดระดับคอเลสเตอรอลและน้ำตาลในเลือด\r\nช่วยปรับสมดุลในร่างกาย\r\nช่วยแก้อาการวิงเวียนศีรษะ อาการมึนงง ปวดศีรษะ หูอื้อ', 'images/p7.png', 0),
(257266980, 'กวางตุ้ง+กระเทียม', 200, 20, '๐กวางตุ้ง<br>\r\n๐กระเทียม', '', 'images/257266980.jpg', 1);

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
  `password` int(8) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `f_name`, `l_name`, `addess`, `email`, `U_tel`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'addess', 'nantawat7183@kkumail.com', '08888888', 123456, 'Admin'),
(2, 'nana', 'doungmalil', 'aaaaaa', 'nantawat@kkumail.com', '088888', 123456, 'user');

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
  MODIFY `Menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=472803459;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=709084461;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Datail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

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
  MODIFY `Pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `Sta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
