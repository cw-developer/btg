/** btg **/
function pressrelease_carousel() {
  if ( $('.pr_outer_wrap').length > 0 ) {
		var slider = tns({
			"container": ".pr_outer_wrap",
			"loop": true,
			"gutter": "30",		
			"mouseDrag": true,
			"slideBy": 1,
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
			"slideBy": 1,
    "nav": false,	
    "controlsText": ['<img src="' + theme_directory + '/images/arrow-left.svg">', '<img src="' + theme_directory + '/images/arrow-right.svg"></i>'],
			"autoplay": false,
			"autoplayButton": false,
			"swipeAngle": false,
			"speed": 1200,
			"responsive": {
				300: {
					"items": 1.4,
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
function contactdetails_carousel() {
  if ( $('.contact_outer_wrap').length > 0 ) {
		var slider = tns({
			"container": ".contact_outer_wrap",
			"loop": false,
			"gutter": "30",		
			"mouseDrag": true,
			"slideBy": 1,
    "nav": false,	
    "controlsText": ['<img src="' + theme_directory + '/images/arrow-left.svg">', '<img src="' + theme_directory + '/images/arrow-right.svg"></i>'],
			"autoplay": false,
			"autoplayButton": false,
			"swipeAngle": false,
			"speed": 1200,
			"responsive": {
				300: {
					"items": 1
				},
				700: {
					"items": 2
				},
				900: {
					"items": 3
				}
			}	 
		});		
	}
}
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

function lightGallery() {
jQuery(document).ready(function ($){
$('.lightgallerylogo').lightGallery({   
selector: '.lightgallerylogo .item a.view_gallery'
});
$('.lightgalleryphotos').lightGallery({   
selector: '.lightgalleryphotos .item a.view_gallery'
});
$('.lightgallery_certificate').lightGallery({    
selector: '.lightgallery_certificate .item a.view_gallery'
});
$('.video_item_wrap').lightGallery({    
plugins: [lgVideo],
selector: '.video_item_wrap .item a.view_gallery'
});
});
}

function about_tools() {
jQuery(document).ready(function ($){
$('.nav-tabs a:first').tab('show');
setTimeout(function () {$(".btg_protocol_block").addClass('hide');
}, 5000);
$(".close_button").click(function(){
$(".btg_protocol_block").toggleClass("protocol_min");
});
});
}
function home_page_hover() {
jQuery(document).ready(function ($){
$('.article_title_wrap a').hover(function () { $(this).parents('.pr_wrap').toggleClass('title-hover'); });
$('.pr_readmore_wrap a').hover(function () { $(this).parents('.pr_wrap').toggleClass('readmore-hover'); });
$('.pressrelease .blog_thumb_wrap.cw_thumb_wrap h6 a').hover(function() {
$(this).parents('.blog_post').toggleClass('title-hover');
});
});
}
function pressrelease_hover() {
jQuery(document).ready(function ($){
$('.pressrelease .post_details p a').hover(function() {
$(this).parents('.blog_post').toggleClass('readmore-hover');
});
});
}

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
$(".footer_menu_more").click(function(){
  $('.row.footer_bottom_row').slideToggle();
});
var wHeight = window.innerHeight;
$('#mk-fullscreen-searchform').css('top', wHeight / 3);
jQuery(window).resize(function() {
wHeight = window.innerHeight;
$('#mk-fullscreen-searchform').css('top', wHeight / 3);
});
$('#search-button').click(function() {
$("div.mk-fullscreen-search-overlay").addClass("mk-fullscreen-search-overlay-show");
});
$("a.mk-fullscreen-close").click(function() {
$("div.mk-fullscreen-search-overlay").removeClass("mk-fullscreen-search-overlay-show");
});
var url = window.location.href;
var activeTab = url.substring(url.indexOf("#") + 1);
$('a[href="#'+ activeTab +'"]').tab('show');
});