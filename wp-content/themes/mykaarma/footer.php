<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		<!-- Footer Start -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h2>Contact Us</h2>

						<ul class="contact_us">
							<li><?php echo do_shortcode('[sc name="usaddress"]'); ?></li>

							<li><?php echo do_shortcode('[sc name="indiaaddress"]'); ?></li>
						</ul>
					</div>

					<div class="col-sm-4">
						<?php echo do_shortcode('[contact-form-7 id="62" title="Contact form"]'); ?>
					</div>

					<div class="col-sm-4 quick_link">
						<h2>Quick Links</h2>

						<?php echo do_shortcode('[simple-links]'); ?>

						<div class="ss_box">
							<a target="_blank" href="<?php echo do_shortcode('[sc name=\'fburl\']'); ?>"><span class="fa fa-facebook-f"></span></a>
							<a target="_blank" href="<?php echo do_shortcode('[sc name=\'twitterurl\']'); ?>"><span class="fa fa-twitter"></span></a>
							<a target="_blank" href="<?php echo do_shortcode('[sc name=\'youtubeurl\']'); ?>"><span class="fa fa-youtube"></span></a>
							<a target="_blank" href="<?php echo do_shortcode('[sc name=\'gplusurl\']'); ?>"><span class="fa fa-google-plus"></span></a>
							<a target="_blank" href="<?php echo do_shortcode('[sc name=\'linkedinurl\']'); ?>"><span class="fa fa-linkedin"></span></a>
						</div>
					</div>

					<a href="#" class="go_top"><span class="fa fa-angle-up"></span></a>
				</div>
			</div>
		</div>
		<!-- Footer End -->
	</div>
</div>
<?php get_sidebar('login'); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>


    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.menu-aim.js"></script> <!-- menu aim -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script> <!-- Resource jQuery -->


    <!-- Owl Carousel  -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
		<script>
	$(document).ready(function() {
		$('#toggle').click(function(e) {
			$(this).toggleClass('active');
			$('#overlay').toggleClass('open');
			e.stopPropagation();
		});

		$('#overlay').click(function(e) {
			e.stopPropagation();
		});

		$(document).click(function () {

			$("#toggle").removeClass('active');
			$('#overlay').removeClass('open');
		});



	});
	</script>
    <?php if(is_user_logged_in()) { ?>

	<script>
		$('.login').addClass('hide');
		$('.login').addClass('hidden-sm');
		$('.login').removeClass('visible-xs');
	</script>
<?php }else{ ?>
	<script>
		$('.logout').addClass('hide');
		$('.logout').addClass('hidden-sm');
		$('.login a').attr('data-toggle', 'modal');
		$('.login a').attr('data-target', '#myModal');
	</script>
<?php } ?>
	<script type="text/javascript">
$('.login a').on('click', function() {
	$('.cd-close').trigger('click');

});
 $('.menu-item-has-children').addClass('has-children');
		$('li.has-children > ul').addClass('sub-menu cd-secondary-dropdown is-hidden');
$('li.menu-item-has-children > a').append('&nbsp;<span class="fa fa-caret-down"></span>');
		$(document).ready(function() {

/*	$('#toggle').click(function() {
	   $(this).toggleClass('active');
	   $('#overlay').toggleClass('open');
   });*/



			$("#user_review").owlCarousel(
		  {
			      // Most important owl features
    items : 3,
    itemsCustom : false,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,

			  });


 $('.go_top').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
 });


	 		$(window).resize(function() {
  				var header_hght = $("#header").height();
				$("#main_container").css("padding-top",header_hght);

				/*var sub_nav_wdth = $(".sub_nav").width() + 10;
$(".sub_nav").css({"width":sub_nav_wdth, "float":"none"});*/

 		});
			$(window).resize();

		});

		$(document).scroll(function() {

			if($(window).outerWidth() > 767) {
				var top_pos = $(".sub_nav").offset().top - $("#header").height();
				if( $(this).scrollTop() > top_pos ) {
					$(".head_box").css({"top": "-64px", "left":"0px" , "position":"fixed"});
					$("#main_container").css({"padding-top": "290px"});
				}

				if( $(this).scrollTop() < top_pos ) {
					$(".head_box").css({"top": "", "left": "", "position":"relative"});
					$("#main_container").css({"padding-top": $("#header").height()});
				}
			}

		});
</script>

<?php wp_footer(); ?>

</body>
</html>
