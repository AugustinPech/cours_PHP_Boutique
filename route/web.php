<?php
echo ' - web.php';
$id =(int)filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$quantite=(int)filter_input(INPUT_POST,'quantite', FILTER_SANITIZE_NUMBER_INT);
$emptyCart = filter_input(INPUT_POST, 'emptyCart', FILTER_SANITIZE_SPECIAL_CHARS);


// Part 1
// ----- Ouverture de la session commence
session_start();
// l'id de session est un time stamp (WIP)
//$id_session = date('y-m-d_h:i:s');

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
    $_SESSION['cart'] = [];
} elseif ($emptyCart == 'Vider le panier') {
    session_unset();
    $_SESSION['count'] = 1;
    $_SESSION['cart'] = [];
} else {
    $_SESSION['count'] = $_SESSION['count'] + 1;
    if (array_key_exists($id, $_SESSION['cart']) && $quantite!==0) {
        $_SESSION['cart'][$id] = $_SESSION['cart'][$id] + $quantite;
    } elseif ($quantite!==0) {
        $_SESSION['cart'][$id]=$quantite;
    }
}
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
var_dump($emptyCart);
var_dump($_SESSION);
// End Debug