<?php
/**
 * Template Name: Team
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
$teams = simple_fields_fieldgroup('team');
$teams = array_reverse($teams);
get_header(); ?>
<div id="main_container" class="inner_cnt">

	<!-- Heading Box Start -->
	<div class="head_box">

		<div class="container">
			<div class="row">

				<h1><span><?php echo get_field('sub_headline', $post->ID); ?></span>
				<?php echo (!empty($parents[0])) ? get_the_title($parents[0]) : get_the_title(); ?></h1>
			
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
			<div class="col-sm-12">
				<div class="row">
					<?php $cnt = 1; ?>
					<?php foreach($teams as $team) { ?>
					<div class="col-xs-12 col-md-6 col-lg-4 text-center">
						<img src="<?php echo $team['image']['image_src']['thumbnail'][0]; ?>" /><br />
						<h2><?php echo $team['name']; ?></h2>
						<?php echo $team['desc']; ?>
					</div>
					<?php
						
						if($cnt>2 && $cnt%3==0){
							echo '</div><div class="row rowcnt">';
						}
						$cnt++;
					?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<br class="clear">
<?php get_footer();
