<?php if( get_row_layout() == 'full_with_content_section' ): 
$html = '';
$content = get_sub_field('content');
$background_color = get_sub_field('background_color');
$customclass = get_sub_field('custom_class');
$content_color = get_sub_field('content_color');
$content_align = get_sub_field('content_alignment');
$content_width = get_sub_field('content_width'); 
$html .= '<section class="full_width_content animation_collection text-bottom-animation '.$customclass.' '.$animationclass.' content-color-'.$content_color.' align-'.$content_align.'" style="background-color: '.$background_color.'"><div class="row"><div class="container"><div class="col-lg-12 px-lg-5"><div class="content_wrap">';
$html .= $content;
$html .= '</div></div></div></div></section>';
echo $html;
endif; ?>