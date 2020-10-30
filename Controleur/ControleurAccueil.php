<?php
require_once 'Modele/Post.php';
require_once 'Vue/vue.php';

class ControleurAccueil
{
    private $post;
    private $postManager;

    public function __construct($_url)
    {
        $this->postManager = new Post();
    }

    public function accueil()
    {
        $posts = $this->postManager->getPosts();
        $vue = new Vue("Accueil");
        $vue->generer(array('posts' => $posts));
    }
}