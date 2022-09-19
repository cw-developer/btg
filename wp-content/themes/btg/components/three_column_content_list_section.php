<?php if( get_row_layout() == 'three_column_content_list_section' ):
$html = '';
$content_box = get_sub_field('content_box');
$content_box_1 = get_sub_field('content_box_1');
$content_box_2 = get_sub_field('content_box_2');
$content_box_3 = get_sub_field('content_box_3');
$background_color = get_sub_field('background_color');
$content_color = get_sub_field('content_color');
$customclass = get_sub_field('custom_class');
$html .= '<section class="three_column_content_list_section-block '.$customclass.'">';
$html .= '<div class="container"><div class="row"><div class="col-md-12">';
$html .= '<div class="content_boxes_outer content-color-'.$content_color.'" style="background-color: '.$background_color.'">';
$html .= '<div class="content_box content_box_top">';
$html .= $content_box;
$html .= '</div>';
$html .= '<div class="content_boxes_row">';
$html .= '<div class="content_box">';
$html .= $content_box_1;
$html .= '</div>';
$html .= '<div class="content_box">';
$html .= $content_box_2;
$html .= '</div>';
$html .= '<div class="content_box">';
$html .= $content_box_3;
$html .= '</div>';
$html .= '</div></div></div></div></div>';
$html .= '</section>';
echo $html;
endif; ?>