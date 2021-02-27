<section>
    <h4>Formulaire d'insciption</h4>
    <form class="form-signin" role="form"
      action="/" method="post">
        <label for="email">Entrez votre adresse Mail</label>
        <input type = "email" class="form-control"
           id="email" size="30" placeholder="E-mail"
           required autofocus>
        </br>

        <label for="nom">Entrez votre Nom</label>
        <input type = "text" class="form-control"
           id="nom" placeholder="Nom"
           required>
        </br>

        <label for="prenom">Entrez votre Prenom</label>
        <input type = "text" class="form-control"
           id="prenom" placeholder="Prenom"
           required>
        </br>

        <label for="password">Entrez votre mot de passe</label>
        <input type="password" class="form-control"
           name="password" placeholder="Mot de passe"
           required>
        </br>

        <label for="password_confirm">Confirmez votre mot de passe</label>
        <input type="password_confirm" class="form-control"
           name="password_confirm" placeholder="Mot de passe"
           required>
        </br>

        <button class="btn btn-lg btn-primary btn-block" type="submit"
            name="inscription">S'inscrire</button>
    </form>
</section>