<?php if( get_row_layout() == 'two_column_title_solutions_section' ):
$html = '';
$title_box_1 = get_sub_field('title_box_1');
$title_box_2 = get_sub_field('title_box_2');
$bottom_content_left = get_sub_field('bottom_content_left');
$image = get_sub_field('image');
$solutions = get_sub_field('solutions');
$bottom_content_right = get_sub_field('bottom_content_right');
$html .= '<section class="two_column_title_section-block two_column_title_solutions_section-block">';
$html .= '<div class="top_section"><div class="container"><div class="row top_row"><div class="col-md-5">';
$html .= '<div class="title_content_wrap first_title_box">';
$html .= '<div class="breadcrumbs_wrap">'.get_breadcrumb().'</div>';
$html .= $title_box_1;
$html .= '</div></div>';
<<<<<<< HEAD
$html .= '<div class="col-md-7 p-0 ps-4">';
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
$html .= '<div class="content_inner_wrap_left">';
$html .= $bottom_content_left;
if( $solutions ) {
    $html .= '<div class="solutions_wrap">';
    foreach( $solutions as $solution ) {
        $html .= '<div class="solution_item">';
        $html .= '<img src="'.$solution['image']['url'].'" title="'.$solution['image']['title'].'" alt="'.$solution['image']['alt'].'" width="'.$solution['image']['width'].'" height="'.$solution['image']['height'].'">';
        $html .= '<div class="solution_content">';
        $html .= $solution['content'];
        $html .= '</div></div>';
    }
    $html .= '</div>';
}
$html .= '</div></div></div>';
<<<<<<< HEAD
$html .= '<div class="col-md-7 p-0 ps-4">';
=======
$html .= '<div class="col-md-7 p-0">';
>>>>>>> 197f17b8a3c44bf85b7adfe8435ab3ae867a03f0
$html .= '<div class="content_wrap content_wrap_right">';
$html .= $bottom_content_right;
$html .= '</div></div>';
$html .= '</div></div></div>';
$html .= '</section>';
$html .= '<style>.two_column_title_solutions_section-block .bottom_section .content_wrap_left::before{background-image: url('.$image['url'].');}</style>';
echo $html;
endif; ?>