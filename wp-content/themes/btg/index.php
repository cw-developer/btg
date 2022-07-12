<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
			<h1><?php the_archive_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
	<section id="innerpage_content" class="innerpage_content blog_listing_content">
	<div class="container">
		<div class="row">
					<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			//the_posts_navigation();
			btg_numeric_posts_nav(); 

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>		
	</div>
	</div>
</section>

<?php
get_footer();