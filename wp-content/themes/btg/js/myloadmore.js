jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
	$('.rf_loadmore').click(function(){
 
		var button = $(this),
		    data = {
			'action': 'loadmore',
			'query': rf_loadmore_params.posts, // that's how we get params from wp_localize_script() function
			'page' : rf_loadmore_params.current_page
		};
 
		$.ajax({ // you can also use $.post here
			url : rf_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				$('.rf_loadmore > span').text('Loading...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) { 
					button.html( '<span class="load_more_content">Load More<span><img src="../../../wp-content/uploads/2022/07/horizontal-arrow-svg.svg"></span></span>' ).prev().before(data); // insert new posts
					rf_loadmore_params.current_page++;
					if ( rf_loadmore_params.current_page == rf_loadmore_params.max_page ) 
						button.remove(); // if last page, remove the button
 
					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});
});
