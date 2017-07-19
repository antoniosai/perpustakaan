-- MySQL dump 10.16  Distrib 10.2.3-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: pariwisata
-- ------------------------------------------------------
-- Server version	10.2.3-MariaDB-log

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
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_booking` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitor_id` int(10) unsigned NOT NULL,
  `paket_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,'06201764',4,1,'2017-06-02 09:05:59','2017-06-02 09:05:59'),(2,'062017381',6,1,'2017-06-02 09:14:54','2017-06-02 09:14:54'),(3,'062017829',7,1,'2017-06-02 09:25:35','2017-06-02 09:25:35'),(4,'062017436',8,1,'2017-06-02 09:32:52','2017-06-02 09:32:52'),(5,'06201787',9,1,'2017-06-02 09:33:35','2017-06-02 09:33:35'),(6,'06201737',10,1,'2017-06-02 09:33:48','2017-06-02 09:33:48'),(7,'062017347',11,1,'2017-06-02 09:34:33','2017-06-02 09:34:33'),(8,'062017680',12,1,'2017-06-02 09:34:53','2017-06-02 09:34:53'),(9,'0620176',13,1,'2017-06-02 09:35:00','2017-06-02 09:35:00'),(10,'062017916',14,1,'2017-06-02 09:35:13','2017-06-02 09:35:13'),(11,'062017152',15,1,'2017-06-02 09:35:20','2017-06-02 09:35:20'),(12,'062017712',16,1,'2017-06-02 09:35:29','2017-06-02 09:35:29'),(13,'062017108',17,1,'2017-06-02 09:35:45','2017-06-02 09:35:45'),(14,'062017802',18,1,'2017-06-02 09:36:13','2017-06-02 09:36:13'),(15,'062017423',19,1,'2017-06-02 09:36:44','2017-06-02 09:36:44'),(16,'062017479',20,1,'2017-06-02 09:37:22','2017-06-02 09:37:22'),(17,'062017900',21,1,'2017-06-02 09:37:50','2017-06-02 09:37:50'),(18,'062017724',22,1,'2017-06-02 09:38:16','2017-06-02 09:38:16'),(19,'062017992',23,1,'2017-06-02 09:38:24','2017-06-02 09:38:24'),(20,'062017441',24,1,'2017-06-02 09:38:39','2017-06-02 09:38:39'),(21,'062017312',25,1,'2017-06-02 09:39:09','2017-06-02 09:39:09'),(22,'062017271',26,1,'2017-06-02 09:39:33','2017-06-02 09:39:33'),(23,'062017533',27,1,'2017-06-02 09:39:39','2017-06-02 09:39:39');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'http://taratourtravel.com/wp-content/uploads/2017/04/paket-tour-paris.jpg',NULL,NULL),(2,'http://www.macwallhd.com/wp-content/Wallpapers/20121114/Full%20HD%20Apple%20Backgorund%20HD%20View103.jpg',NULL,NULL);
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `information`
--

DROP TABLE IF EXISTS `information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `information` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `information`
--

LOCK TABLES `information` WRITE;
/*!40000 ALTER TABLE `information` DISABLE KEYS */;
INSERT INTO `information` VALUES (1,'Lorem Ipsum','Lorem ipsum dolor sit amet, nam ex sumo justo officiis, ut viderer invidunt apeirian quo. Sea aeque petentium ne, vim diam sint scripta ad. Tractatos democritum sit eu, ea pro sapientem voluptatibus. Eos ad audire prodesset, phaedrum splendide democritum at vix.','2017-06-11 13:31:27','2017-06-11 13:31:28'),(2,'Lorem Ipsum','Lorem ipsum dolor sit amet, nam ex sumo justo officiis, ut viderer invidunt apeirian quo. Sea aeque petentium ne, vim diam sint scripta ad. Tractatos democritum sit eu, ea pro sapientem voluptatibus. Eos ad audire prodesset, phaedrum splendide democritum at vix.','2017-04-18 13:31:27','2017-06-11 13:31:28'),(3,'Lorem Ipsum','Lorem ipsum dolor sit amet, nam ex sumo justo officiis, ut viderer invidunt apeirian quo. Sea aeque petentium ne, vim diam sint scripta ad. Tractatos democritum sit eu, ea pro sapientem voluptatibus. Eos ad audire prodesset, phaedrum splendide democritum at vix.','2017-05-11 13:31:27','2017-06-11 13:31:28'),(4,'Lorem Ipsum','Lorem ipsum dolor sit amet, nam ex sumo justo officiis, ut viderer invidunt apeirian quo. Sea aeque petentium ne, vim diam sint scripta ad. Tractatos democritum sit eu, ea pro sapientem voluptatibus. Eos ad audire prodesset, phaedrum splendide democritum at vix.','2017-06-11 13:31:27','2017-06-11 13:31:28'),(5,'Lorem Ipsum','Lorem ipsum dolor sit amet, nam ex sumo justo officiis, ut viderer invidunt apeirian quo. Sea aeque petentium ne, vim diam sint scripta ad. Tractatos democritum sit eu, ea pro sapientem voluptatibus. Eos ad audire prodesset, phaedrum splendide democritum at vix.','2017-06-11 13:31:27','2017-06-11 13:31:28');
/*!40000 ALTER TABLE `information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_05_24_022124_create_pakets_table',2),(4,'2017_06_02_155721_create_visitors_table',3),(5,'2017_06_02_160217_create_bookings_table',4),(6,'2017_06_11_131115_create_information_table',5),(7,'2017_06_11_133808_create_galleries_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pakets`
--

DROP TABLE IF EXISTS `pakets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pakets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pakets`
--

LOCK TABLES `pakets` WRITE;
/*!40000 ALTER TABLE `pakets` DISABLE KEYS */;
INSERT INTO `pakets` VALUES (1,'Paket Hemat','Lorem ipsum ashdklasdkasjdas',5000000,NULL,NULL),(2,'Paket VIP','Lorem ipsum ashdklasdkasjdas',5000000,NULL,NULL),(3,'Paket Segar','Lorem ipsum ashdklasdkasjdas',5000000,NULL,NULL),(4,'Paket Paket Plus','Lorem ipsum ashdklasdkasjdas',5000000,NULL,NULL);
/*!40000 ALTER TABLE `pakets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitors`
--

LOCK TABLES `visitors` WRITE;
/*!40000 ALTER TABLE `visitors` DISABLE KEYS */;
INSERT INTO `visitors` VALUES (1,'Antonio Saiful Islam','antoniosaiful10@gmail.com','antoniosaiful10@gmail.com','2017-06-02 09:01:51','2017-06-02 09:01:51'),(4,'Antonio Saiful Islam','dikyanggara@gmail.com','081412312123','2017-06-02 09:05:59','2017-06-02 09:05:59'),(6,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:14:54','2017-06-02 09:14:54'),(7,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:25:35','2017-06-02 09:25:35'),(8,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:32:52','2017-06-02 09:32:52'),(9,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:33:35','2017-06-02 09:33:35'),(10,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:33:48','2017-06-02 09:33:48'),(11,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:34:32','2017-06-02 09:34:32'),(12,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:34:52','2017-06-02 09:34:52'),(13,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:35:00','2017-06-02 09:35:00'),(14,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:35:13','2017-06-02 09:35:13'),(15,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:35:20','2017-06-02 09:35:20'),(16,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:35:29','2017-06-02 09:35:29'),(17,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:35:45','2017-06-02 09:35:45'),(18,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:36:13','2017-06-02 09:36:13'),(19,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:36:44','2017-06-02 09:36:44'),(20,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:37:22','2017-06-02 09:37:22'),(21,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:37:50','2017-06-02 09:37:50'),(22,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:38:15','2017-06-02 09:38:15'),(23,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:38:24','2017-06-02 09:38:24'),(24,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:38:39','2017-06-02 09:38:39'),(25,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:39:09','2017-06-02 09:39:09'),(26,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:39:32','2017-06-02 09:39:32'),(27,'Antonio Saiful Islam','dikyanggara1@gmail.com','081412312123','2017-06-02 09:39:39','2017-06-02 09:39:39');
/*!40000 ALTER TABLE `visitors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-14 21:46:07
