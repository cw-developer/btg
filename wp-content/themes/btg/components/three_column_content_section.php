<?php if( get_row_layout() == 'three_column_content_section' ): ?>
<section class="service_intro_section-block three_column_content_section-block white-bg" style="background-color: <?php echo get_sub_field('background_color'); ?>">
<div class="container">
	<div class="row">
	<div class="col-md-12">	
<?php if(have_rows('content_boxes')):?>
    <div class="content_boxes_row">
	<?php while( have_rows('content_boxes') ): the_row(); ?>	
	<div class="content_box">
<div class="content_wrap">		
<?php echo get_sub_field('content'); ?>
	</div>
	</div>
		<?php endwhile; ?>
		</div>
		<?php endif; ?>
		</div>
	</div>
</div>
</section>
<?php endif; ?>