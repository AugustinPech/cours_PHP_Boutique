<?php


function unsetSession()
{
    unset($_SESSION['cart']);
}


function getInfoProductById(PDO $MyPDO, $id)
{
    $statement = $MyPDO->prepare("SELECT id, title, description, priceTTC, weight FROM Products WHERE id=?");
    $statement->execute([$id]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function initCart()
{
    if (!isset ($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
}


function findID($tableauDeRef, $productID, $productQuantity)
{
    $idHere = false;
    foreach ($tableauDeRef as $id => $quantity) {
        if ($productID == $id) {
            $idHere = true;
//            $_SESSION['cart'][$id] += $productQuantity;
        }

//            $_SESSION['cart'] += [$id => $quantity];

    }
    return $idHere;
}


function addProduct($id, $quantity)
{

    $bool = findID($_SESSION['cart'], $id, $quantity);
    if ($bool) {
        $_SESSION['cart'][$id] += $quantity;
    } else {
        $_SESSION['cart'] += [$id => $quantity];
    }
}


function totalCart($MyPDO)
{
    $totalPrice = 0;
    $totalProducts = count($_SESSION['cart']);

    foreach ($_SESSION['cart'] as $productID => $quantity) {
        $productPrice = getInfoProductById($MyPDO, $productID);
        $totalPrice = $totalPrice + ($productPrice['priceTTC'] * $quantity);
    }


    $_SESSION['totalCart'] = array('totalPrice' => $totalPrice, 'totalProducts' => $totalProducts);
    //var_dump($_SESSION['totalCart']);
    return $_SESSION['totalCart'];
}


function updateCart($id, $newQuantity)
{
    if ($newQuantity>0) {
        $_SESSION['cart'][$id] = $newQuantity;
    }
    if ($newQuantity ==0) {

    }
}



































