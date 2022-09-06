<?php
include ('../../../../wp-config.php');
include ('../../../../wp-load.php');
global $post;
global $wpdb;

$result = '';
if (isset($_POST['country'])) {
    $country = strip_tags($_POST['country']); 
	$country_slug = strtolower(preg_replace('/\s+/', '-', $country));
    }

$args = array(
	'posts_per_page'  => '12',
	'post_type' => 'offices',	   
	'order'        => 'DESC',
	'post_status'  => 'publish',
	'tax_query' => array(
        array(
            'taxonomy' => 'countries',
            'field'    => 'slug',
            'terms'    => $country_slug,
        ),
    ),
);
$myposts = new WP_Query( $args );
if ($myposts->have_posts()) {
    $result .='<h4 class="offices_heading">Offices @ '.$country.'</h4>';
	$result .= '<div class="contact_outer_wrap '.$country_slug.'">';
	while ($myposts->have_posts()) {	  
		$myposts->the_post();
		$product_fields = get_the_terms( get_the_ID(), 'product_fields' );
		$result .= '<div class="contact_item item"><div class="contact_item_inner"><div class="contact_title_wrap">';
		$result .='<div class="country_name">'.$country.'</div>';
		$result .= '<h5>'.get_the_title().'</h5>';
		$result .= '</div>';
		if($product_fields){
		$result .= '<div class="product_fields_wrap">';
		$result .= '<h6>We deal with:</h6>';	
		foreach ( $product_fields as $product_field ) {
		$result .= '<span>'.$product_field->name.'</span>';
		}
			}
		$result .= '</div>';
		if(get_field("address", get_the_ID())){
		$result .= '<div class="address_wrap">';
		$result .= '<h6>Address:</h6>';
		$result .= get_field("address", get_the_ID());
		$result .= '</div>';
		}
		$result .= '<div class="email_phone_wrap">';
		if(get_field("email_address", get_the_ID())){
		$result .= '<p>Email: '.get_field("email_address", get_the_ID()).'</p>';
		}
		if(get_field("phone", get_the_ID())){
		$result .= '<p>Phone: '.get_field("phone", get_the_ID()).'</p>';
	}
		if(get_field("fax", get_the_ID())){
		$result .= '<p>Fax: '.get_field("fax", get_the_ID()).'</p>';	
		}
		$result .= '</div>';
		$result .= '</div></div>';
	}
	wp_reset_postdata();
	$result .= '</div>';
	$result .= '<script>contactdetails_carousel();</script>';
}
echo $result;
?>    