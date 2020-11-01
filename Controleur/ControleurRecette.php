<?php

require_once 'Vue/vue.php';

class ControleurRecette
{

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
        // Recuperation des datas depuis la bdd

        $vue = new Vue("Recette");
        $vue->generer([
            'saison' => $saison
        ]);
    }
}