export default {
  init() {
    // JavaScript to be fired on the home page
    $('.play').hover(function () {
      $('#player').addClass('hover');
     }, function () { 
      $('#player').removeClass('hover');
    });
    $('#player').click(function () { 
      $('#player').addClass('active');
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
