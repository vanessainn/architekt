-- MySQL dump 10.13  Distrib 8.0.34, for macos13 (arm64)
--
-- Host: 127.0.0.1    Database: wda_architekt
-- ------------------------------------------------------
-- Server version	5.7.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `arch_projekte`
--

DROP TABLE IF EXISTS `arch_projekte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `arch_projekte` (
  `arch_projekte_id` int(11) NOT NULL AUTO_INCREMENT,
  `arch_projekte_name` varchar(80) DEFAULT NULL,
  `arch_projekte_subtitle` varchar(45) DEFAULT NULL,
  `arch_projekte_beschreibung` text,
  `arch_projekte_nutzflaeche` varchar(45) DEFAULT NULL,
  `arch_projekte_planungsbeginn` varchar(45) DEFAULT NULL,
  `arch_projekte_fertigstellung` varchar(45) DEFAULT NULL,
  `arch_projekte_bauzeit` varchar(45) DEFAULT NULL,
  `arch_projekte_foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`arch_projekte_id`),
  UNIQUE KEY `arch_id_UNIQUE` (`arch_projekte_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arch_projekte`
--

LOCK TABLES `arch_projekte` WRITE;
/*!40000 ALTER TABLE `arch_projekte` DISABLE KEYS */;
INSERT INTO `arch_projekte` VALUES (16,'Wohnbau Wiesenweg','Altenmarkt im Pongau','Das Ensemble bestehend aus 4 Baukörpern, beherbergt 39 Wohneinheiten, die als Eigentum, Miet-Kauf oder in Miete bezogen werden. Die Wohnanlage bezieht sich in ihrer Typologie auf die ortsprägenden Bauten mit Satteldach und stärkt mit einer sozialen Mitte und der gewählten Materialität die Identität der Anlage.\r\n\r\n','2.443m²','2019','2024','20 Monatee','1714811833_architekt-mustermann-wohnbau-wiesenweg.jpg'),(17,'Wohnbau Kontriner','Bischofshofen','Ein Wohnbau inmitten einer Gartensiedlung in der Stadt Bischofshofen organisiert drei Wohnungen in Form eines Solitärs. Die umlaufenden, weit auskragenden und teils gedeckten Freibereiche bilden dabei die Schnittstelle zu den umlaufenden Gärten.\r\n\r\n','ca. 632m²','2022','2024','12 Monate','1714811891_architekt-mustermann-wohnbau-kontriner.jpg'),(18,'Suitentürme Hotel Moar Gut','Großarl','Zentrales und identitätsstiftendes Element des Um- und Neubaus des Familien Naturresorts Moar Gut bilden die konzipierten 5-geschossigen Suitentürme. Durch die Anordnung von zwei solitären Baukörpern und deren Stellung zueinander, entsteht ein spannungsvolles Gefüge, welches sich selbstbewusst in den umgebenden Naturraum einfügt.\r\n\r\nDas Projekt wurde gemeinsam mit der Landschaftsarchitektin Karin Walch umgesetzt.\r\n\r\n','ca. 2.000 m²','2022','2024','9 Monate','1714812103_architekt-mustermann-suitentürme-hotel-moar-gut.jpg'),(20,'Doppelhaus Buchsteiner','Eben/Pg.','Das Projekt behandelt das Thema einer generationsübergreifenden Hausgemeinschaft, welche Synergien und gemeinsame Potentiale nutzt und den jeweiligen Generationen – Alt wie Jung – ein hohes Maß an Privatsphäre und funktionaler Individualität ermöglicht.\r\n\r\nDie Zuteilung der Funktionen auf die Geschosse erfolgt unter dem Aspekt, der jungen Familie eine unmittelbare und intensive Nutzung des Gartens zu ermöglichen, und den Eltern die Privat- und Geborgenheit eines Dachgeschosses mit großer Terrasse zu gewähren.',' 282 m²','2022','2024','10 Monate','1714812310_architekt-mustermann-doppelhaus-buchsteiner.jpg'),(21,'EFH B','St. Veit im Pongau','Das Einfamilienhaus liegt an der Schnittstelle zum Naturraum und verortet sich in seiner Form und Materialität selbstbewusst in die Umgebung. Der klassischen Typologie folgend, sorgt das Haupthaus und Nebengebäude für eine unverwechselbare Adressbildung.\r\nDie vorherrschenden Materialien Beton und Holz sorgen für eine entsprechende Atmosphäre der Raumsequenzen.','ca. 240m²','2022','2023','10 Monate','1714812824_architekt-mustermann-efh-b.jpg'),(22,'Doppelhaus Trausner','Schärding','Zwei schlichte eingeschossige Baukörper – das kleinere für die Eltern, das größere für die junge, wachsende Familie – reagieren sensibel auf Topografie und Vegetation vor Ort und bilden mit dem bestehenden Wirtschaftsgebäude ein hofartiges Ensemble.\r\nZufahrt und Nebengebäude bleiben dabei unangetastet. Die Schnittstelle von Öffentlichen und Privaten wird hierbei an die Grundstücksgrenze (Vorfahrt) und nicht am jeweiligen Haus erfahren. Das sogenannte „Verandahaus“ dient als inhaltliche Grundlage der beiden als eingeschossige Gartenpavillons konzipierten Neubauten mit großzügigen, vorgelagerten Veranden.','280 m²','2022','2023','9 Monate','1714812979_architekt-mustermann-doppelhaus-trausner.jpg'),(23,'Leben in der Scheune',' Thal bei Graz','Das Konzept sieht die Nachnutzung eines ehemaligen Wirtschaftsgebäudes als neues Haus für eine junge Familie vor. Die bestehende Scheune wurde in ihrem landwirtschaftlichen Ausdruck kaum verändert und im Innenraum an die neue Nutzung angepasst.\r\nDabei wurden, entsprechend der Tradition von landwirtschaftlichen Bauten der Umgebung, vorwiegend natürliche Materialien, insbesondere Holz eingesetzt. Präzise gesetzte Öffnungen geben den Blick in die hügelige Landschaft frei. Ein intelligentes Raumkonzept schafft für die Familie großzügige Wohnräume, die auf zwei Ebenen organisiert werden.','231 m²','2021','2023','12 Monate','1714813103_architekt-mustermann-leben-in-der-scheune.jpg'),(25,'EFH A','Salzburg','Dem Einfamilienhaus in Salzburg liegt ein umfangreiches Raumprogramm zugrunde welches strukturell im Gegensatz zur kleinteiligen Körnung der Umgebung steht.\r\nDurch eine partielle Zweigeschossigkeit wird der Maßstab formal gebrochen und der Baukörper fügt sich in das städtebauliche Umfeld ein.','580 m²','2022','2023','10 Monate','1714813320_architekt-mustermann-efh-a.jpg'),(26,'EFH G-H','Judendorf – Strassengel','Das Wohnhaus strukturiert sich in einem kompakten Hauptkörper und einem vorgelagerten Nebenbaukörper. Die daraus generierten Raumsequenzen (Zugang, Atrium, gedeckter Vorsitz) erzeugen differenzierte Qualitäten über ein übliches Raumprogramm hinaus.\r\n\r\n','172 m²','2021','2023','10 Monate','1714813388_architekt-mustermann-efh-h-g.jpg'),(27,'EFH Groth','Lofer','Ein dem Hang verlaufender Raumfluss und in 3 Ebenen offen organisierter Grundriss, bildet die Basis dieses Wohnhauses. Gedeckte Loggien erweitern sowohl hangauf,- bzw. hangabwärts die Wohnebenen und bilden die Schnittstellen zur Umgebung.\r\nDer schwarz gefärbte Holzbau lässt das Wohnhaus selbstbewusst in Erscheinung treten und bildet den Kontrast zum heterogenen bebauten Umfeld.','106 m²','2023','2024','8 Monate','1714813630_architekt-mustermann-efh-groth.jpg');
/*!40000 ALTER TABLE `arch_projekte` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-04 14:41:42
