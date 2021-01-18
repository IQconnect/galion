const Flickity = require('flickity');

// deklarowanie obiektu
const hotoffer = {
  init() {
    const hotoffer = new Flickity('.hotoffer__slider', {
      groupCells: true,
      prevNextButtons: false,
      pageDots: false,
      wrapAround: true,
      draggable: true,
      autoPlay: 4000,
    });
    const nextButton = document.querySelector('.hotoffer__next');
    const prevButton = document.querySelector('.hotoffer__prev');
    nextButton.addEventListener('click', (e) => {
      e.preventDefault();
      hotoffer.next();
    });
    prevButton.addEventListener('click', (e) => {
      e.preventDefault();
      hotoffer.previous();
    });
    hotoffer.resize();
  },

  resize() {
    window.onload = () => {
      hotoffer.resize();
    };
  },
}

export default hotoffer;