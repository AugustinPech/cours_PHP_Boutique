<?php

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
