<?php get_header();?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-heading"><?php _e(get_the_title(), BLOG_TEXTDOMAIN); ?></h1>
		</div>
		<div class="row">
			<?php if(have_posts()): while(have_posts()):the_post(); ?>
			<div class="col-sm-12 col-md-6 col-md-offset-3">
				<div class="row">
					<div class="col-md-12">
						<p><span class="blog-author">By: <?php _e(get_the_author(), BLOG_TEXTDOMAIN);?></span><span class="blog-date">Date: <?php _e(get_the_date(), BLOG_TEXTDOMAIN);?></span></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p><?php _e(get_the_content(), BLOG_TEXTDOMAIN); ?></p>
					</div>
				</div>
			</div>
			<?php endwhile; else: ?>
			<p>Oops...looks like there is nothing here!</p>
			<?php endif;?>
		</div>
	</div>
</div>
<?php get_footer();?>