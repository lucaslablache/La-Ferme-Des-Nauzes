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
        $this->productManager = new Produit();

        
        if ( ! isset( $_SESSION['panier']))
        {
           $_SESSION['panier'] = array();
        }
        if (isset ($_POST['id']))
        {
            $productToAdd = $this->productManager->getShippableProduct($_POST['id']);

            if (isset ($productToAdd[0])) 
            {
                $productData = array();
                foreach ($productToAdd[0] as $key => $value) 
                {
                    if ( ! ($key === 'quantite')) 
                    {
                        
                        $productData[$key] = $value;
                    }

                }
                if 
                $productData['quantiteCommande'] = (float) $_POST['quantite'];

                $isAlreadyOrdered = false ;
                $i = 0;
                foreach ($_SESSION['panier'] as $product) 
                {
                    
                    if ($product['id'] == $productData['id']) 
                    {
                        $_SESSION['panier'][$i]['quantiteCommande'] += $productData['quantiteCommande'];
                        $isAlreadyOrdered = true ;
                    }
                    $i ++;
                }
                if ( ! $isAlreadyOrdered) 
                {
                    array_push($_SESSION['panier'], $productData);
                }
                var_dump($_SESSION['panier']);
            }

        }

        $vue = new Vue("Panier");
        
        $products = $this->productManager->getProducts();
        
        $vue->generer([
            'products' => $products
        ]);
    }
}