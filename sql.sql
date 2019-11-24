-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: BookOfRecipes
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredient` (
  `ingredient_id` int(11) NOT NULL AUTO_INCREMENT,
  `ingredient_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ingredient_id`),
  UNIQUE KEY `ingredient_ingredient_id_uindex` (`ingredient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='ингрудиенты';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredient`
--

LOCK TABLES `ingredient` WRITE;
/*!40000 ALTER TABLE `ingredient` DISABLE KEYS */;
INSERT INTO `ingredient` VALUES (1,'rЛукr'),(2,'Морковь'),(3,'Cucumberfdf'),(14,'new ingredient');
/*!40000 ALTER TABLE `ingredient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredient_recipe`
--

DROP TABLE IF EXISTS `ingredient_recipe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingredient_recipe` (
  `ingredient_recipe_id` int(11) NOT NULL AUTO_INCREMENT,
  `ingredient_recipe_recipe_id` int(11) NOT NULL,
  `ingredient_recipe_ingredient_id` int(11) NOT NULL,
  `ingredient_recipe_amount` int(11) NOT NULL,
  PRIMARY KEY (`ingredient_recipe_id`),
  UNIQUE KEY `ingredient_recipe_ingredient_recipe_id_uindex` (`ingredient_recipe_id`),
  KEY `ingredient_recipe_recipe_recipe_id_fk` (`ingredient_recipe_recipe_id`),
  KEY `ingredient_recipe_ingredient_ingredient_id_fk` (`ingredient_recipe_ingredient_id`),
  CONSTRAINT `ingredient_recipe_ingredient_ingredient_id_fk` FOREIGN KEY (`ingredient_recipe_ingredient_id`) REFERENCES `ingredient` (`ingredient_id`),
  CONSTRAINT `ingredient_recipe_recipe_recipe_id_fk` FOREIGN KEY (`ingredient_recipe_recipe_id`) REFERENCES `recipe` (`recipe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='ингредиент/Рецепт';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredient_recipe`
--

LOCK TABLES `ingredient_recipe` WRITE;
/*!40000 ALTER TABLE `ingredient_recipe` DISABLE KEYS */;
INSERT INTO `ingredient_recipe` VALUES (62,45,1,4),(63,45,1,8),(64,46,1,4),(65,46,2,3),(66,47,2,4),(67,47,8,3),(68,47,3,6),(83,48,1,9),(84,48,3,3),(85,52,3,5),(86,52,2,4),(88,53,14,5);
/*!40000 ALTER TABLE `ingredient_recipe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipe`
--

DROP TABLE IF EXISTS `recipe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recipe` (
  `recipe_id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recipe_description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`recipe_id`),
  UNIQUE KEY `recipe_recipe_id_uindex` (`recipe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='рецепт';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipe`
--

LOCK TABLES `recipe` WRITE;
/*!40000 ALTER TABLE `recipe` DISABLE KEYS */;
INSERT INTO `recipe` VALUES (45,'test','Description'),(53,'testte','sdfsfd');
/*!40000 ALTER TABLE `recipe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `route`
--

DROP TABLE IF EXISTS `route`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `route` (
  `route_id` int(11) NOT NULL AUTO_INCREMENT,
  `route_map` text COLLATE utf8_unicode_ci,
  `route_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`route_id`),
  UNIQUE KEY `route_route_id_uindex` (`route_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='маршруты';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `route`
--

LOCK TABLES `route` WRITE;
/*!40000 ALTER TABLE `route` DISABLE KEYS */;
INSERT INTO `route` VALUES (2,'a:16:{s:11:\"/ingredient\";a:2:{i:0;s:21:\"controller\\Ingredient\";i:1;s:4:\"page\";}s:18:\"/ingredient/create\";a:2:{i:0;s:21:\"controller\\Ingredient\";i:1;s:6:\"create\";}s:15:\"/ingredient/add\";a:2:{i:0;s:21:\"controller\\Ingredient\";i:1;s:3:\"add\";}s:23:\"/ingredient/delete/:var\";a:2:{i:0;s:21:\"controller\\Ingredient\";i:1;s:6:\"delete\";}s:21:\"/ingredient/edit/:var\";a:2:{i:0;s:21:\"controller\\Ingredient\";i:1;s:4:\"edit\";}s:23:\"/ingredient/update/:var\";a:2:{i:0;s:21:\"controller\\Ingredient\";i:1;s:6:\"update\";}s:7:\"/recipe\";a:2:{i:0;s:17:\"controller\\Recipe\";i:1;s:4:\"page\";}s:14:\"/recipe/create\";a:2:{i:0;s:17:\"controller\\Recipe\";i:1;s:6:\"create\";}s:11:\"/recipe/add\";a:2:{i:0;s:17:\"controller\\Recipe\";i:1;s:3:\"add\";}s:17:\"/recipe/read/:var\";a:2:{i:0;s:17:\"controller\\Recipe\";i:1;s:4:\"read\";}s:19:\"/recipe/delete/:var\";a:2:{i:0;s:17:\"controller\\Recipe\";i:1;s:6:\"delete\";}s:17:\"/recipe/edit/:var\";a:2:{i:0;s:17:\"controller\\Recipe\";i:1;s:4:\"edit\";}s:19:\"/recipe/update/:var\";a:2:{i:0;s:17:\"controller\\Recipe\";i:1;s:6:\"update\";}s:6:\"/login\";a:2:{i:0;s:16:\"controller\\Login\";i:1;s:5:\"login\";}s:5:\"/auth\";a:2:{i:0;s:16:\"controller\\Login\";i:1;s:4:\"auth\";}s:7:\"/logout\";a:2:{i:0;s:16:\"controller\\Login\";i:1;s:6:\"logout\";}}\n','admin');
/*!40000 ALTER TABLE `route` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_route_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_user_id_uindex` (`user_id`),
  KEY `user_route_route_id_fk` (`user_route_id`),
  CONSTRAINT `user_route_route_id_fk` FOREIGN KEY (`user_route_id`) REFERENCES `route` (`route_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Пользователь';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'Luchi','y@gmail.com','$2y$10$W94uFX.vPVX6YdImsccaQu2fhGqwTdSD6KeoBYnW1V5.XaqV7YxjK',2),(3,NULL,NULL,'$2y$10$vxPHyEa4QQvEmuwdTMCOO.I34m9BRdcKN7uJVPImZXDmkU5PcbEA6',2),(4,NULL,NULL,'$2y$10$I.Fd0l8n89Me7Antz3jmAevQKl0xY6v0lPJK2KNpPSVc4dx2H2Q7S',2),(5,NULL,NULL,'$2y$10$pAU/cb9yJKC4.4onkSbzSOuYYq4xOADb6x84kcHPWYWVD0qdUixCi',2),(6,NULL,NULL,'$2y$10$kaEJTHdlefLbzp8YFnD/Me7Wf/kT2QzOHHHpHjwD6llj9aC45Sty6',2),(7,NULL,NULL,'$2y$10$LhorbCEMdoUAWjKSLWLoheJ3t8eRq06pygcIzro77UjDjwKY.1Awm',2),(8,NULL,NULL,'$2y$10$vqUwasc3hrmxoRcD5Q6ef.wnNHWB0CO1DqNd19uFVyP9H.GtWg0cu',2),(9,'Luchi',NULL,'$2y$10$kzCzAuL.pC2Fmch9ADIP.uUk9hceieECBXS52VJioeHnUzk1vBOJi',2),(11,'Luchi','test','$2y$10$Ow8l8Wn/b42/JZ4rqTjZwOkBrL3r12.v6w7MJhFSI4jiCW8GHlyM6',2),(12,'t','test','$2y$10$bR2t3T4gbedulPFE2/qgneIU6SbEocEpmZGBiDV/ZLxFWnHIsNArq',2),(13,'tttt','a@gmail.com','$2y$10$E4JYhcAkhmLET2W9kM43qeIna9Gws8mEUwuGOatZ9sHj.r/l7gDtu',2),(14,'tttt','','$2y$10$qHixPfq597L73h/RyCXj8uZT5L3M/LA7t1hi.sS7C/Aph4WTHsqNO',2),(15,'tttt4','yuriyshkvarc@gmail.com','$2y$10$KGROCEFhq/MUpGfXwC9bBOdNgw8iC81Q15NlRIfMeEm.ejk2ysaM2',2);
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

-- Dump completed on 2019-11-24  9:52:12
