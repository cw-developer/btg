<?php if( get_row_layout() == 'media_gallery_section' ): 
 $html = '';
 $background_color = get_sub_field('background_color');
 $logo_title = get_sub_field('logo_title');
 $logos = get_sub_field('logos');
//  $logo_image = get_sub_field('logo_image');
//  $logo_download = get_sub_field('logo_download');
 $photos_title = get_sub_field('photos_title');
 $photos = get_sub_field('photos');
 $certification_title = get_sub_field('certification_title');
 $certifications = get_sub_field('certifications');
 $videos_title = get_sub_field('videos_title');
 $videos = get_sub_field('videos');
$customclass = get_sub_field('custom_class');
 $html .= '<section class="media_gallery_section-block '.$customclass.'" style="background-color: '.$background_color.'">';
 $html .= '<div class="container"><div class="row"><div class="col-md-12">';
	if($logos) {
    $html .= '<div class="gallery_wrap media_wrap logo_wrap">';    
    $html .= '<h4>'.$logo_title.'</h4>';
    $html .= '<div class="media_item_container">'; 
    $html .= '<div class="media_item_wrap lightgallerylogo">'; 
    foreach($logos as $logo) {
		$html .= '<div class="item" data-src="'.$logo['image']['url'].'">';
        $html .= '<div class="media_item">';
        $html .= '<div class="media_content">';
        $html .= '<p class="media_title"><span>'.$logo['title'].'</span></p>';   
        $html .= '<p class="media_description">'.$logo['description'].'</p>';            
		  $html .= '</div>';  
		$html .= '<div class="gallery_button_wrap"><a class="view_gallery" data-sub-html="<h4>'.$logo['title'].'</h4>" href="'.$logo['image']['url'].'">View'; 
      $html .= '<img src="'.$logo['image']['url'].'" data-src="'.$logo['image']['url'].'"></a>'; 
		$html .=  '<div id="download-button">'; 
  $html .= '<a href="'.$logo['image']['url'].'" download>Download</a>';
        $html .= '</div></div>';
        $html .= '</div>';
    $html .= '</div>';
  }

    $html .= '</div>';  
    $html .= '</div>';
    $html .= '</div>';
  }
 if( $photos ) {
    $html .= '<div class="gallery_wrap media_wrap photos_wrap">';    
    $html .= '<h4>'.$photos_title.'</h4>';
    $html .= '<div class="media_item_container">'; 
    $html .= '<div class="media_item_wrap lightgalleryphotos">'; 
    foreach( $photos as $photo ) {
		 $html .= '<div class="item" data-src="'.$photo['image']['url'].'">';
         $html .= '<div class="media_item">';
         $html .= '<div class="media_content">';
         $html .= '<p class="media_title"><span>'.$photo['title'].'</span></p>';   
         $html .= '<p class="media_description">'.$photo['description'].'</p>';
		  		 $html .= '</div>';  
         $html .= '<div class="gallery_button_wrap"><a data-sub-html="<h4>'.$photo['title'].'</h4>" class="view_gallery" href="'.$photo['image']['url'].'">View'; 
         $html .= '<img src="'.$photo['image']['url'].'" data-src="'.$photo['image']['url'].'"></a>'; 
         $html .=  '<div id="download-button">'; 
         $html .= '<a href="'.$photo['image']['url'].'" download>Download</a>';
		 $html .= '</div></div>';  
		 $html .= '</div>';  
		 $html .= '</div>';
		    }
		 $html .= '</div>';
	     $html .= '</div>';
	 	 $html .= '</div>';
  }
  if( $videos ) {
    $html .= '<div class="gallery_wrap media_wrap videos_wrap">';    
    $html .= '<h4>'.$videos_title.'</h4>';
    $html .= '<div class="media_item_wrap">'; 
    $html .= '<div class="video_item_wrap">'; 
    foreach( $videos as $video ) {
		$html .= '<div class="item" data-src="'.$video['video_link'].'">';
        $html .= '<div class="media_item">';
        $html .= '<div class="media_content">';
        $html .= '<p class="media_title"><span>'.$video['title'].'</span></p>';   
        $html .= '<p class="media_description">'.$video['description'].'</p>';            
        $html .= '</div>'; 
        $html .= '<div class="gallery_button_wrap"><a class="view_gallery" data-src="'.$video['video_link'].'" data-poster="https://img.youtube.com/vi/egyIeygdS_E/maxresdefault.jpg" data-sub-html="<h4>'.$video['title'].'</h4>">View</a>';
        $html .= '</div></div>'; 
		$html .= '</div>'; 
    }
    $html .= '</div>';
    $html .= '</div></div>';
  }
  if( $certifications ) {
    $html .= '<div class="gallery_wrap media_wrap cetifications_wrap">';    
    $html .= '<h4>'.$certification_title.'</h4>';
    $html .= '<div class="media_item_container">'; 
    $html .= '<div class="media_item_wrap lightgallery_certificate">'; 
    foreach( $certifications as $certification ) {
		$html .= '<div class="item" data-src="'.$certification['image']['url'].'">';
        $html .= '<div class="media_item">';
        $html .= '<div class="media_content">';
        $html .= '<p class="media_title"><span>'.$certification['title'].'</span></p>';   
        $html .= '<p class="media_description">'.$certification['description'].'</p>';            
		  $html .= '</div>';    
      $html .= '<div class="gallery_button_wrap"><a class="view_gallery" data-sub-html="<h4>'.$certification['title'].'</h4>" href="'.$certification['image']['url'].'">View'; 
      $html .= '<img src="'.$certification['image']['url'].'" data-src="'.$photo['image']['url'].'"></a>'; 
  $html .=  '<div id="download-button">'; 
  $html .= '<a href="'.$certification['image']['url'].'" download>Download</a>';
    $html .= '</div></div>';
    $html .= '</div>';
    $html .= '</div>';
  }
$html .= '</div></div></div>';
  }
$html .= '</section>';
$html .= '<script>lightGallery()</script>';
echo $html;
endif; ?>