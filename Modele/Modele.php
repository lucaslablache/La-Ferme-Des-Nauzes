<?php
abstract class Modele
{
    private $bdd;

    protected function executerRequete ($sql,$parametres = null)
    {
        if ($parametres == null) 
        {
            $resultat = $this->getBdd()->query($sql); //execution directe
        }
        else
        {
            $resultat = $this->getBdd()->prepare($sql); //requete préparée
            $resultat->execute($parametres);
        }
        return $resultat;
    }

    protected function getLastId()
    {
        return $this->getBdd()->lastInsertId();
    }

    private function getBdd()
    {
        if ($this->bdd == null) 
        {
            //dev
            $this->bdd = new PDO('mysql:host=localhost;dbname=bdd_lfdn;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
            
            //prod
            //$this->bdd = new PDO('mysql:host=pencilanhf456db.mysql.db;dbname=pencilanhf456db;charset=utf8','pencilanhf456db','ovh456Db',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }

    //fonction de vérifications des entrées utilisateur
    static public function clear_string($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //reverse 
    // use htmlspecialchars_decode($data)
    static public function clear_sql_string($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = PDO::quote($data);
        return $data;
    }
}