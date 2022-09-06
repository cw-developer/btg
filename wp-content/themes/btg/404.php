<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package btg
 */

get_header();
?>
<section class="not_found_content-block">
	<div class="container">
		<div class="row">
			<div class="col-md-12 d-flex flex-column  justify-content-center align-items-center">
				<?php
				if(have_rows('not_found_content', 'option')):
    			 while(have_rows('not_found_content', 'option')): the_row();
			    				$html = '';
				$not_found_image = get_sub_field('image', 'option');
				$not_found_group = get_sub_field('button_group', 'option');
				$html .= '<div class="image_item">';
$html .= '<img src="'.$not_found_image['url'].'" title="'.$not_found_image['title'].'" alt="'.$not_found_image['alt'].'" width="'.$not_found_image['width'].'" height="'.$not_found_image['height'].'">';
$html .= '</div>';
$html .= '<div class="button_wrap">';
							$html .= '<a class="button-link button-link-'.$not_found_group['button_type'].' hvr-sweep-to-right" href="'.$not_found_group['button_link']['url'].'" target="'.$not_found_group['button_link']['target'].'"><span>'.$not_found_group['button_link']['title'].'</span></a>';
$html .= '</div>';
echo $html; 
				endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
