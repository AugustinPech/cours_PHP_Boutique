<?php
global $dataBaseLink;

$listProducts = products($dataBaseLink,10);
require'../resources/views/layouts/home.tpl.php';
