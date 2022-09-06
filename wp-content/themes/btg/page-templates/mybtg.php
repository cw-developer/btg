<?php
/* Template Name: My BTg */

get_header();
$allelements = get_field('first_stage');
?>
<ul class="nav nav-tabs">
<?php foreach($allelements as $allelement)
{
	$first_stage_group_name = $allelement['first_stage_group_name'];?>
    <li><a data-toggle="tab" href="#home"><?php echo $first_stage_group_name; ?></a></li>
	<?php $second_stages = $allelement['second_stage'];
	foreach($second_stages as $second_stage)
	{
		$secondstagename = $second_stage['second_stage_group_name'];
		$second_stage_file_details = $second_stage['second_stage_file_details']; 
		foreach($second_stage_file_details as $second_stage_file_detail)
		{
			$filedetail = $second_stage_file_detail['file_name'];
			$main_file_details = $second_stage_file_detail['file']; 
			foreach($main_file_details as $main_file_detail)
			{
				$lang = $main_file_detail['lang'];
				$file = $main_file_detail['file'];
				$filetitle = $file['title'];
				$attachment_id = $file['id'];
				$filesize = $file['filesize'];
				$fileurl = $file['url'];
				$date = get_the_date('M d, Y', $attachment_id);
				$format_change = size_format($filesize, 2);
			}
		}
	}
}
?>
</ul>	
<?php get_footer(); ?>