<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package btg
 */

get_header();
?>
<section id="single_banner" class="innerpage_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto">
			<div class="breadcrumbs_wrap"><ul id="breadcrumbs" class="breadcrumbs"><li class="item-home"><a class="bread-link bread-home" href="https://btgdev.azurewebsites.net" title="Home">Home</a></li><li class="separator separator-home"> / </li><li class="item-cat item-custom-post-type-careers"><a class="bread-cat bread-custom-post-type-careers" href="https://btgdev.azurewebsites.net/careers/" title="Careers">Careers</a></li></ul></div>
				<h1><?php echo get_post_type(); ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="cw_blog_single_content cw_career_single_content pt-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h3><?php echo the_title(); ?></h3>
			<p class="date"><?php echo get_the_date('Y-m-d'); ?></p>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<?php the_content(); ?>
			<?php						
			endwhile; // End of the loop.
			echo '<h6 class="file_title">Download the job desc</h6>';
			$file = get_field('pdf_download');
			$url = $file['url'];
			$title = $file['title'];
			$caption = $file['caption'];
			$icon = $file['icon'];
		
if( $file ): ?>
        <a class="file_wrap" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>" download><img src="<?php echo site_url() ?>/wp-content/uploads/2022/07/download-pdf-svg.svg"><span class="file_title"><?php echo $title; ?></span></a>
<?php endif; ?>
			</div>
			 </div>
		</div>
</section>
<?php
echo do_shortcode('[download_assets]');
get_footer();