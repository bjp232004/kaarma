<!-- Recent Post Link Start -->
<div class="col-sm-4 hidden-xs post_links">
<h4>Recent Posts</h4>

<ul>
<?php
	$args = array( 'numberposts' => '5' );
    $recent_posts = wp_get_recent_posts( $args );
	foreach($recent_posts as $rpost) {
?>

		<li><a href="<?php echo get_permalink($rpost['ID']); ?>"><?php echo $rpost['post_title']; ?></a></li>
	<?php } ?>
</ul>
<br>


<h4>Categories</h4>

<ul>
<?php $cats = get_categories();
foreach($cats as $cat) {
	echo '<li><a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a></li>';
}
?>
</ul>

</div>
<script>
var top_pos = $(".post_links").offset().top;
$(document).scroll(function() {
	
				
				 

    if( $(this).scrollTop() > top_pos ) {
         
		  $(".post_links").css({"top": "75px", "left": $(".post_links").offset().left , "position":"fixed"}); 
		 
    } 
	
		if( $(this).scrollTop() < top_pos ) {
		$(".post_links").css({"top": "", "left": "", "position":"relative"}); 
		}

	});
</script>