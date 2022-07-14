<?php if( get_row_layout() == 'image_section' ): 
 $html = '';
 $background_color = get_sub_field('background_color');
 $image = get_sub_field('image');
 $image_position = get_sub_field('image_position');
 $html .= '<section class="image_section-block" style="background-color: '.$background_color.';">';
 $html .= '<div class="container"><div class="row"><div class="col-md-12">';
 $html .= '<div class="image_wrap align-'.$image_position.'">';
 $html .= '<img src="'.$image['url'].'" title="'.$image['title'].'" alt="'.$image['alt'].'" width="'.$image['width'].'" height="'.$image['height'].'">';
$html .= '</div>';
$html .= '</div></div></div>';
$html .= '</section>';
echo $html;
endif; ?>