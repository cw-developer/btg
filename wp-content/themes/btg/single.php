<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package btg
 */

get_header();
?>
<section id="single_banner" class="innerpage_banner">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="blog_single_top">
	<div class="container">
		<div class="row">
			<div class="col-md-9 mx-auto">
<div class="featured_image_wrap">
<?php the_post_thumbnail(); ?>
</div>
<div class="single_post_meta_wrap">
<div class="single_post_meta category_wrap">
<?php
								$categories = get_the_category();
								if ( ! empty( $categories ) ) {
                  ?><p>Category: <?php
									foreach($categories as $cd)
                  {
                  echo '<a class="cat_button_link" href="' . esc_url( get_category_link( $cd->term_id ) ) . '">' . esc_html( $cd->name ) . '</a>';
                  }
								} ?></p>
							</div>
							<div class="single_post_meta post_date_wrap">
								<p>Date: <span><?php $post_date = get_post_modified_time( 'F j, Y' ); 
									echo $post_date; ?></span></p>
							</div>
</div>				
</div>
		</div>
	</div>
</section>
<section class="cw_blog_single_content">
	<div class="container">
		<div class="row">
			<div class="col-md-9 mx-auto">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<?php the_content(); ?>
			<?php						
			endwhile; // End of the loop.
			?>
			 </div>
		</div>
	</div>
</section>
<section class="prev_next_section blog_prev_next_section">
<div class="container">
<div class="row">
<div class="col-md-9 mx-auto">	
<div class="post-nav portfolio-nav">
<div class="alignleft prev-post-nav post-nav-wrap hvr-backward">
<?php
    $prev_post = get_previous_post();
    if ($prev_post)
    {
        $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
        if (strlen($prev_title) >= 45)  //<-- here is your custom checking
        {
            $prev_title = (substr($prev_title, 0, 45)) . "...";
        }
        echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title . '" class=" "><img src="'.site_url().'/wp-content/themes/ct/images/angle-right-circle.svg" title="' . $prev_title . '" alt="' . $prev_title . '" width="35" height="35">'. $prev_title . '</a>' . "\n";
    }

    ?>	
</div>
<div class="alignright next-post-nav post-nav-wrap hvr-forward">
<?php
    $next_post = get_next_post();
    if ($next_post)
    {
        $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
        if (strlen($next_title) >= 45)  //<-- here is your custom checking
        {
            $next_title = (substr($next_title, 0, 45)) . "...";
        }
        echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title . '" class=" ">'. $next_title . '<img src="'.site_url().'/wp-content/themes/ct/images/angle-right-circle.svg" title="' . $next_title . '" alt="' . $next_title . '" width="35" height="35"></a>' . "\n";
    }

    ?>	
</div>
</div>
</div>
</div>
</div> 
</div>
</section>
<section class="related_posts_section blog_listing_content">
<div class="container small-container">
<div class="row">
	<h3>Related Posts</h3>
<?php
$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
 <div class="col-lg-4 col-md-6">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog_post cw_blog">	
<a href="<?php echo get_the_permalink() ?>">
<div class="blog_thumb_wrap cw_thumb_wrap">
<?php the_post_thumbnail(); ?>
</div>
<div class="blog_content_wrap">
<h4><?php the_title(); ?></h4>
	</div></a></div>
</article><!-- #post-<?php the_ID(); ?> -->
</div>
<?php }
wp_reset_postdata(); ?>
</div> 
</div>
</section>
<section class="author_section blog_listing_content" id="author_section">
<div class="container small-container">
<div class="row">
	<div class="col-md-3">
		<?php $author_id=$post->post_author; ?>
		<?php $avatar_url  = get_avatar_url( $author_id, ['size' => '250'] ); //this will give 96x96 image.
?><img src="<?php echo $avatar_url; ?>" alt="<?php the_author_meta( 'display_name' , $author_id ); ?>" title="<?php the_author_meta( 'display_name' , $author_id ); ?>" width="250" height="250">
</div>
	<div class="col-md-9">
		<h5>About the Author - <?php the_author_meta( 'display_name' , $author_id ); ?></h5>
<p><?php the_author_meta( 'description' , $author_id ); ?></p>
</div>

	</div> 
</div>
</section>
<section class="comments_section blog_listing_content">
<div class="container small-container">
<div class="row">
	<div class="col-md-12">
<div class="comment_wrap">
					<?php	
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
					?>	
				</div>
</div>
</div> 
</div>
</section>
<?php
get_footer();