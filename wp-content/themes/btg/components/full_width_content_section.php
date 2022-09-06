<?php if( get_row_layout() == 'full_width_content_section' ): 
$html = '';
$content = get_sub_field('content');
$background_color = get_sub_field('background_color');
$content_color = get_sub_field('content_color');
$content_align = get_sub_field('content_alignment');
$content_width = get_sub_field('content_width'); 
$customclass = get_sub_field('custom_class');
if($content_width == "Medium")
		{ 
      		$column_class = "col-lg-10 col-md-10 mx-auto";	
		} else if($content_width == "Small") { 
      $column_class = "col-lg-7 col-md-8 mx-auto";	
		 } else if($content_width == "Full") { 
      $column_class = "col-md-12";
		 } else { 
			$column_class = "col-md-12";
			}
$html .= '<section class="full_width_content_section-block animation_collection text-bottom-animation '.$customclass.' '.$animationclass.' content-color-'.$content_color.' align-'.$content_align.'" style="background-color: '.$background_color.'"><div class="container"><div class="row"><div class="'.$column_class.'"><div class="content_wrap">';
$html .= $content;
$html .= '</div></div></div></div></section>';
echo $html;
endif; ?>