<?php
class User extends Modele
{
    public function insertNewUser($email, $nom, $prenom,$pass)
    {
        $sql = 'INSERT into user'
                .'(email, nom, prenom, mot_de_passe, role)'
                .' values (?,?,?,?,0)';
        $this->executerRequete($sql, array($email, $nom, $prenom, $pass));
    }

    public function getUser($email)
	{
        $sql = 'SELECT ID as id, nom as nom, prenom as prenom, mot_de_passe as mot_de_passe from user where email=?';
        $post = $this->executerRequete($sql, array($email));
        if ($post->rowCount() > 0)
        {
            return $post->fetch();  // Accès à la première ligne de résultat
        }

        else
        {
            throw new Exception("Aucun utilisateur ne correspond à l'identifiant '$email'");
        }

    }

    public function isUserCreated($email)
	{
        $sql = 'SELECT ID as id, nom as nom, prenom as prenom, mot_de_passe as mot_de_passe from user where email=?';
        $post = $this->executerRequete($sql, array($email));
        if ($post->rowCount() > 0)
        {
            return true;
        }

        else
        {
            return false;
        }

    }
}