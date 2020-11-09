<?php
require_once 'Vue/Vue.php';

class Routeur
{
    private $_ctrl;

    public function routerRequete()
    {
        spl_autoload_register( function($class)
            {
                if(file_exists('Modele/'.$class.'.php'))
                {
                    require_once('Modele/'.$class.'.php');
                    //todo : gérer les erreurs quand le modele n'existe pas
                }
            }
        );

        try
        {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            //aide url
            //lafermedesnauzes/produit/fruit/citron
            //url[0]=void
            //url[1]=produit
            //url[2]=fruit
            //url[3]=citron
            $url = [];
            if( ( $_SERVER['REQUEST_URI'] !== '/La-Ferme-Des-Nauzes/') || ( $_SERVER['REQUEST_URI'] !== '/'))
            {
                $url = explode('/', filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
                array_splice($url, 0,1);
                
                $controleur = ucfirst(strtolower($url[0]));
                if($controleur == "")
                {
                    $controleur = "Accueil";
                }
                $controleurClass = "Controleur".$controleur;
                $controleurFile = "Controleur/".$controleurClass.".php";
                
                if(file_exists($controleurFile))
                {
                    require_once($controleurFile);
                    $this->_ctrl = new $controleurClass($url);
                }
                else
                {
                    throw new Exception('Page not found');
                }
            }
            else
            {
                throw new Exception('Page not found');
            }
        }
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            $this->erreur($errorMsg);
        }
    }

    private function erreur($msgErreur)
    {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}