$(document).ready(()=>{
    function sortTime(editedFieldClass, sourceFieldClass) 
    {
        
        let start = $('.js-time-interval-start').val().split(':');
        let end = $('.js-time-interval-end').val().split(':');
        let editedField = $('.js-time-interval-'+editedFieldClass);
        let sourceFieldValue = $('.js-time-interval-'+sourceFieldClass).val();
        
        if ((end[0]<start[0] || (end[0] === start[0] && end[1]<start[1])) && sourceFieldValue.length !== 0) 
        {
            editedField.val(sourceFieldValue);
            window.alert("veuillez rentrer une heure de fin ultérieure a l'heure de début.");
        }
    }
    $('.js-time-interval-start').on("change", ()=>
    {
        sortTime('start', 'end');
    });
    $('.js-time-interval-end').on("change", ()=>
    {
        sortTime('end', 'start');
    });
});
