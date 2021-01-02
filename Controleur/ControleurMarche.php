<?php

require_once 'Vue/vue.php';

class ControleurMarche
{
    private $productManager;
    private $agendaManager;

    public function __construct($_url)
    {
        echo 'marche';
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
        
        $vue = new Vue("Panier");
        
        $products = $this->productManager->getProducts();
        
        $vue->generer([
            'products' => $products
        ]);
    }
}