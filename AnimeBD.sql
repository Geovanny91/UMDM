CREATE DATABASE  IF NOT EXISTS `bdanime` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `bdanime`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: bdanime
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `capitulo`
--

DROP TABLE IF EXISTS `capitulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `capitulo` (
  `idcapitulo` bigint(20) NOT NULL AUTO_INCREMENT,
  `nomcap` text COLLATE utf8_spanish_ci NOT NULL,
  `audcap` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `feccap` date NOT NULL,
  `estcap` tinyint(1) NOT NULL,
  `idvideo` bigint(20) NOT NULL,
  `idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idcapitulo`),
  KEY `fk_idvideos` (`idvideo`),
  KEY `fk_idusuario_idx` (`idusuario`),
  CONSTRAINT `fk_idusuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idvideos` FOREIGN KEY (`idvideo`) REFERENCES `video` (`idvideo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capitulo`
--

LOCK TABLES `capitulo` WRITE;
/*!40000 ALTER TABLE `capitulo` DISABLE KEYS */;
INSERT INTO `capitulo` VALUES (1,'Buscando la legendaria espada','','0000-00-00',1,1,1),(2,'Primeros conocidos','','0000-00-00',1,1,1);
/*!40000 ALTER TABLE `capitulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoriapersona`
--

DROP TABLE IF EXISTS `categoriapersona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoriapersona` (
  `idcatpersona` int(11) NOT NULL AUTO_INCREMENT,
  `descper` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idcatpersona`)
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
  `idcatvideo` int(11) NOT NULL AUTO_INCREMENT,
  `descvid` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estcvid` tinyint(1) NOT NULL,
  PRIMARY KEY (`idcatvideo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
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
-- Table structure for table `detallecapitulo`
--

DROP TABLE IF EXISTS `detallecapitulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detallecapitulo` (
  `iddetcapitulo` bigint(20) NOT NULL AUTO_INCREMENT,
  `urldcap` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `subdcap` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fandtcap` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `idcapitulo` bigint(20) NOT NULL,
  `idservidor` bigint(20) NOT NULL,
  PRIMARY KEY (`iddetcapitulo`),
  KEY `fk_idcapitulo_idx` (`idcapitulo`),
  KEY `fk_idservidor_idx` (`idservidor`),
  CONSTRAINT `fk_idcapitulo` FOREIGN KEY (`idcapitulo`) REFERENCES `capitulo` (`idcapitulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idservidor` FOREIGN KEY (`idservidor`) REFERENCES `servidor` (`IdServidor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detallecapitulo`
--

LOCK TABLES `detallecapitulo` WRITE;
/*!40000 ALTER TABLE `detallecapitulo` DISABLE KEYS */;
INSERT INTO `detallecapitulo` VALUES (1,'http://www.vk.dragonballzvideo.html','imagen1','Hanasu',1,1),(2,'http://www.Hyperion.dragonballzvideo.html','Imagen2','Hanasu',1,2);
/*!40000 ALTER TABLE `detallecapitulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genero`
--

DROP TABLE IF EXISTS `genero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genero` (
  `idgenero` int(11) NOT NULL AUTO_INCREMENT,
  `desgen` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estgen` tinyint(1) NOT NULL,
  PRIMARY KEY (`idgenero`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genero`
--

LOCK TABLES `genero` WRITE;
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT INTO `genero` VALUES (1,'Accion',1),(2,'Comedia',1),(3,'Horror',1),(4,'Psicologico',1),(5,'Magia',1);
/*!40000 ALTER TABLE `genero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `nomper` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apepatper` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apematper` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estper` tinyint(1) NOT NULL,
  `idcatpersona` int(11) NOT NULL,
  PRIMARY KEY (`idpersona`),
  KEY `fk_idcatper` (`idcatpersona`),
  CONSTRAINT `fk_idcatper` FOREIGN KEY (`idcatpersona`) REFERENCES `categoriapersona` (`idcatpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
  `idservidor` bigint(20) NOT NULL AUTO_INCREMENT,
  `desser` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `logser` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `catser` bit(1) NOT NULL,
  PRIMARY KEY (`idservidor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
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
  `idtipo` int(11) NOT NULL AUTO_INCREMENT,
  `destip` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomusu` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `conusu` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estusu` bit(1) NOT NULL,
  `idpersona` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_idper_idx` (`idpersona`),
  CONSTRAINT `fk_idper` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'ika','1','',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `idvideo` bigint(20) NOT NULL AUTO_INCREMENT,
  `titvid` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `desvid` text COLLATE utf8_spanish_ci NOT NULL,
  `porvid` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `travid` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `fecvid` datetime NOT NULL,
  `idpersona` int(11) NOT NULL,
  `idcatvideo` int(11) NOT NULL,
  `idgenero` int(11) NOT NULL,
  `idtipo` int(11) NOT NULL,
  `estvid` bit(1) NOT NULL,
  PRIMARY KEY (`idvideo`),
  KEY `fk_idcatvideo` (`idcatvideo`),
  KEY `fk_idpersona` (`idpersona`),
  KEY `fk_idgeneros` (`idgenero`),
  KEY `fk_idtipo` (`idtipo`),
  CONSTRAINT `fk_idcatvideo` FOREIGN KEY (`idcatvideo`) REFERENCES `categoriavideo` (`IdCatVideo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idgeneros` FOREIGN KEY (`idgenero`) REFERENCES `genero` (`idgenero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idpersona` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`IdPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_idtipo` FOREIGN KEY (`idtipo`) REFERENCES `tipo` (`IdTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'Dragon Ball Z','En Dragon ball Z Goku se ha convertido en un adulto y está casado con Milk, con la que tiene un hijo llamado Gohan. En esta segunda saga de Dragon ball Goku descubrirá que no es un terricola, sino que pertenece a una raza de guerreros conocida por ser una de las más poderosas de la galaxia, para posteriormente dar paso a los verdaderos enemigos de la serie. Para poder vencer a los nuevos enemigos que irán surgiendo, Goku y sus amigos tendrán que viajar por otros planetas e incluso al cielo y al infierno. Cada enemigo será más fuerte que el anterior, por lo que tendrán que entrenar muy duro para poder derrotarlos además de que se les irán uniendo nuevos personajes que les ayudarán a vencerlos.','https://imagizer.imageshack.us/v2/225x338q90/513/d8gk.jpg','www.youtube.com','0000-00-00 00:00:00',1,1,1,1,'\0'),(2,'Digimon','Digimon descripcion','digi.png','trailer digimon','2014-01-15 00:00:00',1,1,1,1,''),(3,'Digimon','Digimon descripcion','digi.png','trailer digimon','2014-01-15 00:00:00',1,1,1,1,''),(4,'Pokemon','Ash en las aventuras del pueblo paleta.','pokemon-portada.png','youtube.com/pokemon.','2014-01-15 00:00:00',1,1,1,1,''),(5,'Pokemon','Ash aventuras','pokemon.png','youtube.com/pokemon','2014-01-15 00:00:00',1,1,1,1,''),(6,'Bleach','Ichigo en aventuras con shinigamis.','Bleach.png','youtbe.com/bleach','2014-01-16 00:00:00',1,1,1,1,''),(7,'Kill la Kill','Makato','kill.png','youtube.com/kill','2014-01-18 00:00:00',1,1,1,1,''),(8,'Yuyu Hashuko','Kahuajara','Yuyu.png','youtube.com/yuyu','2014-01-15 00:00:00',1,1,1,1,''),(9,'Code Breakers','Hitaka','code.png','youtube.com/code','2014-01-18 00:00:00',1,1,1,1,''),(10,'Death note','Kira nuevo Dios','note.png','youtube/note','2014-01-19 00:00:00',1,1,1,1,''),(11,'Zenki','NiÃ±o mutante','zenki.png','yotube.com/zenki','2014-01-19 00:00:00',1,1,1,1,''),(12,'Naruto','Naruto en aventuras','naruto.png','youtube.com/naruto','2014-01-15 00:00:00',1,1,1,1,''),(13,'Samurai x','jh','kj','h','2014-02-04 00:00:00',1,2,1,2,''),(14,'One Piece','Marinero','dsd','dfdf','2014-01-27 00:00:00',1,3,2,2,''),(15,'School Evil','d','fdfd','fdf','2014-01-27 00:00:00',1,3,1,1,''),(16,'Other','jhjs','jkds','jkshd','2014-01-28 00:00:00',1,1,1,1,''),(17,'the simpsions','Bart el niÃ±o','www.bart.png','www.youtube.com/simpsons..','2014-03-23 00:00:00',3,2,2,1,'');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-25 16:12:29
