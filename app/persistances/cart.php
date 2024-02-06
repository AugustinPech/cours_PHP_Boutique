<?php

function addToCart($productId, $quantite)
{
    if (array_key_exists($productId, $_SESSION['cart']) && $quantite !== 0) {
        $_SESSION['cart'][$productId] +=  $quantite;
    } elseif ($quantite !== 0) {
        $_SESSION['cart'][$productId] = $quantite;
    }
}
function initCart()
{
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    };
}
function emptyCart()
{
    $_SESSION['cart'] = [];
}
function modifyCart($newCart)
{
    foreach ($newCart as $productId => $quantity) {
        if ($newCart[$productId] == 0) {
            deleteProductFromCart($productId);
        } else {
            $_SESSION['cart'][$productId] = $quantity;
        }
    }
}
function deleteProductFromCart($productId) {
    unset($_SESSION['cart'][array_search($_SESSION['cart'][$productId], $_SESSION['cart'])]);
}
function subTotalCart($pdo, $productId, $quantite)
{
    $product = getDetailOfProduct($pdo, $productId);
    $priceTTC = $product['priceTTC'] * $quantite;
    $priceHT = $product['priceHT'] * $quantite;
    $taxePrice = $product['taxePrice'] * $quantite;
    $subtotalPrice = [
        'TTC' => $priceTTC,
        'HT' => $priceHT,
        'Taxes' => $taxePrice,
    ];
    return $subtotalPrice;
}
function totalCart($pdo, $cart)
{
    foreach ($cart as $productId => $quantite) {
        $product = getDetailOfProduct($pdo, $productId);
        $priceTTC[$productId] = $product['priceTTC'] * $quantite;
        $priceHT[$productId] = $product['priceHT'] * $quantite;
        $taxePrice[$productId] = $product['taxePrice'] * $quantite;
    };
    $totalPrice = [
        'TTC' => array_sum($priceTTC),
        'HT' => array_sum($priceHT),
        'Taxes' => array_sum($taxePrice),
    ];
    return $totalPrice;
}
function priceById($pdo)
{
    foreach ($_SESSION['cart'] as $productId => $quantite) {
        $priceById[$productId] = subTotalCart($pdo, $productId, $quantite);
    }
    return $priceById;
}

