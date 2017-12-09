<?php 
/**
 * Template Name: New Press Release Template
*/
get_header(); ?>

<div class="container-fluid yellow-pink">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<?php include  __DIR__ . "/../includes/newsroom-nav.php"; ?>

	<div class="tabs-content container">
	<div class="content active blog-post-content" id="panel1">
		<!-- PRESS RELEASE -->
		<section class="col-lg-9 col-md-9 col-sm-12 col-xs-12 press-releases-archive">

			<div class="">
			   <h2 class="press-release-class orangeOne-text">Press Releases</h2>
				<article class="<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
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

										<div class="press-release-post">
											<?php if ($src) : ?>

											<?php endif ; ?>
											<a href="<?php the_permalink() ?>"><h4 class="orangeOne-text heading-3"><?php the_title() ?></h4></a>
											<div class="col-md-2 date-display">
												<?php echo get_the_date('M, j, Y'); ?>
											</div>
											<div class="col-md-10 post-content">
												<?php get_excerpt(450, get_the_id()) ?>
											</div>
										</div>

								  <?php endwhile; ?>
								 </ul>
								
								<?php //echo paginate_links(); ?>
								
								<div class="pagination-location">
									<?php if ($wp_query->max_num_pages > 1) : ?>
										<?php the_posts_pagination( array(
											'post_type'      => $type,
											'mid_size' => 3,
											'prev_text' => __( 'Previous', 'textdomain' ),
											'next_text' => __( 'Next', 'textdomain' ),
											'paged' => $paged
										) ); ?>
									<?php endif; ?>
								</div><!-- pagination-location -->
								
								
								<?php endif;  ?>

								

								<?php wp_reset_query(); ?>

							</article>
						</div>

					</section>
				</article>
			</div>

		</section>

	<div class="blog-post-sidebar">
		<?php include  __DIR__ . "/../includes/blog-sidebar.php"; ?>
	</div><!-- blog-post-sidebar -->
	</div><!-- panel1 -->

</div><!-- tabs-content -->	
	
	


<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>








