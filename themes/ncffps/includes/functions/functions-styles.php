<?php 
	
	add_action('wp_enqueue_scripts', 'ncffps_bootstrap');
	function ncffps_bootstrap(){
		wp_enqueue_script('bootstrap-script', BLOG_URI . '/assets/bootstrap/bootstrap.min.js', array('jquery'), false);
		wp_enqueue_style('bootstrap-style', BLOG_URI . '/assets/bootstrap/bootstrap.min.css');
	}
	
	add_action('wp_enqueue_scripts','ncffps_styles');
	function ncffps_styles(){
		wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/8664ad4451.js', array('jquery'));
		wp_enqueue_style('global-style', BLOG_URI . '/includes/css/styles-global.css');
		wp_enqueue_style('header-style', BLOG_URI . '/includes/css/styles-header.css');
		wp_enqueue_style('footer-style', BLOG_URI . '/includes/css/styles-footer.css');
		wp_enqueue_style('home-style', BLOG_URI . '/includes/css/styles-home.css');
		wp_enqueue_style('page-style', BLOG_URI . '/includes/css/styles-page.css');
		wp_enqueue_style('blog-style', BLOG_URI . '/includes/css/styles-blog.css');
	}
	