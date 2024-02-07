<?php
if ($debugModeOnOff) { echo '<br>- cartController';}
initCart();

if (testIfNotEmpty() > 0) {
    $totalCartInfo = totalCart($pdo, $_SESSION['cart']);
    $subTotalByProductId=subTotalPriceById($pdo);
}
include '../ressources/views/cart/cart.tpl.php';
