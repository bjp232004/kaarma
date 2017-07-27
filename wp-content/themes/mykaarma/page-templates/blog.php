<?php
/**
 * Template Name: Blog
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
$post_per_page = 10;
$paged = get_query_var( 'paged', 1 );
global $wp;
$current_url = get_permalink($post->ID);
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
			<!-- Blog Left Part Start -->
			<div class="col-sm-12">
				<!-- Blog Box Start -->
				<div class="row">
				<?php $cnt=0; ?>
				<?php query_posts( 'posts_per_page='.$post_per_page.'&post_type=post&paged='.$paged ); ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="blog_list_box1 col-sm-6 col-xs-12">
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

					<h4><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title(); ?></a></h4>

					<?php echo get_the_excerpt(); ?>

				</div>
				<?php $cnt++; ?>
				<?php if($cnt%2==0) {
					echo '</div>&nbsp;<div class="row">';
				} ?>
				<?php endwhile; ?>
				</div>
				<!-- Blog Box End-->
				
				<?php
					$my_query = new WP_Query('post_type=post');
					// stuff
					$count = $my_query->post_count;
					$page = ceil($count/$post_per_page);
					if($count > 10){
				?>
				<div class="pagination_blog">
					<?php
					for($i=0; $i<$page; $i++) {
						$cnt = $i+1;
						if($paged == $cnt || ($paged == $i && $paged == 0)) {
							$class="active";
							$cnt1 = $cnt+1;
							$prevurl = $current_url.'page/'.$cnt1;
						}
						
						$url = $current_url.'page/'.$cnt;
						echo '<a href="'.$url.'" class="'.$class.'">'.$cnt.'</a>';	
						$class="";
					}
					?>
					<?php if($cnt != $paged){ ?>
					<a href="<?php echo $prevurl; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-blog.png" alt=""></a>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
			<!-- Blog Left Part End -->
			<br class="clear" />
			<?php //get_sidebar(); ?>
		</div>
	</div>
</div>

<br class="clear">
<?php get_footer();
?>