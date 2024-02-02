<?php
$metaTitle ="Commande N°";
include('../resources/views/layouts/header.tpl.php');
?>



<?php
$quantite = $_POST['nbArticle'];
$id = $_POST['id'];
?>
<div>
    <p>id = <?=$id?></p>
    <p>quantité = <?=$quantite?></p>
</div>


<?php
include('../resources/views/layouts/footer.tpl.php');
?>