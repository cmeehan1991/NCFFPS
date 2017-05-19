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
				if($blog_loop->have_posts()): while($blog_loop->have_posts()):$blog_loop->the_post();
			?>
			<div class="col-sm-12 col-md-6">
			</div>
			<?php endwhile; else: ?>
			<p>Oops...looks like there is nothing here!</p>
			<?php endif;?>
		</div>
	</div>
</div>
<?php get_footer();?>