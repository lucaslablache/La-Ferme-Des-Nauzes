<form class="form-signin" role="form"
      action="/login" method="post">
    <h4 class = "form-signin-heading"><?= $errorMsg; ?></h4>
    <input type = "text" class="form-control"
           name="username" placeholder="Adresse Mail"
           required autofocus></br>
    <input type="password" class="form-control"
           name="password" placeholder="Mot de passe" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit"
            name="login">Login</button>
</form>