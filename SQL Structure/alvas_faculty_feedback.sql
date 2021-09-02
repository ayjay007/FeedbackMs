-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: alvas
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `faculty_feedback`
--

DROP TABLE IF EXISTS `faculty_feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faculty_feedback` (
  `fdbk_id` varchar(5) DEFAULT NULL,
  `f_id` varchar(5) DEFAULT NULL,
  `q1` int DEFAULT NULL,
  `q2` int DEFAULT NULL,
  `q3` int DEFAULT NULL,
  `q4` int DEFAULT NULL,
  `q5` int DEFAULT NULL,
  `q6` int DEFAULT NULL,
  `q7` int DEFAULT NULL,
  `q8` int DEFAULT NULL,
  `q9` int DEFAULT NULL,
  `q10` int DEFAULT NULL,
  `q11` int DEFAULT NULL,
  `q12` int DEFAULT NULL,
  `q13` int DEFAULT NULL,
  `q14` int DEFAULT NULL,
  `q15` int DEFAULT NULL,
  `q16` int DEFAULT NULL,
  `q17` int DEFAULT NULL,
  `cmnt` varchar(200) DEFAULT NULL,
  `s_id` varchar(5) DEFAULT NULL,
  KEY `s_id` (`s_id`),
  CONSTRAINT `faculty_feedback_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `students` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculty_feedback`
--

LOCK TABLES `faculty_feedback` WRITE;
/*!40000 ALTER TABLE `faculty_feedback` DISABLE KEYS */;
INSERT INTO `faculty_feedback` VALUES ('FD101','F101',4,5,3,4,4,4,3,5,2,4,4,5,4,3,2,4,5,'It was better if the materials provided was also in soft copies.','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101'),('101','F101',1,2,3,4,5,4,3,2,4,5,3,2,4,3,4,3,4,'None','S101');
/*!40000 ALTER TABLE `faculty_feedback` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-02 11:11:55
