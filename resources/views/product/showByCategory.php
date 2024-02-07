<?php
?>

<section class="row">
    <h2>Nos <?=$category['name']?> :</h2>
    <?php foreach ($wholeCategory as $key => $product) : ?>
        <div class="col">
            <a href="/index.php?action=product&id=<?=$product['id']?>">
                <img src="https://placehold.co/120x120" alt="photo du produit : <?=$product["name"]?>" width="120"/>
            </a>
            <h4><a href="/index.php?action=product&id=<?=$product['id']?>"><?=$product["name"]?></a></h4>
        </div>
    <?php endforeach; ?>
</section>
