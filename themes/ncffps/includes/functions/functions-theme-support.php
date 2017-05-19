<?php 
	// add theme support for thumbnails
	add_theme_support('post-thumbnails');
	
	// Add support for a custom header
	$headers = array(
		'firefighters' => array(
			'url' => '%s/img/headers/firefighters.jpg',
			'thumbnail_url' => BLOG_URI . '/includes/img/headers/firefighters.jpg',
			'description' => __('Firefighters', BLOG_TEXTDOMAIN)
		)
	);
	register_default_headers( $headers );
	
	$defaults = array(
		'default-image' => '',
		'flex-width' => true, 
		'flex-height' => true,
		'header-text' => true
		
	);
	add_theme_support('custom-header', $defaults);
	
	
	// Custom logo
	$logo = array(
		'height' => 100, 
		'width' => 100,
		'flex-height' => true,
		'flex-width' => true,
	);
	
	add_theme_support('custom-logo', $logo);
	
	// Title tag - wp_title();
	add_theme_support('title-tag');
	
	// Adding nav menus
	register_nav_menus(
		array(
			'main-navigation' => __('Main Navigation'),
			'first-footer' => __("Footer - 1"),
			'second-footer' => __("Footer - 2"),
			'third-footer' => __("Footer - 3"),
		)
	);
	
	// Add CPT to menu
	