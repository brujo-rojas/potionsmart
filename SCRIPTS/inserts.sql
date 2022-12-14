-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: potionsDB
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Elly Kedward','2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(2,'Alice Kyteler','2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(3,'Madame Blavatsky','2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(4,'Joan Wytte','2022-07-31 23:07:26','2022-07-31 23:07:26',NULL);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `ingredient_potion`
--

LOCK TABLES `ingredient_potion` WRITE;
/*!40000 ALTER TABLE `ingredient_potion` DISABLE KEYS */;
INSERT INTO `ingredient_potion` VALUES (1,1,1,0.20,NULL,NULL,NULL),(2,1,2,0.10,NULL,NULL,NULL),(3,1,3,0.40,NULL,NULL,NULL),(4,1,4,0.30,NULL,NULL,NULL),(5,2,5,0.30,NULL,NULL,NULL),(6,2,6,0.30,NULL,NULL,NULL),(7,2,7,0.10,NULL,NULL,NULL),(8,2,8,0.30,NULL,NULL,NULL),(9,3,9,0.20,NULL,NULL,NULL),(10,3,7,0.30,NULL,NULL,NULL),(11,3,4,0.20,NULL,NULL,NULL),(12,3,2,0.10,NULL,NULL,NULL),(13,3,5,0.10,NULL,NULL,NULL),(14,3,10,0.10,NULL,NULL,NULL);
/*!40000 ALTER TABLE `ingredient_potion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `ingredients`
--

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
INSERT INTO `ingredients` VALUES (1,'Petalos',2000.00,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(2,'Sal de mar',3000.00,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(3,'Vino',6000.00,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(4,'Polvo magico',30000.00,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(5,'Cenizas',2500.00,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(6,'Aloe Vera',1500.00,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(7,'Lagrima de Gato',9000.00,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(8,'Jugo magico',27000.00,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(9,'Sanguijuelas',13000.00,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(10,'Polvo de cuerno de bicornio',65000.00,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL);
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_07_31_012443_create_potions_table',1),(6,'2022_07_31_012635_create_ingredients_table',1),(7,'2022_07_31_013931_create_ingredient_potion_table',1),(8,'2022_07_31_174457_create_clients_table',1),(9,'2022_07_31_184351_create_sales_table',1),(10,'2022_07_31_194429_create_potion_sale_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (1,'App\\Models\\User',1,'auth_token','e52fff64821b30baddf243d1e575c6c8eca38f8babd472660259555e52f2bc69','[\"*\"]','2022-07-31 23:38:01','2022-07-31 23:08:49','2022-07-31 23:38:01'),(2,'App\\Models\\User',1,'auth_token','87fa3fa7a70fed22d2668974b1c6c45c2556c20ec17408adcfec97fe6d346099','[\"*\"]',NULL,'2022-07-31 23:18:40','2022-07-31 23:18:40'),(3,'App\\Models\\User',2,'auth_token','9a2b04fa624b297009c31412ab1194c48529e598ad54c039960289f104aacc64','[\"*\"]',NULL,'2022-07-31 23:19:43','2022-07-31 23:19:43'),(4,'App\\Models\\User',1,'auth_token','7b5e3ab576dfc7e5e52549cce6134988cf2f340c3199a2924e7d9e8b51ebcb8f','[\"*\"]',NULL,'2022-07-31 23:33:57','2022-07-31 23:33:57');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `potion_sale`
--

LOCK TABLES `potion_sale` WRITE;
/*!40000 ALTER TABLE `potion_sale` DISABLE KEYS */;
INSERT INTO `potion_sale` VALUES (1,6,1,1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(2,5,2,2,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(3,3,1,3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(4,6,3,4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(5,22,1,5,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(6,21,1,6,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(7,5,1,7,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(8,12,1,8,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(9,5,2,9,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(10,13,2,10,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(11,54,2,11,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(12,95,1,12,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(13,21,2,13,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(14,27,3,14,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(15,22,1,15,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(16,9,1,16,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(17,12,2,17,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(18,5,1,18,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(19,18,1,19,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(20,30,1,20,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(21,1,2,21,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(22,13,2,22,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(23,7,3,23,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(24,22,1,24,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(25,30,1,25,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(26,9,2,26,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(27,2,2,27,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(28,7,2,28,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(29,1,3,29,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(30,35,2,30,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(31,33,2,31,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(32,22,1,32,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(33,45,1,33,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(34,19,3,34,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(35,17,1,35,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(36,12,2,36,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(37,2,2,37,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(38,14,3,38,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(39,18,2,39,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(40,33,1,40,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(41,11,3,41,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(42,8,1,42,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(43,42,1,43,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(44,13,3,44,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(45,33,3,45,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(46,13,2,46,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(47,15,1,47,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(48,17,1,48,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(49,23,3,49,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(50,25,1,50,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(51,22,3,51,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(52,1,3,52,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(53,3,3,53,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(54,15,3,54,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(55,3,1,55,'2022-07-31 23:14:45','2022-07-31 23:14:45',NULL),(56,3,1,56,'2022-07-31 23:33:52','2022-07-31 23:33:52',NULL),(57,3,1,57,'2022-07-31 23:33:53','2022-07-31 23:33:53',NULL),(58,3,1,58,'2022-07-31 23:38:02','2022-07-31 23:38:02',NULL);
/*!40000 ALTER TABLE `potion_sale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `potions`
--

LOCK TABLES `potions` WRITE;
/*!40000 ALTER TABLE `potions` DISABLE KEYS */;
INSERT INTO `potions` VALUES (1,'Poci??n de amor','2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(2,'Poci??n alisadora','2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(3,'Poci??n multijugos','2022-07-31 23:07:26','2022-07-31 23:07:26',NULL);
/*!40000 ALTER TABLE `potions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (1,'2021-10-11',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(2,'2021-10-12',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(3,'2021-10-06',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(4,'2021-10-01',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(5,'2021-09-13',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(6,'2021-10-01',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(7,'2021-09-22',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(8,'2021-09-15',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(9,'2021-09-15',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(10,'2021-09-15',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(11,'2021-10-18',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(12,'2021-10-18',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(13,'2021-09-23',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(14,'2021-10-17',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(15,'2021-10-10',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(16,'2021-10-11',1,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(17,'2021-09-15',2,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(18,'2021-09-15',2,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(19,'2021-10-12',2,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(20,'2021-10-14',2,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(21,'2021-10-11',2,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(22,'2021-10-03',2,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(23,'2021-10-18',2,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(24,'2021-10-12',2,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(25,'2021-10-06',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(26,'2021-10-14',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(27,'2021-09-13',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(28,'2021-09-16',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(29,'2021-09-22',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(30,'2021-10-03',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(31,'2021-09-19',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(32,'2021-09-27',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(33,'2021-09-27',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(34,'2021-09-23',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(35,'2021-10-09',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(36,'2021-10-09',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(37,'2021-10-18',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(38,'2021-10-10',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(39,'2021-10-20',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(40,'2021-10-20',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(41,'2021-10-12',3,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(42,'2021-09-16',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(43,'2021-09-15',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(44,'2021-09-19',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(45,'2021-09-22',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(46,'2021-09-22',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(47,'2021-09-23',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(48,'2021-09-23',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(49,'2021-10-06',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(50,'2021-10-06',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(51,'2021-10-17',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(52,'2021-10-19',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(53,'2021-10-19',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(54,'2021-10-11',4,'2022-07-31 23:07:26','2022-07-31 23:07:26',NULL),(55,'2022-07-31',1,'2022-07-31 23:14:45','2022-07-31 23:14:45',NULL),(56,'2022-07-31',1,'2022-07-31 23:33:52','2022-07-31 23:33:52',NULL),(57,'2022-07-31',1,'2022-07-31 23:33:53','2022-07-31 23:33:53',NULL),(58,'2022-07-31',1,'2022-07-31 23:38:02','2022-07-31 23:38:02',NULL);
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Test User','test@example.com','2022-07-31 23:07:26','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','vVyvKGQgPv','2022-07-31 23:07:26','2022-07-31 23:07:26'),(2,'test 2','test2@example.com',NULL,'$2y$10$r7Yu.Moy/cmIoj5317qJRuZNjpOqMj7gnHuIeOmEHiIkZaBLTNv4a',NULL,'2022-07-31 23:19:43','2022-07-31 23:19:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-31 23:46:45
