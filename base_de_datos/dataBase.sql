-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: registro
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB

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
-- Table structure for table `agendados`
--

DROP TABLE IF EXISTS `agendados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agendados` (
  `id` int(11) NOT NULL,
  `masaje` varchar(255) NOT NULL,
  `fechaHora` datetime NOT NULL,
  UNIQUE KEY `UQ_agendados_fechaHora` (`fechaHora`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agendados`
--

LOCK TABLES `agendados` WRITE;
/*!40000 ALTER TABLE `agendados` DISABLE KEYS */;
INSERT INTO `agendados` VALUES (0,'relajante','2021-01-11 11:00:00'),(0,'relajante','2021-01-11 11:55:00');
/*!40000 ALTER TABLE `agendados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turno`
--

DROP TABLE IF EXISTS `turno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turno` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `masaje` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `horario` time NOT NULL,
  PRIMARY KEY (`id_turno`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turno`
--

LOCK TABLES `turno` WRITE;
/*!40000 ALTER TABLE `turno` DISABLE KEYS */;
INSERT INTO `turno` VALUES (1,'lumbar','2020-12-14','17:00:00'),(2,'lumbar','2020-12-14','18:10:00'),(3,'lumbar','2020-12-28','12:05:00'),(4,'lumbar','2020-12-22','12:06:00'),(5,'lumbar','2020-12-22','12:06:00'),(6,'relajante','2020-12-28','15:41:00'),(7,'relajante','0000-00-00','18:14:00'),(8,'lumbar','0000-00-00','22:29:00'),(9,'lumbar','0000-00-00','22:29:00'),(10,'lumbar','2020-12-28','19:00:00'),(11,'relajante','0000-00-00','22:17:00'),(12,'relajante','0000-00-00','21:20:00'),(13,'lumbar','0000-00-00','16:46:00'),(14,'relajante','0000-00-00','14:45:00'),(15,'relajante','0000-00-00','16:49:00'),(16,'relajante','0000-00-00','18:29:00');
/*!40000 ALTER TABLE `turno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `clave` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `clave` varchar(250) DEFAULT NULL,
  `codigo` varchar(250) DEFAULT NULL,
  `estado` int(11) DEFAULT '0',
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Juan','Garcia','juangarcia@gmail.com','loti','12345678',NULL,0),(2,'sabrina','aguirre','aguirresabrinaa@gmail.com','sabri','biscochito8',NULL,1),(3,'Maria','Gonzales','maria.lupe@gmail.com',NULL,'$2y$10$Ws.NZUpRs.7akV810pERi.7.FezNqK6QIZGyANeHxIe/UxbwCUwBW','cbcbdb182cb6a03b27b4b6bebbf9318f',0),(4,'Sol','Aguirre','aguirresabrinaa@gmail.com',NULL,'$2y$10$iwaMj0uEN2VF.qLvvmvicu3O5Q.RB9nWhPQuvCEmaEgUIx3DEdpD.','cce6513fe7a37770a5a5254114aeb753',0),(5,'Ezequiel','Aguirre','aguirreezequiel@gmail.com',NULL,'$2y$10$v7gTazhZxb2wp3uahyEZZexCquCw4Z3QDzfZ/CEDalOWn.UQk6vkW','2b7e48aeeb121d2e920c4877c153e90b',0),(6,'MartÃ­n','Luitar','martinluitar@gmail.com',NULL,'$2y$10$WmtMXJxOWK3W.UzHmV26Leeo3WbvVHe2ISGb6o779IJkWAhh4n/4C','b1a1d60d9d6dc230324bcaaa05ec7173',0),(7,'Marta','Minujin','minumarta@gmail.com',NULL,'$2y$10$oh1lqBpR78756n3bNExWAeojhRe5CrrPqE87qJ5NqtbIDs.Qln5by','69b6c32e5af5fae413dea18bcd925657',0),(8,'Marta','Minujin','minumarta@gmail.com',NULL,'$2y$10$L5lrVIPRR2Lj/dZJ07Xx.O67npGLEDmFFmzQVrwcpIexWw9NIXLGm','d403e082f9c8978b3878f0e40f95ffd6',0),(9,'Marta','Minujin','minumarta@gmail.com',NULL,'$2y$10$hAn9edz8uRrlh5EYYVCpp.qGb6Bf8qhVNNNcl7u/bnlyaWZKtXS8S','56945fde697335818e5b46883ea9e6ab',0),(10,'Marta','Minujin','minumarta@gmail.com',NULL,'$2y$10$XMT2A3PLpEWPYoUBExT1MuRpA2TeNAxbYEz2uHqlFk800fuMbt.Ky','c646b54625a75a415585585c4845dba2',0);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `estado` bit(1) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Andres','Romani','andresfacebook55@outlook.com','$2y$10$ep7CTNpoZaXDQXoKePeSyuHqGXMdn7Lb7PYutLWJh04xv1NXgsMWS','992ff7daa6891f647ebd4eb95e72f347',''),(2,'Martin','Dias','martindias@gmail.com','$2y$10$6.p1ttcC/k2OuQh.pJCUnOeVWkJbeu9hhDZVj1wZBYp9jmcqSqTfi','b9b2c20984ae0e8342041824c5034c46',''),(3,'Marta','Gonzalez','martitagonzalez@gmail.com','$2y$10$uu0eWjakgsYZrzpAzxWK9.NRUp2BdVH/YX1AsUyuL3dWp6SlRgmrq','6423e1337075b3d176bd93fbdb4b4aea',''),(4,'Sarah','Connor','SaritaC@gmail.com','$2y$10$z94/EvZiSzTNcsagravOeO//MGJJUk7MPVh4980e7n7DGe4cAg1l6','86dc72992433a8814b47a1871d185284',''),(5,'luis','perez','aguirresabrinaa@gmail.com','$2y$10$xogzhvjJGMImKQrf9.Ct/O9WmgGLS0EWhesFTIiKbGRIO3kyqbUJy','0991166c6d02ae73060d720cde677653',''),(6,'Marcos','Ayala','ayala@miempresa.com','$2y$10$p9iD0HzBsw3OsXyFuQi07el0SJDLGtP.Uac04H5gxCe6Hm0sapgRG','0b8797d7e7138c4653c545cda0ff5dcf',''),(7,'Carla','Lopez','carluchis@gmail.com','$2y$10$Pe96aCSsTpIq/oWr2w0sv.VNg7NVfFXqHKZXP0hrt3W7BVxez.5jW','0f2905fd658e0eec39c554797cc868e3',''),(8,'Juan','Pabl6','juanpablo@gmail.com','$2y$10$Ob8FbsTepvNdudNu6qqNleRlk28vg.dWkOD5XMnzjUjj5FDKeNO8u','94a76f9ed2f5f6c1d052a9231c75997c',''),(9,'Lucia','7767RJD','matindias@gmail.com','$2y$10$NfUB4NQeBpqnnVyl4T4pwOUP53.aAxOnmdafkDQ8MQKJPe9ERcYBa','a0e8ebbbcd39f5d47af1f06479a23636','');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'registro'
--

--
-- Dumping routines for database 'registro'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-10 17:17:18
