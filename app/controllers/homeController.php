<?php
require '../app/persistences/boutiqueData.php';
$listProducts = products($dataBaseLink,10);
require'../resources/views/layouts/home.tpl.php';
