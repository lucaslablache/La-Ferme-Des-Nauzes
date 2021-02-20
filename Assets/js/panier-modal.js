var addProductButton;
function cleanField() 
{
    let sourceFieldValue = $('#quantite-commande').val();
    if (sourceFieldValue > addProductButton.data('quantite'))
    {
        $('#quantite-commande').val(addProductButton.data('quantite'));
        window.alert("Il n'y a pas assez de stocks pour une si grosse commande");
    }
    if (sourceFieldValue == 0)
    {
        $('#quantite-commande').val(addProductButton.data('quantite'));
        window.alert("Vous ne pouvez pas commander un quantité nulle");
    }
}
$(document).ready(()=>{
    $('#quantite-commande').on("change", ()=>
    {
        cleanField();
    });
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
        if (modprix === 0) 
        {
            modPrixString = '€/kg';
        }
        if (modprix === 1) 
        {
            modPrixString = '€/unites';
        }
        if (modprix === 2) 
        {
            modPrixString = '€/douzaines';
        }

        var modal = $(this)
        modal.find('.modal-title').text('Ajouter : ' + nom + ' ' + variete + ' au Panier')
        modal.find('#panier-nom').text(nom + ' ' + variete);
        modal.find('#panier-photo').text(photo);
        modal.find('#panier-prix').text(prix + modPrixString);
        modal.find('#panier-disponibilite').text('il y a ' + quantite + ' ' + nom + ' disponible(s)');
        modal.find('#panier-id-form').val(id);
    });
});