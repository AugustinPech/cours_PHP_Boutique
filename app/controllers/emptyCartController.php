<?php
if ($debugModeOnOff) { echo '<br>-empty cart controller';}

emptyCart();
header('Location: /?action=Accueil');