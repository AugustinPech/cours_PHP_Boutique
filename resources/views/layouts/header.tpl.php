<?php ?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Borel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../">
    <title><?=$metaTitle?></title>
</head>

<body>
<section>
    Boutique
</section>
<section class="nav">
    <nav>
        <a href="/?action=home">Home page</a>
        <a href="/?action=cart">Chariot</a>
        <a><input href="<?session_destroy()?>" type="button" value="fin de session"></a>
    </nav>
</section>
</body>
</html>