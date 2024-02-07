<?php
// Part 1
// ----- Gestion des routes
$routes = [
    'Accueil' => '../app/controllers/homeController.php',
    'product' => '../app/controllers/productController.php',
    'contact' => '../app/controllers/contactController.php',
    'cart' => '../app/controllers/cartController.php',
    '404' => '../ressources/views/errors/404.php',
    'addToCart' => '../app/controllers/addToCartController.php',
    'modifyCart' => '../app/controllers/modifyCartController.php',
    'emptyCart' => '../app/controllers/emptyCartController.php',
    'validateCart' => '../app/controllers/validateCartController.php',
    'deleteProductFromCart' => '../app/controllers/deleteProductFromCartController.php',
    'commandController'=>'../app/controllers/commandController.php',
];

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
$action = isset($action) ? (array_key_exists($action, $routes) ? $action : '404') : 'Accueil';
require_once $routes[$action];
// End Part 1
