<?php if( get_row_layout() == 'full_width_image_section' ): ?>
<?php $parallax = get_sub_field('parallax'); ?>
	<?php 
$image_id = get_sub_field('image');
$img_url = wp_get_attachment_image_src($image_id, 'full');
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
$image_title = get_the_title($image_id);
?>
<section class="full_width_image_section_parallax-block <?php if($parallax == "Yes"){ ?>parallax_section<?php } else { ?>no_parallax_section<?php } ?> gradient-bg no-padding white-bg" <?php if($parallax == "Yes") { ?> style="background-image: url(<?php echo $img_url[0]; ?>);" <?php } ?>>
	<?php if($parallax == "No") { ?>
	<div class="parallax_img_wrap desktop_img_wrap">
<img src="<?php echo $img_url[0]; ?>" width="<?php echo $img_url[1]; ?>" height="<?php echo $img_url[2]; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>">
	</div>
	<?php if(get_sub_field('mobile_image')){ ?>
				<div class="parallax_img_wrap mobile_img_wrap">
					<?php 
$m_image_id = get_sub_field('mobile_image');
$m_img_url = wp_get_attachment_image_src($m_image_id, 'full');
$m_image_alt = get_post_meta($m_image_id, '_wp_attachment_image_alt', TRUE);
$m_image_title = get_the_title($m_image_id);
?>
<img src="<?php echo $m_img_url[0]; ?>" width="<?php echo $m_img_url[1]; ?>" height="<?php echo $m_img_url[2]; ?>" alt="<?php echo $m_image_alt; ?>" title="<?php echo $m_image_title; ?>">
				</div>
				<?php } ?>
	<?php } ?>
</section>
<?php endif; ?>