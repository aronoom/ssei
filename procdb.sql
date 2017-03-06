-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: procdb
-- ------------------------------------------------------
-- Server version	5.5.49-0+deb8u1

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
-- Table structure for table `activite`
--

DROP TABLE IF EXISTS `activite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleActivite` varchar(76) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B87555158F0D2744` (`libelleActivite`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activite`
--

LOCK TABLES `activite` WRITE;
/*!40000 ALTER TABLE `activite` DISABLE KEYS */;
INSERT INTO `activite` VALUES (6,'activite 3'),(4,'activite1'),(8,'activite11'),(3,'Milieus naturelles');
/*!40000 ALTER TABLE `activite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agent`
--

DROP TABLE IF EXISTS `agent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `contact_agent` int(11) DEFAULT NULL,
  `adresse_agent` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `fonction_user` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_user` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direction_user` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_268B9C9D92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_268B9C9DA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent`
--

LOCK TABLES `agent` WRITE;
/*!40000 ALTER TABLE `agent` DISABLE KEYS */;
INSERT INTO `agent` VALUES (6,'Rojo','rojo','rojo@gmail.com','rojo@gmail.com',1,'bom2rljxodsskwwk4cos8kk0k48wosg','$2y$13$bom2rljxodsskwwk4cos8e7QiC/3XxhTQsAjhhBujL3r49WVSBZiq',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,545,'fenerivo',NULL,NULL,'user','service','direction'),(12,'root','root','root@gmail.com','root@gmail.com',1,'csim12izaggscs84wkgk80wsss44g8k','$2y$13$csim12izaggscs84wkgk8uRiXZhq9uiIweh6RBOhB9JGzEzrDU/jS',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,250231025,'adresse',NULL,NULL,'fonction1','service2','direction1'),(13,'Faniahy','faniahy','fan@gmail.com','fan@gmail.com',1,'bd51x4egk740kg44g0s4wcs0skggokg','$2y$13$bd51x4egk740kg44g0s4wOoCSTXZE6RtoKWVfnDZuNxX/rEy/DlE.',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,250231025,'adresse',NULL,NULL,'fonction1','service2','direction1'),(14,'ranaivoson','ranaivoson','njato@outlook.fr','njato@outlook.fr',1,'ltfckbwpseo84oocokcg8g0gs8cko4w','$2y$13$ltfckbwpseo84oocokcg8eR6aK9vEoxJCdHyZoOX4bgzaZeA21NYq',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,2147483647,'nchskhqk',NULL,NULL,'znkznkn','kznzknkz','knzzknkz');
/*!40000 ALTER TABLE `agent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agent_entite`
--

DROP TABLE IF EXISTS `agent_entite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent_entite` (
  `agent_id` int(11) NOT NULL,
  `entite_id` int(11) NOT NULL,
  PRIMARY KEY (`agent_id`,`entite_id`),
  KEY `IDX_44CE4F013414710B` (`agent_id`),
  KEY `IDX_44CE4F019BEA957A` (`entite_id`),
  CONSTRAINT `FK_44CE4F013414710B` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_44CE4F019BEA957A` FOREIGN KEY (`entite_id`) REFERENCES `entite` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent_entite`
--

LOCK TABLES `agent_entite` WRITE;
/*!40000 ALTER TABLE `agent_entite` DISABLE KEYS */;
INSERT INTO `agent_entite` VALUES (14,31);
/*!40000 ALTER TABLE `agent_entite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commune`
--

DROP TABLE IF EXISTS `commune`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commune` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_id` int(11) NOT NULL,
  `commune_libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `commune_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E2E2D1EEB08FA272` (`district_id`),
  CONSTRAINT `FK_E2E2D1EEB08FA272` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commune`
--

LOCK TABLES `commune` WRITE;
/*!40000 ALTER TABLE `commune` DISABLE KEYS */;
/*!40000 ALTER TABLE `commune` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_id` int(11) NOT NULL,
  `district_libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `district_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_31C1548798260155` (`region_id`),
  CONSTRAINT `FK_31C1548798260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `district`
--

LOCK TABLES `district` WRITE;
/*!40000 ALTER TABLE `district` DISABLE KEYS */;
/*!40000 ALTER TABLE `district` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entite`
--

DROP TABLE IF EXISTS `entite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codeEntite` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `groupe_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ID_ENTIE_GROUP` (`codeEntite`,`groupe_id`),
  KEY `IDX_1A2918277A45358C` (`groupe_id`),
  CONSTRAINT `FK_1A2918277A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `group_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entite`
--

LOCK TABLES `entite` WRITE;
/*!40000 ALTER TABLE `entite` DISABLE KEYS */;
INSERT INTO `entite` VALUES (33,'CAM',13),(32,'CAM',14),(31,'DR itasy',9),(30,'DR itasy',14);
/*!40000 ALTER TABLE `entite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_user`
--

DROP TABLE IF EXISTS `group_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codeGroupUser` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A4C98D39B6E8371C` (`codeGroupUser`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_user`
--

LOCK TABLES `group_user` WRITE;
/*!40000 ALTER TABLE `group_user` DISABLE KEYS */;
INSERT INTO `group_user` VALUES (14,'CDCA'),(12,'DRACD'),(9,'DRAE'),(13,'DRDE'),(16,'GP1'),(17,'OR');
/*!40000 ALTER TABLE `group_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indicateur`
--

DROP TABLE IF EXISTS `indicateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleIndicateur` varchar(92) COLLATE utf8_unicode_ci NOT NULL,
  `descriptionIndicateur` tinytext COLLATE utf8_unicode_ci,
  `activite_id` int(11) DEFAULT NULL,
  `unite_id` int(11) DEFAULT NULL,
  `nature_id` int(11) DEFAULT NULL,
  `mode_calcul_id` int(11) DEFAULT NULL,
  `subdivision_id` int(11) DEFAULT NULL,
  `periodicite_id` int(11) DEFAULT NULL,
  `sous_secteur_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7C663A2761CD715A` (`libelleIndicateur`),
  KEY `IDX_7C663A279B0F88B1` (`activite_id`),
  KEY `IDX_7C663A27EC4A74AB` (`unite_id`),
  KEY `IDX_7C663A273BCB2E4B` (`nature_id`),
  KEY `IDX_7C663A27E3CC4411` (`mode_calcul_id`),
  KEY `IDX_7C663A27E05F13C` (`subdivision_id`),
  KEY `IDX_7C663A272928752A` (`periodicite_id`),
  KEY `IDX_7C663A27790611EF` (`sous_secteur_id`),
  CONSTRAINT `FK_7C663A272928752A` FOREIGN KEY (`periodicite_id`) REFERENCES `periodicite` (`id`),
  CONSTRAINT `FK_7C663A273BCB2E4B` FOREIGN KEY (`nature_id`) REFERENCES `nature` (`id`),
  CONSTRAINT `FK_7C663A27790611EF` FOREIGN KEY (`sous_secteur_id`) REFERENCES `sous_secteur` (`id`),
  CONSTRAINT `FK_7C663A279B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`),
  CONSTRAINT `FK_7C663A27E05F13C` FOREIGN KEY (`subdivision_id`) REFERENCES `subdivision` (`id`),
  CONSTRAINT `FK_7C663A27E3CC4411` FOREIGN KEY (`mode_calcul_id`) REFERENCES `mode_calcul` (`id`),
  CONSTRAINT `FK_7C663A27EC4A74AB` FOREIGN KEY (`unite_id`) REFERENCES `unite` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicateur`
--

LOCK TABLES `indicateur` WRITE;
/*!40000 ALTER TABLE `indicateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `indicateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indicateur_type`
--

DROP TABLE IF EXISTS `indicateur_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicateur_type` (
  `indicateur_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`indicateur_id`,`type_id`),
  KEY `IDX_F25C4D8BDA3B8F3D` (`indicateur_id`),
  KEY `IDX_F25C4D8BC54C8C93` (`type_id`),
  CONSTRAINT `FK_F25C4D8BC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F25C4D8BDA3B8F3D` FOREIGN KEY (`indicateur_id`) REFERENCES `indicateur` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicateur_type`
--

LOCK TABLES `indicateur_type` WRITE;
/*!40000 ALTER TABLE `indicateur_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `indicateur_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mode_calcul`
--

DROP TABLE IF EXISTS `mode_calcul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mode_calcul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_Mode_calcul` varchar(88) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9B2D6C0C20A208D5` (`libelle_Mode_calcul`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mode_calcul`
--

LOCK TABLES `mode_calcul` WRITE;
/*!40000 ALTER TABLE `mode_calcul` DISABLE KEYS */;
INSERT INTO `mode_calcul` VALUES (1,'modeCalcul1'),(2,'modeCalcul21'),(3,'modeCalcul3'),(7,'modeCalcul4');
/*!40000 ALTER TABLE `mode_calcul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nature`
--

DROP TABLE IF EXISTS `nature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleNature` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B1D882A7F29B1147` (`libelleNature`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nature`
--

LOCK TABLES `nature` WRITE;
/*!40000 ALTER TABLE `nature` DISABLE KEYS */;
INSERT INTO `nature` VALUES (6,'nature115'),(2,'nature15'),(3,'nature3');
/*!40000 ALTER TABLE `nature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodicite`
--

DROP TABLE IF EXISTS `periodicite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodicite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libellePeriodicite` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D13D99F3FF943F39` (`libellePeriodicite`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodicite`
--

LOCK TABLES `periodicite` WRITE;
/*!40000 ALTER TABLE `periodicite` DISABLE KEYS */;
INSERT INTO `periodicite` VALUES (6,'1periodicite5'),(5,'periodicite2');
/*!40000 ALTER TABLE `periodicite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `region_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sous_secteur`
--

DROP TABLE IF EXISTS `sous_secteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sous_secteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleSousSecteur` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A34C5D52487DAF3D` (`libelleSousSecteur`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sous_secteur`
--

LOCK TABLES `sous_secteur` WRITE;
/*!40000 ALTER TABLE `sous_secteur` DISABLE KEYS */;
INSERT INTO `sous_secteur` VALUES (6,'ss1'),(7,'ss5');
/*!40000 ALTER TABLE `sous_secteur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subdivision`
--

DROP TABLE IF EXISTS `subdivision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subdivision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleSubdivision` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1B87FA9D352E5C57` (`libelleSubdivision`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subdivision`
--

LOCK TABLES `subdivision` WRITE;
/*!40000 ALTER TABLE `subdivision` DISABLE KEYS */;
INSERT INTO `subdivision` VALUES (1,'1subdivision1'),(2,'subdivision2'),(7,'subdivision23'),(5,'subdivision3');
/*!40000 ALTER TABLE `subdivision` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleType` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8CDE5729997FABD2` (`libelleType`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (5,'type1'),(1,'type12'),(2,'type2'),(3,'type3');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unite`
--

DROP TABLE IF EXISTS `unite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleUnite` varchar(53) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D64C118371E4B70` (`libelleUnite`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unite`
--

LOCK TABLES `unite` WRITE;
/*!40000 ALTER TABLE `unite` DISABLE KEYS */;
INSERT INTO `unite` VALUES (1,'unite122'),(2,'unite2'),(3,'unite3');
/*!40000 ALTER TABLE `unite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'root','root','root@gmail.com','root@gmail.com',1,'6xut86zqf04cs8cskk0o88gkgwgo8co','$2y$13$6xut86zqf04cs8cskk0o8uNPY/F2rNUAtEkfbIplC94P4KwbrlcV2','2017-02-17 20:33:32',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-06 19:26:18
