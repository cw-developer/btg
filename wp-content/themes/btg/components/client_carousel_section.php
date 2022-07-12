<?php if( get_row_layout() == 'client_carousel_section' ): ?>
<section class="client_carousel_section-block white-bg" style="background-color: <?php echo get_sub_field('background_color'); ?>">
			<div class="container">
<?php if(have_rows('logos')):?>
    <div class="row client_carousel_row">
	<div class="col-lg-12">	
		<div class="logo_slider">
	<?php while( have_rows('logos') ): the_row(); ?>	
		<div class="logo_wrap image_wrap item">
<?php 
$image_id = get_sub_field('image');
$img_url = wp_get_attachment_image_src($image_id, 'full');
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
$image_title = get_the_title($image_id);
$link = get_sub_field('button_link');

	if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';				
?>
<a class="button-link button-link-<?php echo $button_type; ?> hvr-sweep-to-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
<img src="<?php echo $img_url[0]; ?>" width="<?php echo $img_url[1]; ?>" height="<?php echo $img_url[2]; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>"></a>
			<?php else: ?>
			<img src="<?php echo $img_url[0]; ?>" width="<?php echo $img_url[1]; ?>" height="<?php echo $img_url[2]; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>">
			<?php endif; ?>
</div>
		<?php endwhile; ?>
		</div>
		</div>
		</div>
		<?php endif; ?>
</div>
</section>

<script>
  jQuery(document).ready(function ($) {

if ( $('.logo_slider').length > 0 ) {
		var slider = tns({
			"container": ".logo_slider",
			"loop": true,
			"gutter": "30",		
			"mouseDrag": true,
			"slideBy": 1,
    "nav": false,
	"controls": false,
			"autoplay": true,
			"autoplayButton": false,
			"swipeAngle": false,
			"speed": 1200,
			"responsive": {
				300: {
					"items": 1,
        		    "gutter": 30,
				},
				700: {
					"items": 2,
				},
				900: {
					"items": 5
				}
			}	 
		});
	}
  });
</script>
<?php endif; ?>