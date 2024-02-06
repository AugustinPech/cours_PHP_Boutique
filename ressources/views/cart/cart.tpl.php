<?php
echo '<br>-- cartView';
$metatitle = 'cart';
$metadescription = 'Affiche le contenu du panier';
include '../ressources/views/layouts/head.tpl.php';
include '../ressources/views/layouts/header.tpl.php';
?>
<main class="mx-5">
    <table class="table table-striped table-hover" style="text-align:center ; vertical-align:middle">
        <thead>
            <tr>
                <th scope="col" colspan="2" style="width:70%;text-align:left ; vertical-align:middle""><h1>Panier</h1></th>
                <th scope=" col" style="width:10%">
                    <p>Prix unitaire</p>
                    <p> (HT) TTC €</p>
                </th>
                <th scope="col" style="width:10% ; vertical-align:middle">Quantité</th>
                <th scope="col" style="width:10%">
                    <p> Total</p>
                    <p> (HT) TTC €</p>
                </th>
            </tr>
        </thead>
        <?php if (array_sum($_SESSION['cart']) > 0) : foreach ($priceById as $key => $value) : ?>
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
    <div class=" d-flex flex-row justify-content-end ">
        <a class=" mx-1 btn btn-secondary" href="/?action=emptyCart"> Vider le panier</a>
        <a class=" mx-1 btn btn-danger" href="/?action=Accueil"> Continuer les achats</a>
        <a class="mx-1 btn btn-primary" href="/?action=modifyCart">Modifier le panier</a>
        <a class="mx-1 btn btn-success" href="/?action=validateCart">Valider le panier</a>
    </div>
</main>
<?php
include '../ressources/views/layouts/footer.tpl.php';
