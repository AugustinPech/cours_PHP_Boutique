<?php
include '../app/persistences/cartData.php';

//if (isset ($_POST)) {
//
//}
var_dump($_SESSION['cart']);

//$id = $_POST['id'];
//
//echo $id;

$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
$quantity = filter_input(INPUT_POST,'quantity',FILTER_SANITIZE_NUMBER_INT);

var_dump( getInfoProductById($pdo,$id));

echo 'ID ET QUANTITE'.$id, $quantity;



updateCart($id,intval($quantity));


var_dump($_SESSION['cart']);
