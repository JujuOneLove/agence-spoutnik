import * as nav from '../components/navbar.js';

export default {
  init() {
    nav.toggleNav();
    nav.toggleTextScroll();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
