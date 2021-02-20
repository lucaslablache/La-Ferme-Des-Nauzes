<?php

require_once 'Vue/vue.php';

class ControleurInfo
{
    private $postManager;

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
        elseif($_url[1] === 'informations')
        {
            $this->info();
        }
        else
        {
            throw new Exception('Page not found');
        }
    }

    public function partenaire()
    {
        $this->postManager = new Post();
        $typePost = 1;

        $vue = new Vue("Partenaire");

        $posts = $this ->postManager->getPostsType($typePost);

        $vue->generer([
            'posts' => $posts
        ]);
    }

    public function histoire()
    {
        $this->postManager = new Post();
        $typePost = 2;

        $vue = new Vue("Histoire");

        $posts = $this->postManager->getPostsType($typePost);

        $vue->generer([
            'posts' => $posts
        ]);
    }
    public function info()
    {
        $this->postManager = new Post();
        $typePost = 0;

        $vue = new Vue("Informations");

        $posts = $this->postManager->getPostsType($typePost);
        
        $vue->generer([
            'posts' => $posts
        ]);
    }
}