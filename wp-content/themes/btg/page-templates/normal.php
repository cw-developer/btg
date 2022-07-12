<?php
/* Template Name: Flexible Content */

get_header();

?>	

<?php 
if(! is_page('home')){ ?>	
<?php $title_visibility = get_field('show_title'); 
if($title_visibility == "No")
{} else{
?>
	<section id="innerpage_banner" class="innerpage_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
<?php
}
}

if ( ! post_password_required() ) {
	if ( have_rows( 'components' ) ):
		while ( have_rows( 'components' ) ) : the_row();
			get_components();
	    endwhile;
	endif;
} else { ?>
	<div class="without-password">
		<?php the_content(); ?>
	</div>
<?php } ?>

<?php get_footer(); ?>