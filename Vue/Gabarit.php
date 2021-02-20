<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>La ferme des Nauzes</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap Table -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css">
    <!-- feuille de style -->
    <link rel="stylesheet" href="/Assets/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="/Assets/js/carroussel-ratio.js"></script>
    <script src="/Assets/js/check-time-interval.js"></script>
    <script src="/Assets/js/recettes-wizard.js"></script>
    <!--Load WYSIWYG-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.23.0/trumbowyg.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.23.0/langs/fr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.23.0/ui/trumbowyg.min.css">
    <script src="/Assets/js/WYSIWYG.js"></script>
    


</head>

<body>
  <div class="bgblanc">
      <div class="container">
          <header class="">
            <nav class="navbar navbar-expand-lg navbar-light bgvert sticky-top">
                <a class="navbar-brand" href="/">
                    <img src="/Assets/img/Logo_Couleur-texte.png" class="logo-navbar" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Marché
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/marche/agenda">Dates prochains marchés</a>
                        <a class="dropdown-item" href="/marche/panier">Réserver mon panier</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Recettes
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/recette/hiver">Hiver</a>
                        <a class="dropdown-item" href="/recette/printemps">Printemps</a>
                        <a class="dropdown-item" href="/recette/ete">Ete</a>
                        <a class="dropdown-item" href="/recette/automne">Automne</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Informations
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="/info/informations">Informations</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/info/partenaire">Collaborateurs</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/info/histoire">Histoire de la ferme</a>
                        </div>
                    </li>
                    <?php 
                    if(isset($_SESSION['logged']) && $_SESSION['logged']) 
                    {
                        ?>
                        <li class="nav-item dropdown">
                          <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administration
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/admin/agenda">Agenda</a>
                            <a class="dropdown-item" href="/admin/panier">Panier</a>
                            <a class="dropdown-item" href="/admin/recettes">Recettes</a>
                            <a class="dropdown-item" href="/admin/informations">Informations</a>
                            <a class="dropdown-item" href="/admin/reservations">Reservations</a>
                          </div>
                        </li>
                    <?php
                    }
                    else
                    {
                      ?>
                      <li class="nav-item">
                          <a class=" nav-link" href="/admin">Administration</a>
                      </li>
                      <?php
                    }
                    ?>
                    
                    <?php 
                    if(isset($_SESSION['logged']) && $_SESSION['logged']) 
                    {
                        ?>
                           <li class="nav-item">
                               <a class=" nav-link" href="/logout">Se déconnecter</a>
                           </li>
                        <?php
                     }
                     ?>
                  </ul>
                </div>
              </nav>
            <!-- nav petits écrans a prévoir ? -->

          </header>


          <div class="">
              <section class="">
                  <?= $contenu ?>
              </section>
          </div>

          <footer class="container bgvert">
              <div class="row text-center py-2 justify-content-between mx-0">
                <ul class="list-unstyled list-inline text-center mb-0">
                    <li class="list-inline-item">
                      <a href="#" class="btn btn-outline-white btn-rounded"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="btn btn-outline-white btn-rounded"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="btn btn-outline-white btn-rounded"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <a href="#" class="btn btn-outline-white btn-rounded">Haut de page</a>
              </div>
              <!-- Copyright -->
              <div class="footer-copyright text-center py-3">
                  <a href="#" class="lien">La ferme des Nauzes </a>© 2020
              </div>

          </footer>
      </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
  <!-- calendrier test -->
  
</body>
