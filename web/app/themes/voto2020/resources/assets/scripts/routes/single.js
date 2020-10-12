export default {
  init() {
    // JavaScript to be fired on the home page
    $('#player').click(function () { 
      $('#player .video').addClass('active');
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
