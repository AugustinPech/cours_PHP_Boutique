<?php session_start();
//include '../app/persistences/cartData.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boutique</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>

<div class="d-flex flex-row justify-content-center justify-content-around">
    <h2><a href="/"> Home </a></h2>
    <h2><a href="/?action=cart"> Cart </a></h2>
    <div>
<!--    <span>  Vous avez --><?php //= totalCart($pdo)['totalProducts']?><!-- produit(s)  </span>-->
<!--    <span>  Prix total = --><?php //= totalCart($pdo)['totalPrice']?><!--€  </span>-->
</div>
</div>






</body>
</html>