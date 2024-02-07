<?php
function initialisationCart(){
    if (!isset($_SESSION['cart'])){
        $_SESSION['cart']= [];
        fakeCart();
    }
}

function fakeCart()
{
    $_SESSION['cart']=[
        1=>3,
        2=>2,
        4=>4,
    ];
}

function addProduct($productId,$nbProduct){
    if (!productIsInCart($productId)){
        $_SESSION['cart'][$productId]=$nbProduct;
    }else {
        $_SESSION['cart'][$productId]+=$nbProduct;
    }
}

/**
 * @param $productId
 * @return bool
 */
function productIsInCart($productId): bool
{
    return isset($_SESSION['cart'][$productId]);
}

//function mergeDoublon($dataArticle)
//{
//    foreach ($_SESSION['cart'] as $id => $Qte) {
//        if ($dataArticle['id'] == $id) {
//            $Qte += $dataArticle['nbArticle'];
//        }
//    }
//}