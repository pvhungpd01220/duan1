// JavaScript Document
jQuery(document).ready(function() {
  var offset = 130;
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > offset) {
        //$('#menu').removeClass('active');
        $('#menu-second').addClass('menu-second');
    } else {
      
       // $(this).addClass('active');
		$('#menu-second').removeClass('menu-second');
    }
  });
});