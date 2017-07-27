<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<br class="clear"><br class="clear">
<!-- Home page content Start -->
<div class="container">
<div class="row cnt_home error_page">

<br>
<br>

<h1><span>404 Page not found</span>
Sorry but the page that you are looking for does not exist...

</h1>
<p>Double check the URL or head back to the <a href="<?php echo ROOT_PATH; ?>">homepage</a>. <br>

If you continue to get this page, email us at <a href="mailto:info@mykaarma.com">info@mykaarma.com</a></p>
<br>

  <div class="col-sm-5 flt_none center-block">
  
  <div class="form-group  rel_pos">
	  <form action="<?php echo ROOT_PATH; ?>">
  <input type="text" class="form-control search_text_box" name="s" placeholder="Search here..."><button class="btn btn_blue btn_search"><span class="fa fa-search"></span></button>
  </form>
  </div>
  
  </div>
  
  
  

</div>

</div>
<!-- Home page content Start -->


 

 
<br class="clear">
 

<?php get_footer();
