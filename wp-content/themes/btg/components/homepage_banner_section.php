<?php if( get_row_layout() == 'homepage_banner_section' ): 
$html = '';
$content_box_1 = get_sub_field('content_box_1');
$content_box_2 = get_sub_field('content_box_2');
$button_group = get_sub_field('button_group');
$background_image = get_sub_field('background_image');

$html .= '<style>.homepage_banner_section-block::before{background-image: url('.$background_image.');}</style>';
$html .= '<section class="homepage_banner_section-block animation_collection no-padding"><div class="inner_section content-color-Light">';
$html .= '<div class="container"><div class="row"><div class="col-md-12">';
$html .= '<div class="home_banner_inner_wrap">';
$html .= '<div class="first_col"><div class="content_wrap">';
$html .= $content_box_1;
$html .= '</div></div>';
$html .= '<div class="second_col"><div class="content_wrap">';
$html .= $content_box_2;
$html .= '</div></div>';
$html .= '<div class="third_col">';
if($button_group)
{

		if($button_group['button_link'])
		{
		$html .= '<div class="button_wrap">';
		$html .= '<a class="button-link button-link-'.$button_group['button_type'].' hvr-sweep-to-right" href="'.$button_group['button_link']['url'].'" target="'.$button_group['button_link']['target'].'"><span>'.$button_group['button_link']['title'].'</span><img src="'.site_url().'/wp-content/uploads/2022/07/vertical-arrow.svg"></a>';
		$html .= '</div>';
	}
		
}
$html .= '</div>';
$html .= '</div>';
$html .= '</div></div></div>';
$html .= '</div></section>';
echo $html;

endif; ?>