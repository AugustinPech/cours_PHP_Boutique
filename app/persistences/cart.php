<?php
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