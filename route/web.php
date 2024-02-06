<?php
session_start();

$routerArray = [
"home",
"show",
"cart",
"destroy",
"addToCart"
];
$router = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
if (array_search($router, $routerArray) !== false) {
$i = array_search($router, $routerArray);
require "../app/controllers/" . $routerArray[$i] . "Controller.php";
} else {
require "../resources/views/errors/" . "404.php";
}