<footer class="footer">
	<div class="container-fluid">
		<?php if(is_home()): ?>
		<div class="row footer-vision">
			<div class="col-md-2 col-md-offset-4">
				<h1>OUR VISION</h1>
			</div>
			<div class="col-md-6">
				<p><?php _e(get_the_excerpt(49), BLOG_TEXTDOMAIN); ?> <a href="<?php get_the_permalink( 1 ); ?>">Read More</a></p>
			</div>
		</div>
		<?php endif; ?>
		<div class="row footer-middle">
			<div class="col-md-6 col-md-offset-3">
				<div class="row">
					<div class="col-md-3">
						<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
								$logo_image = wp_get_attachment_image_src($custom_logo_id);
								?>
						<img src="<?php echo $logo_image[0]; ?>"/>
					</div>
					<div class="col-md-3 footer-information">
						<h2><?php _e(wp_get_nav_menus(  )[0]->name, BLOG_TEXTDOMAIN);?></h2>
						<?php 
							$first_menu_args = array(
							'menu' => 'first-footer',
							'menu_class' => 'footer-menu'
							); 
							wp_nav_menu($first_menu_args);
						?>
					</div>
					<div class="col-md-3 footer-information">
						<h2><?php _e(wp_get_nav_menus(  )[1]->name, BLOG_TEXTDOMAIN);?></h2>
						<?php 
							$second_menu_args = array(
							'menu' => 'second-footer',
							'menu_class' => 'footer-menu'
							); 
							wp_nav_menu($second_menu_args);
						?>
					</div>
					<div class="col-md-3 footer-information">
						<h2><?php _e(wp_get_nav_menus(  )[2]->name, BLOG_TEXTDOMAIN);?></h2>
						<?php 
							$third_menu_args = array(
							'menu' => 'third-footer',
							'menu_class' => 'footer-menu'
							); 
							wp_nav_menu($third_menu_args);
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="row footer-bottom">
			<div class="col-md-6 col-md-offset-3">
				<div class="row">
					<div class="col-md-6">
						<h5>&copy; 2017 NCFFPS.org. All rights reserved. 501(c)3 and registered charity in the state of North Carolina.</h5>
					</div>
					<div class="col-md-3 col-md-offset-3">
						<p>Follow us on </p>
					</div>
				</div>
			</div>
		</div>

	</div>	
</footer>
<?php wp_footer();?>
</body>
</html>