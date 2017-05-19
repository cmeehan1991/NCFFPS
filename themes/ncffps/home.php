<?php get_header();?>
<div class="header">
	<h1 class="header-title"><?php bloginfo('title'); ?></h1>
	<img class="header-image" src='<?php header_image(); ?>' />
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<p>North Carolina Firefighter Peer Support is defined as assistance provided by a trained individual or group of trained firefighters and emergency responders who answer the call to their brothers and sisters in need, regardless of the need.</p>
			<p>
				Based on the Illinois Firefighter Peer Support Team.
				<ul>
					<li>Listen</li>
					<li>Relate</li>
					<li>Validate</li>
				</ul>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="section-header">In the News</h1>
			<div class="row">
				<div class="col-md-4">
					<?php dynamic_sidebar('newsletter_home_sidebar'); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar('recent_posts_home_sidebar'); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar("calendar_home_sidebar"); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>