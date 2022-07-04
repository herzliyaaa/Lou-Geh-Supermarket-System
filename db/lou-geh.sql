

CREATE DATABASE IF NOT EXISTS lougehdb;
USE lougehdb;

--
-- Definition of table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `customer_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `customer_firstname` char(50),
  `customer_lastname` char(50),
  `customer_middlename` varchar(20) DEFAULT NULL,
  `customer_address` char(50),
  `customer_contact_number` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`customer_id`,`customer_firstname`,`customer_lastname`,`customer_mi`,`customer_address`,`customer_contact_number`) VALUES 
 (1,'Ceazar','Masula','L','Polomolok, South Cotabato','09396264943');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;




--
-- Definition of table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `barcode` varchar(30) NOT NULL,
  `product_description` varchar(250),
  `quantity` int(11) DEFAULT NULL,
  `cost_per_unit` float DEFAULT NULL,
  PRIMARY KEY (`barcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`barcode`,`product_description`,`quantity`,`cost_per_unit`) VALUES 
 ('123123','Apples (kl)',35,100),
 ('15236','Mega Sardines (Cans)',150,15),
 ('2131','Mangoes (kl)',30,40);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;




--
-- Definition of table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `supplier_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_name` text,
  `company_contact_number` varchar(20) DEFAULT NULL,
  `company_address` text,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` (`supplier_id`,`company_name`,`company_contact_number`,`company_address`) VALUES 
 (1,'Biotech Farms','09364596159','Veranza, General Santos City');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;