CREATE DATABASE  IF NOT EXISTS `bdanime` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `bdanime`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: bdanime
-- ------------------------------------------------------
-- Server version	5.5.16

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
-- Table structure for table `capitulos`
--

DROP TABLE IF EXISTS `capitulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `capitulos` (
  `IdCapitulos` bigint(20) NOT NULL AUTO_INCREMENT,
  `NombreCap` text COLLATE utf8_spanish_ci NOT NULL,
  `EstadoCap` tinyint(1) NOT NULL,
  `audiourl` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechasubida` date NOT NULL,
  `IdVideos` bigint(20) NOT NULL,
  PRIMARY KEY (`IdCapitulos`),
  KEY `fk_idvideos` (`IdVideos`),
  CONSTRAINT `fk_idvideos` FOREIGN KEY (`IdVideos`) REFERENCES `videos` (`IdVideos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capitulos`
--

LOCK TABLES `capitulos` WRITE;
/*!40000 ALTER TABLE `capitulos` DISABLE KEYS */;
INSERT INTO `capitulos` VALUES (1,'Buscando la legendaria espada',1,'','0000-00-00',1),(2,'Primeros conocidos',1,'','0000-00-00',1);
/*!40000 ALTER TABLE `capitulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoriapersona`
--

DROP TABLE IF EXISTS `categoriapersona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoriapersona` (
  `IdCatPer` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdCatPer`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoriapersona`
--

LOCK TABLES `categoriapersona` WRITE;
/*!40000 ALTER TABLE `categoriapersona` DISABLE KEYS */;
INSERT INTO `categoriapersona` VALUES (1,'Director'),(2,'Autor');
/*!40000 ALTER TABLE `categoriapersona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoriavideo`
--

DROP TABLE IF EXISTS `categoriavideo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoriavideo` (
  `IdCatVideo` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`IdCatVideo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoriavideo`
--

LOCK TABLES `categoriavideo` WRITE;
/*!40000 ALTER TABLE `categoriavideo` DISABLE KEYS */;
INSERT INTO `categoriavideo` VALUES (1,'Anime',1),(2,'Serie',1),(3,'Peliculas',1);
/*!40000 ALTER TABLE `categoriavideo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalleservidor`
--

DROP TABLE IF EXISTS `detalleservidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalleservidor` (
  `iddetalleservidor` bigint(20) NOT NULL AUTO_INCREMENT,
  `urlcapitulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `subtituladourl` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fansub` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `idcapitulo` bigint(20) NOT NULL,
  `idservidor` bigint(20) NOT NULL,
  PRIMARY KEY (`iddetalleservidor`),
  KEY `fk_idcapitulo_idx` (`idcapitulo`),
  KEY `fk_idservidor_idx` (`idservidor`),
  CONSTRAINT `fk_idcapitulo` FOREIGN KEY (`idcapitulo`) REFERENCES `capitulos` (`IdCapitulos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idservidor` FOREIGN KEY (`idservidor`) REFERENCES `servidor` (`IdServidor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalleservidor`
--

LOCK TABLES `detalleservidor` WRITE;
/*!40000 ALTER TABLE `detalleservidor` DISABLE KEYS */;
INSERT INTO `detalleservidor` VALUES (1,'http://www.vk.dragonballzvideo.html','imagen1','Hanasu',1,1),(2,'http://www.Hyperion.dragonballzvideo.html','Imagen2','Hanasu',1,2);
/*!40000 ALTER TABLE `detalleservidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generos`
--

DROP TABLE IF EXISTS `generos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generos` (
  `IdGeneros` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `EstadoGen` tinyint(1) NOT NULL,
  PRIMARY KEY (`IdGeneros`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generos`
--

LOCK TABLES `generos` WRITE;
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` VALUES (1,'Accion',1),(2,'Comedia',1),(3,'Horror',1),(4,'Psicologico',1),(5,'Magia',1);
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `IdPersona` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ApellidoMa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ApellidoPa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `EstadoPer` tinyint(1) NOT NULL,
  `IdCatPer` int(11) NOT NULL,
  PRIMARY KEY (`IdPersona`),
  KEY `fk_idcatper` (`IdCatPer`),
  CONSTRAINT `fk_idcatper` FOREIGN KEY (`IdCatPer`) REFERENCES `categoriapersona` (`IdCatPer`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,'Akira','Toriyama','Ama',1,2),(2,'Geovanny','Ríos','Abarca',1,2),(3,'Jesús ','Torres','Muerto',1,2);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servidor`
--

DROP TABLE IF EXISTS `servidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servidor` (
  `IdServidor` bigint(20) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Logo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` bit(1) NOT NULL,
  PRIMARY KEY (`IdServidor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servidor`
--

LOCK TABLES `servidor` WRITE;
/*!40000 ALTER TABLE `servidor` DISABLE KEYS */;
INSERT INTO `servidor` VALUES (1,'Vk','www.google.com',''),(2,'Hyperion','www.google.com',''),(3,'Videobam','www.google.com',''),(4,'Putlocker','www.google.com','');
/*!40000 ALTER TABLE `servidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo`
--

DROP TABLE IF EXISTS `tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo` (
  `IdTipo` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IdTipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` VALUES (1,'Serie'),(2,'Ova');
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `IdVideos` bigint(20) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Portada` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Trailer` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `FechaEmision` datetime NOT NULL,
  `IdPersona` int(11) NOT NULL,
  `IdCatVideo` int(11) NOT NULL,
  `IdGeneros` int(11) NOT NULL,
  `IdTipo` int(11) NOT NULL,
  `EstadoEmi` bit(1) NOT NULL,
  PRIMARY KEY (`IdVideos`),
  KEY `fk_idcatvideo` (`IdCatVideo`),
  KEY `fk_idpersona` (`IdPersona`),
  KEY `fk_idemision` (`FechaEmision`),
  KEY `fk_idgeneros` (`IdGeneros`),
  KEY `fk_idtipo` (`IdTipo`),
  CONSTRAINT `fk_idcatvideo` FOREIGN KEY (`IdCatVideo`) REFERENCES `categoriavideo` (`IdCatVideo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idgeneros` FOREIGN KEY (`IdGeneros`) REFERENCES `generos` (`IdGeneros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idpersona` FOREIGN KEY (`IdPersona`) REFERENCES `persona` (`IdPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idtipo` FOREIGN KEY (`IdTipo`) REFERENCES `tipo` (`IdTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'Dragon Ball Z','En Dragon ball Z Goku se ha convertido en un adulto y está casado con Milk, con la que tiene un hijo llamado Gohan. En esta segunda saga de Dragon ball Goku descubrirá que no es un terricola, sino que pertenece a una raza de guerreros conocida por ser una de las más poderosas de la galaxia, para posteriormente dar paso a los verdaderos enemigos de la serie. Para poder vencer a los nuevos enemigos que irán surgiendo, Goku y sus amigos tendrán que viajar por otros planetas e incluso al cielo y al infierno. Cada enemigo será más fuerte que el anterior, por lo que tendrán que entrenar muy duro para poder derrotarlos además de que se les irán uniendo nuevos personajes que les ayudarán a vencerlos.','https://imagizer.imageshack.us/v2/225x338q90/513/d8gk.jpg','www.youtube.com','0000-00-00 00:00:00',1,1,1,1,'\0'),(2,'Digimon','Digimon descripcion','digi.png','trailer digimon','2014-01-15 00:00:00',1,1,1,1,''),(3,'Digimon','Digimon descripcion','digi.png','trailer digimon','2014-01-15 00:00:00',1,1,1,1,''),(4,'Pokemon','Ash en las aventuras del pueblo paleta.','pokemon-portada.png','youtube.com/pokemon.','2014-01-15 00:00:00',1,1,1,1,''),(5,'Pokemon','Ash aventuras','pokemon.png','youtube.com/pokemon','2014-01-15 00:00:00',1,1,1,1,''),(6,'Bleach','Ichigo en aventuras con shinigamis.','Bleach.png','youtbe.com/bleach','2014-01-16 00:00:00',1,1,1,1,''),(7,'Kill la Kill','Makato','kill.png','youtube.com/kill','2014-01-18 00:00:00',1,1,1,1,''),(8,'Yuyu Hashuko','Kahuajara','Yuyu.png','youtube.com/yuyu','2014-01-15 00:00:00',1,1,1,1,''),(9,'Code Breakers','Hitaka','code.png','youtube.com/code','2014-01-18 00:00:00',1,1,1,1,''),(10,'Death note','Kira nuevo Dios','note.png','youtube/note','2014-01-19 00:00:00',1,1,1,1,''),(11,'Zenki','NiÃ±o mutante','zenki.png','yotube.com/zenki','2014-01-19 00:00:00',1,1,1,1,''),(12,'Naruto','Naruto en aventuras','naruto.png','youtube.com/naruto','2014-01-15 00:00:00',1,1,1,1,''),(13,'Samurai x','jh','kj','h','2014-02-04 00:00:00',1,2,1,2,''),(14,'One Piece','Marinero','dsd','dfdf','2014-01-27 00:00:00',1,3,2,2,''),(15,'School Evil','d','fdfd','fdf','2014-01-27 00:00:00',1,3,1,1,''),(16,'Other','jhjs','jkds','jkshd','2014-01-28 00:00:00',1,1,1,1,'');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-02-11 20:34:27
