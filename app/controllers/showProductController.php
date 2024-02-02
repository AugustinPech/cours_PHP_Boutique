<?php



echo 'controller de showproduct -->';
$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

echo $id;
$infoSpecificProduct = getProductById($pdo, $id);




include '../resources/views/product/showProduct.php';