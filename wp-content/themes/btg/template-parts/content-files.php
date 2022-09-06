<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package btg
 */?>
<div class="tab_title" style="padding-left:10px;">
<?php 
$allelements = get_field('first_stage', $post->ID);
foreach($allelements as $allelement)
{
	$file_group_name = $allelement['file_name'];
	echo $file_group_name;
	$file_details = $allelement['file_details'];
	foreach($file_details as $file_detail){
	$file_name = $file_detail['file_name'];
	$files_groups = $file_detail['file_group'];
	foreach($files_groups as $file_group){
	$file = $file_group['file'];	
	$filetitle = $file['name'];
	$attachment_id = $file['id'];
	$filesize = $file['filesize'];
	$fileurl = $file['url'];
	$date = get_the_date('M d, Y', $attachment_id);
	$format_change = size_format($filesize, 2);
	}
	}
}
?>
</div>