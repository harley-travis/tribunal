<aside class="sidebar col-lg-3 col-md-3 col-sm-12" role="complementary">
	<div class="press-loop">
	<h3 class="green-text">Press Releases</h3>
	<?php 
		$type = 'press_releases';
		$args = array( 
						'post_type'     => $type,
						'post_status'   => 'publish',
						'showposts'     => 5, 
						'orderby'       => 'date',
						'paged'         => $paged,
					 );
		  
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		  
		<ul>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
		</ul>
		
		<?php endwhile; ?>
	</div><!-- press-post -->

	<div class="blog-categories">
		<h3 class="green-text">Categories </h3>
		<ul>
			<?php wp_list_categories('show_count=1&title_li='); ?>
		</ul>
	</div><!-- categories -->

	<?php wp_reset_query(); ?>

</aside>