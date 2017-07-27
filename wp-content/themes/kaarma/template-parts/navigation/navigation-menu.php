<!-- Navigation Start -->
<!-- Navigation Start -->
<nav class="navbar navbar-default navbar-fixed-top" id="header"> 
	<div class="container-fluid rel_pos"> <!-- Brand and toggle get grouped for better mobile display -->
		<div class="button_container hidden-xs" id="toggle">
			<span class="fa fa-ellipsis-h"></span>
		</div>

		<div class="navbar-header">
			<a id="menu-toggle" class="cd-dropdown-trigger visible-xs navbar-toggle collapsed">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
		</div>  
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img class="img-responsive hidden-xs hidden-sm" src="/wp-content/uploads/2016/01/cropped-logo_my-light-2.png" alt="myKaarma" />
			<img class="mobile-logo visible-xs visible-sm" src="<?php echo get_template_directory_uri(); ?>/images/mobilelogo.png" alt="myKaarma" />	
		</a>

		<div class="contact_info_top_desk">
			<span class="hidden-xs call_text"><span>Call or Text Us</span> <br>
			<span style="color:#ed6d23"><?php echo do_shortcode('[sc name="phone"]'); ?></span>
			</span>

			<span class="hidden-xs call_text"><span>Call Support</span> <br>
			<span style="color:#ed6d23">(562) 349 - 1367</span>
			</span>
        </div>

		<a href="tel:(562) 287 - 5527" class="contact_info_top visible-xs"><span class="visible-xs left"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-call-mob.png" alt="" > </span> &nbsp; <span class="display_inline">Call/Text</span></a>
      

		<a href="#" class="hide contact_info_top">
			<span class="hidden-xs">Call or Text Us </span>
			<span class="visible-xs left"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-call-mob.png" alt="" > </span>
			<span class="hidden-xs"><?php echo do_shortcode('[sc name="phone"]'); ?></span> &nbsp; Call/Text
		</a>

		<div class="over_lay"></div>
		<div class="view_contact_mobile">
			<p class="contact_dtl_phone"><span >Sales</span>
				<?php echo do_shortcode('[sc name="phone"]'); ?>
				<a href="tel:<?php echo do_shortcode('[sc name=\'phone\']'); ?>" class="right"><img src="<?php echo get_template_directory_uri(); ?>/images/icn-phone-white.png" alt=""></a>
				<a href="sms:<?php echo do_shortcode('[sc name=\'phone\']'); ?>" class="right"><img src="<?php echo get_template_directory_uri(); ?>/images/icn-chat-white.png" alt=""></a>
			</p>

			<p class="contact_dtl_phone"><span >Support</span>
				(562) 349-1367
				<a href="tel:(562) 349-1367" class="right"><img src="<?php echo get_template_directory_uri(); ?>/images/icn-phone-white.png" alt=""></a>
			</p>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<?php
			wp_nav_menu( array(
				'menu' => '2',
				'menu_class'     => 'nav navbar-nav',
				'menu_id'		 => 'menu-main-menu',
				'container_class'=> 'collapse navbar-collapse bg_nav hidden-xs',
				'container_id'   => 'bs-example-navbar-collapse-1',
				'depth'          => 3
			));
		?>

		<div class="overlay" id="overlay">
			<nav class="overlay-menu">
				<ul>
					<!-- <li ><a href="<?php echo esc_url( home_url( 'resources/' ) ); ?>">Resources</a></li> -->
					<!-- <li ><a href="<?php echo esc_url( home_url( 'webinars/' ) ); ?>">Webinars</a></li> -->

					<li class="menu-item menu-item-type-post_type menu-item-object-page visible-md visible-lg" onclick="ga('send', 'event', 'btn', 'clicked', 'nav_login_md-lg');window.open('https://kaar-ma.com/administration/')" style="margin-right:15pt;margin-left:-10pt">
						<a href="javascript:void(0)"><i class="fa fa-sign-in" aria-hidden="true" style="margin-right:7pt"></i>Login</a>
					</li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page visible-xs visible-sm" onclick="ga('send', 'event', 'btn', 'clicked', 'nav_login_xs-sm');window.open('https://kaar-ma.com/administration/')" style="margin-right:15pt;margin-left:-10pt">
						<a href="javascript:void(0)"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
					</li>
					<!-- <?php if(is_user_logged_in()) { ?>
					<li><?php echo wp_loginout( $redirect, $echo ); ?> </li>
					<?php } else {
						echo '<li ><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>';
					} ?> -->
				</ul>

				<div class="contact_info"><span>Call Us Today</span>
					<a href="te:<?php echo do_shortcode('[sc name="phone"]'); ?>"><?php echo do_shortcode('[sc name="phone"]'); ?></a>
				</div>

				<a href="<?php echo esc_url( home_url( 'request-a-demo/' ) ); ?>" class="btn btn_orange">request a Demo</a>

				<div class="ss_box">
					<a class="fb" target="_blank" href="<?php echo do_shortcode('[sc name=\'fburl\']'); ?>"><span class="fa fa-facebook-f"></span></a>
					<a class="tw" target="_blank" href="<?php echo do_shortcode('[sc name=\'twitterurl\']'); ?>"><span class="fa fa-twitter"></span></a>
					<!-- <a target="_blank" href="<?php echo do_shortcode('[sc name=\'youtubeurl\']'); ?>"><span class="fa fa-youtube"></span></a> -->
					<!-- <a target="_blank" href="<?php echo do_shortcode('[sc name=\'gplusurl\']'); ?>"><span class="fa fa-google-plus"></span></a> -->
					<a class="li" target="_blank" href="<?php echo do_shortcode('[sc name=\'linkedinurl\']'); ?>"><span class="fa fa-linkedin"></span></a>
				</div>
			</nav>
		</div>

		<div class="cd-dropdown-wrapper visible-xs">
			<nav class="cd-dropdown">
				<a href="#0" class="cd-close">Close</a>
				<ul id="menu-main-menu-1" class="cd-dropdown-content">
					<?php
						wp_nav_menu( array(
							'menu' => '2',
							'menu_class'     => 'cd-dropdown-content',
							'menu_id'		 => 'menu-main-menu-1',
							'depth'          => 3,
							'container' 	 => false,
							'items_wrap'	 => '%3$s'
						));
					?>
					<li ><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
					<br class="clear">
					<br>

					<div class="contact_info  class="visible-xs"">    <span>Call Us Today</span>
						(310) 982-7707<br>
						<br>
						<a href="#" class="btn btn_orange visible-xs">request a Demo</a>


						<div class="ss_box visible-xs">
							<a class="fb" target="_blank" href="<?php echo do_shortcode('[sc name=\'fburl\']'); ?>"><span class="fa fa-facebook-f"></span></a>
							<a class="tw" target="_blank" href="<?php echo do_shortcode('[sc name=\'twitterurl\']'); ?>"><span class="fa fa-twitter"></span></a>
							<!-- <a target="_blank" href="<?php echo do_shortcode('[sc name=\'youtubeurl\']'); ?>"><span class="fa fa-youtube"></span></a> -->
							<!-- <a target="_blank" href="<?php echo do_shortcode('[sc name=\'gplusurl\']'); ?>"><span class="fa fa-google-plus"></span></a> -->
							<a class="li" target="_blank" href="<?php echo do_shortcode('[sc name=\'linkedinurl\']'); ?>"><span class="fa fa-linkedin"></span></a>

						</div>
					</div>    
	
				</ul>
			</nav>
		</div>
	</div>
	<!-- /.navbar-collapse -->  <!-- /.container-fluid -->
</nav>