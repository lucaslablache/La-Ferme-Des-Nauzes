<?php

require_once 'Vue/vue.php';

class ControleurInscription
{
    private $inscriptionManager;

    public function __construct($_url)
    {
        $this->inscription();
    }

    public function inscription()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $email = Modele::clear_string($_POST['email']);
            $nom = Modele::clear_string($_POST['nom']);
            $prenom = Modele::clear_string($_POST['prenom']);
            $password = Modele::clear_string($_POST['password']);
            $password_confirm = Modele::clear_string($_POST['password_confirm']);

            $login = new Login();
            
        }

        $vue = new Vue("Inscription");
        $vue->generer([

        ]);
    }
}