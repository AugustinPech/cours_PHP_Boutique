<?php

if ($debugModeOnOff) { echo '<br>- Homecontroller';}

// Part 1
// ----- Gestion du nombre d'objet à afficher
$askForMoreOrLessProducts = filter_input(INPUT_POST, 'moreOrLessProducts', FILTER_SANITIZE_SPECIAL_CHARS);

$numberOfProducts = setNumberOfProductViews($askForMoreOrLessProducts);
$getProducts = getNumberOfProducts($pdo, $numberOfProducts);
// End Part 1

include '../ressources/views/home.tpl.php';
=======

$getProducts = getNumberOfProducts($pdo, 12);

require_once '../ressources/views/home.tpl.php';

