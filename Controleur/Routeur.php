<?php
require_once 'Controleur/ControleurAccueil.php';
require_once 'Vue/Vue.php';

class Routeur
{
    private $ctrlAccueil;

    public function __construct()
    {
        $this->ctrlAccueil = new ControleurAccueil();
    }

    public function routerRequete()
    {
        try
        {
            if (FALSE) 
            {
                # code...
            }

            else
            {
                $this->ctrlAccueil->accueil();
            }
        }
        catch (Exception $e)
        {
            $this->erreur($e->getMessage());
        }
    }

    private function erreur ($msgErreur)
    {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}