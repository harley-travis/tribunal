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

<style>
	.small-header {
    padding-bottom: 50px;
}
</style>

<div class="container-fluid yellow-pink small-header">
	<?php include  __DIR__ . "/includes/page-header.php"; ?>
</div>

<div class="container indie-blog">
	<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12 blog-post-content">
		<?php while (have_posts()) : the_post(); ?>
		<h1 class="green-text"><?php the_title() ?></h1>
		<span class="blog-author">Written by: <?php the_author(); ?></span>
		<div class="news_dated_side"><?php echo get_the_date(); ?></div>
		
			<div class="blog-content">
				<?php the_content('[...]'); ?> 
			</div><!-- blog-content -->
		
		<?php endwhile; ?>
	</div><!-- blog-post-content -->

	<div class="blog-post-sidebar">
	<?php include  __DIR__ . "/includes/blog-sidebar.php"; ?>
	</div><!-- blog-post-sidebar -->	
</div><!-- indie-blog -->


<div class="container">
	<a href="" class="btn btn-green">Back To Posts</a>
	</div>

<?php get_footer(); ?>