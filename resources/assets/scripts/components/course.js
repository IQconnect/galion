const Flickity = require('flickity');

// deklarowanie obiektu
const course = {
  init() {
    const course = new Flickity('.course__slider', {
      //groupCells: true,
      prevNextButtons: false,
      pageDots: false,
      wrapAround: true,
      draggable: false,
      autoPlay: false,
    });
    const nextButton = document.querySelector('.course__next');
    const prevButton = document.querySelector('.course__prev');
    nextButton.addEventListener('click', (e) => {
      e.preventDefault();
      course.next();
    });
    prevButton.addEventListener('click', (e) => {
      e.preventDefault();
      course.previous();
    });
    course.resize();
  },

  resize() {
    window.onload = () => {
      course.resize();
    };
  },
}

export default course;