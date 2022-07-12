<?php if( get_row_layout() == 'text_and_image_full_width_section' ): ?>
<?php $content_alignment = get_sub_field('content_alignment'); ?>
<section class="text_and_image_full_width_section-block gradient-bg section-padding white-bg align-<?php echo $content_alignment; ?> content-color-<?php echo get_sub_field('content_color');?>" style="background-color: <?php echo get_sub_field('background_color');?>">
<div class="container">
    <?php $image_position = get_sub_field('image_position'); ?>
<div class="row <?php if($image_position == 'left'){echo "row-reverse"; }?>">
<?php $content_width = get_sub_field('content_width'); 
		if($content_width == "Medium")
		{ ?>
		<div class="col-lg-9 col-md-10 mx-auto">	
		<?php } elseif($content_width == "Small") { ?>
		<div class="col-lg-7 col-md-10 mx-auto">	
		<?php } elseif($content_width == "Full") { ?>
		<div class="col-md-12">	
			<?php } else { ?>
			<div class="col-md-12">
				<?php }  
	 if(get_sub_field('content'))
	 {
	 ?>
  <div class="fullwidth_content_wrap">
<?php echo get_sub_field('content'); ?>
</div>
	 <?php } ?>
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
<?php  
$containerwidth = get_sub_field('content_width');
  if($containerwidth == "ControlledWidth")
  { ?>
<div class="col-md-8 mx-auto">
 <?php } else { ?> 
 <div class="col-md-12"> 
   <?php } ?>
<?php $image_alignment = get_sub_field('image_alignment'); ?>
	 <?php if(get_sub_field('image')){ ?>
<div class="image_wrap align-<?php echo $image_alignment; ?>">
  <?php 
$image_id = get_sub_field('image');
$img_url = wp_get_attachment_image_src($image_id, 'full');
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
$image_title = get_the_title($image_id);
?>
<img src="<?php echo $img_url[0]; ?>" width="<?php echo $img_url[1]; ?>" height="<?php echo $img_url[2]; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>"> 
</div> 
	 <?php } ?>
</div>
</div>
</div>
</section>
<?php endif; ?>