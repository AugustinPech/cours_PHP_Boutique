<?php

function products($PDO, $nbproducts)
{
    try {
        $query = "select products.id , title, categories.name as name, stock, description, path_img, price_ht as ht, price_tva as tva, price_ttc as ttc, weight from products inner join categories on categories.id = products.categories_id  limit $nbproducts";
        $request = $PDO->query($query);
        return $request->fetchall(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
}

function getProductById($PDO, $id)
{
    try {
        $query = "select products.id , title, categories.name as name, stock, description, path_img, price_ht as ht, price_tva as tva, price_ttc as ttc, weight from products inner join categories on categories.id = products.categories_id  where products.id=$id";
        $request = $PDO->query($query);
        return $request->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
}


