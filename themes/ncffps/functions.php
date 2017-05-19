<?php 
	define('BLOG_URI', get_template_directory_uri());
	define('BLOG_PATH', get_template_directory());
	define('BLOG_TEXTDOMAIN', 'ncffps');
	
	include(BLOG_PATH . '/includes/functions/functions-theme-support.php');
	include(BLOG_PATH . '/includes/functions/functions-widgets.php');
	include(BLOG_PATH . '/includes/widgets/ncffps-blog.php');
	include(BLOG_PATH . '/includes/widgets/ncffps-newsletter.php');
	include(BLOG_PATH . '/includes/functions/functions-scripts.php');
	include(BLOG_PATH .'/includes/functions/functions-styles.php');
	include(BLOG_PATH .'/includes/functions/functions-cpt.php');