<?php
echo '<br>-- cartView';
$metatitle = 'cart';
$metadescription = 'Affiche le contenu du panier';
include '../ressources/views/layouts/head.tpl.php';
include '../ressources/views/layouts/header.tpl.php';
?>
<main class="d-flex flex-column justify-content-center align-items-center mx-5">
    <table class="table table-striped table-hover" style="text-align:center ; vertical-align:middle">
        <thead>
            <tr>
                <th scope="col" colspan="2" style="width:70%;text-align:left ; vertical-align:middle""><h1>Panier</h1></th>
                <th scope=" col" style="width:10%">
                    <p>Prix unitaire</p>
                    <p> (HT) TTC €</p>
                </th>
                <th scope="col" style="width:10%">Quantité</th>
                <th scope="col" style="width:10%">
                    <p> Total</p>
                    <p> (HT) TTC €</p>
                </th>
            </tr>
        </thead>
        <?php foreach ($priceById as $key => $value) : ?>
            <tr>
                <td style="width:20%"><img src="img/product.avif" alt="product" class="col-4"></td>
                <td style="text-align:left"><a href="/?action=product&id=<?php echo $key; ?>">
                        <h6><?= getDetailOfProduct($pdo, $key)['title'] ?></h6>
                    </a></td>
                <td>(<?= getDetailOfProduct($pdo, $key)['priceHT'] ?>) <?= getDetailOfProduct($pdo, $key)['priceTTC'] ?> €</td>
                <td><?= $_SESSION['cart'][$key] ?></td>
                <td>(<?= $priceById[$key]['HT'] ?>) <?= $priceById[$key]['TTC'] ?> €</td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" style="text-align: right">
                <b>Total = </b>
            </td>
            <td style="text-align: center">( <?= $totalCartInfo['HT']; ?> ) <?= $totalCartInfo['TTC']; ?> €
            </td>
        </tr>
    </table>

    <form class="d-flex flex-row justify-content-end col-12" method="post" action="/?action=cart" id="actionOnCart">
        <button class="mx-1 btn btn-danger" type="submit" name="actionOnCart" value="Vider le panier"> Vider le panier</button>
        <button class="mx-1 btn btn-primary" type="submit" name="actionOnCart" value="Modifier le panier">Modifier le panier</button>
        <button class="mx-1 btn btn-success" type="submit" name="actionOnCart" value="Valider le panier">Valider le panier</button>
    </form>
<div class="h-100"><?php var_dump($_POST); var_dump($actionOnCart);?></div>
</main>
<?php
include '../ressources/views/layouts/footer.tpl.php';
