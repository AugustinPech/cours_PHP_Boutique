<?php
$metaTitle =("Commande N°") . $id;
include('../resources/views/layouts/header.tpl.php');
var_dump($_POST);
?>

<div>
    <p>id = <?=$id?></p>
    <p>quantité = <?=$quantite?></p>
</div>
<article>
    <form>
        <h2>
            <a>
                ref : <?=$_POST['id'];?> <?= $_POST['title'];?>
            </a>
        </h2>
        <p>
            test cart
        </p>
    </form>
</article>


<?php
include('../resources/views/layouts/footer.tpl.php');
?>