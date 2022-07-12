<?php if( get_row_layout() == 'image_section' ): ?>
<section class="image_section-block gradient-bg white-bg" style="background-color: <?php echo get_sub_field('background_color'); ?>">
			<div class="container">
    <?php $image_position = get_sub_field('image_position'); ?>
<div class="row">
<div class="col-md-12">
<div class="image_wrap align-<?php echo $image_position; ?>">
 <?php 
$image_id = get_sub_field('image');
$img_url = wp_get_attachment_image_src($image_id, 'full');
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
$image_title = get_the_title($image_id);
?>
<img src="<?php echo $img_url[0]; ?>" width="<?php echo $img_url[1]; ?>" height="<?php echo $img_url[2]; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>"> 
</div> 
</div>
</div>
</div>
</section>
<?php endif; ?>