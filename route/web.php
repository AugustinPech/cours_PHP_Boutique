<?php
// Toggle Debug mode
$debugModeOnOff=filter_input(INPUT_GET,'debug',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if (!is_null($debugModeOnOff)) {
    setcookie('debug', $debugModeOnOff, time() + 60);
} elseif (isset($_COOKIE['debug'])) {
    $debugModeOnOff = $_COOKIE['debug'];
} else {$debugModeOnOff=false;}
// end toggle debug mode

if ($debugModeOnOff) {echo ' - web.php';}



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
include $routes[$action];
// End Part 1

//debug
if ($debugModeOnOff) {var_dump($_SESSION);}
//end Debug