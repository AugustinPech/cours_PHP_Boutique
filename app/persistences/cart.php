<?php
/**
 * @param int $id
 * @param int $quantity
 * @param array $cart
 * @return array
 * par valeur
 */
function itemInCart(int $id, int $quantity, array &$cart){
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
function addItemInCartByRef(int $id, int $quantity, array &$cart)
{
    $bool = false;
    foreach ($cart as &$value) {
        if ($value['id'] == $id) {
            $value['quantity'] = $value['quantity'] + $quantity;
            $bool = true;
        }
    }
    if (!$bool) {
        $cart[] = ['id' => $id, 'quantity' => $quantity];
    }
}

function initCart()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
}

function fakeCart(){
    $_SESSION['cart'] = [
        0 =>[
            'id' => 1,
            'quantity' => 2],
        1=> [
            'id' => 2,
            'quantity' => 3],
    ];
}

function totalCart(array $cart){
    if (isset($cart[0])){
        $total = 0;
        $nbItem = 0;
        foreach ($cart as $item) {
            $total = $total + $item['total'];
            $nbItem++;
        }
        return [
            'total' => $total,
            'nbItem' => $nbItem,
            ];
    }
}


function makeCart($pdo, $sessionCart){

    $cart = [
//    [
//        'id' => 0,
//        'name' => 0,
//        'price' => 0,
//        'quantity' => 0,
//        'total' => 0,
//    ],
//    [
//        'id' => 0,
//        'name' => 0,
//        'price' => 0,
//        'quantity' => 0,
//        'total' => 0,
//    ],
    ];
    foreach ($sessionCart as $cartLine) {
        $productId = $cartLine['id'];
        $product = getProduct($pdo, $productId);
        $cart[] = [
                'id' => $cartLine['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => $cartLine['quantity'],
                'total' => $product['price']*$cartLine['quantity'],
        ];
    }
    return $cart;
}

//function updateCart($cart, $){
//
//}