<?php if( get_row_layout() == 'features_and_value_additions_section' ): 
$html = '';
$top_content = get_sub_field('top_content');
$bottom_content = get_sub_field('bottom_content');
$features = get_sub_field('features');
$shape_position = get_sub_field('shape_position');
$values = get_sub_field('values');
$background_color = get_sub_field('background_color');
$image = get_sub_field('image', 'option');

$html .= '<section class="features_and_value_additions_section-block '.$shape_position.'-shape">';
$html .= '<div class="container"><div class="row"><div class="col-md-12">';
$html .= '<div class="top_features_wrap"><div class="content_wrap">';
$html .= $top_content;
$html .= '</div>';

if( $features ) {
    $html .= '<div class="features_wrap">';
    foreach( $features as $feature ) {
        $html .= '<div class="features_item">';
        $html .= '<img src="'.$feature['image']['url'].'" title="'.$feature['image']['title'].'" alt="'.$feature['image']['alt'].'" width="'.$feature['image']['width'].'" height="'.$feature['image']['height'].'">';
        $html .= $feature['content'];
        $html .= '</div>';
    }
    $html .= '</div>';
  }
  $html .= '</div>'; 
  $html .= '<div class="bottom_values_wrap"><div class="content_wrap align-Center">';
  $html .= $bottom_content;
  $html .= '</div>';
  $html .= '<div class="values_image_wrap">';
  if( $values ) {
    $html .= '<ul class="values_wrap">';
    foreach( $values as $value ) {
        $html .= '<li class="value_item">';
        $html .= $value['content'];
        $html .= '</li>';
    }
    $html .= '</ul>';
}
  $html .= '<div class="image_wrap">';
  $html .= '<img src="'.$image['url'].'" title="'.$image['title'].'" alt="'.$image['alt'].'" width="'.$image['width'].'" height="'.$image['height'].'">';
  $html .= '</div>';   
  $html .= '</div></div>';
  $html .= '</div></div></div>';
$html .= '</section>';
$html .= '<style>.features_and_value_additions_section-block::before{background-color: '.$background_color.';}</style>';
echo $html;
endif; ?>