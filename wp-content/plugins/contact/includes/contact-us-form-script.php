<?php

function contact_add_script()
{
	wp_enqueue_style('contact-main-style',plugins_url().'/contact/css/style.css');

	wp_enqueue_script('contact-main-script',plugins_url().'/contact/js/main.js');
}

add_action('wp_enqueue_scripts','contact_add_script');
?>