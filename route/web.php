<?php
include '../config/database.php';
include '../app/persistences/boutiqueData.php';
include '../resources/views/layouts/header.php';



$action = filter_input(INPUT_GET, 'action',FILTER_SANITIZE_SPECIAL_CHARS);

$action = $action ?: "home";



switch ($action) {

    case "home" :
        require '../app/controllers/homeController.php';
        break;

    case "showProduct" :
        require '../app/controllers/showProductController.php';
        break;

    case "cart" :
        require '../app/controllers/cartController.php';
        break;


    case "deleteCart" :
        require '../app/controllers/deleteCartController.php';
        break;

    case "updateCart" :
        require '../app/controllers/updateCartController.php';
        break;
    default :
        require '../resources/views/errors/404.php';




}


include '../resources/views/layouts/footer.php';