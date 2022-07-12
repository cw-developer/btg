<?php if( get_row_layout() == 'content_with_background_image_section' ): ?>
<section class="content_with_background_image_section-block text_image_section-block white-bg align-<?php echo get_sub_field('content_alignment'); ?> content-color-<?php echo get_sub_field('content_color'); ?> <?php echo get_sub_field('class_name'); ?>" style="background-color: <?php echo get_sub_field('background_color'); ?>;background-image: url(<?php echo get_sub_field('background_image'); ?>);">
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
    <?php $content_position = get_sub_field('content_position'); ?>
<div class="row <?php if($content_position == 'Right'){echo "row-reverse"; }?>">
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
</div>
</div>
</div>
</section>
<?php endif; ?>