<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="main_container" class="inner_cnt">

	<!-- Heading Box Start -->
	<div class="head_box">

		<div class="container">
			<div class="row">

				<h1><span><?php echo get_field('sub_headline', '26'); ?></span>
				<?php echo get_the_title('26'); ?></h1>

				<?php
					wp_nav_menu( array(
						'menu' => '4',
						'menu_class'     => 'sub_nav',
						'container'   => false,
						'depth'          => 0
					));
				?>
			</div>
		</div>
	</div>
	<!-- Heading Box End -->

	<br class="clear">
	<div class="container">
		<div class="row">
			<!-- Blog Left Part Start -->
			<div class="col-sm-8">
				<!-- Blog Box Start -->
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="blog_list_box">
					<div class="img_blog_box">
						<?php $thumbnail = get_the_post_thumbnail_url($post->ID); ?>
						<img src="<?php echo $thumbnail; ?>" alt="">
						<div class="date_box">
							<?php echo get_the_date('j'); ?>
							<span><?php echo get_the_date('M'); ?></span>
						</div>
						<?php $cats = get_the_category(); ?>
						<div class="post_info">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icn-user.jpg" alt=""><span><?php the_author(); ?></span>
							<?php if(!empty($cats)) { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/icn-folder.jpg" alt=""><span>Posted in <?php foreach($cats as $cat) { echo $cat->name . ', '; } ?></span>
							<?php } ?>
						</div>
					</div>

					<h4><?php echo get_the_title(); ?></h4>

					<?php the_content(); ?>
					<br class="clear" /><br class="clear" />
					<a href="<?php echo esc_url( home_url( '/index.php/blog' ) ); ?>">Back to all post</a>
				</div>
				<?php endwhile; ?>
				<!-- Blog Box End-->
			</div>
			<!-- Blog Left Part End -->

			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<br class="clear">
<?php get_footer();
?>
