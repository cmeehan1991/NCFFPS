<?php get_header();?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-heading"><?php _e(get_the_title(), BLOG_TEXTDOMAIN); ?></h1>
		</div>
	</div>
	<?php if(have_posts()): while(have_posts()):the_post();?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<span class="page-content">
				<?php the_content(); ?>
			</span>
		</div>
	</div>
	<?php endwhile; else: ?>
	<div class="row">
		<div class="col-md-12">
			<p class="page-content">Oops...it looks like there is nothing here!</p>
		</div>
	</div>
	<?php endif;?>
</div>

<?php get_footer();?>