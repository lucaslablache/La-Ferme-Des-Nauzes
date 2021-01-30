$(document).ready(()=>{
    $('#agendaModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var date = button.data('date');
        var heureD = button.data('starting-time');
        var heureF = button.data('ending-time');
        var adresse = button.data('location');
        var info = button.data('information');
        var id = button.data('id');

        var modal = $(this)
        modal.find('.modal-title').text('Modification du Marché du : ' + date)
        modal.find('.modal-body #date-modif').val(date);
        modal.find('.modal-body #time-start-modif').val(heureD);
        modal.find('.modal-body #time-end-modif').val(heureF);
        modal.find('.modal-body #location-modif').val(adresse);
        modal.find('.modal-body #info-modif').val(info);
        modal.find('.modal-body #id-modif').val(id);
      });
});