<?php
?>

<section class="row d-flex">
    <h2>Categories</h2>
    <?php foreach ($categories as $category) : ?>
        <div class="col">
            <img src="https://placehold.co/120x120" alt="photo de la categorie : <?=$category["name"]?>" width="120">
            <h3><a href="/index.php?action=category&id=<?=$category['id']?>"><?=$category["name"]?></a></h3>
        </div>
    <?php endforeach; ?>
</section>
