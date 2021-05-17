<?php 
/*
Plugin Name: Contact Us Form
Description: Just another contact form plugin. Simple but flexible.
Author: Qazi Farhan
Version: 1.0
*/

//require_once(plugin_dir_path(__FILE__).'/includes/contact-us-form-script.php');

// This enables debugging.
define( 'WP_DEBUG', true );

function contact_us_form()
{
	$content = '';
	/*$content .= '<h2>Contact Us!</h2>';
	$content .= '<form action="http://localhost/wordpress/thank-you/" method="post">';
	$content .= '<label>Name</label>';
	$content .= '<input type="text" name="name" class="form-control" placeholder="Example input">';
	$content .= '<label>Email ID</label>';
	$content .= '<input type="email" name="email" class="form-control" placeholder="Example input">';
	$content .= '<label>Message</label>';
	$content .= '<textarea class="form-control is-invalid" name="message" placeholder="Required example textarea" ></textarea>';
	$content .= '<br><input type="submit" name="submit_data" class="btn btn-primary value="Submit">';
	$content .= '</form>';*/

	$content .= '<form  method="post" role="form" class="php-email-forms">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>';

	return $content;
}

add_shortcode("contact_us_from","contact_us_form");

function submit_data_capture()
{
	// echo "<pre>";
	// print_r($_REQUEST);
	// echo "</pre>";
	// exit();
	/*if (isset($_REQUEST['submit_data']))
	{*/
		$name = sanitize_text_field($_REQUEST['name']);
		$email = sanitize_text_field($_REQUEST['email']);
		$subject = sanitize_text_field($_REQUEST['subject']);
		$message = sanitize_textarea_field($_REQUEST['message']);

		$to = "qazifarhan14@gmail.com";
		$subject = "This is email send by wordpress plugin";
		$messages = $name.'===>'.$email.'===>'.$message;

		global $wpdb;
		$wpdb->insert("wp_contact_us_form_data",array('name' =>$name ,'email' =>$email,'subject' =>$subject,'message'=>$message ));
		wp_mail($to,$subject,$messages);
		//wp_mail("qazifarhan14@gmail.com","THis","Hello");

	//}
}

add_action('wp_head','submit_data_capture');
?>