<?php
echo '<br>- cartController';

initCart();


if (array_sum($_SESSION['cart']) > 0) {
    $totalCartInfo = totalCart($pdo, $_SESSION['cart']);
    $priceById=priceById($pdo);
}
include '../ressources/views/cart/cart.tpl.php';
