<?php

class Produit extends Modele
{
    public function getProducts()
    {
        $sql = 'SELECT ID as id, nom as nom, variete as variete, photo as photo, prix as prix, mod_prix as mod_prix, quantite as quantite from produit order by ID desc';
        $product = $this->executerRequete($sql);
        return $product->fetchAll();
    }

    public function insertNewProduct($nom, $variete, $photo, $prix, $mod_prix)
    {
        
        $sql = 'INSERT into produit'
                .'(nom, variete, photo, prix, mod_prix,quantite)'
                .' values (?,?,?,?,?,0)';
        $this->executerRequete($sql, array($nom, $variete, $photo, $prix, $mod_prix));
    }

    public function updateProduct($id, $nom, $variete, $photo, $prix, $mod_prix, $quantite)
    {
        $sql = 'UPDATE produit SET nom = ?, variete = ?, photo = ?, prix = ?, mod_prix = ?, quantite = ? WHERE ID = ?';
        $this->executerRequete($sql, array($nom, $variete, $photo, $prix, $mod_prix, $quantite, $id));
    }

    public function deleteProduit($id)
    {
        $sql = 'DELETE FROM produit WHERE ID = ?';
        $this->executerRequete($sql, array($id));
    }
}