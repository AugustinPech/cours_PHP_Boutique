
<h2>Mon Panier</h2>
<div class="container">
    <?php foreach ($_SESSION['cart'] as $id => $quantity) :
        $item = $products["$id"]?>
        <article class="row">
            <img src="https://placehold.co/100x100" class="col" width="100">
            <h4 class="col"><?=$item['name']?></h4>
        </article>
    <?php endforeach;?>
</div>