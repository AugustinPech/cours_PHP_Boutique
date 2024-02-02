<?php
echo '<br>- Homecontroller';

// Part 1
// ----- Gestion du nombre d'objet à afficher
$askForMoreOrLessProducts = filter_input(INPUT_POST, 'moreOrLessProducts', FILTER_SANITIZE_SPECIAL_CHARS);
setcookie('count', 1, time() + 60);
$cookieCount = filter_input(INPUT_COOKIE, 'count', FILTER_SANITIZE_SPECIAL_CHARS);
if ($askForMoreOrLessProducts == 'Afficher Plus de Produits') {
    $count = $cookieCount + 1;
} elseif ($askForMoreOrLessProducts == 'Afficher Moins de Products') {
    $count = (($cookieCount  - 1) >= 0) ? ($cookieCount  - 1) : 0;
} else {
    $count = 0;
}
setcookie('count', $count, time() + 60);
$numberOfProducts = 4 + 4 * $count;
$getProducts = getNumberOfProducts($pdo, $numberOfProducts);
// End Part 1

include '../ressources/views/home.tpl.php';
