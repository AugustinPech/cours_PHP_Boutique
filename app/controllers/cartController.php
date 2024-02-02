<?php
echo "cartController -->";

$quantity = filter_input(INPUT_POST,'quantity',FILTER_SANITIZE_NUMBER_INT);

echo "ok";

var_dump($quantity);

include '../resources/views/cart/viewsCart.php';