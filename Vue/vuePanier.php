<?php
// var_dump ($products);
?>
<script src="/Assets/js/panier-modal.js"></script>
<table data-toggle="table" data-search="true" data-show-columns="true">
    <thead>
        <tr>
            <th>Photo</th>
            <th data-sortable="true">Légume</th>
            <th>Variété</th>
            <th data-sortable="true">Disponibilité</th>
            <th data-sortable="true">Prix</th>
            <th>Saison</th>
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
            <td><?= $product['prix'] ?>
            <?php
            if ($product['mod_prix'] == 0) 
            {
                echo ('€/kg');
            }
            if ($product['mod_prix'] == 1) 
            {
                echo ('€/unités');
            }
            if ($product['mod_prix'] == 2) 
            {
                echo ('€/douzaines');
            }
            ?></td>
            <td>
            <?php
            if ($product['saison'] == 0) 
            {
                echo ('Non attribué');
            }
            if ($product['saison'] == 1) 
            {
                echo ('De saison');
            }
            if ($product['saison'] == 2) 
            {
                echo ('Hors saison');
            }
            ?></td>
            <td><button class="btn btn-success" data-toggle="modal" data-target="#produitModal"
                data-id='<?= $product['id'] ?>'
                data-photo='<?= $product['photo'] ?>'
                data-nom='<?= $product['nom'] ?>'
                data-variete='<?= $product['variete'] ?>'
                data-quantite='<?= $product['quantite'] ?>'
                data-prix='<?= $product['prix'] ?>'
                data-mod-prix='<?= $product['mod_prix'] ?>'
                data-saison='<?= $product['saison'] ?>'
                >Ajouter au panier</button>
            </td>
        </tr>
        <?php endforeach; ?>

        <div class="modal fade" id="produitModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Ajouter au panier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4" id="panier-photo"></div>
                        <div class="col-8">
                            <p class="row" id="panier-nom"></p>
                            <p class="row" id="panier-prix"></p>
                            <p class="row" id="panier-disponibilite"></p>
                        </div>
                    </div>
                </div>
                <hr>
                <form method="post">
                    <div class="modal-body">
                        <input type="hidden" id="panier-id-form" name="id" value="">
                        <div class="form-group">
                            <label for="nom-modif" class="col-form-label">Combien voulez vous en commander ? </label>
                            <input class="col-12" type="number" id="quantite-commande" min="0" name="quantite" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="subbmit" class="btn btn-success">Commander</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </tbody>
</table>


<table data-toggle="table" data-search="true" data-show-columns="true">
    <thead>
        <tr>
            <th>Photo</th>
            <th data-sortable="true">Légume</th>
            <th>Variété</th>
            <th data-sortable="true">Prix Unitaire</th>
            <th data-sortable="true">Quantitée</th>
            <th data-sortable="true">Prix Commande</th>
            <th>Modifier</th>
        </tr>
    </thead>
    <tbody>
        <?php $prixTotal = 0; ?>
        <?php $prixProduit = 0; ?>
        <?php foreach ($commande as $produitCommande):?>
            <tr>
                <td><?= $produitCommande['photo'] ?></td>
                <td><?= $produitCommande['nom'] ?></td>
                <td><?= $produitCommande['variete'] ?></td>
                <td><?= $produitCommande['prix'] ?>
                <?php
                if ($produitCommande['mod_prix'] == 0) 
                {
                    echo ('€/kg');
                }
                if ($produitCommande['mod_prix'] == 1) 
                {
                    echo ('€/unités');
                }
                if ($produitCommande['mod_prix'] == 2) 
                {
                    echo ('€/douzaines');
                }
                ?></td>
                <td><?= $produitCommande['quantiteCommande'] ?></td>
                <?php $prixProduit = $produitCommande['quantiteCommande'] * $produitCommande['prix']?>
                <td><?= $prixProduit .' €' ?></td>
                <td><button class="btn btn-danger" data-toggle="modal" data-target="#produitModal">retirer de la commande</button>
            </tr>
            <?php $prixTotal += $prixProduit; ?>

        <?php endforeach; ?>
        <tr>
            <td>Total</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?= $prixTotal .' €'?></td>
            <td><button class="btn btn-success" data-toggle="modal" data-target="#produitModal">Finaliser la commande</button>
            </td>
        </tr>
    </tbody>
</table>
