const CONFIG = {
  TRIGGER: '.header__burger',
  NAV: '.nav',
  NAVCLASS: 'nav--active',
  CLASS: 'open',
};

const burger = {
  init() {
    const { TRIGGER, NAV } = CONFIG;
    this.trigger = document.querySelector(TRIGGER);
    this.nav = document.querySelector(NAV);

    if(this.trigger) {
      this.addEvent();
    }
  },

  addEvent() {
    const { CLASS, NAVCLASS } = CONFIG;
    this.trigger.addEventListener('click', (event) => {
      event.preventDefault();
      console.log('test');
      this.trigger.classList.toggle(CLASS);
      this.nav.classList.toggle(NAVCLASS);
      document.body.parentElement.classList.toggle('is-hidden');
    });
  },
};

export default burger;