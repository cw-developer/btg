<?php if( get_row_layout() == 'big_text_with_content_section' ): 	
$html = '';
$background_color = get_sub_field('background_color');
$bigtext_alignment = get_sub_field('big_text_alignment');
$content_color = get_sub_field('content_color');
$content_width = get_sub_field('content_width'); 
$content_align = get_sub_field('content_alignment');
$customclass = get_sub_field('custom_class');
$leftcontent = get_sub_field('left_content');
$rightcontent = get_sub_field('right_content');

if($bigtext_alignment == 'Left')
{
  $imagealign = 'row-reverse';
}
else if($bigtext_alignment == 'Right')
{
 $imagealign = '';
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
            
$html .= '<section class="big_text_with_content_section bottom-box-section '.$customclass.' '.$animationclass.' content-color-'.$content_color.' align-'.$content_align.'" style="background-color: '.$background_color.'"><div class="container"><div class="'.$column_class.'">';
$html .= '<div class="row '. $imagealign .'"><div class="col-lg-6 d-flex align-items-center">';
$html .= '<div class="content_wrap px-5">'.$leftcontent.'</div>';
$html .= '</div><div class="col-lg-6 col-lg-6 d-flex align-items-center">';
$html .= '<div class="content_wrap">'.$rightcontent.'</div>';
$html .= '</div>';
$html .= '</div></div></div></section>';
echo $html;
endif; ?>
