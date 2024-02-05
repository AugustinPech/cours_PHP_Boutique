<?php
if (!isset($_SESSION)){
    session_start();
}
require_once '../app/persistences/product.php';
$categories = getCategories($pdo);
require_once '../resources/views/home.php';