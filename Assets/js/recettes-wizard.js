var ingredientIndex = 1;
var instructionIndex = 1;

$(document).ready(()=>{
    $('#add-ingredient').on('click', () => {
        let ulIngre = $('#ul-ingredient');
        let prototype = ulIngre.attr('prototype');
        prototype = prototype.replace('__index__', ingredientIndex.toString());
        let lastLi = $('#ul-ingredient > .last-li');
        console.log(lastLi[0]);
        prototype = $(prototype);
        prototype.insertBefore(lastLi);
        ingredientIndex ++;
    });

    $('#add-instruction').on('click', () => {
        let ulIngre = $('#ul-instruction');
        let prototype = ulIngre.attr('prototype');
        prototype = prototype.replace('__index__', instructionIndex.toString());
        let lastLi = $('#ul-instruction > .last-li');
        console.log(lastLi[0]);
        prototype = $(prototype);
        prototype.insertBefore(lastLi);
        instructionIndex ++;
    });
});