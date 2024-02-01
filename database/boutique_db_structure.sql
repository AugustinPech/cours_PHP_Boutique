-- Adminer 4.8.1 MySQL 10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;

CREATE DATABASE `boutique` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci */;
USE `boutique`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL DEFAULT 'password',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderDate` date NOT NULL,
  `deliveryDate` date DEFAULT NULL,
  `customers_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`customers_id`),
  KEY `fk_Order_Client1_idx` (`customers_id`),
  CONSTRAINT `fk_Order_Client1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


CREATE TABLE `order_has_products` (
  `order_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`,`products_id`),
  KEY `fk_Order_has_products_products1_idx` (`products_id`),
  KEY `fk_Order_has_products_Order1_idx` (`order_id`),
  CONSTRAINT `fk_Order_has_products_Order1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Order_has_products_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` text DEFAULT NULL,
  `weight` decimal(6,2) NOT NULL,
  `taxePrice` decimal(6,2) NOT NULL,
  `priceHT` decimal(6,2) NOT NULL,
  `priceTTC` decimal(6,2) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `categories_id` int(11) NOT NULL,
  `taxes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`categories_id`,`taxes_id`),
  UNIQUE KEY `title_UNIQUE` (`title`),
  KEY `fk_products_categories_idx` (`categories_id`),
  KEY `fk_products_Taxes1_idx` (`taxes_id`),
  CONSTRAINT `fk_products_Taxes1` FOREIGN KEY (`taxes_id`) REFERENCES `taxes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_categories` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


CREATE TABLE `taxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taxeRate` decimal(5,2) DEFAULT 5.00,
  PRIMARY KEY (`id`),
  UNIQUE KEY `taxeRate_UNIQUE` (`taxeRate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


-- 2024-02-01 10:32:37