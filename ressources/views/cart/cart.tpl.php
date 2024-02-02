<?php
echo '<br>-- cartView';
$metatitle = 'cart';
$metadescription = 'Affiche le contenu du panier';
include '../ressources/views/layouts/head.tpl.php';
include '../ressources/views/layouts/header.tpl.php';

?>


<form class="d-flex flex-column flex-lg-row justify-content-around" method="post" action="/">
    <input class="btn btn-dark" type="submit" name="emptyCart" value="Vider le panier" />
</form>
<?php
include '../ressources/views/layouts/footer.tpl.php';
