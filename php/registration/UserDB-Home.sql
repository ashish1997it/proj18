-- MySQL dump 10.13  Distrib 5.7.14, for Win64 (x86_64)
--
-- Host: localhost    Database: userdb
-- ------------------------------------------------------
-- Server version	5.7.14-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `user_tabl`
--

DROP TABLE IF EXISTS `user_tabl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_tabl` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `reset_pwd_link` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`email`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tabl`
--

LOCK TABLES `user_tabl` WRITE;
/*!40000 ALTER TABLE `user_tabl` DISABLE KEYS */;
INSERT INTO `user_tabl` VALUES (1,'sam','abc1@m.com','1e152810389936895490fe763807fbd9',NULL),(2,'jhon','abc2@m.com','abf0ec7e667380f7976189fad249a178',NULL),(3,'dev','abc3@m.com','30318e6405fb67b52692f8c2c81fcbd3',NULL);
/*!40000 ALTER TABLE `user_tabl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usertabla`
--

DROP TABLE IF EXISTS `usertabla`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usertabla` (
  `idNo` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `loca` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idNo`),
  UNIQUE KEY `idNo_UNIQUE` (`idNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usertabla`
--

LOCK TABLES `usertabla` WRITE;
/*!40000 ALTER TABLE `usertabla` DISABLE KEYS */;
INSERT INTO `usertabla` VALUES (1111,'sam','bvi'),(1112,'jhon','malad'),(1113,'dev','mum'),(1114,'sam','andheri'),(1115,'mac','churchgate'),(1116,'jack','bvi');
/*!40000 ALTER TABLE `usertabla` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-22 16:43:55
