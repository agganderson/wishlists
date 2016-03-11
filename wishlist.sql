CREATE DATABASE  IF NOT EXISTS `wishlist` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wishlist`;
-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: wishlist
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,2,'Itouch','2016-03-03 14:13:05','2016-03-03 14:13:05'),(2,1,'Bike','2016-03-03 14:14:47','2016-03-03 14:14:47'),(3,1,'Brain food','2016-03-03 14:28:01','2016-03-03 14:28:01'),(4,2,'Granola','2016-03-03 14:50:31','2016-03-03 14:50:31'),(5,3,'Bottle','2016-03-03 14:53:17','2016-03-03 14:53:17'),(6,3,'Onesie','2016-03-03 14:53:41','2016-03-03 14:53:41'),(7,4,'Map','2016-03-03 14:53:57','2016-03-03 14:53:57'),(8,4,'The Pig','2016-03-03 14:54:13','2016-03-03 14:54:13');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ali Anderson','ganderson','ganderson@yahoo.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,'2016-03-03 12:05:49','2016-03-03 12:05:49'),(2,'Don Anderson','donny','donny@gmail.com','b34fc06dfc3a206aff5ea7bc53acc4e0',NULL,'2016-03-03 12:29:17','2016-03-03 12:29:17'),(3,'Maverick Marson','mac','ricky@hotmail.com','285a10427baf4cf1b42519f6bbbeb91a','2012-07-30 00:00:00','2016-03-03 13:00:52','2016-03-03 13:00:52'),(4,'Blue Sargent','energizer','feelinbluesy@gmail.com','78f8c25173c14fcd7d69de0cdfd21f27','2014-07-28 00:00:00','2016-03-03 13:02:34','2016-03-03 13:02:34'),(5,'Chloe Ulutau','nzbabe','yooyoo@yahoo.com','fa64aed509dad65fe97fc71141da258e','2010-04-25 00:00:00','2016-03-03 13:04:49','2016-03-03 13:04:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-03 15:07:41
