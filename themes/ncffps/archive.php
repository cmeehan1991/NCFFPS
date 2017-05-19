<?php get_header();?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-heading"><?php _e(get_the_title(), BLOG_TEXTDOMAIN); ?></h1>
		</div>
		<div class="row">
			<?php 
				$blog_args = array(
					'post_type', 'ncffps_blog'
				);
				$blog_loop = new WP_Query($blog_args);
				if(have_posts()): while(have_posts()):the_post();
			?>
			<div class="col-sm-12 col-md-4 col-md-offset-1">
				<h2><?php _e(get_the_title(), BLOG_TEXTDOMAIN); ?></h2>
				<p><?php _e(get_the_date(), BLOG_TEXTDOMAIN); ?></p>
				<p><?php _e(get_the_excerpt(), BLOG_TEXTDOMAIN); ?></p>
				<a href="<?php echo get_the_permalink( ); ?>">Read More</a>
			</div>
			<?php endwhile; else: ?>
			<p>Oops...looks like there is nothing here!</p>
			<?php endif;?>
		</div>
	</div>
</div>
<?php get_footer();?>