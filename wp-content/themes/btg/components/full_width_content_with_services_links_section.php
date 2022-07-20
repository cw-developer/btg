<?php if( get_row_layout() == 'full_width_content_with_services_links_section' ):
$background_color = get_sub_field('background_color');
$content_alignment = get_sub_field('content_alignment');
$content_color = get_sub_field('content_color');
$content_width = get_sub_field('content_width'); 
$content = get_sub_field('content');
$service_links = get_sub_field('service_links');

if($content_width == "Medium")
		{ 
      		$column_class = "col-lg-10 col-md-10 mx-auto";	
		} else if($content_width == "Small") { 
      $column_class = "col-lg-7 col-md-10 mx-auto";	
		 } else if($content_width == "Full") { 
      $column_class = "col-md-12";
		 } else { 
			$column_class = "col-md-12";
			}

$html = '';
$html .= '<section class="full_width_content_with_services_links_section-block align-'.$content_alignment.' content-color-'.$content_color.'" style="background-color: '.$background_color.'">';
$html .= '<div class="container"><div class="row"><div class="'.$column_class.'">'; 
$html .= '<div class="content_wrap pe-5">';
$html .= $content;
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
if( $service_links ) {
  $html .= '<div class="service_links_row">';
  foreach( $service_links as $service_link ) {
      $html .= '<div class="service_link box_link">';
      if($service_link['link']){
      $html .= '<a href="'.$service_link['link']['url'].'" target="'.$service_link['link']['target'].'"> '.$service_link['link']['title'].'<img src="'.site_url().'/wp-content/uploads/2022/07/horizontal-arrow.svg"></a>';
    }
      $html .= '</div>';
  }
  $html .= '</div>';
}
$html .= '</div></div></div>';
$html .='<div class="lines_wrap">
<svg xmlns="http://www.w3.org/2000/svg" width="494.013" height="714.745" viewBox="0 0 494.013 714.745">
  <g id="Group_6734" data-name="Group 6734" transform="translate(13110.027 -7595.8)">
    <path id="top_line_1" data-name="Path 3687" d="M0,0H485l13.684,14.873L0,15Z" transform="translate(-13110.027 7948.423) rotate(-45)" fill="#efccd0"/>
    <path id="top_line_2" data-name="Path 3686" d="M0,0H511l13.19,13.19L0,13Z" transform="translate(-13090.936 7967.746) rotate(-45)" fill="#efccd0"/>
    <path id="top_line_3" data-name="Path 3685" d="M0,0,535.317,1.225,545.9,12.23,0,12Z" transform="translate(-13073.936 7983.746) rotate(-45)" fill="#efccd0"/>
    <path id="top_line_4" data-name="Path 3680" d="M0,0,556.759,0l9.863,9.863L0,11.384Z" transform="translate(-13058.643 8000.038) rotate(-45)" fill="#efccd0"/>
    <path id="top_line_5" data-name="Path 3681" d="M0,0,576.71.458,584.5,8.25,0,8.72Z" transform="translate(-13043.643 8014.038) rotate(-45)" fill="#efccd0"/>
    <path id="bottom_line_1" data-name="Path 3682" d="M0,0,398.909-.137,383.9,14.873,0,15Z" transform="translate(-13018.742 8017.867) rotate(45)" fill="#efccd0"/>
    <path id="bottom_line_2" data-name="Path 3683" d="M0-.008,421.636.515,408.379,13.771,0,14.165Z" transform="translate(-13002.332 7999.458) rotate(45)" fill="#efccd0"/>
    <path id="bottom_line_3" data-name="Path 3684" d="M0-.036,442.183-.369,432.6,9.917,0,10.961Z" transform="translate(-12987.338 7984.982) rotate(45)" fill="#efccd0"/>
    <path id="bottom_line_4" data-name="Path 3679" d="M0-.048l463.221-.34L453.64,9.193,0,9.66Z" transform="translate(-12971.541 7970.164) rotate(45)" fill="#efccd0"/>
    <path id="bottom_line_5" data-name="Path 3678" d="M0-.062l484.231-.09-8.045,8.045L0,8.117Z" transform="translate(-12958.525 7955.471) rotate(45)" fill="#efccd0"/>
  </g>
</svg>	
</div>';
$html .= '</section>';
echo $html;
endif; ?>