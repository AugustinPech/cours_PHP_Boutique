<?php
echo '<br>- cartController';

$actionOnCart = filter_input(INPUT_POST, 'actionOnCart', FILTER_SANITIZE_SPECIAL_CHARS);

$productId = (int)filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$quantite = (int)filter_input(INPUT_POST, 'quantite', FILTER_SANITIZE_NUMBER_INT);

initCart($actionOnCart);
addToCart($productId, $quantite);
if ($actionOnCart == 'Vider le panier') {
    header('Location: /');
} elseif ($actionOnCart == 'Modifier le panier') { echo 'modification ici';
} elseif ($actionOnCart == 'Valider le panier') { echo 'validation ici';
} else {
    header('Location: /');
    $totalCartInfo = totalCart($pdo, $_SESSION['cart']);
    foreach ($_SESSION['cart'] as $productId => $quantite) {
        $priceById[$productId] = subTotalCart($pdo, $productId, $quantite);
    }
    include '../ressources/views/cart/cart.tpl.php';
}
