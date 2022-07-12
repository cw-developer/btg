<?php if( get_row_layout() == 'two_column_content_section' ): ?>
<?php $content_right_alignment = get_sub_field('content_right_alignment'); ?>
<?php $content_left_alignment = get_sub_field('content_left_alignment'); ?>
<?php $content_color = get_sub_field('content_color'); ?>
<section class="text_image_section-block two_column_content_section-block section-padding content-color-<?php echo $content_color;?>" style="background-color: <?php echo get_sub_field('background_color'); ?>">
			<div class="container">
<div class="row">
<div class="col-md-6">
	<div class="content_wrap align-<?php echo $content_left_alignment; ?>">
<?php echo get_sub_field('content_left'); ?>
<?php if(have_rows('button_group_left')):?>
    <?php while( have_rows('button_group_left') ): the_row(); 	
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
	<div class="content_wrap align-<?php echo $content_right_alignment; ?>">
<?php echo get_sub_field('content_right'); ?>
<?php if(have_rows('button_group_right')):?>
    <?php while( have_rows('button_group_right') ): the_row(); 	
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
</section>
<?php endif; ?>