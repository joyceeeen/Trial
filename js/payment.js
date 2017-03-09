$(document).ready(function() {

  $('.tabs li').on('click', function() {
      $('.tabs li, .tab-content .tab').removeClass('active');
      $(this).addClass('active');
      var id =   $(this).find('a').attr('href');
      $(id).addClass('active');
    });
});
