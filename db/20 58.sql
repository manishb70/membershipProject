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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financial_year_fees`
--

LOCK TABLES `financial_year_fees` WRITE;
/*!40000 ALTER TABLE `financial_year_fees` DISABLE KEYS */;
INSERT INTO `financial_year_fees` VALUES (1,'New','2018-19','1000','1100','23','5000',NULL,NULL,NULL),(2,'Renew','2019-20','1000','1200','102','5000',NULL,NULL,NULL),(3,'','','','','','',NULL,NULL,NULL),(4,'','','','','','',NULL,NULL,NULL),(5,'','','','','','',NULL,NULL,NULL),(6,'','','','','','',NULL,NULL,NULL),(7,'','','','','','',NULL,NULL,NULL),(8,'','','','','','',NULL,NULL,NULL),(9,'New','2018-19','10','10','210','',NULL,NULL,NULL),(10,'','','','','','',NULL,NULL,NULL),(11,'','','','','','',NULL,NULL,NULL),(12,'','','','','','',NULL,NULL,NULL),(13,'','','','','','',NULL,NULL,NULL),(14,'New','2018-19','10','10','10','',NULL,NULL,NULL),(15,'Renew','2018-19','0','12000','0','',NULL,NULL,NULL),(16,'','','','','','',NULL,NULL,NULL),(17,'','','','','','',NULL,NULL,NULL),(18,'','','','','','',NULL,NULL,NULL),(19,'','','','','','',NULL,NULL,NULL),(20,'','','','','','',NULL,NULL,NULL),(21,'New','2018-19','8','7','87','',NULL,NULL,NULL),(22,'Renew','2021-22','1000','1000','400','',NULL,NULL,NULL),(23,'','','','','','',NULL,NULL,NULL),(24,'','','','','','',NULL,NULL,NULL),(25,'','','','','','',NULL,NULL,NULL),(26,'','','','','','',NULL,NULL,NULL);
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
  `active_status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`membership_no`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member_table`
--

LOCK TABLES `member_table` WRITE;
/*!40000 ALTER TABLE `member_table` DISABLE KEYS */;
INSERT INTO `member_table` VALUES (20,'101','2024-10-12','2024-09-09','Abc ltd','asdf','abc@gmil.com','slaes','sdfg','sdfg','hj','hj','fsd','fgs','fsd',NULL,NULL,'active'),(21,'j','','','Second ','jkb','kjb','kjb','b','kjb','jkb','jkb','k','bk','bjk',NULL,NULL,'active'),(22,'','','','example company','','','','','','','ewew','','','','','','inactive'),(23,NULL,'','','third company','','','','','','','','','','','','','inactive'),(40,NULL,'2024-01-31','2024-01-02','test company ','DELHI','test@test.com','electric','raj','raj@test.com','9999999999','90390990','890','SXZJKLIJ0900','90DJIDJ930','','','active'),(41,'','2024-01-31','2024-01-02','test company ','DELHI','test@test.com','electric','raj','raj@test.com','9999999999','90390990','890','SXZJKLIJ0900','90DJIDJ930','2024-01-02','2024-01-02','active'),(42,'','2024-01-31','2024-01-02','Tech Innovations','New Delhi','contact@techinnovations.com','technology','Amit Sharma','amit.sharma@techinnovations.com','9876543210','123456789012','T123456789','ABCDEF1234G','12ABCD34EFG','2024-12-31','2024-01-02','active'),(43,'','2024-02-15','2024-01-02','Green Solutions','Mumbai','info@greensolutions.com','environment','Sneha Patel','sneha.patel@greensolutions.com','8765432109','234567890123','G234567890','CDEFGH5678H','34BCDE56FGH','2024-12-31','2024-01-02','inactive'),(44,'','2024-03-05','2024-01-02','Skyline Enterprises','Bangalore','support@skylineenterprises.com','construction','Ravi Kumar','ravi.kumar@skylineenterprises.com','9654321098','345678901234','S345678901','FGHIJK8901J','56CDEF78GHI','2024-12-31','2024-01-02','active'),(45,'','2024-04-20','2024-01-02','Future Dynamics','Chennai','contact@futuredynamics.com','manufacturing','Anjali Reddy','anjali.reddy@futuredynamics.com','8765432198','456789012345','F456789012','HIJKLM1234K','78DEFG90HIJ','2024-12-31','2024-01-02','active'),(46,'','2024-05-10','2024-01-02','Quantum Analytics','Hyderabad','info@quantumanalytics.com','analytics','Nitin Gupta','nitin.gupta@quantumanalytics.com','9876543201','567890123456','Q567890123','JKLMN4567L','90FGHI12JKL','2024-12-31','2024-01-02','inactive'),(47,'YY78',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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
  `member_id` varchar(45) DEFAULT NULL,
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
  `paid_amount` varchar(45) DEFAULT NULL,
  `recieipt_form_status` varchar(45) DEFAULT NULL,
  `receipt_detailscol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receipt_details`
--

LOCK TABLES `receipt_details` WRITE;
/*!40000 ALTER TABLE `receipt_details` DISABLE KEYS */;
INSERT INTO `receipt_details` VALUES (5,'20','101','Credit Card','New','2018-19','1000','1200','23','5000','2024-09-09','2024-09-09','12345','2024-09-09','20000','Paid',NULL,NULL,NULL),(6,'21','102','Credit Card','New','2018-19','1000','1200','23','5000','2024-09-09','2024-09-09','12345','2024-09-09','3000','Partial',NULL,NULL,NULL),(7,NULL,'103','Credit Card','New','2018-19','1000','1200','23','5000','2024-09-09','2024-09-09','12345','2024-09-09','20000','Unpaid',NULL,NULL,NULL),(8,NULL,'','','','2021-22','','','','','','','','','','Unpaid',NULL,NULL,NULL),(9,NULL,'','','','2021-22','','','','','','','','','','Paid',NULL,NULL,NULL),(10,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(11,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(12,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(13,NULL,NULL,NULL,'Renew',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'20','102','Credit Card','New','2018-19','1000','1200','23','5000','2024-09-09','2024-09-09','12345','2024-09-09','20000','Paid',NULL,NULL,NULL),(15,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(16,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(17,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(18,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(19,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(20,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(21,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(22,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(23,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(24,NULL,'101','Credit Card','Renew','2019-20','1000','1200','102','5000','2024-09-11','2024-09-11','12345','2024-10-10','100000','Paid',NULL,NULL,NULL),(25,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(26,NULL,'','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(27,'41','','Credit Card','New','2018-19','1000','1100','23','5000','2024-10-10','2024-09-24','12345','2024-09-11','1000','Unpaid',NULL,NULL,NULL),(28,'41','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(29,'42','','Credit Card','New','2018-19','1000','1100','23','5000','','','j','','','Unpaid',NULL,NULL,NULL),(30,'42','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(31,'43','','Credit Card','New','2018-19','1000','1100','23','5000','','','12345','','','Paid',NULL,NULL,NULL),(32,'24','l','','Renew','2019-20','1000','1200','102','5000','','','','','0','Paid',NULL,NULL,NULL),(33,'24','l','','Renew','2019-20','1000','1200','102','5000','','','','','0','Paid',NULL,NULL,NULL),(34,'24','l','','Renew','2019-20','1000','1200','102','10000','','','','','0','Paid',NULL,NULL,NULL),(35,'24','l','','Renew','2019-20','1000','1200','102','10000','','','','','0','Paid',NULL,NULL,NULL),(36,'24','l','','Renew','2019-20','1000','1200','102','10000','','','','','0','Paid',NULL,NULL,NULL),(37,'24','l','','Renew','2019-20','1000','1200','102','10000','','','','','0','Paid',NULL,NULL,NULL),(38,'24','l','','Renew','2019-20','1000','1200','102','10000','','','','','0','Paid',NULL,NULL,NULL),(39,'24','l','','Renew','2019-20','1000','1200','102','10000','','','','','0','Paid',NULL,NULL,NULL),(40,'24','l','','Renew','2019-20','1000','1200','102','10000','','','','','0','Paid',NULL,NULL,NULL),(41,'','','','','','','','','2000','','','','','0','Paid',NULL,NULL,NULL),(42,'','','','','','','','','2000','','','','','','Paid',NULL,NULL,NULL),(43,'','','','','','','','','2000','','','','','','Paid',NULL,NULL,NULL),(44,'','','','','','','','','2000','','','','','','Unpaid',NULL,NULL,NULL),(45,'','','','Renew','2019-20','1000','1200','102','5000','','','','','','Unpaid',NULL,NULL,NULL),(46,'','','','Renew','2019-20','1000','1200','102','5000','','','','','19','Unpaid',NULL,NULL,NULL),(47,'','','','','','','','','100','','','','','19','Unpaid',NULL,NULL,NULL),(48,'','j','','New','2018-19','1000','1100','23','5000','','','','','19','Unpaid',NULL,NULL,NULL),(49,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(50,'','','Debit Card','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(51,'','mo','Bank Trasfer','New','2018-19','1000','1100','23','5000','2025-01-01','','901090','2026-01-01','4991','Paid',NULL,NULL,NULL),(52,'','mo','Bank Trasfer','New','2018-19','1000','1100','23','5000','2025-01-01','','901090','2026-01-01','4991','Partial',NULL,NULL,NULL),(53,'','mo','Bank Trasfer','New','2018-19','1000','1100','23','5000','2025-01-01','','901090','2026-01-01','0','Paid',NULL,NULL,NULL),(54,'','mo','Bank Trasfer','New','2018-19','1000','1100','23','5000','2025-01-01','','901090','2026-01-01','1','Partial',NULL,NULL,NULL),(55,'','mo','Bank Trasfer','New','2018-19','1000','1100','23','5000','2025-01-01','','901090','2026-01-01','1','Partial',NULL,NULL,NULL),(56,'','mo','Bank Trasfer','New','2018-19','1000','1100','23','5000','2025-01-01','','901090','2026-01-01','1','Partial',NULL,NULL,NULL),(57,'','','Debit Card','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(58,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(59,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(60,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(61,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(62,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(63,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(64,'','','','','','','','','','','','','','','Paid',NULL,NULL,NULL),(65,'','','','','','','','','','','','','','','Paid',NULL,NULL,NULL),(66,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(67,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(68,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(69,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(70,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(71,'','nio','','New','2018-19','noi','nio','nio','nio','','','','','','Unpaid',NULL,NULL,NULL),(72,'nio','o','','','','no','inoi','noi','','','','','','','Unpaid',NULL,NULL,NULL),(73,'nio','o','','','','no','inoi','noi','','','','','','','Unpaid',NULL,NULL,NULL),(74,'nio','o','','','','no','inoi','noi','','','','','','','Unpaid',NULL,NULL,NULL),(75,'nio','o','','','','no','inoi','noi','','','','','','','Unpaid',NULL,NULL,NULL),(76,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(77,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(78,'','','','','','','','','','','','','','','Unpaid',NULL,NULL,NULL),(79,'','','','','','','','','','','','','','','Unpaid',NULL,'save',NULL),(80,'','','','','','','','','','','','','','','Unpaid',NULL,'save',NULL),(81,'89','09','Debit Card','New','2018-19','1000','1100','23','5000','2024-02-01','2025-01-31','12345678','','4900','Partial',NULL,'save',NULL),(82,'89','09','Debit Card','New','2018-19','1000','1100','23','5000','2024-02-01','2025-01-31','12345678','','4900','Partial',NULL,'save',NULL),(83,'89','09','Debit Card','New','2018-19','1000','1100','23','5000','2024-02-01','2025-01-31','12345678','','4900','Partial',NULL,'save',NULL),(84,'89','09','Debit Card','New','2018-19','1000','1100','23','5000','2024-02-01','2025-01-31','12345678','','4900','Partial',NULL,'save',NULL),(85,'','','','','','','','','','','','','','','Unpaid',NULL,'save',NULL),(86,'','','','','','','','','','','','','','','Unpaid',NULL,'',NULL),(87,'','','','','','','','','','','','','','','Unpaid',NULL,'',NULL),(88,'','','','','','','','','','','','','','','Unpaid',NULL,'',NULL),(89,'j','hoi','Credit Card','New','2018-19','1000','1100','23','5000','2024-01-03','2024-02-01','o','2024-02-04','3999','Partial',NULL,'',NULL),(90,'j','hoi','Credit Card','New','2018-19','1000','1100','23','5000','2024-01-03','2024-02-01','o','2024-02-04','3999','Partial',NULL,'',NULL),(91,'kio','jio','','','','io','joj','oioi','jo','','','oi','','','Unpaid',NULL,'',NULL),(92,'','','','','','','','','','','','','','','Unpaid',NULL,'save',NULL),(93,'b','ui','Credit Card','Renew','2019-20','1000','1200','102','5000','2024-09-13','2024-09-19','1234','2024-09-26','4500','Partial',NULL,'',NULL),(94,'b','ui','Credit Card','Renew','2019-20','1000','1200','102','5000','2024-09-13','2024-09-19','1234','2024-09-26','4500','Partial',NULL,'',NULL),(95,'b','ui','Credit Card','Renew','2019-20','1000','1200','102','5000','2024-09-13','2024-09-19','1234','2024-09-26','4500','Partial',NULL,'',NULL),(96,'b','ui','Credit Card','Renew','2019-20','1000','1200','102','5000','2024-09-13','2024-09-19','1234','2024-09-26','4500','Partial',NULL,'save',NULL),(97,'b','ui','Credit Card','Renew','2019-20','1000','1200','102','5000','2024-09-13','2024-09-19','1234','2024-09-26','4500','Partial',NULL,'save',NULL),(98,'41','ji','Credit Card','New','2018-19','1000','1100','23','5000','','2025-10-12','UTR','2026-10-12','5000','Partial',NULL,'save',NULL),(99,'41','ji','Credit Card','New','2018-19','1000','1100','23','5000','','2025-10-12','UTR','2026-10-12','5000','Partial',NULL,'save',NULL),(100,'','','','','','','','','','','','','','','Unpaid',NULL,'save',NULL),(101,'','','','','','','','','','','','','','','Unpaid',NULL,'save',NULL),(102,'','','','','','','','','','','','','','','Unpaid',NULL,'',NULL),(103,'','','','','','','','','','','','','','','Unpaid',NULL,'save',NULL),(104,'','','','','','','','','','','','','','','Unpaid',NULL,'',NULL),(105,'','','','','','','','','','','','','','','Unpaid',NULL,'',NULL),(106,'','','','','','','','','','','','','','','Unpaid',NULL,'save',NULL),(107,'','','','','','','','','','','','','','','Unpaid',NULL,'save',NULL),(108,'','','','','','','','','','','','','','','Unpaid',NULL,'save',NULL),(109,'78','','','','','','','','','','','','','','Unpaid',NULL,'SAVE',NULL),(110,'','','','','','','','','','','','','','','Unpaid',NULL,'SAVE',NULL),(111,'67','78','Credit Card','New','2018-19','1000','1100','23','5000','2027-02-04','2025-01-31','123','2026-02-03','4990','Partial',NULL,'SAVE',NULL),(112,'67','78','Credit Card','New','2018-19','1000','1100','23','5000','2027-02-04','2025-01-31','123','2026-02-03','4990','Partial',NULL,'SUBMIT',NULL),(113,'','','','','','','','','','','','','','','Unpaid',NULL,'SAVE',NULL),(114,'8765','','Credit Card','New','2018-19','1000','1100','23','5000','2024-02-01','2026-01-01','0110','','4991','Partial',NULL,'SAVE',NULL),(115,'8765','','Credit Card','New','2018-19','1000','1100','23','5000','2024-02-01','2026-01-01','0110','','4991','Partial',NULL,'SAVE',NULL),(116,'','','','','','','','','','','','','','','Unpaid',NULL,'SAVE',NULL),(117,'','','','','','','','','','','','','','','Unpaid',NULL,'SAVE',NULL),(118,'67','87','','New','2018-19','1000','1100','23','5000','','','','','','Unpaid',NULL,'SAVE',NULL),(119,'67','87','Credit Card','New','2018-19','1000','1100','23','5000','2024-02-01','2026-01-01','12345','2026-01-02','4900','Partial',NULL,'SAVE',NULL),(120,'67','87','Credit Card','New','2018-19','1000','1100','23','5000','2024-02-01','2026-01-01','12345','2026-01-02','4900','Partial',NULL,'SAVE',NULL),(121,'','','','','','','','','','','','','','','Unpaid',NULL,'SAVE',NULL),(122,'678','b','Credit Card','New','2018-19','1000','1100','23','5000','2024-01-01','2025-01-01','4567','2024-01-08','3800','Partial',NULL,'SAVE',NULL),(123,'78','','','','','','','','','','','','','','Unpaid',NULL,'null',NULL),(124,'43','123','Debit Card','Renew','2019-20','1000','1200','102','5000','2024-01-01','2027-02-03','0987','2025-12-31','4000','Partial',NULL,'SAVE',NULL),(125,'7','98u8','Credit Card','New','2018-19','1000','1100','23','5000','2026-01-01','2027-01-02','1876','2025-01-02','4901','Partial',NULL,'SAVE',NULL),(126,'56','9876','Credit Card','Renew','2019-20','1000','1200','102','5000','2025-01-01','2026-01-02','14567','2024-01-01','4000','Partial',NULL,'SAVE',NULL),(127,'','','','','','','','','','','','','','','Unpaid',NULL,'null',NULL),(128,'89','8976','Credit Card','New','2018-19','1000','1100','23','5000','2025-01-01','2026-12-02','765','2025-01-01','4955','Partial',NULL,'SAVE',NULL),(129,'89','8976','Credit Card','New','2018-19','1000','1100','23','5000','2025-01-01','2026-12-02','765','2025-01-01','4955','Partial',NULL,'SAVE',NULL),(130,'67','103','Credit Card','New','2018-19','ihuj','1100','23','5000','2025-01-04','2024-02-02','12345','0006-08-07','4000','Partial',NULL,'SAVE',NULL),(131,'67','103','Credit Card','New','2018-19','ihuj','1100','23','5000','2025-01-04','2024-02-02','12345','0006-08-07','4000','Partial',NULL,'SAVE',NULL),(132,'787','87','','New','2018-19','1000','1100','23','5000','','2025-01-02','87','','4901','Partial',NULL,'SAVE',NULL),(133,'787','87','','New','2018-19','1000','1100','23','5000','2024-02-02','2025-01-02','87','2024-12-31','4901','Partial',NULL,'SAVE',NULL),(134,'787','87','Credit Card','Renew','2019-20','1000','1200','102','5000','2024-02-02','2025-01-02','87','2024-12-31','4901','Partial',NULL,'SAVE',NULL),(135,'789','67','Credit Card','New','2018-19','1000','1100','23','5000','2024-02-03','2026-03-03','12345','2027-01-04','4913','Partial',NULL,'SAVE',NULL),(136,'789','67','Credit Card','New','2018-19','1000','1100','23','5000','2024-02-03','2026-03-03','12345','2027-01-04','4913','Partial',NULL,'SAVE',NULL),(137,'789','67','Credit Card','New','2018-19','1000','1100','23','5000','2024-02-03','2026-03-03','12345','2027-01-04','4913','Partial',NULL,'SAVE',NULL),(138,'jo','ojh','Credit Card','New','2018-19','1000','1100','23','5000','2027-12-03','2025-01-01','67','2024-02-01','','Unpaid',NULL,'SAVE',NULL),(139,'678','','','','','','','','','','','','','','Unpaid',NULL,'null',NULL),(140,'678','178','Credit Card','New','2018-19','1000','1100','23','5000','','','','','4900','Partial',NULL,'null',NULL),(141,'678','178','Credit Card','New','2018-19','1000','1100','23','5000','','','12345','','4900','Partial',NULL,'SAVE',NULL),(142,'89','joi','Credit Card','New','2018-19','1000','1100','23','5000','2025-02-01','2026-01-02','689','2025-01-01','4911','Partial',NULL,'SAVE',NULL),(143,'','','','','','','','','','','','','','','Paid',NULL,'',NULL),(144,'89','joi','Credit Card','New','2018-19','1000','1100','23','5000','2025-02-01','2026-01-02','689','2025-01-01','4911','Partial',NULL,'SAVE',NULL),(145,'nkl','879','Debit Card','New','2018-19','1000','1100','23','5000','2024-01-01','2024-01-01','2345','2024-02-02','4990','Partial',NULL,'SAVE',NULL),(146,'','','','','','','','','','','','','','','Paid',NULL,'',NULL),(147,'678','103','Cash','New','2018-19','1000','1100','23','5000','','2026-01-01','','2024-01-08','4322','Partial',NULL,'SUBMIT',NULL),(148,'678','103','Cash','New','2018-19','1000','1100','23','5000','','2026-01-01','','2024-01-08','4322','Partial',NULL,'SUBMIT',NULL),(149,'41','','','','','','','','','','','','','','Unpaid',NULL,'null',NULL),(150,'41','','Cash','Renew','2019-20','1000','1200','102','5000','2024-12-31','2024-12-31','','2025-12-31','500','Partial',NULL,'SUBMIT',NULL),(151,'','','','','','','','','','','','','','','Unpaid',NULL,'SAVE',NULL),(152,'io','8h8','Debit Card','New','2018-19','1000','1100','23','5000','2025-01-02','2024-09-11','','2024-09-11','4900','Partial',NULL,'SAVE',NULL),(153,'h','','Debit Card','','','ho','','','','','','','','','Unpaid',NULL,'SAVE',NULL),(154,'h','','Debit Card','New','2018-19','1000','1100','23','5000','','','','','','Unpaid',NULL,'SAVE',NULL),(155,'h','','Debit Card','New','2018-19','1000','1100','23','5000','2026-02-03','2028-02-02','','2026-01-02','4990','Partial',NULL,'SAVE',NULL),(156,'h','','Debit Card','New','2018-19','1000','1100','23','5000','2026-02-03','2028-02-02','100','2026-01-02','4990','Partial',NULL,'SAVE',NULL),(157,'ij','','Bank Trasfer','New','2018-19','1000','1100','23','5000','','','','','','Unpaid',NULL,'SUBMIT',NULL),(158,'41','','','','','','','','','','','','','','Unpaid',NULL,'null',NULL),(159,'41','','Cash','New','2018-19','1000','1100','23','5000','2025-12-31','2024-12-31','','2024-12-31','4300','Partial',NULL,'SUBMIT',NULL),(160,'47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (45,'xya_1','on','987654321','antosh@gmail.com','2024-09-09','2024-09-09','101','lorem ipsum','3'),(46,'xya','on','987654321','antosh@gmail.com','2024-09-10','2024-09-10','102','lorem ipsum','24'),(47,'Antosh','1234','987654321','antosh@gmail.com','2024-09-09','2024-09-09','101','sf','3'),(48,'admin','admin@123','9849389`','msnidh@gmsicl.com','2025-01-01','2025-01-02','','new use creation',''),(56,'tempuser','tempuser@121','','','','','','',''),(57,'testuser1','testuser1','9999999999','testuser1@testuser1.com','2024-09-11','2025-01-01','null','test user',''),(58,'tempuser1','tempuser1@123','9999999999','tempuser1@gmail.com','2024-09-11','2024-01-31','null','tempUser1  ','');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,NULL,1,'2024-09-09','2024-09-09',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'',''),(2,NULL,1,'2024-10-09','2024-10-12',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',1,'2024-10-02','2024-10-09'),(3,'47',1,'2024-09-26','2024-10-01',0,'','',0,'','',0,'','',1,'2024-09-25','2024-09-11',0,'','',0,'','',1,'2024-09-25','2024-09-12'),(4,'48',1,'','',1,'','',1,'','',0,'','',0,'','',1,'','',0,'','',0,'',''),(5,'49',1,'','',0,'','',1,'','',1,'','',1,'','',0,'','',1,'','',0,'',''),(6,'50',1,'','',0,'','',1,'','',1,'','',1,'','',0,'','',1,'','',0,'',''),(7,'51',1,'','',0,'','',1,'','',1,'','',1,'','',0,'','',1,'','',0,'',''),(8,'52',1,'','',0,'','',1,'','',1,'','',1,'','',0,'','',1,'','',0,'',''),(9,'53',1,'','',0,'','',1,'','',1,'','',1,'','',0,'','',1,'','',0,'',''),(10,'54',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'',''),(11,'55',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'',''),(12,'56',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'','',0,'',''),(13,'57',1,'','',1,'','',1,'','',1,'','',1,'','',1,'','',1,'','',1,'',''),(14,'58',1,'','',1,'','',1,'','',1,'','',1,'','',1,'','',1,'','',1,'','');
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

-- Dump completed on 2024-09-11 20:58:37
