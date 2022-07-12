<?php if( get_row_layout() == 'recent_articles_section' ): 
$html = '';
$content = get_sub_field('content');
$button_group = get_sub_field('button_group');
$background_image = get_sub_field('background_image');
$args = array(
	'posts_per_page'  => '4',	 
	'post_type' => 'post',	   
	'order'        => 'DESC',
	'post_status'  => 'publish'
);
$myposts = new WP_Query( $args );
$html .= '<section class="recent_articles_section-block background-box-left-animation">';
$html .= '<div class="container"><div class="row"><div class="col-md-12"><div class="title_content_wrap">';
$html .= $content;
$html .= '</div>';
if ($myposts->have_posts()) {	
	$count = 0;	
			while ($myposts->have_posts()) {
				$myposts->the_post();
				if($count == 0) {
				$first_loop .= '<div class="article_wrap"><div class="article_title_wrap">';	
				$first_loop .= '<h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
				$first_loop .= '</div></div>';
			}
			else {
				$second_loop .= '<div class="article_wrap arrow-right-animation"><div class="article_title_wrap content-color-Light">';					
				$second_loop .= '<h6><a href="'.get_the_permalink().'">'.get_the_title().'<svg xmlns="http://www.w3.org/2000/svg" width="36.703" height="15.685" viewBox="0 0 36.703 15.685"><g id="arrow-down-short" transform="translate(0 15.685) rotate(-90)">
						<path id="Path_28" data-name="Path 28" d="M.329.317a1.15,1.15,0,0,1,1.586,0L7.842,6.032,13.771.317a1.152,1.152,0,0,1,1.586,0,1.053,1.053,0,0,1,0,1.528L8.636,8.322a1.15,1.15,0,0,1-1.586,0L.329,1.846a1.052,1.052,0,0,1,0-1.528Z" transform="translate(0 28.064)" fill="#FFFFFF" fill-rule="evenodd"/>
						<path id="Path_29" data-name="Path 29" d="M1.12,0A1.1,1.1,0,0,1,2.24,1.079V33.463a1.1,1.1,0,0,1-1.12,1.079A1.1,1.1,0,0,1,0,33.463V1.079A1.1,1.1,0,0,1,1.12,0Z" transform="translate(6.722 0)" fill="#FFFFFF" fill-rule="evenodd"/>
					  </g>
					</svg></a></h6>';
				$second_loop .= '</div></div>';
			}
			$count++;
			}
			wp_reset_postdata();
		}
		if($button_group)
					{
					
							if($button_group['button_link'])
							{
							$button = '<div class="button_wrap">';
							$button .= '<a class="button-link button-link-'.$button_group['button_type'].' hvr-sweep-to-right" href="'.$button_group['button_link']['url'].'" target="'.$button_group['button_link']['target'].'">'.$button_group['button_link']['title'].'<svg xmlns="http://www.w3.org/2000/svg" width="15.685" height="38.088" viewBox="0 0 15.685 38.088"> <g id="arrow-down-short" transform="translate(-10.124 19.875)"> <path id="Path_28" data-name="Path 28" d="M10.453,17.2a1.12,1.12,0,0,1,1.586,0l5.927,5.93,5.928-5.93a1.122,1.122,0,1,1,1.586,1.586l-6.721,6.721a1.12,1.12,0,0,1-1.586,0l-6.721-6.721a1.12,1.12,0,0,1,0-1.586Z" transform="translate(0 -7.625)" fill="#4e5351" fill-rule="evenodd"/> <path id="Path_29" data-name="Path 29" d="M18-19.875a1.12,1.12,0,0,1,1.12,1.12V14.851a1.12,1.12,0,0,1-2.24,0V-18.755A1.12,1.12,0,0,1,18-19.875Z" transform="translate(-0.029)" fill="#4e5351" fill-rule="evenodd"/></g></svg></a>';
							$button .= '</div>';
						}
							
					}
		$html .= '<div class="first_article_wrap">'.$first_loop.'</div><div class="recent_articles_wrap">'.$second_loop.$button.'</div>';
					$html .= '</div></div></div>';
					$html .= '<style>.background-box-left-animation::before{background-image: url('.$background_image.');}</style>';
					$html .= '</section>';
					echo $html;	
 endif; ?>