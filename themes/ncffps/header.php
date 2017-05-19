<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title('|', true, 'right'); bloginfo( 'title' );?></title>
		<?php wp_head();?>
	</head>
	<body>
		<nav class=" navbar contact-nav hidden-sm hidden-xs">
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="tel:800-555-5555" class="contact-toll-free">Call Toll Free 800-555-SUPPORT</a></li>
					<li><a href="contact">Contact Us</a></li>
				</ul>
			</div>
		</nav>
		<nav class="navbar">
			<div class="container-fluid">
				<div class="navbar-header">
				 	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
			        	<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo_image = wp_get_attachment_image_src($custom_logo_id);
						?>
					<a class="navbar-brand" href="<?php echo bloginfo('url');?>"><?php if(has_custom_logo()): ?><img class='hidden-xs hidden-sm brand-image' src='<?php echo $logo_image[0]; ?>'/> <span class="hidden-md hidden-lg brand-title">NCFFPS</span><?php else: _e(bloginfo( 'title'), BLOG_TEXTDOMAIN); endif;?></a>
				</div>
				<?php wp_nav_menu(array(
					'menu' => 'Main Navigation',
					'menu_class' => 'nav navbar-nav navbar-right',
					'container' => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'main-navbar'
					));
				?>
				
			</div>
		</nav>
		