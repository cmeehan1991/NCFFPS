<?php 
	/*
	* Template Name: Calendar Page
	*/
	get_header();
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-heading"><?php _e(get_the_title(), BLOG_TEXTDOMAIN);?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php if(have_posts(  )): while(have_posts(  )): the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; else: ?>
			<p>Oops...it looks like there is nothing here!</p>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer();