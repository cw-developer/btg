<?php if( get_row_layout() == 'download_resources_section' ):
$background_color = get_sub_field('background_color');
$content_alignment = get_sub_field('content_alignment');
$content = get_sub_field('content');
$resources_links = get_sub_field('resources_links');
$restricted_resources_links = get_sub_field('restricted_resources_links');

$html = '';
$html .= '<section class="download_resources_section-block" style="background-color: '.$background_color.'">';
$html .= '<div class="container"><div class="row"><div class="col-md-12">'; 
$html .= '<div class="content_wrap align-'.$content_alignment.'">';
$html .= $content;
$html .= '</div>';
$html .= '<div class="resources_outer">';
if( $resources_links ) {
  $html .= '<div class="resources_links open_resources_links">';
  foreach( $resources_links as $resources_link ) {
      $html .= '<div class="resources_link">';
      if($resources_link['link']){
<<<<<<< HEAD
      $html .= '<a href="'.$resources_link['link']['url'].'" target="'.$resources_link['link']['target'].'"><img src="'.site_url().'/wp-content/uploads/2022/07/download-pdf-svg.svg"> '.$resources_link['link']['title'].'</a>';
=======
      $html .= '<a href="'.$resources_link['link']['url'].'" target="'.$resources_link['link']['target'].'"><img src="'.site_url().'/wp-content/uploads/2022/07/Download-PDF.svg"> '.$resources_link['link']['title'].'</a>';
>>>>>>> 197f17b8a3c44bf85b7adfe8435ab3ae867a03f0
    }
      $html .= '</div>';
  }
  $html .= '</div>';
}
if( $restricted_resources_links ) {
    $html .= '<div class="resources_links restricted_resources_links">';
    foreach( $restricted_resources_links as $restricted_resources_link ) {
        $html .= '<div class="resources_link">';
        if($restricted_resources_link['link']){
<<<<<<< HEAD
        $html .= '<a href="'.$restricted_resources_link['link']['url'].'" target="'.$restricted_resources_link['link']['target'].'"><img src="'.site_url().'/wp-content/uploads/2022/07/download-pdf-svg.svg"> '.$restricted_resources_link['link']['title'].'</a>';
=======
        $html .= '<a href="'.$restricted_resources_link['link']['url'].'" target="'.$restricted_resources_link['link']['target'].'"><img src="'.site_url().'/wp-content/uploads/2022/07/Download-PDF.svg"> '.$restricted_resources_link['link']['title'].'</a>';
>>>>>>> 197f17b8a3c44bf85b7adfe8435ab3ae867a03f0
        $html .= '<span>Login Required</span>';
      }
        $html .= '</div>';
    }
    $html .= '</div>';
  }
$html .= '</div>';
$html .= '</div></div></div>';
$html .= '</section>';
echo $html;
endif; ?>