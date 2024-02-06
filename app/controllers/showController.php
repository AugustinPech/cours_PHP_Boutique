<?php

$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$productId = productsid($dataBaseLink, $id);
require'../resources/views/product/show.php';
