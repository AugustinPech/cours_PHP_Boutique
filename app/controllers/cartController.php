<?php
include '../app/persistences/cartData.php';

echo "cartController -->";




if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $quantity = (int)filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
    $id = (int)filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    initCart();
    addProduct($id, $quantity);
    totalCart($pdo);
}

if (isset($_SESSION['cart'])){
var_dump($_SESSION['cart']);
}
//$_SESSION['cart'] = array('id' => $id,
//                      'quantité' => $quantity);
//$_SESSION['cart'][$id] = $quantity;






include '../resources/views/cart/viewsCart.php';