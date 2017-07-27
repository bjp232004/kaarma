<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
$services = simple_fields_fieldgroup('services');
$story = simple_fields_fieldgroup('video_story');
get_header('home'); ?>

			<div class="banner_text_outer">

				<div class="banner_text container">
					<?php echo get_field('banner_text', $post->ID); ?>
				</div>

				<div class="banner_box">
					<div class="container">
						<div class="row">
							<div class="rel_pos">
								<div class="banner_cnt_box">
									<?php foreach($services as $service) { ?>
									<div class="col-sm-3">
										<?php echo $service; ?>
									</div>
									<?php } ?>
								</div>
								<br class="clear">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner End -->
		<br class="clear">

		<!-- Home page content Start -->
		<div class="container">
			<div class="row cnt_home">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php echo get_the_content(); ?>
				<?php endwhile; ?>
			</div>

		</div>
		<!-- Home page content Start -->

		<!-- Partner box Start -->
		<div class="partner_box">
			<div class="container">
				<div class="row">
					<?php echo get_field('partner_content', $post->ID); ?>
				</div>
			</div>
		</div>
		<!-- Partner box End -->

		<!-- Feature Box Start -->
		<div class="app_feature">
			<div class="container">
				<div class="row">
					<div class="col-md-7 app_info">
						<?php echo get_field('feature_content', $post->ID); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Feature Box End -->

		<!-- Video Story Start -->

		<div class="video_story">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-6 no_pad_left">
						<script src="//fast.wistia.com/embed/medias/<?php echo $story['video']; ?>.jsonp" async></script>
						<script src="//fast.wistia.com/assets/external/E-v1.js" async></script>
						<div class="wistia_embed wistia_async_<?php echo $story['video']; ?>" style="height:485px;width:100%">&nbsp;</div>
					</div>

					<div class="col-sm-7 col-md-6 video_cnt">
						<?php echo $story['desc']; ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Video Story End -->
		<br class="clear">
		<?php get_template_part( 'template-parts/page/content', 'testimonial' ); ?>
<?php get_footer(); ?>
<style>
.banner_cnt_box .col-sm-3:last-child .icn_check{display:none;}
</style>

<div class="modal fade" id="myvideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Video</h4>
      </div>
      <div class="modal-body">

       <script src="//fast.wistia.com/embed/medias/qzzoww62yg.jsonp" async></script>
		<script src="//fast.wistia.com/assets/external/E-v1.js" async></script>
		<div class="wistia_embed wistia_async_qzzoww62yg" style="height:485px;width:100%">&nbsp;</div>



      </div>

    </div>
  </div>
</div>
