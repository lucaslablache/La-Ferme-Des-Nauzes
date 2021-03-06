<?php

class Post extends Modele
{
    //Renvoie la liste des posts du site
	public function getPosts()
	{
		$sql = 'SELECT POST_ID as id, POST_TITRE as titre, POST_TEXTE as texte, POST_TYPE as type, POST_AUTEUR as auteur, POST_DATE as date from post order by ID desc';
		$posts = $this->executerRequete($sql);
        return $posts;
	}

    //Renvoie les infos sur un post spécifique
    //types
    //0 = informations
    //1 = collaborateurs
    //2 = histoire
	public function getPostsType($typePost) 
	{
        $sql = 'SELECT POST_ID as id, POST_TITRE as titre, POST_TEXTE as texte, POST_TYPE as type, POST_AUTEUR as auteur, POST_DATE as date, POST_PHOTO as photo from post where POST_TYPE=?';
        $posts = $this->executerRequete($sql, array($typePost));
        return $posts;
    }

    //Renvoie les infos sur un post spécifique
	public function getPost($idPost) 
	{
        $sql = 'SELECT POST_ID as id, POST_TITRE as titre, POST_TEXTE as texte, POST_TYPE as type, POST_AUTEUR as auteur, POST_DATE as date from post where BIL_ID=?';
        $post = $this->executerRequete($sql, array($idpost));
        if ($post->rowCount() > 0)
        {
            return $post->fetch();  // Accès à la première ligne de résultat
        }

        else
        {
            throw new Exception("Aucun post ne correspond à l'identifiant '$idpost'");
        }

    }

    public function insertNewPost($titre, $texte, $photo, $type)
    {
        $sql = 'INSERT into post'
                .'(POST_TITRE, POST_TEXTE, POST_TYPE, POST_AUTEUR, POST_DATE, POST_PHOTO)'
                .' values (?,?,?,0,?,?)';
        $date = date("Y-m-d H:i:s");
        $this->executerRequete($sql, array($titre, $texte, $type, $date, $photo));
    }
}