-- MySQL dump 10.13  Distrib 5.7.42, for Linux (x86_64)
--
-- ------------------------------------------------------
-- Server version	5.5.62-log

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
-- Table structure for table `log_busqueda`
--

DROP TABLE IF EXISTS `log_busqueda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_busqueda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ciudad` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `lat` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `lon` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `humedad` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `activo` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_busqueda`
--

LOCK TABLES `log_busqueda` WRITE;
/*!40000 ALTER TABLE `log_busqueda` DISABLE KEYS */;
INSERT INTO `log_busqueda` VALUES (1,'2023-05-16 04:29:01','Bogota','4.6529539','-74.0835643','muy buena',1),(2,'2023-05-16 04:34:10','Bogota','4.6529539','-74.0835643','muy buena',1),(3,'2023-05-16 04:35:11','miami','25.7741728','-80.19362','muy buena',1);
/*!40000 ALTER TABLE `log_busqueda` ENABLE KEYS */;
UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-16  9:21:13
