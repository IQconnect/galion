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
    const nextButton = document.querySelectorAll('.offer__next');
    const prevButton = document.querySelectorAll('.offer__prev');

    nextButton.forEach((item) => {
      item.addEventListener('click', (e) => {
        e.preventDefault();
        offer.next();
      });
    }),

    prevButton.forEach((item) => {
      item.addEventListener('click', (e) => {
        e.preventDefault();
        offer.next();
      });
    }),

    offer.resize();
  },

  resize() {
    window.onload = () => {
      offer.resize();
    };
  },
}

export default offer;