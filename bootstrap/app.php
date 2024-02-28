
<?php
// Part 1
// ----- Ouverture de la session
session_start();
// End Part 1

include '../config/database.php';
include '../app/persistances/product.php';
include '../app/persistances/cart.php';
=======
<?php
session_start();
require_once '../config/database.php';
require_once '../app/persistences/product.php';
require_once '../app/persistences/cart.php';
require_once '../app/persistences/command.php';
