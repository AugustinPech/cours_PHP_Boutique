<?php
if ($debugModeOnOff) {
    echo '<br>-validate cart controller';
}
$newOrderId=newOrderId($pdo);
$totalPrice=totalCart($pdo, $_SESSION['cart']);
$allCustomers=getallcustomers($pdo);
include '../ressources/views/cart/validateCart.tpl.php';

if ($debugModeOnOff) : ?>
    <div class="d-flex flex-row flex-wrap col-12">
        <?php foreach ($_SESSION['cart'] as $productId => $cartElement) : ?>
            <div class="col-5">
                <?php var_dump(getDetailOfProduct($pdo, $productId)); ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php
endif;
