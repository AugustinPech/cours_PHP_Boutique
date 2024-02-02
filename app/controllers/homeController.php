<?php
echo '<br>- Homecontroller';
$askForMoreOrLessProducts=filter_input(INPUT_POST, 'moreOrLessProducts', FILTER_SANITIZE_SPECIAL_CHARS);

setcookie('count', 1, time()+60);
if ($askForMoreOrLessProducts == 'Afficher Plus de Produits') {
    $count = filter_input(INPUT_COOKIE, 'count', FILTER_SANITIZE_SPECIAL_CHARS) + 1;
} elseif ($askForMoreOrLessProducts == 'Afficher Moins de Products') {
    $count = ((filter_input(INPUT_COOKIE, 'count', FILTER_SANITIZE_SPECIAL_CHARS)  - 1) >= 0)? (filter_input(INPUT_COOKIE, 'count', FILTER_SANITIZE_SPECIAL_CHARS)  - 1) : 0 ;
} else {
    $count = 0;
}
setcookie('count', $count, time()+60);

$numberOfProducts= 4 + 4 * $count ;

$getProducts= getNumberOfProducts($pdo, $numberOfProducts);
include '../ressources/views/home.tpl.php';