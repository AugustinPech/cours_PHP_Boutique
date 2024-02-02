<?php
$name = "boutique_owner";
$password = "Tassadar-26";
$pdo = new PDO('mysql:host=boutique.local;dbname=boutique', $name, $password);
global $pdo;