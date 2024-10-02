-- MariaDB dump 10.17  Distrib 10.4.12-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: streetsouls
-- ------------------------------------------------------
-- Server version	10.4.12-MariaDB

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
-- Table structure for table `description`
--

DROP TABLE IF EXISTS `description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `language` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `description`
--

LOCK TABLES `description` WRITE;
/*!40000 ALTER TABLE `description` DISABLE KEYS */;
INSERT INTO `description` VALUES (0,'de','Ganz lieber Hundi. Immer sehr nett'),(0,'en','Verry nice doggo. Very calm'),(0,'fr','Il est tellement mignon!!! <3'),(0,'lu','Gudden Muppi. Ganz brav'),(1,'de','Sie ist so ein toller Hund'),(1,'en','Best doggo in this world. I love him'),(1,'fr','Mignon! Elle est magnifique'),(1,'lu','Kuck wei süß hatt ass'),(2,'de','ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),(2,'en','Lorem ipsuzm'),(2,'fr','ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),(2,'lu','ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),(3,'de','Ganz lieber Hundi. Immer sehr nett'),(3,'en','Verry nice doggo. Very calm'),(3,'fr','Il est tellement mignon!!! <3'),(3,'lu','Gudden Muppi. Ganz brav'),(4,'de','Sie ist so ein toller Hund'),(4,'en','Best doggo in this world. I love him'),(4,'fr','Mignon! Elle est magnifique'),(4,'lu','Kuck wei süß hatt ass'),(5,'de','ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),(5,'en','Lorem ipsuzm'),(5,'fr','ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg '),(5,'lu','ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ewfsef sef aergfv dyfv ergf ds<fd  sefsfyxf sfwerwe bdv bvbx cdr gerg ');
/*!40000 ALTER TABLE `description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dogs`
--

DROP TABLE IF EXISTS `dogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `race_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dogs`
--

LOCK TABLES `dogs` WRITE;
/*!40000 ALTER TABLE `dogs` DISABLE KEYS */;
INSERT INTO `dogs` VALUES (0,'Maxi',0,'2020-05-19'),(1,'Bella',1,'2020-05-19'),(2,'Rufus',2,'2020-05-19'),(3,'Dede',0,'2020-05-19'),(4,'Canna',2,'2020-05-21');
/*!40000 ALTER TABLE `dogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `race`
--

DROP TABLE IF EXISTS `race`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `race` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(2) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`,`language`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `race`
--

LOCK TABLES `race` WRITE;
/*!40000 ALTER TABLE `race` DISABLE KEYS */;
INSERT INTO `race` VALUES (0,'de','Mischling'),(0,'en','hybrid'),(0,'fr','hybride'),(0,'lu','Baschtert'),(1,'de','Labrador'),(1,'en','Labrador'),(1,'fr','Labrador'),(1,'lu','Labrador'),(2,'de','Schäferhund'),(2,'en','German shepherd'),(2,'fr','Berger allemand'),(2,'lu','Schäferhond'),(3,'de','Chihuahua'),(3,'en','Chihuahua'),(3,'fr','Chihuahua'),(3,'lu','Chihuahua');
/*!40000 ALTER TABLE `race` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-21 18:30:19
