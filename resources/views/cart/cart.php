<?php
//$metaTitle =("Commande N°") . $_SESSION['cart']['id'];
include('../resources/views/layouts/header.tpl.php');
?>
    <form action="/?action=cart">
        <?php foreach ($_SESSION['cart'] as $product) { ?>

            <article>
                <h1>
                    id : <?= $product['id'] ?>
                </h1>
                <p>
                    Qté : <input type="number"
                                 id="nombreArticle"
                                 name="nbArticle" class="nombreArticle" min="1"
                                 max="<?= $productId['stock']; ?>" value="<?= $product['nbArticle'] ?>"/>
                </p>
            </article>
        <?php } ?>
        <input type="submit" value="MAJ du Chariot"/>
    </form>
<?php
include('../resources/views/layouts/footer.tpl.php');
?>