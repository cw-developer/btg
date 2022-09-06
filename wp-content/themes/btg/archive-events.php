<?php
/**
 * The template for displaying archive pages
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
				<div class="breadcrumbs_wrap"><?php echo get_breadcrumb(); ?></div>
			<h1><?php post_type_archive_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
<section id="innerpage_content" class="innerpage_content blog_listing_content events_listing_content">
	<div class="container_fluid">
		<div class="image_section">
		<?php 	
$image = get_field('events_blog_section_banner', 'option');
$html = '';
$html .= '<img src="'.$image['url'].'" title="'.$image['title'].'" alt="'.$image['alt'].'" width="'.$image['width'].'" height="'.$image['height'].'">';
echo $html;
?>
		</div>
		<div class="container">
			<div class="col-lg-10 mx-auto">
		<?php if ( have_posts() ) : ?>
			<div class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			//the_posts_navigation();
			// btg_numeric_posts_nav(); 
			global $wp_query;
if ($wp_query->max_num_pages > 1): echo '<button class="rf_loadmore"><span class="load_more_content">Load More<span><img src="'.site_url().'/wp-content/uploads/2022/07/horizontal-arrow-svg.svg"></span></span></button>';
		endif;
		
			else:

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>		
		</div>
	</div>
	</div>
	</div>
</section>
<?php
echo do_shortcode('[download_assets]');
get_footer();