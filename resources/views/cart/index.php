
<h2>Mon Panier</h2>
<aside class="row">
    <h4 class="col-6">Produit</h4>
    <h4 class="col-2">Prix unitaire</h4>
    <h4 class="col-2">Quantité</h4>
    <h4 class="col-2">Total</h4>
</aside>
<div class="container">
    <form action="/index.php?action=cart" method="post">
        <?php
        if (!empty($_SESSION['cart'])):
            foreach ($cart as $cartLine):?>
<!--            <pre>-->
<!--                --><?php //var_dump($cartLine);?>
<!--            </pre>-->
                <article class="row border p-2">
                    <div class="col-2" aria-description="photo du produit">
                        <img src="https://placehold.co/100x100" class="col" width="100">
                    </div>
                    <div class="col-4 m-auto" aria-description="nom du produit">
                        <h5 class="col"><?=$cartLine['name']?></h5>
                    </div>
                    <div class="col-2 m-auto" aria-description="prix du produit">
                        <p><?=$cartLine['price']?> €</p>
                    </div>
                    <div class="col-1 m-auto" aria-description="quantité de produit">
                        <input type="number" name="<?=$cartLine['id']?>" value="<?=$cartLine['quantity']?>" style="width: 4em"></input>
                    </div>
                    <div class="col-1 m-auto">
                        <a id="deleteProduct" href="/index.php?action=cart&id=<?=$cartLine['id']?>" aria-description="croix pour supprimer">X</a>
                    </div>
                    <div class="col-2 m-auto" aria-description="prix total pour le produit">
                        <p class="text-right"><?=$cartLine['price']*$cartLine['quantity']?> €</p>
                    </div>
                </article>
            <?php endforeach;?>
            <div class="row justify-content-end border" aria-description="prix total du panier">
                <p class="col-1">=</p>
                <p class="col-2 text-right"><?=$cartTotal['total']?> €</p>
            </div>
            <div class="row justify-content-between border p-3">
                <div class="col-2" aria-description="bouton mettre à jour le panier">
                    <input type="submit" name="modify" value="Modifier mon panier">
                </div>
                <div class="col-2" aria-description="bouton valider le panier">
                    <input type="submit" name="validate" value="Valider mon panier">
                </div>
            </div>
        <?php else: ?>
            <p>Votre panier est vide.</p>
        <?php endif;?>
    </form>
</div>