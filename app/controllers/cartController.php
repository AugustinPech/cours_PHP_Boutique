<?php
require_once '../app/persistences/product.php';
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $newItemId = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $newItemQuantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
    //$_SESSION['cart'] = itemInCart($newItemId, $newItemQuantity, $_SESSION['cart']);
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    itemInCartByRef($newItemId, $newItemQuantity, $_SESSION['cart']);
}
$products = getAllProducts($pdo);

require_once '../resources/views/cart/index.php';