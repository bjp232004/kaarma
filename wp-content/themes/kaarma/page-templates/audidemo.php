<?php
/**
 * Template Name: Audi Demo
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

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="main_container" class="inner_cnt">

	<!-- Heading Box Start -->
	<div class="head_box audi_box">

		<div class="container">
			<div class="row">
				<h1><img src="<?php echo get_template_directory_uri(); ?>/images/logo-audi.png" width="120" class="logo_audi">
					<span>Welcome Audi Dealer Partners</span>
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
	</div>
	<!-- Heading Box End -->

	<br class="clear">

	<div class="container">
		<div class="row">
			<div class="right col-md-7 col-sm-6 col-xs-12 pad_left rel_pos">
				<iframe src="//www.youtube.com/embed/X1nt-KdKI0w" width="100%" style="max-width:618px;" height="350"></iframe>

				<span class="demo_indication hidden-xs hidden-sm">Watch a 1:00
					Minute Video
					<img src="<?php echo get_template_directory_uri(); ?>/images/arrow-video.png" alt="">
				</span>
			</div>

			<div class="col-md-5 col-sm-6 form_demo">
				<br class="clear visible-xs" /><br class="clear visible-xs" />
				<?php echo do_shortcode('[contact-form-7 id="1050" title="Audi Demo"]'); ?>
				<br>
				<br class="hidden-xs">
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<br class="clear">
<?php get_footer();
