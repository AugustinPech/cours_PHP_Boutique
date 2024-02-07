<?php
?>

<section class="row d-flex">
    <h2 class="p-5">Categories</h2>
    <?php foreach ($categories as $category) : ?>
        <div class="col">
            <a href="/index.php?action=category&id=<?=$category['id']?>">
                <img src="img/product/imgCat<?=$category['id']?>.webp" alt="photo de la categorie : <?=$category["name"]?>" width="300" height="200">
            </a>
            <h3><a href="/index.php?action=category&id=<?=$category['id']?>"><?=$category["name"]?></a></h3>
        </div>
    <?php endforeach; ?>
</section>
