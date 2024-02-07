<?php
initialisationCart();

$dataArticle = filter_input_array(INPUT_POST, [
    "id" => FILTER_SANITIZE_NUMBER_INT,
    "nbArticle" => FILTER_SANITIZE_NUMBER_INT
]);
addProduct($dataArticle['id'],$dataArticle['nbArticle']);
header('Location: /?action=cart');