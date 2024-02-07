<?php
if ($debugModeOnOff) {
    echo '<br>-- validate Cart view';
}
$metatitle = 'validate cart view';
$metadescription = 'page de validation de panier';
include '../ressources/views/layouts/head.tpl.php';
include '../ressources/views/layouts/header.tpl.php';
?>

<div>Commande n° <?= $newOrderId; ?></div>
<div class="d-flex flex-row align-items-center">
    <div>
        <p>Prix total (HT) TTC € </p>
    </div>
    <div>
        <p> = (<?= $totalPrice['HT']; ?>) <?= $totalPrice['TTC']; ?> €</p>
    </div>
</div>
<form action="/?action=commandController&newOrderId=<?= $newOrderId; ?>" method="post">
    <label for="id">User :</label>
    <select name="id" id="id" class="form-select" aria-label="">
        <?php foreach ($allCustomers as $customer) : ?>
            <option name="id" id="id" value="<?= $customer['id']; ?>"> Publier en tant que <?php echo $customer['name'] . '-' . $customer['firstName'] . '(' . $customer['id'] . ')'; ?></option>
        <?php endforeach; ?>
    </select>
    <button class="mx-1 btn btn-success" type="submit">Payer</button>
</form>

<?php
include '../ressources/views/layouts/footer.tpl.php';
