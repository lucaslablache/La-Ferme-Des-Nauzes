edit panier
<section>
    <table data-toggle="table" data-search="true" data-show-columns="true">
        <thead>
            <tr>
                <th>Photo</th>
                <th data-sortable="true">Légume</th>
                <th>Variété</th>
                <th data-sortable="true">Disponibilité</th>
                <th data-sortable="true">Prix</th>
                <th>Récolte</th>
                <th>Modifier le produit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product):?>
            <tr>
                <td><?= $product['photo'] ?></td>
                <td><?= $product['nom'] ?></td>
                <td><?= $product['variete'] ?></td>
                <td><?= $product['quantite'] ?></td>
                <td><?= $product['prix'] ?>
                <?php
                if ($product['mod_prix'] == 0) 
                {
                    echo ('€/kg');
                }
                if ($product['mod_prix'] == 1) 
                {
                    echo ('€/unité');
                }
                if ($product['mod_prix'] == 2) 
                {
                    echo ('€/douzaine');
                }
                ?></td>
                <td></td>
                <td><button class="btn btn-warning">modifier</button></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<section class="sectionadmin container">
    
    <h3 class="titreAdmin">Ajouter un produit</h3>
    
    <form class="row justify-content-around" method="post">
        <div class="col-2 px-0">
            <label class="col-12 text-center">Nom</label>
            <input class="col-12" type="text" name="name" required>
        </div>
        <div class="col-2 px-0">
            <label class="col-12 text-center">Variété</label>
            <input class="col-12" type="text" name="variety">
        </div>
        <div class="col-2 px-0">
            <label class="col-12 text-center">Photo</label>
            <input class="col-12" type="text" name="picture" required>
        </div>
        <div class="col-2 px-0">
            <label class="col-12 text-center">Prix</label>
            <input class="col-12" type="text" name="price">
            <select name="mod_price">
                <option value="">--choisissez le type de prix--</option>
                <option value="0">€/kg</option>
                <option value="1">€/unité</option>
                <option value="2">€/douzaine</option>
            </select>
        </div>
        
        <button type="subbmit" class="btn btn-success">Subbmit</button>
    </form>
    
</section>