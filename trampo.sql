-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: trampo
-- ------------------------------------------------------
-- Server version	5.7.9

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
-- Table structure for table `carrega`
--

DROP TABLE IF EXISTS `carrega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrega` (
  `Invocador_Nome` varchar(50) NOT NULL,
  `Item_Nome` varchar(50) NOT NULL,
  `Loja_Vendedor` varchar(50) NOT NULL,
  PRIMARY KEY (`Invocador_Nome`,`Item_Nome`,`Loja_Vendedor`),
  KEY `Item_Nome` (`Item_Nome`),
  KEY `Loja_Vendedor` (`Loja_Vendedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrega`
--

LOCK TABLES `carrega` WRITE;
/*!40000 ALTER TABLE `carrega` DISABLE KEYS */;
INSERT INTO `carrega` VALUES ('BruxaDo71','Armadura de Couro','Hue'),('Chiquinha','Bolo','Taverna'),('DK','Anabolizante','BAMBAM'),('DK','Armadura de Couro','BAMBAM'),('DK','Capacete de Couro','BAMBAM'),('Jogador666','Bolo','Viajante'),('Jogador666','Mana Potion','Alquimista'),('MisterBoo','Capacete de Couro','Johnny'),('Tester','Max Potion','Alquimista'),('Xaman','HP Potion','TiaCurandeira'),('Xaman','Mana Potion','TiaCurandeira'),('Zezinho','Escudo de Madeira','Ferreiro'),('Zezinho','Espada de Madeira','Ferreiro');
/*!40000 ALTER TABLE `carrega` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elemento`
--

DROP TABLE IF EXISTS `elemento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elemento` (
  `Elemento_Tipo` varchar(50) NOT NULL,
  `Elemento_Nivel` int(11) DEFAULT NULL,
  `Invocador_Nome` varchar(50) NOT NULL,
  PRIMARY KEY (`Elemento_Tipo`,`Invocador_Nome`),
  KEY `Invocador_Nome` (`Invocador_Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elemento`
--

LOCK TABLES `elemento` WRITE;
/*!40000 ALTER TABLE `elemento` DISABLE KEYS */;
INSERT INTO `elemento` VALUES ('Fogo',50,'Jogador666'),('Agua',10,'Jogador666'),('Fogo',10,'Tester'),('Eletrico',60,'Tester'),('Ar',20,'Tester'),('Agua',10,'Xaman'),('Ar',5,'Xaman'),('Terra',15,'Zezinho'),('Fogo',6,'Zezinho'),('Ar',15,'BruxaDo71'),('Fogo',15,'BruxaDo71'),('Agua',7,'Chiquinha'),('Eletrico',6,'Chiquinha'),('Terra',50,'MisterBoo'),('Ar',6,'DK'),('Eletrico',20,'DK');
/*!40000 ALTER TABLE `elemento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invocador`
--

DROP TABLE IF EXISTS `invocador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invocador` (
  `Nickname` varchar(50) NOT NULL,
  `Invocador_Nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`Nickname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invocador`
--

LOCK TABLES `invocador` WRITE;
/*!40000 ALTER TABLE `invocador` DISABLE KEYS */;
INSERT INTO `invocador` VALUES ('Xaman',25),('Zezinho',25),('Jogador666',66),('Tester',80),('BruxaDo71',71),('Chiquinha',50),('MisterBoo',60),('DK',69),('Tainha',22),('Vinho',14),('Humanas',1);
/*!40000 ALTER TABLE `invocador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `Item_Nome` varchar(50) NOT NULL,
  `Item_Tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Item_Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES ('Mana Potion','Consumivel'),('HP Potion','Consumivel'),('Max Potion','Consumivel'),('Bolo','Consumivel'),('Anabolizante','Consumivel'),('Armadura de Couro','Equipamento'),('Espada de Madeira','Equipamento'),('Escudo de Madeira','Equipamento'),('Capacete de Couro','Equipamento'),('Havaiana de Pau','Equipamento'),('Cogumelo Azul','Consumivel');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loja`
--

DROP TABLE IF EXISTS `loja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loja` (
  `Cidade` varchar(50) DEFAULT NULL,
  `Vendedor` varchar(50) NOT NULL,
  `Loja_Nome` varchar(50) NOT NULL,
  PRIMARY KEY (`Vendedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loja`
--

LOCK TABLES `loja` WRITE;
/*!40000 ALTER TABLE `loja` DISABLE KEYS */;
INSERT INTO `loja` VALUES ('VilaAlfa','Ferreiro','Mercadao'),('CidadeCentral','Alquimista','CentroDosAlquimistas'),('VilaAlfa','TiaCurandeira','Mercadao'),('EstradaSul','Viajante','PontoSul'),('BIRL','BAMBAM','Academia'),('Lorencia','Taverna','PingaBoa'),('Lorencia','Johnny','Raiban'),('Huelandia','Hue','HueMania'),('La Place','El Cabron','Elninho'),('Hellru','Bauruzin','BurnedFoot');
/*!40000 ALTER TABLE `loja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monstro`
--

DROP TABLE IF EXISTS `monstro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monstro` (
  `Monstro_Nome` varchar(50) NOT NULL,
  `Monstro_Nivel` int(11) DEFAULT NULL,
  `Monstro_Elemento` varchar(50) DEFAULT NULL,
  `Monstro_Tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Monstro_Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monstro`
--

LOCK TABLES `monstro` WRITE;
/*!40000 ALTER TABLE `monstro` DISABLE KEYS */;
INSERT INTO `monstro` VALUES ('Goblin',5,'Terra','Invocavel'),('RainhaDoGelo',50,'Agua','Boss'),('ReiTroll',60,'Terra','Boss'),('Pikachu',20,'Eletrico','NaoInvocavel'),('HapiaRainha',45,'Ar','Boss'),('Boneca',30,'Fogo','Boss'),('Polvo',25,'Agua','Invocavel'),('GalinhaPintadinha',20,'Ar','NaoInvocavel'),('LEOSTRONDA',70,'Terra','Boss'),('Mandragora',15,'Terra','Invocavel'),('Cobaia',55,'Agua','Invocavel'),('Flango',7,'Ar','Invocavel'),('Chacal',14,'Terra','NaoInvocavel');
/*!40000 ALTER TABLE `monstro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill_monstro`
--

DROP TABLE IF EXISTS `skill_monstro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill_monstro` (
  `Skill_Nome` varchar(50) NOT NULL,
  `Skill_Elemento` varchar(50) DEFAULT NULL,
  `Tempo_de_Recarga` float DEFAULT NULL,
  `Dano` int(11) DEFAULT NULL,
  PRIMARY KEY (`Skill_Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill_monstro`
--

LOCK TABLES `skill_monstro` WRITE;
/*!40000 ALTER TABLE `skill_monstro` DISABLE KEYS */;
INSERT INTO `skill_monstro` VALUES ('ChoqueTrovao','Eletrico',10,200),('ImpactoProfundo','Fogo',10,400),('ZeroAbsoluto','Água',20,500),('LancaChamas','Fogo',30,500),('BombaDeAgua','Agua',25,400),('BolhaDeAr','Ar',15,200),('Chicotada','Terra',15,300),('BolaDeFogo','Fogo',2,100),('Pedrada','Terra',66,666),('BombaDeGas','Ar',10,30),('Faisca','Eletrico',3,10);
/*!40000 ALTER TABLE `skill_monstro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `summon`
--

DROP TABLE IF EXISTS `summon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `summon` (
  `Monstro_Nome` varchar(50) NOT NULL,
  `Invocador_Nome` varchar(50) NOT NULL,
  `Nome_Skill` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Monstro_Nome`,`Invocador_Nome`),
  KEY `Nome_Skill` (`Nome_Skill`),
  KEY `Invocador_Nome` (`Invocador_Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `summon`
--

LOCK TABLES `summon` WRITE;
/*!40000 ALTER TABLE `summon` DISABLE KEYS */;
INSERT INTO `summon` VALUES ('Goblin','Jogador666','Pedrada'),('Goblin','Tester','Chicotada'),('Mandragora','Tester','Chicotada'),('Cobaia','BruxaDO71','BombaDeAgua'),('Cobaia','MisterBoo','BolhaDeAr'),('Polvo','Chiquinha','BombaDeAgua'),('Polvo','DK','BolhaDeAr');
/*!40000 ALTER TABLE `summon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vende`
--

DROP TABLE IF EXISTS `vende`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vende` (
  `Item_Nome` varchar(50) NOT NULL,
  `Loja_Vendedor` varchar(50) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  PRIMARY KEY (`Item_Nome`,`Loja_Vendedor`),
  KEY `Loja_Vendedor` (`Loja_Vendedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vende`
--

LOCK TABLES `vende` WRITE;
/*!40000 ALTER TABLE `vende` DISABLE KEYS */;
INSERT INTO `vende` VALUES ('Mana Potion','TiaCurandeira',300),('HP Potion','TiaCurandeira',300),('Mana Potion','Alquimista',250),('Max Potion','Alquimista',280),('Espada de Madeora','Ferreiro',900),('Escudo de Madeira','Ferreiro',800),('Anabolizante','BAMBAM',9001),('Bolo','Taverna',200),('Capacete de Couro','Jhonny',700),('Armadura de Couro','Hue',1000),('Armadura de Couro','BAMBAM',9001),('Capacete de Couro','BAMBAM',9001);
/*!40000 ALTER TABLE `vende` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-29 13:05:49
