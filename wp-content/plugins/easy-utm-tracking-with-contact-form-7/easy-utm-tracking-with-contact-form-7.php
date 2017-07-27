<?php
/**
 * Plugin Name: Easy UTM tracking with contact form 7
 * Plugin URI: http://decorumsol.com
 * Description: This plugin adds UTM tracking code to your contact form 7 based on js cookies.
 * Version: 1.0.1
 * Author: Basir Mukhtar
 * Author URI: http://basirmukhtar.com
 */

 
 /**
 * adding script to catch utm and store them to cookies
 */
	wp_enqueue_script('utm_contact_form7_scripts', plugin_dir_url(__FILE__) . 'js/ucf7_scripts.js',  array(), 'version', true);
	
	
	add_action('wpcf7_before_send_mail', 'wpcf7_update_email_body');

	function wpcf7_update_email_body($contact_form) {
	  $submission = WPCF7_Submission::get_instance();
	  //print_r($submission);
	  //exit;
	  if ( $submission ) {
		//getting utm variables from js cookie.
		$cookies = $_COOKIE['_deco_utmz'];
		$all_utm = explode("|", $cookies);
		
		$email_utm = '';
		if(isset($all_utm)){
			$email_utm .= '<table border="1" style="border-collapse:collapse; width:50%;">';
			$email_utm .= '<tr><td>utm_source:</td><td>'. $all_utm[0] .'</td></tr>';
			$email_utm .= '<tr><td>utm_medium:</td><td>'. $all_utm[1] .'</td></tr>';
			$email_utm .= '<tr><td>utm_term:</td><td>'. $all_utm[2] .'</td></tr>';
			$email_utm .= '<tr><td>utm_content:</td><td>'. $all_utm[4] .'</td></tr>';
			$email_utm .= '<tr><td>utm_campaign</td><td>'. $all_utm[3] .'</td></tr>';
			$email_utm .='</table>';
		}
		
		$mail = $contact_form->prop('mail');
		$mail['body'] .= '<p><strong>UTM Parameters:</strong></p>'. $email_utm;
		$mail['use_html'] = 1;
		$contact_form->set_properties(array('mail' => $mail));
	  }
	}
	
