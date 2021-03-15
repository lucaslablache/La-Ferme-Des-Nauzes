<?php
require_once 'Vue/vue.php';

class ControleurLogin
{
    private $userManager;

    public function __construct($_url)
    {
        if (count($_url) === 1) 
        {
            $this->login();
        }
        else
        {
            throw new Exception('Page not found');
        }
    }
    // role : 
    // 0 = utilisateur
    // 1 = admin
    public function login()
    {
        if (isset($_POST['login']) && !(empty($_POST['username'])) && !(empty($_POST['password'])))
        {
            var_dump('salut');
            $this->userManager = new User();
            $userDB = $this->userManager->getUser($_POST['username']);

            if (password_verify($_POST['password'] ,$userDB['mot_de_passe']))
            {
                $_SESSION['valid'] = true;
                $_SESSION['logged'] = true;
                $_SESSION['timeout'] = time(300);
                $_SESSION['nom'] = $userDB['nom'];
                $_SESSION['prenom'] = $userDB['prenom'];
                $_SESSION['email'] = $_POST['username'];
                if ($userDB['role'] == 1)
                {
                    $_SESSION['role'] = 1;
                    $loginMsg = 'You have entered valid user name and password';
                    header('Location: /admin');
                }
                else 
                {
                    //connection classqiue
                    $_SESSION['role'] = 0;
                    header('Location: /');
                }
            }
            else 
            {
                $errorMsg = 'Vous avez entré un mauvais mot de passe.';
                $vue = new Vue("Login");
                $vue->generer([
                    'errorMsg' => $errorMsg
                ]);
            }
        }
        else 
        {
            $errorMsg = '';
            $vue = new Vue("Login");
            $vue->generer([
                'errorMsg' => $errorMsg
            ]);
        }
    }
}
