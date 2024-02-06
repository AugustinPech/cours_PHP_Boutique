<?php
session_start();
$compteMenu=0;
$_SESSION['compteMenu']= $compteMenu;
var_dump($_SESSION);
$listProducts = products($dataBaseLink,10);
require'../resources/views/layouts/home.tpl.php';
