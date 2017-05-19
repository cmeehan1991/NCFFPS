<?php 
	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */
	function calendar_widget_init() {
	
		register_sidebar( array(
			'name'          => 'Calendar Sidebar - Home Page',
			'id'            => 'calendar_home_sidebar',
			'description' 	=> 'This widget is for the calendar section on the home page.',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="section-subheading">',
			'after_title'   => '</h2>',
		) );
	
	}
	add_action( 'widgets_init', 'calendar_widget_init' );
	
	function recent_posts_widget_init() {
	
		register_sidebar( array(
			'name'          => 'Recent Posts Sidebar - Home Page',
			'id'            => 'recent_posts_home_sidebar',
			'description' 	=> 'This widget is for the recent posts section on the home page.',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="section-subheading">',
			'after_title'   => '</h2>',
		) );
	
	}
	add_action( 'widgets_init', 'recent_posts_widget_init' );
	
	function recent_newsletters_widget_init() {
	
		register_sidebar( array(
			'name'          => 'Newsletter Sidebar - Home Page',
			'id'            => 'newsletter_home_sidebar',
			'description' 	=> 'This widget is for the recent newsletters section on the home page.',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="section-subheading">',
			'after_title'   => '</h2>',
		) );
	
	}
	add_action( 'widgets_init', 'recent_newsletters_widget_init' );