<?php
function addToCart($id, $quantite){
    try {
        $query = "select ";
        $cartAdd = array("id", "quantite");
        $_SESSION['cart'] = $cartAdd;
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }
}
