<?php if( get_row_layout() == 'image_with_short_content_section' ): 	
$html = '';
$background_color = get_sub_field('background_color');
$image_alignment = get_sub_field('image_alignment');
$content_color = get_sub_field('content_color');
$content_width = get_sub_field('content_width'); 
$customclass = get_sub_field('custom_class');
$content_align = get_sub_field('content_alignment');
$content = get_sub_field('content');
$image = get_sub_field('image');


if($image_alignment == 'Left')
{
  $imagealign = 'row-reverse';
  $padding = 'ps-5 pe-3';
}
else if($image_alignment == 'Right')
{
 $imagealign = '';
 $padding = 'pe-5 ps-3';
}
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
			
$html .= '<section class="image_with_short_content_section mid-box-animation '.$customclass.' '.$animationclass.' content-color-'.$content_color.' align-'.$content_align.'" style="background-color: '.$background_color.'"><div class="container-fluid p-0"><div class="'.$column_class.'">';
$html .= '<div class="row '. $imagealign .'"><div class="col-lg-5 d-flex align-items-center '.$padding.'">';
$html .= '<div class="content_wrap">'.$content.'</div>';
$html .= '</div><div class="col-lg-7">';
if(!empty($image)){
$html .= '<div class="image-wrap"><img src="'.$image['url'].'" title="'.$image['title'].'" alt="'.$image['alt'].'" width="'.$image['width'].'" height="'.$image['height'].'"></div>';
}
$html .= '</div>';
$html .= '</div></div></div></section>';
echo $html;
endif; ?>