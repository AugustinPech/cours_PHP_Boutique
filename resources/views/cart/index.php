
<h2>Mon Panier</h2>
<aside class="row">
    <h3 class="col-6">Produit</h3>
    <h3 class="col-2">Prix unitaire</h3>
    <h3 class="col-2">Quantité</h3>
    <h3 class="col-2">Total</h3>
</aside>
<div class="container">
    <form action="" name="">
        <?php
        if (isset($_SESSION['cart'][0])):
            foreach ($_SESSION['cart'] as $key => $value) :
                $item = $products[$value['id']]?>
                <article class="row border p-2">
                    <div class="col-2">
                        <img src="https://placehold.co/100x100" class="col" width="100">
                    </div>
                    <div class="col-4">
                        <h4 class="col"><?=$item['name']?></h4>
                    </div>
                    <div class="col-2">
                        <p><?=$item['price']?></p>
                    </div>
                    <div class="col-2">
                        <input type="number" min="0" value="<?=$value['quantity']?>" style="width: 4em">
                    </div>
                    <div class="col-2">
                        <p><?=$item['price']*$value['quantity']?></p>
                    </div>
                </article>
            <?php endforeach;?>

        <?php else: ?>
            <p>Votre panier est vide.</p>
        <?php endif;?>
    </form>
</div>