<!-- Navigation Start -->
<nav class="navbar navbar-default navbar-fixed-top" id="header"> 
	<div class="container-fluid rel_pos"> <!-- Brand and toggle get grouped for better mobile display -->
		<div class="button_container hidden-xs" id="toggle">
			<!--   <span class="top"></span>
			<span class="middle"></span>
			<span class="bottom"></span>
			-->
  
  			<span class="fa fa-ellipsis-h"></span>
  		</div>
		<div class="navbar-header">
			<a id="menu-toggle" class="cd-dropdown-trigger visible-xs navbar-toggle collapsed">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

			</a>
			
			<a href="tel:<?php echo do_shortcode('[sc name=\'phone\']'); ?>" style="color:#ee6e24" class="icon_call_top visible-xs"><?php echo do_shortcode('[sc name="phone"]'); ?><img class="left" src="<?php echo get_template_directory_uri(); ?>/images/icon-call-mob.png" alt="" ></a> 
		</div>  
		
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>

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
		<!--<div class="collapse navbar-collapse bg_nav hidden-xs" id="bs-example-navbar-collapse-1">
			<ul id="menu-main-menu" class="nav navbar-nav">
				<li class="has-children"><a href="#">Features  <span class="fa fa-caret-down"></span></a>
		
					<ul class="sub-menu cd-secondary-dropdown is-hidden">
						<li><a href="meet-the-staff.html">Feature 1</a></li>
						<li><a href="testimonials.html">Feature 2</a></li>
					</ul
				></li>
				<li class="has-children"><a href="#">Products  <span class="fa fa-caret-down"></span></a>
					<ul class="sub-menu cd-secondary-dropdown is-hidden">
						<li><a href="#">Products 1</a></li>
						<li><a href="#">Products 2</a></li>
						<li><a href="#">Products 3</a></li>
					</ul>
				</li>
		
				<li class="has-children"><a href="#">Company  <span class="fa fa-caret-down"></span></a>
					<ul class="sub-menu cd-secondary-dropdown is-hidden">
						<li><a href="#">Company 1</a></li>
						<li><a href="#">Company 2</a></li>
						<li><a href="#">Company 3</a></li>
					</ul>
				</li>
		
				<li><a href="#">Support</a></li>
				<li class="req_link"><a href="#">request a Demo</a></li>
			</ul>
		</div>-->
	
		<div class="overlay" id="overlay">
			<nav class="overlay-menu">
				<ul>
					<li ><a href="<?php echo esc_url( home_url( 'resources/' ) ); ?>">Resources</a></li>
					<li ><a href="<?php echo esc_url( home_url( 'webinars/' ) ); ?>">Webinars</a></li>
					<?php if(is_user_logged_in()) { ?>
					<li><?php echo wp_loginout( $redirect, $echo ); ?> </li>
					<?php } else {
						echo '<li ><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>';
					} ?>
				</ul>
	
				<div class="contact_info">    <span>Call Us Today</span>
				<?php echo do_shortcode('[sc name="phone"]'); ?>
				</div>    

				<a href="<?php echo esc_url( home_url( 'request-a-demo/' ) ); ?>" class="btn btn_orange">request a Demo</a>

				<div class="ss_box">
					<a href="<?php echo do_shortcode('[sc name=\'fburl\']'); ?>"><span class="fa fa-facebook-f"></span></a>
					<a href="<?php echo do_shortcode('[sc name=\'twitterurl\']'); ?>"><span class="fa fa-twitter"></span></a>
					<a href="<?php echo do_shortcode('[sc name=\'youtubeurl\']'); ?>"><span class="fa fa-youtube"></span></a>
					<a href="<?php echo do_shortcode('[sc name=\'gplusurl\']'); ?>"><span class="fa fa-google-plus"></span></a>
					<a href="<?php echo do_shortcode('[sc name=\'linkedinurl\']'); ?>"><span class="fa fa-linkedin"></span></a>
				</div>
			</nav>
		</div>
	
		<div class="cd-dropdown-wrapper visible-xs">
			<nav class="cd-dropdown">
				<a href="#0" class="cd-close">Close</a>
				<?php
					wp_nav_menu( array(
						'menu' => '2',
						'menu_class'     => 'cd-dropdown-content',
						'menu_id'		 => 'menu-main-menu-1',
						'depth'          => 3,
						'container' 	 => false
					));
				?>              
			</nav>
		</div>
	</div>
	<!-- /.navbar-collapse -->  <!-- /.container-fluid -->
</nav>
<!-- Navigation End -->