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
<a href="<?php echo get_the_permalink() ?>">
<div class="blog_thumb_wrap cw_thumb_wrap">
<?php the_post_thumbnail('medium', array( 'title' => get_the_title(),'alt' => get_the_title() ) );  ?>
</div>
<div class="blog_content_wrap">
<h6><?php the_title(); ?></h6>
</div></a>
</article><!-- #post-<?php the_ID(); ?> -->
</div>