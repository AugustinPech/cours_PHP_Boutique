-- Adminer 4.8.1 MySQL 10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `categories` (`id`, `name`) VALUES
                                            (1,	'poele'),
                                            (2,	'bois'),
                                            (3,	'journal'),
                                            (4,	'abonnement'),
                                            (5,	'deco'),
                                            (6,	'outil');

INSERT INTO `customers` (`id`, `email`, `pwd`, `name`, `firstName`) VALUES
                                                                        (-1,	'boutiqueunknown@gmail.com',	'password',	'Un',	'Know'),
                                                                        (1,	'regnilo@gmail.com',	'password',	'Reg',	'Nilo');


INSERT INTO `products` (`id`, `title`, `description`, `stock`, `path_img`, `price_ht`, `price_ttc`, `price_tva`, `weight`, `categories_id`, `tva_id`) VALUES
                                                                                                                                                         (1,	'Poêle À Bois Rond Acier Noir Porte Vitré',	'Ce poêle à bois rond en acier noir, doté d\'une porte vitrée, marie élégance et efficacité. Son design épuré s\'intègre harmonieusement dans tout intérieur. La vitre offre une vue captivante sur les flammes, créant une atmosphère chaleureuse. La structure robuste en acier assure une distribution uniforme de la chaleur, procurant confort et bien-être. Idéal pour les moments de détente, ce poêle combine esthétisme et fonctionnalité, créant un point focal convivial dans votre espace de vie. Facile à utiliser, il garantit une expérience de chauffage agréable et écologique. Transformez votre maison en un cocon accueillant avec ce poêle à bois, symbole de confort et de style intemporel.',	10,	NULL,	2491.67,	2990.00,	498.33,	155.00,	1,	1),
                                                                                                                                                         (2,	'Charly 7kW Poêle à granulés étanche',	'Poêle étanche d\'une puissance de 7kW au design précieux et recherché avec sortie des fumées supérieure concentrique. Ce modèle est proposé avec le revêtement en acier verni (Charly) et avec le revêtement en verre (Charly Glass). Le poêle Charly est aussi disponible en puissance 9kW',	15,	NULL,	1676.67,	2012.00,	335.33,	100.00,	1,	1),
(3,	'Bois de Chauffage en Vrac',	'Le bois de chauffage en vrac offre une solution éco-responsable pour vos besoins énergétiques. Obtenu à partir de bois de qualité supérieure, séché et coupé en morceaux maniables, il garantit une combustion efficace et une chaleur durable. Idéal pour les cheminées, poêles à bois et autres appareils de chauffage, ce bois de chauffage en vrac assure une source de chaleur naturelle et renouvelable. Sa livraison en vrac permet une gestion facile et économique. Profitez d\'une atmosphère chaleureuse et d\'une empreinte carbone réduite en optant pour ce choix écologique, alliant praticité et durabilité pour répondre à vos besoins en chauffage domestique.',	130,	NULL,	62.50,	68.75,	6.25,	1000.00,	2,	2),
(4,	'Bois de Chauffage en 50 cm palette par 1.5 stère',	'Vente de bois de chauffage en palette . Vendu par 1.2m³ soit 1 stère et demi en 50 cm .  Mélange Chêne / Hêtre / Charme .  Bois mi-sec . ',	23,	NULL,	95.35,	104.89,	9.54,	1500.00,	2,	2),
(5,	'Abonnement électricité pour poêle',	'L\'abonnement électricité dédié au poêle assure une source d\'énergie constante et efficace pour votre chauffage. Conçu spécifiquement pour les poêles électriques, cet abonnement offre une puissance adaptée à vos besoins thermiques. Profitez d\'une chaleur instantanée et régulière sans soucis de gestion de consommation. Avec des tarifs compétitifs, cet abonnement vous offre le confort d\'une chaleur maîtrisée et abordable. Optez pour la simplicité et l\'efficacité en souscrivant à cet abonnement dédié, offrant une expérience de chauffage électrique optimale.',	100,	NULL,	80.91,	89.00,	8.09,	NULL,	4,	3),
                                                                                                                                                         (6,	'Chrysanthème de la Mort',	' Le \"Chrysanthème de la Mort\" séduit par sa beauté énigmatique, arborant des pétales d\'un noir profond. Cette fleur, captivante dans son obscurité, ajoute une touche mystérieuse à tout environnement. Bien que son apparence soit sublime, elle cache un côté sombre, rappelant la dualité de la nature. Cette plante évoque des notions de mystère, de passage et de transformation. Sa présence suscite la curiosité et peut inspirer des réflexions poétiques sur la complexité de la vie et de la nature. Une fleur à l\'esthétique saisissante, le Chrysanthème de la Mort intrigue et fascine par son aura unique.',	89,	NULL,	210.28,	221.85,	11.57,	1.00,	5,	3),
                                                                                                                                                         (7,	'Poêle a bois Hebdo',	' \"Le journal \"Poêle à Bois Hebdo\" est une source incontournable d\'informations sur le monde du chauffage au bois. Chaque numéro propose des articles approfondis sur les dernières tendances, les innovations technologiques et les conseils pratiques pour optimiser l\'expérience de chauffage au bois. Avec des rubriques dédiées à la sélection des meilleurs poêles, aux astuces d\'entretien et aux histoires de passionnés, ce journal offre une lecture captivante et éducative pour tous les amateurs de chaleur naturelle. Plongez dans l\'univers chaleureux du bois de chauffage avec \"Poêle à Bois Hebdo\" et restez informé sur tout ce qui concerne cette source de chaleur traditionnelle et écologique.',	18,	NULL,	9.47,	9.99,	0.52,	0.50,	3,	4),
                                                                                                                                                         (8,	'Tronçonneuse pour tous',	'Le journal \"Tronçonneuse pour Tous\" est votre guide complet dans le monde de la coupe du bois. Chaque numéro présente des articles approfondis sur les dernières tronçonneuses, les techniques de coupe efficaces et les conseils de sécurité. Découvrez des critiques détaillées, des interviews d\'experts et des récits passionnants sur l\'utilisation de la tronçonneuse. Que vous soyez un professionnel du bois ou un passionné, ce journal offre une lecture informative et divertissante, mettant en lumière l\'outil indispensable qu\'est la tronçonneuse. Plongez dans l\'univers de la découpe du bois avec \"Tronçonneuse pour Tous\" et restez à jour sur tout ce qui concerne cet outil essentiel pour les amateurs de bûcheronnage et de travail du bois.',	27,	NULL,	4.64,	4.90,	0.26,	0.40,	3,	4),
(9,	'MS 500i W',	'La MS 500i W est la première tronçonneuse thermique dotée du système d’injection électronique STIHL. Meilleur rapport poids/puissance sur le marché, elle convient parfaitement à l’abattage et au façonnage de gros bois grâce à sa structure légère et à une excellente accélération.',	19,	NULL,	1989.57,	2099.00,	109.43,	6.30,	6,	1);


INSERT INTO `tva` (`id`, `rate_tva`) VALUES
                                         (1,	20.00),
                                         (2,	10.00),
                                         (3,	5.50),
                                         (4,	2.10);

-- 2024-02-01 14:56:16