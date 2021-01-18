// Import everything from autoload
import './autoload/**/*';

// import library
import PureCounter from '@srexi/purecounterjs';
// import WOW from 'wowjs';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

// impot components
import hotoffer from './components/hotoffer';
import offer from './components/offer';
import course from './components/course';
import hamburger from './components/hamburger';
import header from './components/header';
import preloader from './components/preloader';
import wp_block_gallery from './components/wp-block-gallery';
import accordion from './components/accordion';
import search from './components/search';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  header.init();
  preloader.init();
  hamburger.init();
  accordion.init();
  search.init();
  wp_block_gallery.init();
  if($('.hotoffer__slider').length) {
    hotoffer.init();
  }
  if($('.offer__slider').length) {
    offer.init();
  }
  if($('.course__slider').length) {
    course.init();
  }
});

setTimeout(()=>{
  PureCounter;
  window.dispatchEvent(new Event('resize'));
}, 1000)
