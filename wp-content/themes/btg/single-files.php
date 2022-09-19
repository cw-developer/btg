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
   .file_management {padding: 0px !important;height:auto;display:flex;}
   .file_management .card{border-radius:0px;border:unset;background-color:transparent;}
   .file_management .left-sidebar { background-color: var(--dark-heading-color); display: flex;flex-direction:column;height: 100vh; overflow-y: scroll; align-content: flex-start;position: fixed;z-index: 99;width:25%;}
   .file_management .left-sidebar:after { content: ''; position: absolute; width: 100%; height: 100%; left: 0; top: 0; z-index: -1; background-image: linear-gradient(45deg, var(--dark-color) 0%, var(--dark-color) 50%, transparent 50.1%); opacity: 0.3; }   
   .file_management div#accordion {width: 100%;}
   .file_management .card-header { background-color: var(--dark-heading-color);border-radius:unset !important;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: var(--dark-color);position: relative;}
   .file_management .card-header a.btn:after { content: ""; transition: background-color 250ms linear; width: 5px; height: 100%; position: absolute; left: 0; top: 0; bottom: 0; background-color: var(--dark-grey-color);}
   .file_management .card-header a.btn.collapsed:after{opacity: 0.2;}
   .file_management .card-header { padding:0px;}
   .file_management .card-header * {color: var(--light-color);padding: 10px 0px;}
   .file_management .card-header a{display: flex; text-align: left; justify-content: space-between; align-items: center;text-align:left;padding: 16px 48px 16px 32px;text-transform:uppercase;}
   .file_management .card-body { padding: 32px; border: none; border-bottom: 0; background-color: transparent; color: var(--light-color); }
   .file_management ul li:last-child { margin-bottom: 0px; }
   .file_management .card-body a{color: var(--light-color);}
   .file_management .left-sidebar .card-header .btn:hover, .file_management .left-sidebar .card-header a:hover, .file_management .left-sidebar .card-header a:focus, .file_management .left-sidebar .card-header a:active {color: var(--light-color) !important;}
   .file_management .btn:focus{box-shadow:unset !important;}
   .file_management .site-branding {width: 100%;padding:40px 0px;display:flex;}
   .file_management .site-branding img {filter: invert(1) brightness(100);width: 145px;}
   .file_management .card-header a span { padding: 0px; }
   .file_management .custom-logo-link {display: flex;height: auto;align-items: center; justify-content: center; width: 100%;}
   .file_management ul.nav.nav-tabs { flex-direction: column; align-items: flex-start; justify-content: center;width:37.5%;}
   .file_wrap {display: flex;align-items: flex-start;position: relative;}
   .file_management a.download-button input { background: transparent; border: unset; width: auto; height: auto; margin: 0px;font-size: 18px;line-height:21px;    font-weight: bold; padding: 0px; height: 24px;}
   .overall_container_wrap{width: 80%;margin: 0 auto;}
   .file_management ul.nav.nav-tabs li a{min-height:auto;justify-content: flex-start;font-size:18px;position: relative;}
   .file_management ul.nav.nav-tabs li{height: auto;min-height: auto;width: 100%;}
   .file_management .tab-content * {color: var(--light-color);}
   .file_management a.download-button {padding: 10px 20px !important;display: flex;position: relative;z-index: 1;line-height: 1.4;}
   .file_details { display: none; align-items: center; justify-content: space-between; }
   .file_details span { font-size: 14px;opacity: 0.7;}
   .file_management select,  .file_management select option {color: black !important;}
   .file_details:first-child {display: flex !important;width: 100%;}
   .file_management .card-header img{width: 15px;height: auto;padding:10px;box-sizing:content-box;position: absolute; top: 50%; right: 32px; transform: translateY(-50%) rotate(0deg);}
   .card-header a[aria-expanded="true"] img {box-shadow: inset 0px 0px 15px 0px rgb(0 0 0 / 35%); border-bottom: 1px solid rgba(255,255,255,0.15); border-radius: 50px;transition: all 0.2s linear;}
   .card-header a[aria-expanded="false"] img {box-shadow: unset; border: unset;transform: translateY(-50%) rotate(0deg);}
   .file_management .file_wrap ul.nav.nav-tabs li a{padding: 1rem 32px;background-color: var(--light-grey-color);    line-height: 1.6;text-transform:uppercase;}
   .file_management .file_wrap ul.nav.nav-tabs{justify-content: flex-start;}
   .file_wrap li>a::after { transition: left 200ms ease; content: ""; width: 5px; position: absolute; left: 0; top: -1px; bottom: -1px; background-color: #677d7d; opacity: 0; }
   .file_management .file_wrap  ul.nav.nav-tabs li a.active{background-color: var(--dark-heading-color);}
   .file_management .file_wrap ul.nav.nav-tabs li.active a{color:var(--light-color);}
   .file_management .file_wrap ul.nav.nav-tabs li:hover{background-color: transparent;}
   .file_management .file_wrap ul.nav.nav-tabs li{background-color:transparent;}
   .file_management .file_wrap .tab-content{width: 62.5%; padding: 0px; background-image: linear-gradient(225deg, rgba(255,255,255,0.025) 0px, rgba(255,255,255,0.025) 300px, transparent 301px); background-color: #313939; box-shadow: 0px 2px 14px 0px rgb(0 0 0 / 40%);position: absolute; right: 0;}
   ul.nav.nav-tabs li:hover a{color:var(--dark-heading-color);}
   .file_management .indiviual_file_details { color: #fff; padding: 32px; position: relative; }
   ul.nav.nav-tabs li:hover a.active{color:var(--light-color);}
   .btg_website_button a { font-size: .875rem; display: inline-block; background-color: var(--primary-color); background-image: linear-gradient(to top, #e2001a 0%, #c6222a 100%); border-radius: 0 0 0.375rem 0.375rem; padding-top: 0.25rem; padding-right: 1.25rem; padding-bottom: 0.25rem; padding-left: 1.25rem; box-shadow: 0 2px 1px 0 rgb(0 0 0 / 15%); text-shadow: 0 1px 1px rgb(0 0 0 / 15%); color: var(--light-color); transition: box-shadow 200ms ease; }
   .btg_website_button .button_wrap { justify-content: flex-start; margin-bottom: 30px; }
   h1.post_title {font-weight: 100;font-size: 42px;}
   .my_btg_content_header { padding: 0px 0px 64px 0px; }
   h1.post_title {margin-bottom: 0px;}
   .overall_wrap_full_width { background-image: linear-gradient(225deg, rgba(222,223,226,0.3) 0%, rgba(222,223,226,0.3) 50%, transparent 50.1%); background-color: var(--light-color); }
   body.single.single-files {background-color: var(--dark-heading-color);}
   .file_management .file_wrap ul.nav.nav-tabs{min-height: auto;height:auto;}
   ul#languages { height: auto; width: 187px;}
   ul#languages li, .global_language_wrap li {padding: 5px 5px;z-index: 2;display: flex;align-items: center;justify-content: center;cursor: pointer;}
   ul#languages li.init:hover, .global_language_wrap li.init:hover { box-shadow: 0px 4px 16px 2px rgb(0 0 0 / 70%); z-index: 99; }
   ul#languages li:not(.init), .global_language_wrap li:not(.init) {width: 187px;background: var(--primary-color);margin:0px;justify-content:flex-start;padding: 10px 8px;display:none;box-sizing: border-box;position: relative; z-index: 999;}
   ul#languages li:not(.init):hover, ul#languages li.selected:not(.init), .global_language_wrap li:not(.init):hover, .global_language_wrap li.selected:not(.init) { background: var(--primary-light-color); }
   ul#languages li.init, .global_language_wrap li.init { cursor: pointer;width: 60px;height:45px;padding:7px;background: var(--primary-light-color);margin:0px;position: relative;padding:10px;z-index: 99;}
   .languages_wrap { position: absolute; right: 32px;}
   ul#languages .init img, .global_language_wrap .init img{position: relative;z-index: 1;background-image: url(../../wp-content/uploads/2022/09/down-arrow.svg); background-size: 8px; padding-right: 15px; background-repeat: no-repeat; background-position: center right 0px;}
   ul#languages .init span.lang_detail, .global_language_wrap .init span.lang_detail {display: none;}
   ul#languages li.init:after, .global_language_wrap li.init:after { content: ""; position: absolute; top: 0; right: 0; bottom: 0; left: 0; background-image: linear-gradient(40deg, #E2001A 0%, #E2001A 50%, transparent 50.1%); z-index: -1; }
   ul#languages li:not(.init) img, .global_language_wrap li:not(.init) img { width: 30px; margin-right: 10px; }
   ul#languages li:nth-child(odd):not(.init), .global_language_wrap li:nth-child(odd):not(.init) {background-color: var(--primary-light-color);}
   ul#languages li:nth-child(odd):not(.init):hover, .global_language_wrap li:nth-child(odd):not(.init):hover{background-color: var(--primary-color);}
   .glabal_preferred_language { display: flex; align-items: center; justify-content: space-between; margin-bottom: 35px; }
   .file_management .file_wrap ul.nav.nav-tabs li a:hover {box-shadow: inset 0px 0px 20px 1px rgb(0 0 0 / 15%);border-bottom-color: rgba(255,255,255,0.7);}
   ul#languages a#submit { z-index: 1; }
   .my_btg_footer{position: relative;padding-top:250px;}
   .my_btg_footer  .mu_btg_footer_wrap { display: flex; justify-content: space-between; width: 75%; position: absolute; bottom: 0px; right:0;padding: 32px 8%;}
   .my_btg_footer * {color: var(--light-color);}
   .indiviual_file_details:after { content: ""; position: absolute; bottom: 0; right: 32px; left: 32px; border-top: 1px solid rgba(255,255,255,0.15); }
   .left-sidebar:before { content: ""; position: absolute; top: 0; right: 0; bottom: 0; left: 0; pointer-events: none; box-shadow: inset -8px 0px 10px 0px rgb(0 0 0 / 20%); z-index: 1; }
   .file_management .file_wrap ul.nav.nav-tabs li a::after { transition: left 200ms ease; content: ""; width: 5px;height:100%; position: absolute; left: 0; top: 0px;background-color: #677d7d; opacity: 0; }
   .file_wrap .tab-content div.tab-pane{overflow:visible;}
   .file_management .file_wrap ul.nav.nav-tabs li a.active::after{left:-5px;opacity: 1;}
   .invidual_file_wrap h3 {font-size: 26px;font-weight: 400;position: relative;padding-left:30px;hyphens: none; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;}
   span.file-type { display: block; text-transform: uppercase; font-size: 11px; background-color: #222929; position: absolute; top: 50%; left: -7px; transform: translatey(-50%) rotate(-90deg);padding: 5px 10px;}
   .file_management .card-body li {margin-bottom: 0px;}
   .file_management .card-body a {display: block; transition: color 200ms ease, border-bottom 400ms ease; color: rgba(255,255,255,0.7); padding-top: 0.5rem; padding-bottom: 0.5rem;border-bottom: 1px solid #313939; font-size:14px;}
   .file_management ul li:last-child a { border: unset; }
   .indiviual_file_details:last-child:after{display:none;}
   .file_management ul li a.current_page, .file_management ul li a:hover {color: var(--primary-light-color);}
   .single_file_details span {margin-right: 2rem;}
   .user_details_wrap { position: fixed; right: 0px; height: 100%; z-index: 999;display:flex;    max-width: 440px;transform: translateX(370px);    transition: all 0.8s linear;}
   .user_details_wrap.slide { transform: translateX(0px); }
   .user_details_wrap a.button-link {transition: all .5s linear; display: flex;flex-direction:column; min-width: 70px; height: 70px; position: relative; background-image: url(../pics/cross.svg); background-color: #fff; background-size: 18px; background-repeat: no-repeat; background-position: center -150%; overflow: auto; align-items: center; justify-content: center;    transition: all 0.8s linear;overflow:hidden;}
   .user_details { background-color: var(--dark-heading-color); height: 100vh; padding: 30px;display: flex; flex-direction: column;position: relative;background-image: linear-gradient(45deg, rgba(255,255,255,0.025) 0%, rgba(255,255,255,0.025) 50%, transparent 50.1%);}
   .user_details * {color: var(--light-color);}
   .user_details_wrap.slide a.button-link, .user_details_wrap.slide a.button-link:hover { background-color: var(--primary-color); }
   .user_details_wrap a.button-link img{width: 24px; margin-top: -48px; margin-bottom: 24px;transition: all .5s linear;}
   .user_details_wrap.slide a.button-link img {margin-top: 22px;transition: all .5s linear;}
   .welcome_user_wrap h3.username_welcome { font-size: 20px; font-weight: 400;position: relative; z-index: 1;text-align: center;margin-bottom:0px;}
   .welcome_user_wrap { width: 50%; margin: 0 auto; position: relative;padding: 20px 0px 50px 0px;}
   .welcome_user_wrap svg { transition: width 240ms ease; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 40%; height: auto; fill: #677d7d; z-index: 0;margin-top:-12px;}
   .preferred_language h4 { font-size: 16px; font-weight: 100;margin-bottom:0px;}
   .preferred_language p { font-size: 14px; line-height: 1.23; }
   .preferred_language { border-bottom: 1px solid var(--dark-grey-color); margin-bottom: 10px; padding-bottom: 5px; }
   .user_details::before { content: ""; position: absolute; top: 0; right: 0; bottom: 0; left: 0; pointer-events: none; box-shadow: inset 8px 0px 10px 0px rgb(0 0 0 / 20%); z-index: 1; }
   .my_last_download {margin-top: auto;}
   .my_last_download .my_last_downloads_title { font-size: 16px; font-weight: 400;margin-bottom: 30px;}
   .my_last_download_files h2.download_file_name { font-size: 14px; overflow-wrap: anywhere;margin-bottom:8px;}
   .my_last_download_files { border-bottom: 1px solid var(--dark-grey-color) !important; margin-bottom: 10px;padding-bottom: 10px;}
   .download_file_details { display: flex; justify-content: space-between; }
   .download_file_details span { font-size:12px;color: #677d7d; }
   .glabal_preferred_language { position: relative; }
   .global_language_wrap { position: absolute; right: 0px; top: -13px; }
   .global_language_wrap li:not(.init) span.lang_detail { display: none; }
   .global_language_wrap li:not(.init){width:auto;}
</style>
<?php 
$current_user = wp_get_current_user();
if(is_user_logged_in(1 == $current_user->ID)){ ?>
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
                        <li>
                           <a data-toggle="tab" href="#<?php echo $id_name.'-'.$j; ?>" class="<?php if($j == 0) {echo 'active'; } ?>"><?php echo $file_group_name; ?></a>
                        </li>
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
                              $file_name = $file_detail['file_name']; ?>
							  <div class="indiviual_file_details">
							  <div class="invidual_file_wrap">
                              <?php echo '<h3><span class="file-type">PDF</span>'.$file_name.'</h3>';
                              $files_groups = $file_detail['file_group'];
                              $field = get_field_object('field_63070254afe12');
                              $choices = $field['choices'];
                              	// $convert_value = ''; ?>
                           <div class="languages_wrap" onclick="fileDetailsChange(this)">
                              <ul name="languages" id="languages" class="custom_select_list">
                                <?php  //if(count($files_groups) > 0)
                                //{
                                 $langs = $files_groups[0]['file_lang'];
                                    	$langs_value = strtolower($langs);
                                    	$lang_without_space = str_replace(' ', '', $langs_value);
                                echo '<li value = "" class="init"><img src="'.site_url().'/wp-content/themes/btg/langimages/'.$lang_without_space.'.svg"></li>';
                              //   }else{

                                //}?>
                                 <?php
                                    foreach($files_groups as $file_group){
                                    	$langs = $file_group['file_lang'];
                                    	$langs_value = strtolower($langs);
                                    	$lang_without_space = str_replace(' ', '', $langs_value);
                                    	echo '<li value="'.$lang_without_space.'"><img src='.site_url().'/wp-content/themes/btg/langimages/'.$lang_without_space.'.svg><span class="lang_detail">'.$langs.'</span></li>';
                                    }?>
                              </ul>
                           </div>
                           <div class="file_details_wrap">
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
                                 	$date = get_the_date('Y-m-d', $attachment_id);
                                 	$format_change = size_format($filesize, 2);
                                    $path_info = pathinfo( get_attached_file( $attachment_id ) );
                                    $file_type = $path_info['extension'];
                                 	// $dynamic_document_detail[] = ["filename" => $filetitle, "fileurl" => $fileurl, "filesize" => $format_change, "filedate" => $date, "filelang" => $langs];
                                 ?>
                              <div class="file_details" id="<?php echo $langs_value; ?>" data-lang="<?php echo $langs_value; ?>">
                                 <?php echo '<div class="single_file_details"><span class="format_change" data-format="'.$format_change.'">'.$format_change.'</span><span class="format_date" data-date ="'.$date.'">'.$date.'</span></div>';	?>
                                 <a href="<?php echo $fileurl; ?>" data-file-type="<?php echo $file_type; ?>" data-url ="<?php echo $fileurl; ?>" data-download-filename="<?php echo $filetitle ?>" class="file_url download-button button-link button-link-Primary hvr-sweep-to-right" download = "<?php echo $filetitle ?>">Download</a>
                                 <!-- <input type="button" name="download" value="Download" class="submit"/> -->
                              </div>
                              <?php
                                 $h++;
                                  }
                                 ?>	
                           </div>
							</div>
						   </div>						   
                           <?php
                              }
                              ?>
                        </div>
                        <?php
							$k++;
                           }
                           	?>
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

<?php } ?>
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