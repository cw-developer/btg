<?php if( get_row_layout() == 'compliance_and_whistleblowing_section' ): 	
$html = '';
$background_color = get_sub_field('background_color');
$bigtext_alignment = get_sub_field('big_text_alignment');
$content_color = get_sub_field('content_color');
$content_width = get_sub_field('content_width'); 
$customclass = get_sub_field('custom_class');
$content_align = get_sub_field('content_alignment');
$leftcontent = get_sub_field('left_content');
$rightcontents = get_sub_field('right_content');
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
$html .= '<section class="compliance_and_whistleblowing_section text-left-animation animation_collection '.$customclass.' '.$animationclass.' content-color-'.$content_color.' align-'.$content_align.' '.$customclass.'" style="background-color: '.$background_color.'"><div class="container"><div class="'.$column_class.'">';
$html .= '<div class="row"><div class="col-lg-8 pe-lg-5">';
$html .= '<div class="content_wrap content_wrap_left px-lg-5">'.$leftcontent.'</div>';
$html .= '</div><div class="col-lg-4">';
foreach($rightcontents as $rightcontent){
$html .= '<div class="content_wrap content_wrap_right help_desk_content">'.$rightcontent['content'].'</div>';
}
$html .= '</div>';
$html .= '</div></div></div></section>';
echo $html;
endif; ?>