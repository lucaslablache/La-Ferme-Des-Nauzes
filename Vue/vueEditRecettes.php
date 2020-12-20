edit recettes
<section class="sectionadmin container">
    
    <h3 class="titreAdmin">Ajouter une recette</h3>
    
    <form class="justify-content-around" method="post">
        <div class="row justify-content-around">
            <div class="col-2 px-0">
                <label class="col-12 text-center">Titre</label>
                <input class="col-12" type="text" name="titre" required>
            </div>
            <div class="col-2 px-0">
                <label class="col-12 text-center">Description</label>
                <textarea class="col-12" type="text" name="description"></textarea>
            </div>
            <div class="col-2 px-0">
                <label class="col-12 text-center">Photo</label>
                <input class="col-12" type="text" name="photo">
            </div>
            <div class="col-2 px-0">
                <label class="col-12 text-center">Saison</label>
                <select name="saison">
                    <option value="">--choisissez la saison--</option>
                    <option value="0">Hiver</option>
                    <option value="1">Primtemps</option>
                    <option value="2">Ete</option>
                    <option value="3">Automne</option>
                </select>
            </div>
        </div>
        <div class="row">
            <ul class="col-6 dotless-ul" id="ul-ingredient" prototype="<?= htmlspecialchars('
            <li class="">
                <label class="col-12 text-center">Ingrédient</label>
                <input class="col-12" type="text" name="ingredient___index__" required>
            </li>
            ')?>">
                <li class="">
                    <label class="col-12 text-center">Ingrédient</label>
                    <input class="col-12" type="text" name="ingredient_0" required>
                </li>
                <li class="last-li">
                    <button type="button" class="btn btn-success" id="add-ingredient">+</button>
                </li>
            </ul>
            <ul class="col-6 dotless-ul" id="ul-instruction" prototype="<?= htmlspecialchars('
            <li class="">
                <label class="col-12 text-center">Instruction</label>
                <textarea class="col-12 instruction_recette" type="text" name="instruction___index__" required></textarea>
            </li>
            ')?>">
                <li class="">
                    <label class="col-12 text-center">Instruction</label>
                    <textarea class="col-12 instruction_recette" type="text" name="instruction_0" required></textarea>
                </li>
                <li class="last-li">
                    <button type="button" class="btn btn-success" id="add-instruction">+</button>
                </li>
            </ul>
        </div>
        
        <button type="subbmit" class="btn btn-success">Subbmit</button>
    </form>
</section>