<?php
include '../doc/variables.php';
$pdo = new PDO('mysql:host=shop.local;dbname=shop', $user, $pass);
global $pdo;