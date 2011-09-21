/* Limitează numărul de taguri pe pagină*/
<?php
$wplook_post_tags = get_the_tags();
$count=0;
if ($wplook_post_tags) {
  foreach($wplook_post_tags as $tag) {
		$count++;
		echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>, ';
		if( $count >4 ) break; //apar primele 5 taguri
	}
}
?>