-- Adminer 4.8.1 MySQL 10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

TRUNCATE `Categories`;
INSERT INTO `Categories` (`id`, `name`) VALUES
                                            (1,	'Luxury Forks'),
                                            (2,	'Elegant Flatware'),
                                            (3,	'Special Occasion Cutlery'),
                                            (4,	'Gourmet Dining Sets'),
                                            (5,	'Artisanal Silverware');

TRUNCATE `Client`;
INSERT INTO `Client` (`id`, `name`, `surname`, `email`, `password`) VALUES
                                                                        (1,	'Bon Appétit',	'Rousseau',	'bonappetit@example.com',	'delicious123'),
                                                                        (2,	'Flavor Explorer',	'Lefevre',	'flavor@example.com',	'tastetheflavor'),
                                                                        (3,	'Culinary Enthusiast',	'Dufresne',	'culinary@example.com',	'foodlover123'),
                                                                        (4,	'Gastronomy Geek',	'Lemoine',	'gastronomy@example.com',	'geekychef'),
                                                                        (5,	'Bon Appétit',	'Rousseau',	'bonappetit@example.com',	'delicious123'),
                                                                        (6,	'Flavor Explorer',	'Lefevre',	'flavor@example.com',	'tastetheflavor'),
                                                                        (7,	'Culinary Enthusiast',	'Dufresne',	'culinary@example.com',	'foodlover123'),
                                                                        (8,	'Gastronomy Geek',	'Lemoine',	'gastronomy@example.com',	'geekychef'),
                                                                        (9,	'Epicurean Delight',	'Dubois',	'epicurean@example.com',	'delightfulmeal'),
                                                                        (10,	'Savory Sensation',	'Girard',	'savorysensation@example.com',	'flavorful123'),
                                                                        (11,	'Taste Maestro',	'Bertrand',	'tastemaestro@example.com',	'masterflavor'),
                                                                        (12,	'Foodie Fanatic',	'Moreau',	'foodiefanatic@example.com',	'gourmetlover'),
                                                                        (13,	'Palate Explorer',	'Caron',	'palateexplorer@example.com',	'exquisiteflavors'),
                                                                        (14,	'Dining Connoisseur',	'Roy',	'diningconnoisseur@example.com',	'culinaryart');

TRUNCATE `Order`;
INSERT INTO `Order` (`id`, `orderDate`, `deliveryDate`, `Client_id`) VALUES
                                                                         (1,	'2024-02-01',	'2024-02-10',	1),
                                                                         (2,	'2024-02-02',	'2024-02-12',	2),
                                                                         (3,	'2024-02-03',	'2024-02-15',	3),
                                                                         (4,	'2024-02-05',	'2024-02-18',	4),
                                                                         (5,	'2024-02-10',	'2024-02-20',	1),
                                                                         (6,	'2024-02-12',	'2024-02-22',	2),
                                                                         (7,	'2024-02-15',	'2024-02-25',	3),
                                                                         (8,	'2024-02-18',	'2024-02-28',	4),
                                                                         (9,	'2024-02-20',	'2024-03-01',	5),
                                                                         (10,	'2024-02-22',	'2024-03-05',	6),
                                                                         (11,	'2024-02-25',	'2024-03-10',	7),
                                                                         (12,	'2024-02-28',	'2024-03-15',	8),
                                                                         (13,	'2024-03-01',	'2024-03-20',	9),
                                                                         (14,	'2024-03-05',	'2024-03-25',	10);

TRUNCATE `Products`;
INSERT INTO `Products` (`id`, `title`, `description`, `priceWT`, `weight`, `TVA`, `stock`, `Categories_id`, `priceTTC`) VALUES
                                                                                                                 (125,	'Gourmet Dining Set',	'An elegant dining set with luxury forks',	89.99,	1.00,	18.00,	50,	1, 107.99),
                                                                                                                 (126,	'Silver Spoon and Fork Set',	'A set of silver-plated fork',	129.99,	1.50,	26.00,	30,	2, 155.99),
                                                                                                                 (127,	'Golden Touch Fork Collection',	'A collection of forks with a golden touch',	149.99,	1.20,	30.00,	40,	3, 179.99),
                                                                                                                 (128,	'Chic Ebony Forks',	'Ebony-handled forks',	99.99,	1.00,	20,	60,	1, 119.99),
                                                                                                                 (129,	'Classic Stainless Steel Forks',	'High-quality stainless steel',	49.99,	0.80,  10,	80,	2, 59.99),
                                                                                                                 (130,	'Artisanal Silver Fork',	'Handcrafted silver fork',	179.99,	1.20,	36,	20,	5, 215.99),
                                                                                                                 (131,	'Modern Minimalist Fork Set',	'Sleek and modern fork set',	69.99,	0.90,	14,	70,	2, 83.99),
                                                                                                                 (132,	'Vintage Brass Forks',	'Antique-style brass forks',	159.99,	1.00,  32,	25,	3, 191.99),
                                                                                                                 (133,	'Culinary Masterpiece Set',	'A set of forks',	199.99,	1.50,	40,	15,	4, 239.99),
                                                                                                                 (134,	'Rustic Wooden Handle Forks',	'Forks with rustic wooden handles',	79.99,	1.00,  16,	55,	2, 95.99),
                                                                                                                 (135,	'Luxury Gold-Plated Forks',	'Gold-plated forks for a luxurious and elegant',	219.99,	1.20,  44,	10,	1, 263.99),
                                                                                                                 (136,	'Dainty Pearl Handled Forks',	'Forks with delicate pearl',	129.99,	1.00, 26 ,	35,	5, 155.99),
                                                                                                                 (137,	'Whimsical Dessert Fork Set',	'A set of playful and whimsical dessert forks',	59.99,	0.70,	12,	75,	4, 71.99),
                                                                                                                 (138,	'Gastronome Choice Forks',	'Forks designed for the discerning gastronome',	189.99,	1.30,  38,	30,	3, 227.99),
                                                                                                                 (139,	'Modern Art Sculptural Forks',	'Forks with sculptural designs',	149.99,	1.00, 30 ,	45,	5, 179.99);

TRUNCATE `Products_has_Order`;
INSERT INTO `Products_has_Order` (`Produits_id`, `Order_id`, `quantity`) VALUES
                                                                             (125,	1,	2),
                                                                             (126,	2,	1),
                                                                             (127,	3,	3),
                                                                             (128,	4,	1),
                                                                             (129,	5,	2),
                                                                             (130,	6,	1),
                                                                             (131,	7,	3),
                                                                             (132,	8,	1),
                                                                             (133,	9,	2),
                                                                             (134,	10,	1),
                                                                             (135,	11,	1),
                                                                             (136,	12,	2),
                                                                             (137,	13,	1),
                                                                             (138,	14,	3),
                                                                             (139,	1,	1);

-- 2024-02-01 13:45:01