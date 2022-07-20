<?php if( get_row_layout() == 'boxed_links_section' ): 
 $html = '';
$content = get_sub_field('content');
$boxes = get_sub_field('boxes');
$box_alignment = get_sub_field('box_alignment');
$background_color = get_sub_field('background_color');
$content_color = get_sub_field('content_color');
$html .= '<section class="boxed_links_section-block" style="background-color: '.$background_color.'">';
$html .= '<div class="container"><div class="row"><div class="col-md-12">';
$html .= '<div class="content_wrap  align-'.$box_alignment.'">';
$html .= $content;
$html .= '</div>';

if( $boxes ) {
    $html .= '<div class="boxed_links_row '.$box_alignment.'-alignment">';
    foreach( $boxes as $box ) {
        if($box['link']){
        $html .= '<div class="boxed_link box_link">';    
        $html .= '<a href="'.$box['link']['url'].'" target="'.$box['link']['target'].'"> '.$box['link']['title'].'<img src="'.site_url().'/wp-content/uploads/2022/07/horizontal-arrow-white.svg">
        </a>';
        $html .= '</div>'; 
      }
    }
    $html .= '</div>';
  }
$html .= '</div></div></div>';
$html .= '</section>';
echo $html;
endif; ?>