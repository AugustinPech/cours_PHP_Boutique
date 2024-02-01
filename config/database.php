<?php
$user = 'regnilo';
$pass = 'Cash2023*';









try
{
    $dataBaseLink = new PDO ('mysql:host=boutique.local;dbname=boutique', $user, $pass);
//todo: clean code
//    foreach ($db->query('SELECT * FROM Categories') as $row)
//    {
//        print_r($row);
//    }
}
catch (PDOException $e)
{
    print "Erreur :" . $e->getMessage() . "<br/>";
    die;
}
?>

















