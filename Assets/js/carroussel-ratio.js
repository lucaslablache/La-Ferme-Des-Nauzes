console.log('a');
document.addEventListener('DOMContentLoaded', () => {
    let inner = document.getElementsByClassName('carousel-inner');
    console.log(inner["0"]);
    inner.style.height = inner.offsetwidth * 9.0/16.0;

} );
