<?php
if ($debugModeOnOff) {
    echo '<br>-commandController.php';
    var_dump($_POST);
}

$newOrderId = filter_input(INPUT_GET, 'newOrderId', FILTER_SANITIZE_NUMBER_INT);
$userId = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);


validateCart($pdo, $userId, $newOrderId);
header('Location: /?action=Accueil');