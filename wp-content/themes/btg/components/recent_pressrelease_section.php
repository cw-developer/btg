<?php if( get_row_layout() == 'recent_pressrelease_section' ): 
$html = '';
$content = get_sub_field('content');
$background_color = get_sub_field('background_color');
$args = array(
	'posts_per_page'  => '12',
	'post_type' => 'pressrelease',	   
	'order'        => 'DESC',
	'post_status'  => 'publish'
);
$myposts = new WP_Query( $args );

$html .= '<section class="recent_pressrelease_section-block" style="background-color: '.$background_color.'">';
$html .= '<div class="container"><div class="row"><div class="col-md-12"><div class="title_content_wrap">';
$html .= $content;
$html .= '</div>';
if ($myposts->have_posts()) {
	$html .= '<div class="pr_outer_wrap">';
	while ($myposts->have_posts()) {	  
		$myposts->the_post();
		$html .= '<div class="pr_wrap item"><div class="article_title_wrap">';	
		$html .= '<h6><a href="'.get_the_permalink().'">'.get_the_title().'</a></h6>';
		$html .= '</div>';
		$html .= '<div class="pr_date_wrap">';
		$html .= '<span>'.get_the_date().'</span>';
		$html .= '</div>';
		$html .= '<div class="pr_readmore_wrap">';
		$html .= '<a href="'.get_the_permalink().'">Read More</a>';
		$html .= '</div></div>';
	}
	wp_reset_postdata();
	$html .= '</div>';
}
$html .= '</div></div></div>';
$html .= '</section>';
$html .= '<script>pressrelease_carousel();</script>';
echo $html;
endif; ?>