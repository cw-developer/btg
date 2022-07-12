<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package btg
 */

get_header();
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
<section id="innerpage_content" class="innerpage_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
					<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile; // End of the loop.
					?>	
					</div>
	</div>
	</div>
</section>

<?php get_footer(); ?>
