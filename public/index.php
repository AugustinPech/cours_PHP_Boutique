<?php

include '../config/database.php';
include '../app/persistances/product.php';
echo 'index';
$routes = [
    'Accueil'=> '../app/controllers/homeController.php',
    'product'=>'../app/controllers/productController.php',
    'contact'=> '../app/controllers/contactController.php',
    'cart'=>'../app/controllers/cartController.php',
    '404'=> '../ressources/views/errors/404.php',
];
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
$action = isset($action) ? (array_key_exists($action, $routes) ? $action : '404') : 'Accueil';
include $routes[$action];