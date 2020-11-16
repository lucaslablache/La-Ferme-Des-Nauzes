<?php
$aujourdhui = (new DateTime("now"))->format('Y-m-d');
?>
<section class="sectionadmin container">
    
    <h3 class="titreAdmin">Planifier un marché</h3>
    
    <form class="row justify-content-around js-time-interval" method="post">
        <h4 class="col-3 text-center">Date, heures et lieu du nouveau marché</h4>
        <div class="col-2">
            <label class="col-12 text-center">Date :</label>
            <input class="col-12" type="date" id="date">
        </div>
        <div class="col-2">
            <label class="col-12 text-center">De :</label>
            <input class="js-time-interval-start col-12" type="time" name="time-start" required>
        </div>
        <div class="col-2">
            <label class="col-12 text-center">À :</label>
            <input class="js-time-interval-end col-12" type="time" name="time-end" required>
        </div>
        <div class="col-2">
            <label class="col-12 text-center">lieu :</label>
            <input class="col-12" type="text" name="location" required>
        </div>
    </form>
    <button type="subbmit" class="btn btn-success">Subbmit</button>
</section>

<section class="sectionadmin container">
    
    <h3 class="titreAdmin">Marchés à venir</h3>
    
</section>
