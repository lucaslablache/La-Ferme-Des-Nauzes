<?php

require_once 'Vue/vue.php';

class ControleurLogout
{

    public function __construct($_url)
    {

        //todo: manage url length
        $this->logout();
    }

    public function logout()
    {
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        unset($_SESSION["logged"]);
        $vue = new Vue("Logout");
        $vue->generer([

        ]);
    }




}