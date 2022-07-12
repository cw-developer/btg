<?php if( get_row_layout() == 'text_image_section' ): ?>
<section class="text_image_section-block white-bg" style="background-color: <?php echo get_sub_field('background_color'); ?>">
			<div class="container">
    <?php $image_position = get_sub_field('image_position'); ?>
<div class="row <?php if($image_position == 'Left'){echo "row-reverse"; }?>">
<div class="col-md-6">
<div class="content_wrap">		
<?php echo get_sub_field('content'); ?>
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
	</div>
<div class="col-md-6">
<div class="image_wrap">
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