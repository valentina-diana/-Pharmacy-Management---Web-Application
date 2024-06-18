-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: web.cti.ugal.ro    Database: ds220
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

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
-- Table structure for table `Vanzare`
--

DROP TABLE IF EXISTS `Vanzare`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Vanzare` (
  `idVanzare` int NOT NULL,
  `idMedicament` int DEFAULT NULL,
  `codc` int DEFAULT NULL,
  `data_Vanzare` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idVanzare`),
  KEY `idMedicament` (`idMedicament`),
  KEY `codc` (`codc`),
  CONSTRAINT `Vanzare_ibfk_1` FOREIGN KEY (`idMedicament`) REFERENCES `Medicament` (`idMedicament`),
  CONSTRAINT `Vanzare_ibfk_2` FOREIGN KEY (`codc`) REFERENCES `Client` (`codc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Vanzare`
--

LOCK TABLES `Vanzare` WRITE;
/*!40000 ALTER TABLE `Vanzare` DISABLE KEYS */;
INSERT INTO `Vanzare` VALUES (1,1,1,'10.12.2021'),(2,2,2,'10.12.2021'),(3,3,3,'15.12.2021'),(4,4,4,'09.12.2021'),(5,5,6,'13.12.2021'),(6,6,5,'30-04-2022'),(7,7,8,'27-05-2022'),(8,8,7,'20-05-2022'),(9,9,10,'21-05-2022'),(10,10,9,'22-05-2022'),(11,6,11,'23-05-2022'),(12,4,12,'19.12.2021'),(13,5,7,'28-05-2022'),(14,10,11,'29-05-2022');
/*!40000 ALTER TABLE `Vanzare` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-30 15:11:44
