<?php if( get_row_layout() == 'standard_content_section' ): 
$html = '';
$background_color = get_sub_field('background_color');
$content_color = get_sub_field('content_color');
$content_width = get_sub_field('content_width'); 
$content_align = get_sub_field('content_alignment');
$content = get_sub_field('content');
$standardcontents = get_sub_field('standard_list');
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
$html .= '<section class="standard_content_section icon-animation bottom-box-section text-left-animation animation_collection content-color-'.$content_color.' align-'.$content_align.' '.$customclass.'" style="background-color: '.$background_color.'"><div class="container"><div class="row"><div class="'.$column_class.' pb-lg-4"><div class="content_wrap px-lg-5">';
$html .= $content;
$html .= '</div></div></div><div class ="row">';
foreach($standardcontents as $standardcontent)
{
$html .= '<div class="col-lg-3 col-6 pb-lg-5"><div class="content_wrap px-lg-5"><div class="image-wrap"><img src="'.$standardcontent['image']['url'].'" title="'.$standardcontent['image']['title'].'" alt="'.$standardcontent['image']['alt'].'" width="'.$standardcontent['image']['width'].'" height="'.$standardcontent['image']['height'].'"></div>';
$html .= '<h5 class="standard_title">'.$standardcontent['content'].'</h5></div></div>';
}
$html .= '</div></div></section>';
echo $html;
endif; ?>