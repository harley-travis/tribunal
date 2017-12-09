<?php 
/**
 * Template Name: Newsroom
*/
get_header(); ?>

<div class="container-fluid purple-blue-green">
	<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_header'); ?></h1>
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->

<?php include  __DIR__ . "/../includes/newsroom-nav.php"; ?>

<div class="container indie-blog">
   <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blog-post-content">
    <div class="tabs-content">
        <div class="newsroom-content-block" id="panel1">
            <!-- PRESS RELEASE -->
            <section class="press-releases-archive">
                   <h2 class="press-release-class orangeOne-text"><a href="<?php echo ROOT_URL; ?>/press_releases/" class="orangeOne-text">Press Releases</a></h2>
                    <article class="<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
						<section class="press-releases-archive">
							<article class="col-md-12 columns<?php if ($src[0]) : ?> post-image<?php endif ; ?>">

								<?php
								$type = 'press_releases';
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = [
									'post_type'      => $type,
									'post_status'    => 'publish',
									'orderby'        => 'date',
									'posts_per_page' => '3',
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
								<?php endif;  ?>
								<?php if ($wp_query->max_num_pages > 1) : ?>
								<?php endif; ?>
								<?php wp_reset_query(); ?>
							</article>
						</section>
                    </article>
            </section>
        </div><!-- panel1 -->      
    </div><!-- tabs-content --> 
    
	<div class="tabs-content">
        <div class="newsroom-content-block" id="panel1">
            <!-- PRESS RELEASE -->
            <section class="press-releases-archive">
            	<h2 class="orange-text press-release-class pink-text"><a href="<?php echo ROOT_URL; ?>/blog" class="pink-text">Blog</a></h2>
                    <article class="<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
						<section class="press-releases-archive">
							<article class="col-md-12 columns<?php if ($src[0]) : ?> post-image<?php endif ; ?>">

								<?php
								$type = 'post';
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = [
									'post_type'      => $type,
									'post_status'    => 'publish',
									'orderby'        => 'date',
									'posts_per_page' => '3',
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
											<a href="<?php the_permalink() ?>"><h4 class="pink-text heading-3"><?php the_title() ?></h4></a>
											<div class="col-md-2 date-display">
												<?php echo get_the_date('M, j, Y'); ?>
											</div>
											<div class="col-md-10 post-content">
												<?php get_excerpt(450, get_the_id()) ?>
											</div>
										</div>

								  <?php endwhile; ?>
								 </ul>
								<?php endif;  ?>

								<?php if ($wp_query->max_num_pages > 1) : ?>
								<?php endif; ?>
								<?php wp_reset_query(); ?>
							</article>
						</section>
                    </article>
            </section>
        </div><!-- panel1 -->
    </div><!-- tabs-content --> 
    
	<div class="tabs-content">
        <div class="newsroom-content-block" id="panel1">
            <!-- PRESS RELEASE -->
            <section class="press-releases-archive">
				<h2 class="press-release-class purple-text"><a href="<?php echo ROOT_URL; ?>/in-the-news" class="purple-text">News</a></h2>
                    <article class="<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
						<section class="press-releases-archive">
								<article class="col-md-12 columns<?php if ($src[0]) : ?> post-image<?php endif ; ?>">
									<?php
										$type = 'News';
										$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
										$args = [
											'post_type'      => $type,
											'post_status'    => 'publish',
											'orderby'        => 'date',
											'posts_per_page' => '3',
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
												<a href="<?php the_permalink() ?>"><h4 class="purple-text heading-3"><?php the_title() ?></h4></a>
												<div class="col-md-2 date-display">
													<?php echo get_the_date('M, j, Y'); ?>
												</div>
												<div class="col-md-10 post-content">
													<?php get_excerpt(450, get_the_id()) ?>
												</div>
											</div>
									  <?php endwhile; ?>
									 </ul>
									<?php endif;  ?>
									<?php wp_reset_query(); ?>
								</article>
						</section>
                    </article>  
            </section>
        </div><!-- panel1 -->
    </div><!-- tabs-content --> 
   
	<div class="tabs-content">
		<div class="newsroom-content-block" id="panel1">
			<!-- PRESS RELEASE -->
			<section class="press-releases-archive">
			   <h2 class="orange-text press-release-class blue-text"><a href="<?php echo ROOT_URL; ?>/awards" class="blue-text">Awards</a></h2>
					<section class="clients-loop wrap push">	
						<div class="clients-loop-wrapper">		
							<?php if( have_rows('the_awards') ) : ?>
								<?php while( have_rows('the_awards') ) : the_row() ?>
									<div class="col-md-4 col-sm-6 col-xs-12 awards-box-wrapper">
										<div class="award-sec-wrapper customer-logo">
											<a href="<?php the_sub_field('award_link'); ?>">
												<img src="<?php the_sub_field('award_image'); ?>" class="customerLogo-img awards-img" alt="">
											</a>
										</div><!-- award image -->
										<div class="client-name">
											<h4 class="heading-4">
												<a href="<?php the_sub_field('award_link'); ?>"><?php the_sub_field('award_name'); ?></a>
											</h4>
										</div><!-- client name -->
										<p><?php the_sub_field('award_date');?></p>
									</div><!-- client box wrapper -->	
								<?php endwhile; ?>
							<?php endif; ?>
						</div><!-- clients-loop-wrapper -->
					</section><!-- clients-loop -->
				</section>
			</div><!-- panel1 -->
		</div><!-- tabs-content --> 
  
	</div><!-- blog-post-content -->
	
	<div class="blog-post-sidebar">
		<?php include  __DIR__ . "/../includes/blog-sidebar.php"; ?>
	</div><!-- blog-post-sidebar -->
	
	
</div><!-- indie-blog -->
   
    

    

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>


<?php get_footer(); ?>
