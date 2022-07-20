<?php if( get_row_layout() == 'extended_image_with_content_section' ): 	
$html = '';
$background_color = get_sub_field('background_color');
$image_alignment = get_sub_field('image_alignment');
$content_color = get_sub_field('content_color');
$content_align = get_sub_field('content_alignment');
$content_width = get_sub_field('content_width'); 
$content = get_sub_field('content');
$image = get_sub_field('image');
$animation = get_sub_field('animation');
$customclass = get_sub_field('custom_class');
if($animation == 'Box Left Animation')
{
 $animationclass = 'background-box-left-animation';
}
else if($animation == 'Box Right Animation')
{
	$animationclass = 'background-box-right-animation';
}
else if($animation == 'Box Move Animation')
{
	$animationclass = 'background-box-move-animation';
}
else if($animation == 'No Animation')
{
	$animationclass = '';
}
if($image_alignment == 'Left')
{
  $imagealign = 'row-reverse';
  $padding = 'ps-5';
}
else if($image_alignment == 'Right')
{
 $imagealign = '';
 $padding = 'pe-5';
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
            
$html .= '<section class="extended_image_with_content_section animation_collection '.$customclass.' '.$animationclass.' content-color-'.$content_color.' align-'.$content_align.'" style="background-color: '.$background_color.'"><div class="container-fluid p-0"><div class="'.$column_class.'">';
$html .= '<div class="row '. $imagealign .'"><div class="col-lg-6 d-flex align-items-center '.$padding.'">';
$html .= '<div class="content_wrap">'.$content.'</div>';
$html .= '</div><div class="col-lg-6">';
if(!empty($image)){
$html .= '<div class="image-wrap"><img src="'.$image['url'].'" title="'.$image['title'].'" alt="'.$image['alt'].'" width="'.$image['width'].'" height="'.$image['height'].'"></div>';
}
$html .= '</div>';
$html .= '</div></div></div></section>';
echo $html;
endif; ?>