<?php
echo '<br>- cartController';
$id =(int)filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$quantite=(int)filter_input(INPUT_POST,'quantite', FILTER_SANITIZE_NUMBER_INT);
$emptyCart = filter_input(INPUT_POST, 'emptyCart', FILTER_SANITIZE_SPECIAL_CHARS);
initCart($emptyCart);
fillcart($id, $quantite);
$totalCartInfo=totalCart($pdo,$_SESSION['cart']);
foreach($_SESSION['cart'] as $id => $quantite){
    $priceById[$id]=subTotalCart($pdo, $id, $quantite);
}
echo '<br> prix par produits';
var_dump($priceById);
echo 'prix';
var_dump($totalCartInfo);
echo 'panier';
var_dump($_SESSION['cart']);
include '../ressources/views/cart/cart.tpl.php';
