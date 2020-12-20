<?php

class Agenda extends Modele
{
    public function insertNewAgendaEvent($date, $h_debut, $h_fin, $adresse, $information)
    {
        $sql = 'insert into market'
                .'(date, heure_debut, heure_fin, adresse, information)'
                .' values (?,?,?,?,?)';
        $this->executerRequete($sql, array($date, $h_debut, $h_fin, $adresse, $information));
    }

    public function getAgendaEvents()
    {
        $sql = 'SELECT ID as id, date as date, heure_debut as heure_debut, heure_fin as heure_fin, adresse as adresse, information as information FROM market ORDER BY date ASC';
        $agendaEvent = $this->executerRequete($sql);
        return $agendaEvent->fetchAll();
    }
}