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
<style>
.single-files header#masthead {display: none;}
.single-files footer {display: none;}
.file_management {padding: 0px !important;height:100vh;display:flex;}
.file_management .card{border-radius:0px;border:unset;background-color:var(--dark-color);}
.file_management .left-sidebar { background-color: var(--dark-color); display: flex;flex-wrap:wrap;width: 100%; 
    align-content: flex-start;height: 100vh; overflow-y: scroll; align-content: flex-start;}
.file_management div#accordion {width: 100%;}
.file_management .card-header { background-color: var(--dark-heading-color);border-radius:unset !important;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #222929;position: relative;}
.file_management .card-header:after { content: ""; transition: background-color 250ms linear; width: 5px; height: 100%; position: absolute; left: 0; top: 0; bottom: 0; background-color: #313939; }
.file_management .card-header { padding:0px;}
.file_management .card-header * {color: var(--light-color);padding: 10px 0px;}
.file_management .card-header a{display: flex; text-align: left; justify-content: space-between; align-items: center;text-align:left;padding: 16px 48px 16px 32px;}
.file_management .card-body { padding: 32px; border: none; border-bottom: 0; background-color: rgba(0,0,0,0); color: #fff; }
.file_management ul li:last-child { margin-bottom: 0px; }
.file_management .card-body a{color: var(--light-color);}
.file_management .left-sidebar .card-header .btn:hover, .file_management .left-sidebar .card-header a:hover, .file_management .left-sidebar .card-header a:focus, .file_management .left-sidebar .card-header a:active {color: var(--light-color) !important;}
.file_management .btn:focus{box-shadow:unset !important;}
.file_management .site-branding {width: 100%;padding:40px 0px;display:flex;}
.file_management .site-branding img {filter: invert(1) brightness(100);width: 180px;}
.file_management .custom-logo-link {display: flex;height: auto;align-items: center; justify-content: center; width: 100%;}
.file_management ul.nav.nav-tabs { flex-direction: column; align-items: flex-start; justify-content: center;width:30%;}
.file_wrap {display: flex;align-items: flex-start;position: relative;}
.file_management a.download-button input { background: transparent; border: unset; width: auto; height: auto; margin: 0px; }
.overall_container_wrap{width: 80%;margin: 0 auto;}
.file_management ul.nav.nav-tabs li a{min-height:auto;justify-content: flex-start;}
.file_management ul.nav.nav-tabs li{height: auto;min-height: auto;width: 100%;}
.file_management .tab-content * {color: var(--light-color);}
.file_management a.download-button {padding: 10px 20px !important;display: inline-block;}
.file_details { display: none; align-items: center; justify-content: space-between; }
.file_management select,  .file_management select option {color: black !important;}
.file_details:first-child {display: flex !important;width: 100%;}
.file_management .card-header img{width: 40px;height: 40px;padding: 12px;}
.card-header a.btn img { transform: rotate(134deg); box-shadow: inset 0px 0px 15px 0px rgb(0 0 0 / 35%); border-bottom: 1px solid rgba(255,255,255,0.15); border-radius: 50px;transition: all 0.2s linear;}
.card-header a.btn.collapsed img{transform: rotate(90deg);box-shadow: unset;border-bottom:unset;transition: all 0.2s linear;}
.file_management .file_wrap ul.nav.nav-tabs li a{padding: 1rem 32px;background-color: #dedfe2;}
.file_management .file_wrap ul.nav.nav-tabs{justify-content: flex-start;}
.file_wrap li>a::after { transition: left 200ms ease; content: ""; width: 5px; position: absolute; left: 0; top: -1px; bottom: -1px; background-color: #677d7d; opacity: 0; }
.file_management .file_wrap  ul.nav.nav-tabs li a.active{background-color: #313939;}
.file_management .file_wrap ul.nav.nav-tabs li:hover{background-color: transparent;}
.file_management .file_wrap ul.nav.nav-tabs li{background-color:transparent;}
.file_management .file_wrap .tab-content{width: 70%; padding: 30px; background-image: linear-gradient(225deg, rgba(255,255,255,0.025) 0px, rgba(255,255,255,0.025) 300px, transparent 301px); background-color: #313939; box-shadow: 0px 2px 14px 0px rgb(0 0 0 / 40%);position: absolute; right: 0;}
ul.nav.nav-tabs li:hover a{color:#293131;}
ul.nav.nav-tabs li:hover a.active{color:var(--light-color);}
.btg_website_button a { font-size: .875rem; display: inline-block; background-color: #e2001a; background-image: linear-gradient(to top, #e2001a 0%, #c6222a 100%); border-radius: 0 0 0.375rem 0.375rem; padding-top: 0.25rem; padding-right: 1.25rem; padding-bottom: 0.25rem; padding-left: 1.25rem; box-shadow: 0 2px 1px 0 rgb(0 0 0 / 15%); text-shadow: 0 1px 1px rgb(0 0 0 / 15%); color: #fff; transition: box-shadow 200ms ease; }
.btg_website_button .button_wrap { justify-content: flex-start; margin-bottom: 30px; }
h1.post_title {font-weight: 100;font-size: 48px;}
.my_btg_content_header { padding: 0px 0px 64px 0px; }
h1.post_title {margin-bottom: 0px;}
.overall_wrap_full_width { background-image: linear-gradient(225deg, rgba(222,223,226,0.3) 0%, rgba(222,223,226,0.3) 50%, transparent 50.1%); background-color: #fff; }
body.single.single-files {background-color: #293131;}
.file_management .file_wrap ul.nav.nav-tabs{min-height: auto;height:auto;}
</style>
<?php if(is_user_logged_in()){ ?>
<section class="file_management">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 px-0">
<div class="left-sidebar">
<div id="ct-logo" class="site-branding">
							<?php
							the_custom_logo();
							?>						
	</div>
<div id="accordion">
<?php
$cat_args = array (
    'taxonomy' => 'files_category',
);
$categories = get_categories ( $cat_args );
$i = 0;
foreach ( $categories as $category ) {
    $cat_query = null;
    $args = array (
        'posts_per_page' => -1,
        'post_type' => 'files',
        'taxonomy' => 'files_category',
        'term' => $category->slug
    );

    $cat_query = new WP_Query( $args );
	if ( $cat_query->have_posts() ) { ?>
<div class="card">
      <div class="card-header">
        <a class="btn" data-bs-toggle="collapse" href="#collapse<?php echo $i; ?>">
        <span><?php echo $category->name; ?></span>
        <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/plus-icon-primary-light.svg">
        </a>
      </div>
      <div id="collapse<?php echo $i; ?>" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
        <ul>
    <?php 
        while ( $cat_query->have_posts() ) {
            $cat_query->the_post();
            ?>
            <li>
               <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
				</a>
            </li>
            <?php
        }?>
        </ul>
		   </div>
      </div>
    </div>
		<?php
$i++;									 
    }?>
	<?php
    wp_reset_postdata();
}	?>
</div>    
</div>
</div>
<div class="col-lg-9 px-0">
<div class="overall_wrap_full_width">
<div class="overall_container_wrap">
<div class="my_btg_content_header">
<div class="btg_website_button">
	<?php $btg_button_link = get_field('my_btg_link', 'option');
	if($btg_button_link):
    $link_url = $btg_button_link['url'];
    $link_title = $btg_button_link['title'];
    $link_target = $btg_button_link['target'] ? $btg_button_link['target'] : '_self';
	?>
	<div class="button_wrap">
    <a class="button-link button-link-Primary hvr-sweep-to-right" href="<?php echo $link_url; ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $link_title; ?></a>
	</div>
	<?php endif; ?>
</div>
<h1 class="post_title"><?php echo the_title(); ?></h1>
	</div>
<div class="file_wrap">
<?php $allelements = get_field('first_stage', $post_id); ?>
<ul class="nav nav-tabs">
<?php 
$j = 0;
foreach($allelements as $allelement)
{
	$file_group_name = $allelement['file_name'];
	$id_name = (str_replace(' ', '', strtolower($file_group_name)));?>
	<li <?php if($j == 0) {echo 'class="active"'; } ?>>
		<a data-toggle="tab" href="#<?php echo $id_name.'-'.$j; ?>"><?php echo $file_group_name; ?></a></li>
<?php 
$j++;
} ?>
</ul>
<div class="tab-content"> 
<?php 
	$k = 0;
	foreach($allelements as $allelement) 
	{$file_group_name = $allelement['file_name'];
	 $id_name = (str_replace(' ', '', strtolower($file_group_name)));
		?>
	<div id="<?php echo $id_name.'-'.$k; ?>" class="tab-pane <?php if($k == 0) {echo ' in active';} ?>">
	<?php 
	$file_details = $allelement['file_details'];
	foreach($file_details as $file_detail){
	$file_name = $file_detail['file_name'];
	echo '<h3>'.$file_name.'</h3>';
	$files_groups = $file_detail['file_group'];
	$field = get_field_object('field_63070254afe12');
	$choices = $field['choices'];
		$convert_value = '';?>
	<form method="post" action>
	<select name="languages" id="languages" onchange = "fileDetailsChange(this)">
	<?php
	foreach($files_groups as $file_group){
		$langs = $file_group['file_lang'];
		$langs_value = strtolower($langs);
		$lang_without_space = str_replace(' ', '', $langs_value);
		echo '<option value="'.$lang_without_space.'">'.$langs.'</option>';
	}?></select>
	<div class="file_wrap">
	<?php $h = 0;
	foreach($files_groups as $file_group){
		$langs = $file_group['file_lang'];
		$langs_value = strtolower($langs);
		$lang_without_space = str_replace(' ', '', $langs_value);
		$file = $file_group['file'];
		$filetitle = $file['name'];
		$attachment_id = $file['id'];
		$filesize = $file['filesize'];
		$fileurl = $file['url'];
		$date = get_the_date('M d, Y', $attachment_id);
		$format_change = size_format($filesize, 2);
		$dynamic_document_detail[] = ["filename" => $filetitle, "fileurl" => $fileurl, "filesize" => $format_change, "filedate" => $date, "filelang" => $langs];
	?>
<div class="file_details" id="<?php echo $langs_value; ?>" data-lang="<?php echo $langs_value; ?>">
<?php echo '<span class="format_change" data-format="'.$format_change.'">'.$format_change.'</span><span class="format_date" data-date ="'.$date.'">'.$date.'</span>';	?>
		<a href="<?php echo $fileurl; ?>" data-url ="<?php echo $fileurl; ?>" class="file_url download-button button-link button-link-Primary hvr-sweep-to-right" download = "<?php echo $filetitle ?>"><input type="button" name="download" value="Download" class="submit"/></a>
	</div>
	<?php
	$h++;
	 }
	?>	
	</div>
	<?php $k++;
	}
?>
	</form>
	</div>
		<?php
}
	?>
</div>
</div>
</div>
</div>
</div>
</div>
</div></section>
<?php } ?>
<script>
function fileDetailsChange(select_field)
{
var file_format = $(select_field).next().find('.file_details[data-lang='+select_field.value+'] .format_change').data('format');
var file_date = $(select_field).next().find('.file_details[data-lang='+select_field.value+'] .format_date').data('date');
var file_url = $(select_field).next().find('.file_details[data-lang='+select_field.value+'] .file_url').data('url');
$(".format_change").text(file_format);
$(".format_date").text(file_date); 
$(".file_url").attr("href", file_url); 
}

$(".download-button").click(function() {
    this.download = 'file-' + getFormattedTime() + '.pdf';
	console.log(this.download);
});

function getFormattedTime() {
    var today = new Date();
    var y = today.getFullYear();
    // JavaScript months are 0-based.
    var m = today.getMonth() + 1;
    var d = today.getDate();
    var h = today.getHours();
    var mi = today.getMinutes();
    var s = today.getSeconds();
    return y + "-" + m + "-" + d + "-" + h + "-" + mi + "-" + s;
}
</script>
<?php 
//  if(!empty($_POST["languages"])){
//   /* DO YOUR QUERY HERE AND GET THE OUTPUT YOU WANT */
//   echo $output; /* PRINT THE OUTPUT YOU WANT, IT WILL BE RETURNED TO THE ORIGINAL PAGE */
// }
get_footer();