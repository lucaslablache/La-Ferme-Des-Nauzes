<?php
$aujourdhui = (new DateTime("now"))->format('Y-m-d');
?>
<section class="sectionadmin container">
    
    <h3 class="titreAdmin">Planifier un marché</h3>
    
    <form class="row justify-content-around js-time-interval" method="post">
        <h4 class="col-12 text-center">Date, heures et lieu du nouveau marché</h4>
        <div class="col-2 px-0">
            <label class="col-12 text-center">Date :</label>
            <input class="col-12" type="date" id="date" name="date">
        </div>
        <div class="col-2 px-0">
            <label class="col-12 text-center">De :</label>
            <input class="js-time-interval-start col-12" type="time" name="time-start" required>
        </div>
        <div class="col-2 px-0">
            <label class="col-12 text-center">À :</label>
            <input class="js-time-interval-end col-12" type="time" name="time-end" required>
        </div>
        <div class="col-2 px-0">
            <label class="col-12 text-center">lieu :</label>
            <input class="col-12" type="text" name="location" required>
        </div>
        <div class="col-2 px-0">
            <label class="col-12 text-center">Informations</label>
            <input class="col-12" type="text" name="info">
        </div>
        <button type="subbmit" class="btn btn-success">Subbmit</button>
    </form>
    
</section>
<section class="sectionadmin container">
    <h3 class="titreAdmin">Marchés à venir</h3>
    <table data-toggle="table" data-search="true" data-show-columns="true">
      <thead>
        <tr>
          <th>Marchés</th>
          <th> Heure de début</th>
          <th>Heure de fin</th>
          <th>Lieu</th>
          <th>Informations</th>
          <th>Modifier</th>
          <th>Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($futureAgendaEvents as $futureAgendaEvent):?>
        <tr>
            <td><?= afficheDateFr($futureAgendaEvent['date']) ?></td>
            <td><?= $futureAgendaEvent['heure_debut'] ?></td>
            <td><?= $futureAgendaEvent['heure_fin'] ?></td>
            <td><?= $futureAgendaEvent['adresse'] ?></td>
            <td><?= $futureAgendaEvent['information'] ?></td>
            <td><button class="btn btn-warning">Modifier</button></td>
            <td><button class="btn btn-danger" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?'));">Supprimer</button></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</section>
<section class="sectionadmin container">
    <h3 class="titreAdmin">Marchés Passés</h3>
    <table data-toggle="table" data-search="true" data-show-columns="true">
      <thead>
        <tr>
          <th>Marchés</th>
          <th>Heure de début</th>
          <th>Heure de fin</th>
          <th>Lieu</th>
          <th>Informations</th>
          <th>Modifier</th>
          <th>Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pastAgendaEvents as $pastAgendaEvent):?>
        <tr>
            <td><?= afficheDateFr($pastAgendaEvent['date']) ?></td>
            <td><?= $pastAgendaEvent['heure_debut'] ?></td>
            <td><?= $pastAgendaEvent['heure_fin'] ?></td>
            <td><?= $pastAgendaEvent['adresse'] ?></td>
            <td><?= $pastAgendaEvent['information'] ?></td>
            <td><button class="btn btn-warning">Modifier</button></td>
            <td><button class="btn btn-danger" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?'));">Supprimer</button></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</section>
