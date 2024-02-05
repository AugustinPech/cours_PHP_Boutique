

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <title>jonShop</title>
</head>

<body class="container d-flex flex-column">

    <header class="row">
        <nav class="navbar navbar-expand-lg py-3">
            <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold"></a>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="/" class="nav-link text-uppercase font-weight-bold">Accueil</a> </li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">A propos</a></li>
                    </ul>
                </div>
                <?php
                if (!isset($_GET['action'])):?>
                    <div class="navbar-link"><a href="/index.php?action=cart" >Mon panier</a></div>
                <?php else :
                    if ($_GET['action'] != 'cart') :?>
                        <div class="navbar-link"><a href="/index.php?action=cart" >Mon panier</a></div>
                    <?php endif;
                endif;?>
            </div>
        </nav>
    </header>

