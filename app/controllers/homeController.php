<?php
session_start();
$_SESSION['compteMenu']= 0;
var_dump($_SESSION);
require '../app/persistences/boutiqueData.php';
$listProducts = products($dataBaseLink,10);
require'../resources/views/layouts/home.tpl.php';
