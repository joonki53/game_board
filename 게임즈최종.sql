-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: bbs
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `board`
--

DROP TABLE IF EXISTS `board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `board` (
  `idx` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pw` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `hit` int NOT NULL,
  `lock_post` int NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `board`
--

LOCK TABLES `board` WRITE;
/*!40000 ALTER TABLE `board` DISABLE KEYS */;
INSERT INTO `board` VALUES (1,'test','$2y$10$p15ZHQu2TlJ3p6V4xn1ts.Nq5errsTaz.34bDgqQhOZs8Jd4az8h2','첫번째 글','안녕하세요','2019-11-20',264,0),(2,'test','$2y$10$X8qRgc/1SQtUP2YziJLaJOCfllup0AoB/je3PcptSS.GTFvX/sAHO','두번째 글은 비밀글','ㅎㅎ','2019-11-20',20,1),(3,'test','$2y$10$e2DdkRR4IghpU6NrpM4NAOevv0UWdkwBHC.6KSd9.O4Kl1bUkMdp2','페이징','페이징','2019-11-20',3,0),(4,'test','$2y$10$47VlDiqmnlAbWKlUzT1HQ.6PzHuRQ.UX7rjD2C9ySAPYNbYeYRua.','페이징','페이징','2019-11-20',6,0),(6,'test','$2y$10$2nGGw4HXdiV3QTnjKMtgnejvZ493Q29Q6Q25XJPsDV7URkrRF0vNi','페이징','페이징','2019-11-20',0,0),(7,'test','$2y$10$jtU.tSMhXUcBXkE6.QgK7OU5wWvx9lGy8O3PAYm7nJjnjW9vmKr4C','페이징','페이징','2019-11-21',1,0),(8,'gildong','$2y$10$FbWXtWEFAdRgd4pzpS0kPO5b2clnqu0bC6RUpgaDUA3obQFfEzkou','페이징','카톡','2019-11-21',6,0),(9,'gildong','$2y$10$R1R3D4qwrWKCGg3eeOpCSeGWR9fbLaX73tKePwcHzP0RnnJnQuweK','페이징','카톡 vs 라인','2019-11-21',8,0),(10,'gildong','$2y$10$HHh4RM0s1qTeb5VYSPXseu09C0YZNkbDDJRYjQAj6o0fj5W5x.IBS','글쓰기 연습','바보','2019-11-21',100,0),(11,'host3','$2y$10$8o5nv5rl9uxrXxonw2i5OuJ.NwvaSPLUMS0yGDaZh09o1hzNTqRgy','ㅎㅇ','ㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎㅎ\r\nㅎㅎㅎㅎㅎㅎㅎㅎ','2023-11-15',37,0),(15,'host1','$2y$10$vasLgJ9fbsx7DZ.nPUsIS.ddrgnUuCuuaEnJY6FyAz2cN5fUBViLi','gd','gd','2023-12-04',4,0),(16,'host1','$2y$10$YEJ8P6k6AB1eihB4zV5qE.0opeCGGkaWuZsFfiRVIfhc.6fXy28j.','gd','gd','2023-12-04',2,1),(17,'host1','$2y$10$HaxOzRL8D7rsEshyzK4RSezt72UPxcvHLwMClxcCIx33gjkrd/3MK','gd','gd','2023-12-04',0,0),(18,'host1','$2y$10$cK1uj8Ba.e6k0sBqXAWoc.6g62y/Y3lKag05a9HB3FpEP5rNsyqRi','hi123','123','2023-12-04',1,0),(20,'host1','$2y$10$E.udeaKiKE6kUp7OFQZfFOdbU29oZg56usFPsttxIpgB5cI2tBwSK','test111','111111','2023-12-04',0,0),(21,'host1','$2y$10$NnI/qF39GJ5a84z6QpAuo..iZ6iGVfYd1S3fedkmmoG9unt6D7Rm.','로스트아크','312','2023-12-04',0,0),(22,'host1','$2y$10$SWQNO/Fhu9URGSUFOpvae.7SKXSNNyUl2inR.PwsfLZIVlErb11JK','로아','로스트아크,로아','2023-12-04',3,0),(23,'admin','$2y$10$exPPnzSY4SO0BTpCH4JWi.SzwA93sTYor9KxHa66iWkpyQF5ABvKG','로스트00','213124','2023-12-05',0,0);
/*!40000 ALTER TABLE `board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `friends` (
  `idx` int NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `fri_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friends`
--

LOCK TABLES `friends` WRITE;
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;
INSERT INTO `friends` VALUES (1,'ch2','ch','aad','dad');
/*!40000 ALTER TABLE `friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recv_note`
--

DROP TABLE IF EXISTS `recv_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recv_note` (
  `idx` int NOT NULL AUTO_INCREMENT,
  `recv_id` varchar(100) NOT NULL,
  `send_id` varchar(45) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recv_chk` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recv_note`
--

LOCK TABLES `recv_note` WRITE;
/*!40000 ALTER TABLE `recv_note` DISABLE KEYS */;
INSERT INTO `recv_note` VALUES (1,'ch2','ch','aaaaaa','wmdwkdmwmkdw','2023-11-23 06:07:30','0'),(2,'ch','ch2','RE:2222','222222','2023-11-23 06:07:51','0'),(3,'ch','ch2','qwdaw','awdawd','2023-11-23 06:08:09','0'),(4,'ch','ch','123124124','124312541235152','2023-11-23 06:08:37','0'),(5,'ch2','ch','1231241252353464','57567567567','2023-11-23 06:08:54','0');
/*!40000 ALTER TABLE `recv_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reply` (
  `idx` int NOT NULL AUTO_INCREMENT,
  `con_num` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pw` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reply`
--

LOCK TABLES `reply` WRITE;
/*!40000 ALTER TABLE `reply` DISABLE KEYS */;
INSERT INTO `reply` VALUES (19,10,'admin','$2y$10$6S43MUyLQtmaLkchexzkWeXoyyan8l7FruO0O50M1aoxOK53XaI7a','123123','2023-11-09 14:48:35'),(21,9,'admin','$2y$10$RV0FOSIqTK9jrTAGvV87O.LITAG5qQ2MNTaJAmBdYdZjjBVPtOoXC','313','2023-11-09 14:49:34'),(34,10,'admin','$2y$10$1LvBJJ6ydZyMf0UbSJODce5IMUZEaSz2i6b2mnOMoLit6hYa5fU1y','qwe','2023-11-10 12:51:38');
/*!40000 ALTER TABLE `reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `send_note`
--

DROP TABLE IF EXISTS `send_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `send_note` (
  `idx` int NOT NULL AUTO_INCREMENT,
  `recv_id` varchar(45) NOT NULL,
  `send_id` varchar(45) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `recv_chk` int NOT NULL,
  `send_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `send_note`
--

LOCK TABLES `send_note` WRITE;
/*!40000 ALTER TABLE `send_note` DISABLE KEYS */;
INSERT INTO `send_note` VALUES (1,'ch2','ch','aaaaaa','wmdwkdmwmkdw',1,'2023-11-23 06:07:30'),(2,'ch','ch2','RE:2222','222222',0,'2023-11-23 06:07:51'),(3,'ch','ch2','qwdaw','awdawd',0,'2023-11-23 06:08:09'),(4,'ch','ch','123124124','124312541235152',0,'2023-11-23 06:08:37'),(5,'ch2','ch','1231241252353464','57567567567',0,'2023-11-23 06:08:54');
/*!40000 ALTER TABLE `send_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `num` int NOT NULL AUTO_INCREMENT,
  `id` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` char(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `gender` char(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT 'NULL',
  `phone` char(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT 'NULL',
  `email` char(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `role` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'USER',
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'test','$2y$10$a0whK3OR0fNhXiip/FmcNu4cw82alizDfs782IufPsW/cmE2A1Wzq','홍길동','남자','01012345678','test3@daum.net','USER'),(2,'gildong','$2y$10$SUyjaYmzSlwUJDcbY9RRDOD5gfZzKqh1AtvHiAJyLmZXfwVE0azFe','홍길순','여자','01012345678','babo@babo','USER'),(4,'admin','$2y$10$Mgnc579yqNtpCd4nihf5LObEumXUN9GB5UtHh0gRRCkNLUYaO/8zG','마스터 관리자','남자','01047854885','gamesAdmin@naver.com','ADMIN'),(9,'123','$2y$10$Ew90U5Mgl0FoKwR62c2VHu/3uQoBPLIpE7GSIuO./o8Av/3pV7iGu','123','남자','123','123','USER'),(11,'test22','$2y$10$QFXSGNlvBaKObAE2vroqAeBzaj4Qyq25jKF4QlaOmDo07VKeoZEEK','123','남자','123','123','USER'),(12,'test222','$2y$10$Wg5fdcs71nGsYvdzXcuFU.e7TLdcxHxrRvMSCgSSm6.WwyD4DzgQS','132','남자','123','123','USER'),(13,'test23','$2y$10$m0V7QGGxWel3UtA5RyNBfeGKM8M7dXqThRbz71RQgwm6gLoTC9uVi','123','남자','123','123','USER'),(14,'','$2y$10$Bw/FCSmo1GuWv03NKjH49.AahLFKkaghdeBMR4fF7mXQKAEygkyl6','aa','남자','as','as','USER'),(15,'aaa','$2y$10$ojmFivyjz7x4pn21IYNiFuEyusakMD4iycD/PgVwA1XCtFj4zBK1u','aaa','남자','aaa','aaa','USER'),(16,'567','$2y$10$Au5iivfRfyNSrxSKEZ58BuSHCAKGw1pSuncHeoMUKxPcnqcvbh3Jm','567','남자','567','567','USER'),(17,'789','$2y$10$uMb1FEtrp0Ey7jFmlzbOoeR/lNo46PfWsfcPys7pWZcL/DXpA5Kkq','7898778','여자','789','789','USER'),(18,'host1','$2y$10$Ob4R53lXpA0U5LOtBERjOeerxNDt0Jg/lLm3NJWg.DQyy4/D/eeWO','손님1','여자','01035359876','host1@naver.com','USER'),(19,'host2','$2y$10$6Ed8U2gbv2sghFiYO0tGHO7Cu.vpPsItRm50eq1D8N0hve..KcKrq','고양이','남자','01045769879','host2@naver.com','USER'),(20,'host3','$2y$10$pQzA5MHw5pSD84CRa.prr.ITHaWYW8BOsvMlVfjsH5Vr4gJNn6hDm','홍길동','여자','01079839879','host3@naver.com','USER'),(21,'test12','$2y$10$92P.XokzrF4PSbPNMocvKOfFwdLtFTK4cwinjB04dDdjzAIjsei8O','123','남자','123','123','USER');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-05 10:15:33
