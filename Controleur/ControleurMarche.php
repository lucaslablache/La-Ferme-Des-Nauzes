<?php

require_once 'Vue/vue.php';

class ControleurMarche
{
    private $productManager;
    private $agendaManager;

    public function __construct($_url)
    {
        //todo: manage url length
        if($_url[1] === 'agenda')
        {
            $this->agenda();
        }
        elseif ($_url[1] === 'panier')
        {
            $this->panier();
        }
        else
        {
            throw new Exception('Page not found');
        }
    }

    public function agenda()
    {
        $this->agendaManager = new Agenda();
        
        $vue = new Vue("Agenda");

        $agendaEvents = $this->agendaManager->getAgendaEvents();
        $vue->generer([
            'agendaEvents' => $agendaEvents
        ]);
    }

    public function panier()
    {
        $error_msg = "";
        $this->productManager = new Produit();

        if ( ! isset( $_SESSION['panier']))
        {
           $_SESSION['panier'] = array();
        }
        if (isset ($_POST['id']))
        {
            //$this->addPanier();
            $productToAdd = $this->productManager->getShippableProduct($_POST['id']);

            if (isset ($productToAdd[0])) 
            {
                $productData = $productToAdd[0];
                $productData['quantiteCommande'] = (float) $_POST['quantite'];
                $isAlreadyOrdered = false;
                
                $i = 0;
                foreach ($_SESSION['panier'] as $product) 
                {
                    if ($product['id'] == $productData['id']) 
                    {
                        $isAlreadyOrdered = true;
                        if (($_SESSION['panier'][$i]['quantiteCommande'] + $productData['quantiteCommande']) > $productToAdd[0]['quantite']) 
                        {
                            $error_msg = "Vous avez commandé plus de produit qu'il n'y a de disponibilité";
                        }
                        else 
                        {
                            $_SESSION['panier'][$i]['quantiteCommande'] += $productData['quantiteCommande'];
                        }
                    }
                    $i ++;
                }
                if ( ! $isAlreadyOrdered) 
                {
                    array_push($_SESSION['panier'], $productData);
                }
                //var_dump($_SESSION['panier']);
            }
        }

        $vue = new Vue("Panier");
        
        $products = $this->productManager->getProducts();
        
        $vue->generer([
            'products' => $products,
            'commande' => $_SESSION['panier'],
            'error' => $error_msg
        ]);
    }

    public function addPanier()
    {

    }
}