<?php
$metaTitle = ("Produit N°") . $id;
include('../resources/views/layouts/header.tpl.php');
?>
<?php if (empty($product)): ?>
    <p>Aucun produit disponible pour le moment.</p>
<?php else: ?>
    <section>
        <article>
            <form action="/?action=addProductCart" method="POST" class="ajoutAuPanier">
                <h2>
                    <p> Produit : <?= $product['title']; ?></p>
                </h2>
                <img src="<?=$product['path_img']?>"">
                <p>Catégorie : <?= $product['name']; ?> - Plus que <?= $product['stock']; ?> en stock. Poids
                    : <?= $product['weight']; ?> kilos.</p>
                <p>Déscription : <?= $product['description']; ?></p>
                <p>
                    Ref : <?= $product['id']; ?>
                </p>
                <p>HT = <?= $product['ht']; ?>€ + TVA = <?= $product['tva']; ?>€ = <?= $product['ttc']; ?>€
                    TTC </p>
                <?php if ($product['stock'] > 0) : ?>
                <label for="nombreArticle">Quantité </label>
                <input type="number" id="nombreArticle" name="nbArticle" class="nombreArticle" min="1"
                       max="<?= $product['stock']; ?>" value="1"/>
                <input type="submit" value="Ajouter dans le Chariot"/>
                <input type="hidden" name="id" value="<?= $product['id']; ?>">
            </form>
            <?php else: ?>
                <div>Cette article n'est plus d'isponible</div>
            <?php endif; ?>
        </article>
    </section>
<?php endif; ?>
<?php
include('../resources/views/layouts/footer.tpl.php');
?>