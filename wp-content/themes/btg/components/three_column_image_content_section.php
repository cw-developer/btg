<?php if( get_row_layout() == 'three_column_image_content_section' ): ?>
<section class="three_column_image_content_section-block white-bg  align-<?php echo get_sub_field('content_alignment'); ?> content-color-<?php echo get_sub_field('content_color'); ?> " style="background-color: <?php echo get_sub_field('background_color'); ?>">
	<?php $content_width = get_sub_field('content_width'); 
		if($content_width == "Medium")
		{ ?>
		<div class="container medium-container">	
		<?php } elseif($content_width == "Small") { ?>
		<div class="container small-container">	
		<?php } elseif($content_width == "Full") { ?>
		<div class="container">	
			<?php } else { ?>
			<div class="container">
				<?php } ?>
				<div class="row">
<div class="col-md-12">
<div class="content_wrap title_content_wrap">		
<?php echo get_sub_field('title_content'); ?>
	</div>
					</div>
				</div>
<?php if(have_rows('image_content_boxes')):?>
    <div class="row content_boxes_images_row">
	<?php while( have_rows('image_content_boxes') ): the_row(); ?>	
	<div class="col-lg-4 col-md-6">
		<div class="content_image_box">
		<div class="image_wrap">
<?php 
$image_id = get_sub_field('image');
$img_url = wp_get_attachment_image_src($image_id, 'full');
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
$image_title = get_the_title($image_id);
?>
<img src="<?php echo $img_url[0]; ?>" width="<?php echo $img_url[1]; ?>" height="<?php echo $img_url[2]; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>"> 
</div> 	
<div class="content_wrap">		
<?php echo get_sub_field('content'); ?>
	</div>
		</div>
		</div>
		<?php endwhile; ?>
		</div>
		<?php endif; ?>
</div>
</section>
<?php endif; ?>