$(document).ready(()=>{
    $('#produitModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var photo = button.data('photo');
        var nom = button.data('nom');
        var variete = button.data('variete');
        var quantite = button.data('quantite');
        var prix = button.data('prix');
        var modprix = button.data('mod-prix');
        var id = button.data('id');
        var saison = button.data('saison');

        var modal = $(this)
        modal.find('.modal-title').text('Modification du Produit : ' + nom + ' ' + variete)
        modal.find('.modal-body #nom-modif').val(nom);
        modal.find('.modal-body #variete-modif').val(variete);
        modal.find('.modal-body #prix-modif').val(prix);
        modal.find('.modal-body #mod_prix-modif').val(modprix);
        modal.find('.modal-body #quantite-modif').val(quantite);
        modal.find('.modal-body #photo-modif').val(photo);
        modal.find('.modal-body #id-modif').val(id);
        modal.find('.modal-body #saison-modif').val(saison);
      });
});