<?php

class Agenda extends Modele
{
    public function insertNewAgendaEvent($date, $h_debut, $h_fin, $adresse, $information)
    {
        $sql = 'INSERT into market'
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

    public function updateAgendaEvent($id, $date, $heureD, $heureF, $adresse, $info)
    {
        $sql = 'UPDATE market SET date = ?, heure_debut = ?, heure_fin = ?, adresse = ?, information = ? WHERE ID = ?';
        $this->executerRequete($sql, array($date, $heureD, $heureF, $adresse, $info, $id));
    }

    public function deleteAgendaEvent($id)
    {
        $sql = 'DELETE FROM market WHERE ID = ?';
        $this->executerRequete($sql, array($id));
    }
}