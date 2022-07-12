<?php if( get_row_layout() == 'text_video_section' ): ?>
 <?php $video_position = get_sub_field('video_position'); ?>
<section class="text_video_section-block text_image_section-block white-bg media_align-<?php echo $video_position; ?>" style="background-color: <?php echo get_sub_field('background_color'); ?>">
			<div class="container">
    <?php $video_position = get_sub_field('video_position'); ?>
<div class="row <?php if($video_position == 'Left'){echo "row-reverse"; }?>">
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
<div class="image_wrap video_wrap">
<?php echo get_sub_field('video'); ?>
</div> 
</div>
</div>
</div>
</section>
<?php endif; ?>