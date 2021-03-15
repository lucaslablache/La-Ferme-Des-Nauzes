<?php
require_once 'Modele/Post.php';
require_once 'Vue/vue.php';

class ControleurAccueil
{
    private $post;
    private $postManager;

    public function __construct($_url)
    {
        if (count($_url) === 1) 
        {
            $this->postManager = new Post();
            $this->accueil();
        }
        else
        {
            throw new Exception('Page not found');
        }
    }

    public function accueil()
    {
        $posts = $this->postManager->getPosts();
        $vue = new Vue("Accueil");
        $vue->generer(array('posts' => $posts->fetchAll()));
    }
}