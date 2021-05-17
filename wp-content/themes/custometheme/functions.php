<?php 

	function new_themes_scripts()
	{
		//CSS
		wp_enqueue_style('main_style'.get_stylesheet_uri());
		wp_enqueue_style('aos',get_template_directory_uri().'/assets/vendor/aos/aos.css');
		wp_enqueue_style('bootstrap.min.css',get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap-icons.css',get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css');
		wp_enqueue_style('boxicons.min.css',get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css');
		wp_enqueue_style('glightbox.min.css',get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css');
		wp_enqueue_style('swiper-bundle.min.css',get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css');
		wp_enqueue_style('style.css',get_template_directory_uri().'/assets/css/style.css');

		//Javascripts

		wp_enqueue_script('aos.js',get_template_directory_uri().'/assets/vendor/aos/aos.js',array(),'1.1',true);
		wp_enqueue_script('bootstrap.bundle.min.js',get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',array(),'1.1',true);
		wp_enqueue_script('glightbox.min.js',get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js',array(),'1.1',true);
		wp_enqueue_script('isotope.pkgd.min.js',get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js',array(),'1.1',true);
		wp_enqueue_script('validate.js',get_template_directory_uri().'/assets/vendor/php-email-form/validate.js',array(),'1.1',true);
		wp_enqueue_script('purecounter.js',get_template_directory_uri().'/assets/vendor/purecounter/purecounter.js',array(),'1.1',true);
		wp_enqueue_script('swiper-bundle.min.js',get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js',array(),'1.1',true);
		wp_enqueue_script('typed.min.js',get_template_directory_uri().'/assets/vendor/typed.js/typed.min.js',array(),'1.1',true);
		wp_enqueue_script('noframework.waypoints.js',get_template_directory_uri().'/assets/vendor/waypoints/noframework.waypoints.js',array(),'1.1',true);
		wp_enqueue_script('main.js',get_template_directory_uri().'/assets/js/main.js',array(),'1.1',true);
	}

	add_action("wp_enqueue_scripts","new_themes_scripts");
?>