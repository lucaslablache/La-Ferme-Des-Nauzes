<?php

class Recette extends Modele
{
    public function getRecettes()
    {
        $sql = 'SELECT ID as id, titre as titre, description as description, photo as photo, saison as saison, ingredient as ingredient, instruction as instruction from recettes order by ID desc';
        $recettes = $this->executerRequete($sql);
        return $recettes->fetchAll();
    }

    public function insertNewRecette($titre, $description, $photo, $saison, $ingredients, $instructions)
    {
        $sql = 'INSERT into recettes'
                .'(titre, description, photo, saison, ingredient, instruction)'
                .' values (?,?,?,?,?,?)';
        $this->executerRequete($sql, array($titre, $description, $photo, $saison, $ingredients, $instructions));
    }

    public function getSeasonRecettes($saison)
    {
        $sql = 'SELECT ID as id, titre as titre, description as description, photo as photo, ingredient as ingredient, instruction as instruction from recettes where saison=? order by ID desc';
        $recettes = $this->executerRequete($sql, array($saison));
        return $recettes->fetchAll();
    }
}

// last inserted ==> getLastId   (modele)