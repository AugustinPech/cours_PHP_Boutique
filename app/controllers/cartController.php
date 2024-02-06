<?php
echo '<br>- cartController';

initCart();

if (array_sum($_SESSION['cart'])>0){
$totalCartInfo = totalCart($pdo, $_SESSION['cart']);
foreach ($_SESSION['cart'] as $productId => $quantite) {
    $priceById[$productId] = subTotalCart($pdo, $productId, $quantite);
}}
include '../ressources/views/cart/cart.tpl.php';
