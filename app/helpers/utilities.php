<?php
/**
 * @param int $id
 * @param int $quantity
 * @param array $cart
 * @return array
 * par valeur
 */
function itemInCart(int $id, int $quantity,array $cart){
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
function itemInCartByRef(int $id, int $quantity,array &$cart){
    $cart[] = ['id' => $id,
        'quantity' => $quantity];
}