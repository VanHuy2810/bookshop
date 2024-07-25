-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: xshopdb
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_name` varchar(45) DEFAULT NULL,
  `bill_address` varchar(45) DEFAULT NULL,
  `bill_tel` varchar(250) DEFAULT NULL,
  `bill_email` varchar(250) DEFAULT NULL,
  `bill_pttt` varchar(250) DEFAULT '1' COMMENT '1. thanh toán trực tiếp 2.chuyển khoản 3. thanh toán online',
  `ngaydathang` varchar(50) NOT NULL,
  `total` int(20) DEFAULT '0',
  `bill_status` varchar(255) NOT NULL DEFAULT '0' COMMENT '0. đơn hàng mới 1. Đang xử lý 2. Đang giao hàng 3. Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(255) DEFAULT NULL,
  `iduser` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
INSERT INTO `bill` VALUES (1,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','05:17:55pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(2,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','05:42:25pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(3,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','05:47:13pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(4,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','05:51:07pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(5,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','05:52:49pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(6,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','05:52:58pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(7,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','05:54:58pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(8,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','05:56:32pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(9,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','05:56:41pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(10,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','05:59:20pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(11,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','06:02:36pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(12,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','06:07:06pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(13,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','06:09:22pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(14,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','06:11:45pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(15,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','06:12:50pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(16,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','06:13:20pm 16/10/2023',888,'0',NULL,NULL,NULL,NULL),(17,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','06:21:13pm 16/10/2023',3776,'0',NULL,NULL,NULL,NULL),(18,'1','255',' 01272529957a',' son9ahoang@gmail.com','on','06:25:09pm 16/10/2023',3776,'0',NULL,NULL,NULL,NULL),(19,'3','','','lam16a7hoang@gmail.com','on','08:53:08am 17/10/2023',3776,'0',NULL,NULL,NULL,NULL),(20,'3','','','lam16a7hoang@gmail.com','on','08:53:26am 17/10/2023',3776,'0',NULL,NULL,NULL,NULL),(21,'3','','','lam16a7hoang@gmail.com','on','08:54:08am 17/10/2023',3776,'0',NULL,NULL,NULL,NULL),(22,'3','','','lam16a7hoang@gmail.com','on','08:54:26am 17/10/2023',3776,'0',NULL,NULL,NULL,NULL),(23,'3','','','lam16a7hoang@gmail.com','on','08:54:55am 17/10/2023',3776,'0',NULL,NULL,NULL,NULL),(24,'3','','','lam16a7hoang@gmail.com','on','08:55:03am 17/10/2023',3776,'0',NULL,NULL,NULL,NULL),(25,'3','','','lam16a7hoang@gmail.com','on','08:55:06am 17/10/2023',3776,'0',NULL,NULL,NULL,NULL),(26,'3','','','lam16a7hoang@gmail.com','on','08:55:15am 17/10/2023',5776,'0',NULL,NULL,NULL,NULL),(27,'3','','','lam16a7hoang@gmail.com','on','08:55:28am 17/10/2023',5776,'0',NULL,NULL,NULL,NULL),(28,'3','','','lam16a7hoang@gmail.com','on','08:55:39am 17/10/2023',5776,'0',NULL,NULL,NULL,NULL),(29,'3','','','lam16a7hoang@gmail.com','on','08:55:48am 17/10/2023',5776,'0',NULL,NULL,NULL,NULL),(30,'3','','','lam16a7hoang@gmail.com','on','08:56:12am 17/10/2023',2888,'0',NULL,NULL,NULL,NULL),(31,'3','','','lam16a7hoang@gmail.com','on','08:56:47am 17/10/2023',2888,'0',NULL,NULL,NULL,NULL),(32,'3','','','lam16a7hoang@gmail.com','on','08:59:25am 17/10/2023',2888,'0',NULL,NULL,NULL,NULL),(33,'3','','','lam16a7hoang@gmail.com','on','09:17:25am 17/10/2023',3776,'0',NULL,NULL,NULL,NULL),(34,'4','','','lam16a7hoang@gmail.com','on','09:18:53am 17/10/2023',777,'0',NULL,NULL,NULL,NULL),(35,'gialam','','','lam16a7hoang@gmail.com','on','09:33:23am 17/10/2023',1665,'0',NULL,NULL,NULL,NULL),(36,'gialam','','','lam16a7hoang@gmail.com','on','09:58:10am 17/10/2023',1665,'0',NULL,NULL,NULL,NULL),(37,'lam1','','','lam16a7hoang@gmail.com','on','05:47:29pm 17/10/2023',3665,'0',NULL,NULL,NULL,NULL),(38,'lam1','','','lam16a7hoang@gmail.com','on','05:48:43pm 17/10/2023',3665,'0',NULL,NULL,NULL,NULL),(39,'lam1','','','lam16a7hoang@gmail.com','on','05:49:13pm 17/10/2023',3665,'0',NULL,NULL,NULL,NULL),(40,'lam1','','','lam16a7hoang@gmail.com','on','05:49:51pm 17/10/2023',3665,'0',NULL,NULL,NULL,NULL),(41,'lam1','','','lam16a7hoang@gmail.com','on','05:54:16pm 17/10/2023',5441,'0',NULL,NULL,NULL,NULL),(42,'lam1','','','lam16a7hoang@gmail.com','on','05:54:50pm 17/10/2023',5441,'0',NULL,NULL,NULL,NULL),(43,'lam1','','','lam16a7hoang@gmail.com','on','06:01:36pm 17/10/2023',6329,'0',NULL,NULL,NULL,NULL),(44,'lam1','','','lam16a7hoang@gmail.com','on','06:05:04pm 17/10/2023',0,'0',NULL,NULL,NULL,NULL),(45,'lam1','','','lam16a7hoang@gmail.com','on','06:06:08pm 17/10/2023',0,'0',NULL,NULL,NULL,NULL),(46,'lam1','','','lam16a7hoang@gmail.com','on','06:07:36pm 17/10/2023',888,'0',NULL,NULL,NULL,NULL),(47,'lam1','','','lam16a7hoang@gmail.com','on','07:09:55pm 17/10/2023',3776,'0',NULL,NULL,NULL,NULL),(48,'lam1','','','lam16a7hoang@gmail.com','on','07:10:08pm 17/10/2023',2000,'0',NULL,NULL,NULL,NULL),(49,'lam1','','','lam16a7hoang@gmail.com','on','07:19:03pm 17/10/2023',230,'0',NULL,NULL,NULL,NULL),(50,'lam1','','','lam16a7hoang@gmail.com','on','07:24:14pm 17/10/2023',230,'0',NULL,NULL,NULL,NULL),(51,'','','','','on','10:40:03am 18/10/2023',302888,'0',NULL,NULL,NULL,NULL),(52,'lam1','','','lam16a7hoang@gmail.com','on','10:44:51am 18/10/2023',310889,'0',NULL,NULL,NULL,3),(53,'lam1','','','lam16a7hoang@gmail.com','on','11:00:33am 18/10/2023',317009,'0',NULL,NULL,NULL,3),(54,'lam1','','','lam16a7hoang@gmail.com','on','11:33:43am 18/10/2023',313009,'0',NULL,NULL,NULL,3),(55,'lam1','','','lam16a7hoang@gmail.com','on','11:54:03am 18/10/2023',716666,'0',NULL,NULL,NULL,3),(56,'lam2','Quảng Trị','0856326126','thanvanhuy@gmail.com','on','12:01:44pm 20/10/2023',950000,'0',NULL,NULL,NULL,5),(57,'lam2','Quảng Trị','0856326126','thanvanhuy@gmail.com','on','05:41:17pm 21/10/2023',950000,'0',NULL,NULL,NULL,5),(58,'lam2','Quảng Trị','0856326126','thanvanhuy@gmail.com','on','07:18:09pm 22/10/2023',200001,'0',NULL,NULL,NULL,5),(59,'lam1','','','lam16a7hoang@gmail.com','on','01:49:02pm 06/11/2023',52500000,'0',NULL,NULL,NULL,3);
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ma_kh` (`idpro`),
  KEY `ma_hh` (`ngaybinhluan`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `binhluan`
--

LOCK TABLES `binhluan` WRITE;
/*!40000 ALTER TABLE `binhluan` DISABLE KEYS */;
INSERT INTO `binhluan` VALUES (6,'sản phẩm rất tốt',3,19,'12:20:09pm 18/10/2023'),(7,'wow so be au ti fu',3,18,'12:20:21pm 18/10/2023'),(9,'sản phẩm rất tốt',5,20,'07:23:22pm 22/10/2023'),(13,'máy tính đẹp',5,31,'11:31:21am 23/10/2023'),(14,'sản ',5,30,'11:31:28am 23/10/2023'),(15,'điện thoại rất đẹp',5,25,'11:33:15am 23/10/2023'),(16,'màu sắc tốt',5,24,'11:33:24am 23/10/2023'),(17,'tôi rất thích kiểu dáng của đt này',5,23,'11:33:42am 23/10/2023'),(18,'123',5,31,'12:00:21pm 23/10/2023'),(21,'sách h',3,43,'06:18:49pm 23/11/2023'),(22,'sách rất hay',3,43,'10:51:57am 24/11/2023');
/*!40000 ALTER TABLE `binhluan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `iduser` int(10) DEFAULT NULL,
  `idpro` int(10) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) DEFAULT '0',
  `soluong` int(10) DEFAULT NULL,
  `thanhtien` int(10) DEFAULT NULL,
  `idbill` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_htk_iduser_idx` (`iduser`,`idpro`),
  KEY `fk_htk_pro_idx` (`idpro`),
  CONSTRAINT `fk_htk_pro` FOREIGN KEY (`idpro`) REFERENCES `bill` (`id`),
  CONSTRAINT `fk_htk_user` FOREIGN KEY (`iduser`) REFERENCES `bill` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (1,1,10,'2.jpg','Dây chuyền',888,1,888,15),(2,1,10,'2.jpg','Dây chuyền',888,1,888,16),(3,1,10,'2.jpg','Dây chuyền',888,1,888,17),(4,1,10,'2.jpg','Dây chuyền',888,1,888,17),(5,1,11,'3.jpg','Vòng tay',2000,1,2000,17),(6,1,10,'2.jpg','Dây chuyền',888,1,888,18),(7,1,10,'2.jpg','Dây chuyền',888,1,888,18),(8,1,11,'3.jpg','Vòng tay',2000,1,2000,18),(9,3,10,'2.jpg','Dây chuyền',888,1,888,19),(10,3,10,'2.jpg','Dây chuyền',888,1,888,19),(11,3,11,'3.jpg','Vòng tay',2000,1,2000,19),(12,3,10,'2.jpg','Dây chuyền',888,1,888,20),(13,3,10,'2.jpg','Dây chuyền',888,1,888,20),(14,3,11,'3.jpg','Vòng tay',2000,1,2000,20),(15,3,10,'2.jpg','Dây chuyền',888,1,888,21),(16,3,10,'2.jpg','Dây chuyền',888,1,888,21),(17,3,11,'3.jpg','Vòng tay',2000,1,2000,21),(18,3,10,'2.jpg','Dây chuyền',888,1,888,22),(19,3,10,'2.jpg','Dây chuyền',888,1,888,22),(20,3,11,'3.jpg','Vòng tay',2000,1,2000,22),(21,3,10,'2.jpg','Dây chuyền',888,1,888,23),(22,3,10,'2.jpg','Dây chuyền',888,1,888,23),(23,3,11,'3.jpg','Vòng tay',2000,1,2000,23),(24,3,10,'2.jpg','Dây chuyền',888,1,888,24),(45,3,10,'2.jpg','Dây chuyền',888,1,888,46),(46,3,10,'2.jpg','Dây chuyền',0,888,1,888),(47,3,11,'3.jpg','Vòng tay',0,2000,1,2000),(52,3,13,'oo.jpg','Đồng hồ Black',0,300000,1,300000),(54,3,13,'oo.jpg','Đồng hồ Black',0,300000,1,300000),(55,3,11,'3.jpg','Vòng tay',0,2000,1,2000),(56,3,10,'2.jpg','Dây chuyền',0,8889,1,8889),(57,3,4,'5.jpg','0',0,120,1,120),(58,3,11,'3.jpg','Vòng tay',0,2000,1,2000),(59,3,11,'3.jpg','Vòng tay',0,2000,1,2000),(60,3,11,'3.jpg','Vòng tay',0,2000,1,2000),(61,3,13,'oo.jpg','Đồng hồ Black',0,300000,1,300000),(62,3,11,'3.jpg','Vòng tay',0,2000,1,2000),(63,3,10,'2.jpg','Dây chuyền',0,8889,1,8889),(64,3,4,'5.jpg','0',0,120,1,120),(65,3,11,'3.jpg','Vòng tay',0,2000,1,2000),(66,3,17,'88.jpg','Orange Nokia',0,650000,1,650000),(67,3,19,'pp.jpg','RED Camera X7',0,66666,1,66666),(68,5,18,'66.jpg','Blue Vali',0,300000,1,300000),(69,5,17,'88.jpg','Orange Nokia',0,650000,1,650000),(70,5,17,'88.jpg','Orange Nokia',0,650000,1,650000),(71,5,18,'66.jpg','Blue Vali',0,300000,1,300000),(72,5,16,'44.jpg','JL Watch Black',0,200001,1,200001),(73,3,28,'dh3.jpg','Smart Watch LL',0,11000000,1,11000000),(74,3,28,'dh3.jpg','Smart Watch LL',0,11000000,1,11000000),(75,3,28,'dh3.jpg','Smart Watch LL',0,11000000,1,11000000),(76,3,30,'LAASU-X512DA-hg.jpg','Laptop LAASU X51',0,19500000,1,19500000);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danhmuc`
--

LOCK TABLES `danhmuc` WRITE;
/*!40000 ALTER TABLE `danhmuc` DISABLE KEYS */;
INSERT INTO `danhmuc` VALUES (6,'Giả tưởng'),(7,'Kinh dị'),(9,'Bí ẩn'),(15,'Tình cảm'),(19,'Tiểu sử');
/*!40000 ALTER TABLE `danhmuc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khach_hang`
--

DROP TABLE IF EXISTS `khach_hang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL AUTO_INCREMENT,
  `ho_ten` varchar(255) NOT NULL,
  `mat_khau` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `kich_hoat` bit(1) DEFAULT NULL,
  `vai_tro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ma_kh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khach_hang`
--

LOCK TABLES `khach_hang` WRITE;
/*!40000 ALTER TABLE `khach_hang` DISABLE KEYS */;
/*!40000 ALTER TABLE `khach_hang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loai`
--

DROP TABLE IF EXISTS `loai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `loai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loai`
--

LOCK TABLES `loai` WRITE;
/*!40000 ALTER TABLE `loai` DISABLE KEYS */;
/*!40000 ALTER TABLE `loai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `tacgia` varchar(255) DEFAULT NULL,
  `nxb` varchar(255) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  `mota` varchar(10555) DEFAULT NULL,
  `luotxem` int(11) DEFAULT NULL,
  `iddm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lk_danhmuc_idx` (`iddm`),
  CONSTRAINT `lk_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanpham`
--

LOCK TABLES `sanpham` WRITE;
/*!40000 ALTER TABLE `sanpham` DISABLE KEYS */;
INSERT INTO `sanpham` VALUES (33,'Hoa tàn trong sương',180000,NULL,NULL,'sach7.jpg','',NULL,7),(34,'Vòm rừng',150000,NULL,NULL,'sach5.jpg','',NULL,9),(35,'Gió còn thổi mãi',200000,NULL,NULL,'sach6.jpg','',NULL,9),(36,'Tinh hoa phái đẹp',130000,NULL,NULL,'sach3.jpg','',NULL,15),(37,'Tần số cô đơn',250000,NULL,NULL,'sach4.jpg','',NULL,15),(38,'Tính Nữ Tỏa Rạng',200000,'Thục Linh','Nhà xuất bản:Thế Giới','sach2.jpg','Theo bạn, sức hút của một cô gái xuất phát từ đâu? Hạnh phúc của một cô gái đến từ điều gì? Phải chẳng là từ mỹ phẩm, nước hoa, túi xách hàng hiệu, địa vị xã hội, số người theo đuổi,...?\r\n\r\nThật ra, bạn tỏa rạng vì chính bạn, không phải nhờ son phấn, địa vị, hay một “tệp đính kèm” nào đó. Ngày nào bạn còn vịn vào những yếu tố bên ngoài để tự hào, khoe khoang bản thân, ngày đó bạn còn chưa đủ yêu mình.\r\n\r\nBên trong mỗi cô gái đều có một thứ ánh sáng mang tên Tính Nữ. Đó là bản chất của mỗi người, là trạng thái tự nhiên và an ổn nhất. Thứ ánh sáng này mang lại sự rạng rỡ mà không bất kỳ phấn son, quần áo, vật chất nào có thể so sánh được.\r\nKết nối với Tính Nữ nghĩa là lắng nghe sự chỉ dẫn và đón nhận nguồn cảm hứng từ bên trong. Khi gặp gỡ và kết thân với Tính Nữ, bạn sẽ được chữa lành, bạn sẽ bình an và sau tất cả, bạn tỏa rạng.\r\n\r\nCuốn sách Tính Nữ Tỏa Rạng - “Sức Mạnh Giấu Kín Của Tính Nữ Là Sự Bình An Và Giữa Lành” - Deepak Chopra được viết bởi tác giả Thục Linh - một chuyên gia khai vấn Quốc tế. Thông qua quá trình làm việc với khách hàng và trải nghiệm tự thân, tác giả đã đúc kết những hiểu biết của mình về Tính Nữ trong cuốn sách. Tác giả hy vọng cuốn sách sẽ là một người bạn đồng hành cùng các cô gái trên hành trình tìm kiếm nguồn sáng tự thân để tỏa rạng rực rỡ.\r\n\r\nVề tác giả:\r\n- Chuyên gia khai vấn (coach) có chứng nhận Quốc tế.\r\n- Giáo viên Yoga trường phái cổ điển.\r\n\r\nMã hàng	8935325016578\r\nTên Nhà Cung Cấp	AZ Việt Nam\r\nTác giả	Thục Linh\r\nNXB	Thế Giới\r\nNăm XB	2023\r\nNgôn Ngữ	Tiếng Việt\r\nTrọng lượng (gr)	220\r\nKích Thước Bao Bì	20 x 14 x 1 cm\r\nSố trang	200\r\nHình thức	Bìa Mềm\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Kỹ năng sống bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nTính Nữ Tỏa Rạng\r\n\r\nTheo bạn, sức hút của một cô gái xuất phát từ đâu? Hạnh phúc của một cô gái đến từ điều gì? Phải chẳng là từ mỹ phẩm, nước hoa, túi xách hàng hiệu, địa vị xã hội, số người theo đuổi,...?\r\n\r\nThật ra, bạn tỏa rạng vì chính bạn, không phải nhờ son phấn, địa vị, hay một “tệp đính kèm” nào đó. Ngày nào bạn còn vịn vào những yếu tố bên ngoài để tự hào, khoe khoang bản thân, ngày đó bạn còn chưa đủ yêu mình.\r\n\r\nBên trong mỗi cô gái đều có một thứ ánh sáng mang tên Tính Nữ. Đó là bản chất của mỗi người, là trạng thái tự nhiên và an ổn nhất. Thứ ánh sáng này mang lại sự rạng rỡ mà không bất kỳ phấn son, quần áo, vật chất nào có thể so sánh được.\r\nKết nối với Tính Nữ nghĩa là lắng nghe sự chỉ dẫn và đón nhận nguồn cảm hứng từ bên trong. Khi gặp gỡ và kết thân với Tính Nữ, bạn sẽ được chữa lành, bạn sẽ bình an và sau tất cả, bạn tỏa rạng.',NULL,15),(39,'Ngày tận thế',200000,NULL,NULL,'sach11.jpg','',NULL,6),(40,'Trong từng hơi thở',165000,NULL,NULL,'sach10.jpg','',NULL,15),(42,'Sango và người cá',210000,'Ninikumi','Nhà xuất bản:Dân Trí','sach8.jpg','“Tôi căm ghét những người nói dối.”\r\n\r\nCậu thiếu niên Sango sở hữu “đôi mắt của sự hiểu biết” có thể nhìn thấu những lời dối trá, mắt phải sẽ đau nhức mỗi khi nghe thấy ai đó nói dối. Vào đám tang của cha mẹ, giữa những lời tiếc thương giả dối của mọi người xung quanh, cậu đã gặp được một thiếu nữ kỳ lạ, người duy nhất nói điều chân thành.\r\n\r\nNingyo là một cô gái ma quái đã trở nên “bất tử” sau khi ăn loại thịt cấm. Thịt người cá là thuốc trường sinh bất lão, đồng thời cũng có thể cướp đi sinh mạng con người. Vì muốn người trong lòng mãi ở bên, Ningyo sẵn sàng dâng cho đối phương một phần máu thịt của bản thân.\r\n\r\nĐây là câu chuyện về một thiếu niên và một người cá, về sự dối trá và thành thật, về tình yêu và sự bất tử. Giữa họ có một mối quan hệ cân bằng kỳ lạ nhưng vì sự xuất hiện của chàng trai thứ ba - Akashi chỉ toàn nói những lời giả dối mà bắt đầu bước vào giai đoạn sụp đổ.\r\n\r\nMã hàng	8935325016899\r\nTên Nhà Cung Cấp	Skybooks\r\nTác giả	ninikumi\r\nNgười Dịch	Linh Nấm\r\nNXB	Dân Trí\r\nNăm XB	2023\r\nNgôn Ngữ	Tiếng Việt\r\nTrọng lượng (gr)	200\r\nKích Thước Bao Bì	18 x 13 x 0.9 cm\r\nSố trang	182\r\nHình thức	Bìa Mềm\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Manga Khác bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nSango Và Người Cá - Tập 1\r\n\r\nSango và người cá 1 - Dối trá và thành thật\r\n\r\n“Tôi căm ghét những người nói dối.”\r\n\r\nCậu thiếu niên Sango sở hữu “đôi mắt của sự hiểu biết” có thể nhìn thấu những lời dối trá, mắt phải sẽ đau nhức mỗi khi nghe thấy ai đó nói dối. Vào đám tang của cha mẹ, giữa những lời tiếc thương giả dối của mọi người xung quanh, cậu đã gặp được một thiếu nữ kỳ lạ, người duy nhất nói điều chân thành.',NULL,15),(43,'Muôn kiếp nhân sinh',360000,'Hồng Phong','Nhà xuất bản: Tổng Hợp Thành Phố','muonkiepnhansinh.jpg','“Tôi căm ghét những người nói dối.”\r\n\r\nCậu thiếu niên Sango sở hữu “đôi mắt của sự hiểu biết” có thể nhìn thấu những lời dối trá, mắt phải sẽ đau nhức mỗi khi nghe thấy ai đó nói dối. Vào đám tang của cha mẹ, giữa những lời tiếc thương giả dối của mọi người xung quanh, cậu đã gặp được một thiếu nữ kỳ lạ, người duy nhất nói điều chân thành.\r\n\r\nNingyo là một cô gái ma quái đã trở nên “bất tử” sau khi ăn loại thịt cấm. Thịt người cá là thuốc trường sinh bất lão, đồng thời cũng có thể cướp đi sinh mạng con người. Vì muốn người trong lòng mãi ở bên, Ningyo sẵn sàng dâng cho đối phương một phần máu thịt của bản thân.\r\n\r\nĐây là câu chuyện về một thiếu niên và một người cá, về sự dối trá và thành thật, về tình yêu và sự bất tử. Giữa họ có một mối quan hệ cân bằng kỳ lạ nhưng vì sự xuất hiện của chàng trai thứ ba - Akashi chỉ toàn nói những lời giả dối mà bắt đầu bước vào giai đoạn sụp đổ.\r\n\r\nMã hàng	8935325016899\r\nTên Nhà Cung Cấp	Skybooks\r\nTác giả	ninikumi\r\nNgười Dịch	Linh Nấm\r\nNXB	Dân Trí\r\nNăm XB	2023\r\nNgôn Ngữ	Tiếng Việt\r\nTrọng lượng (gr)	200\r\nKích Thước Bao Bì	18 x 13 x 0.9 cm\r\nSố trang	182\r\nHình thức	Bìa Mềm\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Manga Khác bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nSango Và Người Cá - Tập 1\r\n\r\nSango và người cá 1 - Dối trá và thành thật\r\n\r\n“Tôi căm ghét những người nói dối.”\r\n\r\nCậu thiếu niên Sango sở hữu “đôi mắt của sự hiểu biết” có thể nhìn thấu những lời dối trá, mắt phải sẽ đau nhức mỗi khi nghe thấy ai đó nói dối. Vào đám tang của cha mẹ, giữa những lời tiếc thương giả dối của mọi người xung quanh, cậu đã gặp được một thiếu nữ kỳ lạ, người duy nhất nói điều chân thành.',NULL,6),(46,'Đám Trẻ Ở Đại Dương',210000,'Châu Sa Đáy Mắt','Nhà xuất bản:Thế Giới','damtre.jpg','Đám trẻ ở đại dương đen là lời độc thoại và đối thoại của những đứa trẻ ở đại dương đen, nơi từng lớp sóng của nỗi buồn và tuyệt vọng không ngừng cuộn trào, lúc âm ỉ, khi dữ dội. Những đứa trẻ ấy phải vật lộn trong những góc tối tâm lý, với sự u uất đè nén từ tổn thương khi không được sinh ra trong một gia đình toàn vẹn, ấm êm, khi phải mang trên đôi vai non dại những gánh nặng không tưởng.\r\n\r\nSong song đó cũng là quá trình tự chữa lành vô cùng khó khăn của đám trẻ, cố gắng vươn mình ra khỏi đại dương đen, tìm cho mình một ánh sáng. Và chính những sự nỗ lực xoa dịu chính mình đó đã hóa thành những câu từ trong cuốn sách này, bất kể đau đớn thế nào.',NULL,9),(47,'Cây Cam Ngọt Của Tôi',165000,'José Mauro de Vasconcelos','Nhà xuất bản:Hội Nhà Văn','caycam.jpg','“Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng sống... một tác phẩm kinh điển của Brazil.” - Booklist\r\n\r\n“Một cách nhìn cuộc sống gần như hoàn chỉnh từ con mắt trẻ thơ… có sức mạnh sưởi ấm và làm tan nát cõi lòng, dù người đọc ở lứa tuổi nào.” - The National\r\n\r\nHãy làm quen với Zezé, cậu bé tinh nghịch siêu hạng đồng thời cũng đáng yêu bậc nhất, với ước mơ lớn lên trở thành nhà thơ cổ thắt nơ bướm. Chẳng phải ai cũng công nhận khoản “đáng yêu” kia đâu nhé. Bởi vì, ở cái xóm ngoại ô nghèo ấy, nỗi khắc khổ bủa vây đã che mờ mắt người ta trước trái tim thiện lương cùng trí tưởng tượng tuyệt vời của cậu bé con năm tuổi.\r\n\r\nCó hề gì đâu bao nhiêu là hắt hủi, đánh mắng, vì Zezé đã có một người bạn đặc biệt để trút nỗi lòng: cây cam ngọt nơi vườn sau. Và cả một người bạn nữa, bằng xương bằng thịt, một ngày kia xuất hiện, cho cậu bé nhạy cảm khôn sớm biết thế nào là trìu mến, thế nào là nỗi đau, và mãi mãi thay đổi cuộc đời cậu.\r\n\r\nMở đầu bằng những thanh âm trong sáng và kết thúc lắng lại trong những nốt trầm hoài niệm, Cây cam ngọt của tôi khiến ta nhận ra vẻ đẹp thực sự của cuộc sống đến từ những điều giản dị như bông hoa trắng của cái cây sau nhà, và rằng cuộc đời thật khốn khổ nếu thiếu đi lòng yêu thương và niềm trắc ẩn. Cuốn sách kinh điển này bởi thế không ngừng khiến trái tim người đọc khắp thế giới thổn thức, kể từ khi ra mắt lần đầu năm 1968 tại Brazil.\r\n\r\nTÁC GIẢ:\r\n\r\nJOSÉ MAURO DE VASCONCELOS (1920-1984) là nhà văn người Brazil. Sinh ra trong một gia đình nghèo ở ngoại ô Rio de Janeiro, lớn lên ông phải làm đủ nghề để kiếm sống. Nhưng với tài kể chuyện thiên bẩm, trí nhớ phi thường, trí tưởng tượng tuyệt vời cùng vốn sống phong phú, José cảm thấy trong mình thôi thúc phải trở thành nhà văn nên đã bắt đầu sáng tác năm 22 tuổi. Tác phẩm nổi tiếng nhất của ông là tiểu thuyết mang màu sắc tự truyện Cây cam ngọt của tôi. Cuốn sách được đưa vào chương trình tiểu học của Brazil, được bán bản quyền cho hai mươi quốc gia và chuyển thể thành phim điện ảnh. Ngoài ra, José còn rất thành công trong vai trò diễn viên điện ảnh và biên kịch.\r\n\r\nMã hàng	8935235228351\r\nTên Nhà Cung Cấp	Nhã Nam\r\nTác giả	José Mauro de Vasconcelos\r\nNgười Dịch	Nguyễn Bích Lan, Tô Yến Ly\r\nNXB	NXB Hội Nhà Văn\r\nNăm XB	2020\r\nTrọng lượng (gr)	280\r\nKích Thước Bao Bì	20 x 14.5 cm\r\nSố trang	244\r\nHình thức	Bìa Mềm\r\nSản phẩm hiển thị trong	\r\nĐồ Chơi Cho Bé - Giá Cực Tốt\r\nNhã Nam\r\nRƯỚC DEAL LINH ĐÌNH VUI ĐÓN TRUNG THU\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Tiểu thuyết bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\n“Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng sống... một tác phẩm kinh điển của Brazil.” - Booklist\r\n\r\n“Một cách nhìn cuộc sống gần như hoàn chỉnh từ con mắt trẻ thơ… có sức mạnh sưởi ấm và làm tan nát cõi lòng, dù người đọc ở lứa tuổi nào.” - The National\r\n\r\nHãy làm quen với Zezé, cậu bé tinh nghịch siêu hạng đồng thời cũng đáng yêu bậc nhất, với ước mơ lớn lên trở thành nhà thơ cổ thắt nơ bướm. Chẳng phải ai cũng công nhận khoản “đáng yêu” kia đâu nhé. Bởi vì, ở cái xóm ngoại ô nghèo ấy, nỗi khắc khổ bủa vây đã che mờ mắt người ta trước trái tim thiện lương cùng trí tưởng tượng tuyệt vời của cậu bé con năm tuổi.',NULL,6),(48,'Kẻ Giấu Mặt',140000,'Nicholas Sparks','Nhà xuất bản:Hội Nhà Văn','kegiaumat.jpg','Cuộc đời mỗi người có thể không tránh khỏi những ngày tang thương ảm đạm, nhưng cũng có những ngày hoàn hào, ngày huy hoàng lộng lẫy, khi mọi thứ dường như đều khả dĩ. Cũng như Colin đã vùng vẫy để bỏ lại sau lưng một quá khứ bạo lực và những câu chuyện không vừa ý, để thận trọng nhận lấy cơ hội thứ hai làm lại cuộc đời: thậm chí còn đánh liều bước vào một mối quan hệ mới mẻ với Maria, cô gái tình cờ gặp gỡ trên con đường mưa.\r\n\r\nNhưng bóng ma quá khứ của Maria, đột ngột trườn đến như một con rắn trong đêm, mang theo thù hận hiểm độc, đã thách thức tất cả những giả định ban đầu của hai người về nhau và về chính mình.',NULL,9),(49,'Tiểu Sử Elon Musk',300000,'Walter Isaacson','Nhà xuất bản:Công Thương','elon.jpg','Tiểu sử Elon Musk là cuộc khám phá về cuộc sống và công việc của một biểu tượng thời hiện đại, mang đến những hiểu biết sâu sắc về tâm trí của một người có tầm nhìn được thúc đẩy bởi sự theo đuổi không ngừng đổi mới và tiến bộ. Đây là một cuốn sách hấp dẫn dành cho những ai quan tâm đến sự giao thoa giữa công nghệ, tinh thần kinh doanh và tâm lý con người.\r\n\r\nTiểu sử Elon Musk của Walter Isaacson đi sâu vào cuộc đời và tính cách của một trong những nhà đổi mới hấp dẫn và gây tranh cãi nhất trong thời đại chúng ta, Elon Musk. Cuốn tiểu sử đưa người đọc vào một hành trình gần gũi xuyên suốt cuộc đời đầy biến động của Musk, khám phá những trải nghiệm thời thơ ấu của anh ở Nam Phi, mối quan hệ phức tạp của anh với cha mình và quá trình phát triển thành một doanh nhân có tầm nhìn xa trông rộng, được biết đến với việc dẫn đầu các dự án đột phá trong lĩnh vực xe điện, thám hiểm không gian và trí tuệ nhân tạo cũng như những mục tiêu đầy tham vọng của ông đối với nhân loại.',NULL,19),(50,'Cuộc đời Einstein ',162000,'Walter Isaacson','Nhà xuất bản:Thế Giới','anhtanh.jpg','Cuốn sách khai thác và công bố những tư liệu mới nhất về Einstein, làm rõ những giai đoạn, sự kiện và vấn đề trong cuộc sống cá nhân của Einstein. Cuốn sách cũng chỉ ra và làm rõ những chặng trên con đường khoa học của Einstein, cho thấy những suy tư và trăn trở của ông để đưa ra những lý thuyết vật lý làm thay đổi toàn bộ nền vật lý thế kỷ XX, cũng như cuộc tranh luận của ông với các nhà cơ học lượng tử. Tác giả đã lột tả được cá tính, tư tưởng chính trị và những đặc điểm trong trí tuệ, nhân cách của Einstein một cách sinh động.',NULL,19),(51,'Thần hổ',260000,'TchyA','Nhà xuất bản:Kim Đồng','thanho.jpg','“Lấy óc khoa học mà xét đoán, thì chuyện kể lại sau đây là một câu chuyện hoang đường. Nhưng ai đã từng đọc hết pho Liêu trai và bộ Truyền kỳ mạn lục, ai đã từng ngụ cư dăm bảy tháng trên các miền nước độc rừng thiêng, người ấy đọc truyện này ắt hẳn lấy làm thú vị, cho tôi không phải cố ý đặt ra một tiểu thuyết hão huyền. Phàm các truyện quái dị, huyền hoặc, có tự xưa đến nay, truyện nào cũng phát nguyên ở một hiện trạng – mắt tác giả đã thấy hoặc tai tác giả đã nghe – cũng do sự thực mà ra. Vẫn biết người viết truyện, tựa như cô ả thêu hoa dệt gấm, vẽ vời thêm cho ly kỳ, đẹp đẽ; song câu chuyện không phải chỉ toàn ở trong trí tưởng tượng của văn sĩ mà thôi. Cốt nó vẫn là một việc có thực. Việc đó nhiều khi bởi một trường hợp lạ lùng gây nên, một trường hợp ít người được trải, cho nên ta hay cho là vô lý, hoang đường.',NULL,7),(52,'Vàng và máu',120000,'Thế Lữ','Nhà xuất bản:Kim Đồng','vvm.jpg','“Thuở nhỏ tôi theo học chữ Nho. Thầy đồ tôi là một người yêu văn, nhất là yêu tiểu thuyết. Tối đến, khi bọn trò chúng tôi đã học thuộc bài, thầy lại đem các truyện Tàu ra đọc và dịch sang quốc âm cho chúng tôi nghe.\r\n\r\nTrong những truyện ấy, tôi thích nhất truyện Liêu Trai. Thầy dịch bằng một lối văn vừa giản dị, vừa có thi vị, thỉnh thoảng lại chêm một câu bình phẩm khôi hài, khiến chúng tôi cười rộ, và khiến tôi, tuy thời ấy mới chín, mười tuổi, mà nghe những truyện thần tiên ma quỷ không chút sợ hãi. Tôi chỉ mơ màng yêu mến những nhân vật trong truyện. Tôi yên trí rằng yêu tinh là linh hồn hiện thành hình người để làm những điều thiện, để trị tội những kẻ ác, để trả ân trả oán trong nhân gian.',NULL,7),(53,'Tiểu Sử Steve Jobs',300000,'Walter Isaacson','Nhà xuất bản:Lao Động','sotipjob.jpg','Cuốn tiểu sử với tiêu đề ngắn gọn Steve Jobs do cựu thư ký tòa soạn của tạp chí Time, Walter Isaacson biên soạn, dựa trên 40 cuộc phỏng vấn với Steve Jobs trong 2 năm qua cùng các cuộc phỏng vấn với hơn 100 người thân, bạn bè, đồng nghiệp và đối thủ của ông, phát hành trên Amazon vào ngày 24/10 đang liên tục đứng vị trí số 1 danh sách sách bán chạy nhất của cả Amazon lẫn Barnes & Nobles. Đây cũng là cuốn tiểu sử đầu tiên và duy nhất nhận được sự đồng ý của Steve Jobs. Walter Isaacson cũng là người viết tiểu sử nổi tiếng, với 2 tác phẩm viết về Benjamin Franklin và Albert Einstein.',NULL,19),(54,'Con Hạc Thờ Bí Ẩn',260000,'Nguyễn Quang Thân','Nhà xuất bản:NXB Kim Đồng','con.jpg','Hạnh và Quang đang mơ màng trong khu vườn của bà ngoại, chợt có tiếng chim đại bàng vỗ cánh rồi đậu xuống ngọn cây, phía trên chùm khế…\r\n\r\nCon hạc thờ có từ đời xửa đời xưa, trên mình luôn phủ một lớp bụi thời gian, đột nhiên sải rộng cánh với những chiếc lông dài mềm mượt…\r\n\r\nĐức thông minh, tự cho mình là giỏi nhất, chẳng muốn đi chung với các bạn nên một mình lạc vào vương quốc những người kiêu ngạo. Cậu được tôn lên làm Vua. Nhưng có một âm mưu trong nghi thức giải phẫu Nhà vua mà cậu không hề hay biết…\r\n\r\nRất nhiều điều bí ẩn và hấp dẫn đang chờ bạn khám phá…',NULL,9),(55,'Nhà Giả Kim',160000,'Paulo Coelho','Nhà xuất bản: Hội Nhà Văn','ngk.jpg','Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người. \r\n\r\nTiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.\r\n\r\n“Nhưng nhà luyện kim đan không quan tâm mấy đến những điều ấy. Ông đã từng thấy nhiều người đến rồi đi, trong khi ốc đảo và sa mạc vẫn là ốc đảo và sa mạc. Ông đã thấy vua chúa và kẻ ăn xin đi qua biển cát này, cái biển cát thường xuyên thay hình đổi dạng vì gió thổi nhưng vẫn mãi mãi là biển cát mà ông đã biết từ thuở nhỏ. Tuy vậy, tự đáy lòng mình, ông không thể không cảm thấy vui trước hạnh phúc của mỗi người lữ khách, sau bao ngày chỉ có cát vàng với trời xanh nay được thấy chà là xanh tươi hiện ra trước mắt. ‘Có thể Thượng đế tạo ra sa mạc chỉ để cho con người biết quý trọng cây chà là,’ ông nghĩ.”\r\n\r\n- Trích Nhà giả kim\r\n\r\nNhận định\r\n\r\n“Sau Garcia Márquez, đây là nhà văn Mỹ Latinh được đọc nhiều nhất thế giới.” - The Economist, London, Anh\r\n\r\n \r\n\r\n“Santiago có khả năng cảm nhận bằng trái tim như Hoàng tử bé của Saint-Exupéry.” - Frankfurter Allgemeine Zeitung, Đức\r\n\r\nMã hàng	8935235226272\r\nTên Nhà Cung Cấp	Nhã Nam\r\nTác giả	Paulo Coelho\r\nNgười Dịch	Lê Chu Cầu\r\nNXB	NXB Hội Nhà Văn\r\nNăm XB	2020\r\nTrọng lượng (gr)	220\r\nKích Thước Bao Bì	20.5 x 13 cm\r\nSố trang	227\r\nHình thức	Bìa Mềm\r\nSản phẩm hiển thị trong	\r\nĐồ Chơi Cho Bé - Giá Cực Tốt\r\nNhã Nam\r\nTop sách được phiên dịch nhiều nhất\r\nRƯỚC DEAL LINH ĐÌNH VUI ĐÓN TRUNG THU\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Tiểu thuyết bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nTất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người. \r\n\r\nTiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.',NULL,6),(56,'Điều Này Rồi Cũng Qua',253000,'Milena Busquets','Nhà xuất bản:NXB Dân Trí','dieunay.jpg','“Một cuốn tiểu thuyết phóng khoáng, phập phồng nhục dục, đam mê và sức sống. Một tác phẩm dao động giữa tự truyện hư cấu và tiểu thuyết tâm lý. Sâu sắc, hài hước, Điều này rồi cũng qua được viết bằng một phong cách thực sự lôi cuốn con tim. Và lôi cuốn cả sự ủng hộ của chúng ta nữa.” - Tạp chí Lire\r\n',NULL,6);
/*!40000 ALTER TABLE `sanpham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taikhoan`
--

LOCK TABLES `taikhoan` WRITE;
/*!40000 ALTER TABLE `taikhoan` DISABLE KEYS */;
INSERT INTO `taikhoan` VALUES (3,'lam1','123','lam16a7hoang@gmail.com',NULL,NULL,1),(4,'gialam','123','lam16a7hoang@gmail.com',NULL,NULL,NULL),(5,'lam2','123','thanvanhuy@gmail.com','Quảng Trị','0856326126',1),(6,'lam258','123','lam111@gmail.com',NULL,NULL,NULL);
/*!40000 ALTER TABLE `taikhoan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-25 18:39:13
