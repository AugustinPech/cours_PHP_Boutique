<?php
$quantite = (int) filter_input(INPUT_POST,'nbArticle', FILTER_SANITIZE_NUMBER_INT);
$id = (int) filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
addToCart($id, $quantite);
header('Location: /?action=cart');