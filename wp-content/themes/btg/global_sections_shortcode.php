<?php

function download_assets_section()
{
?>
<?php if(have_rows('download_assets_section', 'option')):?>
    <?php while(have_rows('download_assets_section', 'option')): the_row();?>
<?php 
$html = '';
$background_color = get_sub_field('background_color', 'option');
$background_image = get_sub_field('background_image', 'option');
$content = get_sub_field('content', 'option');
$content_color = get_sub_field('content_color', 'option');
$button_group = get_sub_field('button_group', 'option');
$html .= '<section class="download_assets_section-block content-color-'.$content_color.'" style="background-color: '.$background_color.';background-image: url('.$background_image.');">';
$html .= '<div class="container small-container"><div class="row"><div class="col-md-8">';
$html .= '<div class="content_wrap content-color-'.$content_color.'">';
$html .= $content;
$html .= '</div></div>';
$html .= '<div class="col-md-4">';
if($button_group)
					{
					
							if($button_group['button_link'])
							{
							$html .= '<div class="button_wrap">';
							$html .= '<a class="button-link button-link-'.$button_group['button_type'].' hvr-sweep-to-right" href="'.$button_group['button_link']['url'].'" target="'.$button_group['button_link']['target'].'"><span>'.$button_group['button_link']['title'].'</span></a>';
							$html .= '</div>';
						}
							
					}
$html .= '</div></div></div></div>';					
$html .= '</section>';
echo $html;
?>	
<?php endwhile; ?>
	<?php endif; 
}

add_shortcode( 'download_assets', 'download_assets_section' );

function btg_values_section()
{
?>
<?php if(have_rows('btg_values_section', 'option')):?>
    <?php while(have_rows('btg_values_section', 'option')): the_row();?>
	<?php 
$html = '';
$background_color = get_sub_field('background_color', 'option');
$image = get_sub_field('image', 'option');
$cta_content = get_sub_field('cta_content', 'option');
$content = get_sub_field('content', 'option');
$cta_button = get_sub_field('cta_button', 'option');
$values = get_sub_field('values', 'option');
$html .= '<section class="btg_values_section-block" style="background-color: '.$background_color.';">';
$html .= '<div class="container"><div class="row values_map_row"><div class="col-md-8 p-0">';
$html .= '<div class="image_item">';
$html .= '<img src="'.$image['url'].'" title="'.$image['title'].'" alt="'.$image['alt'].'" width="'.$image['width'].'" height="'.$image['height'].'">';
$html .= '</div></div>';
$html .= '<div class="col-md-4 ps-0"><div class="cta_wrap content-color-Light"><div class="content_wrap cta_content_wrap content-color-Light">';
$html .= $cta_content;
$html .= '</div>';

	
			if($cta_button)
			{
			$html .= '<div class="cta_button_wrap button_wrap">';
			$html .= '<a class="button-link" href="'.$cta_button['url'].'" target="'.$cta_button['target'].'">'.$cta_button['title'].'<svg xmlns="http://www.w3.org/2000/svg" width="36.703" height="15.685" viewBox="0 0 36.703 15.685"> <g id="arrow-down-short" transform="translate(0 15.685) rotate(-90)"> <path id="Path_28" data-name="Path 28" d="M.329.317a1.15,1.15,0,0,1,1.586,0L7.842,6.032,13.771.317a1.152,1.152,0,0,1,1.586,0,1.053,1.053,0,0,1,0,1.528L8.636,8.322a1.15,1.15,0,0,1-1.586,0L.329,1.846a1.052,1.052,0,0,1,0-1.528Z" transform="translate(0 28.064)" fill="#FFFFFF" fill-rule="evenodd"/> <path id="Path_29" data-name="Path 29" d="M1.12,0A1.1,1.1,0,0,1,2.24,1.079V33.463a1.1,1.1,0,0,1-1.12,1.079A1.1,1.1,0,0,1,0,33.463V1.079A1.1,1.1,0,0,1,1.12,0Z" transform="translate(6.722 0)" fill="#FFFFFF" fill-rule="evenodd"/> </g> </svg></a>';
			$html .= '</div>';
		}
		$html .= '</div></div></div>';
		$html .= '<div class="row values_row"><div class="col-md-12"><div class="content_wrap">';
		$html .= $content;
		$html .= '</div>';	
		if( $values ) {
			$html .= '<div class="values_wrap">';
			foreach( $values as $value ) {
				$html .= '<div class="value_item item">';
				$html .= '<img src="'.$value['image']['url'].'" title="'.$value['image']['title'].'" alt="'.$value['image']['alt'].'" width="'.$value['image']['width'].'" height="'.$value['image']['height'].'">';
				$html .= '<p>'.$value['content'].'</p>';
				$html .= '</div>';
			}
			$html .= '</div>';
			$html .= '<script>values_carousel();</script>';
}
$html .= '</div></div></div></div>';					
$html .= '</section>';
echo $html;
?>	
<?php endwhile; ?>
	<?php endif; ?>
<?php
}

add_shortcode( 'btg_values', 'btg_values_section' );

function btg_protocol_section()
{?>
<?php if(have_rows('btg_protocol', 'option')):?>
<?php while(have_rows('btg_protocol', 'option')): the_row();?>
<?php 
$html = '';
$bgcolor =  get_sub_field('background_color', 'option');
$title =  get_sub_field('title', 'option');
$content =  get_sub_field('content', 'option');
$html .= '<section class="btg_protocol_block hideme"><div class="container"><div class="row"><div class="col-md-12"><div class="btg_protocol_content_wrap" style="background-color:'.$bgcolor.'">';
$html .= '<a class="close_button" href="#" onclick="hideprotocol()"><img src="'.site_url().'/wp-content/uploads/2022/07/close-icon.svg"></a><h5>'.$title.'</h5><p>'.$content.'</p>';
$html .= '</div></div></div></div></section>';
echo $html;
?>
<?php endwhile; ?>
<?php endif; ?>	
<?php
}
add_shortcode( 'btg_protocol', 'btg_protocol_section' );