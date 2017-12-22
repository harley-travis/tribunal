<?php 
define('WP_USE_THEMES', false);
require_once(dirname(__FILE__).'/../../../../wp-load.php');

// variables
$numPosts = (isset($_GET['numPosts'])) ? $_GET['numPosts'] : 0;
$page	  = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;

// the arguments
$args = [
	'posts_per_page' => $numPosts,
	'paged'			 => $page,
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'orderby'        => 'date'
	
];

	$wp_query = null;
	$wp_query = new WP_Query($args);
	if( $wp_query->have_posts() ) :  ?>

		
		  <?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

				<article class="more-blogs-ajax blog-overview-list">
					<div class="blog-overview-post-wrapper">
						<div class="col-md-4 col-sm-3 col-xs-12 blog-overview-img-wrapper">
							<?php if ($src) : ?>
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $src[0]; ?>" alt="" class="blog-overview-img"></a>
							<?php endif ; ?>
						</div><!-- blog-overview-img-wrapper -->
						<div class="col-md-8 col-sm-9 col-xs-12 blog-overview-details">
							<a href="<?php the_permalink() ?>">
								<h4 class="green-text heading-4"><?php the_title() ?></h4>
								<h5 class="purple-text heading-5 blog-ov-h5"><i>By <?php the_author(); ?></i></h5>
							</a>
							
							<div class="post-content">
								<?php get_excerpt(450, get_the_id()) ?>
							</div>
						</div><!-- blog-overview-details -->
					</div><!-- blog-overview-post-wrapper -->
				</article>

		  <?php endwhile; ?>
	<?php endif;  ?>

<?php wp_reset_query(); ?>
