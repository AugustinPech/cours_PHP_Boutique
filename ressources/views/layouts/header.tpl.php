  <header id="header">
    <nav class="navbar navbar-expand-md">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img class="col-4" src="img/Logo.png" alt="Logo ForKIT">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link disabled" aria-current="page" href="">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="">Notre équipe</a>
            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="">Boutique</a>
            </li>
          </ul>
          <div class="d-flex gap-2">
            <?php if ($debugModeOnOff) : ?>
              <a href="/?action=Accueil&debug=0" class="btn">Hide debug stuff</a>
            <?php else : ?>
              <a href="/?action=Accueil&debug=1" class="btn">Show the debug mess</a>
            <?php endif; ?>
            <a href="/?action=contact" class="btn btn-light">Contactez nous</a>
            <a href="/?action=cart" class="btn btn-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"></path>
              </svg>
              <?= isset($_SESSION['cart']) ? testIfNotEmpty() : 0; ?>
            </a>
          </div>

        </div>
      </div>
    </nav>
  </header>