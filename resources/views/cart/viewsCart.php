<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votre panier</title>
</head>
<body>

<header class="d-flex flex-row justify-content-center justify-content-around">
    <span> Nom Produit</span>
    <span> Quantité</span>
    <span>Prix Unitaire</span>
    <span> Prix total</span>
</header>
<form action="/?action=updateCart" method="POST">
    <div>

        <?php if (!empty($_SESSION['cart'])): ?>

            <?php foreach ($_SESSION['cart'] as $idProduct => $quantity): ?>

                <div class="d-flex flex-row justify-content-center justify-content-around">
                    <span>    <?= getInfoProductById($pdo, $idProduct)['title']; ?></span>


                    <input type="number" name="quantity" value=<?= $quantity ?>>
                    <input type="hidden" name="id" value="<?= $idProduct ?>">


                    <span>    <?= getInfoProductById($pdo, $idProduct)['priceTTC']; ?> </span>

                    <?php $totalPrice = ($quantity * getInfoProductById($pdo, $idProduct)['priceTTC']); ?>
                    <span> <?= $totalPrice ?> </span>

                </div>

            <?php endforeach; ?>
            <span class="d-flex justify-content-end"> <?= totalCart($pdo)['totalPrice'] ?>€ au total</span>
        <?php endif ?>

    </div>
    <br>

    <div class="d-flex flex-row justify-content-center justify-content-around">

        <button type="submit">Modifier le panier</button>

        <a href='/?action=deleteCart'>Effacer les données du panier</a>
    </div>


</form>
<br>
</body>
</html>









