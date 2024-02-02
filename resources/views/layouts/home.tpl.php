<?php
$metaTitle = 'Hello World';
include('../resources/views/layouts/header.tpl.php');
?>

<?php if (empty($listProducts)): ?>
    <p>Aucun article disponible pour le moment.</p>
<?php else: ?>
    <section>
        <?php foreach ($listProducts as $article): ?>
            <a href="/?action=show&id=<?= $article['id']; ?>"
               style="text-decoration:none">
            <article style = "text-align:center;border:1px solid black;">

                    <h2>
                        <?= $article['title']; ?>
                    </h2>
                    <p>Catégorie : <?= $article['name']; ?> - Plus que <?= $article['stock']; ?> en stock.</p>
                    <img src="<?= $article['path_img'] ?>" style="width:10% "/>
                    <p><?= $article['ttc']; ?>€ TTC </p>

            </article>
            </a>
        <?php endforeach; ?>
    </section>
<?php endif; ?>

<?php
include('../resources/views/layouts/footer.tpl.php');
?>