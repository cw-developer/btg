<?php if( get_row_layout() == 'team_details_section' ): 	
$html = '';
$background_color = get_sub_field('background_color');
$content_color = get_sub_field('content_color');
$content_width = get_sub_field('content_width'); 
$content_align = get_sub_field('content_alignment');
$teamdetails = get_sub_field('team_details');
$customclass = get_sub_field('custom_class');
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
$html .= '<section class="team_details_section text-left-animation animation_collection bottom-box-section middle-box-section '.$customclass.' '.$animationclass.' content-color-'.$content_color.' align-'.$content_align.'" style="background-color: '.$background_color.'"><div class="container"><div class="'.$column_class.'">';
$html .= '<div class="row">';
$html .= '<div class="team_details_wrap">';
foreach($teamdetails as $teamdetail)
{
$html .= '<div class="team_details">';
if(!empty($teamdetail['image'])){
$html .= '<div class="image-wrap"><img src="'.$teamdetail['image']['url'].'" title="'.$teamdetail['image']['title'].'" alt="'.$teamdetail['image']['alt'].'" width="'.$teamdetail['image']['width'].'" height="'.$teamdetail['image']['height'].'"></div>';
}
else
{
	$html .= '<div class="image-wrap"><img src="'.site_url().'/wp-content/uploads/2022/07/no-image.png" title="no-image" alt="no-image" width="'.$teamdetail['image']['width'].'" height="'.$teamdetail['image']['height'].'"></div>';
}
$html .= '<div class="content_wrap"><h5 class="name">'.$teamdetail['name'].'</h5><p class="description role">'.$teamdetail['role'].'</p><p class="description">'.$teamdetail['description'].'</p></div>';  
$html .= '</div>';
}
$html .= '</div></div></div></div></section>';
echo $html;
endif; ?>