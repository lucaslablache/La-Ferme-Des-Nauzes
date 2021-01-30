edit panier
<script src="/Assets/js/produit-editor.js"></script>
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
                <td><button class="btn btn-warning" data-toggle="modal" data-target="#produitModal"
                    data-id='<?= $product['id'] ?>'
                    data-photo='<?= $product['photo'] ?>'
                    data-nom='<?= $product['nom'] ?>'
                    data-variete='<?= $product['variete'] ?>'
                    data-quantite='<?= $product['quantite'] ?>'
                    data-prix='<?= $product['prix'] ?>'
                    data-mod-prix='<?= $product['mod_prix'] ?>'
                    >Modifier</button>
                </td>
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
    

    <div class="modal fade" id="produitModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Modification du Produit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post">
            <div class="modal-body">
              
              <input type="hidden" id="id-modif" name="id" value="">
              <div class="form-group">
                <label for="nom-modif" class="col-form-label">Nom :</label>
                <input class="col-12" type="text" id="nom-modif" name="name" required>
              </div>
              <div class="form-group">
                <label for="variete-modif" class="col-form-label">Variete :</label>
                <input class="col-12" type="text" id="variete-modif" name="variety">
              </div>
              <div class="form-group">
                <label for="prix-modif" class="col-form-label col-12">Prix :</label>
                <input class="col-6" type="text" id="prix-modif" name="price">
                <select class="col-5" name="mod_price" id="mod_prix-modif">
                    <option value="">--choisissez le type de prix--</option>
                    <option value="0">€/kg</option>
                    <option value="1">€/unité</option>
                    <option value="2">€/douzaine</option>
                </select>
              </div>
              <div class="form-group">
                <label for="quantite-modif" class="col-form-label">Quantite :</label>
                <input class="col-12" type="text" id="quantite-modif" name="quantite">
              </div>
              <div class="form-group">
                <label for="photo-modif" class="col-form-label">Photo :</label>
                <input class="col-12" type="text" id="photo-modif" name="picture" required>
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="subbmit" class="btn btn-primary">Modifier</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>