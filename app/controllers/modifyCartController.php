<?php
echo '<br>-modify cart controller';

$newCart=array_map('intval',filter_input_array(INPUT_POST,FILTER_SANITIZE_NUMBER_INT));

modifyCart($newCart);

header('Location: /?action=cart');
