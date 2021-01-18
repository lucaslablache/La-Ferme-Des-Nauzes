Saison: <?= $saison ?>
<?php
    if ($saison === 'hiver')
    {
        $color = 'blue';
    }
    elseif ($saison === 'ete')
    {
        $color = 'yellow';
    }
    elseif ($saison === 'automne')
    {
        $color = 'orange';
    }
    elseif ($saison === 'printemps')
    {
        $color = 'green';
    }
?>
<div  style="background-color: <?= $color ?>;height: 400px"> <!-- class="<?= $saison ?>-bc" -->

</div>
<section>
    
    <?php foreach ($recettes as $recette):?>
        <div>
            <h2> <?= $recette['titre'] ?> </h2>
            <p> <?= $recette['description'] ?></p>
            <img><?= $recette['photo'] ?></img>
            <?php
                $ingredients = explode('§', $recette['ingredient']);
                $instructions = explode('§', $recette['instruction']);
            ?>
            <ul>
                <?php foreach ($ingredients as $ingredient):?>
                <li><?= $ingredient ?></li>
                <?php endforeach;?>
            </ul>
            <ul>
                <?php foreach ($instructions as $instruction):?>
                <li><?= $instruction ?></li>
                <?php endforeach;?>
            </ul>
        </div>
    <?php endforeach; ?>
</section>
