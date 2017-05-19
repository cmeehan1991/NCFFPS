<?php 
	add_action('init', 'ncffps_blog_post_type');
	function ncffps_blog_post_type(){
		register_post_type('ncffps_blog', 
		array(
			'labels' => array(
				'name' => __('NCFFPS Blog'),
				'singular_name' => __('NCFFPS Blog'),
				'menu_name' => 'NCFFPS Blog'
			),
			'public' => true, 
			'has_archive' => true,
			'rewrite' => array('slug' => 'blog'),
			'menu_position' => 5,
			'hierarchical' => true,
			'supports' => array(
				'title' => true,
				'editor' => true,
				'author' => true,
				'thumbnail' => true,
				'custom-fields' => true,
				'comments' => true,
				'revisions' => true
			),
			'taxonomies' => array('category'),
			'has_archive' => true,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'show_in_menu' => true,
			'show_in_nav_menus' => true
		));
	}
	
	add_action('init', 'ncffps_newsletter_post_type');
	function ncffps_newsletter_post_type(){
		register_post_type('ncffps_newsletter', 
		array(
			'labels' => array(
				'name' => __('NCFFPS News Letter'),
				'singular_name' => __('News Letter')
			),
			'public' => true, 
			'has_archive' => true,
			'rewrite' => array('slug' => 'newsletter'),
			'menu_position' => 5,
			'hierarchical' => true,
			'supports' => array(
				'title' => true,
				'editor' => true,
				'author' => true,
				'thumbnail' => true,
				'custom-fields' => true,
				'comments' => true,
				'revisions' => true
			),
			'taxonomies' => array('category'),
			'has_archive' => true,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		));
	}