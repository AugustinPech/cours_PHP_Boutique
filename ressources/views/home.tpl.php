<?php
$metatitle = 'ForKIT Home Page';
$metadescription = 'Home - Affiche le catalogue de produits';
require_once '../ressources/views/layouts/header.tpl.php';
?>

<div class="d-flex col-12 flex-row flex-wrap justify-content-around ">
    <?php if (count($getProducts) > 0) : ?>
        <?php foreach ($getProducts as $product) : ?>
            <div class=" col-3 border border-dark d-flex flex-column align-items-center ">
                <p><a href="/?action=product&id=<?php echo $product['id']; ?>">
                    <?php echo $product['title']; ?>
                </a></p>
                <img src="https://placehold.co/120x120" alt="product" class="col-10 m-1">
            </div>
        <?php endforeach;
    else : ?><div> Aucun Produits à afficher.</div>
    <?php endif; ?>
</div>
<?php
include '../ressources/views/layouts/footer.tpl.php';
