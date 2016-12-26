-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: insead
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

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
-- Table structure for table `cab_driver`
--

DROP TABLE IF EXISTS `cab_driver`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cab_driver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `credit_card_accepted` tinyint(1) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cab_driver`
--

LOCK TABLES `cab_driver` WRITE;
/*!40000 ALTER TABLE `cab_driver` DISABLE KEYS */;
INSERT INTO `cab_driver` VALUES (26,'Artiom','+33 6 71 41 28 07','+33 6 51 24 11 95','patriot.vtc@gmail.com',1,'Russian - English - French'),(27,'Gustavo','+33 7 72 81 28 07',NULL,'gustavo.hotmail@gmail.com',0,NULL),(28,'David','+33 6 71 41 28 07','+33 6 51 42 28 95','david.vtc@gmail.com',1,NULL),(29,'Palani','+33 6 09 47 31 38',NULL,'palani022@gmail.com',0,'English - French'),(30,'Rashid','+33 6 28 33 49 29',NULL,'rashid.tahar@gmail.com',0,'English - French - Arabic - Italian - Spanish');
/*!40000 ALTER TABLE `cab_driver` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `departure` int(11) DEFAULT NULL,
  `arrival` int(11) DEFAULT NULL,
  `departure_date` date NOT NULL,
  `departure_time` time NOT NULL,
  `seats_available` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_169E6FB945E9C671` (`departure`),
  KEY `IDX_169E6FB95BE55CB4` (`arrival`),
  CONSTRAINT `FK_169E6FB945E9C671` FOREIGN KEY (`departure`) REFERENCES `places` (`id`),
  CONSTRAINT `FK_169E6FB95BE55CB4` FOREIGN KEY (`arrival`) REFERENCES `places` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (5,16,17,'2016-12-12','00:00:00',2),(6,16,17,'2016-12-13','09:00:00',2),(7,17,18,'2016-12-28','02:00:00',1);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (5,'jeremy.ussel@insead.edu','jeremy.ussel@insead.edu','jeremy.ussel@insead.edu','jeremy.ussel@insead.edu',1,NULL,'$2y$13$E8JVMHnawWY9Dsf6BRvafOAw2Wz9V/kD3Oa6GdTmc/hXiSnAuAQAW','2016-12-13 12:25:58',NULL,NULL,'a:0:{}','ussel','jeremy','001122334455');
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `owner_type`
--

DROP TABLE IF EXISTS `owner_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `owner_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `owner_type`
--

LOCK TABLES `owner_type` WRITE;
/*!40000 ALTER TABLE `owner_type` DISABLE KEYS */;
INSERT INTO `owner_type` VALUES (17,'Individual'),(18,'Agency');
/*!40000 ALTER TABLE `owner_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places`
--

DROP TABLE IF EXISTS `places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places`
--

LOCK TABLES `places` WRITE;
/*!40000 ALTER TABLE `places` DISABLE KEYS */;
INSERT INTO `places` VALUES (16,'Fontainebleau'),(17,'Charles De Gaulle'),(18,'Orly');
/*!40000 ALTER TABLE `places` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `price_range`
--

DROP TABLE IF EXISTS `price_range`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `price_range` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `price_range`
--

LOCK TABLES `price_range` WRITE;
/*!40000 ALTER TABLE `price_range` DISABLE KEYS */;
INSERT INTO `price_range` VALUES (35,'0-12'),(36,'12-25'),(37,'25+');
/*!40000 ALTER TABLE `price_range` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rent`
--

DROP TABLE IF EXISTS `rent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `house_feedback` longtext COLLATE utf8_unicode_ci NOT NULL,
  `owner_feedback` longtext COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `extra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english` tinyint(1) NOT NULL,
  `monthly_rent_price` int(11) NOT NULL,
  `ownerTypeId` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2784DCCE6F9481D` (`ownerTypeId`),
  CONSTRAINT `FK_2784DCCE6F9481D` FOREIGN KEY (`ownerTypeId`) REFERENCES `owner_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rent`
--

LOCK TABLES `rent` WRITE;
/*!40000 ALTER TABLE `rent` DISABLE KEYS */;
INSERT INTO `rent` VALUES (46,'50m²-950€','221 Rue Saint Merry ,77300 Fontainebleau','LegallicB@corning.com','Delighted. Would fully recommend','Excellent landlord. Extremely helpful (lives below the apartment)',50,'100 per quarter',1,950,17,'img1.jpg'),(47,'40m²-970€','54 Aristide Briand ,77300 Fontainebleau','christ1968@hotmail.com','Great structure and fully functional. A bit cold during winter since there are no double glass windows. Also, rental costs do not include cleaning, which has to be done by you or paid separately. Perfect for a couple.','Owner and agency speaks fluent english and both are very kind.',40,'180 one-off to agency',1,970,18,'img2.jpg'),(48,'55m²-860€','25 Rue de Fleury, 1er etage, porte D ,77300 Fontainebleau','m.kolodziejek@laposte.net','Friendly landlady, spacious 2-storie flat. Highly recommend.','Helpful, friendly, nice.',55,'no',1,860,17,'img3.jpg'),(49,'60m²-900€','3 Place d\'Armes, 77300 Fontainebleau','feelgood77@orange.fr','Excellent','Excellent',60,'no',1,900,17,'img4.jpg'),(50,'50m²-1000€','11 Passage Ronsin ,77300 Fontainebleau','leclosdutertre@wanadoo.fr','The apartment is excellent, one bedroom, living room and kitchen. It is on the third floor with elevator. Great location in city center next to the farmer market. Owner is extremely helpful and speaks English very well.','Owner is extremely helpful and speaks English very well.',50,'no',1,1000,17,'img5.jpg'),(51,'55m²-1070€','87 rue grande ,77300 Fontainebleau','Gerard@gamboo.com','Great apartment for couple. Very central location. All included. Charming balcony, fireplace and furniture. Downside: Entrance of building is dark and dirty.','Excellent. Flexible and supportive.',55,'Energy if is higher than 70 euros',1,1070,17,'img6.jpg'),(52,'38m²-880€','36-38 Rue Grande, Appt. 2 ,77300 Fontainebleau','magali.collet@iadfrance.fr','Great appartment downtown Fonty','Very friendly',38,'No - incl water, electricity, internet',0,880,18,'img7.jpg'),(53,'82m²-1890€','28 Rue d\'Avon ,77300 Fontainebleau','kamelrighi@me.com','Spacious apartment(82 sq.m.), well equipped and decorated. 2 large bedroom with double bed, 1 bathroom, 2 open kitchen in large living room. 2 parking spots (one on the ground and one below ground). Close to a park, nice neighborhood','He is very well accommodating and easy to communicate with. He helped me immensely to settle down when I first arrived.',82,'Electronics, Internet, House insurance',1,1890,17,'img8.jpg'),(54,'58m²-950€','38 Rue Aristide Briande ,77300 Fontainebleau','evelynematha@yahoo.fr','Nice cozy apartment, centre of the town and 25 mins walk to INSEAD. 2 mins to bus stop','Very nice landlady. Has been dealing with INSEAD students for years and is very flexible and helpful.',58,'no',1,950,17,'img9.jpg');
/*!40000 ALTER TABLE `rent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL,
  `menu_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `special_offer` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `serviceProviderId` int(11) DEFAULT NULL,
  `priceRangeId` int(11) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E19D9AD25E237E06` (`name`),
  KEY `IDX_E19D9AD26415AC21` (`serviceProviderId`),
  KEY `IDX_E19D9AD2FBAFEA9C` (`priceRangeId`),
  CONSTRAINT `FK_E19D9AD26415AC21` FOREIGN KEY (`serviceProviderId`) REFERENCES `service_provider` (`id`),
  CONSTRAINT `FK_E19D9AD2FBAFEA9C` FOREIGN KEY (`priceRangeId`) REFERENCES `price_range` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (113,'Bistrot des Amis','1 rue Montebello 77300 Fontainebleau','0164220033',NULL,'Southern French cuisine with Provencal flavours',76,NULL,10,0,'2016-04-05 16:04:03',13,37,'french'),(114,'Le Bacchus','4 rue Richelieu 77300 Fontainebleau','0164222646',NULL,'Home made cuisine\n Closed Mondays, Wednesday lunchtime & Sunday evenings',43,NULL,NULL,0,'2016-09-05 17:04:03',13,37,'traditional'),(115,'Bistrot 9','9 rue Montebello 77300 Fontainebleau','0164228784',NULL,'Traditional French brasserie',24,NULL,NULL,0,'2016-11-05 17:04:03',13,37,'traditional'),(116,'Le Grand Café','33 place Napoléon Bonaparte 77300 Fontainebleau','0164222032',NULL,'French cuisine, nice terrace facing the old merry-go-round',12,NULL,10,0,'2016-11-08 17:04:03',13,36,'french'),(117,'La Méditerranée','12 rue des Pins 77300 Fontainebleau','0164325875',NULL,'Traditional mediterranean cuisine.\n Lebanese & Turkish specialties.',53,NULL,NULL,0,'2016-10-09 17:04:03',13,36,'turkish'),(118,'Brussel\'s Bar','47 rue Grande 77300 Fontainebleau','0164222127',NULL,'Brasserie, Belgian cuisine',67,NULL,NULL,0,'2016-10-11 17:04:03',13,36,'belgian'),(119,'Ko Sun','18 rue de la Corne 77300 Fontainebleau','0164224505',NULL,'Chinese food',86,NULL,15,0,'2016-10-11 17:04:03',13,37,'chinese'),(120,'Raj Mahal','7 rue des 3 Maillets 77300 Fontainebleau','0164221222',NULL,'Indian food',213,NULL,10,0,'2016-10-11 17:04:03',13,36,'indian'),(121,'Il Primo Bacio','3 rue Montebello 77300 Fontainebleau','0160727436',NULL,'Italian specialties. Large groups welcome.',14,NULL,NULL,0,'2016-10-11 17:04:03',13,36,'italian'),(122,'Pizza Mimi','17 rue des 3 Maillets 77300 Fontainebleau','0164227077',NULL,'Pizzeria.',195,'menu_pizza.jpg',10,1,'2016-10-11 17:04:00',13,36,'italian'),(123,'Le Marquis de Pombal','4 rue du Coq Gris 77300 Fontainebleau','0160700714',NULL,'Home made Portuguese cuisine.\n Take-away and home delivery possible.\n Closed Mondays',33,NULL,NULL,0,'2016-10-11 17:04:03',13,36,'portuguese');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_provider`
--

DROP TABLE IF EXISTS `service_provider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_provider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6BB228A15E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_provider`
--

LOCK TABLES `service_provider` WRITE;
/*!40000 ALTER TABLE `service_provider` DISABLE KEYS */;
INSERT INTO `service_provider` VALUES (13,'Restaurant');
/*!40000 ALTER TABLE `service_provider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_trip`
--

DROP TABLE IF EXISTS `users_trip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_trip` (
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`,`user_id`),
  KEY `IDX_B9DFBB35591CC992` (`course_id`),
  KEY `IDX_B9DFBB35A76ED395` (`user_id`),
  CONSTRAINT `FK_B9DFBB35591CC992` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B9DFBB35A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_trip`
--

LOCK TABLES `users_trip` WRITE;
/*!40000 ALTER TABLE `users_trip` DISABLE KEYS */;
INSERT INTO `users_trip` VALUES (5,5),(6,5),(7,5);
/*!40000 ALTER TABLE `users_trip` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-26 12:15:33
