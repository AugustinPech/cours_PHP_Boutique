<?php
echo '<br>-- cartView';
$metatitle = 'cart';
$metadescription = 'Affiche le contenu du panier';
include '../ressources/views/layouts/head.tpl.php';
include '../ressources/views/layouts/header.tpl.php';
?>
<main class="mx-5">
    <form action="/?action=modifyCart" method="post" id="modify">
    <table class="table table-striped table-hover" style="text-align:center ; vertical-align:middle">
        <thead>
            <tr>
                <th scope="col" colspan="2" style="width:70%;text-align:left ; vertical-align:middle""><h1>Panier</h1></th>
                <th scope=" col" style="width:10%">
                    <p>Prix unitaire</p>
                    <p> (HT) TTC €</p>
                </th>
                <th scope="col" style="width:10% ; vertical-align:middle">
                    Quantité
                </th>
                <th scope="col" style="width:10%">
                    <p> Total</p>
                    <p> (HT) TTC €</p>
                </th>
            </tr>
        </thead>
        <?php if (array_sum($_SESSION['cart']) > 0) : foreach ($priceById as $productId => $price) : ?>
                <tr>
                    <td style="width:20%">
                        <img src="img/product.avif" alt="product" class="col-4">
                    </td>
                    <td style="text-align:left"><a href="/?action=product&id=<?php echo $productId; ?>">
                            <h6><?= getDetailOfProduct($pdo, $productId)['title'] ?></h6>
                        </a></td>
                    <td>
                        (<?= getDetailOfProduct($pdo, $productId)['priceHT'] ?>) <?= getDetailOfProduct($pdo, $productId)['priceTTC'] ?> €
                    </td>
                    <td>
                        <input class="col-4" name= "<?= $productId ?>" type="number" min="0" max="<?= getDetailOfProduct($pdo, $productId)['stock'] ?>" value="<?= $_SESSION['cart'][$productId] ?>">
                        <a class=" mx-1 btn btn-danger" href="/?action=deleteProductFromCart&id=<?= $productId ?>"> X </a>
                    </td>
                    <td>(<?= $priceById[$productId]['HT'] ?>) <?= $priceById[$productId]['TTC'] ?> €</td>
                </tr>
            <?php endforeach; ?>
                <tr>
                    <td colspan=" 4" style="text-align: right">
                        <b>Total = </b>
                    </td>
                    <td style="text-align: center">( <?= $totalCartInfo['HT']; ?> ) <?= $totalCartInfo['TTC']; ?> €
                    </td>
                </tr>
            <?php else : ?>
                <tr>
                    <th scope="col" colspan="5" style="width:100%;text-align:center ; vertical-align:middle""> - - Panier Vide - - </th>
                </tr>
                <tr>
                    <td colspan=" 4" style="text-align: right">
                        <b>Total = </b>
                    </td>
                    <td style="text-align: center">( 0 ) 0.00 €
                    </td>
                </tr>
            <?php endif; ?>

    </table>
    </form>
    <div class=" d-flex flex-row justify-content-end ">
        <a class=" mx-1 btn btn-secondary" href="/?action=emptyCart"> Vider le panier</a>
        <a class=" mx-1 btn btn-danger" href="/?action=Accueil"> Continuer les achats</a>
        <button class="mx-1 btn btn-primary" type="submit" form="modify" value="submit">Modifier le panier</button>
        <a class="mx-1 btn btn-success" href="/?action=validateCart">Valider le panier</a>
    </div>
</main>
<?php
include '../ressources/views/layouts/footer.tpl.php';
