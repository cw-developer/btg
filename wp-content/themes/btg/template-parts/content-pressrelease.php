<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package btg
 */

?>
<div class="col-lg-4">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog_post cw_blog">	
<div class="blog_thumb_wrap cw_thumb_wrap">
<?php // the_post_thumbnail('medium', array( 'title' => get_the_title(),'alt' => get_the_title() ) );  ?>
<h6><a href="<?php echo get_the_permalink() ?>"><?php the_title(); ?></a></h6>
<div class="post_details">
	<p><?php echo get_the_date('Y-m-d');?></p>
	<p><a href="<?php echo get_the_permalink() ?>">Read More</a></p>
</div>
</div>
</div>
</article>
</div>

