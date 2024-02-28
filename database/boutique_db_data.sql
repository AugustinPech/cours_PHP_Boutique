-- Adminer 4.8.1 MySQL 10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `boutique`;

INSERT INTO `categories` (`id`, `name`) VALUES
(1,	'Basic'),
(3,	'Customizable'),
(4,	'Limited Edition'),
(2,	'Premium');

INSERT INTO `customers` (`id`, `name`, `firstName`, `email`, `password`) VALUES
(1,	'Smith',	'John',	'john@example.com',	'password1'),
(2,	'Doe',	'Jane',	'jane@example.com',	'password2'),
(3,	'Johnson',	'Mark',	'mark@example.com',	'password3'),
(4,	'Williams',	'Emily',	'emily@example.com',	'password4'),
(5,	'PlateyMcPlateface',	'John',	'platey@example.com',	'password1'),
(6,	'ForkyMcForkface',	'Jane',	'forky@example.com',	'password2'),
(7,	'Spoonerific',	'Mark',	'spoonerific@example.com',	'password3'),
(8,	'DishyDiva',	'Emily',	'dishy@example.com',	'password4'),
(9,	'SaucySaucer',	'Alex',	'saucy@example.com',	'password5'),
(10,	'CuppaChamp',	'Sophie',	'cuppa@example.com',	'password6'),
(11,	'KnifeKnight',	'Chris',	'knife@example.com',	'password7'),
(12,	'LadleLady',	'Emma',	'ladle@example.com',	'password8'),
(13,	'BowlfulBuddy',	'Mike',	'bowlful@example.com',	'password9'),
(14,	'PlatterMaster',	'Sarah',	'platter@example.com',	'password10');

INSERT INTO `orders` (`id`, `orderDate`, `deliveryDate`, `customers_id`) VALUES
(1,	'2024-01-15',	'2024-01-20',	1),
(2,	'2024-01-20',	'2024-01-25',	2),
(3,	'2024-01-25',	'2024-01-30',	3),
(4,	'2024-01-30',	'2024-02-05',	4),
(5,	'2024-01-10',	'2024-01-15',	1),
(6,	'2024-01-12',	'2024-01-17',	2),
(7,	'2024-01-15',	'2024-01-20',	3),
(8,	'2024-01-17',	'2024-01-22',	4),
(9,	'2024-01-20',	'2024-01-25',	5),
(10,	'2024-01-22',	'2024-01-27',	6),
(11,	'2024-01-25',	'2024-01-30',	7),
(12,	'2024-01-27',	'2024-02-01',	8),
(13,	'2024-01-30',	'2024-02-04',	9),
(14,	'2024-02-02',	'2024-02-07',	10),
(15,	'2024-02-10',	'2024-02-15',	10);

INSERT INTO `order_has_products` (`order_id`, `products_id`, `amount`) VALUES
(1,	5,	2),
(1,	13,	1),
(2,	6,	1),
(2,	14,	1),
(3,	7,	1),
(3,	15,	2),
(4,	8,	1),
(4,	16,	1),
(5,	9,	2),
(5,	13,	1),
(6,	10,	1),
(6,	14,	1),
(7,	11,	1),
(7,	15,	2),
(8,	12,	1),
(8,	16,	1),
(9,	5,	2),
(9,	13,	1),
(10,	6,	1),
(10,	14,	1),
(11,	7,	1),
(11,	15,	2),
(12,	8,	1),
(12,	16,	1),
(13,	5,	2),
(13,	17,	1),
(14,	9,	1),
(14,	13,	1),
(15,	5,	10),
(15,	6,	5),
(15,	7,	3),
(15,	9,	8),
(15,	10,	5),
(15,	11,	3),
(15,	13,	10),
(15,	14,	5),
(15,	15,	3),
(15,	17,	5);

INSERT INTO `products` (`id`, `title`, `description`, `weight`, `taxePrice`, `priceHT`, `priceTTC`, `stock`, `categories_id`, `taxes_id`) VALUES
(5,	'Basic Fork Kit',	'Starter kit for assembling your fork',	0.50,	2.00,	10.00,	12.00,	100,	1,	1),
(6,	'Premium Fork Kit',	'Deluxe kit with additional components',	0.75,	3.00,	20.00,	23.00,	50,	2,	1),
(7,	'Custom Fork Kit',	'Build your fork with custom options',	0.60,	2.50,	15.00,	17.50,	75,	3,	1),
(8,	'Limited Edition',	'Special edition fork kit',	0.70,	3.50,	25.00,	28.50,	25,	4,	1),
(9,	'Standard Handle',	'Standard handle for fork assembly',	0.30,	1.50,	8.00,	9.50,	50,	1,	1),
(10,	'Ergonomic Handle',	'Ergonomic handle for fork assembly',	0.30,	1.50,	8.00,	9.50,	50,	2,	1),
(11,	'Custom Handle',	'Customizable handle for fork assembly',	0.30,	1.50,	8.00,	9.50,	50,	3,	1),
(12,	'Limited Edition Handle',	'Exclusive handle for fork assembly',	0.30,	1.50,	8.00,	9.50,	50,	4,	1),
(13,	'Standard Head',	'Standard fork head component',	0.20,	1.00,	5.00,	6.00,	100,	1,	1),
(14,	'Reinforced Head',	'Reinforced fork head component',	0.20,	1.00,	5.00,	6.00,	100,	2,	1),
(15,	'Custom Head',	'Customizable fork head component',	0.20,	1.00,	5.00,	6.00,	100,	3,	1),
(16,	'Limited Edition Head',	'Exclusive fork head component',	0.20,	1.00,	5.00,	6.00,	100,	4,	1),
(17,	'Fancy Spoon',	'Exquisite silver-plated spoon crafted with precision for the discerning palate. Elevate your dining experience with this luxurious utensil.',	0.10,	2.00,	99.99,	17.00,	50,	2,	1);

INSERT INTO `taxes` (`id`, `taxeRate`) VALUES
(1,	5.00),
(2,	10.00),
(3,	15.00),
(4,	20.00);

-- 2024-02-01 13:45:01