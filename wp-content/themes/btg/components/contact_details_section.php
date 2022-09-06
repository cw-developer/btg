<?php if( get_row_layout() == 'contact_details_section' ): 
$html = '';
$top_content = get_sub_field('top_content');
$bottom_content = get_sub_field('bottom_content');
$background_color = get_sub_field('background_color');
$countries = get_terms('countries', array() );
$html .= '<section class="contact_details_section-block" style="background-color: '.$background_color.'">';
$html .= '<div class="container"><div class="row"><div class="col-md-12">';
$html .= '<div class="content_wrap top_content_wrap">';
$html .= $top_content;
$html .= '</div>';
$html .= '<div class="contact_details_wrap">';
$html .= '<form action="">';
if ( !empty( $countries ) && !is_wp_error( $countries ) ){
    $html .= '<label>Select a Country</label>';
    $html .= '<select id="country_selector">';
    $html .= '<option selected disabled="disabled">Country</option>';
    foreach ( $countries as $term ) {
        $html .= '<option>'.$term->name.'</option>';

    }
    $html .= '</select>';
}
$html .= '</div>';
$html .= '<div class="loader_with_content_wrap"><div class="contact_results">';
$html .= '</div>';
$html .= '<div id="loader_div" style="display:none;"><img id="loading-image" src="'.site_url().'/wp-content/uploads/2022/08/loading_dual_ring.gif"/></div></div>';
$html .= '<div class="content_wrap bottom_content_wrap">';
$html .= $bottom_content;
$html .= '</div>';
$html .= '</div></div></div>';
$html .= '</section>';
echo $html;
?><script>
    jQuery(document).ready(function($){
        $('select#country_selector').on('change', function() {
      var country = this.value;
	var ajaxurl = site_directory+"/wp-admin/admin-ajax.php";
			
    $.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {
		country: country,
	    action: "get_contact_details"
		},
		beforeSend: function() {
              $("#loader_div").show();
           },
        success: function(data) {
			$("#loader_div").hide();
            $('.contact_results').html(data);
        },
        error: function(data) {
            console.log('Error');
        },
    });
  });
});
    </script>

<?php endif; ?>