<?php
require_once '../app/persistences/product.php';
$productId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$product = getProduct($pdo, $productId);
require_once '../resources/views/product/show.php';