<?php
echo '<br>-- productView';
$metatitle = $product['title'];
$metadescription = $product['description'];
include '../ressources/views/layouts/head.tpl.php';
include '../ressources/views/layouts/header.tpl.php';

?>
<div class="d-flex flex-column px-5 col-12">
    <h2 class="border-bottom">
        <?php echo $product['title']; ?>
    </h2>
    <div class="d-flex flex-row justify-content-around">
        <img src="img/product.avif" alt="product" class="col-4 me-5">
        <div class="d-flex flex-column justify-content-between  p-2 w-100">
            <div><?php echo $product['description']; ?></div>
            <div class="d-flex flex-row justify-content-around w-100">
                <div>
                    Prix
                    <?php echo $product['priceHT'];?>
                    +(
                    <?php echo $product['taxeRate'];?>
                    %) =
                    <?php echo $product['priceTTC']; ?>
                </div>
                <div><form method="post" action="/?action=cart">
                    <label for="quantite">Quantité</label>
                    <input name= "quantite" type="number" min="1" value="1">
                    <input type="submit" name="addToCart" class="btn btn-dark" value="Ajouter au panier" />
                </form></div>
            </div>
        </div>
    </div>
</div>
<?php
include '../ressources/views/layouts/footer.tpl.php';
