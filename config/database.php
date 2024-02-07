<?php
$user = 'regnilo';
$pass = 'Cash2023*';







try
{
    $dataBaseLink = new PDO ('mysql:host=boutique.local;dbname=boutique', $user, $pass);
}
catch (PDOException $e)
{
    print "Erreur :" . $e->getMessage() . "<br/>";
    die;
}


















