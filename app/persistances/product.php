<?php

function getNumberOfProducts($pdo, $numberOfProducts)
{
    $query = "select * from products order by priceTTC limit $numberOfProducts";

    $statement = $pdo->query($query);
    $outputNumberOfProducts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $outputNumberOfProducts;
}

function getDetailOfProduct($pdo, $productId)
{
    $query = "select products.id, title, description, weight, taxePrice, priceHT, priceTTC, stock, categories.name as categorie, taxes.taxeRate
    from products
    inner join categories on categories.id=categories_id
    inner join taxes on taxes.id=taxes_id
    where products.id=$productId";

    $statement = $pdo->query($query);
    $oneDetailedProduct = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $oneDetailedProduct[0];
}
function setNumberOfProductViews($askForMoreOrLessProducts)
{
    
    $cookieCount = isset($_COOKIE) ? filter_input(INPUT_COOKIE, 'count', FILTER_SANITIZE_SPECIAL_CHARS): 1;
    if ($askForMoreOrLessProducts == 'Afficher Plus de Produits') {
        $count = $cookieCount + 1;
    } elseif ($askForMoreOrLessProducts == 'Afficher Moins de Produits') {
        $count = ($cookieCount > 1) ? ($cookieCount  - 1) : 1;
    } else {
        $count = 1;
    }
    setcookie('count', $count, time() + 60);
    return  4 * $count;
}
function getAllCustomers($pdo) {
    $query = "select * from customers";

    $statement = $pdo->query($query);
    $allCustomers = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $allCustomers;
}


function getProductById(PDO $pdoConnection, $productId){ //query select * pour simplifier le merge
    $statement = $pdoConnection->query("SELECT *
                        FROM products p
                        WHERE p.id = $productId");
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getProducts($pdo, $numberOfProducts)
{
    $query = "select * from products order by priceTTC limit $numberOfProducts";

    $statement = $pdo->query($query);
    $outputNumberOfProducts = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $outputNumberOfProducts;
}

