<?= 'show.php';


foreach ($infoSpecificProduct as $value) : ?>


    <h3><?= $value ['title'] ?></h3>
    <br>
    <span><?= $value ['description'] ?></span>
    <br>
    <span>Prix HT: <?= $value ['priceTTC'] ?>€ TTC</span>
    <br>
    <span>Poids: <?= $value ['weight'] ?> Kg</span>

<form action = "/?action=cart" method ="post">

    <input type="hidden" name="id" value="<?= $value ['id'] ?>">
    <input type="number" name="quantity">
    <input type="submit" value="Ajouter au panier">


</form>

<?php endforeach ?>