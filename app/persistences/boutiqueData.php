<?php


function getAllProducts ($MyPDO){
$statement = $MyPDO->query("SELECT id, title, description, priceTTC, weight FROM Products");
$row = $statement->fetchall(PDO::FETCH_ASSOC);
return $row;
};

function getProductById ($MyPDO, $id){
    $statement = $MyPDO->query("SELECT id, title, description, priceTTC, weight FROM Products WHERE id=$id");
    $row = $statement->fetchall(PDO::FETCH_ASSOC);
    return $row;
}