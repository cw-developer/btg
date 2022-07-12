<?php if( get_row_layout() == 'testimonials_section' ): ?>
<section class="testimonials_section-block white-bg" style="background-color: <?php echo get_sub_field('background_color');?>">
<div class="container">
<div class="row">
			<div class="col-md-12">
<div class="title_link_wrap">
	<h3><?php echo get_sub_field('title'); ?></h3>
</div>
	<?php if(have_rows('testimonials')):?>
    <div class="testimonials_outer">
	<?php while( have_rows('testimonials') ): the_row(); ?>
		<div class="testimonials_inner item">
				<div class="testimonials_content">
<?php echo get_sub_field('content');?>
		</div>
		</div>
		<?php endwhile; ?>
				</div>
				<?php endif; ?>
	</div>
</div>
</div>
</section>
<script>
  jQuery(document).ready(function ($) {

if ( $('.testimonials_outer').length > 0 ) {
		var slider = tns({
			"container": ".testimonials_outer",
			"loop": true,
			"axis": "vertical",
			"gutter": "0",		
			"mouseDrag": true,
    "nav": false,
	"dots": true,
	"controls": false,		
    "controlsText": ['<img src="' + theme_directory + '/images/chevron-left.svg">', '<img src="' + theme_directory + '/images/chevron-right.svg"></i>'],
			"autoplay": true,
			"autoplayButton": false,
			"swipeAngle": false,
			"speed": 1800,
			"responsive": {
				640: {
					"items": 1
				},
				700: {
					"items": 1
				},
				900: {
					"items": 1
				}
			}	 
		});
		
		
	}
  });
  </script>

<?php endif; ?>