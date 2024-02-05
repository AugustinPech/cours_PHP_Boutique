<?php
$metaTitle ="Commande N°";
include('../resources/views/layouts/header.tpl.php');
?>


<?php
if ($_POST!=NULL){
    $quantite = $_POST['nbArticle'];
    $id = $_POST['id'];
} else {
$quantite = 0;
$id = 0;
}
?>

<div>
    <p>id = <?=$id?></p>
    <p>quantité = <?=$quantite?></p>
</div>


<?php
include('../resources/views/layouts/footer.tpl.php');
?>