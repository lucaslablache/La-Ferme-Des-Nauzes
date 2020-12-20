<?php

class Produit extends Modele
{
    public function getProducts()
    {
        $sql = 'select ID as id, nom as nom, variete as variete, photo as photo, prix as prix, mod_prix as mod_prix, quantite as quantite from produit order by ID desc';
        $product = $this->executerRequete($sql);
        return $product->fetchAll();
    }

    public function insertNewProduct($nom, $variete, $photo, $prix, $mod_prix)
    {
        
        $sql = 'insert into produit'
                .'(nom, variete, photo, prix, mod_prix,quantite)'
                .' values (?,?,?,?,?,0)';
        $this->executerRequete($sql, array($nom, $variete, $photo, $prix, $mod_prix));
    }
}