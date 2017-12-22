<?php 
/**
 * Template Name: Blog
*/
get_header(); ?>

<?php if(get_field('blog_banner') == 'pink-yellow' ): ?>
	<div class="container-fluid pink-yellow">
<?php endif; ?>

<?php if(get_field('blog_banner') == 'yellow-pink' ): ?>
	<div class="container-fluid yellow-pink">
<?php endif; ?>

<?php if(get_field('blog_banner') == 'purple-pink' ): ?>
	<div class="container-fluid purple-pink">
<?php endif; ?>

<?php if(get_field('blog_banner') == 'pink-purple' ): ?>
	<div class="container-fluid pink-purple">
<?php endif; ?>

<?php if(get_field('blog_banner') == 'purple-pink-orange' ): ?>
	<div class="container-fluid purple-pink-orange">
<?php endif; ?>

<?php if(get_field('blog_banner') == 'orange-pink-purple' ): ?>
	<div class="container-fluid orange-pink-purple">
<?php endif; ?>
	
<?php if(get_field('blog_banner') == 'purple-blue' ): ?>
	<div class="container-fluid purple-blue">
<?php endif; ?>
	
<?php if(get_field('blog_banner') == 'blue-purple' ): ?>
	<div class="container-fluid blue-purple">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'green-blue' ): ?>
	<div class="container-fluid green-blue">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'green-yellow' ): ?>
	<div class="container-fluid green-yellow">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'orange-yellow' ): ?>
	<div class="container-fluid orange-yellow">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'yellow-orange' ): ?>
	<div class="container-fluid yellow-orange">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'green-blue-purple' ): ?>
	<div class="container-fluid green-blue-purple">
<?php endif; ?>
		
<?php if(get_field('blog_banner') == 'purple-blue-green' ): ?>
	<div class="container-fluid purple-blue-green">
<?php endif; ?>


<?php include  __DIR__ . "/../includes/page-header.php"; ?>
	<div class="container banner wrap push">
		<div class="banner-wrapper">
			<h1 class="heading-1"><?php the_field('main_blog_title'); ?></h1>
			<div class="banner-btns">
				<a href="<?php the_field('blog_btn_1url'); ?>" class="btn btn-lg btn-width-lg btn-inverse-white orange-text" target="_blank"><?php the_field('blog_btn_1text'); ?></a> 
				<a href="<?php the_field('blog_btn_2url'); ?>" target="_blank" class="btn btn-lg btn-width-lg btn-inverse-white" target="_blank"><?php the_field('blog_btn_2text'); ?></a>
			</div><!-- banner-btns -->
		</div><!-- banner-wrapper -->
	</div><!-- banner -->
</div><!-- container-fluid -->
		
<div class="container-fluid lightGray-bg">
	<div class="container blog-overview-wrapper wrap push">
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blog-post-content">
			<h2 class="heading-border-green green-text">RizePoint Blog</h2>
			<section class="blog-ov-featured-post">
				<article>
					<?php 
						// make it display 1 posts per page
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = [
							'orderby'        => 'date',
							'posts_per_page' => '1',
							'paged'          => $paged,
							'post_status'    => 'publish'
						];

						$wp_query = null;
						$wp_query = new WP_Query($args); ?>
						<?php if ($wp_query->have_posts()) : ?>
							<?php while ($wp_query->have_posts()) : the_post(); ?>
								<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false); ?>

									<div class="featured-blog-post-individual white-bg box-shadow">
										<div class="fbpi-img-wrapper">
											<?php if ($src) : ?>
												<a href="<?php the_permalink(); ?>"><img src="<?php echo $src[0]; ?>" alt="" class="fbpi-img"></a>
											<?php endif ; ?>
											<?php if($src == null || $src == 0) :?>
												<a href="<?php the_permalink(); ?>"><img src="<?php echo ROOT; ?>/assets/img/blog/backup-blog.png" alt="" class="fbpi-img"></a>
											<?php endif; ?>
										</div>
										<div class="fbpi-details">
											<a href="<?php the_permalink() ?>"><h3 class="blue-text heading-3"><?php the_title() ?></h3></a>
											<span class="blog-author">
												<?php if(get_field('title_author_bio'))  :  ?> <p>By: <?php the_field('title_author_bio') ?></p> 
												<?php endif ; ?>
											</span>
											<span class="share-social-blog">
												<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
											</span>
										</div>
									</div><!-- featured-blog-post-individual -->

							<?php endwhile; ?>
						<?php endif; ?>
				</article>
			</section>
			
			<section>

				<!-- load articles with AJAX | Pulling from blog-content-loader.php -->
				<div id="article_load_more"></div>
				
			</section>
			
		</div><!-- blog-post-content -->
		<div class="blog-post-sidebar">
			<?php include  __DIR__ . "/../includes/blog-sidebar.php"; ?>
		</div><!-- blog-post-sidebar -->
	</div><!-- blog-overview-wrapper -->
</div>
		
<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<!-- add ajax script -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/blog-ajax.js"></script>

<?php get_footer(); ?>








