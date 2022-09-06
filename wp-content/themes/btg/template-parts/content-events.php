<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package btg
 */

?>
<?php 
$event_place = get_field('event_place');
$event_date = get_field('event_date');
$event_logo = get_field('event_logo');
$event_link = get_field('event_link');
?>
<div class="col-lg-6 p-0">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog_post cw_blog">	
<a href="<?php echo get_the_permalink() ?>">
<div class="blog_thumb_wrap cw_thumb_wrap">
<?php // the_post_thumbnail('medium', array( 'title' => get_the_title(),'alt' => get_the_title() ) );  ?>
<h5><?php echo the_title(); ?></h5>
<div class="event_details">
<div class="location_wrap">
<div class="move_content">
<p><?php echo $event_place; ?></p>
<p><?php echo $event_date; ?></p>
</div>
<?php if(!empty($event_link)){ ?>
<button class="button-link button-link-Light hvr-sweep-to-right" href="<?php echo $event_link['url']; ?>" target="<?php $event_link['target']?>"><span><?php echo $event_link['title']; ?></span><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/horizontal-arrow-svg.svg"></button>
<?php } ?>
</div>
<div class="logo_wrap">
<img src="<?php echo $event_logo['url']; ?>" title="<?php echo $event_logo['title']; ?>" alt="<?php echo $event_logo['alt']; ?>" width="<?php echo $event_logo['width']; ?>" height="<?php echo $event_logo['height']; ?>">
</div>
</div>
</div>
</a>
	</div>
</article>
</div>

