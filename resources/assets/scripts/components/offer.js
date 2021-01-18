const Flickity = require('flickity');

// deklarowanie obiektu
const offer = {
  init() {
    const offer = new Flickity('.offer__slider', {
      groupCells: true,
      prevNextButtons: false,
      pageDots: false,
      wrapAround: true,
      draggable: true,
      autoPlay: 4000,
    });
    const nextButton = document.querySelector('.offer__next');
    const prevButton = document.querySelector('.offer__prev');
    nextButton.addEventListener('click', (e) => {
      e.preventDefault();
      offer.next();
    });
    prevButton.addEventListener('click', (e) => {
      e.preventDefault();
      offer.previous();
    });
    offer.resize();
  },

  resize() {
    window.onload = () => {
      offer.resize();
    };
  },
}

export default offer;