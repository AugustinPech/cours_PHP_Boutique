<?php

function getProduct(PDO $pdoConnection, $productId){
    $statement = $pdoConnection->query("SELECT p.id, p.name, p.description, p.allTaxesIncludedPrice AS price, p.stock
                        FROM products p
                        WHERE p.id = $productId");
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getCategories(PDO $pdoConnection){
    $statement = $pdoConnection->query("SELECT c.name, c.id
                        FROM categories c");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function productByCategory(PDO $pdoConnection, $categoryId){
    $statement = $pdoConnection->query("SELECT p.id, p.name, p.allTaxesIncludedPrice AS price, p.stock
                        FROM products p
                        WHERE p.categories_id = $categoryId");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}