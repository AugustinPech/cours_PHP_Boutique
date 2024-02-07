<?php

initCart();

//echo '<pre>';
//var_dump($_SESSION['cart']);
//echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['modify'])) {
        foreach ($_SESSION['cart'] as $key => &$item) {
            if ($_POST[$item['id']] == 0) {
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

if (isset($_GET['id'])){
    $idToDelete = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
    deleteProductCart($_SESSION['cart'], $idToDelete);
}


//echo '<pre>';
//var_dump($_SESSION['cart']);
//echo '</pre>';

if (isset($_SESSION['cart'])){
    $cart= makeCart($pdo, $_SESSION['cart']);
    $cartTotal = totalCart($pdo, $_SESSION['cart']);
}

require_once '../resources/views/cart/index.php';
//echo '<pre>';
//var_dump($_SESSION['cart']);
//echo '</pre>';
