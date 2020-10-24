<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>La ferme des Nauzes</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- feuille de style -->
    <!-- <link rel="stylesheet" href="style_temp.css">
    <link rel="stylesheet" href="style_temp_media.css"> -->
    <link rel="stylesheet" href="./Assets/style.css">
    <script src="./Assets/js/carroussel-ratio.js"></script>


</head>

<body>
  <div class="bgblanc">
      <div class="container">
          <header class="">
            <!-- nav -->
            <nav class="navbar navbar-expand-lg navbar-light bgvert sticky-top">
                <a class="navbar-brand" href="#">
                    <img src="./Assets/img/Logo_Couleur-texte.png" class="logo-navbar" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class=" nav-link" href="#">Tarifs</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Recettes
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Hiver</a>
                        <a class="dropdown-item" href="#">Printemps</a>
                        <a class="dropdown-item" href="#">Ete</a>
                        <a class="dropdown-item" href="#">Automne</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Informations
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Collaborateurs</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Histoire de la ferme</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="#">Administration</a>
                    </li>
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
              <div class="row text-center py-2 justify-content-between">
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
                <!-- Call to action -->
                <a href="#" class="btn btn-outline-white btn-rounded">Haut de page</a>
              </div>
              <!-- Copyright -->
              <div class="footer-copyright text-center py-3">
                  <a href="#" class="lien">La ferme des Nauzes </a>© 2020
              </div>

          </footer>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
