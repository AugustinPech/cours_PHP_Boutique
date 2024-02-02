<?php
include '../config/database.php';
include '../app/persistences/boutiqueData.php';
include '../resources/views/layouts/header.php';
include '../resources/views/layouts/footer.php';


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


//    case "" :
//        require '../app/controllers/NOMDUCONTROLLER';
//        break;
//
//    case "" :
//        require '../app/controllers/NOMDUCONTROLLER';
//        break;<
    default :
        require '../resources/views/errors/404.php';




}