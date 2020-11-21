<?php

class Agenda extends Modele
{
    public function insertNewAgendaEvent($date, $h_debut, $h_fin, $adresse)
    {
        $sql = 'insert into market'
                .'(date, heure_debut, heure_fin, adresse)'
                .' values (?,?,?,?)';
        $this->executerRequete($sql, array($date, $h_debut, $h_fin, $adresse));
    }

    public function getAgendaEvents()
    {
        $sql = 'SELECT ID as id, date as date, heure_debut as heure_debut, heure_fin as heure_fin, adresse as adresse FROM market ORDER BY date DESC';
        $agendaEvent = $this->executerRequete($sql);
        return $agendaEvent->fetchAll();
    }
}