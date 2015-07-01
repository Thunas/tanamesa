-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: tanamesa
-- ------------------------------------------------------
-- Server version	5.6.24

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
-- Table structure for table `igrediente`
--

DROP TABLE IF EXISTS `igrediente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `igrediente` (
  `idIgrediente` int(11) NOT NULL AUTO_INCREMENT,
  `fkReceita` int(11) NOT NULL,
  `nomeIgrediente` varchar(100) NOT NULL,
  `seqIgrediente` int(11) NOT NULL,
  `medidaIgrediente` varchar(20) NOT NULL,
  `qtdIgrediente` decimal(10,0) NOT NULL,
  PRIMARY KEY (`idIgrediente`,`fkReceita`),
  KEY `fk_Igrediente_Receita1_idx` (`fkReceita`),
  CONSTRAINT `fk_Igrediente_Receita1` FOREIGN KEY (`fkReceita`) REFERENCES `receita` (`idReceita`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `igrediente`
--

LOCK TABLES `igrediente` WRITE;
/*!40000 ALTER TABLE `igrediente` DISABLE KEYS */;
INSERT INTO `igrediente` VALUES (4,4,'Arroz',1,'copo/pessoa',1),(5,4,'Água',2,'copo',2),(6,4,'Sal',3,'pitada',3),(7,4,'Alho',4,'dente',2),(8,9,'Brinks não vou contar o segredo',1,'zoeira',999999);
/*!40000 ALTER TABLE `igrediente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passoreceita`
--

DROP TABLE IF EXISTS `passoreceita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `passoreceita` (
  `idPassoReceita` int(11) NOT NULL AUTO_INCREMENT,
  `fkReceita` int(11) NOT NULL,
  `seqPasso` int(11) NOT NULL,
  `tipoPasso` tinyint(1) NOT NULL,
  `tempoPasso` time DEFAULT NULL,
  `descricaoPasso` longtext,
  PRIMARY KEY (`idPassoReceita`,`fkReceita`),
  KEY `fk_PassosReceita_Receita_idx` (`fkReceita`),
  CONSTRAINT `fk_PassosReceita_Receita` FOREIGN KEY (`fkReceita`) REFERENCES `receita` (`idReceita`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passoreceita`
--

LOCK TABLES `passoreceita` WRITE;
/*!40000 ALTER TABLE `passoreceita` DISABLE KEYS */;
INSERT INTO `passoreceita` VALUES (3,4,1,1,NULL,'Lave o arroz em água corrente e separe'),(4,4,2,1,NULL,'Bata o alho até ficar com uma consistência pastosa'),(5,4,3,0,'00:00:40','Coloque o olho na panela e ligue o fogo'),(6,4,4,1,NULL,'Adicione o arroz e mexa até ele começar a se soltar'),(7,4,5,0,'00:20:00','Adicione a água até tampar o arroz, abaixe o fogo e tampe a panela.'),(8,4,6,0,'00:15:00','Mexa o arroz até soltá-lo e adicione água a até cobrir o arroz'),(9,4,7,1,NULL,'Desligue o fogo.');
/*!40000 ALTER TABLE `passoreceita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receita`
--

DROP TABLE IF EXISTS `receita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `receita` (
  `idReceita` int(11) NOT NULL AUTO_INCREMENT,
  `nomeReceita` varchar(100) NOT NULL,
  `descricaoReceita` varchar(500) DEFAULT NULL,
  `dificuldadeReceita` varchar(10) DEFAULT NULL,
  `publicaReceita` tinyint(1) NOT NULL,
  PRIMARY KEY (`idReceita`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receita`
--

LOCK TABLES `receita` WRITE;
/*!40000 ALTER TABLE `receita` DISABLE KEYS */;
INSERT INTO `receita` VALUES (4,'Arroz','Receita para iniciantes na cozinha','Fácil',1),(9,'Pão de queijo','Receita para experts e mineiros','Difícil pa',0),(10,'Macarrão italiano','Receita fácil para quem já tem uma noção na cozinha','Médio',0),(11,'Macarrão ao molho vermelho','Receita de macarrão rápida e fácil','Fácil',0),(12,'Feijão','Receita para iniciantes','Fácil',1);
/*!40000 ALTER TABLE `receita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(100) NOT NULL,
  `sobreNomeUsuario` varchar(200) NOT NULL,
  `loginUsuario` varchar(100) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL,
  `emailUsuario` varchar(100) NOT NULL,
  PRIMARY KEY (`idUsuario`,`loginUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Arthur','Gonçalves','arthur','123456','arthur29@hotmail.com.br'),(2,'thi','thi','thi','thi','thi@thi.com.br');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-30  0:25:19
