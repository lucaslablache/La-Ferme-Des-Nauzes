<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>La ferme des nauzes</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- feuille de style -->
    <link rel="stylesheet" href="/forteroche/assets/style_blog.css">
    <link rel="stylesheet" href="/forteroche/assets/style_media.css">
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Tiny MCE : clé api ffgps82nz925yzexn2kr8brmyoiy1fews91gx78kmhhez8wj (remplacer par no-api-key pour environement dev)-->
    <script src='https://cdn.tiny.cloud/1/ffgps82nz925yzexn2kr8brmyoiy1fews91gx78kmhhez8wj/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#myeditable-h2',
            menubar: false,
            toolbar: 'undo redo',
            forced_root_block : 'h2'
        });
    </script>
    <script>
        tinymce.init({
            selector: '#myeditable-div'
        });
    </script>

</head>

<body>
  <div class="background">
      <div class="container">

          <header class="banner">
              <img class="image image_banner" src="/forteroche/assets/AccueilAzu-01petit.jpg" alt="montagnes enneigées">

              <!-- nav petits ecrans -->
              <div class="pos-f-t nav_banner burger">
                  <div class="collapse" id="navbarToggleExternalContent">
                      <div class="xp-4 nav_burger_extend">
                          <p>
                              <a class="navbar-brand text-light" href="<?= "index.php"?>">Jean Forteroche</a>
                          </p>
                          <ul class="nav nav-tabs nav-fill nav_col">
                              <li class="nav-item">
                                  <a class="nav-link active" href="<?= "index.php"?>">Accueil</a>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sommaire</a>
                                  <div class="dropdown-menu">
                                      <a class="dropdown-item" href="<?= "index.php?action=billet&id=10"?>">Chapitre 1</a>
                                      <a class="dropdown-item" href="<?= "index.php?action=billet&id=11"?>">Chapitre 2</a>
                                      <a class="dropdown-item" href="<?= "index.php?action=billet&id=12"?>">Chapitre 3</a>
                                  </div>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-light" href="#">Biographie</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-light" href="<?= "index.php?action=login" ?>">Administration</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <nav class="navbar navbar-dark">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                  </nav>
              </div>

              <!-- nav grands ecrans -->
              <ul class="nav nav-tabs nav-fill nav_banner navigation">
                  <li class="nav-item ">
                      <a class="navbar-brand text-light" href="#">Jean Forteroche</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="<?= "index.php"?>">Accueil</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sommaire</a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?= "index.php?action=billet&id=10"?>">Chapitre 1</a>
                          <a class="dropdown-item" href="<?= "index.php?action=billet&id=11"?>">Chapitre 2</a>
                          <a class="dropdown-item" href="<?= "index.php?action=billet&id=12"?>">Chapitre 3</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" href="#">Biographie</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" href="<?= "index.php?action=login" ?>">Administration</a>
                  </li>
              </ul>
          </header>


          <div class="bg-bleu">
              <section class="pt-5">
                  <?= $contenu ?>
              </section>
          </div>

          <footer class="page-footer container">
              <div>
                  <!-- Call to action -->
                  <ul class="list-unstyled list-inline text-center py-2">
                      <li class="list-inline-item">
                          <h5 class="mb-1">Lire un autre chapitre !</h5>
                      </li>
                      <li class="list-inline-item">
                          <a href="#" class="btn btn-outline-white btn-rounded">Haut de page</a>
                      </li>
                  </ul>

              </div>
              <!-- Copyright -->
              <div class="footer-copyright text-center py-3">© 2019 Blog de
                  <a href="#"> Jean Forteroche</a>
              </div>

          </footer>
      </div>
  </div>
