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
$html .= '<section class="recent_articles_section-block recent_events_section-block background-box-right-animation no-padding">';
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
							$html .= '<a class="button-link button-link-'.$button_group['button_type'].' hvr-sweep-to-right" href="'.$button_group['button_link']['url'].'" target="'.$button_group['button_link']['target'].'">'.$button_group['button_link']['title'].'<svg xmlns="http://www.w3.org/2000/svg" width="15.685" height="38.088" viewBox="0 0 15.685 38.088"> <g id="arrow-down-short" transform="translate(-10.124 19.875)"> <path id="Path_28" data-name="Path 28" d="M10.453,17.2a1.12,1.12,0,0,1,1.586,0l5.927,5.93,5.928-5.93a1.122,1.122,0,1,1,1.586,1.586l-6.721,6.721a1.12,1.12,0,0,1-1.586,0l-6.721-6.721a1.12,1.12,0,0,1,0-1.586Z" transform="translate(0 -7.625)" fill="#4e5351" fill-rule="evenodd"/> <path id="Path_29" data-name="Path 29" d="M18-19.875a1.12,1.12,0,0,1,1.12,1.12V14.851a1.12,1.12,0,0,1-2.24,0V-18.755A1.12,1.12,0,0,1,18-19.875Z" transform="translate(-0.029)" fill="#4e5351" fill-rule="evenodd"/></g></svg></a>';
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