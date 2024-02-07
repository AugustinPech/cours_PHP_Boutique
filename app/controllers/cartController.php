<?php
initialisationCart();
global $dataBaseLink;
var_dump($_SESSION['cart']);
echo "vvv1";
$id=$_SESSION['cart']();
$nbArticle=$_SESSION['cart'][$id]();
$cart=[getProductById($dataBaseLink,$id)];
var_dump($cart);
require'../resources/views/cart/cart.php';






















