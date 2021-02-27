var addProductButton;
$(document).ready(()=>{
    $('#produitModal').on('show.bs.modal', function (event) {
        addProductButton = $(event.relatedTarget) // Button that triggered the modal
        var photo = addProductButton.data('photo');
        var nom = addProductButton.data('nom');
        var variete = addProductButton.data('variete');
        var quantite = addProductButton.data('quantite');
        var prix = addProductButton.data('prix');
        var id = addProductButton.data('id');
        var modPrixString = '';
        var modprix = addProductButton.data('mod-prix');
        var modal = $(this)
        if (modprix === 0) 
        {
            modPrixString = '€/kg';
            modal.find('#quantite-commande').attr('step', 0.1);
        }
        if (modprix === 1) 
        {
            modPrixString = '€/unites';
            modal.find('#quantite-commande').attr('step', 1);
        }
        if (modprix === 2) 
        {
            modPrixString = '€/douzaines';
            modal.find('#quantite-commande').attr('step', 0.5);
        }
        modal.find('#quantite-commande').attr('max', quantite);
        modal.find('.modal-title').text('Ajouter : ' + nom + ' ' + variete + ' au Panier')
        modal.find('#panier-nom').text(nom + ' ' + variete);
        modal.find('#panier-photo').text(photo);
        modal.find('#panier-prix').text(prix + modPrixString);
        modal.find('#panier-disponibilite').text('il y a ' + quantite + ' ' + nom + ' disponible(s)');
        modal.find('#panier-id-form').val(id);
    });
});