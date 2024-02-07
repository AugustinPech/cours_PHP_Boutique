<!--<div class="row">-->
    <section class="row">
        <h2><?=$product["name"]?></h2>
        <article class="col d-flex">
            <img src="https://placehold.co/160x200" alt="photo du produit : <?=$product["name"]?>" width="160">
            <div class="d-flex flex-column justify-content-between px-3">
                <p><?=$product["description"]?></p>
                <div>
                    <div class="pb-3">Prix à l'unité : <?=$product["price"]?> €</div>
                    <form action="/index.php?action=cart" method="post">
                        <label>Quantité :</label>
                        <input type="hidden" name="id" id="id" value="<?=$product['id']?>">
                        <input type="number" name="quantity" id="quantity" min="1" value="1" style="width: 4em">
                        <input type="submit" value="Ajouter au panier"><br>
                    </form>
                </div>
            </div>
        </article>
    </section>
<!--</div>-->