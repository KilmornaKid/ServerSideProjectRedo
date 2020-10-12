-- MySQL dump 10.16  Distrib 10.1.31-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: CinemaSYS
-- ------------------------------------------------------
-- Server version	10.1.31-MariaDB

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
  `bookingid` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `childTickets` int(11) NOT NULL,
  `studentTickets` int(11) NOT NULL,
  `adultTickets` int(11) NOT NULL,
  `totalTickets` int(11) NOT NULL,
  `screeningid` int(11) NOT NULL,
  `custid` int(11) NOT NULL,
  PRIMARY KEY (`bookingid`),
  KEY `screeningid` (`screeningid`),
  KEY `custid` (`custid`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`screeningid`) REFERENCES `screenings` (`screeningid`),
  CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,'2019-09-05','18:00:00',0,10,10,20,22,1),(2,'2019-09-05','18:00:00',0,10,10,20,22,1),(3,'2019-09-05','18:00:00',0,10,10,20,22,1),(4,'2019-09-05','18:00:00',0,10,10,20,22,1),(5,'2019-09-05','18:00:00',0,10,10,20,22,1),(6,'2019-09-05','18:00:00',0,10,10,20,22,1),(12,'2019-09-05','18:00:00',0,10,10,20,22,1),(13,'2019-08-14','18:00:00',0,10,10,20,22,3),(14,'2019-08-27','18:00:00',0,10,10,20,22,7),(15,'2019-08-14','18:00:00',0,10,10,20,22,3),(16,'2019-08-14','12:00:00',0,10,10,20,22,3),(17,'2019-08-14','12:00:00',5,5,5,15,22,1),(18,'2019-08-14','18:00:00',0,9,10,19,22,1),(19,'2019-08-30','12:00:00',5,5,5,15,22,3),(20,'2019-08-22','14:00:00',0,5,5,10,22,1),(21,'2019-08-29','23:00:00',0,5,3,8,22,1),(22,'2019-08-14','20:00:00',0,4,3,7,22,3),(23,'2019-08-24','14:00:00',3,2,1,6,22,3),(24,'2019-09-03','14:00:00',5,6,2,13,22,1),(25,'2019-08-19','21:00:00',0,10,10,20,22,1),(26,'2019-08-14','21:00:00',0,10,10,20,22,1),(27,'2019-08-14','21:00:00',0,10,10,20,22,3),(28,'2019-08-14','21:00:00',0,10,10,20,22,1),(29,'2019-08-14','21:00:00',0,10,10,20,22,1),(30,'2019-08-14','21:00:00',0,10,10,20,22,1),(31,'2019-08-14','21:00:00',0,10,10,20,22,3),(32,'2019-08-14','21:00:00',0,10,10,20,22,1),(33,'2019-08-14','21:00:00',0,10,10,20,22,1),(34,'2019-08-14','21:00:00',0,10,10,20,22,1),(35,'2019-08-14','21:00:00',0,10,10,20,22,3),(36,'2020-10-31','18:00:00',0,3,1,4,21,21),(37,'2020-10-16','18:00:00',0,4,3,7,22,21);
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `custid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` char(20) NOT NULL,
  `surname` char(20) NOT NULL,
  `username` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`custid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Kieran','Stack','ks','12345',50),(3,'Tim','Stack','ts','12345',20),(7,'Steven','Stack','panda','12345',60.49),(16,'Kieran','Stack','t00184968','123',50.5),(17,'Kieran','Stack','lotto_lad','123',50.5),(18,'Spike','Spegal','Bebop','12345',50),(19,'Kieran','Stack','big_salmon','12234',99.99),(20,'Kieran','Stack','KJS','eyisbf45',80),(21,'','Stack','KJS','45288',80),(22,'Owen','MC','Scripty','45288',50);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies` (
  `movieid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Running_Time` time NOT NULL,
  `Description` tinytext NOT NULL,
  `Age_Rating` char(3) NOT NULL,
  PRIMARY KEY (`movieid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'HALLOWEEN','00:01:06','HALLOWEEN is a US horror film in which a serial killer escapes prison and hunts down the woman who evaded him forty years earlier.','18'),(2,'BOHEMIAN RHAPSODY','00:01:34','BOHEMIAN RHAPSODY is a biopic drama following the life and music career of Freddie Mercury.','12A'),(3,'OVERLORD','00:01:10','OVERLORD is a horror film, set during World War II, in which US paratroopers discover the results of secret Nazi experiments.','18'),(4,'VENOM','00:00:00','VENOM is a US sci-fi action fantasy in which alien organisms are brought back to Earth.','15'),(5,'ROBIN HOOD','00:00:00','ROBIN HOOD is an action adventure film in which a nobleman assumes a secret persona as a thief.','12A'),(6,'THE GRINCH','00:01:26','THE GRINCH is a US animated comedy in which a grumpy creature plots to steal Christmas.','U'),(7,'CREED 2','00:01:02','CREED 2 is a sports drama in which a heavyweight boxer seeks to avenge his fathers death.','12A'),(8,'Pokemon','00:01:09','Pokémon the Movie: The Power of Us is a 2018 Japanese anime adventure film','U'),(9,'WRECK IT RALPH 2 ','00:01:10','RALPH BREAKS THE INTERNET is an animated adventure in which two friends enter the internet in order to find a part to fix a game.','PG'),(10,'FANTASTIC BEASTS 2','00:01:02','FANTASTIC BEASTS: THE CRIMES OF GRINDELWALD is a fantasy adventure film in which a dark wizard hatches a plan to subjugate all non-magical beings','12A'),(11,'ONCE UPON A DEADPOOL','00:01:16','ONCE UPON A DEADPOOL is a US action adventure in which a superhero finds new purpose when he assembles a team to rescue a young mutant.','15'),(12,'THE NUTCRACKER','00:00:00','THE NUTCRACKER is a recording of a live performance of the classic Christmas ballet.','U');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `screen`
--

DROP TABLE IF EXISTS `screen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `screen` (
  `screenid` int(11) NOT NULL AUTO_INCREMENT,
  `num_of_seats` int(11) NOT NULL,
  `type` enum('Standard','IMAX','3D') NOT NULL,
  PRIMARY KEY (`screenid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `screen`
--

LOCK TABLES `screen` WRITE;
/*!40000 ALTER TABLE `screen` DISABLE KEYS */;
INSERT INTO `screen` VALUES (1,200,'Standard'),(2,200,'Standard'),(3,200,'IMAX'),(4,200,'3D');
/*!40000 ALTER TABLE `screen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `screenings`
--

DROP TABLE IF EXISTS `screenings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `screenings` (
  `screeningid` int(11) NOT NULL AUTO_INCREMENT,
  `SC_DateFrom` date NOT NULL,
  `SC_DateTo` date NOT NULL,
  `SC_Time` time NOT NULL,
  `screenid` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  PRIMARY KEY (`screeningid`),
  KEY `screenid` (`screenid`),
  KEY `movieid` (`movieid`),
  CONSTRAINT `screenings_ibfk_1` FOREIGN KEY (`screenid`) REFERENCES `screen` (`screenid`),
  CONSTRAINT `screenings_ibfk_2` FOREIGN KEY (`movieid`) REFERENCES `movies` (`movieid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `screenings`
--

LOCK TABLES `screenings` WRITE;
/*!40000 ALTER TABLE `screenings` DISABLE KEYS */;
INSERT INTO `screenings` VALUES (5,'2019-08-24','2020-11-14','12:00:00',1,12),(6,'2019-08-12','2020-11-14','14:00:00',1,11),(7,'2019-08-09','2020-11-14','23:00:00',1,1),(8,'2019-08-09','2020-11-14','12:00:00',3,9),(9,'2019-08-11','2020-11-14','12:00:00',2,10),(10,'2019-08-11','2020-11-14','23:00:00',2,3),(11,'2019-08-10','2020-11-14','14:00:00',3,8),(12,'2019-08-11','2020-11-14','18:00:00',3,7),(13,'2019-08-10','2020-11-14','20:00:00',3,4),(14,'2019-08-09','2020-11-14','14:00:00',4,6),(15,'2019-08-09','2020-11-14','18:00:00',4,5),(16,'2019-08-10','2020-11-14','21:00:00',2,2),(19,'2019-08-10','2020-11-14','18:00:00',1,1),(20,'2019-08-24','2020-11-14','18:00:00',2,2),(21,'2019-08-12','2020-11-14','20:00:00',1,1),(22,'2019-08-12','2020-11-14','14:00:00',2,2);
/*!40000 ALTER TABLE `screenings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-12  9:23:32
