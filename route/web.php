<?php
$router = [
    '/' => '../app/controllers/',
    'cart' => '../resources/views/cart/',
    'product' => '../app/controllers/showController.php',
    '404' => '../resources/views/errors/404.php'
];

$action = filter_input(INPUT_GET,'action', FILTER_SANITIZE_SPECIAL_CHARS);
$action = $action ?? '/' ;
$action = isset($router[$action]) ? $action : '404';
$page = $router[$action];
require_once $page;