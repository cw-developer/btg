<?php
/* Template Name: Flexible Content */

get_header();

$page_content = '';
$title_visibility = get_field('show_title');
if(! is_page('home')){ 
	if($title_visibility == "Yes")
	{	
$page_content .= '<section id="innerpage_banner" class="innerpage_banner">';
$page_content .= '<div class="container"><div class="row"><div class="col-md-12">';
$page_content .= '<h1>'.get_the_title().'</h1>';
$page_content .= '</div></div></div>';
$page_content .= '</section>';
	}
}
echo $page_content;

if ( ! post_password_required() ) {
	if ( have_rows( 'components' ) ):
		while ( have_rows( 'components' ) ) : the_row();
			get_components();
	    endwhile;
	endif;
} else { 
?><div class="without-password">
<?php the_content(); ?>
</div>
<?php
}
get_footer(); ?>