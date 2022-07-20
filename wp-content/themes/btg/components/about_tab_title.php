<?php if( get_row_layout() == 'about_tab_title' ): 
$html = '';
$background_color = get_sub_field('background_color');
$content_width = get_sub_field('content_width');
$content_alignment = get_sub_field('content_alignment');
$content_color = get_sub_field('content_color');
$titles = get_sub_field('tab_title');
$html .= '<section class="about_tab_title">';
$html .= '<div class="container"><ul class="nav nav-tabs">';
foreach( $titles as $title ) {
	$removespace = preg_replace('/\s+/', '', $title['title']);
	$class = strtolower($removespace);
	$html .= '<li><a data-toggle="tab" href="#'.$class.'">';
	$html .= $title['title'];
	$html .= '</a></li>';
}
$html .= '</div>';
$html .= '</section>';
echo $html;
endif; ?>