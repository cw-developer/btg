<?php if( get_row_layout() == 'standard_content_section' ): 
$html = '';
$content = get_sub_field('content');
$standardcontents = get_sub_field('standard_list');
$html .= '<section class="standard_content_section bottom-box-section"><div class="container"><div class="row"><div class="col-lg-12 pb-4">';
$html .= $content;
$html .= '</div></div><div class ="row">';
foreach($standardcontents as $standardcontent)
{
$html .= '<div class="col-lg-3 pb-5"><div class="image-wrap"><img src="'.$standardcontent['image']['url'].'" title="'.$standardcontent['image']['title'].'" alt="'.$standardcontent['image']['alt'].'" width="'.$standardcontent['image']['width'].'" height="'.$standardcontent['image']['height'].'"></div>';
$html .= '<h5 class="standard_title">'.$standardcontent['content'].'</h5></div>';
}
$html .= '</div></div></section>';
echo $html;
endif; ?>