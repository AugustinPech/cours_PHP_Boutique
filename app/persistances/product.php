<?php
function getNumberOfProducts($pdo, $numberOfProducts) {
    $query = "select * from products order by priceTTC limit $numberOfProducts";

    $statement = $pdo->query($query);
    $outputNumberOfProducts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $outputNumberOfProducts;
}

function getDetailOfProduct($pdo, $productId) {
    $query = "select products.id, title, description, weight, taxePrice, priceHT, priceTTC, stock, categories.name as categorie, taxes.taxeRate
    from products
    inner join categories on categories.id=categories_id
    inner join taxes on taxes.id=taxes_id
    where products.id=$productId";

    $statement = $pdo->query($query);
    $oneDetailedProduct = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $oneDetailedProduct[0];
}
function setNumberOfProductViews($askForMoreOrLessProducts) {
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
return 4 + 4 * $count; }