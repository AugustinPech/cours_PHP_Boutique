<?php

if ($debugModeOnOff) { echo '<br>-- HomeView';}
$metatitle = 'ForKIT Home Page';
$metadescription = 'Home - Affiche le catalogue de produits';
include '../ressources/views/layouts/head.tpl.php';
include '../ressources/views/layouts/header.tpl.php';
?>

<div class="d-flex col-12 flex-row flex-wrap justify-content-around ">
    <?php if (count($getProducts) > 0) : ?>
        <?php foreach ($getProducts as $product) : ?>
            <div class=" col-3 border border-dark d-flex flex-column align-items-center ">
                <p><a href="/?action=product&id=<?php echo $product['id']; ?>">
                    <?php echo $product['title']; ?>
                </a></p>

                <img src="img/product.avif" alt="product" class="col-10 m-1">

            </div>
        <?php endforeach;
    else : ?><div> Aucun Produits à afficher.</div>
    <?php endif; ?>
</div>

<div class="d-flex col-12 flex-column flex-wrap justify-content-around align-items-center">
    <p class="text-danger"><?php if (filter_input(INPUT_GET, 'delete', FILTER_SANITIZE_SPECIAL_CHARS) == 1) {
                                echo "Article n°" . filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS) . " supprimé";
                            } elseif (null !== filter_input(INPUT_GET, 'delete', FILTER_SANITIZE_SPECIAL_CHARS) && filter_input(INPUT_GET, 'delete', FILTER_SANITIZE_SPECIAL_CHARS) == 0) {
                                echo 'fail';
                            } ?></p>
    <div class="d-flex col-12 flex-row flex-wrap justify-content-around ">
        <form method="post">
            <input type="submit" name="moreOrLessProducts" class="btn btn-dark" value="Afficher Plus de Produits" />
            <input type="submit" name="moreOrLessProducts" class="btn btn-dark" value="Afficher Moins de Produits" />

        </form>
    </div>
</div>

<?php
include '../ressources/views/layouts/footer.tpl.php';
