$(document).ready(()=>{
    $('#add-ingredient').on('click', () => {
        let ulIngre = $('#ul-ingredient');
        let prototype = ulIngre.attr('prototype');
        let lastLi = $('#ul-ingredient > .last-li');
        prototype = $(prototype);
        prototype.insertBefore(lastLi);
    });

    $('#add-instruction').on('click', () => {
        let ulIngre = $('#ul-instruction');
        let prototype = ulIngre.attr('prototype');;
        let lastLi = $('#ul-instruction > .last-li');
        prototype = $(prototype);
        prototype.insertBefore(lastLi);
    });
});