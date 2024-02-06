<?php
echo '<br>-delete from cart controller';

$productId=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
deleteProductFromCart($productId);
header('Location: /?action=cart');