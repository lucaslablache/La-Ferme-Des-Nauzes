
$(document).ready(()=>{
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var photo = button.data('photo');
        var nom = button.data('nom');
        var variete = button.data('variete');
        var quantite = button.data('quantite');
        var id = button.data('id');
        var modPrixString = '';
        var modprix = button.data('mod-prix');
        var modal = $(this)
        if (modprix === 0) 
        {
            modPrixString = 'kg';
        }
        if (modprix === 1) 
        {
            modPrixString = '';
        }
        if (modprix === 2) 
        {
            modPrixString = 'douzaines';
        }
        modal.find('.modal-title').text('Retirer : ' + nom + ' ' + variete + ' du Panier')
        modal.find('#delete-info').text('Etes-vous sur de retirer vos ' + quantite + ' ' + modPrixString + ' de ' + nom + ' ' + variete + ' de votre panier ?');
        modal.find('#delete-photo').text(photo);
        modal.find('#delete-id-form').val(id);
    });
});