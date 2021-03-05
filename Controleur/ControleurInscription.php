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
        $error_msg = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $email = Modele::clear_string($_POST['email']);
            $nom = Modele::clear_string($_POST['nom']);
            $prenom = Modele::clear_string($_POST['prenom']);
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];

            if ($email === $_POST['email'] && $nom === $_POST['nom'] && $prenom === $_POST['prenom']) 
            {
                if ($password === $password_confirm) 
                {
                    $login = new User();
                
                    $existingUser = $login->isUserCreated($email);

                    if ( !($existingUser)) 
                    {
                        $passHash = password_hash($password, PASSWORD_DEFAULT);
                        $login->insertNewUser($email, $nom, $prenom, $passHash);

                    }
                    else 
                    {
                        $error_msg = 'vous etes deja insrcit';
                    }
                }
                else 
                {
                    $error_msg = 'vos mots de passe ne se correspondent pas';
                }
                
            }
            else 
            {
                if ($email !== $_POST['email']) 
                {
                    $error_msg = 'Votre email est invalide !';
                }
                elseif ($nom !== $_POST['nom']) 
                {
                    $error_msg = 'Le nom renseigné est invalide !';
                }
                elseif ($prenom !== $_POST['prenom']) 
                {
                    $error_msg = 'Le prenom renseigné est invalide !';
                }
            }
            
        }

        $vue = new Vue("Inscription");
        $vue->generer([
            'error_msg' => $error_msg
        ]);
    }
}