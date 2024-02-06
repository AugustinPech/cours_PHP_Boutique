<?php
$metaTitle = ("Produit N°") . $id;
include('../resources/views/layouts/header.tpl.php');
?>
<?php if (empty($productId)): ?>
    <p>Aucun produit disponible pour le moment.</p>
<?php else: ?>
    <section>
        <article>
            <form action="/?action=cart" method="POST" class="ajoutAuPanier">
                <h2>
                    <p> Produit : <?= $productId['title']; ?></p>
                </h2>
                <p>Catégorie : <?= $productId['name']; ?> - Plus que <?= $productId['stock']; ?> en stock. Poids
                    : <?= $productId['weight']; ?> kilos.</p>
                <p>Déscription : <?= $productId['description']; ?></p>
                <p>
                    Ref : <?= $productId['id']; ?>
                </p>
                <p>HT = <?= $productId['ht']; ?>€ + TVA = <?= $productId['tva']; ?>€ = <?= $productId['ttc']; ?>€
                    TTC </p>
                <?php if ($productId['stock'] > 0) : ?>

                <label for="nombreArticle">Quantité </label>
                <input type="number" id="nombreArticle" name="nbArticle" class="nombreArticle" min="1"
                       max="<?= $productId['stock']; ?>" value="1"/>
                <input type="submit" value="Ajouter dans le Chariot"/>
                <input type="hidden" name="id" value="<?= $productId['id']; ?>">
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