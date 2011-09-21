//Funcția
<?php
  /** -----------------------------------------------
	         * Page navi Previous 1 2 3 4 5 6 Next
	*/ 
	if ( !function_exists('wplook_pagenav') ) {
	        function wplook_pagenav($range = 7){
	                global $paged, $wp_query, $max_page;
	                if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	                if($max_page > 1){if(!$paged){$paged = 1;}
	                        echo '<span> '.$paged.' / '.$max_page.'</span>';
	                if($paged != 1){echo "<a rel='nofollow' href='" . get_pagenum_link(1) . "' class='extend' title=".__('First Page','wplook').">". __('First','wplook')."</a>";}
	                previous_posts_link(__('previous','wplook'));
	                if($max_page > $range){
	                        if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a rel='nofollow' href='" . get_pagenum_link($i) ."'";
	                        if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	                elseif($paged >= ($max_page - ceil(($range/2)))){
	                        for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a rel='nofollow' href='" . get_pagenum_link($i) ."'";
	                        if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	                elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
	                        for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a rel='nofollow' href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
	                else{for($i = 1; $i <= $max_page; $i++){echo "<a rel='nofollow' href='" . get_pagenum_link($i) ."'";
	                if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	                next_posts_link(__('next','wplook'));
	                if($paged != $max_page){echo "<a rel='nofollow' href='" . get_pagenum_link($max_page) . "' class='extend' title=".__('Last Page','wplook').">". __('Last','wplook')."</a>";}}
	                }
	}
?>

//Chemarea funcției
 <?php if (  $wp_query->max_num_pages > 1 ) : ?>
	                        <?php if (function_exists('wplook_pagenav')) : ?><div class="page_navi"><?php wplook_pagenav(5); ?></div>
	                <?php else: ?>
	                        <div id="page_navi">
	                                <?php next_posts_link(); ?>
	                                <?php previous_posts_link(); ?>
	                        </div>
	                <?php endif;  ?>
<?php endif;  ?><!-- page navi -->