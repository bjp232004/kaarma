<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
$parents = get_post_ancestors( $post->ID );
get_header(); ?>

<div id="main_container" class="inner_cnt">

	<!-- Heading Box Start -->
	<div class="head_box">

		<div class="container">
			<div class="row">

				<h1><span><?php echo get_field('sub_headline', $post->ID); ?></span>
				<?php echo (!empty($parents[0])) ? get_the_title($parents[0]) : get_the_title(); ?></h1>
			
				<?php
					if(!empty($parents) && $parents[0] == 9) {
						wp_nav_menu( array(
							'menu' => '7',
							'menu_class'     => 'sub_nav',
							'container'   => false,
							'depth'          => 0
						));
					}
					
				?>
			</div>
		</div>
	</div>
	<!-- Heading Box End -->

	<br class="clear">
	<div class="container">
		<div class="row about_us">
			<div class="col-sm-12">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
				<!-- More Explore Start -->

				<?php $more = get_field('more_to_explore', $post->ID); ?>
				<?php if(!empty($more)) { ?>
				<div class="more_explore">
					<h3>More to Explore:</h3>
					<?php foreach($more as $link) { ?>
					<a href="<?php echo get_permalink($link->ID); ?>" class="btn btn_orange"><?php echo $link->post_title; ?></a>
					<?php } ?>
				</div>
				<!-- More Explore End-->
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<br class="clear">

<?php get_footer();
