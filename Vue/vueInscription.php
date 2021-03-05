<script src="/Assets/js/inscription-check.js"></script>
<section>
   <h4>Formulaire d'insciption</h4>
   <?php if($error_msg !== '') : ?>
      <div><?= $error_msg ?></div>
   <?php endif; ?>
   <form class="form-subbing" role="form"
      action="/inscription" method="post">
      <label for="email">Entrez votre Adresse Mail</label>
      <input type = "email" class="form-control"
         id="email" name="email" size="30" placeholder="E-mail"
         required autofocus>
      </br>

      <label for="nom">Entrez votre Nom</label>
      <input type = "text" class="form-control"
        id="nom" name="nom" placeholder="Nom"
         required>
      </br>

      <label for="prenom">Entrez votre Prenom</label>
      <input type = "text" class="form-control"
        id="prenom" name="prenom" placeholder="Prenom"
         required>
      </br>

      <label for="password">Entrez votre mot de passe</label>
      <input type="password" class="form-control"
         name="password" id="pass-source" placeholder="Mot de passe"
          required>
      </br>

      <label for="password_confirm">Confirmez votre mot de passe</label>
      <input type="password" class="form-control"
         name="password_confirm" id="pass-confirm" placeholder="Mot de passe"
         required>
      </br>

      <input class="btn btn-lg btn-primary btn-block" type="submit"
         name="inscription" id="confirm-subscribe" value="Inscription">
   </form>
</section>