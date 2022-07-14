<?php if( get_row_layout() == 'full_width_image_section' ): 
$html = '';
$parallax = get_sub_field('parallax');
$image = get_sub_field('image');
$mobileimage = get_sub_field('mobile_image');
$parallax_class = get_sub_field('parallax') == 'Yes' ? 'parallax_section' : 'no_parallax_section';
if($parallax == 'Yes')
{
	$html .= '<style>.full_width_image_section_parallax-block{background-image: url('.$image['url'].';);}</style>';	
}
$html .= '<section class="full_width_image_section_parallax-block '.$parallax_class.'">';
if($parallax == 'No')
{
	$html .= '<div class="parallax_img_wrap desktop_img_wrap">';
	$html .= '<img src="'.$image['url'].'" title="'.$image['title'].'" alt="'.$image['alt'].'" width="'.$image['width'].'" height="'.$image['height'].'">';
  	$html .= '</div>';
	if($mobile_image_id)
	{
		$html .= 'parallax_img_wrap mobile_img_wrap">';
		$html .= '<img src="'.$mobileimage['url'].'" title="'.$mobileimage['title'].'" alt="'.$mobileimage['alt'].'" width="'.$mobileimage['width'].'" height="'.$mobileimage['height'].'">';
		$html .= '</div>';

	}	
}
$html .= '</section>';
echo $html;
endif; ?>