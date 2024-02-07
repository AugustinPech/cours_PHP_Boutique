<?php

function getProduct(PDO $pdoConnection, $productId){
    $statement = $pdoConnection->query("SELECT p.id, p.name, p.description, p.allTaxesIncludedPrice AS price, p.stock
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
