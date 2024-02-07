<?php

$routerArray = [
    "home" =>"homeController.php",
    "show" => "showController.php",
    "cart"=> "cartController.php",
    "addProductCart" => "addProductCartController.php",
    "destroy"=> "destroyController.php",
    "addToCart"=> "addToCartController.php",
];

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
if (empty($action)){
    $action="home";
}
if (isset($routerArray[$action])) {
    require "../app/controllers/" . $routerArray[$action];
} else {
    require "../resources/views/errors/" . "404.php";
}



