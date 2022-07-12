<?php if( get_row_layout() == 'faq_section' ): ?>
<?php $content_alignment = get_sub_field('content_alignment'); ?>
<section class="faq_section-block gradient-bg section-padding white-bg" style="background-color: <?php echo get_sub_field('background_color');?>">
<div class="container">
<div class="row">

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
  <div class="fullwidth_content_wrap  content-color-<?php echo get_sub_field('content_color');?> align-<?php echo get_sub_field('content_alignment'); ?>  ">
<?php echo get_sub_field('content'); ?>
</div>
	 <?php } ?>
	</div>
	  <?php if(have_rows('faqs')):?>
	<div class="accordion" id="accordionFAQ">
<div class="row faq_boxes_row">
	<?php $faq_counter = 0; ?>
<?php while(have_rows('faqs')): the_row();?>
	<?php $faq_counter++; ?>
		<div class="col-lg-6 col-md-12">
  <div class="accordion-item">
		<h2 class="accordion-header" id="faq<?php echo $faq_counter; ?>">
      <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $faq_counter; ?>" aria-expanded="false" aria-controls="collapse<?php echo $faq_counter; ?>">
       <?php echo get_sub_field('title');?>
      </button>
    </h2>
    <div id="collapse<?php echo $faq_counter; ?>" class="accordion-collapse collapse" aria-labelledby="faq<?php echo $faq_counter; ?>" data-parent="#accordionFAQ">
      <div class="accordion-body">
<?php echo get_sub_field('content');?>
    </div>
</div>
		</div>
			</div>
		<?php endwhile;?>
	</div>
</div>
<?php endif;?>
</div>
</div>
</div>
</section>
<?php endif;?>