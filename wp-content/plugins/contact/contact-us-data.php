<?php 

//require_once(plugin_dir_path(__FILE__).'/includes/contact-us-form-script.php');

// This enables debugging.
define( 'WP_DEBUG', true );

function submit_data_capture()
{
	/*echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";*/
	/*if (isset($_REQUEST['submit_data']))
	{*/
		$name = sanitize_text_field($_REQUEST['name']);
		$email = sanitize_text_field($_REQUEST['email']);
		$message = sanitize_textarea_field($_REQUEST['message']);

		$to = "qazifarhan14@gmail.com";
		$subject = "This is email send by wordpress plugin";
		$message = $name.'===>'.$email.'===>'.$message;

		global $wpdb;
		$wpdb->insert("wp_contact_us_form_data",array('name' =>$name ,'email' =>$email,'message'=>$message ));
		//wp_mail($to,$subject,$message);
		//wp_mail("qazifarhan14@gmail.com","THis","Hello");

	//}
}

add_action('wp_head','submit_data_capture');
?>