<?php



function unsetSession (){
    unset($_SESSION['cart']);
}






function getInfoProductById(PDO $MyPDO, $id)
{
    $statement = $MyPDO->prepare("SELECT id, title, description, priceTTC, weight FROM Products WHERE id=?");
    $statement->execute([$id]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function initCart()
{
    if (!isset ($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
}


function findID($tableauDeRef, $productID, $productQuantity)
{
    $idHere = false;
    foreach ($tableauDeRef as $id => $quantity) {
        if ($productID == $id) {
            $idHere = true;
//            $_SESSION['cart'][$id] += $productQuantity;
        }

//            $_SESSION['cart'] += [$id => $quantity];

    }
    return $idHere;
}


function addProduct($id, $quantity)
{

    $bool = findID($_SESSION['cart'], $id, $quantity);
    if ($bool) {
        $_SESSION['cart'][$id] += $quantity;
    } else {
        $_SESSION['cart'] += [$id => $quantity];
    }
}


function totalCart($MyPDO)
{
    $totalPrice = 0;
    $totalProducts = 0;

    $totalProducts = count($_SESSION['cart']);

//    foreach ($_SESSION['cart'] as $idQuantity) {
//        $totalProducts = $totalProducts + 1;
//
//    }
//    echo $_SESSION['cart']['quantité'];
    foreach ($_SESSION['cart'] as $productID => $quantity) {
        $productPrice = getInfoProductById($MyPDO, $productID);
        $totalPrice = $totalPrice + ($productPrice['priceTTC'] * $quantity);
    }


//    echo "=====================================>";
//    echo 'total', $totalProducts;
    $_SESSION['totalCart'] = array('totalPrice' => $totalPrice, 'totalProducts' => $totalProducts);
    var_dump($_SESSION['totalCart']);
}




// array(2) { ["id"]=> string(3) "126" ["quantité"]=> string(1) "5" }

































