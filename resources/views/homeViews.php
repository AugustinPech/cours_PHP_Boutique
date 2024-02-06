<?php


foreach ($infoProduct as $value) : ?>


    <h3><a href ="/?action=showProduct&id=<?= $value ['id'] ?>"><?= $value ['title'] ?></a></h3>
    <br>
    <span><?= $value ['description'] ?></span>
    <br>
    <span>Prix HT: <?= $value ['priceTTC'] ?>€ TTC</span>
    <br>
    <span>Poids: <?= $value ['weight'] ?> Kg</span>



<?php endforeach ?>