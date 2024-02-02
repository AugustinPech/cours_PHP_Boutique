<?php
echo '<br>-- productView';
$metatitle = $product['title'];
$metadescription = "$metatitle : ".$product['description'];
var_dump($product);
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
            <div class="d-flex flex-lg-row flex-column justify-content-around w-100">
                <div class="m-2" >
                    Prix HT
                    <?php echo $product['priceHT'];?>
                    +(TVA
                    <?php echo $product['taxeRate'];?>
                    %) =
                    <?php echo $product['priceTTC']; ?>
                    €
                </div>
                <div class="col-5" >
                    <?php if ($product['stock']>0) :?>
                        <form class="d-flex flex-column flex-lg-row justify-content-around" method="post" action="/?action=cart&id=<?php echo $product['id']; ?>">
                            <div><label class="" for="quantite">Quantité</label>
                            <input class="col-5" name= "quantite" type="number" min="1" value="1"></div>
                            <input class="btn btn-dark" type="submit" name="" value="Ajouter au panier"/>
                        </form>
                    <?php else :?>
                        <p>Cette article n'est plus disponible</p>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../ressources/views/layouts/footer.tpl.php';
