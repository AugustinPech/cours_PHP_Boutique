<?php
require_once '../app/persistences/product.php';
$categoryId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$wholeCategory = productByCategory($pdo, $categoryId);
require_once '../resources/views/product/showByCategory.php';