-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: fxklu
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `beneficiarytxfiles`
--

DROP TABLE IF EXISTS `beneficiarytxfiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beneficiarytxfiles` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ForexBenefFileCustId` int(11) NOT NULL,
  `ForexBenefFileCustCode` varchar(100) NOT NULL,
  `ForexBenefFileKind` varchar(20) NOT NULL,
  `ForexBenefFileType` varchar(200) NOT NULL,
  `ForexBenefFilePath` varchar(100) NOT NULL,
  `ForexBenefFileName` varchar(100) NOT NULL,
  `Cdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Udate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beneficiarytxfiles`
--

LOCK TABLES `beneficiarytxfiles` WRITE;
/*!40000 ALTER TABLE `beneficiarytxfiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `beneficiarytxfiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `busers`
--

DROP TABLE IF EXISTS `busers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `busers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CustCode` varchar(50) NOT NULL,
  `BuCode` varchar(50) NOT NULL,
  `BuName` varchar(50) NOT NULL,
  `BuAddress` varchar(250) NOT NULL,
  `BuCountry` varchar(50) NOT NULL,
  `BuBankName` varchar(120) NOT NULL,
  `BuBankAddress` varchar(250) NOT NULL,
  `BuBankCountry` varchar(50) NOT NULL,
  `BuIBAN` varchar(20) DEFAULT NULL,
  `BuSwift` varchar(20) DEFAULT NULL,
  `BuFFC` varchar(20) DEFAULT NULL,
  `BuReference` varchar(50) DEFAULT NULL,
  `BuStatus` int(11) DEFAULT NULL,
  `Cdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Udate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `busers`
--

LOCK TABLES `busers` WRITE;
/*!40000 ALTER TABLE `busers` DISABLE KEYS */;
/*!40000 ALTER TABLE `busers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `UserFullName` varchar(255) NOT NULL,
  `UserEmail` varchar(255) NOT NULL,
  `UserPasswordHash` varchar(255) NOT NULL,
  `UserType` varchar(2) NOT NULL,
  `UserOrderId` varchar(10) NOT NULL,
  `UserRoleId` varchar(50) NOT NULL,
  `UserStagesAllowed` varchar(50) NOT NULL,
  `UserValidator` tinyint(1) DEFAULT 0,
  `UserDeactivated` tinyint(1) DEFAULT 0,
  `User2faEnabled` tinyint(1) NOT NULL DEFAULT 0,
  `User2faHash` varchar(20) DEFAULT NULL,
  `Cdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Udate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `UserPhoneNumber` varchar(10) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'meliza','Meliza Baez','meliza.baez@klu.mx','25f43b1486ad95a1398e3eeb3d83bc4010015fcc9bedb35b432e00298d5021f7','OB','010','1','1,3,7',0,0,1,'YHZ2RU5H3UXHHI52','2023-01-04 00:43:54','2023-03-22 00:26:31','5547586387'),(2,'jacob','Jacob Ortega','jacob@klu.mx','8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918','AD','0','99','-1,1,2,3,4,6,7,8,9,10',0,0,1,'RQPQBJ2OQWYYB3KD','2023-01-14 06:31:32','2023-03-05 08:29:36','5554041677'),(3,'ivan','Iván Delgado','ivan.delgado@klu.mx','8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918','PL','030','3','-1,6,9,10',0,0,1,'NRDQLIK4Y3DXV5D3','2023-01-15 17:10:44','2023-03-04 11:02:14','5558074005');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `useractivitylogs`
--

DROP TABLE IF EXISTS `useractivitylogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `useractivitylogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `user_ip_address` varchar(50) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `referrer_url` varchar(255) DEFAULT NULL,
  `Cdate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `useractivitylogs`
--

LOCK TABLES `useractivitylogs` WRITE;
/*!40000 ALTER TABLE `useractivitylogs` DISABLE KEYS */;
INSERT INTO `useractivitylogs` VALUES (1,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php?error=invalid','2023-04-02 20:48:37'),(2,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:44:34'),(3,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:45:10'),(4,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:46:21'),(5,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:46:21'),(6,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:47:48'),(7,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:47:58'),(8,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:48:09'),(9,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:48:10'),(10,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:48:42'),(11,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:48:43'),(12,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:51:02'),(13,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:51:27'),(14,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:52:30'),(15,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:53:51'),(16,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:55:52'),(17,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:57:05'),(18,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:57:06'),(19,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:57:28'),(20,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:57:43'),(21,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:57:59'),(22,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 18:58:34'),(23,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 19:00:31'),(24,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 19:00:48'),(25,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 19:02:05'),(26,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:02:06'),(27,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:02:07'),(28,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:17:08'),(29,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:17:55'),(30,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:18:37'),(31,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:18:48'),(32,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:19:20'),(33,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:20:46'),(34,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:23:31'),(35,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:23:33'),(36,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 19:23:36'),(37,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:23:39'),(38,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 19:31:19'),(39,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 19:31:20'),(40,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:31:21'),(41,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 19:31:23'),(42,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:31:28'),(43,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 19:31:29'),(44,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 19:31:30'),(45,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:32:06'),(46,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 19:52:29'),(47,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:52:31'),(48,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 19:52:44'),(49,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:52:53'),(50,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 19:55:24'),(51,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:55:27'),(52,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:55:58'),(53,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:56:12'),(54,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:56:32'),(55,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 19:59:44'),(56,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 20:00:19'),(57,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 20:01:52'),(58,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 20:32:05'),(59,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 20:32:07'),(60,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-04 22:26:41'),(61,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 22:26:42'),(62,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 22:32:06'),(63,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 22:33:54'),(64,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 22:45:44'),(65,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 22:45:50'),(66,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 22:46:28'),(67,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 22:47:26'),(68,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 22:47:45'),(69,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 22:49:20'),(70,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 22:50:14'),(71,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 22:50:48'),(72,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 22:51:18'),(73,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 22:52:33'),(74,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 22:53:03'),(75,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 22:56:45'),(76,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdsearch=asd','http://127.0.0.1/projects/fxk/buregister.php?','2023-04-04 22:56:49'),(77,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdasdasdsearch=asdasdasd','http://127.0.0.1/projects/fxk/buregister.php?search=asd','2023-04-04 22:56:52'),(78,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdasdasdsearch=asdasdasd','http://127.0.0.1/projects/fxk/buregister.php?search=asd','2023-04-04 22:59:04'),(79,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdasdasdsearch=asdasdasd','http://127.0.0.1/projects/fxk/buregister.php?search=asd','2023-04-04 23:01:36'),(80,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdasdasdsearch=asdasdasd','http://127.0.0.1/projects/fxk/buregister.php?search=asd','2023-04-04 23:01:44'),(81,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdasdasdsearch=asdasdasd','http://127.0.0.1/projects/fxk/buregister.php?search=asd','2023-04-04 23:03:03'),(82,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdasdasdsearch=asdasdasd','http://127.0.0.1/projects/fxk/buregister.php?search=asd','2023-04-04 23:03:41'),(83,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdasdasdsearch=asdasdasd','http://127.0.0.1/projects/fxk/buregister.php?search=asd','2023-04-04 23:04:05'),(84,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdasdasdsearch=asdasdasd','http://127.0.0.1/projects/fxk/buregister.php?search=asd','2023-04-04 23:04:20'),(85,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdasdasdsearch=asdasdasd','http://127.0.0.1/projects/fxk/buregister.php?search=asd','2023-04-04 23:04:21'),(86,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdasdasdsearch=asdasdasd','http://127.0.0.1/projects/fxk/buregister.php?search=asd','2023-04-04 23:05:26'),(87,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=asdasdasdsearch=asdasdasd','http://127.0.0.1/projects/fxk/buregister.php?search=asd','2023-04-04 23:06:19'),(88,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melisearch=meli','/','2023-04-04 23:07:04'),(89,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:07:09'),(90,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:07:11'),(91,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 23:07:14'),(92,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=search=','http://127.0.0.1/projects/fxk/buregister.php?search=meliza','2023-04-04 23:07:26'),(93,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:07:29'),(94,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:11:00'),(95,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:13:16'),(96,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:13:46'),(97,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:13:47'),(98,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:13:47'),(99,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:14:19'),(100,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:14:20'),(101,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:15:01'),(102,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:15:55'),(103,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:15:57'),(104,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:17:44'),(105,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:17:45'),(106,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=','2023-04-04 23:18:28'),(107,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:18:37'),(108,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:19:09'),(109,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:19:56'),(110,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:21:20'),(111,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:21:56'),(112,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:22:58'),(113,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:23:34'),(114,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:23:36'),(115,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:24:12'),(116,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:24:37'),(117,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:24:55'),(118,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:26:34'),(119,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:27:11'),(120,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:27:48'),(121,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:28:27'),(122,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:28:28'),(123,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php?search=melizasearch=meliza','http://127.0.0.1/projects/fxk/buregister.php?search=meliza','2023-04-04 23:33:57'),(124,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:34:44'),(125,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:36:43'),(126,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:37:58'),(127,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:37:59'),(128,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:39:41'),(129,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:39:42'),(130,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:40:36'),(131,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:41:23'),(132,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:43:28'),(133,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/myalerts.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 23:47:28'),(134,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','/','2023-04-04 23:47:37'),(135,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 23:52:07'),(136,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 23:55:44'),(137,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 23:57:02'),(138,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 23:57:06'),(139,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 23:57:21'),(140,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 23:57:33'),(141,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-04 23:57:38'),(142,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-04 23:57:41'),(143,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/buregister.php','2023-04-05 00:04:50'),(144,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/start.php','http://127.0.0.1/projects/fxk/loginWith2FA.php','2023-04-05 00:33:48'),(145,'Meliza Baez','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','http://127.0.0.1/projects/fxk/buregister.php','http://127.0.0.1/projects/fxk/start.php','2023-04-05 00:36:05');
/*!40000 ALTER TABLE `useractivitylogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `useralerts`
--

DROP TABLE IF EXISTS `useralerts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `useralerts` (
  `AlertId` int(11) NOT NULL AUTO_INCREMENT,
  `UserAlertOrderId` varchar(10) NOT NULL,
  `UserAlertContent` varchar(150) NOT NULL,
  `UserAlertType` varchar(20) NOT NULL,
  `UserAlertStatus` tinyint(1) NOT NULL,
  `Cdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Udate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`AlertId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `useralerts`
--

LOCK TABLES `useralerts` WRITE;
/*!40000 ALTER TABLE `useralerts` DISABLE KEYS */;
/*!40000 ALTER TABLE `useralerts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usernotes`
--

DROP TABLE IF EXISTS `usernotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usernotes` (
  `noteid` int(11) NOT NULL AUTO_INCREMENT,
  `custid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `notecontent` text NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`noteid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usernotes`
--

LOCK TABLES `usernotes` WRITE;
/*!40000 ALTER TABLE `usernotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `usernotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userrelevantlogs`
--

DROP TABLE IF EXISTS `userrelevantlogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userrelevantlogs` (
  `LogId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` varchar(50) NOT NULL,
  `UserAction` varchar(100) NOT NULL,
  `Cdate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`LogId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userrelevantlogs`
--

LOCK TABLES `userrelevantlogs` WRITE;
/*!40000 ALTER TABLE `userrelevantlogs` DISABLE KEYS */;
INSERT INTO `userrelevantlogs` VALUES (1,'meliza','Error al intentar ingresar al sistema con 2FA','2023-04-02 20:48:30'),(2,'meliza','Ingreso al sistema con 2FA','2023-04-02 20:48:36'),(3,'meliza','Ingreso al sistema con 2FA','2023-04-04 18:44:34'),(4,'meliza','Ingreso al sistema con 2FA','2023-04-04 19:52:29'),(5,'meliza','Ingreso al sistema con 2FA','2023-04-04 20:32:05'),(6,'meliza','Ingreso al sistema con 2FA','2023-04-04 22:26:41'),(7,'meliza','Ingreso al sistema con 2FA','2023-04-05 00:33:48');
/*!40000 ALTER TABLE `userrelevantlogs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-04 22:17:14
