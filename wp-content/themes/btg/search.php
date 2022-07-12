<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package btg
 */

get_header();
?>
<section id="innerpage_banner" class="innerpage_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h1><?php echo get_search_query(); ?></h1>
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

				get_template_part( 'template-parts/content', 'search' );

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
