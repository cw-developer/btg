<?php if( get_row_layout() == 'download_content_section' ): 
$html = '';
$content = get_sub_field('content');
$download_links = get_sub_field('download_links');
$background_color = get_sub_field('background_color');
$bigtext_alignment = get_sub_field('big_text_alignment');
$content_color = get_sub_field('content_color');
$content_width = get_sub_field('content_width'); 
$customclass = get_sub_field('custom_class');
$content_align = get_sub_field('content_alignment');
$html .= '<section class="download_content_section '.$customclass.' '.$animationclass.' content-color-'.$content_color.' align-'.$content_align.'" style="background-color: '.$background_color.'"><div class="container"><div class="row"><div class="col-lg-12 pb-4">';
$html .= $content;
$html .= '</div></div><div class ="row">';
if($download_links) {
    foreach( $download_links as $download_link ) {
        $html .= '<div class="col-lg-3 d-flex align-items-center">';
        $html .= '<a class="download_link_wrap" href="'.$download_link['link']['url'].'" target="'.$download_link['link']['target'].'"><img src="'.site_url().'/wp-content/uploads/2022/07/download-pdf-svg.svg"><h6>'.$download_link['link']['title'].'</h6></a>';
        $html .= '</div>';
    }
  }
  
$html .= '</div></div></section>';
echo $html;
endif; ?>