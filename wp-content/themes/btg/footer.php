<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package btg
 */

?>

	</div><!-- #content -->
<?php if(have_rows('footer_section', 'option')):?>
    <?php while(have_rows('footer_section', 'option')): the_row();?>
	<footer id="colophon" class="site-footer">
	<div class="container">	
		<div class="row footer_top_row">
			<div class="col-md-1">
			<div class="footer_logo_wrap">
				<?php
			$image = get_sub_field('footer_logo', 'option');
?>
<img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">	
				</div>
			</div>
			<div class="col-md-7">
				<div class="footer_content_wrap">
					<?php echo get_sub_field('content_block', 'option'); ?>
				</div>
			</div>
			<div class="col-md-1">
</div>
			<div class="col-md-3">
			<?php if(have_rows('button_group', 'option')):?>
    <?php while( have_rows('button_group', 'option') ): the_row(); 	
$button_type = get_sub_field('button_type', 'option'); 
$link = get_sub_field('button_link', 'option');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
	<div class="button_wrap">
    <a class="button-link button-link-<?php echo $button_type; ?> hvr-sweep-to-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
	</div>
	
<?php endif; ?>
	<?php endwhile; ?>
<?php endif;?>	
			</div>
		</div>
		<div class="row footer_middle_row">
			<div class="col-md-9">
				<div class="footer_middle_menus">
					<div class="footer_col">
	<h6><?php echo wp_get_nav_menu_name('quick-links'); ?></h6>
<?php
								wp_nav_menu( array(
									'theme_location' => 'quick-links',
									'menu_id'        => 'quick-links',
								) );
								?>
</div>
					<div class="footer_col">
	<h6><?php echo wp_get_nav_menu_name('services-solutions'); ?></h6>
<?php
								wp_nav_menu( array(
									'theme_location' => 'services-solutions',
									'menu_id'        => 'services-solutions',
								) );
								?>
</div>
					<div class="footer_col">
	<h6><?php echo wp_get_nav_menu_name('others'); ?></h6>
<?php
								wp_nav_menu( array(
									'theme_location' => 'others',
									'menu_id'        => 'others',
								) );
								?>
</div>
					<div class="footer_col">
	<h6><?php echo wp_get_nav_menu_name('connect-socially'); ?></h6>
<?php
								wp_nav_menu( array(
									'theme_location' => 'connect-socially',
									'menu_id'        => 'connect-socially',
								) );
								?>
</div>
				</div>
			</div>
			<div class="col-md-3">
			<div class="footer_img_wrap">
				<?php
			$image = get_sub_field('footer_100_years_logo', 'option');
?>
<img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">	
				</div>	
			</div>

</div>
<div class="row footer_bottom_row">
<div class="col-md-12">
 <?php if(have_rows('pages', 'option')):?>
<div class="footer_links_wrap">
<?php while(have_rows('pages', 'option')): the_row();?>
	<div class="footer_link_item">
		<?php $page = get_sub_field('select_page', 'option'); ?>
		 <a href="<?php echo get_permalink($page); ?>"><?php echo get_the_title( $page ); ?></a>
		<?php 	
		$pages = get_pages( array(
    'parent'      => $page,
    'sort_column' => 'menu_order',
) );

$all_ids = ( ! empty( $pages ) )
    ? wp_list_pluck( $pages, 'ID' ) : array();
		if($all_ids)
		{
			?><ul><?php
		foreach ($all_ids as $all_id)
		{
		?><li><a href="<?php echo get_permalink($all_id) ?>"><?php echo get_the_title( $all_id ); ?></a></li><?php
		}
			?> </ul> <?php } ?>
	</div>
	<?php endwhile; ?>
	</div>
	<?php endif; ?>
</div>
</div>
		<div class="row partners_row">
	<div class="col-md-7">
		 <?php if(have_rows('company_logos', 'option')):?>
<div class="partner_links_wrap">
<?php while(have_rows('company_logos', 'option')): the_row();?>
	<div class="boxed-item">
<?php 
$image = get_sub_field('logo', 'option');
$link = get_sub_field('link', 'option');
if($link) {
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
	?> <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">  </a> <?php } else { ?>
<img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">  
	<?php } ?>
</div>
	<?php endwhile; ?>
		</div>
		<?php endif; ?>
			</div>
			<div class="col-md-5">
				<div class="footer_content_wrap">
					<?php echo get_sub_field('parent_company_content', 'option'); ?>
				</div>
			</div>
		</div>
<div class="row copyright_row">
	<div class="col-md-12">
			<div class="copyright_content">
			<?php echo get_sub_field('copyright_content','option'); ?>	
		</div>
		</div>
		</div>
		</div>
		<div class="lines_wrap">
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
</div>	
	</footer>
<?php endwhile; ?>
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<a href="#" id="gototop"><img src="<?php echo site_url();?>/wp-content/uploads/2022/06/arrow-up.svg" alt="Go to top" width="15" height="15" Title="Go to top"></a>
</body>
</html>