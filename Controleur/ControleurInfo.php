<?php

require_once 'Vue/vue.php';

class ControleurInfo
{

    public function __construct($_url)
    {
        //todo: manage url length
        if ($_url[1] === 'partenaire')
        {
            $this->partenaire();
        }
        elseif($_url[1] === 'histoire')
        {
            $this->histoire();
        }
        else
        {
            throw new Exception('Page not found');
        }
    }

    public function partenaire()
    {
        $vue = new Vue("Partenaire");
        $vue->generer([//les post

        ]);
    }

    public function histoire()
    {
        $vue = new Vue("Histoire");
        $vue->generer([

        ]);
    }
}