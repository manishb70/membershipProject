-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: membership_project
-- ------------------------------------------------------
-- Server version	8.0.39

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
-- Table structure for table `financial_year_fees`
--

DROP TABLE IF EXISTS `financial_year_fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `financial_year_fees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `membership_type` varchar(45) DEFAULT NULL,
  `year_of_membership` varchar(45) DEFAULT NULL,
  `one_time_enrollment` varchar(45) DEFAULT NULL,
  `yearly_charges` varchar(45) DEFAULT NULL,
  `share_allocated` varchar(45) DEFAULT NULL,
  `total_amount` varchar(45) DEFAULT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financial_year_fees`
--

LOCK TABLES `financial_year_fees` WRITE;
/*!40000 ALTER TABLE `financial_year_fees` DISABLE KEYS */;
INSERT INTO `financial_year_fees` VALUES (1,'New','2018-19','1000','1100','23','5000',NULL,NULL,NULL),(2,'Renew','2019-20','1000','1200','102','5000',NULL,NULL,NULL);
/*!40000 ALTER TABLE `financial_year_fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member_table`
--

DROP TABLE IF EXISTS `member_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `member_table` (
  `membership_no` int NOT NULL AUTO_INCREMENT,
  `II` varchar(45) DEFAULT NULL,
  `creation_date` varchar(45) DEFAULT NULL,
  `starting_fy` varchar(45) DEFAULT NULL,
  `company_name` varchar(45) DEFAULT NULL,
  `company_address` varchar(45) DEFAULT NULL,
  `company_email_id` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `person_name` varchar(45) DEFAULT NULL,
  `person_email_id` varchar(45) DEFAULT NULL,
  `person_phone_no` varchar(45) DEFAULT NULL,
  `udayam_aadhar_card` varchar(45) DEFAULT NULL,
  `old_membership_number` varchar(45) DEFAULT NULL,
  `pan_no` varchar(45) DEFAULT NULL,
  `gst_no` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`membership_no`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member_table`
--

LOCK TABLES `member_table` WRITE;
/*!40000 ALTER TABLE `member_table` DISABLE KEYS */;
INSERT INTO `member_table` VALUES (20,'101','2024-10-12','2024-09-09','Abc ltd','asdf','abc@gmil.com','slaes','sdfg','sdfg','hj','hj','fsd','fgs','fsd',NULL,NULL),(21,'j','','','Second ','jkb','kjb','kjb','b','kjb','jkb','jkb','k','bk','bjk',NULL,NULL),(22,'','','','example company','','','','','','','','','','','',''),(23,NULL,'','','third company','','','','','','','','','','','',''),(24,NULL,'','','','','','','','','','','','','','',''),(25,NULL,'','','','','','','','','','','','','','',''),(26,NULL,'','','','','','','','','','','','','','',''),(27,NULL,'','','','','','','','','','','','','','',''),(28,NULL,'','','','','','','','','','','','','','',''),(29,NULL,'','','','','','','','','','','','','','',''),(30,NULL,'','','','','','','','','','','','','','',''),(31,NULL,'','','','','','','','','','','','','','',''),(32,NULL,'','','','','','','','','','','','','','',''),(33,NULL,'','','','','','','','','','','','','','',''),(34,NULL,'','','','','','','','','','','','','','',''),(35,NULL,'','','','','','','','','','','','','','',''),(36,NULL,'','','','','','','','','','','','','','',''),(37,NULL,'','','','','','','','','','','','','','',''),(38,NULL,'2025-03-03','2024-09-25',';\'',';;[\'\'','','','','','','','','','','',''),(39,NULL,'','','','','','','','','','','','','','','\'');
/*!40000 ALTER TABLE `member_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receipt_details`
--

DROP TABLE IF EXISTS `receipt_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receipt_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `receipt_no` varchar(45) DEFAULT NULL,
  `payment_method` varchar(45) DEFAULT NULL,
  `membership_type` varchar(45) DEFAULT NULL,
  `year_of_membership` varchar(45) DEFAULT NULL,
  `one_time_enrollment_fee` varchar(45) DEFAULT NULL,
  `yearly_charges` varchar(45) DEFAULT NULL,
  `share_allocated` varchar(45) DEFAULT NULL,
  `total_amount` varchar(45) DEFAULT NULL,
  `next_amount_due` varchar(45) DEFAULT NULL,
  `date_amount_paid` varchar(45) DEFAULT NULL,
  `utr_no` varchar(45) DEFAULT NULL,
  `transaction_date` varchar(45) DEFAULT NULL,
  `balance` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `member_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receipt_details`
--

LOCK TABLES `receipt_details` WRITE;
/*!40000 ALTER TABLE `receipt_details` DISABLE KEYS */;
INSERT INTO `receipt_details` VALUES (5,'101','Credit Card','New','2018-19','1000','1200','23','5000','2024-09-09','2024-09-09','12345','2024-09-09','20000','Paid','20'),(6,'102','Credit Card','New','2018-19','1000','1200','23','5000','2024-09-09','2024-09-09','12345','2024-09-09','3000','Partial','21'),(7,'103','Credit Card','New','2018-19','1000','1200','23','5000','2024-09-09','2024-09-09','12345','2024-09-09','20000','Unpaid',NULL),(8,'','','','','','','','','','','','','','',NULL),(9,'','','','','','','','','','','','','','',NULL),(10,'','','','','','','','','','','','','','',NULL),(11,'','','','','','','','','','','','','','',NULL),(12,'','','','','','','','','','','','','','',NULL),(13,NULL,NULL,'Renew',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'102','Credit Card','New','2018-19','1000','1200','23','5000','2024-09-09','2024-09-09','12345','2024-09-09','20000','Paid','20');
/*!40000 ALTER TABLE `receipt_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `mobile_no` varchar(45) DEFAULT NULL,
  `emai_id` varchar(45) DEFAULT NULL,
  `effective_from_date` varchar(45) DEFAULT NULL,
  `effective_to_date` varchar(45) DEFAULT NULL,
  `membership_id` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `days` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (45,'xya','on','987654321','antosh@gmail.com','2024-09-09','2024-09-09','101','lorem ipsum','3'),(46,'xya','on','987654321','antosh@gmail.com','2024-09-10','2024-09-10','102','lorem ipsum','24'),(47,'Antosh','1234','987654321','antosh@gmail.com','2024-09-09','2024-09-09','101','sf','3'),(48,'manish','on','9849389`','msnidh@gmsicl.com','2025-01-01','2025-01-02','','new use creation','');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `user_creation` tinyint(1) DEFAULT NULL,
  `user_creation_from_date` varchar(45) DEFAULT NULL,
  `user_creation_to_date` varchar(45) DEFAULT NULL,
  `user_search` tinyint(1) DEFAULT NULL,
  `user_search_from_date` varchar(45) DEFAULT NULL,
  `user_search_to_date` varchar(45) DEFAULT NULL,
  `membership_create` tinyint(1) DEFAULT NULL,
  `membership_create_from_date` varchar(45) DEFAULT NULL,
  `membership_create_to_date` varchar(45) DEFAULT NULL,
  `membership_search` tinyint(1) DEFAULT NULL,
  `membership_search_from_date` varchar(45) DEFAULT NULL,
  `membership_search_to_date` varchar(45) DEFAULT NULL,
  `membership_report` tinyint(1) DEFAULT NULL,
  `membership_report_from_date` varchar(45) DEFAULT NULL,
  `membership_report_to_date` varchar(45) DEFAULT NULL,
  `receipt_creation` tinyint(1) DEFAULT NULL,
  `receipt_creation_from_date` varchar(45) DEFAULT NULL,
  `receipt_creation_to_date` varchar(45) DEFAULT NULL,
  `receipt_search` tinyint(1) DEFAULT NULL,
  `receipt_search_from_date` varchar(45) DEFAULT NULL,
  `receipt_search_to_date` varchar(45) DEFAULT NULL,
  `receipt_report` tinyint(1) DEFAULT NULL,
  `receipt_report_from_date` varchar(45) DEFAULT NULL,
  `receipt_report_to_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,NULL,1,'2024-09-09','2024-09-09',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'',''),(2,NULL,1,'2024-10-09','2024-10-12',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',1,'2024-10-02','2024-10-09'),(3,'47',1,'2024-09-26','2024-10-01',0,'','',0,'','',0,'','',1,'2024-09-25','2024-09-11',0,'','',0,'','',1,'2024-09-25','2024-09-12'),(4,'48',1,'','',1,'','',1,'','',0,'','',1,'','',1,'','',0,'','',0,'','');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-10 21:42:35
