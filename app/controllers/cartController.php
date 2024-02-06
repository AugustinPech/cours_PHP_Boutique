<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $args = array(
            "id" => FILTER_SANITIZE_NUMBER_INT,
            "nbArticle" => FILTER_SANITIZE_NUMBER_INT
    );

    $dataArticle = filter_input_array(INPUT_POST, $args)

//    ?><!--<pre>-->
<!--    --><?php //var_dump($_SESSION['cart']); ?>
<!--    </pre>--><?//php?>
<!---->
<!--    <pre>-->
<!--    --><?php //var_dump($dataArticle); ?>
<!--    </pre>--><?php

    // check si $_session['cart'] existe
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

function initialisationCart($dataArticle){
    $_SESSION['cart'][]=[
        "id"=>$dataArticle['id'],
        "nbArticle"=>$dataArticle['nbArticle']
    ];
}

function addItem($dataArticle){

    $_SESSION['cart'][]=[
        "id"=>$dataArticle['id'],
        "nbArticle"=>$dataArticle['nbArticle']
    ];
}

function mergeDoublon($dataArticle){
    for ($i=0;$i<count($_SESSION['cart']);$i++) {
        if ($dataArticle['id']==$_SESSION['cart'][$i]['id']){
            $_SESSION['cart'][$i]['nbArticle']+=$dataArticle['nbArticle'];
        }
    }
}

function checkingID($dataArticle){
    for ($i=0;$i<count($_SESSION['cart']);$i++) {
        if ($dataArticle['id']==$_SESSION['cart'][$i]['id']){
            return true;
        }
    }
    return false;
}




















