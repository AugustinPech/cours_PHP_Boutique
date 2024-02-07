<?php
//$metaTitle =("Commande N°") . $_SESSION['cart']['id'];
global $cart;
include('../resources/views/layouts/header.tpl.php');
?>
    <form action="/?action=cart">
        <?php foreach ($cart as $product) { ?>
            <article>
                <h1>
                    Ref : <?= $product['id'] ?> <?= $product['title']; ?>
                </h1>
                <p>
                    Qté : <input type="number"
                                 id="nombreArticle"
                                 name="nbArticle" class="nombreArticle" min="1"
                                 max="100" value="<?= $product['nbArticle'] ?>"/>
                </p>
                <p>
<?php echo $product?>
<?php var_dump($_SESSION)?>
                </p>
            </article>
        <?php } ?>
        <input type="submit" value="MAJ du Chariot"/>
    </form>
<?php
include('../resources/views/layouts/footer.tpl.php');
?>



















