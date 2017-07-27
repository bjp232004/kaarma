<!-- User Review Start -->
<div class="container">
	<div class="row customer_review">
		<h2><span>Happy Customers</span>User Reviews</h2>
		<div id="user_review" class="owl-carousel">
			<?php query_posts( 'posts_per_page=6&post_type=testimonials-widget' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
            <div class="item">
                <div class="test_box_home">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/icn-quate.png" alt="">
       				<p><?php echo get_the_content(); ?></p>

					<span class="user_name"><?php echo get_field('testimonials-widget-author',$post->ID); ?></span>
       			</div>
            </div>
			<?php endwhile; ?>
        </div>
	</div>
</div>              
<!-- User Review End -->