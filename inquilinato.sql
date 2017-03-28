-- MySQL dump 10.13  Distrib 5.1.57, for suse-linux-gnu (i686)
--
-- Host: localhost    Database: control_inquilinato
-- ------------------------------------------------------
-- Server version	5.1.57-log

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
-- Table structure for table `ciudades`
--

DROP TABLE IF EXISTS `ciudades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Ciudades del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudades`
--

LOCK TABLES `ciudades` WRITE;
/*!40000 ALTER TABLE `ciudades` DISABLE KEYS */;
INSERT INTO `ciudades` VALUES (1,'Santiago');
/*!40000 ALTER TABLE `ciudades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contratos`
--

DROP TABLE IF EXISTS `contratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(45) DEFAULT NULL,
  `inquilino_id` int(11) DEFAULT NULL,
  `propietario_id` int(11) DEFAULT NULL,
  `propiedad_id` int(11) DEFAULT NULL,
  `fecha_contrato` date DEFAULT NULL,
  `fecha_termino` date DEFAULT NULL,
  `monto` decimal(15,2) DEFAULT NULL,
  `pagado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contratos`
--

LOCK TABLES `contratos` WRITE;
/*!40000 ALTER TABLE `contratos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contratos_cuotas`
--

DROP TABLE IF EXISTS `contratos_cuotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contratos_cuotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contrato_id` int(11) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `monto` decimal(15,2) DEFAULT NULL,
  `fecha_real_pago` date DEFAULT NULL,
  `monto_real_pagado` decimal(15,2) DEFAULT NULL,
  `cuota` varchar(20) DEFAULT NULL,
  `concepto` text,
  `cancelado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Detalles de los pagos estipulados en el contrato';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contratos_cuotas`
--

LOCK TABLES `contratos_cuotas` WRITE;
/*!40000 ALTER TABLE `contratos_cuotas` DISABLE KEYS */;
/*!40000 ALTER TABLE `contratos_cuotas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direcciones_tipos`
--

DROP TABLE IF EXISTS `direcciones_tipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direcciones_tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tipos de direcciones posibles';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direcciones_tipos`
--

LOCK TABLES `direcciones_tipos` WRITE;
/*!40000 ALTER TABLE `direcciones_tipos` DISABLE KEYS */;
/*!40000 ALTER TABLE `direcciones_tipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ecs`
--

DROP TABLE IF EXISTS `ecs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ecs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Estados civiles del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ecs`
--

LOCK TABLES `ecs` WRITE;
/*!40000 ALTER TABLE `ecs` DISABLE KEYS */;
/*!40000 ALTER TABLE `ecs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `excusas`
--

DROP TABLE IF EXISTS `excusas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `excusas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(45) DEFAULT NULL,
  `inquilino_id` int(11) DEFAULT NULL,
  `propiedad_id` int(11) DEFAULT NULL,
  `excusa` text,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Excusas planteadas por los inquilinos al no presentar el pag';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `excusas`
--

LOCK TABLES `excusas` WRITE;
/*!40000 ALTER TABLE `excusas` DISABLE KEYS */;
/*!40000 ALTER TABLE `excusas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fiadores`
--

DROP TABLE IF EXISTS `fiadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fiadores` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Son los fiadores del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fiadores`
--

LOCK TABLES `fiadores` WRITE;
/*!40000 ALTER TABLE `fiadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `fiadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inquilinos`
--

DROP TABLE IF EXISTS `inquilinos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inquilinos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(45) DEFAULT NULL,
  `persona_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene inquilinos del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inquilinos`
--

LOCK TABLES `inquilinos` WRITE;
/*!40000 ALTER TABLE `inquilinos` DISABLE KEYS */;
/*!40000 ALTER TABLE `inquilinos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inquilinos_fiadores`
--

DROP TABLE IF EXISTS `inquilinos_fiadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inquilinos_fiadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inquilino_id` int(11) DEFAULT NULL,
  `fiador_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Relacion entre inquilinos y fiadores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inquilinos_fiadores`
--

LOCK TABLES `inquilinos_fiadores` WRITE;
/*!40000 ALTER TABLE `inquilinos_fiadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `inquilinos_fiadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nacionalidades`
--

DROP TABLE IF EXISTS `nacionalidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nacionalidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nacionalidad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Nacionalidades del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nacionalidades`
--

LOCK TABLES `nacionalidades` WRITE;
/*!40000 ALTER TABLE `nacionalidades` DISABLE KEYS */;
/*!40000 ALTER TABLE `nacionalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagos`
--

DROP TABLE IF EXISTS `pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(45) DEFAULT NULL,
  `inquilino_id` int(11) DEFAULT NULL,
  `propiedad_id` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `monto` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Pagos de los inquilinos del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagos`
--

LOCK TABLES `pagos` WRITE;
/*!40000 ALTER TABLE `pagos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(45) DEFAULT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `cedula` varchar(15) DEFAULT NULL,
  `pasaporte` varchar(20) DEFAULT NULL,
  `sexo_id` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `ec_id` int(11) DEFAULT NULL,
  `profesion_id` int(11) DEFAULT NULL,
  `nacionalidad_id` int(11) DEFAULT NULL,
  `personas_tipo_id` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Contiene personas que pueden ser inquilinos o duenos del sis';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (1,'','GLENNIS','ORTIZ','031-','',NULL,'2011-11-12',NULL,NULL,NULL,NULL,0);
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas_direcciones`
--

DROP TABLE IF EXISTS `personas_direcciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas_direcciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `direcciones_tipo_id` int(11) DEFAULT NULL,
  `direccion` text,
  `calle` varchar(50) DEFAULT NULL,
  `numero` decimal(10,0) DEFAULT NULL,
  `sector_id` int(11) DEFAULT NULL,
  `ciudad_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Direccion de la persona';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas_direcciones`
--

LOCK TABLES `personas_direcciones` WRITE;
/*!40000 ALTER TABLE `personas_direcciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `personas_direcciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas_telefonos`
--

DROP TABLE IF EXISTS `personas_telefonos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas_telefonos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `telefonos_tipo_id` int(11) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Diversos telefonos vinculados a la persona';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas_telefonos`
--

LOCK TABLES `personas_telefonos` WRITE;
/*!40000 ALTER TABLE `personas_telefonos` DISABLE KEYS */;
/*!40000 ALTER TABLE `personas_telefonos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas_tipos`
--

DROP TABLE IF EXISTS `personas_tipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas_tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipos` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Tipos de personas que pueden usar el sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas_tipos`
--

LOCK TABLES `personas_tipos` WRITE;
/*!40000 ALTER TABLE `personas_tipos` DISABLE KEYS */;
INSERT INTO `personas_tipos` VALUES (1,'INQUILINA'),(2,'INQUILINA');
/*!40000 ALTER TABLE `personas_tipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesiones`
--

DROP TABLE IF EXISTS `profesiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profesion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Profesiones del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesiones`
--

LOCK TABLES `profesiones` WRITE;
/*!40000 ALTER TABLE `profesiones` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propiedades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `descripcion_corta` varchar(45) DEFAULT NULL,
  `habitaciones` int(11) DEFAULT '0',
  `sala` tinyint(1) DEFAULT '0',
  `cocina` tinyint(1) DEFAULT '0',
  `balcon` tinyint(1) DEFAULT '0',
  `propiedades_tipo_id` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Propiedades del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedades`
--

LOCK TABLES `propiedades` WRITE;
/*!40000 ALTER TABLE `propiedades` DISABLE KEYS */;
INSERT INTO `propiedades` VALUES (1,'FF45','Una descripcion breve','Otra descripcion mas breve',3,1,0,0,1,0);
/*!40000 ALTER TABLE `propiedades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propiedades_direcciones`
--

DROP TABLE IF EXISTS `propiedades_direcciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propiedades_direcciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propiedad_id` int(11) DEFAULT NULL,
  `direcciones_tipo_id` int(11) DEFAULT NULL,
  `direccion` text,
  `calle` varchar(50) DEFAULT NULL,
  `numero` decimal(10,0) DEFAULT NULL,
  `sector_id` int(11) DEFAULT NULL,
  `ciudad_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Direccion de la propiedad';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedades_direcciones`
--

LOCK TABLES `propiedades_direcciones` WRITE;
/*!40000 ALTER TABLE `propiedades_direcciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `propiedades_direcciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propiedades_propietarios`
--

DROP TABLE IF EXISTS `propiedades_propietarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propiedades_propietarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propiedad_id` int(11) DEFAULT NULL,
  `propietario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Relaciones entre los propietarios y propiedades';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedades_propietarios`
--

LOCK TABLES `propiedades_propietarios` WRITE;
/*!40000 ALTER TABLE `propiedades_propietarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `propiedades_propietarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propiedades_tipos`
--

DROP TABLE IF EXISTS `propiedades_tipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propiedades_tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Tipos de propiedades del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedades_tipos`
--

LOCK TABLES `propiedades_tipos` WRITE;
/*!40000 ALTER TABLE `propiedades_tipos` DISABLE KEYS */;
INSERT INTO `propiedades_tipos` VALUES (1,'Apartaestudio'),(2,'Apartamento'),(3,'Casa'),(4,'Solar'),(5,'Local Comercial');
/*!40000 ALTER TABLE `propiedades_tipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propietarios`
--

DROP TABLE IF EXISTS `propietarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propietarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(45) DEFAULT NULL,
  `persona_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contiene duenos del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propietarios`
--

LOCK TABLES `propietarios` WRITE;
/*!40000 ALTER TABLE `propietarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `propietarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reclamaciones`
--

DROP TABLE IF EXISTS `reclamaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reclamaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(45) DEFAULT NULL,
  `inquilino_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `detalle` text,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `resuelto` tinyint(1) DEFAULT '0',
  `activo` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Reclamaciones hechas por los inquilinos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclamaciones`
--

LOCK TABLES `reclamaciones` WRITE;
/*!40000 ALTER TABLE `reclamaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `reclamaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sectores`
--

DROP TABLE IF EXISTS `sectores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sectores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Los sectores del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sectores`
--

LOCK TABLES `sectores` WRITE;
/*!40000 ALTER TABLE `sectores` DISABLE KEYS */;
/*!40000 ALTER TABLE `sectores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sexos`
--

DROP TABLE IF EXISTS `sexos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sexos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Sexos dels sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sexos`
--

LOCK TABLES `sexos` WRITE;
/*!40000 ALTER TABLE `sexos` DISABLE KEYS */;
INSERT INTO `sexos` VALUES (1,'FEMENINO');
/*!40000 ALTER TABLE `sexos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefonos_tipos`
--

DROP TABLE IF EXISTS `telefonos_tipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefonos_tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tipos de telefonos posibles del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefonos_tipos`
--

LOCK TABLES `telefonos_tipos` WRITE;
/*!40000 ALTER TABLE `telefonos_tipos` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefonos_tipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `modificado_en` date DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Usuarios del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-11-17  0:11:56
