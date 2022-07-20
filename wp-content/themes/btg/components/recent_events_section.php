<?php if( get_row_layout() == 'recent_events_section' ): 
$html = '';
$content = get_sub_field('content');
$button_group = get_sub_field('button_group');	
$background_image = get_sub_field('background_image');
$args = array(
	'posts_per_page'  => '2',
	'post_type' => 'events',	   
	'order'        => 'DESC',
	'post_status'  => 'publish'
);
$myposts = new WP_Query( $args );
$html .= '<section class="recent_articles_section-block animation_collection recent_events_section-block background-box-right-animation no-padding">';
$html .= '<div class="container"><div class="row"><div class="col-md-12"><div class="title_content_wrap"><div class="title_content">';
$html .= $content;
$html .= '</div><div class="empty_div"></div></div>';
if ($myposts->have_posts()) {
	$html .= '<div class="recent_articles_wrap">';
	while ($myposts->have_posts()) {	  
		$myposts->the_post();
		$html .= '<div class="article_wrap"><div class="article_title_wrap content-color-Light">';	
		$html .= '<a href="'.get_the_permalink().'"><h4>'.get_the_title().'</h4>';
		$html .= '<div class="event_date_image_wrap"><div class="event_date_wrap">';
		$html .= '<span>'.get_field("event_place").'</span><span>'.get_field("event_date").'</span></div>';	
		$html .= '<div class="event_image_wrap">'.get_the_post_thumbnail().'</div>';
		$html .= '</div></a></div></div>';
}
wp_reset_postdata();
if($button_group)
					{
					
							if($button_group['button_link'])
							{
							$html .= '<div class="button_wrap">';
							$html .= '<a class="button-link button-link-'.$button_group['button_type'].' hvr-sweep-to-right" href="'.$button_group['button_link']['url'].'" target="'.$button_group['button_link']['target'].'">'.$button_group['button_link']['title'].'<img src="'.site_url().'/wp-content/uploads/2022/07/vertical-arrow.svg"></a>';
							$html .= '</div>';
						}
							
					}
					$html .= '</div>';
				}
				$html .= '</div></div></div>';
				$html .= '<style>.background-box-right-animation::before{background-image: url('.$background_image.');}</style>';
				$html .= '</section>';
echo $html;

endif; ?>