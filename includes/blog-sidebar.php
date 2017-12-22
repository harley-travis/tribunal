<aside class="sidebar col-lg-3 col-md-3 col-sm-12" role="complementary">
<div class="media-contact-sb">
	<h3 class="green-text">Media Contact</h3>
	<span>Whitney McCarthy</span><br>
	<i>Communications Manager</i><br>
	<a href="mailto:pr@rizepoint.com" target="_blank">pr@rizepoint</a>
</div>
	
	<div class="press-loop">
	<h3 class="green-text"><a href="/press_releases" class="green-text">Press Releases</a></h3>
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

	<?php wp_reset_query(); ?>

</aside>