<?php 
/**
 *
 * The main template file
 *
 * @link https://rizepoint.com
 * @package WordPress
 * @subpackage RizePoint
 * @since RizePoint 1.0
 *
 */

get_header(); ?>

<div class="container-fluid green-blue small-header">
	<?php include  __DIR__ . "/includes/page-header.php"; ?>
</div>

<article class="container indie-blog">
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blog-post-content">
		<?php while (have_posts()) : the_post(); ?>
			<h1 class="green-text post-title"><?php the_title() ?></h1>
			<span class="blog-post-author">
				<?php if(get_field('title_author_bio'))  :  ?> <span>By: <?php the_field('title_author_bio') ?></span> <br>
				<?php endif ; ?><span class="news_dated_side">Published <?php echo get_the_date(); ?></span>
			</span>

			<div class="featured-post-img-wrapper">
				<?php the_post_thumbnail(array()); ?>
			</div>
			
			
			<div class="blog-content">
				<?php the_content('[...]'); ?> 
			</div><!-- blog-content -->
		<?php endwhile; ?>
		
		<?php if(get_field('author_bio_description'))  :  ?>
			<div class="container authorBio">
				<div class="authorBio-wrapper">
					<div class=""><h4><?php the_field('title_author_bio') ?></h4></div>
					<div class="">
						<div class="col-lg-3 col-sm-6 col-xs-12 authorImg"><img src="<?php the_field('bioauthoer_img') ?>" alt="" class="bio-img"></div>
						<div class="col-lg-9 col-sm-6 col-xs-12 authorDesc">
							<p class="athDesc"><?php the_field('author_bio_description') ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php endif ; ?>
	</div><!-- blog-post-content -->

	<div class="blog-post-sidebar">
		<?php include  __DIR__ . "/includes/blog-sidebar.php"; ?>
	</div><!-- blog-post-sidebar -->	
</article><!-- indie-blog -->



<?php get_footer(); ?>