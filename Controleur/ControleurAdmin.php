<?php

require_once 'Vue/vue.php';

class ControleurAdmin
{
    private $agendaManager;

    public function __construct($_url)
    {


        //todo: put that in environment.php
//        $username = 'La ferme des Nauzes';
//        $password = 'On te dit!';
        $username = 'a';
        $password = 'b';
        //todo: manage url length
        if (isset($_SESSION['logged']) && $_SESSION['logged'])
        {
            if (count($_url) === 1) 
            {
                $this->admin();
            }
            elseif (count($_url) === 2 && $_url[1] === 'agenda')
            {
                $this->editAgenda();
            }

        }
        elseif (isset($_POST['login']) && !empty($_POST['username'])
            && !empty($_POST['password']))
        {

            if ($_POST['username'] == $username &&
                $_POST['password'] == $password) 
            {

                $_SESSION['valid'] = true;
                $_SESSION['logged'] = true;
                //$_SESSION['timeout'] = time(300);
                $_SESSION['username'] = $username;
                $loginMsg = 'You have entered valid use name and password';
                $this->admin($loginMsg);
            }
            else 
            {
                $errorMsg = 'Wrong username or password';
                $this->login($errorMsg);
            }
        }
        else 
        {
            $this->login();
        }
//        $this->admin();
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
            $agenda = new Agenda();
            $agenda->insertNewAgendaEvent($date, $time_start, $time_end, $location);
        }

        $vue = new Vue("EditAgenda");
        $agendaEvents = $this->agendaManager->getAgendaEvents();
        $vue->generer([
            'agendaEvents' => $agendaEvents
        ]);
        
    }

    public function login(String $errorMsg = null)
    {
        $vue = new Vue("Login");
        $vue->generer([
            'errorMsg' => $errorMsg
        ]);
    }


}