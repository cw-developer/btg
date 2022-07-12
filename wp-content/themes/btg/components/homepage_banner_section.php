<?php if( get_row_layout() == 'homepage_banner_section' ): 
$html = '';
$content_box_1 = get_sub_field('content_box_1');
$content_box_2 = get_sub_field('content_box_2');
$button_group = get_sub_field('button_group');
$background_image = get_sub_field('background_image');

$html .= '<style>.homepage_banner_section-block::before{background-image: url('.$background_image.');}</style>';
$html .= '<section class="homepage_banner_section-block no-padding"><div class="inner_section content-color-Light">';
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
		$html .= '<a class="button-link button-link-'.$button_group['button_type'].' hvr-sweep-to-right" href="'.$button_group['button_link']['url'].'" target="'.$button_group['button_link']['target'].'">'.$button_group['button_link']['title'].'<svg xmlns="http://www.w3.org/2000/svg" width="15.685" height="38.088" viewBox="0 0 15.685 38.088"> <g id="arrow-down-short" transform="translate(-10.124 19.875)"> <path id="Path_28" data-name="Path 28" d="M10.453,17.2a1.12,1.12,0,0,1,1.586,0l5.927,5.93,5.928-5.93a1.122,1.122,0,1,1,1.586,1.586l-6.721,6.721a1.12,1.12,0,0,1-1.586,0l-6.721-6.721a1.12,1.12,0,0,1,0-1.586Z" transform="translate(0 -7.625)" fill="#4e5351" fill-rule="evenodd"/> <path id="Path_29" data-name="Path 29" d="M18-19.875a1.12,1.12,0,0,1,1.12,1.12V14.851a1.12,1.12,0,0,1-2.24,0V-18.755A1.12,1.12,0,0,1,18-19.875Z" transform="translate(-0.029)" fill="#4e5351" fill-rule="evenodd"/></g></svg></a>';
		$html .= '</div>';
	}
		
}
$html .= '</div>';
$html .= '</div>';
$html .= '</div></div></div>';
$html .= '</div></section>';
echo $html;

endif; ?>