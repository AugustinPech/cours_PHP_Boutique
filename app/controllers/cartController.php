<?php
require_once '../app/persistences/product.php';
require_once '../app/persistences/cart.php';

initCart();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['modify'])){
        foreach ($_SESSION['cart'] as $key => &$item) {
            if ($_POST[$item['id']] == 0){
                unset($_SESSION['cart'][$key]);
            } else {
                $item['quantity'] = $_POST[$item['id']];
            }
        }

    } else {
        $newItemId = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $newItemQuantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
        addItemInCartByRef($newItemId, $newItemQuantity, $_SESSION['cart']);
    }
}
if (isset($_SESSION['cart'])){
    $cart= makeCart($pdo, $_SESSION['cart']);
}

$_SESSION['myCartAmount'] = totalCart($cart);



require_once '../resources/views/cart/index.php';
//echo '<pre>';
//var_dump($_SESSION['myCartAmount']);
//echo '</pre>';
