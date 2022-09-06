<?php if( get_row_layout() == 'image_and_content_full_width' ): 
$html = '';
$content = get_sub_field('content');
$image_id = get_sub_field('image');
$img_url = wp_get_attachment_image_src($image_id, 'full');
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
$image_title = get_the_title($image_id);
$customclass = get_sub_field('custom_class');
$html .= '<section class="about_image_and_full_width '.$customclass.'"><div class="container"><div class="row"><div class="col-lg-6">';
$html .= $content;
$html .= '</div><div class="col-lg-6">';
$html .= '<img src="'.$img_url[0].'" width="'.$img_url[1].'" height="'.$img_url[2].'" alt="'.$image_alt.'" title="'.$image_title.'">';
$html .= '</div>';
$html .= '</div></div></section>';
echo $html;
endif; ?>