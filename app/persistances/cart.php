<?php

function fillCart($id, $quantite)
{
    if (array_key_exists($id, $_SESSION['cart']) && $quantite!==0) {
        $_SESSION['cart'][$id] = $_SESSION['cart'][$id] + $quantite;
    } elseif ($quantite!==0) {
        $_SESSION['cart'][$id]=$quantite;
    }
}
function initCart($emptyCart)
{
    
    if ($emptyCart == 'Vider le panier') {
        session_unset();
        $_SESSION['cart'] = [];
    };
}
function subTotalCart($pdo,$id,$quantite) {
    $product=getDetailOfProduct($pdo,$id);
    $priceTTC=$product['priceTTC']*$quantite;
    $priceHT=$product['priceHT']*$quantite;
    $taxePrice=$product['taxePrice']*$quantite;
    $subtotalPrice= [
        'TTC'=> $priceTTC,
        'HT'=> $priceHT,
        'Taxes'=> $taxePrice,
    ];
    return $subtotalPrice;
}
function totalCart($pdo,$cart)
{
    foreach ($cart as $id => $quantite) {
        $product=getDetailOfProduct($pdo,$id);
        $priceTTC[$id]=$product['priceTTC']*$quantite;
        $priceHT[$id]=$product['priceHT']*$quantite;
        $taxePrice[$id]=$product['taxePrice']*$quantite;
    }
    ;
    $totalPrice= [
        'TTC'=> array_sum($priceTTC),
        'HT'=> array_sum($priceHT),
        'Taxes'=> array_sum($taxePrice),
    ];
    return $totalPrice;
}