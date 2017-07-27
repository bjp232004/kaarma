<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="<?php echo get_template_directory_uri(); ?>/css/menu.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/menu-right.css">
<!-- Owl Carousel Assets -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container-fluid">
	<div class="row">
		<!-- Banner Start -->
		<div class="bg_banner">
			<?php get_template_part( 'template-parts/navigation/navigation', 'menu' ); ?>