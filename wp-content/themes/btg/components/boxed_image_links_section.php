<?php if( get_row_layout() == 'boxed_image_links_section' ): ?>
<section class="boxed_image_links_section-block white-bg" style="background-color: <?php echo get_sub_field('background_color');?>">
<div class="container">
	<div class="row">
<div class="col-md-12">
<div class="content_wrap">		
<?php echo get_sub_field('content'); ?>
	</div>
		</div>
	</div>
	  <?php if(have_rows('boxes')):?>
<div class="row boxedimg_row">
<?php while(have_rows('boxes')): the_row();?>
		<div class="col-lg-4 col-md-6">
<div class="boxed-item">
<?php 
$image_id = get_sub_field('image');
$img_url = wp_get_attachment_image_src($image_id, 'full');
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
$image_title = get_the_title($image_id);
$link = get_sub_field('link');
if($link) {
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
	?> <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><img src="<?php echo $img_url[0]; ?>" width="<?php echo $img_url[1]; ?>" height="<?php echo $img_url[2]; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>">  </a> <?php } else { ?>
<img src="<?php echo $img_url[0]; ?>" width="<?php echo $img_url[1]; ?>" height="<?php echo $img_url[2]; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>">  
	<?php } ?>
</div>
			</div>
		<?php endwhile;?>
	</div>
	<?php endif;?>
</div>
</section>
<?php endif; ?>