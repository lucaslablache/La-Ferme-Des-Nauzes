<?php

require_once 'Vue/vue.php';

class ControleurRecette
{
    private $recetteManager;
    private $saisonBDD;

    public function __construct($_url)
    {
        //todo: manage url length
        if ($_url[1] === 'hiver' || $_url[1] === 'printemps' ||
            $_url[1] === 'ete' || $_url[1] === 'automne')

        {
            $this->saison($_url[1]);
        }
        else
        {
            throw new Exception('Page not found');
        }
    }

    public function saison(String $saison)
    {
        //transformation de la string en chiffre
        // 0=> Hiver
        // 1=> Printemps
        // 2=> Ete
        // 3=> Automne
        if ($saison === 'hiver') 
        {
            $saisonBDD = 0;
        }
        elseif ($saison === 'printemps') 
        {
            $saisonBDD = 1;
        }
        elseif ($saison === 'ete') 
        {
            $saisonBDD = 2;
        }
        elseif ($saison === 'automne') 
        {
            $saisonBDD = 3;
        }

        // Recuperation des datas depuis la bdd
        $this->recetteManager = new Recette();

        $vue = new Vue("Recette");

        $recettes = [];

        $recettes = $this->recetteManager->getSeasonRecettes($saisonBDD);

        $vue->generer([
            'saison' => $saison,
            'recettes' => $recettes
        ]);
    }
}