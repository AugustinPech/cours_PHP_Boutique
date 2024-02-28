<?php
function addToCart($productId, $quantite)
{
    if (array_key_exists($productId, $_SESSION['cart']) && $quantite !== 0) {
        $_SESSION['cart'][$productId]['quantite'] +=  $quantite;
    } elseif ($quantite !== 0) {
        $_SESSION['cart'][$productId]['quantite'] = $quantite;
    }
}
function initCart()
{
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    };
}
function emptyCart()
{
    $_SESSION['cart'] = [];
}
function modifyCart($newCart)
{
    foreach ($newCart as $productId => $quantite) {
        if ($newCart[$productId] == 0) {
            deleteProductFromCart($productId);
        } else {
            $_SESSION['cart'][$productId]['quantite'] = $quantite;
        }
    }
}
function deleteProductFromCart($productId)
{
    unset($_SESSION['cart'][array_search($_SESSION['cart'][$productId], $_SESSION['cart'])]);
}
function subTotalCart($pdo, $productId, $cartElement)
{
    $product = getDetailOfProduct($pdo, $productId);
    $priceTTC = $product['priceTTC'] * $cartElement['quantite'];
    $priceHT = $product['priceHT'] * $cartElement['quantite'];
    $taxePrice = $product['taxePrice'] * $cartElement['quantite'];
    $subtotalPrice = [
        'subTotalTTC' => $priceTTC,
        'subTotalHT' => $priceHT,
        'subTotalTaxes' => $taxePrice,
    ];
    return $subtotalPrice;
}
function totalCart($pdo, $cart)
{
    foreach ($cart as $productId => $info) {
        $product = getDetailOfProduct($pdo, $productId);
        $priceTTC[$productId] = $product['priceTTC'] * $info['quantite'];
        $priceHT[$productId] = $product['priceHT'] * $info['quantite'];
        $taxePrice[$productId] = $product['taxePrice'] * $info['quantite'];
    };
    $totalPrice = [
        'TTC' => array_sum($priceTTC),
        'HT' => array_sum($priceHT),
        'Taxes' => array_sum($taxePrice),
    ];
    return $totalPrice;
}
function subTotalPriceById($pdo)
{
    foreach ($_SESSION['cart'] as $productId => $quantite) {
        $priceById[$productId] = subTotalCart($pdo, $productId, $quantite);
    }
    return $priceById;
}
function testIfNotEmpty()
{
    $cartTotalQuantity = 0;
    foreach ($_SESSION['cart'] as $id => $info) {
        $cartTotalQuantity += $info['quantite'];
    }
    return $cartTotalQuantity;
}
function verifyStock($pdo, $productId, $quantite) // checks the stock of given product
{
    $query = "select stock from products where products.id=$productId";

    $statement = $pdo->query($query);
    $sockOfOneproduct = $statement->fetch(PDO::FETCH_ASSOC);
    $boolean = $sockOfOneproduct['stock'] >= $quantite;
    return $boolean;
}
function updateStock($pdo, $productId, $quantite) // update the stock of given product
{
    $query = "update products set `stock`= stock-$quantite where products.id=$productId";
    $statement = $pdo->prepare($query);
    $statement->execute();
}
function newOrderId($pdo) // gets the next available OrderId
{
    $query = "select max(`id`) from orders";
    $statement = $pdo->query($query);
    $lastOrderId = $statement->fetch(PDO::FETCH_ASSOC);
    $newOrderId = $lastOrderId['max(`id`)'] + 1;
    return $newOrderId;
}
function createOrder($pdo, $userId, $newOrderId) // create the order for the given Id considering Cart
{
    $query = "insert into orders (`id`, `orderDate`, `customers_id`) values ($newOrderId, Curdate() , $userId)";
    $statement = $pdo->prepare($query);
    $statement->execute();
}
function createOneLineOrderHasProduct($pdo, $newOrderId, $productId, $cartElement)
{
    $query = "insert into `order_has_products` (`order_id`, `products_id`, `amount`) VALUES ( ? , ? , ? )";
    $statement = $pdo->prepare($query);
    $statement->execute(array($newOrderId, $productId, $cartElement['quantite']));;
}
function validateCart($pdo, $userId, $newOrderId)
{
    $stockAvailable = true;
    if (testIfNotEmpty() > 0) {
        foreach ($_SESSION['cart'] as $productId => $cartElement) {
            $sockAvailable = $stockAvailable && verifyStock($pdo, $productId, $cartElement['quantite']);
        }
        if ($sockAvailable) {
            createOrder($pdo, $userId, $newOrderId);
            createOneLineOrderHasProduct($pdo, $newOrderId, $productId, $cartElement);
            foreach ($_SESSION['cart'] as $productId => $cartElement) {
                updateStock($pdo, $productId, $cartElement['quantite']);
            }
        } else {
            echo 'no stock';
        }
    }
}
