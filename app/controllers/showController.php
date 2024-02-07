<?php
global $dataBaseLink;

$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$product = getProductById($dataBaseLink, $id);
require'../resources/views/product/show.php';
