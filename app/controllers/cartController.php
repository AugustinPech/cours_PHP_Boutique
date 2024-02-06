<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $args = array(
            "id" => FILTER_SANITIZE_NUMBER_INT,
            "nbArticle" => FILTER_SANITIZE_NUMBER_INT
    );

    $dataArticle = filter_input_array(INPUT_POST, $args);
    if (isset($_SESSION['cart'])){
        if(checkingID($dataArticle)){
            mergeDoublon($dataArticle);
        }else{
            addItem($dataArticle);
        }
    }else{
        initialisationCart($dataArticle);
    }
    header("Location: ?action=cart");
    exit();
}else{
    require'../resources/views/cart/cart.php';
}





















