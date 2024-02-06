<?php
require_once '../app/persistences/product.php';
$categoryId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$category = categoryById($pdo, $categoryId);
$wholeCategory = productByCategory($pdo, $categoryId);
require_once '../resources/views/product/showByCategory.php';