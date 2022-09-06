<?php 
include ('../../../../wp-config.php');
include ('../../../../wp-load.php');
// global $wpdb;
global $post;

$term=$_GET["term"]; 
$q1 = get_posts(array( 'numberposts' => -1, 'fields' => 'ids', 'post_type' => array('page','post', 'events', 'pressrelease', 'careers'),'s' => $term));
$q2 = get_posts(array('numberposts' => -1,'fields' => 'ids', 'post_type' => 'post', 'meta_query' => array(
            array(
               'key' => 'term_text',
               'value' => $term,
               'compare' => 'LIKE'
            )
         )
));

// $q3 = get_posts(array( 'fields' => 'ids', 'post_type' => 'vacature','s' => $term));
// $q4 = get_posts(array( 'fields' => 'ids', 'post_type' => 'agenda','s' => $term));

$mylisting = array_unique( array_merge( $q1, $q2 ) );
$listjson=array();


if(!empty($mylisting)){
	$listingi = 1;
	foreach ($mylisting as $listing) {
// $posttype = "post";
$post_type = get_post_type( $listing );
$elementnum = 'post'.$listingi++;
		$listjson[]=array( 'url'=> get_the_permalink($listing), 'label'=> get_the_title($listing),  'img'=>'#', 'imgClass'=>'hide-ui-img','posttype'=>$post_type,'elementnum'=>$elementnum);
		$listingi++;
	}
}
echo json_encode($listjson);

?>