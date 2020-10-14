<?php
require_once 'Model/Post.php';
require_once 'View/vue.php';

class ControleurAccueil
{
    private $post;
    private $postManager;

    public function __contruct()
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