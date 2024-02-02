<?php
echo '<br>- productController';
$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$product=getDetailOfProduct($pdo, $id);
include '../ressources/views/product/product.tpl.php';