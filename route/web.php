<?php
echo ' - web.php';


// Part 1
// ----- Ouverture de la session commence
session_start();
// End Part 1

// Part 2
// ----- Gestion des routes
$routes = [
    'Accueil' => '../app/controllers/homeController.php',
    'product' => '../app/controllers/productController.php',
    'contact' => '../app/controllers/contactController.php',
    'cart' => '../app/controllers/cartController.php',
    '404' => '../ressources/views/errors/404.php',
];

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
$action = isset($action) ? (array_key_exists($action, $routes) ? $action : '404') : 'Accueil';
include $routes[$action];
// End Part 2

// Debug
var_dump($_SESSION);
// End Debug