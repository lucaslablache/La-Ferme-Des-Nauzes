<?php
var_dump ($products);
?>
<table data-toggle="table">
    <thead>
        <tr>
            <th>Photo</th>
            <th>Légume</th>
            <th>Variété</th>
            <th>Disponibilité</th>
            <th>Prix</th>
            <th>Combien</th>
            <th>Ajouter au Panier</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product):?>
        <tr>
            <td><?= $product['photo'] ?></td>
            <td><?= $product['nom'] ?></td>
            <td><?= $product['variete'] ?></td>
            <td><?= $product['quantite'] ?></td>
            <td><?= $product['prix'] ?></td>
            <td></td>
            <td><button class="btn btn-success">Ajouter au panier</button></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>