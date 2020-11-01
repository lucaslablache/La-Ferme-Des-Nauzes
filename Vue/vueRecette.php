Recette

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
<div style="background-color: <?= $color ?>;height: 400px">

</div>
