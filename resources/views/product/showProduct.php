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


    <input type="number" name="quantity">
    <input type="submit" value="Ajouter au panier">


</form>

<?php endforeach ?>

<?php
echo "eheheh";
if (!empty($_POST)){
    var_dump ($_POST);
}
var_dump ($_POST)



//php var_dump($infoProduct); ?>