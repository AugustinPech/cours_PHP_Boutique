<?php
echo '<br>- productController';
$productId = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$product=getDetailOfProduct($pdo, $productId);
include '../ressources/views/product/product.tpl.php';