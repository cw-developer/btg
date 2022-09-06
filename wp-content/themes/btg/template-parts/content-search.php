<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package btg
 */

?>

<div class="col-lg-4 col-md-6">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog_post cw_blog">	
<div class="blog_content_wrap">
	<h6><a href="<?php echo get_the_permalink() ?>"><?php the_title(); ?></a></h6>
</div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
</div>