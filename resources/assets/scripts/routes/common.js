import * as nav from '../components/navbar.js';

export default {
  init() {
    nav.toggleBg();
    $(document).foundation();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
