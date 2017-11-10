
<?php if ( isset($_GET['post_type']) ) : ?>

<?php include('date-custom-post-type.php') ?>

<?php else : ?>

<section class="press-releases-archive">
	<div class="">
		<article class="col-md-12 columns<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
			
			<?php
			$type = 'press_releases';
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = [
				'post_type'      => $type,
				'post_status'    => 'publish',
				'orderby'        => 'date',
				'posts_per_page' => '10',
				'paged'          => $paged
			];
			
			$wp_query = null;
			$wp_query = new WP_Query($args);
			if( $wp_query->have_posts() ) : 
			?>
			<ul class="press-list">
			  <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			  	<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
			  	<li>
				  	<div class="press-release-post">
						<?php if ($src) : ?>

						<?php endif ; ?>
						<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
						<hr>
						<div class="post-content">
							<?php get_excerpt(450, get_the_id()) ?>
						</div>
					</div>
			  	</li>
			  <?php endwhile; ?>
			 </ul>
			<?php endif;  ?>
			
			<?php if ($wp_query->max_num_pages > 1) : ?>
				<?php echo the_posts_pagination(); ?>
			<?php endif; ?>
			
			<?php wp_reset_query(); ?>
		
		</article>
    
	</div>
</section>
<?php endif ; ?>
