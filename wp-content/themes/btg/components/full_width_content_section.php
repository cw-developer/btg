<?php if( get_row_layout() == 'full_width_content_section' ): ?>
<section class="full_width_content_section-block align-<?php echo get_sub_field('content_alignment'); ?> content-color-<?php echo get_sub_field('content_color'); ?>" style="background-color: <?php echo get_sub_field('background_color'); ?>">
<div class="container">
<div class="row">
<div class="col-md-12">
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
</div>
</div>
</section>
<?php endif; ?>