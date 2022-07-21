/** btg **/

function pressrelease_carousel() {
  if ( $('.pr_outer_wrap').length > 0 ) {
		var slider = tns({
			"container": ".pr_outer_wrap",
			"loop": true,
			"gutter": "30",		
			"mouseDrag": true,
			"slideBy": "page",
    "nav": false,	
    "controlsText": ['<img src="' + theme_directory + '/images/arrow-left.svg">', '<img src="' + theme_directory + '/images/arrow-right.svg"></i>'],
			"autoplay": false,
			"autoplayButton": false,
			"swipeAngle": false,
			"speed": 1200,
			"responsive": {
				300: {
					"items": 1,
					"edgePadding": 40,
        		    "gutter": 30,
				},
				700: {
					"items": 2,
					"edgePadding": 0,
				},
				900: {
					"items": 3
				}
			}	 
		});
		
		
	}
}

function values_carousel(){
  if ( $('.values_wrap').length > 0 ) {
		var slider = tns({
			"container": ".values_wrap",
			"loop": true,
			"gutter": "60",		
			"mouseDrag": true,
			"slideBy": "page",
    "nav": false,	
    "controlsText": ['<img src="' + theme_directory + '/images/arrow-left.svg">', '<img src="' + theme_directory + '/images/arrow-right.svg"></i>'],
			"autoplay": false,
			"autoplayButton": false,
			"swipeAngle": false,
			"speed": 1200,
			"responsive": {
				300: {
					"items": 1,
        		    "gutter": 30,
				},
				700: {
					"items": 2,
					"edgePadding": 0,
				},
				900: {
					"items": 3,
					"gutter": 60,
				}
			}	 
		});
		
		
	}
}



jQuery(document).ready(function($) {	
			
			$('[data-toggle="popover"]').popover({
	          //trigger: 'focus',
	          trigger: 'hover',
	          placement: 'top',

	          html: true,
	          delay: { 'show': 200 },
	          content: function () {
	          	return '<img class="img-fluid" src="'+$(this).data('img') + '" />';
	          },

	          title: 'Toolbox'

	         }); 

    		 // add the animation to the popover
    		 $('[data-toggle="popover"]').popover().hover(function(e) {
    		 	e.preventDefault();
    		 	var open = $(this).attr('data-easein');
    		 	if (open == 'bounce') {
    		 		$(this).next().velocity('callout.' + open);
    		 	}

    		 });
			 $('.article_title_wrap a').hover(function () { $(this).parents('.pr_wrap').toggleClass('title-hover'); });
			 $('.pr_readmore_wrap a').hover(function () { $(this).parents('.pr_wrap').toggleClass('readmore-hover'); });
    		});	

jQuery(document).scroll(function() 
{
  if (jQuery(document).scrollTop() > 300) {
    jQuery('#gototop').addClass('show');
  } else {
    jQuery('#gototop').removeClass('show');
  }
});
jQuery(document).ready(function ($){
jQuery('#gototop').click(function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, 500);
});
});

  
  function isInViewport(thisV) {
    var elementTop = thisV.offset().top;
    var elementBottom = elementTop + thisV.outerHeight();
    var viewportTop = jQuery(window).scrollTop();
    var viewportBottom = viewportTop + jQuery(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
};

function revealleft() {
  var reveals = document.querySelectorAll(".animation_collection");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 300;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("animation_active");
    }
  }
}
window.addEventListener("scroll", revealleft);

// window.addEventListener("scroll", revealright);
// function revealright() {
//   var reveals = document.querySelectorAll("section");
//   for (var i = 0; i < reveals.length; i++) {
//     var windowHeight = window.innerHeight;
//     var elementTop = reveals[i].getBoundingClientRect().bottom;
//     var elementVisible = 50;
//     if (elementTop < windowHeight - elementVisible) {
//       reveals[i].classList.add("animation_active_reverse");
// 		$("section.active").animate({right: '0', opacity:'1'}, 1200);	
//     }
//   }
// }

jQuery(document).ready(function($) {
	var wHeight = window.innerHeight;
	//search bar middle alignment
	$('#mk-fullscreen-searchform').css('top', wHeight / 3);
	//reform search bar
	jQuery(window).resize(function() {
	  wHeight = window.innerHeight;
	  $('#mk-fullscreen-searchform').css('top', wHeight / 3);
	});
	// Search
	$('#search-button').click(function() {
	  $("div.mk-fullscreen-search-overlay").addClass("mk-fullscreen-search-overlay-show");
	});
	$("a.mk-fullscreen-close").click(function() {
	  $("div.mk-fullscreen-search-overlay").removeClass("mk-fullscreen-search-overlay-show");
	});
	$('.nav-tabs a:first').tab('show');
	$(".close_button").click(function(){
		$(".hideme").hide();
	  });
  });
