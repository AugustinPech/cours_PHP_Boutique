<?php
/**
 * @param int $id
 * @param int $quantity
 * @param array $cart
 * @return array
 * par valeur
 */
function itemInCart(int $id, int $quantity, array $cart){
    $cart[] = ['id' => $id,
        'quantity' => $quantity];
    return $cart;
}

/**
 * @param int $id
 * @param int $quantity
 * @param array $cart
 * @return void
 * par reférence
 */
function addItemInCartByRef(int $id, int &$quantity, array &$cart){
    $bool = false;
    var_dump($cart);
    foreach ($cart as $key => $value){
        if ($value['id'] == $id){
            $value['quantity'] = $value['quantity'] + $quantity;
            $bool = true;
        }
    }
    if (!$bool){
        $cart[] = ['id' => $id, 'quantity' => $quantity];
    }
    var_dump($cart);

}

function initCart(){
    if (!isset($_SESSION)){
        session_start();
    }
    $_SESSION['cart'] = [];
}

function fakeCart(){

}