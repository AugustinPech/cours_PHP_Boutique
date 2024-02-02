-- Adminer 4.8.1 MySQL 10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
                              `id` int(11) NOT NULL AUTO_INCREMENT,
                              `name` varchar(90) NOT NULL,
                              PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
                             `id` int(11) NOT NULL AUTO_INCREMENT,
                             `email` varchar(255) NOT NULL,
                             `pwd` varchar(255) NOT NULL,
                             `name` varchar(45) NOT NULL,
                             `firstName` varchar(45) NOT NULL,
                             PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
                          `id` int(11) NOT NULL AUTO_INCREMENT,
                          `number` varchar(90) NOT NULL,
                          `date_order` datetime NOT NULL DEFAULT current_timestamp(),
                          `date_delivery` datetime NOT NULL,
                          `customers_id` int(11) NOT NULL,
                          PRIMARY KEY (`id`),
                          UNIQUE KEY `number_UNIQUE` (`number`),
                          KEY `fk_orders_customers1_idx` (`customers_id`),
                          CONSTRAINT `fk_orders_customers1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `title` varchar(55) DEFAULT NULL,
                            `description` varchar(1000) DEFAULT NULL,
                            `stock` int(10) unsigned DEFAULT NULL,
                            `path_img` varchar(500) DEFAULT NULL,
                            `price_ht` decimal(10,2) DEFAULT NULL,
                            `price_ttc` decimal(10,2) DEFAULT NULL,
                            `price_tva` decimal(10,2) DEFAULT NULL,
                            `weight` decimal(10,2) unsigned DEFAULT NULL,
                            `categories_id` int(11) NOT NULL,
                            `tva_id` int(11) NOT NULL,
                            PRIMARY KEY (`id`,`categories_id`,`tva_id`),
                            KEY `fk_produits_categories1_idx` (`categories_id`),
                            KEY `fk_produits_tva1_idx` (`tva_id`),
                            CONSTRAINT `fk_produits_categories1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
                            CONSTRAINT `fk_produits_tva1` FOREIGN KEY (`tva_id`) REFERENCES `tva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `products_orders`;
CREATE TABLE `products_orders` (
                                   `orders_id` int(11) NOT NULL,
                                   `products_id` int(11) NOT NULL,
                                   `quantity` int(10) unsigned NOT NULL,
                                   PRIMARY KEY (`orders_id`,`products_id`),
                                   KEY `fk_commandes_has_produits_produits1_idx` (`products_id`),
                                   KEY `fk_commandes_has_produits_commandes_idx` (`orders_id`),
                                   CONSTRAINT `fk_commandes_has_produits_commandes` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
                                   CONSTRAINT `fk_commandes_has_produits_produits1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `tva`;
CREATE TABLE `tva` (
                       `id` int(11) NOT NULL AUTO_INCREMENT,
                       `rate_tva` decimal(4,2) unsigned DEFAULT NULL,
                       PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-02-01 14:55:50