<?php if( get_row_layout() == 'global_section' ): ?>
  <?php $section = "[".get_sub_field('select_section')."]";  ?>
  <?php echo do_shortcode($section); ?>
<?php endif; ?>