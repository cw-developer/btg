<?php if( get_row_layout() == 'two_column_title_section' ):
$html = '';
$title_box_1 = get_sub_field('title_box_1');
$title_box_2 = get_sub_field('title_box_2');
$bottom_content_left = get_sub_field('bottom_content_left');
$bottom_content_right = get_sub_field('bottom_content_right');
$html .= '<section class="two_column_title_section-block">';
$html .= '<div class="top_section"><div class="container"><div class="row top_row"><div class="col-md-5">';
$html .= '<div class="title_content_wrap first_title_box">';
$html .= '<div class="breadcrumbs_wrap">'.get_breadcrumb().'</div>';
$html .= $title_box_1;
$html .= '</div></div>';
<<<<<<< HEAD
$html .= '<div class="col-md-7 ps-4 p-0">';
=======
$html .= '<div class="col-md-7 p-0">';
>>>>>>> 197f17b8a3c44bf85b7adfe8435ab3ae867a03f0
$html .= '<div class="second_title_box content-color-Light"><div class="title_content_wrap"><div class="title_content_inner">';
$html .= $title_box_2;
$html .= '</div></div></div>';
$html .= '</div>';
$html .= '</div></div></div>';
$html .= '<div class="bottom_section"><div class="container"><div class="row bottom_row">';
$html .= '<div class="col-md-5">';
$html .= '<div class="content_wrap content_wrap_left">';
$html .= $bottom_content_left;
$html .= '</div></div>';
<<<<<<< HEAD
$html .= '<div class="col-md-7 ps-4 p-0">';
=======
$html .= '<div class="col-md-7 p-0">';
>>>>>>> 197f17b8a3c44bf85b7adfe8435ab3ae867a03f0
$html .= '<div class="content_wrap content_wrap_right">';
$html .= $bottom_content_right;
$html .= '</div></div>';
$html .= '</div></div></div>';
$html .= '</section>';
echo $html;
endif; ?>