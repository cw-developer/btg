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
				$second_loop .= '<h6><a href="'.get_the_permalink().'">'.get_the_title().'<img src="'.site_url().'/wp-content/uploads/2022/07/horizontal-arrow-white.svg"></a></h6>';
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
							$button .= '<a class="button-link button-link-'.$button_group['button_type'].' hvr-sweep-to-right" href="'.$button_group['button_link']['url'].'" target="'.$button_group['button_link']['target'].'">'.$button_group['button_link']['title'].'<img src="'.site_url().'/wp-content/uploads/2022/07/vertical-arrow.svg"></a>';
							$button .= '</div>';
						}
							
					}
		$html .= '<div class="first_article_wrap">'.$first_loop.'</div><div class="recent_articles_wrap">'.$second_loop.$button.'</div>';
					$html .= '</div></div></div>';
					$html .= '<style>.background-box-left-animation::before{background-image: url('.$background_image.');}</style>';
					$html .= '</section>';
					echo $html;	
 endif; ?>