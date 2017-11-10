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

<section class="container blog-archive wrap push">
	<article class="col-lg-9 col-md-9 col-sm-12<?php if ($src[0]) : ?> post-image<?php endif ; ?>">			
		<?php 
		// make it display 10 posts per page
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = [
			'orderby'        => 'date',
			'posts_per_page' => '10',
			'paged'          => $paged
		];

		$wp_query = null;
		$wp_query = new WP_Query($args);?>
		<?php if ($wp_query->have_posts()) : ?>
		<ul class="blog-list">
			<?php while ($wp_query->have_posts()) : the_post(); ?>
				<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false); ?>
				<li>
					<div class="col-md-6 col-sm-6 col-xs-12 blog-post">
						<?php if ($src) : ?>
						<a href="<?php the_permalink(); ?>"><div class="post-bg" style="background-image: url(<?php echo $src[0]; ?>)"></div></a>
						<?php endif ; ?>

						<a href="<?php the_permalink() ?>"><h3 class="blue-text heading-3"><?php the_title() ?></h3></a>

						<!-- once ACF installed -->
						<span class="blog-author">
							<?php if(get_field('title_author_bio'))  :  ?> <p>By: <?php the_field('title_author_bio') ?></p> 
							<?php endif ; ?>
						</span>
							
						<hr>
						<p><?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></p>
						<div class="blog-post-content">
							<div class="news_dated"><strong><?php echo get_the_date(); ?></strong></div>
						<?php get_excerpt(450, get_the_id()) ?>
						</div>
					</div>
				</li>
			<?php endwhile; ?>
		</ul>
		<div class="pagination-location">
			<?php if ($wp_query->max_num_pages > 1) : ?>
				<?php the_posts_pagination( array(
					'mid_size' => 2,
					'prev_text' => __( 'Previous', 'textdomain' ),
					'next_text' => __( 'Next', 'textdomain' ),
				) ); ?>
			<?php endif; ?>
		</div><!-- pagination-location -->
	  <?php endif; ?>
	</article>
	<?php include  __DIR__ . "/../includes/blog-sidebar.php"; ?>
</section>

<section class="container-fluid search-block">
	<div class="container wrapper">
		<p class="seo-post"><?php the_field('seo_content') ?></p>
	</div>
</section>

<?php get_footer(); ?>








