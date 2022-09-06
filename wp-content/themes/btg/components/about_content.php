<?php if( get_row_layout() == 'about_tab_content' ): 
$html = '';
$background_color = get_sub_field('background_color');
$about_title = get_sub_field('tab_content_title');
$removespace = preg_replace('/\s+/', '', $about_title);
$aboutclass = strtolower($removespace);
$class = get_sub_field('custom_class');
$customspacespace = preg_replace('/\s+/', '', $customclass);
$customclass = strtolower($customspacespace);
if($content_width == "Medium")
		{ 
      		$column_class = "col-lg-10 col-md-10 mx-auto";	
		} else if($content_width == "Small") { 
      $column_class = "col-lg-7 col-md-10 mx-auto";	
		 } else if($content_width == "Full") { 
      $column_class = "col-md-12";
		 } else { 
			$column_class = "col-md-12";
			}
if ( ! post_password_required() ) {
if ( have_rows( 'tab_content' ) ): 
?>
<section id="<?php echo  $aboutclass; ?>" class="tab-pane <?php echo $customclass ?>" style="background-color:<?php echo $background_color ?>">
	<?php while ( have_rows( 'tab_content' ) ) : the_row();
	echo $i;	
	get_sub_field('tab_content_title');
		get_about_components();
	endwhile;?>
</section>
<script>about_tools();</script>
<?php
endif;
}
echo $html;
endif; ?>