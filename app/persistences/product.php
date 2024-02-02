<?php

function getProduct(PDO $pdoconnection, $productId){
    $statement = $pdoconnection->query("SELECT p.id, p.name, p.description, p.allTaxesIncludedPrice AS price, p.stock
                        FROM products p
                        WHERE p.id = $productId");
    return $statement->fetch(PDO::FETCH_ASSOC);
}