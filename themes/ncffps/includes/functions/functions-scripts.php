<?php 
	
	function ncffps_jquery(){
		wp_deregister_script('jquery');
		wp_register_script('jquery', BLOG_URI . '/assets/js/jquery-3.1.1.min.js');
		wp_enqueue_script('jquery');
	}
	
	add_action('wp_enqueue_scripts', 'ncffps_jquery');