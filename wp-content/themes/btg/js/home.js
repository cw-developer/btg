$(window).on('load', function() {
  $('#preloader').css({
    "opacity":"0",
	"transform": "translateY(-100%)",
    "transition-delay": "2.5s"
  });
  $('.loader').css({
    "opacity": "0",
    //"transform": "translate(0%,-100%)",
    "transition-delay": "2.5s"
  });

  $('.loader_text_unit').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },

    {

      duration: 300,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
      }
    });
  });

});
$(document).ready(function(){
	jQuery('.third_col a[href^="#"]').click(function(){
		var href = jQuery(this).attr('href');
		jQuery('html, body').animate({scrollTop: jQuery(href).offset().top}, 700);
		return false; 
	});
});
home_page_hover();