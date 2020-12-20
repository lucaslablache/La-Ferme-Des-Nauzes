edit info
<section class="sectionadmin container">
    
    <h3 class="titreAdmin">Ajouter une information</h3>
    
    <form class="row justify-content-around" method="post">
        <div class="col-2 px-0">
            <label class="col-12 text-center">Titre</label>
            <input class="col-12" type="text" name="titre" required>
        </div>
        <div class="col-2 px-0">
            <label class="col-12 text-center">Texte</label>
            <textarea class="col-12" id="texte_info" type="text" name="texte" required>
            </textarea>
        </div>
        <div class="col-2 px-0">
            <label class="col-12 text-center">Photo</label>
            <input class="col-12" type="text" name="photo">
        </div>
        <div class="col-2 px-0">
            <label class="col-12 text-center">Catégorie</label>
            <select name="type">
                <option value="">--choisissez le type du post--</option>
                <option value="0">informations</option>
                <option value="1">collaborateurs</option>
                <option value="2">histoire de la ferme</option>
            </select>
        </div>
        
        <button type="subbmit" class="btn btn-success">Subbmit</button>
    </form>
</section>