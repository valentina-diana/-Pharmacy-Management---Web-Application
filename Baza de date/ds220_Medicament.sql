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
-- Table structure for table `Medicament`
--

DROP TABLE IF EXISTS `Medicament`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Medicament` (
  `idMedicament` int NOT NULL,
  `Denumire` varchar(100) DEFAULT NULL,
  `Pret` int DEFAULT NULL,
  `Stoc` int DEFAULT NULL,
  `Producator` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMedicament`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Medicament`
--

LOCK TABLES `Medicament` WRITE;
/*!40000 ALTER TABLE `Medicament` DISABLE KEYS */;
INSERT INTO `Medicament` VALUES (1,'Nurofen',23,20,'Zentiva'),(2,'Aspirina',20,40,'Zentiva'),(3,'Paracetamol',19,30,'Farmex Company SRL'),(4,'Algocalmin',15,100,'Zentiva'),(5,'Calmotusin',30,55,'Dacia Plant'),(6,'Bioflu',16,33,'Biofarm S.A'),(7,'Aspacardin',24,40,'Terapia S.A'),(8,'Brufen',11,70,'Famar A.V.E Anthoussa PLANT'),(9,'Imodium',17,70,'Terapia S.A'),(10,'Sindolor',40,77,'FITERMAN PHARMA'),(11,'Azitromicina',22,20,'Terapia S.A'),(12,'Almacor',35,50,'FITERMAN PHARMA'),(13,'Nurofen forte',25,130,'Terapia S.A'),(14,'Septolete',35,144,'Zentiva');
/*!40000 ALTER TABLE `Medicament` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-30 15:11:45
