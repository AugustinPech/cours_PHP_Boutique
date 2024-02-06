
<h2>Mon Panier</h2>
<aside class="row">
    <h4 class="col-6">Produit</h4>
    <h4 class="col-2">Prix unitaire</h4>
    <h4 class="col-2">Quantité</h4>
    <h4 class="col-2">Total</h4>
</aside>
<div class="container">
    <form action="" name="">
        <?php
        if (isset($_SESSION['cart'][0])):
            foreach ($cart as $cartLine):?>
<!--            <pre>-->
<!--                --><?php //var_dump($cartLine);?>
<!--            </pre>-->
                <article class="row border p-2">
                    <div class="col-2">
                        <img src="https://placehold.co/100x100" class="col" width="100">
                    </div>
                    <div class="col-4 m-auto">
                        <h5 class="col"><?=$cartLine['name']?></h5>
                    </div>
                    <div class="col-2 m-auto">
                        <p><?=$cartLine['price']?> €</p>
                    </div>
                    <div class="col-2 m-auto">
                        <p><?=$cartLine['quantity']?></p>
                    </div>
                    <div class="col-2 m-auto">
                        <p class="text-right"><?=$cartLine['price']*$cartLine['quantity']?> €</p>
                    </div>
                </article>
            <?php endforeach;?>
            <div class="row justify-content-end border">
                <div class="col-1">=</div>
                <div class="col-2 text-right"><?=$_SESSION['myCartAmount']['total']?> €</div>
            </div>
        <?php else: ?>
            <p>Votre panier est vide.</p>
        <?php endif;?>
    </form>
</div>