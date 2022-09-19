<?php
/* Template Name: User Dashboard */   
   get_header();?>
<section class="file_management">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-3 px-0">
			<div class="siderbar_wrap">
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
                                 $current_pageid = get_the_ID();
                                 
                                 while ( $cat_query->have_posts() ) {
                                    
                                    $active_class = '';
                                     $cat_query->the_post();
                                     $query_id = $cat_query->post->ID;
                                     if($current_pageid == $query_id){
                                       $active_class = 'current_page';
                                     }
                                     ?>
                              <li>
                                 <a class = "<?php echo $active_class; ?>" href="<?php the_permalink(); ?>">
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
         </div>
         <div class="col-lg-9 px-0" style="position:relative;">
            <div class="overall_wrap_full_width">
               <div class="overall_container_wrap">
                  <div class="user_details_wrap">
                     <a class="button-link" href="javascript:void(0)">
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/close-icon.svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path clip-rule="evenodd" d="M22,20.998h-1c0,0-1,0-1-1V17.5c0-0.277-0.224-0.5-0.5-0.5S19,17.223,19,17.5  l-0.008,4.295c0,0.609-2.01,2.205-6.492,2.205s-6.492-1.596-6.492-2.205L6,17.5C6,17.223,5.776,17,5.5,17S5,17.223,5,17.5v2.498  c0,1-1,1-1,1H3c0,0-1,0-1-1V15.75c0-2.922,2.892-5.401,6.93-6.341c0,0,1.234,1.107,3.57,1.107s3.57-1.107,3.57-1.107  c4.038,0.94,6.93,3.419,6.93,6.341v4.248C23,20.998,22,20.998,22,20.998z M12.477,9c-2.485,0-4.5-2.015-4.5-4.5S9.991,0,12.477,0  s4.5,2.015,4.5,4.5S14.962,9,12.477,9z" fill-rule="evenodd"></path></svg>
                     </a>
                     <div class="user_details">
                     <?php global $current_user;
                           wp_get_current_user() ; ?>
                        <div class="welcome_user_wrap">
                        <h3 class="username_welcome">Welcome <strong class="username"><?php echo $current_user->user_login; ?></strong></h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path clip-rule="evenodd" d="M22,20.998h-1c0,0-1,0-1-1V17.5c0-0.277-0.224-0.5-0.5-0.5S19,17.223,19,17.5  l-0.008,4.295c0,0.609-2.01,2.205-6.492,2.205s-6.492-1.596-6.492-2.205L6,17.5C6,17.223,5.776,17,5.5,17S5,17.223,5,17.5v2.498  c0,1-1,1-1,1H3c0,0-1,0-1-1V15.75c0-2.922,2.892-5.401,6.93-6.341c0,0,1.234,1.107,3.57,1.107s3.57-1.107,3.57-1.107  c4.038,0.94,6.93,3.419,6.93,6.341v4.248C23,20.998,22,20.998,22,20.998z M12.477,9c-2.485,0-4.5-2.015-4.5-4.5S9.991,0,12.477,0  s4.5,2.015,4.5,4.5S14.962,9,12.477,9z" fill-rule="evenodd"></path></svg>
                        </div>
                        <div class="preferred_language">
                           <div class="glabal_preferred_language"><h4>Preferred_language</h4>
                           <?php $field = get_field_object('field_63070254afe12');
$global_choices = $field['choices'];
?>
<div class="global_language_wrap" onclick="globalDetailsChange(this)">
                              <ul name="languages" id="global_languages" class="custom_select_list">
                                <?php 
                                $langs = array_values($global_choices)[0];
                                $langs_value = strtolower($langs);
                                $lang_without_space = str_replace(' ', '', $langs_value);
                         echo '<li value = "" class="init"><img src="'.site_url().'/wp-content/themes/btg/langimages/'.$lang_without_space.'.svg"></li>'; 
                         ?>
                                 <?php
                                    foreach($global_choices as $choice){
                                    	$langs = $choice;
                                    	$langs_value = strtolower($langs);
                                    	$lang_without_space = str_replace(' ', '', $langs_value);
                                    	echo '<li value="'.$lang_without_space.'"><img src='.site_url().'/wp-content/themes/btg/langimages/'.$lang_without_space.'.svg><span class="lang_detail">'.$langs.'</span></li>';
                                    }?>
                              </ul>
                                 </div>
                                 </div>
                           <p>Determine your prefered language for documents</p>
                        </div>
                        <div class="logout"><a href="javascript:void(0)">Logout</a></div>
                        <div class="my_last_download">
                        <h3 class="my_last_downloads_title">My Last Downloads</h3>
                           <?php 
                           $user_id = get_current_user_id();
                           $downloadlogs = unserialize(get_user_meta($user_id, 'download_log', true)); 
                           foreach($downloadlogs as $downloadlog){?>
                        <div class="my_last_download_files">
                        <h2 class="download_file_name"><?php echo $downloadlog['file_name']; ?></h2>
                        <div class="download_file_details">
                           <span class="download_file_type"><?php echo $downloadlog['file_type']; ?></span>
                           <span class="download_file_size"><?php echo $downloadlog['file_size']; ?></span>
                           <span class="download_file_date"><?php echo $downloadlog['file_date']; ?></span>
                        </div>
                        </div>
                        <?php } ?>
                        </div>
                     </div>
                  </div>
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
                     <h1 class="post_title"><?php echo 'Welcome'; ?></h1>
                  </div>
                  <div class="file_wrap">
                     <?php $allelements = get_field('first_stage', $post_id); ?>
                     <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#my_last_downloads" class="active">My Last Downloads</a></li>
                        <li><a href="<?php echo site_url(); ?>/account/">My Account</a></li>
                        <li><a href="<?php echo wp_logout_url();?>">Logout</a></li>
                     </ul>
                     <div class="tab-content">
                        <div id="#my_last_downloads" class="tab-pane in active">
                        <?php $user_id = get_current_user_id();
                           $downloadlogs = unserialize(get_user_meta($user_id, 'download_log', true)); 
                           foreach($downloadlogs as $downloadlog){ ?>
                           	  <div class="indiviual_file_details">
							  <div class="invidual_file_wrap">
                              <?php echo '<h3><span class="file-type">PDF</span>'.$downloadlog['file_name'].'</h3>'; ?>                           <div class="file_details_wrap">
                              <div class="file_details" id="<?php echo $langs_value; ?>" data-lang="<?php echo $langs_value; ?>">
                                 <?php echo '<div class="single_file_details"><span class="format_change" data-format="'.$downloadlog['file_size'].'">'.$downloadlog['file_size'].'</span><span class="format_date" data-date ="'.$downloadlog['file_date'].'">'.$downloadlog['file_date'].'</span></div>';	?>
                                 <a href="<?php echo $fileurl; ?>" data-file-type="<?php echo $file_type; ?>" data-url ="<?php echo $fileurl; ?>" data-download-filename="<?php echo $filetitle ?>" class="file_url download-button button-link button-link-Primary hvr-sweep-to-right" download = "<?php echo $filetitle ?>">Download</a>
                                 <!-- <input type="button" name="download" value="Download" class="submit"/> -->
                              </div>
                           </div>

							</div>
						   </div>
                           <?php } ?>						
                           </div>
                     </div>
                  </div>
            </div>
      </div>
   </div>
   </div>
   </div>
</section>
<div class="my_btg_footer">
	<div class="mu_btg_footer_wrap">
			 <?php $footer_content = get_field('my_btg_footer', 'option'); ?>
			 <div class = "right_content">
				<?php  echo $footer_content['right_content'] ?>
			</div>
			<div class= "left_content">
			<?php  echo $footer_content['left_content'] ?>
			</div>
						</div>
						</div>

<script>

// var selected_lang = localStorage.getItem('language');
// if(selected_lang != undefined){
//    globalValueChange(selected_lang);
// }
$("ul#languages").on("click", ".init", function() {
       $(this).closest("ul").children('li:not(.init)').slideToggle();
   });
   $("ul#languages").on("click", "li:not(.init)", function() {
   	var allOptions = $(this).closest("ul").children('li:not(.init)');
      //  allOptions.removeClass('selected');
      $('li:not(.init)').removeClass('selected');
       $(this).addClass('selected');
       $(this).closest("ul").children('.init').html($(this).html());
   	var langvalue = $(this).text().toLowerCase();
   	$("ul").children('.init').attr('value', langvalue);
       allOptions.toggle();
   });


function fileDetailsChange(select_value)
   {
   	var single_selected_value = $(select_value).find('#languages .selected');
   	var single_lang = single_selected_value.attr('value');
   	var parent = $(single_selected_value).parents();
   	var single_select_field = parent.next().find('.file_details[data-lang='+single_lang+']');
   	var file_format = single_select_field.find('.format_change').data('format');
   	var file_date = single_select_field.find('.format_date').data('date');
   	var file_url = single_select_field.find('.file_url').data('url');
   	$(select_value).next().children().find(".format_change").text(file_format);
   	$(select_value).next().children().find(".format_date").text(file_date);
   	$(select_value).next().children().find(".file_url").attr("href",file_url);
   }


   // foreach
   $("ul#global_languages").on("click", ".init", function() {
       $(this).closest("ul").children('li:not(.init)').slideToggle();
   });
   $("ul#global_languages").on("click", "li:not(.init)", function() {
      var allOptions = $(this).closest("ul").children('li:not(.init)');
      allOptions.toggle();
   });
   function globalDetailsChange(global_value)
   {
   $("ul#global_languages").on("click", "li:not(.init)", function() {
      $('li:not(.init)').removeClass('selected');
      $(this).addClass('selected');
      $('ul#global_languages').children('.init').html($(this).html());
   	var langvalue = $(this).text().toLowerCase();
   	$("ul#global_languages").children('.init').attr('value', langvalue);
      var global_variable = $(this).attr('value');
      // localStorage.setItem('language', global_variable);
      globalValueChange(global_variable);
         // $("ul#languages").children('li').addClass('selected');
   });
}



function globalValueChange(global_variable){
   var individual_variable = $("ul#languages").children('li').data("value");
      $("ul#languages").find("li[value='"+global_variable+"']").addClass('selected');
      var inidvidual_lang = $("ul#languages").children('li.selected');
      jQuery.each( inidvidual_lang, function( inidvidual_lang, val ) {
         $(val).closest("ul").children('.init').html($(this).html());
         var get_parents = $(val).parent().parent();
         var language = $(val).attr('value');
         var select_field = get_parents.next().find('.file_details[data-lang='+language+']');
   	   var file_format = select_field.find('.format_change').data('format');
   	   var file_date = select_field.find('.format_date').data('date');
   	   var file_url = select_field.find('.file_url').data('url');
         $(get_parents).next().children().find(".format_change").text(file_format);
   	$(get_parents).next().children().find(".format_date").text(file_date);
   	$(get_parents).next().children().find(".file_url").attr("href",file_url);
   });
}
    
$('.user_details_wrap .button-link').click(function(){
      $(this).parent().toggleClass("slide");
});
   $( document ).ready(function() {
      setTimeout(function(){
var files_height = $('.file_management .file_wrap .tab-content .tab-pane.active').height();
var header_height = $('.my_btg_content_header').height();
var full_height = files_height + header_height;
$(".file_management").css("min-height", full_height);
   }, 10);
});
$('.file_wrap ul.nav.nav-tabs a').click(function(){
setTimeout(function(){
var files_height = $('.file_management .file_wrap .tab-content .tab-pane.active').height();
var header_height = $('.my_btg_content_header').height();
var full_height = files_height + header_height;
$(".file_management").css("min-height", full_height);
   }, 10);
});

jQuery(document).ready( function($) {
   $(".download-button").click( function() {
      var file_size = $(this).prev().find('.format_change').text();
      var file_date = $(this).prev().find('.format_date').text();
      var file_link = $(this).attr('href');
      var file_name = $(this).data('download-filename');
      var file_type = $(this).data('file-type');
	   $.ajax({
      type: 'POST',  
		url: site_url + "/wp-admin/admin-ajax.php",
		data: {file_size: file_size, file_date: file_date, file_link: file_link, file_name: file_name, file_type: file_type, action:'my_file_data'},
      success: function(data){
      } 
      });
   });
});

</script>
<?php 
get_footer();
?>