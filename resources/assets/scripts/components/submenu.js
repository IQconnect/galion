const CONFIG = {
  TRIGGER: '.menu-item-has-children > a',
  ELEM: '.sub-menu',
  HREF: '.sub-menu li',
  CLASS: 'is-block',
  ACTIVE: 'current-menu-item',
};

const submenu = {
  init() {
    const { TRIGGER, ELEM, CLASS, HREF, ACTIVE } = CONFIG;
    this.$triggers = document.querySelectorAll(TRIGGER);
    this.$elem = document.querySelector(ELEM);
    this.$href = document.querySelectorAll(HREF);
    this.$class = CLASS;
    this.$active = ACTIVE
    this.active(ACTIVE);
    if(this.$triggers) {
      this.addEvent();
    }
  },

  active(ACTIVE) {
    for(const item of this.$href) {
      item.classList.remove(ACTIVE);
    }
  },

  addEvent() {
    this.$triggers.forEach((item) => {
      item.addEventListener('click', (event) => {
        event.preventDefault();
        let elem = item.parentElement.querySelector('.sub-menu');
        elem.classList.toggle(this.$class);
      });
    })
  },
};

export default submenu;