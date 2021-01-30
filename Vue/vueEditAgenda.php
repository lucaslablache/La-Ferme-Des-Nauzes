<?php
$aujourdhui = (new DateTime("now"))->format('Y-m-d');
?>
<script src="/Assets/js/agenda-editor.js"></script>
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
            <td><button class="btn btn-warning" data-toggle="modal" data-target="#agendaModal"
              data-id='<?=$futureAgendaEvent['id']?>'
              data-date= <?=$futureAgendaEvent['date']?>
              data-starting-time = <?= $futureAgendaEvent['heure_debut'] ?>
              data-ending-time = <?= $futureAgendaEvent['heure_fin'] ?>
              data-location = '<?= $futureAgendaEvent['adresse'] ?>'
              data-information = '<?= $futureAgendaEvent['information'] ?>'
              >Modifier</button>
            </td>
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
            <td><button class="btn btn-warning" data-toggle="modal" data-target="#agendaModal"
              data-id='<?=$pastAgendaEvent['id']?>'
              data-date= <?=$pastAgendaEvent['date']?>
              data-starting-time = <?= $pastAgendaEvent['heure_debut'] ?>
              data-ending-time = <?= $pastAgendaEvent['heure_fin'] ?>
              data-location = '<?= $pastAgendaEvent['adresse'] ?>'
              data-information = '<?= $pastAgendaEvent['information'] ?>'
              >Modifier</button></td>
            <td><button class="btn btn-danger" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?'));">Supprimer</button></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>



    <div class="modal fade" id="agendaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modification du Marché</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" class="">
            <div class="modal-body">
              <input type="hidden" id="id-modif" name="id" value="">
              <div class="form-group">
                <label for="date-modif" class="col-form-label">Date :</label>
                <input type="date" class="form-control" id="date-modif" name="date">
              </div>
              <div class="form-group">
                <label for="time-start-modif" class="col-form-label">De :</label>
                <input class="js-time-interval-start form-control" type="time" id="time-start-modif" name="time-start" required>
              </div>
              <div class="form-group">
                <label for="time-end-modif" class="col-form-label">A :</label>
                <input class="js-time-interval-end form-control" type="time" id="time-end-modif" name="time-end" required>
              </div>
              <div class="form-group">
                <label for="location-modif" class="col-form-label">Lieu :</label>
                <input class="form-control" type="text" id="location-modif" name="location" required>
              </div>
              <div class="form-group">
                <label for="info-modif" class="col-form-label">Informations :</label>
                <input class="form-control" type="text" id="info-modif" name="info" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="subbmit" class="btn btn-primary" >Modifier</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>