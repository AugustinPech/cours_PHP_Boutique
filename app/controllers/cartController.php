<?php
require_once '../app/persistences/product.php';
require_once '../app/persistences/cart.php';
if (!isset($_SESSION['cart'])){
    initCart();
}
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $newItemId = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $newItemQuantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
    addItemInCartByRef($newItemId, $newItemQuantity, $_SESSION['cart']);
    $_POST['id'] = null;
    $_POST['quantity'] = null;
}
$products = getAllProducts($pdo);

require_once '../resources/views/cart/index.php';