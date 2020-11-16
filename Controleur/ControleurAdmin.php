<?php

require_once 'Vue/vue.php';

class ControleurAdmin
{

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
                if ($_SERVER['REQUEST_METHOD'] === 'POST') 
                {
                    storer
                }
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
        $vue = new Vue("EditAgenda");
        $vue->generer([]);
    }

    public function login(String $errorMsg = null)
    {
        $vue = new Vue("Login");
        $vue->generer([
            'errorMsg' => $errorMsg
        ]);
    }


}