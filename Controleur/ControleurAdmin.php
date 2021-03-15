<?php

require_once 'Vue/vue.php';

class ControleurAdmin
{
    private $agendaManager;
    private $productManager;
    private $postManager;
    private $recetteManager;

    public function __construct($_url)
    {
        //todo: put that in environment.php

        if (isset($_SESSION['logged']) && $_SESSION['logged'] && $_SESSION['role'] == 1)
        {
            if (count($_url) === 1) 
            {
                $this->admin();
            }
            elseif (count($_url) === 2 && $_url[1] === 'agenda')
            {
                $this->editAgenda();
            }
            elseif (count($_url) === 2 && $_url[1] === 'panier')
            {
                $this->editPanier();
            }
            elseif (count($_url) === 2 && $_url[1] === 'recettes')
            {
                $this->editRecettes();
            }
            elseif (count($_url) === 2 && $_url[1] === 'informations')
            {
                $this->editInformations();
            }
            else
            {
                throw new Exception('Page not found');
            }
        }
        else 
        {
            header ('Location: /login');
        }
    }

    public function admin(String $loginMsg = null)
    {
        $vue = new Vue("Admin");
        $vue->generer([
            "flashContent" => $loginMsg
        ]);
    }

    public function editAgenda()
    {
        $this->agendaManager = new Agenda();

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $date = Modele::clear_string($_POST['date']);
            $time_start = Modele::clear_string($_POST['time-start']);
            $time_end = Modele::clear_string($_POST['time-end']);
            $location = Modele::clear_string($_POST['location']);
            $information = Modele::clear_string($_POST['info']);
            $agenda = new Agenda();
            if (isset($_POST['id']))
            {
                $id = Modele::clear_string($_POST['id']);
                $agenda->updateAgendaEvent($id, $date, $time_start, $time_end, $location, $information);
            }
            else 
            {
                $agenda->insertNewAgendaEvent($date, $time_start, $time_end, $location, $information);
            }
        }

        $vue = new Vue("EditAgenda");
        $agendaEvents = $this->agendaManager->getAgendaEvents();

        $now = new DateTime('now', new DateTimeZone('Europe/Paris'));
        $now->format('Y-m-d');

        $futureAgendaEvents = [];
        $pastAgendaEvents = [];
        foreach ($agendaEvents as $agendaEvent)
        {
            $_date = new DateTime($agendaEvent['date']);
            if ($_date >= $now) 
            {
                array_push($futureAgendaEvents, $agendaEvent);
            }
            else
            {
                array_push($pastAgendaEvents, $agendaEvent);
            }
        }
        

        $vue->generer([
            'pastAgendaEvents' => $pastAgendaEvents,
            'futureAgendaEvents' => $futureAgendaEvents
        ]);
        
    }

    public function editPanier()
    {
        $this->productManager = new Produit();

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $nom = Modele::clear_string($_POST['name']);
            $variete = Modele::clear_string($_POST['variety']);
            $photo = Modele::clear_string($_POST['picture']);
            $prix = Modele::clear_string($_POST['price']);
            $mod_prix = Modele::clear_string($_POST['mod_price']);
            
            $product = new Produit();
            if (isset($_POST['id']))
            {
                $id = Modele::clear_string($_POST['id']);
                $quantite = Modele::clear_string($_POST['quantite']);
                $saison = Modele::clear_string($_POST['saison']);
                $product->updateProduct($id, $nom, $variete, $photo, $prix, $mod_prix, $quantite,$saison);
            }
            else 
            {
                $product->insertNewProduct($nom, $variete, $photo, $prix, $mod_prix);
            }
        }

        $vue = new Vue("EditPanier");
        $products = $this->productManager->getProducts();
        
        $vue->generer([
            'products' => $products
        ]);

    }
    public function editRecettes()
    {
        $this->recetteManager = new Recette();

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $ingredientChaine = implode("§", $_POST['ingredient']);
            $instructionChaine = implode("§", $_POST['instruction']);
            
            $titre = Modele::clear_string($_POST['titre']);
            $description = Modele::clear_string($_POST['description']);
            $photo = Modele::clear_string($_POST['photo']);
            $saison = Modele::clear_string($_POST['saison']);
            $ingredients = Modele::clear_string($ingredientChaine);
            $instructions = Modele::clear_string($instructionChaine);
            

            $recette = new Recette();
            $recette->insertNewRecette($titre, $description, $photo, $saison, $ingredients, $instructions);
        }

        $vue = new Vue("EditRecettes");
        $vue->generer([]);
        
    }
    public function editInformations()
    {
        $this->postManager = new Post();

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            
            $titre = Modele::clear_string($_POST['titre']);
            $texte = Modele::clear_string($_POST['texte']);
            $photo = Modele::clear_string($_POST['photo']);
            $type = Modele::clear_string($_POST['type']);

            $post = new Post();
            $post->insertNewPost($titre, $texte, $photo, $type);
        }

        $vue = new Vue("EditInformations");
        $vue->generer([]);
        
    }
}