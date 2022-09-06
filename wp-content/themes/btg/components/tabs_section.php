<?php if( get_row_layout() == 'tabs_section' ): ?>
<?php
if(isset($_GET['active'])){
    $activetab = $_GET['active'];
}
?>
<section class="tabs_section-block gradient-bg section-padding white-bg">
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
				<?php } ?>
<div class="cw_tabs">	
    <?php
if( have_rows('tabs') ):

$i = 1; // Set the increment variable
	
	echo '<ul class="nav nav-tabs" id="myTab" role="tablist">';
 	
 	// loop through the rows of data for the tab header
    	while ( have_rows('tabs') ) : the_row();
        $header = get_sub_field('header');
	$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $header)));
        $content = get_sub_field('content'); 
		if($activetab)
	{
	if($activetab == $slug)
	{
	?>	<li class="nav-item">
    		<a class="nav-link <?php echo 'active';?>" id="<?php echo sanitize_title($header); ?>-tab" data-toggle="tab" href="#<?php echo sanitize_title($header); ?>" role="tab" aria-controls="<?php echo sanitize_title($header); ?>" aria-selected="true"><?php echo $header; ?></a>
	</li><?php	
	}
		else{
		?><li class="nav-item">
    		<a class="nav-link" id="<?php echo sanitize_title($header); ?>-tab" data-toggle="tab" href="#<?php echo sanitize_title($header); ?>" role="tab" aria-controls="<?php echo sanitize_title($header); ?>" aria-selected="true"><?php echo $header; ?></a>
	</li><?php	
		}
	}
	else{
		?>	<li class="nav-item">
    		<a class="nav-link <?php if($i == 1) echo 'active';?>" id="<?php echo sanitize_title($header); ?>-tab" data-toggle="tab" href="#<?php echo sanitize_title($header); ?>" role="tab" aria-controls="<?php echo sanitize_title($header); ?>" aria-selected="true"><?php echo $header; ?></a>
	</li><?php
	}
	?>
	              
	<?php   $i++; // Increment the increment variable

	endwhile; //End the loop 
	
	echo '</ul>
	<div class="tab-content" id="myTabContent">';
	$i = 1; // Set the increment variable
	
	// loop through the rows of data for the tab content
	while ( have_rows('tabs') ) : the_row();
    $header = get_sub_field('header');
	$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $header)));
    $content = get_sub_field('content'); 
	?>
	<?php
	  if($activetab)
	{
	if($activetab == $slug)
	{
	?>	<div class="tab-pane fade show <?php echo 'active';?>" id="<?php echo sanitize_title($header); ?>" role="tabpanel" aria-labelledby="<?php echo sanitize_title($header); ?>-tab"><?php	
	}
		else{
		?><div class="tab-pane fade show" id="<?php echo sanitize_title($header); ?>" role="tabpanel" aria-labelledby="<?php echo sanitize_title($header); ?>-tab"><?php	
		}
	}
	else{
		?>	<div class="tab-pane fade show <?php if($i == 1) echo 'active';?>" id="<?php echo sanitize_title($header); ?>" role="tabpanel" aria-labelledby="<?php echo sanitize_title($header); ?>-tab">
        <?php
	} ?>
      <div class="tab_content technology_content">
      <?php echo $content; ?>
	</div>
	</div>

	<?php   $i++; // Increment the increment variable
		
	endwhile; //End the loop 
	
	echo '</div>';

else :

    // no rows found

endif;
?>
</div> 
</div>
</div>
</div> 
</div>
</section>
<?php endif; ?>