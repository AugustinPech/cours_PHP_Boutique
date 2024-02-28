<?php
if ($debugModeOnOff) { echo '<br>- addToCartController';}
initCart();
$productId = (int)filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$quantite = (int)filter_input(INPUT_POST, 'quantite', FILTER_SANITIZE_NUMBER_INT);

addToCart($productId, $quantite);
header('Location: /?action=cart');