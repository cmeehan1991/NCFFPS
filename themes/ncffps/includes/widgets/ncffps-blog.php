<?php
class ncffps_blog_widget extends WP_Widget{
	
	function __construct(){
		parent::__construct(
			
			// Base ID of widget
			'ncffps_blog_widget',
			
			// Widget name that will appear in the UI
			__(get_bloginfo('title') . ' Blog Posts', BLOG_TEXTDOMAIN),
			
			// Widget Description
			array('description' => __('This is where your custom blog posts will be displayed', BLOG_TEXTDOMAIN))
		);
	}
	
	// Create the front-end
	public function widget($args, $instance){
		$title = apply_filters('widget_title', $instance['title']);
		$post_count = $instance['post_count'];
		
		// Before and after widget arguments are defined by the theme
		echo $args['before_widget'];
		if(!empty($title)){
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
		// Display the output 
		$blog_args = array(
			'post_type' => 'ncffps_blog',
			'posts_per_page' => $instance['post_count']
		);
		$blog_loop = new WP_Query($blog_args);
		if($blog_loop->have_posts(  )): ?> <ul class="newsletters"> <?php  while($blog_loop->have_posts(  )):$blog_loop->the_post();	
	?>
		<li>
			<h3 class="excerpt-title"><?php _e(get_the_title(), BLOG_TEXTDOMAIN);?></h3>
			<?php if(has_post_thumbnail( )): ?> <img class="excerpt-thumbnail" src="<?php echo the_post_thumbnail_url( array(100, 100 )); ?>"/> <?php endif;?>
			<p class="excerpt-content"><?php _e(get_the_excerpt(), BLOG_TEXTDOMAIN); ?><a href="<?php echo the_permalink();?>">Read More</a></p>
		</li>
	<?php endwhile; ?> </ul> <?php  else: ?>
		<p>Opps! It looks like there are no posts right now!</p>
	<?php endif; 
	
	echo $args['after_widget'];
	}
	
	// Widget backend
	public function form($instance){
		if(isset($instance['title'])){
			$title = $instance['title'];
		}else{
			$title = __('New Title', BLOG_TEXTDOMAIN);
		}
		if(isset($instance['post_count'])){
			$post_count = $instance['post_count'];
		}else{
			$post_count = __('5', BLOG_TEXTDOMAIN);
		}
		
		// Widget admin form 
		?>
		<p>
			<lable for="<?php echo $this->get_field_id('title');?>"><?php _e('Title:');?></lable>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title);?>" />
		</p>
		<p>
			<lable for="<?php echo $this->get_field_id('title');?>"><?php _e('Display:');?></lable>
			<input class="widefat" id="<?php echo $this->get_field_id('post_count'); ?>" name="<?php echo $this->get_field_name('post_count'); ?>" type="number" value="<?php echo esc_attr($post_count);?>" />
		</p>
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update($new_instance, $old_instance){
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		$instance['post_count'] = (!empty($new_instance['post_count'])) ? strip_tags($new_instance['post_count']) : '';
		return $instance;
	}
}

function ncffps_load_widget(){
	register_widget('ncffps_blog_widget');
}
add_action('widgets_init', 'ncffps_load_widget');

