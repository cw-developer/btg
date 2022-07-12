<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package btg
 */

get_header();
?>
<section id="innerpage_banner" class="innerpage_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h1 class="page-title"><?php echo get_field('not_found_page_title', 'option') ?></h1>
			</div>
		</div>
	</div>
</section>
	<section class="text_image_section-block gradient-bg section-padding white-bg" style="background-color: <?php echo get_field('not_found_background_color', 'option') ?>">

			<div class="container">
    <?php $image_position = get_field('not_found_image_position', 'option'); ?>
<div class="row <?php if($image_position == 'Left'){echo "row-reverse"; }?>">
<div class="col-md-6">
	<?php if(get_field('not_found_highlighted_title')){?>
<h2 class="multi_color_heading"><?php echo get_field('not_found_highlighted_title', 'option'); ?></h2>
	<?php } ?>
<?php echo get_field('not_found_content', 'option'); ?>
<?php if(have_rows('button_group')):?>
    <?php while( have_rows('button_group') ): the_row(); 	
$button_type = get_sub_field('button_type'); 
$link = get_sub_field('button_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
	<div class="button_wrap">
    <a class="button-link button-link-<?php echo $button_type; ?> hvr-sweep-to-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
	</div>
	
<?php endif; ?>
	<?php endwhile; ?>
<?php endif;?>
</div>
<div class="col-md-6">
	 <?php $image_alignment = get_field('not_found_image_alignment', 'option'); ?>
<div class="image_wrap image-<?php echo $image_alignment; ?>">
 <?php 
$nf_image_id = get_field('not_found_image', 'option');
$nf_img_url = wp_get_attachment_image_src($nf_image_id, 'full');
$nf_image_alt = get_post_meta($nf_image_id, '_wp_attachment_image_alt', TRUE);
$nf_image_title = get_the_title($nf_image_id);
?>
<img src="<?php echo $nf_img_url[0]; ?>" alt="<?php echo $nf_image_alt; ?>" title="<?php echo $nf_image_title; ?>"> 
</div> 
</div>
</div>
</div>
</section>

<?php
get_footer();
