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
			<div class="col-md-9">
								<div class="breadcrumbs_wrap"><ul id="breadcrumbs" class="breadcrumbs"><li class="item-home"><a class="bread-link bread-home" href="https://btgdev.azurewebsites.net" title="Home">Home</a></li><li class="separator separator-home"> / </li><li class="item-cat item-custom-post-type-careers"><a class="bread-cat bread-custom-post-type-careers" href="https://btgdev.azurewebsites.net/careers/" title="Careers">News</a></li></ul></div>
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="cw_blog_single_content pt-0">
	<div class="container">
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-2 content_before_box">
				<div class="fill_color_box">
				</div>
			</div>
			<div class="col-md-10 ps-lg-4">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<?php the_content(); ?>
			<?php						
			endwhile; // End of the loop.
			$file = get_field('pdf_download');
			$url = $file['url'];
			$title = $file['title'];
			$caption = $file['caption'];
			$icon = $file['icon'];
		
if( $file ): ?>
        <a class="file_wrap" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>"><img src="<?php echo site_url() ?>/wp-content/uploads/2022/07/download-pdf-svg.svg"><span class="file_title"><?php echo $title; ?></span></a>
<?php endif; ?>
			</div>
			 </div>
		</div>
	</div>
</section>
<section class="prev_next_section blog_prev_next_section">
<div class="container">
<div class="col-md-9">	
<div class="row">
<div class="post-nav portfolio-nav">
<div class="alignleft prev-post-nav post-nav-wrap hvr-backward">
<?php
    $prev_post = get_previous_post();
    if ($prev_post)
    {
        $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
        if (strlen($prev_title) >= 60)  //<-- here is your custom checking
        {
            $prev_title = (substr($prev_title, 0, 60)) . "";
        }
        echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title . '" class=" "><span>'. $prev_title . '</span><img src="'.site_url().'/wp-content/uploads/2022/07/horizontal-arrow.svg" title="' . $prev_title . '" alt="' . $prev_title . '" width="35" height="35"></a>' . "\n";
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
            $next_title = (substr($next_title, 0, 45)) . "";
        }
        echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title . '" class=" "><span>'. $next_title . '</span><img src="'.site_url().'/wp-content/uploads/2022/07/horizontal-arrow.svg" title="' . $next_title . '" alt="' . $next_title . '" width="35" height="35"></a>' . "\n";
    }

    ?>	
</div>
</div>
</div>
</div>
</div> 
</section>
<?php
echo do_shortcode('[download_assets]');
get_footer();