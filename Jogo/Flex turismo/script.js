// script.js
const container = document.querySelector('.caixa');
const scrollButtonRight = document.querySelector('.btnr');
const scrollButtonLeft = document.querySelector('.btnl');
const cardWidth = 320; // Largura do card + margem

scrollButtonRight.addEventListener('click', () => {
    container.scrollLeft += cardWidth;
});

scrollButtonLeft.addEventListener('click', () => {
    container.scrollLeft -= cardWidth;
});