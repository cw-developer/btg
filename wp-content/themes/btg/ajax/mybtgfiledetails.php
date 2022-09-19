<?php
add_action("wp_ajax_my_file_data", "my_file_data");
add_action("wp_ajax_nopriv_my_file_data", "my_file_data");
function my_file_data(){
$user_id = get_current_user_id();
$full_file_details = array();
$getvalue = unserialize(get_user_meta($user_id, 'download_log', true));
print_r($getvalue);
  if($getvalue)
  {
    $full_file_details =  $getvalue;
    array_push($full_file_details,$_POST);
    if(count($full_file_details) > 4)
    {
      array_shift($full_file_details);
    }
  }else
  {
    array_push($full_file_details,$_POST);
  }
$serialize_array = serialize($full_file_details);
update_user_meta($user_id, 'download_log', $serialize_array);
$response = ''; 
$response .= '';
echo $response;
}