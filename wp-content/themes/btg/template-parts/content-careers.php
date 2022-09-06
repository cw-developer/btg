<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package btg
 */

?>
<div class="col-lg-4 pb-4">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog_post cw_blog">	
<a href="<?php echo get_the_permalink() ?>">
<div class="blog_thumb_wrap cw_thumb_wrap">
<?php // the_post_thumbnail('medium', array( 'title' => get_the_title(),'alt' => get_the_title() ) );  ?>
<div class="post_details">
	<p><?php echo get_the_date('Y-m-d');?></p>
	<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/horizontal-arrow-svg.svg">
</div>
<h5><?php echo the_title(); ?></h5>
</div>
</a>
	</div>
</article>
</div>
